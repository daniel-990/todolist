<?php 

    require '../constantes/conectar.php';

    $registroNombreUser = $_POST['usuario-registro'];
    $registroPassUser = $_POST['pass-registro'];

    //encripta la contraseña
    $password = password_hash($registroPassUser, PASSWORD_BCRYPT);

    if(isset($_POST)){
        if($registroNombreUser == "" && $registroPassUser == ""){
            header("Location: https://listasdetareas.herokuapp.com/registro.php?mensajeError=Todos los campos son obligatorios");
            //header("Location: http://localhost/todolist/registro.php?mensajeError=Todos los campos son obligatorios");
            exit;
        }else{
            if($conexion){
                $sql = "INSERT INTO registrouser (correoregistro, passregistro) VALUES ('$registroNombreUser','$password')";
                if(mysqli_query($conexion, $sql)){
                        $sql = "SELECT IdUser FROM registrouser";
                        $datos = array();
                        $result = $conexion->query($sql);
                            if($result->num_rows > 0){
                                while($row = $result->fetch_assoc()) {
                                    header("Location: https://listasdetareas.herokuapp.com/registro.php?mensaje=Usuario registrado");
                                    //header("Location: http://localhost/todolist/index.php?mensaje=Usuario: ".$registroNombreUser." registrado&IdUser=".$row['IdUser']);
                                }
                            }else{}
                }else{
                    echo "error!";
                }
                mysqli_close($conexion);
            }
        }
    }else{
        echo "no se reciben valores nuevos";
    }
?>