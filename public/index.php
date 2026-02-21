<?php
require_once '../app/config.php';

echo "<h2>Environment: " . APP_ENV . "</h2>";

if (APP_DEBUG) {
    echo "<p>Debug mode is ON</p>";
} else {
    echo "<p>Production mode</p>";
}

echo "<hr>";
echo "Database Host: " . DB_HOST;
?>
