<?php 

    require '../constantes/conectar.php';

    $id = $_GET['id'];

    if($conexion){
        if(isset($_POST)){

            $sql = "DELETE FROM todolist WHERE IdUser='$id'";
            if(mysqli_query($conexion, $sql)){
                header("Location: https://listasdetareas.herokuapp.com/");
                exit;
            }else{
                echo "Error al enviar la solicitud ".$sql. "<br>" .mysqli_error($conexion);
            }
        }else{
            echo "no hay datos!";
        }
    }else{
        echo "no esta conectado!!";
    }


?>
