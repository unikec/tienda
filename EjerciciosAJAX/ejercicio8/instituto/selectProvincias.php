<?php
$conexion = new mysqli('localhost','root','','instituto');
$consulta = "select * from provincias";
$resultado = mysqli_query($conexion,$consulta);

$opciones = "";
$opciones.='<option></option>';

while ($fila = mysqli_fetch_assoc($resultado)) {
$opciones.='<option value="'.$fila["id"].'">'.$fila["provincia"].'</option>';
}

echo '<select id="provincias" onchange="selectM()">'.$opciones.'</select>';



 ?>
