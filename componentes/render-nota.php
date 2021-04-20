<div class="container contenedor-notas">
    <div class="row">
    <?php 
        
        require './constantes/conectar.php';

        $sql = "SELECT id, nombre_nota, nota, fecha FROM todolist";
        $datos = array();
        $result = $conexion->query($sql);


            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()) {
    ?>
                <div class="col s12 m6 l3">
                    <a class="boton-notas waves-effect waves-light btn modal-trigger purple darken-1" href="#modal<?php echo $row['id']; ?>"><i class="large material-icons">create</i> <?php echo $row['nombre_nota']; ?></a>
                    <div id="modal<?php echo $row['id']; ?>" class="modal modal-fixed-footer">
                    <div class="modal-content">
                        <h4><?php echo $row['nombre_nota']; ?></h4>
                        <p><?php echo $row['nota']; ?></p>
                        <p><?php echo $row['fecha']; ?></p>
                    </div>
                    <div class="modal-footer">
                        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cerrar</a>
                        <a href="" class="modal-close waves-effect waves-green btn-flat color-rojo">Eliminar</a>
                    </div>
                    </div>
                </div>
    <?php
                }
            }else{
                echo "0 resultados";
            }

    ?>
    </div>
</div>