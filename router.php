<?php

$rawUri = $_SERVER['REQUEST_URI'] ?? '/';
$path   = parse_url($rawUri, PHP_URL_PATH);
$path   = urldecode($path);

$clean = trim($path, '/');
if ($clean === '' || $clean === 'index') {
    require __DIR__ . '/index.php';
    exit;
}

if ($clean === 'index.php') {
    $query = !empty($_SERVER['QUERY_STRING']) ? '?' . $_SERVER['QUERY_STRING'] : '';
    header('Location: /' . $query, true, 301);
    exit;
}

if (str_ends_with($clean, '.php')) {
    $withoutExt = substr($clean, 0, -4);
    $query = !empty($_SERVER['QUERY_STRING']) ? '?' . $_SERVER['QUERY_STRING'] : '';
    header('Location: /' . $withoutExt . $query, true, 301);
    exit;
}

$realFile = __DIR__ . $path;
if ($path !== '/' && file_exists($realFile) && !is_dir($realFile)) {
    return false; 
}

$targetPhp = __DIR__ . '/' . $clean . '.php';
if (file_exists($targetPhp) && !is_dir($targetPhp)) {
    require $targetPhp;
    exit;
}

http_response_code(404);
echo "404 Not Found";
exit;
