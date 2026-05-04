<?php

/**
 * The Global Publishers → Laravel API base URL config.
 */
if (! defined('TGP_API_BASE_URL')) {
    if (
        in_array($_SERVER['HTTP_HOST'], ['localhost', '127.0.0.1'], true)
        || str_starts_with($_SERVER['HTTP_HOST'], 'localhost:')
    ) {
        define('TGP_API_BASE_URL', 'http://127.0.0.1:8000/api/v1'); // local — php artisan serve
    } else {
        define('TGP_API_BASE_URL', 'https://theglobalpublishers.com/api/v1'); // live URL
    }
}
if (! defined('TGP_BRAND_SLUG')) {
    define('TGP_BRAND_SLUG',  'theglobalpublishers');
}
if (! defined('TGP_API_TIMEOUT')) {
    define('TGP_API_TIMEOUT', 10);
}
