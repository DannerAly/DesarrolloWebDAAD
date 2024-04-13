<?php

$a = $_POST['a'];

$b = $_POST['b'];

setcookie("a",$a,time()+3600);

setcookie("b",$b,time()+3600);


?>
<h1>Elija la operacion que desea realizar:</h1>
<br>
<a href="sumar.php"> SUMAR </a><br>
<a href="restar.php"> RESTAR </a><br>
<a href="multiplicar.php"> MULTIPLICAR </a>

<?php

?>