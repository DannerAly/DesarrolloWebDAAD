<?php

$id = $_GET['id'];
include ("conexion.php");
//echo "Holiiiiii".$id;
$sql = "SELECT imagen FROM libros WHERE id=".$id;
$result = $con->query($sql);

$row = $result->fetch_assoc();
$imagen = $row['imagen'];


?>

<img src="img/<?php echo $imagen?>" alt="">
<?php //echo $imagen?>