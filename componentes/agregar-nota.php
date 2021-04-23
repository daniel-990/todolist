<?php 

    session_start(); //se inicia la variable de sesion

    if(isset($_SESSION['user_id'])){
        header('Location: https://listasdetareas.herokuapp.com/');
    } else {
        header('Location: https://listasdetareas.herokuapp.com/login.php');
    }

    error_reporting(E_ALL ^ E_NOTICE);

    if(!empty($_GET)){
        
        $respuesta = $_GET['mensaje'];
        $respuestaError = $_GET['mensajeError'];

        //----
        $IdUser = $_GET['IdUser'];

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
<form id="ingresar-nota" class="col s12" method="POST" action="./back-app/_ingresar-nota.php" autocomplete="off">
    <div class="row">
        <div class="input-field col s6">
            <input id="input_nombre" name="nombre_nota" type="text" data-length="10">
            <label for="input_nombre">Nombre de la nota</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <textarea id="nota" name="nota" class="materialize-textarea" data-length="120"></textarea>
            <label for="nota">Nota</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s6">
        <?php 
            if (isset($_SESSION['user_id'])) {
                $session = $_SESSION['user_id'];
                echo '<input readonly id="id_user" name="IdUser" type="text" data-length="10" value="'.$session.'">';
            }else{
                echo '<input readonly id="id_user" name="IdUser" type="text" data-length="10" value="'.$IdUser.'">';
            }
        ?>
            <label for="input_nombre">ID</label>
        </div>
    </div>
<button id="enviar-datos" class="btn waves-effect waves-light red" type="submit" name="action">Guardar 
    <i class="material-icons right">add_circle</i>
</button>
</form>