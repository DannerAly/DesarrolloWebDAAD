<?php
include ('conexion.php');

$sql = "SELECT id, correo, asunto, mensaje FROM correos WHERE tipo = 'S';";


$resultado = $con->query($sql);

if ($resultado->num_rows > 0) {
    ?>
    <div class="main-content">
        <table class="correos-table">
            <tr>
              
                <th>Para:</th>
                <th>Asunto</th>
                <th>Mensaje</th>
    
            </tr>
            <?php while ($row = $resultado->fetch_assoc()) { ?>
                <tr>
                    
                    <td onclick="javascript:mostrarMensaje(<?php echo $row ['id']?>)" ><?php echo $row['correo']; ?></td>
                    <td><?php echo $row['asunto']; ?></td>
                    
                    
                </tr>
            <?php } ?>
        </table>
    </div>
<?php } else {
    echo "<div class='main-content'>No hay registros que mostrar</div>";
}
?>
