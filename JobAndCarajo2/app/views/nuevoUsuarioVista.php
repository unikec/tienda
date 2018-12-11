<h1>Insertando nuevo usuario</h1>
<form method="post">
<div class="col-sm-10 mx-auto" class="form-group">
		<!-- Puedo obviar el action al ser autollamada -->
	<div id="tomaDatos" >
        <label>Usuario o Nick</label>
        <input type="text" class="form-control" name="usuario" value="<?=$usuario['usuario']?>"><?=$errores->ErrorFormateado('usuario')?><br>
        <label>Nombre: </label>
        <input type="text" class="form-control" name="nombre" value="<?=$usuario['nombre']?>"><?=$errores->ErrorFormateado('nombre')?><br>
      
        <label>Tipo de usuario:</label>
        <div id="admin" class="form-check border">
            <input type="radio" class="form-check-input" name="admin" value="1"<?php if( $usuario['admin']=='1')echo  "checked"?>> Administrador<br>
            <input type="radio" class="form-check-input" name="admin" value="0"<?php if( $usuario['admin']=='0')echo  "checked"?>> Psicologo<br>
        </div>	
        <label>Password</label>
        <input type="text" class="form-control" name="password" value="<?=$usuario['password']?>"><?=$errores->ErrorFormateado('password')?><br>
    </div>
    
		<button type="submit" class="btn btn-outline-info btn-block" >Enviar</button>
 </div>
</form>
