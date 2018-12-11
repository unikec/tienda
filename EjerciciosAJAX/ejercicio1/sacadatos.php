<?php 
//include 'conexionExa.php';
include 'conexion.php';
    
       $consulta= "SELECT * FROM poblaciones";
       $resultado = mysqli_query($conex,$consulta);
      // $datos=[];
        while($fila = mysqli_fetch_array($resultado)){
        echo $fila["postal"].','.$fila['poblacion'].',';
      
    }
   