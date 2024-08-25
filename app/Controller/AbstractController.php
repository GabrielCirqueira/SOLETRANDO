<?php

namespace App\Controller;

abstract class AbstractController
{
    public function render(string $viewName, array $data = []): void
    {
        require_once('public' . '/view/includes/header.php');
        require_once('public' . '/view/' . $viewName);
        require_once('public' . '/view/includes/footer.php');
    }

    public function showJson(array $data): never
    {
        header("Content-Type: application/json");
        echo json_encode($data);
        die();
    }

    public function redirect(string $route): never
    {
        header("Location: {$route}");
        die();
    }

    abstract public function index(array $requestData): void;
}
