<?php

class Rotes {

    private $controller = "Pages";
    private $func = "Index";
    private $parameters = [];

    public function __construct() {
        $url = $this->url() ?  $this->url() : [0];
        
        if(file_exists("../app/Controllers/".ucwords($url[0]).".php")):
            $this->controller = $url[0];
            unset($url[0]);
        endif;

        require_once "../app/Controllers/".$this->controller.".php";
        $this->controller = new $this->controller;

        if (isset($url[1])):
                if (method_exists($this->controller, $url[1])):
                    $this->func = $url[1];
                    unset($url[1]);
                endif;
        endif;

        $this->parameters = $url ? array_values($url) : [];
        call_user_func_array([$this->controller, $this->func], $this->parameters);

        var_dump($this);
    }

    private function url(){
  
        $url = filter_input(INPUT_GET,"url", FILTER_SANITIZE_URL);
        if (isset($url)) :
            $url = trim(rtrim($url,"/"));
            $url = explode("/", $url);

            return $url;            
        endif;


    }

}