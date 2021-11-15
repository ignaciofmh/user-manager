<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

    <form action="<?= base_url ?>/user/login" method="POST">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>

        <label for="pass">Contraseña</label>
        <input type="password" name="pass" id="pass" required>

        <input type="submit" value="Ingresar">
    </form>

</body>

</html>