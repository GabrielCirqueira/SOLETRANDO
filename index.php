<?php
session_start();
 

require_once 'vendor/autoload.php';
require_once 'public/routes.php';

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$uri = rtrim($uri, '/');

$uri = str_replace("/SOLETRANDO","",$uri);

$action = isset($_GET["route"]) ? $_GET["route"] : "home";

foreach ($router['routes'] as $route => $controller) {
    if ($action === $route) {
        $controller = new $controller();
        $controller->index($_REQUEST);
        exit;
    }
}

$notFoundController = new $router['default']();
$notFoundController->index($_REQUEST);
exit;
