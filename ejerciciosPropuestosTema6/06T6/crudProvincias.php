<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>CRUD Provincias</title>
   
</head>

<body>
<div class="jumbotron text-center">
  <h1>Ejercicio 11 CRUD provincias</h1> 
</div>
<div class="container mx-10">
   <form method="post" action="listaProvincias06T6.php">

    <?php 
    include 'pillaDatosCCAA06T6.php';
    ?>
    <input type="submit" value="confirmar">
  </form>
</body>
</html>
