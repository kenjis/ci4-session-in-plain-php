<?php

/**
 * CodeIgniter4 bootstrap file for plain PHP applications
 */

// Load framework paths from their config file
require __DIR__  . '/Paths.php';
$paths = new Config\Paths();

// Location of the framework bootstrap file.
require rtrim($paths->systemDirectory, '\\/ ') . DIRECTORY_SEPARATOR . 'bootstrap.php';

// Load environment settings from .env files into $_SERVER and $_ENV
require_once SYSTEMPATH . 'Config/DotEnv.php';
(new CodeIgniter\Config\DotEnv(ROOTPATH))->load();

// Define ENVIRONMENT
if (! defined('ENVIRONMENT')) {
    define('ENVIRONMENT', env('CI_ENVIRONMENT', 'production'));
}

// Now load Composer's if it's available
if (is_file(COMPOSER_PATH)) {
    require_once COMPOSER_PATH;
}

// Load ENVIRONMENT bootstrap.
if (is_file(APPPATH . 'Config/Boot/' . ENVIRONMENT . '.php')) {
    require_once APPPATH . 'Config/Boot/' . ENVIRONMENT . '.php';
} else {
    // @codeCoverageIgnoreStart
    header('HTTP/1.1 503 Service Unavailable.', true, 503);
    echo 'The application environment is not set correctly.';

    exit(EXIT_ERROR); // EXIT_ERROR
    // @codeCoverageIgnoreEnd
}
