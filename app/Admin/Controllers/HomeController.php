<?php

namespace App\Admin\Controllers;
if(!defined('BASE_URL')){
    header('Location:/fdn_catalogo/public/');
}

class HomeController
{
    public function index()
    {
        echo "Admin/HomeController - index";
    }
    
}