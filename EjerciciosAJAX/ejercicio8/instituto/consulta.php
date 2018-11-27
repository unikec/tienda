<?php

$conexion = new mysqli('localhost','root','','instituto');
$consulta = "select * from alumnos";
$resultado = mysqli_query($conexion,$consulta);



$tabla = "";
$tabla.='<tr>
  <td>Codigo</td>
  <td>Nombre</td>
  <td>Direccion</td>
  <td>Provincia</td>
  <td>Poblacion</td>
  <td>Telefono</td>
  </tr>';
while ($fila = mysqli_fetch_assoc($resultado)) {
  $tabla.='<tr>'.
  '<td>'.$fila["Codigo"].'</td>
  <td>'.$fila["Nombre"].'</td>
  <td>'.$fila["Direccion"].'</td>
  <td>'.$fila["Provincia"].'</td>
  <td>'.$fila["Poblacion"].'</td>
  <td>'.$fila["Telefono"].'</td>'.
  '</tr>';
}
echo '<table>'.$tabla.'</table>';
