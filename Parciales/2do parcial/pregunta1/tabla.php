<?php

$filas = $_POST['nroFilas'];

$columnas = $_POST['nroColumnas'];
$x= 0;
echo "<table>";

        for ($i = 0; $i < $filas; $i++) {
            echo "<tr>";    
            for ($j = 0; $j < $columnas; $j++) {
                ?><td id="<?php echo $x ?>" onclick="">  </td> <?php
            $x += 1;
            }
            echo "</tr>";
        }
echo "</table>";
?>