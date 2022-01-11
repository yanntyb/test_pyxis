<?php

require "../vendor/autoload.php";

use Yanntyb\Router\Model\Classes\Route;
use Yanntyb\Router\Model\Classes\Router;
use Yannt\TestPyxis\Controller\HomeController;

$router = new Router(new Route("maquette 1", "/", [HomeController::class, "maquette1"]));

$router->addRoute("maquette 2", "/maquette2", [HomeController::class, "maquette2"]);

$query = str_replace("/index.php","",$_SERVER['PHP_SELF']);
$router->handleQuery($query);
