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

                // Realizamos la consulta para saber si coincide con uno de esos criterios
                $sqlRevisar = "INSERT INTO registrouser (correoregistro, passregistro) VALUES ('$registroNombreUser','$password')";
                $result = mysqli_query($conexion, $sqlRevisar);
                
                // Validamos si hay resultados
                if(mysqli_num_rows($result)>0){
                    // Si es mayor a cero imprimimos que ya existe el usuario
                    header("Location: https://listasdetareas.herokuapp.com/registro.php?mensajeError=Ya existe el usuario:<strong> ".$registroNombreUser." </strong>que intenta registrar");
                    exit;
                }else{

                    $sql = "INSERT INTO registrouser (correoregistro, passregistro) VALUES ('$registroNombreUser','$password')";
                    if(mysqli_query($conexion, $sql)){
                            $sql = "SELECT IdUser FROM registrouser";
                            $datos = array();
                            $result = $conexion->query($sql);
                                if($result->num_rows > 0){
                                    while($row = $result->fetch_assoc()) {
                                        header("Location: https://listasdetareas.herokuapp.com/login.php?mensaje=Usuario: ".$registroNombreUser." registrado&IdUser=".$row['IdUser']);
                                        //header("Location: http://localhost/todolist/index.php?mensaje=Usuario: ".$registroNombreUser." registrado&IdUser=".$row['IdUser']);
                                    }
                                }else{}
                    }else{
                        echo "error!";
                    }

                }
                // Cerramos la conexión
                mysqli_close($conexion);
            }
        }
    }else{
        echo "no se reciben valores nuevos";
    }
?>