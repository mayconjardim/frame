<?php 

class Users extends Controller {

    public function __construct() {
        $this->userModel = $this->model('user');
    }

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
    
                if (in_array("", $form)):

                    if (empty($form['name'])) :
                        $data['name_erro'] = 'Preencha o campo nome';
                    endif;
        
                    if (empty($form['email'])) :
                        $data['email_erro'] = 'Preencha o campo e-mail';
                    endif;
        
                    if (empty($form['password'])) :
                        $data['password_erro'] = 'Preencha o campo senha';
                    endif;
        
                    if (empty($form['confirm_password'])) :
                        $data['confirm_password_erro'] = 'Confirme a senha';
                    endif;
        
                    if(empty($data['name_erro']) && empty($data['email_erro']) && empty($data['password_erro']) && empty($data['confirm_password_erro'])):
                        echo 'Pode realizar o cadastro';
                    endif;

                else:

                    if(Validation::validateName($form['name'])) :
                        $data['name_erro'] = 'O nome informado é invalido';
                    elseif(Validation::validateName($form['email'])):
                        $data['email_erro'] = 'O email informado é invalido';
                    endif;

                    if (strlen($form['password']) < 6) :
                        $data['password_erro'] = 'A password deve ter no minimo 6 caracteres';
                    elseif($form['password'] != $form['confirm_password']):
                        $data['confirm_password_erro'] = 'As senhas são diferentes';
                    else:
                        $ata['password'] = password_hash($form['password'], PASSWORD_DEFAULT);

                        if ($this->userModel->save($data)):
                             echo 'Pode cadastrar';
                        else:
                            die("Erro ao armazenar usuario no banco de dados");
                        endif;

                    endif;

                endif;
            endif;
            $this->view('users/register', $data);
        }
}
