<?php
session_start();
include 'funcionesProvincias.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comunidad provincias sesiones</title>
</head>
<body>
<?php

print_r(verOfertas());
?>
    
</body>
</html>