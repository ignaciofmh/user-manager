<?php
if (isset($_SESSION['login']) && $_SESSION['login'] == 'failed') {
    echo "El correo o la contraseña ingresada no coincide.";
} else if (!empty($_SESSION['login'])) {
    echo "Ingrese el " . $_SESSION['login'];
}

$utils = new Utils();
$utils->deleteSession('login');


?>
<main class="form-signin">

    <div id="lista_usuarios" style="width: 80vw; height: 82%;margin-top: 3.2rem;" class="scrollarea">

        <form action="<?= base_url ?>/user/login" method="POST">
            <h1 class="h3 mb-3 fw-normal" style="text-align: center; padding-bottom: 2rem;">Inicie sesión</h1>

            <div class="form-floating">
                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating">
                <input type="password" name="pass" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>


            <button class="w-100 btn btn-lg btn-primary" type="submit">Iniciar sesión</button>
            <br><br>
            <div style="text-align: center;">
                <label style="margin-bottom: 3rem;">
                    <a style="text-align: right; font-weight: lighter;" href="<?= base_url ?>/user/register">Registrate</a>
                </label>
            </div>
            <br>
        </form>