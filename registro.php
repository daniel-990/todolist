<?php
    include "./partials/header.php";
?>
    
    <section class="contenedor">
        <?php include "./partials/menu.php"; ?>
        <div class="container">
            <h3><img class="tamano-img" src="img/app-icon.svg"> Registro de usuario</h3>
            <?php 
                error_reporting(E_ALL ^ E_NOTICE);

                if(!empty($_GET)){
                    
                    $respuesta = $_GET['mensaje'];
                    $respuestaError = $_GET['mensajeError'];

                    if($respuesta == ""){
                        echo "";
                    }else{
                        echo '<br><h4 class="alerta"><i class="fas fa-check-double color-azul"></i> '.$respuesta.'</h4>';
                    }

                    if($respuestaError == ""){
                        echo "";
                    }else{
                        echo '<br><h4 class="alerta"><i class="fas fa-exclamation-triangle color-rojo"></i> '.$respuestaError.'</h4>';
                    }
                }else{
                    echo "";
                }
            ?>
            <div class="row">
                <form class="col s12" action="./back-app/registro-user.php" method="POST">
                    <div class="row">
                        <div class="input-field col s6">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="icon_prefix" type="email" class="validate" name="usuario-registro">
                        <label for="icon_prefix">Nombre de usuario</label>
                        <span class="helper-text" data-error="formato de correo incorrecto" data-success="formato de correo valido">Ingresa un correo valido</span>
                        </div>
                        <div class="input-field col s6">
                        <i class="material-icons prefix">password</i>
                        <input id="icon_telephone" type="password" class="validate" name="pass-registro">
                        <label for="icon_telephone">Contraseña</label>
                        </div>
                    </div>
                    <button class="btn waves-effect waves-light green" type="submit" name="action">Registrar
                        <i class="material-icons right">send</i>
                    </button>
                </form>
            </div>
        </div>
    </section>

<?php
    include "./partials/footer.php";
?>
