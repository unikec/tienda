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
    
<?php 
$CCAA = $mysqli->query("SELECT * FROM comunidades");

echo "<table><tr><td>CCAA</td><td>Provincias</td></tr>";
while ($fila = $CCAA->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $fila['comunidad'] . "</td>";
    echo "<td>";
    $provincias = $mysqli->query("SELECT * FROM provincias WHERE comunidad_id = ".$fila['id']);
    while ($fila2 = $provincias->fetch_assoc()) {
        echo $fila2['provincia'] . "<br>" ;
    }
    echo "</td>";
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>