<?php 
/**
El Menú de la aplicación
Esta barra o navbar contiene los enlaces a las funciones más esenciales de la aplicación
los enlaces a simil de botones permiten desplazarse al usuario de la aplicación
con facilidad entre las distintas pantallas.
*/
?>
<nav class="navbar navbar-expand-sm navbar-light bg-secondary ">

  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav  ">
      <li class="nav-item">
        <a class="nav-link <?=isset($_GET['ctrl']) && $_GET['ctrl'] == 'inicioControl' ? 'active' : ''?>" href='?ctrl=inicioControl'>Home</a>
      <!--  <a class="nav-link" href='?ctrl=listarOfertasControl&pag=1&regPag=5'>Ofertas</a>-->
      </li>
      <li class="nav-item">
        <a class="nav-link <?=isset($_GET['ctrl']) && $_GET['ctrl'] == 'listarOfertasControl' ? 'active' : ''?>" href='?ctrl=listarOfertasControl&pag=1'>Ofertas</a>
      </li>
      <?php if($_SESSION['admin']==1):?>
      <li class="nav-item">
        <a class="nav-link <?=isset($_GET['ctrl']) && $_GET['ctrl'] == 'insertarOfertaControl' ? 'active' : ''?>" href='?ctrl=insertarOfertaControl'>Publicar una oferta</a>
      </li>
      <?php endif ?>
     <!-- <li class="nav-item">// la opción buscar no se ha desarrollado, queda pendiente
        <a class="nav-link <?=isset($_GET['ctrl']) && $_GET['ctrl'] == 'buscarOfertaControl' ? 'active' : ''?>" href="#">buscar</a>
      </li>-->
      <?php if($_SESSION['admin']==1):?>
      <li class="nav-item">
        <a class="nav-link <?=isset($_GET['ctrl']) && $_GET['ctrl'] == 'listarUsuariosControl' ? 'active' : ''?>" href='?ctrl=listarUsuariosControl'>Usuarios</a>
      </li>
      <?php endif ?>
      <?php if($_SESSION['admin']==0): ?>
      <li class="nav-item">
        <a class="nav-link <?=isset($_GET['ctrl']) && $_GET['ctrl'] == 'editarUsuariosPsicoControl' ? 'active' : ''?>" href='?ctrl=editarUsuariosPsicoControl'><i class="fas fa-id-card"></i></a>
      </li>   
      <?php endif ?>
    </ul>
    </div>
    <span class="float-right bg-warning text-dark rounded p-1">
      <?=quienSoy().' '.tipoUsuario()?>
      <a  href='?ctrl=logOutControl'><button class="btn "><i class="fas fa-user-times"></i></button></a>
      <?=$_SESSION['hora']?>
    </span>
  
</nav>
