<?php

namespace Yannt\TestPyxis\Controller;

use Yannt\TestPyxis\Classes\Controller;

class HomeController extends Controller
{
    public function maquette1(){
        $this->render("maquette1.html.twig");
    }

    public function maquette2(){
        $email = $_POST["email"];
        $name = $_POST["name"];
        $message = $_POST["message"];
        $this->render("maquette2.html.twig", [
            "mail" => $email,
            "name" => $name,
            "message" => $message
        ]);
    }
}