<?php
    if (isset($_SESSION['register']) && $_SESSION['register'] == 'completed') {
        echo "Registro completado";
    }else if(isset($_SESSION['register']) && $_SESSION['register'] == 'failed'){
        echo "El registro ha fallado";
    }
    
    $utils = new Utils();
    $utils->deleteSession('register');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form action="<?=base_url?>/user/save" method="POST">
         <label for="nombre">Nombre</label>
         <input type="text" name="nombre" id="nombre" required>
         
         <label for="apellido">Apellido</label>
         <input type="text" name="apellido" id="apellido" required>
         
         <label for="email">Email</label>
         <input type="email" name="email" id="email" required>
         
         <label for="pass">Contraseña</label>
         <input type="password" name="pass" id="pass" required>
         
         <label for="pass2">Repita la contraseña</label>
         <input type="password" name="pass2" id="pass2" required>

         <input type="submit" value="Registrar">
    </form>
</body>
</html>