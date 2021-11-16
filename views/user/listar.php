<div id="lista_usuarios" style="width: 90vw; height: 82%;" class="scrollarea">

    <h1 style="text-align: center; font-size: 2rem; padding-bottom: 1rem;">Usuarios</h1>

    <?php


    foreach ($usersList as $u) {

    ?>


        <div class="row justify-content-md-center mx-4" style="padding-bottom: 2rem;">
            <div class="col-md  themed-grid-col">
                <strong>
                    
                <?= $u->id ?>
                </strong>
            </div>
            <div class="col-md  themed-grid-col">
                <?php echo $u->nombre . ' ' . $u->apellido; ?>
            </div>
            <div class="col-md  themed-grid-col">
                <?= $u->email ?>
            </div>
            <div class="col-md  themed-grid-col">
                <span>
                    <a style="color:#4bd650" href="<?=base_url?>/index.php?controller=user&action=change&nombre=<?=$u->nombre?>&apellido=<?=$u->apellido?>&email=<?=$u->email?>&id=<?=$u->id?>">Change</a>
                </span>
                &nbsp;
                <span >
                    <a style="color:red" href="<?=base_url?>/index.php/controllers=user&action=delete&id=<?=$u->id?>">Delete</a>
                </span>
            </div>
        </div>

    <?php
    }
    ?>


</div>