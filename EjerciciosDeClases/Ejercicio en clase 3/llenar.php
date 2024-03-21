<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="sumar.php" method="post">

        <?php

        $numero = $_POST['n'];

        for ($i = 0; $i < $numero; $i++) {
            ?>
            <input type="number" name="valor<?php echo $i ?>"><br>

        <?php } ?>

        <input type="hidden" name="cantidaddenumeros" value="<?php echo $numero ?>">
        

        <input type="submit" value="Sumar">


    </form>

</body>

</html>