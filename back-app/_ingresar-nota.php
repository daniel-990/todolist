<?php 

    require '../constantes/conectar.php';

    $nombreNota = $_POST['nombre_nota'];
    $nota = $_POST['nota'];
    $IdUser = $_POST['IdUser'];
    echo $IdUser;
    if(isset($_POST)){
        if($nombreNota == "" && $nota == ""){
            header("Location: https://listasdetareas.herokuapp.com/index.php?mensajeError=No se genero la nota");
        }else{
            if($conexion){
                $sql = "INSERT INTO todolist (nombre_nota, nota, IdUser) VALUES ('$nombreNota','$nota', '$IdUser')";
                if(mysqli_query($conexion, $sql)){
                    header("Location: https://listasdetareas.herokuapp.com/index.php?mensaje=Nota guardada");
                }else{
                    header("Location: https://listasdetareas.herokuapp.com/index.php?mensajeError=La nota no se genero");
                }
                mysqli_close($conexion);
            }
        }
    }else{
        echo "no se reciben valores nuevos";
    }
?>