<?php

namespace App\Site\Controllers;
if(!defined('BASE_URL')){
    header('Location:/fdn_catalogo/public/');
}

class HomeController
{
    public function index()
    {
        $carregarView = new \Core\ConfigView("site/home/index", "Site");
    }
}