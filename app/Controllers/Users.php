<?php 

class Users extends Controller {

    public function register(){

        $form = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if (isset($form)) {
           $data = [
            'name' => trim($form['nome']),
            'email' => trim($form['email']),
            'senha' => trim($form['senha']),
            'confirmar_senha' => trim($form['confirmar_senha'])
           ];
        } else {
            $data = [
                'name' => '',
                'email' => '',
                'senha' => '',
                'confirmar_senha' => ''
            ];    

        }

        $this->view('users/register');
    }



}