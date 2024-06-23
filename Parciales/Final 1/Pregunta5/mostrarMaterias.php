<?php

session_start();
include ("../conexion.php");

$id = $_SESSION['id_usuario'];

$sql = "SELECT materia FROM usuarios_materias WHERE idusuario = '$id' ";
$result = $con->query($sql);
$datos = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $datos[] = $row;
    }
}
echo json_encode($datos, JSON_UNESCAPED_UNICODE);
/*
while ($persona = $result->fetch_assoc()) {
    ?>
    <ul>
        <li> <?php echo $persona['materia']; ?> </li>
    </ul>
    <?php
}
*/
//echo $sql;

?>

