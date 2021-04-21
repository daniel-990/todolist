<?php 
    error_reporting(E_ALL ^ E_NOTICE);

    if(!empty($_GET)){
        
        $respuesta = $_GET['mensaje'];
        $respuestaError = $_GET['mensajeError'];

        if($respuesta == ""){
            echo "";
        }else{
            echo '<br><h6 class=""><i class="fas fa-check-double color-azul"></i> '.$respuesta.'</h6>';
        }

        if($respuestaError == ""){
            echo "";
        }else{
            echo '<br><h6 class=""><i class="fas fa-exclamation-triangle color-rojo"></i> '.$respuestaError.'</h6>';
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
<button id="enviar-datos" class="btn waves-effect waves-light red" type="submit" name="action">Guardar 
    <i class="material-icons right">add_circle</i>
</button>
</form>