<?php
/**
 * VISTA QUE PERMITE AL ADMINISTRADOR CAMBIAR DATOS DEL USUARIO.
 * El controlador será el que filtre si la información introducida está conforme preestablecido
 * o si por el contrario no se ha introducido ningun dato
 * En el caso de cumplir los requisitos el controlador permitirá ejecutar la función que modifique los
 * datos referentes a un usuario concreto de la tabla usuarios de nuestra aplicación.
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