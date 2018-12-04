<?php 
  session_start();
  // Destruimos toda la información de la sesión
  session_destroy();
  // Podríamos haber hecho, si quitamos session_destroy()
  // $_SESSION['dentro']=FALSE;

  header("Location: frmLogin.php");
