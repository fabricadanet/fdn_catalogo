<?php
namespace Core;

class ConfigView 
{
    private $viewPath;
    private $view;
    private $nome;
    private  $dados;
    private $viewExplode;

    public function __construct($nome, $dados )
    {
        $this->viewExplode = explode('/', $nome);
        $this->dados = $dados;
        $this->viewPath = 'app/' . ucfirst($this->viewExplode[0] ). '/Views/' .ucfirst($this->viewExplode[1] ). '/' . $this->viewExplode[2] . '.php';
        echo 'carregar a view: '. $this->viewExplode[0] .'-'. $this->viewExplode[1] .'-'. $this->viewExplode[2] .'<br>';
        echo 'viewPath: '. $this->viewPath .'<br>';
    }
}