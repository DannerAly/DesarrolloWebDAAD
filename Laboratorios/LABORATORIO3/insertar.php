<?php
include ("conexion.php");

$filas = $_COOKIE['filas'];

for ($i = 0; $i < $filas; $i++) {

    $nombrealumno = $_POST['txtNombre' . $i];
    $apellido = $_POST['txtApellido' . $i];
    $cu = $_POST['txtCU' . $i];
    $sexo = $_POST['txtSexo' . $i];
    $carrera = $_POST['carrera_id' . $i];


    $nombre=$_FILES['fotografia' . $i]['name'];  //obtenemos el nombre del archivo
    $temp=$_FILES['fotografia' . $i]['tmp_name']; //obtenemos la ruta del archivo en el servidor
    $arreglo=explode(".", $nombre);
    $extension=$arreglo[1];// obtengo la extension del archivo
    $nuevonobre=uniqid().".".$extension;//Le doy un nuevo nombre de archivo
    copy ($temp,"images/".$nuevonobre);//copio el archivo a la carpeta de imagenes
    
    $sql = "INSERT INTO alumnos(fotografia,nombres,apellidos,cu,sexo,id_carrera) values
        ('$nuevonobre','$nombrealumno','$apellido','$cu','$sexo','$carrera')";

    $con->query($sql);

}
?>
<meta http-equiv="refresh" content="2;URL=ListaAlumnos.php">