<?php

session_start();

$usuario = $_POST['usuario'];
$password = $_POST['password'];
$captcha = $_POST['captcha'];

include ("conexion.php");


    $sql = "SELECT nombrecompleto, nivel FROM usuarios WHERE usuario = '$usuario' AND password = '$password'";
    $result = $con->query($sql);
    $persona = $result->fetch_assoc();

    if ($persona > 0 && $_SESSION['captcha'] == $captcha) {
        echo "Usuario Autenticado: " . $persona['nombrecompleto']. " Nivel: ". $persona['nivel'];
        $nivelUsuario = $persona['nivel'];
        $_SESSION['logueado'] = 1;

        $_SESSION['nivelUsuario'] = $nivelUsuario;
    } else {
     echo "Usuario, Contraseña o Captcha incorrecto";
        $_SESSION['logueado'] = 0;
    }

    //echo "felicidades estas good ".$usuario." ".$password;


?>