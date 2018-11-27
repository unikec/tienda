<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Ejercicio veintitrés Tema 3</title>
</head>
<body>
<?php
function FechaAct(){
   
    $d=date('d');//dia del mes con dos digitos
    $m=date('m');//representación numérica del mes con cero inicial
    $n=date('y'); // año con dos cifras
    return $arrFecha=["dia"=>$d,"mes"=>$m,"año"=>$n];
}
function MuestraFecha($arr){ //si lo hubiese hecho con un foreach me imprime tambien una barra inclinada al final
    echo $arr["dia"]."/".$arr["mes"]."/".$arr["año"];
}
?>
<h1>Trabajando Arrays 23</h1>
	<p>Realiza la función FechaActual() que devuelva la fecha en un array con el formato
[‘dia’=>dia, ‘mes’=>mes, ‘año’=>año].
Obten la fecha actual llamando a la función muestra la fecha en el formato dd/mm/aa.
	<p>

<?php

$hoy= FechaAct();
MuestraFecha($hoy);
?>
</body>
</html>