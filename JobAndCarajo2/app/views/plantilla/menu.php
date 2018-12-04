<nav class="navbar navbar-expand-sm navbar-light bg-secondary">
  
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav  ">
      <li class="nav-item">
        <a class="nav-link <?= isset($_GET['ctrl'])&&$_GET['ctrl']=='inicioControl' ? 'active':'' ?>" href='?ctrl=inicioControl'>Home</a>
      <!--  <a class="nav-link" href='?ctrl=listarOfertasControl&pag=1&regPag=5'>Ofertas</a>-->
      </li>
      <li class="nav-item">
        <a class="nav-link <?= isset($_GET['ctrl'])&&$_GET['ctrl']=='listarOfertasControl' ? 'active':'' ?>" href='?ctrl=listarOfertasControl&pag=1'>Ofertas</a>
      <!--  <a class="nav-link" href='?ctrl=listarOfertasControl&pag=1&regPag=5'>Ofertas</a>-->
      </li>
      <li class="nav-item">
        <a class="nav-link <?= isset($_GET['ctrl'])&&$_GET['ctrl']=='insertarOfertaControl' ? 'active':'' ?>" href='?ctrl=insertarOfertaControl'>Publicar una oferta</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?= isset($_GET['ctrl'])&&$_GET['ctrl']=='buscarOfertaControl' ? 'active':'' ?>" href="#">buscar</a>
      </li>    
    </ul>
    <a class="navbar-brand" href='?ctrl=logOutControl'>Cerrar Sesion</a>
  
  </div>  
</nav>
<!--<a class="navbar-brand" href='?ctrl=inicioControl'></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  bg-dark navbar-dark
-->