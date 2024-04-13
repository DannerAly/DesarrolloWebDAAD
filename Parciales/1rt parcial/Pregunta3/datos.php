<?php

include("Pregunta3.php");

$palabra = $_GET['palabra'];

$color = $_GET['color'];

$color_fondo = $_GET['color_fondo'];

$op = $_GET['function'];

$p = new Pregunta3($palabra,$color,$color_fondo);

if($op==$tabla){

    $p->cuadrado();

}else{
    
$p->diagonal();

}
?>