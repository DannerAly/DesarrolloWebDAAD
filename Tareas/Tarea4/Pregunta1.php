<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$cadena = "El correo institucional de la Universidadesas por fa Ing. no se olvide";

function PalabraMasLarga($cadena)
{

    $palabras = explode(" ", $cadena);

    $longitudMax = 0;
    $palabraMasLarga = "";

    foreach ($palabras as $palabra) {

        $longitudPalabra = strlen($palabra);

        if ($longitudPalabra > $longitudMax) {

            $longitudMax = $longitudPalabra;
            $palabraMasLarga = $palabra;

        }
    }

    return $palabraMasLarga;
}

echo "La palabra mas larga de la Oracion <b> $cadena </b> es:  " . PalabraMasLarga($cadena);

?>

</body>
</html>