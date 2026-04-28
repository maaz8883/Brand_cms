<?php

declare(strict_types=1);

require_once __DIR__ . '/hp-api-config.php';

function hpApiBaseUrl(): string
{
    if (defined('HP_API_BASE_URL') && HP_API_BASE_URL !== '') {
        return rtrim((string) HP_API_BASE_URL, '/');
    }
    $requestPath = str_replace('\\', '/', parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH) ?: '');
    $needle      = '/hexapublishers/';
    $pos         = stripos($requestPath, $needle);
    if ($pos !== false) {
        $basePath = substr($requestPath, 0, $pos);
    } else {
        $scriptDir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? ''));
        $basePath  = str_ends_with($scriptDir, '/hexapublishers')
            ? substr($scriptDir, 0, -strlen('/hexapublishers')) : '';
    }
    $scheme = (! empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    // Force http on localhost
    if (
        in_array($_SERVER['HTTP_HOST'], ['localhost', '127.0.0.1'], true)
        || str_starts_with($_SERVER['HTTP_HOST'], 'localhost:')
    ) {
        $scheme = 'http';
    }
    return rtrim($scheme . '://' . ($_SERVER['HTTP_HOST'] ?? 'localhost') . $basePath, '/') . '/api/v1';
}

function hpBlogsApiBase(): string
{
    return preg_replace('#/api/v1$#', '/api', hpApiBaseUrl());
}

function hpFetchJson(string $url): ?array
{
    $raw     = '';
    $context = stream_context_create([
        'http' => [
            'method' => 'GET',
            'timeout' => HP_API_TIMEOUT,
            'header' => "Accept: application/json\r\nUser-Agent: HexaPublishers/1.0\r\n",
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
                CURLOPT_TIMEOUT => HP_API_TIMEOUT,
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
