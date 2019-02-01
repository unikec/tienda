<?php
/**
 * VISTA SOLO PARA USUARIOS PSICOLOGOS, QUE PUEDEN EDITAR EL CAMPO 'USUARIO' Y 'CLAVE' DE SU USUARIO
 * 
 */
?>
<h1>Editando</h1>
<form method="post">
<div class="col-sm-10 mx-auto" class="form-group">
		<!-- Puedo obviar el action al ser autollamada -->
		<div id="tomaDatos" >
        <label>Usuario o Nick</label>
        <input type="text" class="form-control"  name="usuario" value="<?=$usuario['usuario']?>"><?=$errores->ErrorFormateado('usuario')?><br>
	
        <label>Password</label>
        <input type="text" class="form-control" name="password" value="<?=$usuario['password']?>"><?=$errores->ErrorFormateado('password')?><br>
    </div>
    
		<button type="submit" class="btn btn-outline-info btn-block" >Enviar</button>

</form>