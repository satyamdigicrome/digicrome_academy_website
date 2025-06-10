<?php

// This runs only once when someone visits dc.com

// Detect the visitor's IP address
$ip = $_SERVER['REMOTE_ADDR'] ?? '';

// Get geolocation data from ip-api.com
$geoData = @json_decode(file_get_contents("http://ip-api.com/json/{$ip}"), true);

// Default to India if geo lookup fails
$country = $geoData['countryCode'] ?? 'IN';

// If visitor is from India, load the main Laravel app
if ($country === 'IN') {
    require_once __DIR__ . '/public/index.php';
} else {
    require_once __DIR__ . '/us';
}

exit;
