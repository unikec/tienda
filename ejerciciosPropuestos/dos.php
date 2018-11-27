<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<h1>Realiza una página en php en la que inicialices distintas 
variables con diferentes tipos de
datos y luego muestra sus valores.</h1>
<?php
$uno= 1;
$dos= "dos";
$tres= false;
$semana= array("Lunes", "Martes", "Miércoles","Jueves","Viernes", "Sábado", "Domingo");

echo $uno;
echo "<br>";
var_dump($uno);
echo "<br>";
echo $dos;
echo "<br>";
var_dump($dos);
echo "<br>";
echo $tres;
echo "<br>";
var_dump($tres);
echo "<br>";
echo $semana[2];
echo "<br>";
var_dump($semana);
?>
</body>
</html>