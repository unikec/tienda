<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Formularios tres autollamada</title>
</head>
<body>
<h1>Formulario Autollamada</h1>
<p>Utilizando una sola URI / URL “ejercicio_xx.php” realiza el ejercicio anterior. Véase el
artículo “Autollamada de páginas”.
Nota: esto se puede realizar utilizando un único fichero, o utilizando más de un fichero. Con
las funciones require o include podemos incluir todos estos ficheros de forma que se
muestren en una única URL como si fuese un único fichero.</p>

<?php  // esto vale con post y get con Request no vale, tiene más información
if (!$_POST){  //al ser un array y será falso si no tiene nada//
    //si está vacio mostrar formulario para pedir los datos
?> 

<form action="veintiochoTema3.php" method="post">
Introduce tu nombre: <input type="text" name="nombretemaTres28" id="nommbre28"><!--  pilla por el name -->
Introduce Apellido: <input type="text" name="apellidotemaTres28" id="apellido28"><!--  pilla por el name -->
<button type="submit">ok</button>
<?php
 }else{
$nombre=$_POST["nombretemaTres28"];
$apellido=$_POST["apellidotemaTres28"];
echo strtoupper($nombre)." ".strtoupper($apellido);

//strtoupper()// no pasa a mayusculas las vocales con tilde

echo "<a href='veintiochoTema3.php'><p>Volver atras</p></a>";
 }
?>
</form>
</body>
</html>