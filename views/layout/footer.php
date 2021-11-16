<div class="container">
    <div class="container">
        <footer class="py-3 my-4">
            <?php
            if (isset($_SESSION['user'])) {
                $user = $_SESSION['user'];
                if ($user->email!='') {
            ?>
                    
                <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="<?=base_url?>/user/listar" class="nav-link px-2 text-muted">Lista de usuarios</a></li>
                <li class="nav-item"><a href="<?=base_url?>/user/create" class="nav-link px-2 text-muted">Nuevo usario</a></li>
                <li class="nav-item"><a href="<?=base_url?>/index.php?controller=user&action=change&nombre=<?=$user->nombre?>&apellido=<?=$user->apellido?>&email=<?=$user->email?>&id=<?=$user->id?>" class="nav-link px-2 text-muted">Mi perfil</a></li>
            </ul>
                
            <?php
                }
            }
            ?>
            <p class="text-center text-muted">&copy; 2021 Company, Inc</p>
        </footer>
    </div>

</div>

</div>


</main>



<script src="../assets/dist/js/bootstrap.bundle.min.js "></script>

<script src="<?=base_url?>/assets/js/form-validation.js"></script>
<script src="<?=base_url?>/assets/js/form-validation.js"></script>
</body>

</html>