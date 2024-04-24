<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        th {
            font-weight: bold;
        }
    </style>
</head>
<body>
<?php
// Incluir el archivo de conexión a la base de datos
include("conexion.php");

$ingresados= $_COOKIE['filas'];
//$sqlmostrar = "SELECT * FROM alumnos ORDER BY id DESC LIMIT $ingresados";



// Consulta SQL para obtener los datos de los alumnos con el nombre de la carrera
$sql = "SELECT alumnos.*, carreras.carrera AS nombre_carrera 
        FROM alumnos 
        INNER JOIN carreras ON alumnos.id_carrera = carreras.id ORDER BY id DESC LIMIT $ingresados";



// Ejecutar la consulta
$resultado = $con->query($sql);
//$resultadomostrar = $con->query($sqlmostrar);
?>

<table>
<tr>
    <th>Nro</th>
    <th>Fotografia</th>
    <th>Nombres</th>
    <th>Apellidos</th>
    <th>CU</th>
    <th>Sexo</th>
    <th>Carrera</th>
</tr>
<?php
$i = 0;
while($fila = $resultado->fetch_assoc()){
?>
<tr>
    
    <td><?php echo $i+1 ?></td>
    <td><img src="images/<?php echo $fila["fotografia"]; ?>" width="50" height="50"></td>
    <td><?php echo $fila['nombres'] ?></td>
    <td><?php echo $fila['apellidos'] ?></td>
    <td><?php echo $fila['cu'] ?></td>
    <td><?php echo $fila['sexo'] ?></td>
    <td><?php echo $fila['nombre_carrera'] ?></td> 
    <?php $i++; ?>
</tr>
<?php
}        
?>
</table>



</body>
</html>