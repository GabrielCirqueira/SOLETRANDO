<?php

require_once 'vendor/autoload.php';
require_once 'public/routes.php';

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$uri = rtrim($uri, '/');

$uri = str_replace("/SOLETRANDO","",$uri);

foreach ($router['routes'] as $route => $controller) {
    if ($uri === $route) {
        $controller = new $controller();
        $controller->index($_REQUEST);
        exit;
    }
}

$notFoundController = new $router['default']();
$notFoundController->index($_REQUEST);
exit;
