<?php
/**
 * PHP Version Checker
 * 
 * This file checks if your PHP version is up to date and secure.
 * Access this file via browser to see your current PHP version status.
 * 
 * SECURITY: Delete this file after checking, or protect it with .htaccess
 * 
 * Last Updated: 2026-01-14
 */

// Prevent caching
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Version Check - Love Palmers Green</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: #f5f5f5;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            border-bottom: 3px solid #8bc34a;
            padding-bottom: 10px;
        }
        .status {
            padding: 15px;
            margin: 15px 0;
            border-radius: 5px;
            border-left: 5px solid;
        }
        .status.ok {
            background: #d4edda;
            border-color: #28a745;
            color: #155724;
        }
        .status.warning {
            background: #fff3cd;
            border-color: #ffc107;
            color: #856404;
        }
        .status.error {
            background: #f8d7da;
            border-color: #dc3545;
            color: #721c24;
        }
        .info {
            background: #e7f3ff;
            padding: 15px;
            border-radius: 5px;
            margin: 15px 0;
        }
        code {
            background: #f4f4f4;
            padding: 2px 6px;
            border-radius: 3px;
            font-family: 'Courier New', monospace;
        }
        ul {
            line-height: 1.8;
        }
        .footer {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #ddd;
            color: #666;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>PHP Version Security Check</h1>
        
        <?php
        $currentVersion = PHP_VERSION;
        $currentMajor = PHP_MAJOR_VERSION;
        $currentMinor = PHP_MINOR_VERSION;
        $currentRelease = PHP_RELEASE_VERSION;
        
        // Latest stable versions (as of January 2026)
        $latestVersions = [
            '8.2' => '8.2.30',
            '8.3' => '8.3.17',
            '8.4' => '8.4.4'
        ];
        
        // Check if version is supported
        $isSupported = false;
        $latestVersion = null;
        $status = 'error';
        $message = '';
        
        if ($currentMajor == 8) {
            if (isset($latestVersions["$currentMajor.$currentMinor"])) {
                $latestVersion = $latestVersions["$currentMajor.$currentMinor"];
                $isSupported = version_compare($currentVersion, $latestVersion, '>=');
                
                if ($isSupported) {
                    $status = 'ok';
                    $message = "Your PHP version ($currentVersion) is up to date!";
                } else {
                    $status = 'warning';
                    $message = "Your PHP version ($currentVersion) is outdated. Latest version is $latestVersion";
                }
            } else {
                $status = 'error';
                $message = "Your PHP version ($currentVersion) is not a supported release branch.";
            }
        } else {
            $status = 'error';
            $message = "Your PHP version ($currentVersion) is not supported. PHP 8.2+ is required.";
        }
        ?>
        
        <div class="status <?php echo $status; ?>">
            <strong>Status:</strong> <?php echo $message; ?>
        </div>
        
        <div class="info">
            <h3>Current PHP Information:</h3>
            <ul>
                <li><strong>Version:</strong> <code><?php echo $currentVersion; ?></code></li>
                <li><strong>Major Version:</strong> <code><?php echo $currentMajor; ?></code></li>
                <li><strong>Minor Version:</strong> <code><?php echo $currentMinor; ?></code></li>
                <li><strong>Release Version:</strong> <code><?php echo $currentRelease; ?></code></li>
                <li><strong>SAPI:</strong> <code><?php echo php_sapi_name(); ?></code></li>
                <li><strong>Server Software:</strong> <code><?php echo $_SERVER['SERVER_SOFTWARE'] ?? 'Unknown'; ?></code></li>
            </ul>
        </div>
        
        <?php if ($status !== 'ok'): ?>
        <div class="info">
            <h3>⚠️ Action Required:</h3>
            <p>Your PHP version needs to be updated for security reasons. Here's what you need to do:</p>
            <ol>
                <li><strong>Contact your hosting provider</strong> or server administrator</li>
                <li><strong>Request PHP update</strong> to version <?php echo $latestVersion ?? '8.2.30 or higher'; ?></li>
                <li><strong>Test your website</strong> after the update to ensure compatibility</li>
                <li><strong>Delete this file</strong> (<code>check-php-version.php</code>) after checking</li>
            </ol>
            
            <h4>Why Update?</h4>
            <ul>
                <li>Security patches for known vulnerabilities</li>
                <li>Performance improvements</li>
                <li>Bug fixes</li>
                <li>Better compatibility with modern web standards</li>
            </ul>
            
            <h4>Known Vulnerabilities in Older Versions:</h4>
            <ul>
                <li><strong>CVE-2025-1220:</strong> Medium-severity improper input validation (fixed in 8.2.29)</li>
                <li><strong>CVE-2025-1217:</strong> Medium-severity HTTP header parsing vulnerability (fixed in 8.2.28)</li>
                <li><strong>CVE-2025-1861:</strong> Critical buffer size calculation vulnerability (fixed in 8.2.28)</li>
            </ul>
        </div>
        <?php endif; ?>
        
        <div class="info">
            <h3>PHP Support Schedule:</h3>
            <ul>
                <li><strong>PHP 8.2:</strong> Security support until December 31, 2026</li>
                <li><strong>PHP 8.3:</strong> Security support until December 31, 2027</li>
                <li><strong>PHP 8.4:</strong> Security support until December 31, 2028</li>
            </ul>
        </div>
        
        <div class="footer">
            <p><strong>Security Note:</strong> This file should be deleted or protected after checking your PHP version.</p>
            <p>For more information, visit: <a href="https://www.php.net/supported-versions.php" target="_blank">PHP Supported Versions</a></p>
        </div>
    </div>
</body>
</html>
