<?php
	$conexion = mysqli_connect("localhost","root","","instituto");
       $consulta = "SELECT * FROM alumnos";
       $resultado = mysqli_query($conexion,$consulta);

       while($fila = mysqli_fetch_array($resultado)){
       		echo $fila["nombre"]." ";
       }

?>