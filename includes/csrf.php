<?php
/**
 * CSRF Protection Functions
 * 
 * Provides CSRF token generation and validation
 * 
 * Last Updated: 2026-01-14
 */

// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

/**
 * Generate CSRF token
 * @return string CSRF token
 */
function generateCSRFToken() {
    if (!isset($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

/**
 * Validate CSRF token
 * @param string $token Token to validate
 * @return bool True if valid, false otherwise
 */
function validateCSRFToken($token) {
    if (!isset($_SESSION['csrf_token'])) {
        return false;
    }
    return hash_equals($_SESSION['csrf_token'], $token);
}

/**
 * Get CSRF token field HTML
 * @return string HTML input field with CSRF token
 */
function getCSRFTokenField() {
    $token = generateCSRFToken();
    return '<input type="hidden" name="csrf_token" value="' . htmlspecialchars($token, ENT_QUOTES, 'UTF-8') . '">';
}

/**
 * Verify CSRF token from POST request
 * @return bool True if valid, false otherwise
 */
function verifyCSRFPost() {
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        return false;
    }
    
    $token = $_POST['csrf_token'] ?? '';
    return validateCSRFToken($token);
}
