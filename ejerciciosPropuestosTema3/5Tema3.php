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
<h1>Multiplos</h1>
	<p>Realizar una página en php que muestre todos los números entre 1 y 1000 que son
múltiplos de 3, 4.
	<p>
 
 
<?php
$tres=3;
imprimeArrayDeUno($tres, multiplosDeUnNumero($tres));
echo "<br>";
$cuatro=4;
imprimeArrayDeUno($cuatro, multiplosDeUnNumero($cuatro));
$variosNumeros= array(3,4);//array indexado sin clave
imprimeArrayDeDos($variosNumeros, multiploDeDosNumeros($variosNumeros));

/*

for($n=0; $n<=1000; $n++) {
    if (EsMultipoDe3y4($n)) {
        
    }
}


function EsMultipoDe3y4($num) {
    return EsMultiplo($num, 3) && EsMultiplo($num, 4);
}

function EsMultiplo($numero, $divisor) {
    return ($numero%divisor) == 0;
}*/

?>



</body>
</html>