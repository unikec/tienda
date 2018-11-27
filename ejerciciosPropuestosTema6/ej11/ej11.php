<?php 
include "conexionBBDD.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
</style>
<body>
    <form action="ej11MuestraProvincia.php" method="post">
<?php 
$CCAA = $mysqli->query("SELECT * FROM comunidades");

echo "<select name='comunidad'>";
while ($fila = $CCAA->fetch_assoc()) {
    echo "<option>";
    echo  $fila['comunidad'];
    echo "</option>";
   
}
echo "</select>";
?>
    <button type="submit">Mostrar Provincias</button>
</form>
</body>
</html>