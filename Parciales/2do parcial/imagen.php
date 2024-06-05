<?php

$id = $_GET['id'];
include ("conexion.php");
//echo "Prueba".$id;
/*$sql = "SELECT 
            libros.id, 
            libros.imagen, 
            libros.titulo, 
            libros.autor, 
            editoriales.editorial, 
            libros.anio
        FROM 
            libros
        JOIN 
            editoriales 
            ON libros.ideditorial = editoriales.id
        WHERE id=".$id;*/

$sql = "SELECT id, imagen, titulo, autor, anio FROM libros WHERE id=".$id; 
$result = $con->query($sql);

$row = $result->fetch_assoc();
$imagen = $row['imagen'];
$titulo = $row['titulo'];
$autor  = $row['autor'];
//$editorial = $row['editorial'];
$anio = $row['anio'];

?>

<img src="images/<?php echo $imagen?>" alt="">
<p> Titulo: <?php echo $titulo?> </p>
<p> Autor: <?php echo $autor?> </p>
<p> Editorial: Bolivia<?php // echo $editorial ?> </p>
<p> Año: <?php echo $anio?> </p>

<?php //echo $imagen?>