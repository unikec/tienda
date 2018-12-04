<?php 
include './php/conexion.php';
	   $id = $_POST["id"];

       $consulta = "SELECT municipio FROM municipios WHERE provincia_id=".$id;
       $resultado = mysqli_query($conex,$consulta);


        while($fila = mysqli_fetch_array($resultado)){
       	 echo $fila['id'].','.$fila["municipio"];
       	}

      