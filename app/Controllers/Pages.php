<?php

class Pages extends Controller {
 
    public function index() {
        $data = [
            "Title" => "Página Inicial",
            "Description" => "Maycon"
        ];

        $this->view("pages/home", $data);
    }

    public function about() {
        $data = [
            "Title" => "Página About",
            "Description" => "About Maycon"
        ];

        $this->view("pages/about", $data);
    }

}