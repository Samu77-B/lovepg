<?php
/**
 * Secure Configuration File
 * 
 * IMPORTANT: This file contains sensitive information.
 * Ensure it is protected by .htaccess and never committed to public repositories.
 * 
 * Last Updated: 2026-01-14
 */

// Prevent direct access
if (!defined('SECURE_CONFIG_LOADED')) {
    define('SECURE_CONFIG_LOADED', true);
}

// RSS2JSON API Key (moved from client-side JavaScript for security)
define('RSS_API_KEY', '5qtycuykjsnu76gacakplr7chiaqfily7jcmshgf');

// API Configuration
define('RSS_API_URL', 'https://api.rss2json.com/v1/api.json');

// Security: Validate HTTP_HOST against allowed domains
function validateHost() {
    $allowedHosts = [
        'lovepalmersgreen.com',
        'www.lovepalmersgreen.com',
        'localhost',
        '127.0.0.1'
    ];
    
    $host = $_SERVER['HTTP_HOST'] ?? '';
    $host = strtolower($host);
    
    // Remove port if present
    if (strpos($host, ':') !== false) {
        $host = substr($host, 0, strpos($host, ':'));
    }
    
    // Allow localhost for development
    if (in_array($host, $allowedHosts) || strpos($host, 'localhost') !== false) {
        return true;
    }
    
    // Log suspicious host access attempts
    error_log("Security: Invalid host access attempt: " . $host);
    return false;
}

// Validate and sanitize REQUEST_URI
function sanitizeRequestUri($uri) {
    // Remove null bytes
    $uri = str_replace("\0", '', $uri);
    
    // Remove dangerous characters
    $uri = preg_replace('/[^\w\s\-\.\/\?=&:]/', '', $uri);
    
    // Limit length
    if (strlen($uri) > 2048) {
        $uri = substr($uri, 0, 2048);
    }
    
    return $uri;
}
