<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="nueve.css">
<title>nueve</title>
</head>
<body>
<h1>Include o require</h1>
<p>Utilizando la función include o require crea el fichero “layout.php” el cual contendrá la
estructura de una página formada por varios bloques que estarán en distintos ficheros</p>
<p>Incluye el contenido que quieras en todos los ficheros y prueba que la página para ver que
se une todo en una misma página.
Nota: está forma de trabajar es la que utilizan las aplicaciones para rellenar el contenido de
las páginas web, obteniendo el contenido de cada bloque de ficheros o bases de datos.</p>
<?php
include 'layout.php';
?>
</body>
</html>
