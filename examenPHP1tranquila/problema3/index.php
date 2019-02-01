<?php
 if(isset($_COOKIE['contador']))
 { 
   // Caduca en un año 
   setcookie('contador', $_COOKIE['contador'] + 1, time() + 365 * 24 * 60 * 60); 
   setcookie('soy_yo', 'Cristina', time() + 365 * 24 * 60 * 60); 
   setcookie('fecha', date("d/m/Y H:i:s"), time() + 365 * 24 * 60 * 60); 
   $mensaje = '<p>Nombre: ' .$_COOKIE['soy_yo'].'</p><p>Nº visitas realizadas:'. $_COOKIE['contador'].'</p><p>utllima visita realizada: '.$_COOKIE['fecha']; 
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
    <title>Pagina de seguimiento</title>
</head>
<body>

    <div><?php echo $mensaje; ?>  </div>
</body>
</html>


