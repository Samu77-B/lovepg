@echo off
cd /d "%~dp0"
echo Starting server on port 8080...
echo.

REM Try PHP first
where php >nul 2>&1
if %errorlevel% == 0 (
    echo Using PHP server...
    php -S localhost:8080
    goto :end
)

REM Try Python
where python >nul 2>&1
if %errorlevel% == 0 (
    echo Using Python server...
    python -m http.server 8080
    goto :end
)

REM Try Node.js http-server
where node >nul 2>&1
if %errorlevel% == 0 (
    echo Using Node.js http-server...
    npx --yes http-server -p 8080
    goto :end
)

echo ERROR: No server found!
echo Please install one of the following:
echo   - PHP (from php.net)
echo   - Python (from python.org)
echo   - Node.js (from nodejs.org)
echo.
pause

:end
