<?php
include("conexion.php");
$idTitulo = $_GET['id'];
$sql = "SELECT id, imagen FROM libros WHERE id_titulo = $idTitulo";

$result = $con->query($sql);
$datos = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $datos[] = $row;
    }
}
echo json_encode($datos, JSON_UNESCAPED_UNICODE);
?>
