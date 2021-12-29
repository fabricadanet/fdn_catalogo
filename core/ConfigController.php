<?php
namespace Core;

class ConfigController{

    private $url;
    private array $explode;
    private $modulo = DEFAULT_MODULE;
    private $controller = DEFAULT_CONTROLLER;
    private $metodo = DEFAULT_METHOD; 
    private $param = [];
    public function __construct()
    {
       
            $this->url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
            echo "URL: {$this->url} <br>";
            $this->limparUrl();
            echo "URL limpa: {$this->url} <br>";
            $this->explode = explode('/', $this->url);
            var_dump($this->explode);
            echo "<br>";
            if(!empty($this->explode[0])){
                $this->modulo = ucfirst($this->explode[0]);
                
            }
            if (!empty($this->explode[1])) {
                $this->controller = ucfirst($this->explode[1]).'Controller';
            }  
            if (!empty($this->explode[3])) {
                $this->metodo = $this->explode[3];
            }
            if (!empty($this->explode[2])) {
                $this->param = $this->explode[2];
            }

            echo "Módulo: {$this->modulo} <br>";
            echo "Controller: {$this->controller} <br>";
            echo "Metodo: {$this->metodo} <br>";
            var_dump($this->param);
            echo "<br>";
            $this->carregar();

        
      
    }

    private function limparUrl(): void
    {
        $this->url = strip_tags(rtrim($this->url, '/'));
    }

    public function carregar(){
        $classe = "App\\{$this->modulo}\\Controllers\\{$this->controller}";
        echo "Classe: {$classe} <br>";
        if(class_exists($classe)){
            $objcontroller = new $classe;
            if(method_exists($objcontroller, $this->metodo)){
                $objcontroller->{$this->metodo}($this->param);
            }else{
                echo "Método não encontrado";
            }
        }else{
            echo "Classe não encontrada";
        }
    }
}