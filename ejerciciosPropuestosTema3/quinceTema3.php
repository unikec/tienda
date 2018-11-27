<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Ejercicio quince Tema 3</title>
</head>
<body>

<h1>Función Date() y time()</h1>
	<p>Utilizando la función date() y time() escribe una página que muestre la fecha que será
dentro de 50 segundos, y dentro de 2 horas, 4 minutos y 3 segundos.
	<p>

<?php


$cincuentaSegundos=time()+50;//le añado 50 segundos a time()
echo "la fecha y hora actual es ".date('d/m/y g:i:s' )."<br>";
echo "la fecha y hora dentro de 50s será ".date('d/m/y g:i:s',$cincuentaSegundos)."<br>";

$mas2horas=time()+7443;//le añado en segundos 2h+4min+3 ((124*60)+3)=7443
echo "la fecha  y hora dentro de 2h, 4min y 3s (en segundos) será ".date('d/m/y g:i:s',$mas2horas)."<br>";


?>


</body>
</html>
