<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Ejercicio nueve Tema 3</title>
</head>
<body>
<?php

function EsPrimo($num)//num primo que SOLO es divisible por el UNO y por Si MISMO
{
    // Empiezo desde el 2 porque se supone que el uno no es primo
    for ($i = 2; $i < $num; $i ++) { //localizo los numeros que sean divisibles a partir del 2 
        if ($num % $i == 0) {       //y voy probando hasta el inmediato anterior del que estoy probando si es primo
            return false;           //si su resto es cero, no me vale, LO DEVUELVO FALSO
        }
    }
    return true; // Los demas son primos por descarte
}
?>

<h1>Primos</h1>
	<p>Crea la función EsPrimo(numero) que devuelva un booleano que indique
		si el número pasado como parámetro es primo. Utilizando dicha función
		mostrar en una página los números primos menores de 100 que existen.
	
	
	<p>
 
 
<?php
for ($i = 2; $i < 100; $i ++) {
    if (EsPrimo($i)) {
        echo $i . ", ";
    }
}

?>



</body>
</html>