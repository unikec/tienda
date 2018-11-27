<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Ejercicio Uno Tema 3</title>
</head>
<body>
<?php
function multiplicaTodo(){
    for ($j = 1; $j < 10; $j++) {
        echo "<h1>Tabla del ".$j."</h1>";
        tablaMultiplica($j);
        echo "<br>";
    }
   
}

function tablaMultiplica($j) {
    for ($i = 1; $i <= 10; $i++) {
        echo $j." x ".$i." = ".($j*$i)."<br>";
    }
}
?>
<h1>Todas las tablas de multplicar</h1>
<p>Realiza una página web que muestre todas
 las tablas de multiplicar del 1 al 10.<p>
 
 
<?php 
multiplicaTodo();

?>

</body>
</html>