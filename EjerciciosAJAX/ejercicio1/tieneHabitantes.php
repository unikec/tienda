<?php 
//include 'conexionExa.php';
include 'conexion.php';
$id=$_GET['id'];
    
       $consulta= "SELECT habitantes FROM poblaciones  where poblaciones.id=$id";
       $resultado = mysqli_query($conex,$consulta);
      $dato;
        while($fila = mysqli_fetch_array($resultado)){

               $dato=  $fila['habitantes'].',';
      
    }
    if(!$dato == null){
        echo 'si';
    }else{
        echo 'no';
    }