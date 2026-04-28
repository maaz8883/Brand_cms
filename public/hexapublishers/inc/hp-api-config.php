<?php

/**
 * Hexa Publishers → Laravel API base URL config.
 */
if (! defined('HP_API_BASE_URL')) {
    if (
        in_array($_SERVER['HTTP_HOST'], ['localhost', '127.0.0.1'], true)
        || str_starts_with($_SERVER['HTTP_HOST'], 'localhost:')
    ) {
        define('HP_API_BASE_URL', 'http://127.0.0.1:8000/api/v1'); // local — php artisan serve
    } else {
        define('HP_API_BASE_URL', 'https://hexapublishers.com/api/v1'); // live URL
    }
}
if (! defined('HP_BRAND_SLUG')) {
    define('HP_BRAND_SLUG',  'hexapublishers');
}
if (! defined('HP_API_TIMEOUT')) {
    define('HP_API_TIMEOUT', 10);
}
