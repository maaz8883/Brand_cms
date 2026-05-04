<?php

declare(strict_types=1);

require_once __DIR__ . '/hab-api-config.php';

function habApiBaseUrl(): string
{
    if (defined('HAB_API_BASE_URL') && HAB_API_BASE_URL !== '') {
        return rtrim((string) HAB_API_BASE_URL, '/');
    }
    // Auto-detect from REQUEST_URI
    $requestPath = str_replace('\\', '/', parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH) ?: '');
    $needle      = '/hireabookwriter/';
    $pos         = stripos($requestPath, $needle);
    $basePath    = $pos !== false ? substr($requestPath, 0, $pos) : '';
    $scheme      = (! empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    if (
        in_array($_SERVER['HTTP_HOST'], ['localhost', '127.0.0.1'], true)
        || str_starts_with($_SERVER['HTTP_HOST'], 'localhost:')
    ) {
        $scheme = 'http';
    }
    return rtrim($scheme . '://' . ($_SERVER['HTTP_HOST'] ?? 'localhost') . $basePath, '/') . '/api/v1';
}

function habBlogsApiBase(): string
{
    return preg_replace('#/api/v1$#', '/api', habApiBaseUrl());
}

function habFetchJson(string $url): ?array
{
    $raw     = '';
    $context = stream_context_create([
        'http' => [
            'method' => 'GET',
            'timeout' => HAB_API_TIMEOUT,
            'header' => "Accept: application/json\r\nUser-Agent: HireABookWriter/1.0\r\n",
            'ignore_errors' => true
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
                CURLOPT_TIMEOUT => HAB_API_TIMEOUT,
                CURLOPT_HTTPHEADER => ['Accept: application/json'],
                CURLOPT_FOLLOWLOCATION => true
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
