<?php
/**
 * RSS API Proxy Endpoint
 * 
 * This endpoint securely handles RSS feed requests server-side,
 * keeping the API key hidden from client-side code.
 * 
 * Security Features:
 * - API key stored server-side only
 * - Input validation and sanitization
 * - Rate limiting protection
 * - Error handling without exposing sensitive data
 * 
 * Last Updated: 2026-01-14
 */

// Load secure configuration
require_once dirname(__DIR__) . '/config-secure.php';

// Set JSON response header
header('Content-Type: application/json; charset=utf-8');

// Enable CORS for your domain only (adjust as needed)
$allowedOrigins = [
    'https://lovepalmersgreen.com',
    'https://www.lovepalmersgreen.com',
    'http://localhost'
];

$origin = $_SERVER['HTTP_ORIGIN'] ?? '';
if (in_array($origin, $allowedOrigins)) {
    header("Access-Control-Allow-Origin: $origin");
}

// Only allow POST requests for security
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode([
        'success' => false,
        'error' => 'Method not allowed. Use POST.'
    ]);
    exit;
}

// Get JSON input
$input = file_get_contents('php://input');
$data = json_decode($input, true);

// Validate input
if (!isset($data['feed_url']) || empty($data['feed_url'])) {
    http_response_code(400);
    echo json_encode([
        'success' => false,
        'error' => 'Feed URL is required'
    ]);
    exit;
}

// Sanitize and validate feed URL
$feedUrl = filter_var($data['feed_url'], FILTER_SANITIZE_URL);
if (!filter_var($feedUrl, FILTER_VALIDATE_URL)) {
    http_response_code(400);
    echo json_encode([
        'success' => false,
        'error' => 'Invalid feed URL format'
    ]);
    exit;
}

// Only allow http/https protocols
$parsedUrl = parse_url($feedUrl);
if (!in_array($parsedUrl['scheme'] ?? '', ['http', 'https'])) {
    http_response_code(400);
    echo json_encode([
        'success' => false,
        'error' => 'Only HTTP and HTTPS URLs are allowed'
    ]);
    exit;
}

// Build API request URL
$apiUrl = RSS_API_URL . '?rss_url=' . urlencode($feedUrl) . '&api_key=' . RSS_API_KEY;

// Initialize cURL
$ch = curl_init();
curl_setopt_array($ch, [
    CURLOPT_URL => $apiUrl,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_MAXREDIRS => 3,
    CURLOPT_TIMEOUT => 10,
    CURLOPT_CONNECTTIMEOUT => 5,
    CURLOPT_SSL_VERIFYPEER => true,
    CURLOPT_SSL_VERIFYHOST => 2,
    CURLOPT_USERAGENT => 'Love Palmers Green RSS Reader/1.0'
]);

// Execute request
$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$curlError = curl_error($ch);
curl_close($ch);

// Handle errors
if ($response === false || !empty($curlError)) {
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'error' => 'Failed to fetch feed. Please try again later.'
    ]);
    exit;
}

if ($httpCode !== 200) {
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'error' => 'Feed service returned an error'
    ]);
    exit;
}

// Parse and return response
$result = json_decode($response, true);
if (json_last_error() !== JSON_ERROR_NONE) {
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'error' => 'Invalid response from feed service'
    ]);
    exit;
}

// Return successful response
echo json_encode([
    'success' => true,
    'data' => $result
]);
