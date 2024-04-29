<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Generada</title>
    <style>
        table {
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
            padding-left: 40px;
            
            padding-right: 40px;
        }

        th {
            font-weight: bold;
            color: white;
            border: 2px solid orange;
            background-color: orange;

        }

        .margen{
            display: flex;
            flex-direction: row;
            width: 500px;
            height: 100px;
            border: 5px solid orange;
            justify-content: center;
            align-items: center;

        }
        .botonesBlancos {
         border: 2px solid rgb(255, 166, 0);
            padding: 10px;
            width: 100px;
            background-color: rgb(255, 166, 0);
         color: white;
         justify-content: center;
        }

        .input{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;

        }
    </style>
</head>
<body>
    <?php
    $operacion = $_POST["operacion"];
    $n = $_POST["n"];

    if($operacion == "suma"){
        echo "<h1>Suma</h1>";
    
        echo "<table>";

        for ($i = 0; $i <= $n; $i++) {
            echo "<tr>";    
            for ($j = 0; $j <= $n; $j++) {
                if ($i == 0 && $j == 0) {
                    echo "<th></th>";
                } elseif ($i == 0) {
                    echo "<th>$j</th>";
                } elseif ($j == 0) {
                    echo "<th>$i</th>";
                } else {
                    echo "<td>" . ($i + $j) . "</td>";
                }
            }
            echo "</tr>";
        }

        echo "</table>";

    }elseif($operacion == "resta"){
        echo "<h1>Resta</h1>";

        echo "<table>";

        for ($i = 0; $i <= $n; $i++) {
            echo "<tr>";
            for ($j = 0; $j <= $n; $j++) {
                if ($i == 0 && $j == 0) {
                    echo "<th></th>";
                } elseif ($i == 0) {
                    echo "<th>$j</th>";
                } elseif ($j == 0) {
                    echo "<th>$i</th>";
                } else {
                    echo "<td>" . ($i - $j) . "</td>";
                }
            }
            echo "</tr>";
        }

        echo "</table>";

    }elseif($operacion == "multiplicacion"){

        echo "<h1>Multiplicacion</h1>";

        echo "<table>";

        for ($i = 0; $i <= $n; $i++) {
            echo "<tr>";
            for ($j = 0; $j <= $n; $j++) {
                if ($i == 0 && $j == 0) {
                    echo "<th></th>";
                } elseif ($i == 0) {
                    echo "<th>$j</th>";
                } elseif ($j == 0) {
                    echo "<th>$i</th>";
                } else {
                    echo "<td>" . ($i * $j) . "</td>";
                }
            }
            echo "</tr>";
        }

        echo "</table>";

    }else{
        echo "<h1>Division</h1>";

        echo "<table>";

        for ($i = 0; $i <= $n; $i++) {
            echo "<tr>";
            for ($j = 0; $j <= $n; $j++) {
                if ($i == 0 && $j == 0) {
                    echo "<th></th>";
                } elseif ($i == 0) {
                    echo "<th>$j</th>";
                } elseif ($j == 0) {
                    echo "<th>$i</th>";
                } else {
                    echo "<td>" . ($i / $j) . "</td>";
                }
            }
            echo "</tr>";
        }

        echo "</table>";

    }



    
    ?>
</body>
</html>