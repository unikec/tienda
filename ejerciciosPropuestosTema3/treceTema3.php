<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Ejercicio trece Tema 3</title>
</head>
<body>
<?php

function intercambia(&$x, &$y)
{ $temp=$x;
    $x = $y;
    $y = $temp;
    echo "Durante de la función el valor de v1 es: " . $x . " y v2 es: " . $y . "<br>";
}

?>

<h1>Probando las Referencias</h1>
	<p>Crea la función Intercambia(v1, v2) la cual intercambiará el valor
		de las dos variables. Realizar una página en la que se pruebe el
		funcionamiento de dicha función intercambiando el valor de dos
		variables. Mostrar las variables antes y después de la invocación de
		la función.
	
	
	<p>

<?php
$v1 = 1;
$v2 = 2;
echo "Antes de la función el valor de v1 es: " . $v1 . " y v2 es: " . $v2 . "<br>";

intercambia($v1, $v2);
echo "Despues de la función el valor de v1 es: " . $v1 . " y v2 es: " . $v2;

?>


	
	
	<p>Si lo paso por valores durante su ejecución se comprueba que tan solo se intercambian los
		valores, durante la ejecución de la función y no permanece el cambio
		una vez se ha finalizado su ejecución</p>
	<p>Pero al hacerlo con REFERENCIAS el valor se intercambia con la ejecución de la función y no regresa al valor inicial</p>	
</body>
</html>
