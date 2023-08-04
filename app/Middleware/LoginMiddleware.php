<?php 
namespace App\Middleware;
use App\Middleware\Middleware;

class LoginMiddleware implements Middleware {
    public function before() : void 
    {
        session_start();
        if($_SESSION["login"] == false){
            header("Location: /login");
            exit();
        }
    }
}