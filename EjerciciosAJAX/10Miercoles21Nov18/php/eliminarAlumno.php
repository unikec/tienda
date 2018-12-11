<?php
include '../php/conex.php';
 $id= $_GET["id"];

 $consulta = "DELETE FROM alumnostb WHERE alumnostb.id=".$id;

 $resultado = mysqli_query($conex,$consulta);

 /*Esta parte final, pueden ser elimminados una vez se compruebe la correcta ejecución del codigo
     * así como la variable result, que solo está para depurar más rapido
     */
if($resultado){
        echo "Eliminado";
 }else{
        echo "error al eliminar";
 }