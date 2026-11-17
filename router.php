<?php
/**
 * Local Development Server Router for PHP CLI Server (php -S localhost:8000 router.php)
 * Simulates Apache .htaccess mod_rewrite for clean URLs without .php extension.
 */

$raw_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$path = urldecode($raw_path);

// If an actual static regular file exists (CSS, JS, images, fonts), serve directly
if ($path !== '/' && is_file(__DIR__ . $path)) {
    return false;
}

// Clean extensionless PHP resolution (e.g. /aboutus -> aboutus.php, /training -> training.php)
$clean_path = rtrim($path, '/');
if (!empty($clean_path)) {
    $target_file = __DIR__ . $clean_path . '.php';
    if (is_file($target_file)) {
        $_SERVER['SCRIPT_NAME']     = $clean_path . '.php';
        $_SERVER['PHP_SELF']        = $clean_path . '.php';
        $_SERVER['SCRIPT_FILENAME'] = $target_file;
        include $target_file;
        return true;
    }
}

// Specific route mappings
$routes = [
    '/training'         => __DIR__ . '/training.php',
    '/trainings'        => __DIR__ . '/training.php',
    '/course'           => __DIR__ . '/course.php',
    '/courses'          => __DIR__ . '/course.php',
    '/workshop'         => __DIR__ . '/workshop.php',
    '/workshops'        => __DIR__ . '/workshop.php',
    '/service'          => __DIR__ . '/services.php',
    '/services'         => __DIR__ . '/services.php',
    '/about'            => __DIR__ . '/aboutus.php',
    '/about-us'         => __DIR__ . '/aboutus.php',
    '/aboutus'          => __DIR__ . '/aboutus.php',
    '/customer-stories' => __DIR__ . '/customersstories.php',
    '/customerstories'  => __DIR__ . '/customersstories.php',
    '/customersstories' => __DIR__ . '/customersstories.php',
    '/shamaa'           => __DIR__ . '/shamaa.php',
    '/shamaa-wellness'  => __DIR__ . '/shamaa.php',
    '/wellness'         => __DIR__ . '/shamaa.php',
    '/ame-crystals'     => __DIR__ . '/ame-crystals.php',
    '/contact'          => __DIR__ . '/contact.php',
    '/sreeparvathy'     => __DIR__ . '/sreeparvathy.php',
    '/sravanti'         => __DIR__ . '/sravanti.php',
];

if (isset($routes[$clean_path]) && is_file($routes[$clean_path])) {
    $target = $routes[$clean_path];
    $_SERVER['SCRIPT_NAME']     = '/' . basename($target);
    $_SERVER['PHP_SELF']        = '/' . basename($target);
    $_SERVER['SCRIPT_FILENAME'] = $target;
    include $target;
    return true;
}

// Default to index.php
include __DIR__ . '/index.php';
return true;
