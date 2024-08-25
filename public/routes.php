<?php

use App\Controller\Error\NotFoundController;
use App\Controller\HomeController;

$router = [
    'routes' => [
        '' => HomeController::class,
        '/home' => HomeController::class,
    ],
    'default' => NotFoundController::class
];
