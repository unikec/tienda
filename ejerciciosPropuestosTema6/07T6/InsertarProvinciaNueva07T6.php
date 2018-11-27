<?php
$conex=new mysqli('localhost', 'root', '', 'ejercicios');

if (! $conex) {
    die("<p>ERROR EN la conexión</p>");
}

//printf("Conjunto de caracteres inicial: %s\n", $conex->character_set_name());
$conex->set_charset("utf8");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>insert Provincias</title>
   
</head>

<body>
<div class="jumbotron text-center">
  <h1>Ejercicio 7 inserta provincias</h1> 
</div>
<?php  if (empty($_POST )){
echo "No se ha introducido una provincia valida";
}?>

<div class="container mx-10">
   <form method="post" >
   <label>Provincia</label>
   <input type='text' name='nuevaProvincia'>
   <input type="submit" value="anadir">
  </form>
  <a href="../05T6/index5T6.php">Lista Todas la provincias</a>
  <?php 
if($_POST) {
 //   $np=$_POST['nuevaProvincia'];
   // $conex->query("INSERT INTO provincias (id, slug, provincia, comunidad_id, capital_id)VALUES (NULL,'$np', '$np', 20, -1 )");
    $conex->query("INSERT INTO provincias (id, slug, provincia, comunidad_id, capital_id)VALUES (NULL,'".$_POST['nuevaProvincia']."', '".$_POST['nuevaProvincia']."', 20, -1 )");
    echo $_POST['nuevaProvincia'];
    $provincias=$conex->query("Select provincia from provincias where comunidad_id=20");
    echo "<ol>";
    while ($resProvincias=$provincias->fetch_assoc()){
            echo "<li>".$resProvincias['provincia']."</li>";
    } echo "</ol>";
  }
  ?>
  </div>
</body>
</html>
