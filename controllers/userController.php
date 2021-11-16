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
    public function create()
    {
        require_once 'views/layout/sidebar.php';
        require_once 'views/user/register.php';
    }
    public function change()
    {
        require_once 'views/layout/sidebar.php';
        require_once 'views/user/change.php';
    }

    public function listar()
    {
        $user = new User();
        $usersList = $user->getAll();
        require_once 'views/layout/sidebar.php';
        require_once 'views/user/listar.php';
    }
    public function login()
    {
        var_dump($_POST);
        if (empty($_POST['email'])) {

            $_SESSION['login'] = 'email';

        } else if (empty($_POST['pass'])) {

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
                header('Location: '.base_url.'/user/listar');

            }else{

                $_SESSION['login'] = 'failed';

            }
        }
        header('Location: '.base_url.'/user/index');
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

    public function update()
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
                $user->setId($_POST['id']);
                $user->setNombre($_POST['nombre']);
                $user->setApellido($_POST['apellido']);
                $user->setEmail($_POST['email']);
                $user->setPassword($_POST['pass']);
                $user->setRol('user');

                if ($user->update()) {
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

        header('Location: '.base_url.'/user/change');
    }

}
