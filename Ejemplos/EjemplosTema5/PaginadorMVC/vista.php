<?php require_once 'helper.php'; ?>
<!DOCTYPE html>
<html lang="es">
  <head>
   <?php require_once 'head.php';   ?>
  </head>

  <body>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-8 col-md-offset-2 text-md-center">
          <div class="page-header">
            <h1>Ejemplo de paginación <small>PHP,MySQL y PDO con MVC</small></h1>
          </div>  
          <div class="alert alert-<?= $mensaje["tipo"] ?>"><?= $mensaje["mensaje"] ?></div>
          <div class="btn-group open">
            <a class="btn btn-primary" href="#"><i class="icon-user"></i> Registros por página:</a>
            <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">
             </span></a>
            <ul class="dropdown-menu">
              <li><a href="index.php?regsxpag=2"> <i class="icon-fixed-width icon-th"></i> 2</a></li>
              <li><a href="index.php?regsxpag=4"> <i class="icon-fixed-width icon-th"></i> 4</a></li>
              <li><a href="index.php?regsxpag=8"> <i class="icon-fixed-width icon-th"></i> 8</a></li>
              <li><a href="index.php?regsxpag=10"><i class="icon-fixed-width icon-th"></i> 10</a></li>
            </ul>
          </div>
          
          <table class="table table-bordered table-striped text-center">
            <thead>
              <tr>
                <th>Apellidos</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Teléfono</th>
              </tr>
            </thead>
            <tbody>
              <?php //Verificamos que existen registros a mostrar
                if($totalregistros>=1):  
                  foreach($registros as $reg): 
              ?>
              <tr>
                <td> <?php echo $reg['apellidos']?> </td>
                <td> <?php echo $reg['nombre']?>    </td>
                <td> <?php echo $reg['email']?>     </td>
                <td> <?php echo $reg['telefono']?>  </td>
              </tr>           
              <?php 
                  endforeach; 
                else:  
              ?>
            <td colspan="4"> No existen registros para mostrar... :( </td>
              <?php endif; ?>
            </tbody>
          </table> 
          <div><?php paginacion($totalregistros, $regsxpag, $numpaginas, $pagina ); ?></div>
      </div>
       
    </div><!-- /.container -->
  </body>
</html>