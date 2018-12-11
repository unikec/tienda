<?php 
//include 'conexionExa.php';
include 'conexion.php';

$id=$_GET['id'];
$hab=$_GET['hab'];
    
       $consulta= "UPDATE `poblaciones` SET `habitantes`=$hab WHERE $id";
     
       if(mysqli_query($conex,$consulta)) {
        echo "Registro actualizado.";
    } else {
        echo "ERROR: No se ejecuto $sql. " . mysqli_error($link);
    }
     
