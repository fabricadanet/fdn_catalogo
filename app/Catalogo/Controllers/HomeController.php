<?php

namespace App\Catalogo\Controllers;
if(!defined('BASE_URL')){
    header('Location:/fdn_catalogo/public/');
}

class HomeController
{
    public function index()
    {
         $carregarView = new \Core\ConfigView("catalogo/home/index", "Site");
    }
}