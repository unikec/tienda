<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<title>CRUD Provincias</title>

</head>

<body>
	<div class="jumbotron text-center">
		<h1>Ejercicio 11 CRUD provincias</h1>
	</div>
	<div class="container mx-10">
<?php
include 'conexion06T6.php';

$comunidadSelecionada = $_POST['comunidades']; // como he llamado al selec de pillaDatos11T6
echo $comunidadSelecionada;
$CCAA = $conex->query("Select id from comunidades where comunidad='" . $comunidadSelecionada . "'"); // cuando son string necesita comillas

while ($resCCAA = $CCAA->fetch_assoc()) {
    $CCAAid = $resCCAA['id'];
    $provincias = $conex->query("Select provincia from provincias where comunidad_id=" . $CCAAid);
}

echo "<ol>";
while ($resProvincias = $provincias->fetch_assoc()) {
    echo "<li>" . $resProvincias['provincia'] . "</li>";
}
echo "</ol>";
?>


</body>
</html>