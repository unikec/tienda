<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Ejercicio seis Tema 3</title>
</head>
<body>
<?php
function EsMultipoDe3De5y7($num) {
    return EsMultiplo($num, 3) && EsMultiplo($num, 5) && EsMultiplo($num, 7);
}
function EsMultiplo($numero, $divisor) {
    return ($numero%$divisor) == 0;
}
?>
<h1>Multiplos</h1>
	<p>Realizar una página en php que muestre todos los números entre 1 y 1000 que son
múltiplos de 3, 5 y 7. Avanzará de línea cada vez que se cambie de decena.
	<p>
 
 
<?php

echo "<h2>Multiplos de 3, 5 y de 7</h2>";
for ($i = 1; $i < 1000; $i++) {
    if(EsMultipoDe3De5y7($i)){
        echo $i." ";
        if (($i%10)==0) {//para cambiar de linea cuando cambie de decena
            echo "<br>";
        }
    }
}

?>