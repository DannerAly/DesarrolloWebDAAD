<?php
include ('conexion.php');

$id = $_GET['id'];

$sql = "SELECT mensaje FROM correos WHERE id = '$id'";

$resultado = $con->query($sql);

if ($resultado->num_rows > 0) {
    $row = $resultado->fetch_assoc();
    ?>
    <div class="main-content">
        <?php echo $row['mensaje']; ?>
    </div>
<?php } else {
    echo "<div class='main-content'>No hay mensaje</div>";
}
?>
