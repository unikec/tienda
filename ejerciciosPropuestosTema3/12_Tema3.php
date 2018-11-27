<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Ejercicio doce Tema 3</title>
</head>
<body>
<?php
$num = 2;

function EstoNoSeDebeHacer()
{
    global $num;
    $num = $num * 2;
}

?>

<h1>Variable global</h1>
	<p>Crea la función EstNoSeDebeHacer() -sin parámetros, que hará uso de
		la palabra reservada global- que modifica la variable $num asignándole
		el doble de su valor. La variable está iniciada fuera de la función.
		Crea una página que cree y pruebe el funcionamiento de la función.
	
	
	<p>

<?php
EstoNoSeDebeHacer();
echo $num;

// aunque la variable está declarada fuera, la reconoce y la manipula cambiando su valor

?>


</body>
</html>