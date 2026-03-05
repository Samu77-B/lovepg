<!-- Header Component for Love Palmers Green -->
<style>
/* Critical Header Styles - Inline to ensure they load */
#main-header.site-header {
  position: fixed !important;
  top: 0 !important;
  left: 0 !important;
  right: 0 !important;
  width: 100% !important;
  background-color: #222222 !important;
  z-index: 99999 !important;
  padding: 0 !important;
  margin: 0 !important;
  box-shadow: 0 2px 8px rgba(0,0,0,0.3) !important;
  box-sizing: border-box !important;
}
#main-header .header-inner {
  display: flex !important;
  flex-direction: row !important;
  justify-content: space-between !important;
  align-items: center !important;
  width: 100% !important;
  max-width: 100% !important;
  margin: 0 auto !important;
  padding: 12px 30px !important;
  box-sizing: border-box !important;
}
#main-header .header-logo-link {
  display: block !important;
  flex: 0 0 auto !important;
  margin: 0 !important;
  padding: 0 !important;
  text-decoration: none !important;
}
#main-header .header-logo-img {
  display: block !important;
  max-height: 45px !important;
  height: 45px !important;
  width: auto !important;
  margin: 0 !important;
  padding: 0 !important;
}
#main-header .hamburger-btn {
  display: flex !important;
  flex-direction: column !important;
  justify-content: center !important;
  align-items: center !important;
  width: 44px !important;
  height: 44px !important;
  padding: 8px !important;
  margin: 0 !important;
  background: transparent !important;
  border: none !important;
  cursor: pointer !important;
  z-index: 100000 !important;
  flex: 0 0 auto !important;
  gap: 6px !important;
}
#main-header .hamburger-line {
  display: block !important;
  width: 28px !important;
  height: 3px !important;
  background-color: #ffffff !important;
  border-radius: 2px !important;
  transition: all 0.3s ease !important;
}
#main-header .hamburger-btn.active .hamburger-line:nth-child(1) {
  transform: rotate(45deg) translate(6px, 6px) !important;
}
#main-header .hamburger-btn.active .hamburger-line:nth-child(2) {
  opacity: 0 !important;
}
#main-header .hamburger-btn.active .hamburger-line:nth-child(3) {
  transform: rotate(-45deg) translate(6px, -6px) !important;
}
#main-header .mobile-menu {
  display: none !important;
  flex-direction: column !important;
  background: linear-gradient(to bottom, #444444, #333333, #222222) !important;
  width: 100% !important;
  padding: 0 !important;
  margin: 0 !important;
  box-shadow: 0 4px 10px rgba(0,0,0,0.3) !important;
}
#main-header .mobile-menu.active {
  display: flex !important;
}
#main-header .mobile-menu-link {
  display: block !important;
  color: #ffffff !important;
  text-decoration: none !important;
  padding: 15px 30px !important;
  font-weight: 500 !important;
  font-size: 1em !important;
  border-bottom: 1px solid rgba(255,255,255,0.1) !important;
  transition: background-color 0.2s ease !important;
}
#main-header .mobile-menu-link:last-child {
  border-bottom: none !important;
}
#main-header .mobile-menu-link:hover {
  background-color: rgba(255,255,255,0.1) !important;
}
#main-header.scrolled {
  background-color: rgba(34, 34, 34, 0.95) !important;
  backdrop-filter: blur(10px) !important;
}
@media (max-width: 768px) {
  #main-header .header-inner {
    padding: 10px 20px !important;
  }
  #main-header .header-logo-img {
    max-height: 38px !important;
    height: 38px !important;
  }
}
@media (max-width: 480px) {
  #main-header .header-inner {
    padding: 8px 15px !important;
  }
  #main-header .header-logo-img {
    max-height: 32px !important;
    height: 32px !important;
  }
  #main-header .hamburger-btn {
    width: 38px !important;
    height: 38px !important;
  }
  #main-header .hamburger-line {
    width: 24px !important;
  }
}
</style>

<header id="main-header" class="site-header">
  <div class="header-inner">
    <!-- Logo - Left -->
    <a href="index.php" class="header-logo-link">
      <img src="images/LPG_2025_Long_logo_White03.png" alt="Love Palmers Green Logo" class="header-logo-img">
    </a>
    
    <!-- Hamburger - Right -->
    <button id="hamburger-btn" class="hamburger-btn" aria-label="Toggle menu" aria-expanded="false">
      <span class="hamburger-line"></span>
      <span class="hamburger-line"></span>
      <span class="hamburger-line"></span>
    </button>
  </div>
  
  <!-- Mobile Menu -->
  <nav id="mobile-menu" class="mobile-menu" aria-hidden="true">
    <a href="index.php" class="mobile-menu-link">Home</a>
    <a href="history.php" class="mobile-menu-link">History</a>
    <a href="the-commitee.php" class="mobile-menu-link">Committee</a>
    <a href="our-vision.php" class="mobile-menu-link">Vision</a>
  </nav>
</header>
