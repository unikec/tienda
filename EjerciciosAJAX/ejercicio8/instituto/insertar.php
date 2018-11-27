<?php
$conexion = new mysqli('localhost','root','','instituto');

//variables del formulario
$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$provincia = $_POST['provincia'];
$poblacion = $_POST['poblacion'];
$telefono = $_POST['telefono'];

//consulta insert
$consulta = "INSERT INTO alumnos (Codigo, Nombre, Direccion, Provincia, Poblacion, Telefono)".
"VALUES ('".$codigo."','".$nombre."','".$direccion."','".$provincia."','".$poblacion."','".$telefono."') ";

$resultado = mysqli_query($conexion,$consulta);

include('consulta.php');
?>
