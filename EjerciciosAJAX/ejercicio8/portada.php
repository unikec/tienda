<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Alumnos</title>
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  </head>
  <body>
	
  <div class="container well" style="margin-top:1em;">
  <h4 class="text-center">FILTRAR</h4>
  <div class="row">
    <div class="col-xs-12">
      <select class="form-control" id="select" onchange="descargarContenido()">
        <option>codigo</option>
        <option>nombre</option>
        <option>direccion</option>
        <option >provincia</option>
        <option>poblacion</option>
        <option>telefono</option>
      </select>
      <br/>
      <br/>
    </div>
  </div>
  <div class="row">
    <form class="form-inline">
      <div class="col-xs-12">
        <div class="form-group">
          <label>Buscador Alumnos</label>
          <input id="textoAlumno" class="form-control" type="text" onkeyup="estaAlumno()"/>
        </div>
      </div>
    </form>
  </div>
    <div class="row">
      <div class="col-xs-4 col-xs-offset-2">
       <div id="resultadoNombre">
         
       </div>
      </div>
   </div>
  <div id="insert">
    <h4 class="text-center">REGISTRAR</h4>
    <form role="form"  method="POST" onsubmit="realizarInsercion(); return false">
      <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Introduce tu nombre">
      </div>
      <div class="form-group">
        <label for="direccion">Direccion</label>
        <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Introduce tu direccion">
      </div>
      <div class="form-group" id="provinciaDiv">
      </div>
      <div class="form-group" id="municipioDiv">

      </div>
      <div class="form-group">
        <label for="telefono">Telefono</label>
        <input type="text" class="form-control" id="telefono"  name="telefono" placeholder="Introduce tu telefono">
      </div>

      <button type="submit" class="btn btn-primary btn-block">Enviar</button>
    </form>
  </div>
  
  <div id="editarForm">
    
  </div>
  </div>
  </div>
  <br/>
  <br/>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<table class="table table-hover">
				   	<tbody id="alumnos">
              <?php include('alumnos.php');?>
				   	</tbody>
			   </table>
		   </div>
		</div>  
   	</div>
    <br/>
    <br/>
    <div class="container" id="not_con" style="display:none">
    <h3 class="text-center">NOTAS</h3>
    <div class="row">
      <div class="col-xs-12">
        <table class="table table-hover">
            <tbody id="notas">
              
            </tbody>
         </table>
       </div>
    </div>  
    </div>


    <script type="text/javascript" src="js/micodigo.js"></script>
  </body>
</html>
      