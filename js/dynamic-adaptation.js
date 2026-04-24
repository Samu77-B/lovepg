/* Dynamic Environmental Adaptation
   - Themes via :root[data-theme='light'|'dim'|'midnight']
   - AmbientLightSensor lux mapping (if supported)
   - Battery/Save-Data low power mode disables heavy animations/transitions
   - Fallback to prefers-color-scheme
   - Manual override (if a theme toggle exists) persists for session
*/

(function () {
  const root = document.documentElement;
  const THEME_KEY = 'lpg_theme_override';
  const AUTO_KEY = 'lpg_theme_auto';

  function clampTheme(theme) {
    return theme === 'light' || theme === 'dim' || theme === 'midnight' ? theme : null;
  }

  function prefersFallbackTheme() {
    try {
      const prefersDark = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
      return prefersDark ? 'midnight' : 'light';
    } catch {
      return 'light';
    }
  }

  function setTheme(theme, source) {
    const t = clampTheme(theme);
    if (!t) return;
    root.dataset.theme = t;
    if (source === 'auto') sessionStorage.setItem(AUTO_KEY, t);
  }

  function getOverrideTheme() {
    return clampTheme(sessionStorage.getItem(THEME_KEY));
  }

  function setOverrideTheme(theme) {
    const t = clampTheme(theme);
    if (!t) return;
    sessionStorage.setItem(THEME_KEY, t);
    setTheme(t, 'manual');
  }

  function clearOverrideTheme() {
    sessionStorage.removeItem(THEME_KEY);
  }

  // Apply earliest possible theme (manual override > last auto > system)
  (function initThemeEarly() {
    const override = getOverrideTheme();
    if (override) return setTheme(override, 'manual');
    const lastAuto = clampTheme(sessionStorage.getItem(AUTO_KEY));
    if (lastAuto) return setTheme(lastAuto, 'auto');
    setTheme(prefersFallbackTheme(), 'fallback');
  })();

  // Battery saving / Save-Data support
  function computeLowPower(battery) {
    const saveData = !!(navigator.connection && navigator.connection.saveData);
    const lowBattery = !!(battery && typeof battery.level === 'number' && battery.level <= 0.15 && !battery.charging);
    return saveData || lowBattery;
  }

  function applyLowPower(isLowPower) {
    root.classList.toggle('low-power', !!isLowPower);
  }

  async function initBatteryLowPower() {
    try {
      if (!navigator.getBattery) {
        applyLowPower(!!(navigator.connection && navigator.connection.saveData));
        return;
      }
      const battery = await navigator.getBattery();
      const update = () => applyLowPower(computeLowPower(battery));
      update();
      battery.addEventListener('levelchange', update);
      battery.addEventListener('chargingchange', update);
      if (navigator.connection && navigator.connection.addEventListener) {
        navigator.connection.addEventListener('change', update);
      }
    } catch {
      // If anything fails, default to not forcing low-power.
      applyLowPower(false);
    }
  }

  // Ambient light logic (manual override wins for session)
  function themeFromLux(lux) {
    if (typeof lux !== 'number' || !isFinite(lux)) return null;
    if (lux > 1000) return 'light';
    if (lux < 10) return 'midnight';
    // Covers 10–1000 inclusive; spec asked Dim: 50–1000, but 10–50 also maps best to dim
    return 'dim';
  }

  function initAmbientLight() {
    const override = getOverrideTheme();
    if (override) return; // manual override for the session

    if (!('AmbientLightSensor' in window)) {
      setTheme(prefersFallbackTheme(), 'fallback');
      return;
    }

    try {
      // Some browsers require secure context + permissions; failures fall back.
      const sensor = new window.AmbientLightSensor();
      sensor.addEventListener('reading', () => {
        const theme = themeFromLux(sensor.illuminance);
        if (theme && !getOverrideTheme()) setTheme(theme, 'auto');
      });
      sensor.addEventListener('error', () => {
        if (!getOverrideTheme()) setTheme(prefersFallbackTheme(), 'fallback');
      });
      sensor.start();
    } catch {
      if (!getOverrideTheme()) setTheme(prefersFallbackTheme(), 'fallback');
    }
  }

  // Manual override hooks:
  // - If a button exists with id="theme-toggle" OR [data-theme-toggle], it cycles themes.
  // - Optional: [data-theme-clear] clears override (back to auto).
  function initManualToggle() {
    const toggles = Array.from(document.querySelectorAll('#theme-toggle, [data-theme-toggle]'));
    const clears = Array.from(document.querySelectorAll('[data-theme-clear]'));
    if (toggles.length === 0 && clears.length === 0) return;

    const order = ['light', 'dim', 'midnight'];
    const cycle = () => {
      const current = clampTheme(root.dataset.theme) || prefersFallbackTheme();
      const next = order[(order.indexOf(current) + 1) % order.length];
      setOverrideTheme(next);
    };

    toggles.forEach((el) => el.addEventListener('click', cycle));
    clears.forEach((el) =>
      el.addEventListener('click', () => {
        clearOverrideTheme();
        initAmbientLight();
      })
    );
  }

  document.addEventListener('DOMContentLoaded', () => {
    initBatteryLowPower();
    initAmbientLight();
    initManualToggle();
  });
})();

