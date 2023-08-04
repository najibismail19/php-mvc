<?php 
namespace App\Controllers;
use App\Application\View;
class HomeController {
    public function index() :void
    {
        echo "HomeController/Index";
        $data = "Najib";
        View::render("home/index", $data);

    }
    
    public function about() 
    {
        echo "HomeController/About";
    }

    public function Contact()
    {
        echo "HomeController/Contact";
    }

    public function details($params) 
    {
        echo "HomeController/Details, Params => " . $params;
    }

}