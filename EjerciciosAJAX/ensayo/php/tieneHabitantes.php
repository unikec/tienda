<?php 
include '../php/conexion.php';
$id=$_GET['id'];
    
       $consulta= "SELECT habitantes FROM municipios where municipios.id=$id";
       $resultado = mysqli_query($conex,$consulta);
      $dato;
        while($fila = mysqli_fetch_array($resultado)){

               $dato=  $fila['habitantes'].',';
      
    }
    if(!$dato=''){
        echo 'si';
    }else{
        echo 'no';
    }