<?php

include ('conexion.php');

$texto = $_POST['texto'];

$carreras = [
];

$sql = "SELECT carrera FROM carreras;"; 
$resultado = $con->query($sql); 
while ($row = $resultado->fetch_assoc()) {
    array_push($carreras, $row['carrera']); 
}

$resultados = array();
foreach ($carreras as $carrera) {
    if (strpos($carrera, $texto)) {
        array_push($resultados, $carrera);
    }
}

echo json_encode($resultados);