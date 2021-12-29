<?php
namespace App\Catalogo\Controllers;
if(!defined('BASE_URL')){
    header('Location:/fdn_catalogo/public/');
}
class ProdutoController
{
    public function index()
    {
        echo "ProdutoController - index";
    }
}