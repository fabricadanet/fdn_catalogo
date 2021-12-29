<?php

namespace App\Site\Controllers;

if(!defined('BASE_URL')){
    header('Location:/fdn_catalogo/public/');
}

class ContatoController
{
    public function index()
    {
        echo "ContatoController::index()";
    }
}