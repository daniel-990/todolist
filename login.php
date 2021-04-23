<?php
    include "./partials/header.php";
?>
    <section class="contenedor">
        <?php include "./partials/menu.php"; ?>
        <div class="container">
            <h3><img class="tamano-img" src="img/app-icon.svg"> Login de usuario <small>Para usar la app por favor inicia sesion o registra una cuenta</small></h3>
            <div class="row">
                <form class="col s12" action="./back-app/login-user.php" method="POST">
                    <div class="row">
                        <div class="input-field col s6">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="icon_prefix" type="email" class="validate" name="username">
                        <label for="icon_prefix">Nombre de usuario</label>
                        <span class="helper-text" data-error="formato de correo incorrecto" data-success="formato de correo valido">Ingresa un correo valido</span>
                        </div>
                        <div class="input-field col s6">
                        <i class="material-icons prefix">password</i>
                        <input id="icon_telephone" type="password" class="validate" name="pass">
                        <label for="icon_telephone">Contraseña</label>
                        </div>
                    </div>
                    <button class="btn waves-effect waves-light green" type="submit" name="action">Login
                        <i class="material-icons right">send</i>
                    </button>
                </form>
            </div>
        </div>
    </section>
<?php
    include "./partials/footer.php";
?>
