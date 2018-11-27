
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">

<title>Ejemplo Uno PHP</title>
</head>
<body>
<h1>Numero aleatorio</h1>
<?php
$num=rand(1,100);
if ($num<50) {
    echo "Es menor que 50";
}else{
    echo "Es mayor o igual que 50";
    }
    echo "<br>";
echo("El numero oculto es ".$num);

?>
</body>
</html>