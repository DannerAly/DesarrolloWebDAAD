<?php
include("ListaAlumnos.php");

$cu = $_POST['cu'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];

$newAlumno = new Alumno($cu, $nombres, $apellidos);


//$newAlumno = new Alumno("1234", "Prueba", "Pruvita");

$_SESSION['listaAlumnos']->insertarAlumno($newAlumno);

$_SESSION['listaAlumnos']->mostrarLista();

