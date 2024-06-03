<?php
include ("conexion.php");

$sql = "SELECT id, imagen FROM libros";
$result = $con->query($sql);

?>

<div id="galeria">
<?php 
while ($libro = $result->fetch_assoc()){
?>
    <div    class="imagen" 
            id = "<?php echo $libro['id'] ?>" 
            onclick="javascript:agrandarImagen(<?php echo $libro['id'] ?>)">
        <img src="img/<?php echo $libro["imagen"]?>" alt="">
    </div>
<?php } ?>
</div>