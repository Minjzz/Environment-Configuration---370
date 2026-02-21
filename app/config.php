<?php
require_once __DIR__ . '/../EnvLoader.php';

// Load environment file
EnvLoader::load(__DIR__ . '/../.env');

// Application Settings
define('APP_ENV', getenv('APP_ENV'));
define('APP_DEBUG', getenv('APP_DEBUG') === 'true');

// Database Settings
define('DB_HOST', getenv('DB_HOST'));
define('DB_NAME', getenv('DB_NAME'));
define('DB_USER', getenv('DB_USER'));
define('DB_PASS', getenv('DB_PASS'));

// Error Handling Based on Environment
if (APP_DEBUG) {
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
} else {
    ini_set('display_errors', 0);
    error_reporting(0);
}
