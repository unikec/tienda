<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Ejercicio catorce Tema 3</title>
</head>
<body>


<h1>Función Date()</h1>
	<p>Utilizando la función predefinida date(), realiza una página en la que se muestre la fecha y
hora actual.
	<p>

<?php
$horaActual= date('j,n,y g:i:s a');
$fecha=date('j/n/y');
$hora= date('g:i a');
echo "Fecha y hora: ".$horaActual."<br>";

echo " Fecha: ".$fecha."<br>";
echo " Hora: ".$hora."<br>";
/*
 * j=dia sin cero inicial
 * n= mes sin cero inicial
 * y= año dos digitos finales
 * g= hora sin cero inicial
 * i= minutos con cero inicial
 * s= segundos con cero inicial
 * a=Ante meridiem y Post meridiem en minúsculas*/
?>


</body>
</html>