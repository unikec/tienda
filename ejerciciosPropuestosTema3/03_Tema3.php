<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Tabla de mutiplicar aleatoria</title>
</head>
<body>
<?php 
include 'funcionesDeMates.php';
?>
<p>La función rand() genera un número aleatorio. Realizar una página que muestre de forma
aleatoria una tabla de multiplicar.</p>
<?php 
$numero= numAleatorio1al100();

tablaDeMultiplicar($numero);

?>
</body>
</html>