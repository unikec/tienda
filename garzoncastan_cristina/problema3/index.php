<?php
 if(isset($_COOKIE['contador']))
 { 
   // Caduca en un año 
   setcookie('contador', $_COOKIE['contador'] + 1, time() + 365 * 24 * 60 * 60); 
   $mensaje = 'Bienvenido por: ' . $_COOKIE['contador'].'vez'; 
 } 
 else 
 { 
   // Caduca en un año 
   setcookie('contador', 1, time() + 365 * 24 * 60 * 60); 
   $mensaje = 'Bienvenido a nuestra página web'; 
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contador de visitas</title>
</head>
<body>

    <p><?php echo $mensaje; ?>  </p>
</body>
</html>


