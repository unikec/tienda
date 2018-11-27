<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Ejercicio Uno Tema 3</title>
</head>
<body>
<?php
function multiplica5(){
    for ($i = 1; $i < 10; $i++) {
        echo "5 x ".$i." = ".(5*$i)."<br>";
    }
}
?>
<h1>Tabla de multiplicar del 5</h1>
<p>Realiza una página web que muestre la tabla
 de multiplicar del 5, utilizando bucles en<p>
 
 
<?php 
multiplica5();
?>

</body>
</html>
