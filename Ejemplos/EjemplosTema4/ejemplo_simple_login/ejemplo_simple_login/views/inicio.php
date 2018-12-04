<div class="encabezado text-center">	
  <h1><img class="alineadoTextoImagen" src="images//bombilla.png" />DAWES-Práctica#2:Sesiones y Cookies</h1>
</div> 
<?php include(__DIR__.'/menu.php')?>
<div class="centrar">	
  <div class="container cuerpo text-center">	
    <h1><strong>MiSitio-</strong>Inicio</h1> 
    <h2>Inicio</h2> 
    <?php if(isset($_SESSION['usuario'])) :?>
    <p><h2><img class="alineadoTextoImagen" src="images//user.png" width="50px"/>Bienvenido  <?=$_SESSION['usuario']?> </h2> </p>
    <?php endif; ?>
  </div>
</div>  