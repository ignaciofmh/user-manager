<?php
    if (!isset($_SESSION['user'])) {
        header('Location: '.base_url.'/user/index');
    }else{
        $user = $_SESSION['user'];
    }
    
$url= $_SERVER["REQUEST_URI"];
?>
    <main>


<div class="d-flex flex-column flex-shrink-0 bg-light" style="width: 4.5rem; height: 100vh;">

<a href="#" class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none" aria-expanded="false">
            <img src="https://cdn.pixabay.com/photo/2020/07/14/13/07/icon-5404125_960_720.png" alt="user" width="36" height="36" class="rounded-circle">
        </a>
    <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
        <li class="nav-item">
            <a href="<?=base_url?>/user/listar" class="nav-link <?php if($url=="/user/listar"){echo "active";}?> py-3 border-bottom" aria-current="page" title="Home" data-bs-toggle="tooltip" data-bs-placement="right">
                <svg class="bi" width="24" height="24" role="img" aria-label="Home"><use xlink:href="#home"/></svg>
            </a>
        </li>
        <li>
            <a href="<?=base_url?>/user/create" class="nav-link <?php if($url=="/user/create"){echo "active";}?> py-3 border-bottom" title="Agregar usuario" data-bs-toggle="tooltip" data-bs-placement="right">
                <svg class="bi" width="24" height="24" role="img" aria-label="Agregar usuario"><use xlink:href="#userAdd"/></svg>
            </a>
        </li>
        <li>
            <a href="#" class="nav-link <?php if($url=="/user/delete"){echo "active";}?> py-3 border-bottom" title="Usuarios" data-bs-toggle="tooltip" data-bs-placement="right">
                <svg class="bi" width="24" height="24" role="img" aria-label="Usuarios"><use xlink:href="#personDelete"/></svg>
            </a>
        </li>
        <li>
            <a href="<?=base_url?>/index.php?controller=user&action=change&nombre=<?=$user->nombre?>&apellido=<?=$user->apellido?>&email=<?=$user->email?>&id=<?=$user->id?>" class="nav-link <?php if($url=="/user/profile"){echo "active";}?> py-3 border-bottom" title="<?=$user->nombre?>" data-bs-toggle="tooltip" data-bs-placement="right">
                <svg class="bi" width="24" height="24" role="img" aria-label="<?=$user->nombre?>"><use xlink:href="#people-circle"/></svg>
            </a>
        </li>
    </ul>
    <div class="dropdown border-top">
        <a href="#" class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle" id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://cdn.pixabay.com/photo/2020/07/14/13/07/icon-5404125_960_720.png" alt="user" width="24" height="24" class="rounded-circle">
        </a>
        <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser3">
            <li><a class="dropdown-item" href="<?=base_url?>/index.php?controller=user&action=change&nombre=<?=$user->nombre?>&apellido=<?=$user->apellido?>&email=<?=$user->email?>&id=<?=$user->id?>">Configuración</a></li>
            <li><a class="dropdown-item" href="<?=base_url?>/index.php?controller=user&action=change&nombre=<?=$user->nombre?>&apellido=<?=$user->apellido?>&email=<?=$user->email?>&id=<?=$user->id?>"><?=$user->nombre?></a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Cerrar Sesion</a></li>
        </ul>
    </div>
</div>

<div style="display: flex; justify-content: center; align-content: center;">

    <div class="container py-4">
