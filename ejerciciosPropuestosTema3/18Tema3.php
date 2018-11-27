<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Ejercicio dieciocho Tema 3</title>
</head>
<body>
<?php 

function DiasMes18($numMes) {
   $diasDelMes=[1=>31,3=>31,2=>28,4=>30,5=>31,6=>30,7=>31,8=>31,9=>30,10=>31,11=>30,12=>31];
   return $diasDelMes[$numMes];
}
function NombreMes($numMes) {
    $NombresDelosMeses=[1=>"Enero",2=>"Febrero",3=>"Marzo",4=>"Abril",5=>"Mayo",6=>"Junio",7=>"Julio",8=>"Agosto",9=>"Septiembre",10=>"Octubre",11=>"Noviembre",12=>"Diciembre"];;
    return $NombresDelosMeses[$numMes];
}
function ImprimeDiasMes($numMes) {
    echo NombreMes($numMes)." tiene ".DiasMes18($numMes). "dias";
}
?>
<h1>Trabajando Arrays</h1>
	<p>Utilizando arrays crea la función DiasMes(num_mes) que devolverá un entero que será el
número de días que tiene un mes.
Utilizando dicha función realiza un programa que imprima el número de días que tienes los
distintos meses. El nombre del mes se almacenará en una array igualmente.
	<p>

<?php
$mes=3;
ImprimeDiasMes($mes);

?>

</body>
</html>
