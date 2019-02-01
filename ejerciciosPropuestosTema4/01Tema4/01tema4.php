<?php
session_start();
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
<?php
if(isset($_SESSION['contador'])){
    $_SESSION['contador']++;
}else{
    $_SESSION['contador']=1;
}
?>
    <p>Bienvenido por <?= $_SESSION['contador'] ?>ª vez </p>
</body>
</html>

