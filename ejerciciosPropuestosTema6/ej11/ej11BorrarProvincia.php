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
    <form method="post">
        <h2>¿Deseas borrar la provincia?</h2>
        <input type="text" name="id" value=<?php echo $_GET['id'] ?> hidden>
        <input type="text" name="CCAAID" value=<?php echo $_GET['CCAAID'] ?> hidden>
        <button type="submit" name="sub" value="Si">Si</button>
        <button type="submit" name="sub" value="No">No</button>
    </form>

    <?php 
}
else {
if ($_POST['sub']=="Si") {
   $consulta = $mysqli->prepare("DELETE FROM provincias WHERE id = ? ");
   $consulta->bind_param('i', $provinciaID);
   $provinciaID = $_POST['id'];
   $consulta->execute();

        echo "Registro borrado correctamente <br>";
        echo '<a href="ej11MuestraProvincia.php?CCAAID='.$_POST['CCAAID'].'"><p>Mostrar Provincias</p></a>';
}
else {
    header('Location: ej11MuestraProvincia.php?CCAAID='.$_POST['CCAAID'], true, 301);
exit();
}
}

    ?>
</body>
</html>