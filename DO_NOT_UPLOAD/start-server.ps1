cd "$PSScriptRoot"
$port = 8080

# Try PHP first
$phpPath = Get-Command php -ErrorAction SilentlyContinue
if ($phpPath) {
    Write-Host "Starting PHP server on port $port..."
    php -S localhost:$port
} else {
    # Try Python
    $pythonPath = Get-Command python -ErrorAction SilentlyContinue
    if ($pythonPath) {
        Write-Host "Starting Python server on port $port..."
        python -m http.server $port
    } else {
        # Try Node.js
        $nodePath = Get-Command node -ErrorAction SilentlyContinue
        if ($nodePath) {
            Write-Host "Starting Node.js server on port $port..."
            npx -y http-server -p $port
        } else {
            Write-Host "No server found. Please install PHP, Python, or Node.js"
        }
    }
}
