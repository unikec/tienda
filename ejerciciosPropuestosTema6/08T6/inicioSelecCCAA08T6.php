<?php 
include 'conexion08T6.php';
include 'funcionesModificar08T6.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Modifica Provincias</title>
   
</head>

<body>
<div class="jumbotron text-center">
  <h1>Ejercicio 8 modidica provincias</h1> 
</div>
<div class="container mx-10">
<?php 
if (!$_POST){
?>
<form method="post">
<?php 
   
$comunidad="comunidad";
$opcionesCCAA = listaCCAA();
CreaSelect($comunidad, $opcionesCCAA);
?>
<input type="submit" value="confirmar">
</form>

<?php 
}else{

$comunidadSelecionada = $_POST['comunidad'];

listaProvincias($comunidadSelecionada);
}

?>


  
</div>
</body>
</html>
