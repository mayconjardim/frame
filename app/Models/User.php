<?php

class User {
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function save($data) {
        // Verifica se o email já existe
        $this->db->query("SELECT id FROM users WHERE email = :email");
        $this->db->bind("email", $data["email"]);
        $this->db->exec();
    
        $result = $this->db->results(); 
        if (count($result) > 0) {
            return false;
        }
    
        $this->db->query("INSERT INTO users(name, email, password) VALUES (:name, :email, :password)");
        $this->db->bind("name", $data["name"]);
        $this->db->bind("email", $data["email"]);
        $this->db->bind("password", $data["password"]);
    
        return $this->db->exec();
    }

}