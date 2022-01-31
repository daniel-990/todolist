<div class="container contenedor-notas">
    <div class="row">
    <?php 
        session_start(); //se inicia la variable de sesion
        require './constantes/conectar.php';

        if (isset($_SESSION['user_id'])) {
            $session = $_SESSION['user_id'];
            if ($conexion) {
                $sql = "SELECT * FROM todolist WHERE IdUser='$session'";
                $result = $conexion->query($sql);
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()) {
    ?>
                <div class="col s12 m6">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="img/fondo.jpg">
                        </div>
                        <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4"><?php echo $row['nombre_nota']; ?><i class="material-icons right">more_vert</i></span>
                        <p>
                            <a href="/back-app/eliminar-nota.php?id=<?php echo $row['IdUser']?>" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">delete</i></a>
                        </p>
                        </div>
                        <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4"><?php echo $row['nombre_nota']; ?><i class="material-icons right">close</i></span>
                        <p><?php echo $row['nota']; ?></p>
                        <p>Fecha: <span class="badge green color-blanco"><?php echo $row['fecha']; ?></span></p>
                        </div>
                    </div>
                </div>
    <?php
                        if (!$result) {
                            echo "error!";
                        } else {
                            // echo $_SESSION['user_id'];
                            // echo $row['nombre_nota'];
                            // echo $row['nota'];
                        }
                    }
                }else{
                  echo "Sin datos para mostrar, por favor crea una nota nueva";
                }
            }
        }

    ?>
    </div>
</div>
