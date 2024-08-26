<?php

use App\Controller\Error\NotFoundController;
use App\Controller\HomeController;
use App\Controller\ProcessarController;
use App\Controller\TrabalhoController;
use App\Controller\ProcessarTrabalhoController;

$router = [
    'routes' => [
        '' => HomeController::class,
        'home' => HomeController::class,
        'processar' => ProcessarController::class,
        'trabalho' => TrabalhoController::class,
        'processar-trabalho' => ProcessarTrabalhoController::class
    ],
    'default' => NotFoundController::class
];
