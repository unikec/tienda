<?php
$conexion = new mysqli('localhost','root','','instituto');

//variables del formulario
$codigo = $_POST['codigo'];


//consulta BORRAR
$consulta = "DELETE FROM alumnos WHERE codigo =".$codigo;

$resultado = mysqli_query($conexion,$consulta);

include('consulta.php');

?>
