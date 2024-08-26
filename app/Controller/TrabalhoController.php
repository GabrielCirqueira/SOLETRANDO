<?php 

namespace App\Controller;

use App\Controller\AbstractController;

class TrabalhoController extends AbstractController{

    public function index($request) :void
    {
        $this->render("trabalho.php");
    }
}