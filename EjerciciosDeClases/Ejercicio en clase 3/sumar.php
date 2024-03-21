<?php
$n = $_POST['cantidaddenumeros'];

$suma =0;

for ($i = 0; $i < $n; $i++) { 

    $suma = $suma + $_POST["valor".$i];
}

echo "El valor de la suma es $suma";