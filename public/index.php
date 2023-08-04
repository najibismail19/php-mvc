<?php
require_once __DIR__ . "/../vendor/autoload.php";
use App\Application\Router;
use App\Controllers\HomeController;
use App\Controllers\LoginController;
use App\Middleware\LoginMiddleware;

Router::add("GET", "/login", LoginController::class, "index");
Router::add("GET", "/about", HomeController::class, "about", [LoginMiddleware::class]);
Router::add("GET", "/contact", HomeController::class, "contact", [LoginMiddleware::class]);
Router::add("GET", "/details/([0-9a-zA-Z]*)", HomeController::class, "details", [LoginMiddleware::class]);
Router::run();