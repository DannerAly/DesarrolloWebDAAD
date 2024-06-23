<?php 
include ("ListaAlumnos.php");
session_start();

$i = $_GET['indice'];

$_SESSION['listaAlumnos']->eliminarAlumno($i);

echo "alumno .$cu. eliminado";
?>