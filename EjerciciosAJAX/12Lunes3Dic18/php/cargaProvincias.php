<?php 
include '../php/conexion.php';
       $consulta = "SELECT * FROM provincias";
       $resultado = mysqli_query($conex,$consulta);

        while($fila = mysqli_fetch_array($resultado)){
       	 echo $fila["id"].','.$fila["provincia"],',';
       	}

       