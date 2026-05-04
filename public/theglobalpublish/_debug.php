<?php
echo "<pre>";
echo "HTTP_HOST: " . $_SERVER['HTTP_HOST'] . "\n";
echo "REQUEST_URI: " . $_SERVER['REQUEST_URI'] . "\n";
echo "SCRIPT_NAME: " . $_SERVER['SCRIPT_NAME'] . "\n";
echo "PHP_SELF: " . $_SERVER['PHP_SELF'] . "\n";

$requestPath = str_replace('\\', '/', parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH) ?: '');
echo "requestPath: " . $requestPath . "\n";

$brandPos = stripos($requestPath, '/theglobalpublish/');
echo "brandPos in REQUEST_URI: " . var_export($brandPos, true) . "\n";

$scriptName = str_replace('\\', '/', $_SERVER['SCRIPT_NAME'] ?? '');
$scriptBrandPos = stripos($scriptName, '/theglobalpublish/');
echo "brandPos in SCRIPT_NAME: " . var_export($scriptBrandPos, true) . "\n";
echo "dirname(SCRIPT_NAME): " . dirname($scriptName) . "\n";
echo "</pre>";
