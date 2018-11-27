<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Ejercicio ocho Tema 3</title>
</head>
<body>

<h1>Cotrola tiempo</h1>
	<p>La función time() devuelve la fecha en número de segundos desde el 1 de enero de 1970.
Realiza una página web que muestre en vuestro equipo todos los números múltiplos de 5
que le de tiempo a mostrar en 5 segundos. Mostraréis solamente 10 números por línea y
Después de 10 líneas incluireis un separador (raya, salto de línea, caracteres ...)
	<p>
 
 
<?php


$tiempoTope=time()+5;//los 5 segundos

//mientras que el tiempoactual+5 segundo no hayan pasado que realice operaciones
    for ($i = 1; $tiempoTope>time() ; $i++) {
    
        echo ($i*5)." ";
        
    }

?>

</body>
</html>