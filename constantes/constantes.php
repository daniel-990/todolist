<?php 

    //base de datos
    define('SERVER','bjoibyiqiyvjwyxzpm84-mysql.services.clever-cloud.com');
    define('USER','ueamjdjmr2pcpuzi');
    define('PASS','jGY47l3DLffuKbXoxej9');
    define('DB','bjoibyiqiyvjwyxzpm84');

    //correo
    define('EMAIL_SENDER', 'danielarangopagina@gmail.com');
    define('EMAIL_PASS', 'K16bdNhFyQfw');

    $pass = "dam";
    $passHash = password_hash($pass, PASSWORD_BCRYPT);
    
    if(password_verify("dam",$passHash)){
        //echo "si";
    }else{
        //echo "no";
    }

?>
