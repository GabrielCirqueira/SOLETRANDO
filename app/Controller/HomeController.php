<?php

namespace App\Controller;

class HomeController extends AbstractController
{
    public function index(array $data): void
    {
        $this->render('home.php');
    }
}
