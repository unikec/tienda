<?php
$conexion = new mysqli('localhost','root','','instituto');
$consulta = "select * from notas WHERE codigoAlumno =(select codigo from alumnos)";
$resultado = mysqli_query($conexion,$consulta);


 ?>
