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
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>

<body>
    <?php
if (!$_POST || empty($_POST['nuevaProvincia'])) {

    ?>
    <form action="ej11AñadirRegistro.php" method="post">
        Provincia: <input type="text" name="nuevaProvincia"><br>
        <input type="text" name="CCAAID" value=<?php echo $_GET['ccaaid'] ?> hidden>
        <button type="submit">Añadir registro</button>
    </form>

    <?php
} else {

    $sql = "INSERT INTO provincias (id, slug, provincia, comunidad_id, capital_id) VALUES (NULL, '" . $_POST['nuevaProvincia'] . "', '" . $_POST['nuevaProvincia'] . "', " . $_POST['CCAAID'] . ", -1)";
    if ($mysqli->query($sql) === true) {
        echo "Provincia añadida correctamente <br>";
        echo '<a href="ej11MuestraProvincia.php?CCAAID=' . $_POST['CCAAID'] . '"><p>Mostrar Provincias</p></a>';
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
}

?>
</body>

</html>