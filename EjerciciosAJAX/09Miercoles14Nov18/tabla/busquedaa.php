<?php 
include "conexion.php";

function obtenerbusque($conn, $dato){
    $sql="select * from datos, notas where dni='".$dato."' AND ndni='".$dato."'";
    $datos="";
    $result = $conn->query($sql);

            while($row = $result->fetch_assoc()) {
            $datos.=$row["dni"].",";
            $datos.=$row["nombre"].",";
            $datos.=$row["telefono"].",";
            $datos.=$row["localidad"].",";
            $datos.=$row["provincia"].",";
            $datos.=$row["fechanacimiento"].",";
            $datos.=$row["asignatura"].",";
            $datos.=$row["nota"];
            }
            
   echo $datos;
}


$dato=$_GET["dato"];
$lista=obtenerBusque($conn, $dato);

?>