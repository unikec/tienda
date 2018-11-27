<?php
$conexion = new mysqli('localhost','root','','instituto');
$codigo = $_POST["codigo"];
$consulta = "select * from municipios WHERE provincia='".$codigo."';";
$resultado = mysqli_query($conexion,$consulta);

$opciones = "";
$opciones.='<option></option>';

while ($fila = mysqli_fetch_assoc($resultado)) {
$opciones.='<option>'.$fila["municipio"].'</option>';
}

echo '<select id="municipios">'.$opciones.'</select>';



 ?>
