<?php 
include 'conexionExa.php';
//include 'conexion.php';
    
       $consulta= "SELECT * FROM articulos";
       $resultado = mysqli_query($conex,$consulta);
 
        while($fila = mysqli_fetch_array($resultado)){
        echo $fila['Id'].','.$fila['descripcion'].','.$fila['precio'].',';
      
    }
   