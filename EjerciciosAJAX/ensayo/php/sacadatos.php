<?php 
include '../php/conexion.php';
    
       $consulta= "SELECT * FROM municipios";
       $resultado = mysqli_query($conex,$consulta);
      // $datos=[];
        while($fila = mysqli_fetch_array($resultado)){
        echo $fila["id"].','.$fila['municipio'].',';
      
    }
        

