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
if (!$_POST) {
    
?>
    <form action="ej11ModificarProvincia.php" method="post">
        Provincia: <input type="text" name="provincia"><br>
        <input type="text" name="id" value=<?php echo $_GET['id'] ?> hidden>
        <input type="text" name="CCAAID" value=<?php echo $_GET['CCAAID'] ?> hidden>
        <button type="submit">Modificar registro</button>
    </form>

    <?php 
}
else {

    $sql = "UPDATE provincias SET slug = '".$_POST['provincia']."', provincia = '".$_POST['provincia']."' WHERE id = ".$_POST['id'] ;
    if ($mysqli->query($sql) === TRUE) {
        echo "Registro modificado correctamente <br>";
        echo '<a href="ej11MuestraProvincia.php?CCAAID='.$_POST['CCAAID'].'"><p>Mostrar Provincias</p></a>';
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
}

    ?>
</body>
</html>
