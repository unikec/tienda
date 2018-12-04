<?php
  session_start();
  $usuariook = "pepe";
  $passok = "123";
  if($_POST) { // Comprobamos que recibimos los datos y que no están vacíos
      if ($_POST['usuario'] == $usuariook && $_POST['password'] == $passok) {
        $_SESSION['dentro']=TRUE;
        $_SESSION['logueado']=$_POST['usuario'];
        $_SESSION['usuario']= $_POST['usuario'];
        
        
        // mostramos a la página de inicio de nuestro sitio  
          header('Location: frmInicio.php');
          exit;
      } 
      else {
        $login_error=TRUE;
      }
}   
?>
<html>
  <head lang="es">
    <?php require 'views/header.php'; ?>
  </head>
  <body>
    <?php require 'views/login.php'; ?>
    <?php require 'views/footer.php'; ?>
  </body>
</html>