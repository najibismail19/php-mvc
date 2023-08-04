<?php 
namespace App\Application;
class View {
    public static function render($view, $data) {
        require __DIR__ . "/../View/" . $view . ".php"; 
    }
}