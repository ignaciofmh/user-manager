<?php
    if (isset($_SESSION['register']) && $_SESSION['register'] == 'completed') {
        echo "Registro completado";
    }else if(isset($_SESSION['register']) && $_SESSION['register'] == 'failed'){
        echo "El registro ha fallado";
    }
    
    $utils = new Utils();
    $utils->deleteSession('register');
?>

<div id="lista_usuarios" style="width: 90vw; height: 82%;" class="px-3">

<h1 style="text-align: center; font-size: 2rem; padding-bottom: 0rem;">Editar perfil</h1>


<div class="row justify-content-md-center" style="margin: auto;">
                <div class="col-md-8 col-lg-8">
                    <form class="needs-validation" novalidate action="<?=base_url?>/user/update" method="POST">
                        <div class="row g-3">
                            <input type="text" name="id" readonly="readonly" hidden value="<?php if(isset($_GET['id'])){echo $_GET['id'];}?>">
                            <div class="col-sm-6">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingresa tu nombre" value="<?php if(isset($_GET['nombre'])){echo $_GET['nombre'];}?>" required>
                                <div class="invalid-feedback">
                                    Por favor, ingresa tu nombre.
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label for="apellido" class="form-label">Apellido</label>
                                <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Ingresa tu apellido" value="<?php if(isset($_GET['apellido'])){echo $_GET['apellido'];}?>" required>
                                <div class="invalid-feedback">
                                    Por favor, ingresa tu apellido.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="username" class="form-label">Email</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text">@</span>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Ingresa tu email" value="<?php if(isset($_GET['email'])){echo $_GET['email'];}?>"  required>
                                    <div class="invalid-feedback">
                                    Por favor, ingresa tu email.
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label for="password" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" name="pass" id="pass" placeholder="*******" value="" required>
                                <div class="invalid-feedback">
                                    Por favor, ingresa tu contraseña.
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label for="password2" class="form-label">Repita la contraseña</label>
                                <input type="password" class="form-control" name="pass2" id="pass2" placeholder="*******" value="" required>
                                <div class="invalid-feedback">
                                    Por favor, confirma tu contraseña.
                                </div>
                            </div>


                            <button class="w-100 btn btn-primary btn-lg" style="margin-bottom: 4rem;" type="submit">Guardar</button>
                    </form>
                    </div>
                </div>
</div>