<?php 
include '../php/conexion.php';
       $consulta = "SELECT * FROM  alumnostb";
       $resultado = mysqli_query($conex,$consulta);
   
        while($fila = mysqli_fetch_array($resultado)){
     
     echo $fila["nombre"].','.$fila["telefono"].','.$fila["provincia"];

      }
        
