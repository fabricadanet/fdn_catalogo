<?php
namespace App\Catalogo\Controllers;
if(!defined('BASE_URL')){
    header('Location:/fdn_catalogo/public/');
}

class CategoriaController
{
    public function index()
    {
        echo "CategoriaController - index";
    }
}