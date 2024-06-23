<?php

include ("../conexion.php");

$sql = "SELECT materia FROM alumnos;";
$result = $con->query($sql);
$datos = array();
$materias_unicas = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        
        if (!isset($materiasUnicas[$row['materia']])) {
            //si no esta en el array se le añade poniendole true 
            $materiasUnicas[$row['materia']] = true;  
            $datos[] = array("materia" => $row['materia']);  
        }
    }
}

echo json_encode($datos, JSON_UNESCAPED_UNICODE);

?>
