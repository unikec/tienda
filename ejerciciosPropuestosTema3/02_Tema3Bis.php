
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Ejercicio Uno Tema 3</title>
</head>
<body>
<?php
include 'funcionesDeMates.php';
?>
<h1>Tablas de multplicar del 1 al 10</h1>
	<p>Realiza una página web que muestre todas las tablas de multiplicar
		del 1 al 10.
	<p>
 
 
<?php
$cuantas=10; //variable que le paso a la función para determinar cuantas tablas imprime
muestraTablas($cuantas);

?>



</body>
</html>