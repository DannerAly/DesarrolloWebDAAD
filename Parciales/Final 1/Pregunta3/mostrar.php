<?php
include("ListaAlumnos.php");

if(!isset($_SESSION['listaAlumnos'])){
    $_SESSION['listaAlumnos'] = new ListaAlumnos();
}
$_SESSION['listaAlumnos']->mostrarLista();