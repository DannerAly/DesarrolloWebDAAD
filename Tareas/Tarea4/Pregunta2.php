<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$numeros = [];
for ($i = 0; $i < 20; $i++) {
    $numeros[$i] = rand(1, 20);
}

$numerosPares = array();
$numerosImpares = array();

foreach ($numeros as $numero){

    if($numero%2 == 0){
        $numerosPares[] = $numero;
    }
    else{
        $numerosImpares[]= $numero;
    }
}

echo "20 Numeros generados aleatoriamente en el rango (1-20): " .implode(", ", $numeros) ."<br>";

echo "Los números pares son: " .implode(", ", $numerosPares) ."<br>";
echo "Los números impares son: " .implode(", ", $numerosImpares) ."<br>";

?>
    
</body>
</html>