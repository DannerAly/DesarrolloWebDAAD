<?php
include ('conexion.php');
session_start();

if (isset($_SESSION['nivelUsuario'])) {
    $nivelUsuario = $_SESSION['nivelUsuario'];
} else {
    $nivelUsuario = 0;
}

$sql = "SELECT 
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
            ON libros.ideditorial = editoriales.id;";

$resultado = $con->query($sql);
if ($nivelUsuario == 1) {
    if ($resultado->num_rows > 0) {
        ?>
        <div class="libro-container">
            <table border="1">
                <tr>
                    <th>ID</th>
                    <th>Imagen</th>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Editorial</th>
                    <th>Año</th>
                    <th>Operaciones</th>
                </tr>
                <?php while ($row = $resultado->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><img src="img/<?php echo $row['imagen']; ?>" alt="img" width="50px"></td>
                        <td><?php echo $row['titulo']; ?></td>
                        <td><?php echo $row['autor']; ?></td>
                        <td><?php echo $row['editorial']; ?></td>
                        <td><?php echo $row['anio']; ?></td>

                        <td>
                            <a href="javascript:update()"><button class="btn_editar">Editar</button></a>
                            <a href="javascript:delete()"><button class="btn_eliminar">Eliminar</button></a>
                        </td>
                    </tr>
                    <?php
                } ?>
            </table>
        </div>
    <?php } else {
        echo "No hay registros que mostrar";
    }
} else {
    if ($resultado->num_rows > 0) {
        ?>
        <div class="libro-container">
            <table border="1">
                <tr>
                    <th>ID</th>
                    <th>Imagen</th>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Editorial</th>
                    <th>Año</th>

                </tr>
                <?php while ($row = $resultado->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><img src="img/<?php echo $row['imagen']; ?>" alt="img" width="50px"></td>
                        <td><?php echo $row['titulo']; ?></td>
                        <td><?php echo $row['autor']; ?></td>
                        <td><?php echo $row['editorial']; ?></td>
                        <td><?php echo $row['anio']; ?></td>


                    </tr>
                    <?php
                } ?>
            </table>
        </div>
    <?php } else {
        echo "No hay registros que mostrar";
    }
}

session_destroy();
?>