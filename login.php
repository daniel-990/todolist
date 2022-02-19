<?php
    include "./partials/header.php";
    
    session_start(); //se inicia la variable de sesion

    if(isset($_SESSION['user_id'])){
        header('Location: https://listasdetareas.herokuapp.com/');
        echo "usuario logueado: ".$_SESSION['user_id'];
    } else {
        //header('Location: https://listasdetareas.herokuapp.com/login.php');
        //echo "usuario sin login";
    }
    error_reporting(E_ALL ^ E_NOTICE);
?>
    <section class="contenedor">
        <?php include "./partials/menu.php"; ?>
        <div class="container">
            <br>
            <code>
                <strong>Datos de prueba</strong><br>
                <strong>Usuario:<strong> test@correo.com<br>
                <strong>Pass:</strong> 12345
            </code>
            <hr>
            <h3><img class="tamano-img" src="img/app-icon.svg"> Login de usuario <br><small class="mensaje_">Para usar la app por favor inicia sesion o registra una cuenta</small></h3>
            <?php 
                if(!empty($_GET)){


                    $mensajeError = $_GET['mensajeError'];
                    $mensajeError2 = $_GET['mensajeError2'];

                    $mensaje = $_GET['mensaje'];

                    if($mensajeError == ""){
                        echo "";
                    }else{
                        echo '<h4 class="alerta"><i class="fas fa-check-double color-azul"></i> '.$mensajeError.'</h4>';
                    }
                    if($mensajeError2 == ""){
                        echo "";
                    }else{
                        echo '<h4 class="alerta"><i class="fas fa-check-double color-azul"></i> '.$mensajeError2.'</h4>';
                    }

                    if($mensaje == ""){
                        echo "";
                    }else{
                        echo '<br><h4 class="alerta"><i class="fas fa-check-double color-azul"></i> '.$mensaje.'</h4>';
                    }

                }else{
                    echo "";
                }
            ?>
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
