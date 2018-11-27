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
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>

<body>

    <?php
if (!$_GET) {

    $comunidad = $mysqli->query("SELECT id FROM comunidades WHERE comunidad = '" . $_POST['comunidad'] . "'");

    while ($regCCAA = $comunidad->fetch_assoc()) {
        $comunidadID = $regCCAA["id"];
        $provincias = $mysqli->query("SELECT * FROM provincias WHERE comunidad_id = " . $comunidadID);
    }

    echo ' <a href="ej11AñadirRegistro.php?ccaaid=' . $comunidadID . '"><p>Añadir Provincia</p></a>';

    echo "<ol>";
    while ($regProvincias = $provincias->fetch_assoc()) {
        echo "<li>";
        echo $regProvincias['provincia']. ' <a href="ej11ModificarProvincia.php?id='.$regProvincias['id'].'&CCAAID='.$comunidadID.'"><button>Modificar</button></a>' ;
        echo ' <a href="ej11BorrarProvincia.php?id='.$regProvincias['id'].'&CCAAID='.$comunidadID.'"><button>Borrar</button></a>' ;
        echo "</li>";

    }
    echo "</ol>";
} else {
    $provincias = $mysqli->query("SELECT * FROM provincias WHERE comunidad_id = " . $_GET['CCAAID']);
    echo ' <a href="ej11AñadirRegistro.php?ccaaid=' . $_GET['CCAAID'] . '"><p>Añadir Provincia</p></a>';
    echo "<ol>";
    while ($regProvincias = $provincias->fetch_assoc()) {
        echo "<li>";
        echo $regProvincias['provincia']. ' <a href="ej11ModificarProvincia.php?id='.$regProvincias['id'].'&CCAAID='.$_GET['CCAAID'].'"><button>Modificar</button></a>' ;
        echo ' <a href="ej11BorrarProvincia.php?id='.$regProvincias['id'].'&CCAAID='.$_GET['CCAAID'].'"><button>Borrar</button></a>' ;
        echo "</li>";

    }
    echo "</ol>";
}
?>

</body>

</html>