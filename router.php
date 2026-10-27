<?php
/**
 * Local Router for PHP Built-in Server (`php -S localhost:8000 router.php`)
 * Mirrors the Apache .htaccess Clean URL rewriting behavior during local development.
 */

$rawUri = $_SERVER['REQUEST_URI'] ?? '/';
$path   = parse_url($rawUri, PHP_URL_PATH);
$path   = urldecode($path);

// 1. Root or /index -> index.php
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

// 2. Strip .php extension if requested directly (e.g. /aboutus.php -> redirect to /aboutus)
if (str_ends_with($clean, '.php')) {
    $withoutExt = substr($clean, 0, -4);
    $query = !empty($_SERVER['QUERY_STRING']) ? '?' . $_SERVER['QUERY_STRING'] : '';
    header('Location: /' . $withoutExt . $query, true, 301);
    exit;
}

// 3. Direct Static File (assets, css, js, images, favicon)
$realFile = __DIR__ . $path;
if ($path !== '/' && file_exists($realFile) && !is_dir($realFile)) {
    return false; // let the built-in server deliver the static file
}

// 4. Map clean URL to corresponding .php file (e.g., /services -> services.php, /training -> training.php)
$targetPhp = __DIR__ . '/' . $clean . '.php';
if (file_exists($targetPhp) && !is_dir($targetPhp)) {
    require $targetPhp;
    exit;
}

// 5. Fallback 404
http_response_code(404);
echo "404 Not Found";
exit;
