<?php

declare(strict_types=1);

require_once __DIR__ . '/hp-api-config.php';

/**
 * Resolve the Laravel API base URL (e.g. http://localhost/Brand_cms/public/api/v1).
 */
function hpApiBaseUrl(): string
{
    if (defined('HP_API_BASE_URL') && HP_API_BASE_URL !== '') {
        return rtrim((string) HP_API_BASE_URL, '/');
    }

    // Auto-detect from REQUEST_URI: strip /hamptonpublisher/... to get app root
    $requestPath = str_replace('\\', '/', parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH) ?: '');
    $needle      = '/hamptonpublisher/';
    $pos         = stripos($requestPath, $needle);
    if ($pos !== false) {
        $basePath = substr($requestPath, 0, $pos);
    } else {
        $scriptDir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? ''));
        $basePath  = str_ends_with($scriptDir, '/hamptonpublisher')
            ? substr($scriptDir, 0, -strlen('/hamptonpublisher'))
            : '';
    }
    $scheme = (! empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    $host   = $_SERVER['HTTP_HOST'] ?? 'localhost';

    return rtrim($scheme . '://' . $host . $basePath, '/') . '/api/v1';
}

/**
 * Blogs API base — /api/blogs (not /api/v1/blogs).
 */
function hpBlogsApiBase(): string
{
    return preg_replace('#/api/v1$#', '/api', hpApiBaseUrl());
}

/**
 * Fetch JSON from a URL, returns decoded array or null on failure.
 */
function hpFetchJson(string $url): ?array
{
    $raw     = '';
    $context = stream_context_create([
        'http' => [
            'method'        => 'GET',
            'timeout'       => HP_API_TIMEOUT,
            'header'        => "Accept: application/json\r\nUser-Agent: HamptonPublisher/1.0\r\n",
            'ignore_errors' => true,
        ],
        'ssl'  => ['verify_peer' => true, 'verify_peer_name' => true],
    ]);

    $result = @file_get_contents($url, false, $context);
    if (is_string($result) && $result !== '') {
        $raw = $result;
    } elseif (function_exists('curl_init')) {
        $ch = curl_init($url);
        if ($ch) {
            curl_setopt_array($ch, [
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_TIMEOUT        => HP_API_TIMEOUT,
                CURLOPT_HTTPHEADER     => ['Accept: application/json'],
                CURLOPT_FOLLOWLOCATION => true,
            ]);
            $cr = curl_exec($ch);
            curl_close($ch);
            if (is_string($cr) && $cr !== '') {
                $raw = $cr;
            }
        }
    }

    if ($raw === '') {
        return null;
    }
    $decoded = json_decode($raw, true);

    return is_array($decoded) ? $decoded : null;
}

/**
 * Build full storage URL for a blog image path.
 */
function hpMediaUrl(?string $path): string
{
    if ($path === null || $path === '') {
        return '';
    }
    if (str_starts_with($path, 'http://') || str_starts_with($path, 'https://')) {
        return $path;
    }
    $base = preg_replace('#/api/v1$#', '', hpApiBaseUrl());

    return rtrim($base, '/') . '/' . ltrim($path, '/');
}
