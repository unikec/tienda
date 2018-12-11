<?php 
include '../php/conexion.php';

	   $id = $_GET["id"];

       $consulta = "SELECT * FROM municipios WHERE provincia_id='".$id."'";
       $resultado = mysqli_query($conex,$consulta);
       while($fila = mysqli_fetch_array($resultado)){
           //echo  $fila['id'].','.$fila["municipio"].',';
           echo  $fila["municipio"].',';
    }
/*
           include '../php/conexion.php';
           $consulta = "SELECT * FROM provincias";
           $resultado = mysqli_query($conex,$consulta);
    
            while($fila = mysqli_fetch_array($resultado)){
                echo $fila["id"].','.$fila["provincia"],',';
               }
  */