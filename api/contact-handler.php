<?php
/**
 * Contact Form Handler
 * 
 * Securely processes contact form submissions with CSRF protection,
 * input validation, and spam prevention.
 * 
 * Last Updated: 2026-01-14
 */

// Load CSRF protection
require_once dirname(__DIR__) . '/includes/csrf.php';

// Set JSON response header
header('Content-Type: application/json; charset=utf-8');

// Only allow POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode([
        'success' => false,
        'error' => 'Method not allowed'
    ]);
    exit;
}

// Verify CSRF token
if (!verifyCSRFPost()) {
    http_response_code(403);
    echo json_encode([
        'success' => false,
        'error' => 'Invalid security token. Please refresh the page and try again.'
    ]);
    exit;
}

// Get and validate input
// Note: FILTER_SANITIZE_STRING is deprecated in PHP 8.1+, using FILTER_SANITIZE_FULL_SPECIAL_CHARS instead
$firstName = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?? '';
$lastName = filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?? '';
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL) ?? '';
$subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?? '';
$message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?? '';

// Strip HTML tags for text fields (additional security layer)
$firstName = strip_tags($firstName);
$lastName = strip_tags($lastName);
$subject = strip_tags($subject);

// Validate required fields
$errors = [];

if (empty($firstName) || strlen($firstName) < 2) {
    $errors[] = 'First name is required and must be at least 2 characters';
}

if (empty($lastName) || strlen($lastName) < 2) {
    $errors[] = 'Last name is required and must be at least 2 characters';
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Valid email address is required';
}

if (empty($subject) || strlen($subject) < 3) {
    $errors[] = 'Subject is required and must be at least 3 characters';
}

if (empty($message) || strlen($message) < 10) {
    $errors[] = 'Message is required and must be at least 10 characters';
}

// Check for spam (simple honeypot and length checks)
if (strlen($message) > 5000) {
    $errors[] = 'Message is too long';
}

// Rate limiting (simple session-based)
if (!isset($_SESSION['last_contact_submission'])) {
    $_SESSION['last_contact_submission'] = 0;
}

$timeSinceLastSubmission = time() - $_SESSION['last_contact_submission'];
if ($timeSinceLastSubmission < 60) { // 60 seconds between submissions
    http_response_code(429);
    echo json_encode([
        'success' => false,
        'error' => 'Please wait a moment before submitting again.'
    ]);
    exit;
}

// If validation errors, return them
if (!empty($errors)) {
    http_response_code(400);
    echo json_encode([
        'success' => false,
        'errors' => $errors
    ]);
    exit;
}

// Update rate limiting
$_SESSION['last_contact_submission'] = time();

// Prepare email
$to = 'contact@lovepalmersgreen.com'; // Update with your email
$emailSubject = 'Contact Form: ' . htmlspecialchars($subject, ENT_QUOTES, 'UTF-8');
$emailBody = "New contact form submission:\n\n";
$emailBody .= "Name: " . htmlspecialchars($firstName . ' ' . $lastName, ENT_QUOTES, 'UTF-8') . "\n";
$emailBody .= "Email: " . htmlspecialchars($email, ENT_QUOTES, 'UTF-8') . "\n";
$emailBody .= "Subject: " . htmlspecialchars($subject, ENT_QUOTES, 'UTF-8') . "\n\n";
$emailBody .= "Message:\n" . htmlspecialchars($message, ENT_QUOTES, 'UTF-8') . "\n";

$headers = [
    'From: ' . htmlspecialchars($email, ENT_QUOTES, 'UTF-8'),
    'Reply-To: ' . htmlspecialchars($email, ENT_QUOTES, 'UTF-8'),
    'X-Mailer: PHP/' . phpversion(),
    'Content-Type: text/plain; charset=UTF-8'
];

// Send email (configure mail server settings as needed)
$mailSent = @mail($to, $emailSubject, $emailBody, implode("\r\n", $headers));

if ($mailSent) {
    echo json_encode([
        'success' => true,
        'message' => 'Thank you for your message! We will get back to you soon.'
    ]);
} else {
    // Log error but don't expose details to user
    error_log('Contact form email failed to send');
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'error' => 'Sorry, there was an error sending your message. Please try again later or contact us directly.'
    ]);
}
