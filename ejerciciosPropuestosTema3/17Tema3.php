<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Ejercicio diecisiete Tema 3</title>
</head>
<body>
<?php 
include 'funcionesFechas.php';
function FechaActual($dS,$dia, $mes, $anyo){
    echo NombreDia($dS)." ".$dia." de ".NombreMes($mes)." del año ".$anyo."<br>";
    
}
function FechaDada($dia, $mes, $anyo){
    $dS= date("w", mktime(0, 0, 0, $mes, $dia, $anyo));
    echo NombreDia($dS)." ".$dia." de ".NombreMes($mes)." del año ".$anyo."<br>";
}
?>
<h1>Mi función fecha actual</h1>
	<p>Crea la función FechaActual(dia, mes, anyo) que mostrará la fecha actual en el formato
“dia _semana (lunes...), num_dia de nombre_mes de num_anyo”. Prueba la función.
Utiliza el fichero “funciones_fecha.php” creado anteriormente.
	<p>

<?php
$dSemana=date('w');//w	Representación numérica del día de la semana
$d=date('j');
$m=date('n');
$y=date('Y');//el año con 4 digitos

FechaActual($dSemana, $d, $m, $y);
?>
<h1>Función FechaDada Mi cumple</h1>
<?php 
$diaCumple=29;
$mesCumple=3;
$anyoCumple=1983;
FechaDada($diaCumple, $mesCumple, $anyoCumple);
?>




</body>
</html>