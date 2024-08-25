<?php

use App\Controller\Error\NotFoundController;
use App\Controller\HomeController;
use App\Controller\ProcessarController;

$router = [
    'routes' => [
        '' => HomeController::class,
        '/home' => HomeController::class,
        '/processar' => ProcessarController::class
    ],
    'default' => NotFoundController::class
];
