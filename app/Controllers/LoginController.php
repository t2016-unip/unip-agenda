<?php   
    namespace App\Controllers;

    use App\Pages\View;
    use App\Models\Usuario;

    class LoginController {

        public function index($message = []) {
            unset($_SESSION['usuario']);
            View::render('Login', $message, false);
        }

        public function login($request) {

            $usuario = Usuario::autenticar($request['email'], $request['senha']);
            if ($usuario) { //EXISTE USUARIO
                $_SESSION['usuario'] = $usuario[0];
                redirecionar('/salas');
            }
            else { //ERROU SENHA OU EMAIL
                $this->index(['mensagem' => "E-mail ou senha incorreto!"]);
            }
        }
    }