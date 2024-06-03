<?php
session_start();


if(isset($_SESSION['logueado'])){

?>

<div id="menu_botones">
    <div class="boton"> 1</div>
    <div class="boton" onclick="javascript:pregunta2()"> 2</div>
    <div class="boton" onclick="javascript:abrirLogin()"> 3</div>
    <div class="boton" onclick="javascript:verificarLogueado(<?php echo $_SESSION['logueado']?>)"> 4</div>
    <div class="boton" onclick="javascript:ObtenerTitulos()"> 5</div>
</div>
<?php 
}else{
?>

<div id="menu_botones">
    <div class="boton"> 1</div>
    <div class="boton" onclick="javascript:pregunta2()"> 2</div>
    <div class="boton" onclick="javascript:abrirLogin()"> 3</div>
    <div class="boton" onclick="javascript:verificarLogueado(<?php 0 ?>)"> 4</div>
    <div class="boton" onclick="javascript:ObtenerTitulos()"> 5</div>
</div>
<?php
}



?>