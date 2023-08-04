<?php 
namespace App\Middleware;

interface Middleware {
    function before() : void;
}