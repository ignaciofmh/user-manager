<?php
require_once 'models/user.php';
class userController
{
    public function index()
    {
        require_once 'views/user/login.php';
    }
    public function register()
    {
        require_once 'views/user/register.php';
    }
    public function login()
    {
        if (!isset($_POST['email'])) {

            $_SESSION['login'] = 'email';

        } else if (!isset($_POST['pass'])) {

            $_SESSION['login'] = 'pass';

        }else{

            $email = $_POST['email'];
            $pass = $_POST['pass'];

            $user = new User();
            $user->setEmail($email);
            $user->setPassword($pass);

            $login = $user->login();
            if ($login != false) {

                $_SESSION['user'] = $login;
                //header('Location: ');

            }else{

                $_SESSION['login'] = 'failed';

            }
        }
    }
    public function save()
    {
        if (!isset($_POST['nombre'])) {

            $_SESSION['register'] = 'nombre';

        } else if (!isset($_POST['apellido'])) {

            $_SESSION['register'] = 'apellido';

        } else if (!isset($_POST['email'])) {

            $_SESSION['register'] = 'email';

        } else if (!isset($_POST['pass'])) {

            $_SESSION['register'] = 'pass';

        } else if (!isset($_POST['pass2'])) {

            $_SESSION['register'] = 'pass2';

        } else {

            if ($_POST['pass'] == $_POST['pass2']) {

                $user = new User();
                $user->setNombre($_POST['nombre']);
                $user->setApellido($_POST['apellido']);
                $user->setEmail($_POST['email']);
                $user->setPassword($_POST['pass']);

                if ($user->save()) {
                    echo "Registro completado";
                    $_SESSION['register'] = 'completed';
                } else {
                    echo "Registro fallido";
                    $_SESSION['register'] = 'failed';
                }
            } else {

                $_SESSION['register'] = 'failed';

            }
        }

        header('Location: '.base_url.'/user/register');
    }

}
