<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Ejercicio veintidos Tema 3</title>
</head>
<body>
<?php
 $arr1=[10,20,30,40];


 function SumaCin($arr){ // in referencia y sin imprimr
     foreach ($arr as $x){
         ($x+=5);
     }
 }
 /*function SumaCINCO($arr){ //sin referencia imprimiendo en la ejecución
     foreach ($arr as $x){
         echo ($x+5).", ";
     }
 }
 
 function Suma5(&$arr){ // por refencia e imprimiendo durante la ejecución
     foreach ($arr as &$x){
        echo ($x+5).", ";
     }
 }*/
 
 function Suma55(&$arr){
     foreach ($arr as &$z){
         $z+=5;
     }
 }
 

?>
<h1>Trabajando Arrays 22</h1>
	<p>Comprueba si los arrays se pasan por valor o referencia como parámetros de una función.
Modifica los datos de una array pasado como parámetro a una función y comprueba si se
han modificado al salir de esta.
	<p>

<?php
 echo "<h2>Array original: </h2>";
 var_dump($arr1);
 
 echo "<h2>Array modificado +5: </h2>";
 echo "<p>Despues de ejecutar la función sumaCin(), sin referencia ni impresión: </p>";
 SumaCin($arr1);
 var_dump($arr1);
 
 /*echo "<p>Array despues de ejecutar la función sumaCINCO(), sin referencia CON impresión: </p>";
 SumaCINCO($arr1);
 echo "<p>Durante Suma5() con  &: </p>";
 Suma5($arr1);
  */
 echo "<h2>Array despues de ejecutar Suma55() con referencia & sin impresión</h2>";
 Suma55($arr1);
 var_dump($arr1); //??? donde se pone la referencia en la función o al pasarsela
 //al pasarsela me da error
// Suma5(&$arr1);//descomenta y comprueba error
?>
</body>
</html>