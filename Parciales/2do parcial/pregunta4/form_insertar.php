    <?php include('conexion.php');
    $sql = "Select id, editorial from editoriales";
    $result = $con->query($sql);
    ?>
    <h1>Insertar Libro</h1>
    <br>
    <br>
    
    <form action="javascript:crearLibro()" method="post" id="datos-libro">
        <label for="">Imagen</label>
        <input type="file" name="imagen" id="imagen"><br>
        <label for="">Titulo:</label>
        <input type="text" name="titulo" id="titulo">
        <br>
        <label for="">Autor:</label>
        <input type="text" name="autor" id="autor">
        <br>
        <label for="">Año: </label>
        <input type="number" name="anio" id="anio">
        <br>
        <label for="editorial">Editorial: </label>
        <select name="ideditorial" id="ideditorial">
            <?php while ($editorial = $result->fetch_assoc()) {
            ?>
                <option value="<?php echo $editorial['id'] ?>"><?php echo $editorial['editorial'] ?></option>
            <?php } ?>
        </select>
        <br>
        <input type="submit" value="Insertar">

    </form>