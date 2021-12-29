<?php

namespace App\Site\Controllers;
if(!defined('BASE_URL')){
    header('Location:/fdn_catalogo/public/');
}

class SobreController
{
    public function index()
    {
        echo "SobreController::index()";
    }
}