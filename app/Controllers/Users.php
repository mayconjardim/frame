<?php 

class Users extends Controller {

        public function register()
        {
            $data = [
                'name' => '',
                'email' => '',
                'password' => '',
                'confirm_password' => '',
                'name_erro' => '',
                'email_erro' => '',
                'password_erro' => '',
                'confirm_password_erro' => ''
            ];
    
            $form = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if (isset($form)) :
                $data['name'] = trim($form['name']);
                $data['email'] = trim($form['email']);
                $data['password'] = trim($form['password']);
                $data['confirm_password'] = trim($form['confirm_password']);
    
                if (empty($form['name'])) :
                    $data['name_erro'] = 'Preencha o campo name';
                endif;
    
                if (empty($form['email'])) :
                    $data['email_erro'] = 'Preencha o campo e-mail';
                endif;
    
                if (empty($form['password'])) :
                    $data['password_erro'] = 'Preencha o campo password';
                elseif (strlen($form['password']) < 6) :
                    $data['password_erro'] = 'A password deve ter no minimo 6 caracteres';
                endif;
    
                if (empty($form['confirm_password'])) :
                    $data['confirm_password_erro'] = 'Confirme a senha';
                else:
                    if($form['password'] != $form['confirm_password']):
                        $data['confirm_password_erro'] = 'As senhas são diferentes';
                    endif;
                endif;
    
                if(empty($data['name_erro']) && empty($data['email_erro']) && empty($data['password_erro']) && empty($data['confirm_password_erro'])):
                    echo 'Pode realizar o cadastro';
                endif;

            endif;
    
            $this->view('users/register', $data);
        }
}
