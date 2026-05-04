<?php

/**
 * Hire a Book Writer → Laravel API base URL config.
 */
if (! defined('HAB_API_BASE_URL')) {
    if (
        in_array($_SERVER['HTTP_HOST'], ['localhost', '127.0.0.1'], true)
        || str_starts_with($_SERVER['HTTP_HOST'], 'localhost:')
    ) {
        define('HAB_API_BASE_URL', 'http://127.0.0.1:8000/api/v1'); // local — php artisan serve
    } else {
        define('HAB_API_BASE_URL', 'https://hireabookwriter.com/api/v1'); // live URL
    }
}
if (! defined('HAB_BRAND_SLUG')) {
    define('HAB_BRAND_SLUG',  'hireabookwriter');
}
if (! defined('HAB_API_TIMEOUT')) {
    define('HAB_API_TIMEOUT', 10);
}
