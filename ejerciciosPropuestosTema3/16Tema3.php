<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Ejercicio dieciseis Tema 3</title>
</head>
<body>
<?php 
include 'funcionesFechas.php';
?>
<h1>Mas usos date()</h1>
	<p>Utilizando la función date() y la función NombreMes() creada anteriormente, muestra el
nombre del mes en el que estamos.
Crea la función en el fichero “funciones_fecha.php” que luego incluirás (include o require)
en la solución.
	<p>

<?php
$numMes=date('n'); //con el parameto 'n' obtengo el numero del mes actual sin ceros iniciales
echo "El mes actual en numero es: ".$numMes."<br>";
$nomMes=NombreMes($numMes);
echo "El mes actual en letra es: ".$nomMes."<br>";

?>


</body>
</html>
