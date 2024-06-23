<?php

include ("../conexion.php");

$materia = $_GET['materia'];

$sql = "SELECT nombres_apellidos FROM alumnos WHERE materia = '$materia';";

$result = $con->query($sql);
$datos = array();


if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $datos[] = $row;
    }
}
echo json_encode($datos, JSON_UNESCAPED_UNICODE);

?>
