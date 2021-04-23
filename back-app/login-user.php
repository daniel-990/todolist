<?php 

    require '../constantes/conectar.php';

    session_start(); //se inicia la variable de sesion

    // if(isset($_SESSION['user_id'])){
    //     header('Location: https://listasdetareas.herokuapp.com/');
    // } else {
    //     header('Location: https://listasdetareas.herokuapp.com/login.php');
    // }
 
    if (isset($_POST)) {
     
        $username = $_POST['username'];
        $password = $_POST['pass'];
     
        if ($conexion) {
              $sql = "SELECT * FROM registrouser WHERE correoregistro='$username'";
              $result = $conexion->query($sql);
              if($result->num_rows > 0){
                  while($row = $result->fetch_assoc()) {
                    if (!$result) {
                        echo '<p class="error">la convinacion es incorrecta!</p>';
                    } else {
                        if (password_verify($password, $row['passregistro'])) {
                            $_SESSION['user_id'] = $row['IdUser'];
                            //echo '<p class="success">Inicio de sesion correcto!</p>'.$row['passregistro'].'<br>'.$_SESSION['user_id'];
                            header('Location: https://listasdetareas.herokuapp.com/');
                        } else {
                            //echo '<p class="error">Usuario o contraseña incorrectos</p>';
                            header('Location: https://listasdetareas.herokuapp.com/login.php');
                        }
                    }
                  }
              }else{
                echo "error";
              }
        }
    }

?>