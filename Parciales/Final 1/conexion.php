<?php

$con = new mysqli("localhost:3307", "root", "", "bd_academica");

if ($con->connect_error)

    die("conexion fallada" . $con->connect_error);

?>
