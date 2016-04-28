<?php
// Get path to parent directory
//
$rootDir = dirname(__DIR__);

// Load settings from .env file, if it exists
//
if (class_exists('Dotenv\Dotenv')) {
    $dotenv = new \Dotenv\Dotenv($rootDir);

    if (file_exists($rootDir . '/.env')) {
        $dotenv->load();
    }

    $dotenv->required(['DB_NAME', 'DB_USER', 'DB_PASSWORD', 'WP_HOME']);
}

// Load environment files, if they exist
//
$envConfig = __DIR__ . '/environments/local.php';
if (file_exists($envConfig)) {
    require_once $envConfig;
}

if (!getenv('ZERO_ENV')) {
    putenv('ZERO_ENV=production');
}

$env = getenv('ZERO_ENV');
$envConfig = __DIR__ . '/environments/' . $env . '.php';
if (file_exists($envConfig)) {
    require_once $envConfig;
}

$envConfig = __DIR__ . '/environments/defaults.php';
if (file_exists($envConfig)) {
    require_once $envConfig;
}

unset($env);
unset($envConfig);

// Settings files
//
require_once('parts/paths.php');
require_once('parts/database.php');
require_once('parts/security.php');
require_once('parts/wordpress.php');

unset($rootDir);
unset($domain);

/**
 * Bootstrap WordPress
 */
if (!defined('ABSPATH')) {
    define('ABSPATH', WP_HOME . '/' . getenv('GW_WP_DIR') . '/');
}
