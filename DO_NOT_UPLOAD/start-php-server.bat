@echo off
echo Starting PHP Server...
echo.

REM Find Laragon PHP
set PHP_PATH=
for /d %%i in ("C:\laragon\bin\php\php*") do (
    if exist "%%i\php.exe" (
        set PHP_PATH=%%i\php.exe
        goto :found
    )
)

:found
if "%PHP_PATH%"=="" (
    echo ERROR: Could not find PHP in Laragon installation.
    echo Please make sure Laragon is installed at C:\laragon
    pause
    exit /b 1
)

echo Using PHP: %PHP_PATH%
echo.
echo Server starting on http://localhost:8080
echo Press Ctrl+C to stop the server
echo.

cd /d "%~dp0"
"%PHP_PATH%" -S localhost:8080
