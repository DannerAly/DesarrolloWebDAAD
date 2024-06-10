<?php
include ('conexion.php');

$sql = "SELECT id, tipo, correo, asunto, mensaje, estado FROM correos WHERE tipo = 'E';";


$resultado = $con->query($sql);

if ($resultado->num_rows > 0) {
    ?>
    <div class="main-content">
        <table class="correos-table">
            <tr>
                
                <th>De:</th>
                <th>Asunto</th>
            </tr>
            <?php while ($row = $resultado->fetch_assoc()) { ?>
                <tr>
                    <td onclick="javascript:mostrarMensaje(<?php echo $row ['id']?>)"><?php echo $row['correo']; ?></td>
                    <td onclick="javascript:mostrarMensaje(<?php echo $row ['id']?>)"><?php echo $row['asunto']; ?></td>
                   <!--<td><?php  //echo $row['mensaje']; ?></td>-->
                </tr>
            <?php } ?>
        </table>
    </div>
<?php } else {
    echo "<div class='main-content'>No hay registros que mostrar</div>";
}
?>
