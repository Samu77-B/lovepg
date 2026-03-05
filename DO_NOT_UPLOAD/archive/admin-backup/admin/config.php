<?php
// Database configuration
define('DB_NAME', 'u556329104_lpg_stories');
define('DB_USER', 'u556329104_lpg_user');
define('DB_PASS', '$OYPnT75'); // Replace with your real password
define('DB_HOST', 'localhost'); // Unless Hostinger specifies a different host, 'localhost' is usually correct

// Create database connection
function getDBConnection() {
    try {
        $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch(PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }
}

// Enable CORS for AJAX requests (only for API calls)
if (!headers_sent()) {
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
    header('Access-Control-Allow-Headers: Content-Type');
    header('Content-Type: application/json');
}
?> 