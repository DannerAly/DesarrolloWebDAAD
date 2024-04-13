<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         table {
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }

        th {
            font-weight: bold;
            color: gray;
        }
    </style>
</head>
<body>
<?php

class Pregunta3{


    private $palabra;
    private $color;
    private $color_fondo;


    function __construct($palabra,$color,$color_fondo){
        $this ->palabra = $palabra;
       $this ->color = $color;
        $this ->color_fondo = $color_fondo;
    }


    public function cuadrado(){

        $cantLetras = strlen($this->palabra);

        echo "<table>";
            for($i=0;$i<=$cantLetras;$i++)
            {
                echo "<tr>";
                
                
                for($j=0;$j<$cantLetras;$j++){

                    echo "<th>".$this->palabra[$i]."</th>";

                }
                
                
                echo "</tr>";
            }

        echo "</table>";
        
        
    }

    public function diagonal(){

        $cantLetras = strlen($this->palabra);
        echo "<table>";
        for($i=0;$i<$cantLetras;$i++)
        {
            echo "<tr>";
            
            
            for($j=0;$j<$cantLetras;$j++){

                echo "<th>";
                for($x=0;$x<$cantLetras;$x++){
                if($i==$x && $j==$x)
                {
                 echo $this->palabra[$x];
                }
            }
                


                echo "</th>";

            }
            
            
            echo "</tr>";
        }
        echo "</table>";
    }
}





$p = new Pregunta3("danner","rojo","verde");
$p->cuadrado();
$p->diagonal();
?>


</body>
</html>