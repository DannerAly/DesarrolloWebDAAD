<?php 
include('verificar.php');
?>
<?php
include("conexion.php");
if (isset($_GET['ordenar']))
{
    $ordenar=$_GET['ordenar'];
}
else
{
    $ordenar="id";
}
if (isset($_GET['filtro']))
{
    $filtro=$_GET['filtro'];
    $sql = "SELECT p.imagen,p.id,titulo,autor,anio,o.editorial as editoriales FROM libros p
    LEFT JOIN editoriales o on p.editorial_id=o.id where editorial like '%$filtro%' order by $ordenar asc";
}
else
{
        $sql ="SELECT p.imagen,p.id,titulo,autor,anio as editoriales FROM libros p
                LEFT JOIN editoriales o on p.ideditorial=o.id order by $ordenar asc";}
$result = $con->query($sql);
$i = 1;
if ($result->num_rows > 0) {
?>
    <table border='1'>
        <tr>
            <th>Nro</th>
            <th>Fotografia</th>
            <th><a href="read.php?ordenar=imagen">Imagen</a></th>
            <th><a href="read.php?ordenar=titulo">Titulo</a></th>
            <th><a href="read.php?ordenar=autor">Autor</a></th>
            <th><a href="read.php?ordenar=editorial">Editorial</a></th>
            <th><a href="read.php?ordenar=anio">Año</a></th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
        ?>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><img src="images/<?php echo $row["imagen"]; ?>" width="50" height="50"></td>
                <td><?php echo $row["titulo"]; ?></td>
                <td><?php echo $row["autor"]; ?></td>
                <td><?php echo $row["editorial"]; ?></td>
                <td><?php echo $row["anio"]; ?></td>
                <td><?php if($_SESSION['nivel']==1){
                    ?>
                <?php } ?> </td>
            </tr>
        <?php } ?>
    </table>
<?php
} else {
    echo "0 resultados";
}
mysqli_close($con);
?>
<?php 
if($_SESSION['nivel']==1){
    ?>
    <a href="form_insertar.php">Insertar</a>
    <?php
}








?>