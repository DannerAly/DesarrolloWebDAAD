<?php
include("conexion.php");

$tipo = "S";
$correo = $_POST['correo'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje']; 
$estado = "1";

$mensaje = $con->real_escape_string($mensaje);

$sql= "INSERT INTO correos (tipo, correo, asunto, mensaje, estado) 
values ('$tipo', '$correo', '$asunto', '$mensaje', '$estado')";

//echo $sql;
$result = $con->query($sql);  
if(!$result){
    die("Error al insertar datos: " . $con->error);
}
?>
<div>Se insertó con éxito</div>
