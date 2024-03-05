<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EjercicioEnClases2</title>
</head>

<body>
    <?php
    $n = 2;
    $a = 2;
    $b = 3;

    echo "<table>";
    for ($i = 0; $i < $a; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= $b; $j++) {
            $j * 2;
            echo "<td>$n</td>";
            $n = $n + 2;
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>

</html>