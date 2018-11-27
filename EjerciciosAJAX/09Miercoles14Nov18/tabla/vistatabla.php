<?php 
include "conexion.php";

function obtenerOfertas($conn){
    $sql="select * from datos, notas where dni=ndni";
    $ofertas=[];
    $result = $conn->query($sql);
        
        while($row = $result->fetch_assoc()) {
            
           $ofertas[]=$row;
        }
      
    return $ofertas;
}
$lista=obtenerOfertas($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   
<?php obtenerOfertas($conn);?>

   <table border="solid">
        <tr>
            <th>DNI</th>
            <th>NOMBRE</th>
            <th>TELEFONO</th>
            <th>DETALLES</th>
        </tr>

        <tr>
            <td><?php echo $lista[0]["dni"];?></td>
            <td><?php echo $lista[0]["nombre"];?></td>
            <td><?php echo $lista[0]["telefono"];?></td>
            <td><?php echo "<a onclick=buscaalumno('".$lista[0]['dni']."')>"; ?>  Detalles</a></td>
            
        </tr>
        <tr>
            <td><?php echo $lista[1]["dni"];?></td>
            <td><?php echo $lista[1]["nombre"];?></td>
            <td><?php echo $lista[1]["telefono"];?></td>
            <td><?php echo "<a onclick=buscaalumno('".$lista[1]['dni']."')>"; ?>  Detalles</a></td>
        </tr>
    </table>

</body>
</html>

