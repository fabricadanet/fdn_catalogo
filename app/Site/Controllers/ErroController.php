<?php
namespace App\Site\Controllers;
if(!defined('BASE_URL')){
    header('Location:/fdn_catalogo/public/');
}

class ErroController
{
    public function index()
    {
        echo "ErroController::index()";
    }
}