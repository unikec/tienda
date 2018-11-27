<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Formularios tres autollamada tabla de multiplicar</title>
</head>
<body>
	<h1>Tabla de multiplicar</h1>
	<p>Realiza una web que lea un número y muestre su tabla de multiplicar.
		La aplicación debe cumplir los siguientes requisitos: 
		• El formulario se mostrará y procesará en una única URL (un solo fichero, o varios
		con include/require).
		 • Si el valor introducido no es un número, o si
		no está en el rango 1..10 mostraremos un mensaje de error notificando
		dicha incidencia y dando la opción de introducir de nuevo el valor.
		 •	Se mostrarán en los campos el valor erróneo para que el usuario pueda
		ver el valor introducido.</p>
<?php  if (!$_GET){  ?> <!-- compruebo que es la primera llamada -->
<form method="get">
		<!-- Puedo obviar el action al ser autollamada -->
		Introduce Numero: <input type="text" name="numero"
			value="<?=$_GET? $_GET['numero']:''?>"> <!-- Uso un ternario en vez de if/else  -->
						<!-- si es la primera vez que entro el get está vacio y por tanto tambien
					 dejo vacio el value del imput, de lo contrario le doy a value el valor de get -->

		<button type="submit">ok</button>
<?php
} else {
    $num = $_GET["numero"];
    if (is_numeric($num) && (($num > 0) && ($num < 11))) {
        echo "<h1>Tabla del " . $num . "</h1><br>";
        for ($i = 1; $i <= 10; $i ++) {
            echo $num . " x " . $i . " = " . $num * $i . "<br>";
        }
    } else {
        echo "El dato introducido es erroneo, elige un número entre 1 y 10<br>";
        echo "<a href='veintinueveTema3.php'><p>Pincha para introducir de nuevo</p></a>";
    }
}
?>
</form>
</body>
</html>