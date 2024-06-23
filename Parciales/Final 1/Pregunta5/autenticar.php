<?php

session_start();

$usuario = $_POST['user'];
$password = $_POST['password'];


include ("../conexion.php");


    $sql = "SELECT id ,usuario, password FROM usuarios WHERE usuario = '$usuario' AND password = '$password'";
    $result = $con->query($sql);
    $persona = $result->fetch_assoc();

 //   $id = $persona['id'];

    if ($persona > 0 ) {
        echo "Usuario Autenticado: " . $persona['usuario'];

        $_SESSION['logueado'] = 1;
      //  $_SESSION['id_usuario'] =  $id;


    } else {
     echo "Usuario, Contraseña incorrecto";
        $_SESSION['logueado'] = 0;
    }

    //echo "felicidades estas good ".$usuario." ".$password;


?>