<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Ejercicio nueve Tema 3</title>
</head>
<body>
<?php

function EsBisiesto($año)
{
    if (($año % 4 == 0) && ($año % 100) || ($año % 400 == 0)) {
        return true;
    }
}

function DiasMes($num_mes, $año)
{
    $num = 0;
    switch ($num_mes) {
        case 1:
        case 3:
        case 5:
        case 7:
        case 8:
        case 10:
        case 12:
            $num = 31;
            break;
        case 2:
            $num = (esBisiesto($año)) ? 29 : 28;
            break; // controlar si es año bisiesto      
        case 4: 
        case 6: 
        case 9:   
        case 11:
            $num = 30;
            break;
        
            
    }
    return $num; // devuelve el numero de días que tiene el mes
}

function imprimeMes($mes, $ñ)
{ // necesito el mes y el año
    echo "Mes " . $mes . "<br>";
    $dias = DiasMes($mes, $ñ); // devuelve el numero de días que tiene el mes
    for ($i = 1; $i <= $dias; $i ++) {
        echo $i . ", " . $mes . ", " . $ñ . "<br>";
    }
}

function imprimeAños($ini, $fin)
{
    for ($y = $ini; $y < $fin; $y ++) { // desde el año que comienza hasta el que termina
        echo "<h2>Año " . $y . "</h2>"; // Cartel para aclarar cuando empieza nuevo año
        for ($m = 1; $m <= 12; $m ++) { // bucle para los 12 meses
            imprimeMes($m, $y);
        }
        echo "<br>"; // salto para cuando termina el año
    }
} // end function imprimeAños
?>

<h1>Fechas desde Enero 1999 hasta fin 2012</h1>
	<p>Crea la función DiasMes(num_mes) que devolverá un entero que será el
		número de días que tiene un mes. Utilizando dicha función realizar un
		programa que imprima las fechas existentes entre el 1 de enero de 1999
		y el 31 de diciembre de 2012. Las fechas se mostrarán separadas por
		una coma y cada mes aparecerá en una línea diferentes.
	
	
	<p>
	
<?php
$año = 1999;
$añoTope = 2012;

imprimeAños($año, $añoTope)?>






</body>
</html>
