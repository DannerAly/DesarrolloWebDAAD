<?php
include("conexion.php");

$Titulo = $_POST["titulo"];
$Autor = $_POST["autor"];
$Anio = $_POST["anio"];
$Editorial = $_POST["ideditorial"];

$nombre=$_FILES['imagen']['name'];  //obtenemos el nombre del archivo
$temp=$_FILES['imagen']['tmp_name']; //obtenemos la ruta del archivo en el servidor
$arreglo=explode(".", $nombre);
$extension=$arreglo[1];// obtengo la extension del archivo
$nuevonobre=uniqid().".".$extension;//Le doy un nuevo nombre de archivo
copy ($temp,"images/".$nuevonobre);//copio el archivo a la carpeta de imagenes

$sql= "INSERT INTO PERSONAS (imagen, titulo, autor, ideditorial, anio ) 
values ('$nuevonombre', '$Titulo', '$Autor', $Editorial,'$Anio')";

//echo $sql;
$result = $con->query($sql);  
if(!$result){
    die("Error al insertar datos: " . $con->error);
}
?>
<div>Se inserto con exito</div>
