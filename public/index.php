<?php

require "../vendor/autoload.php";

use Yanntyb\Router\Model\Classes\Route;
use Yanntyb\Router\Model\Classes\Router;
use Yannt\TestPyxis\Controller\HomeController;

$router = new Router(new Route("maquette 1", "/", [HomeController::class, "maquette1"]),true);

$router->addRoute("maquette 2", "/maquette2", [HomeController::class, "maquette2"]);

$router->handleQuery();
