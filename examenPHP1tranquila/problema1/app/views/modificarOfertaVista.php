<?php 
/**
 *Vista edición
 *Permite hacer modicaciones sobre los datos contenidos de la oferta que se esta editando
 *Para ello es necesario tener acceso a los datos almacendos, que llegan a esta vista mediante su controlador
 *los datos alterados pasan tambien un filtro de normas de formato que deben superar para finalmente poder modificar
 *los datos en la oferta indicada */
?>
<h1>Editando</h1>
<form method="post">
<div class="col-sm-10 mx-auto" class="form-group">
		<!-- Puedo obviar el action al ser autollamada -->
		<div id="tomaDatos" >
        <label>Descripción </label>
        <input type="text" class="form-control"  <?= $_SESSION['admin']==0 ? 'readonly' : ''?> name="descripcion" value="<?=$oferta['descripcion']?>"><?=$errores->ErrorFormateado('descripcion')?><br>
        <label>Persona de Contacto: </label>
        <input type="text" class="form-control" <?= $_SESSION['admin']==0 ? 'readonly' : ''?> name="contacto" value="<?=$oferta['contacto']?>"><?=$errores->ErrorFormateado('contacto')?><br>
        <label>Telefono</label>
        <input type="text" class="form-control" <?= $_SESSION['admin']==0 ? 'readonly' : ''?> name="telefono" value="<?=$oferta['telefono']?>"><?=$errores->ErrorFormateado('telefono')?><br>
        <label>email</label>
        <input type="text" class="form-control" <?= $_SESSION['admin']==0 ? 'readonly' : ''?> name="email" value="<?=$oferta['email']?>"><?=$errores->ErrorFormateado('email')?><br>
        <label>Dirección</label>
        <input type="text" class="form-control" <?= $_SESSION['admin']==0 ? 'readonly' : ''?> name="direccion" value="<?=$oferta['direccion']?>"><?=$errores->ErrorFormateado('direccion')?><br>  
        <label>Poblacion</label>
        <input type="text" class="form-control"  <?= $_SESSION['admin']==0 ? 'readonly' : ''?> name="poblacion" value="<?=$oferta['poblacion']?>"><?=$errores->ErrorFormateado('poblacion')?><br>
        <label>Código Postal</label>
        <input type="text" class="form-control" <?= $_SESSION['admin']==0 ? 'readonly' : ''?> name="cp" value="<?= $oferta['cp']?>"><?=$errores->ErrorFormateado('cp')?><br>
        <label>Provincia:</label>
        <select class="form-control" <?= $_SESSION['admin']==0 ? 'readonly' : ''?> name='id_provincia'><?=$errores->ErrorFormateado('id_provincia')?><br>
        <?= creaSelect( $provincias, $oferta['id_provincia']); ?>
        <label>Estado de la oferta:</label>
        <div id="estado" class="form-check border" <?= $_SESSION['admin']==0 ? 'readonly' : ''?>>
            <input type="radio" class="form-check-input" name="estado" value="P"<?php if( $oferta['estado']=='P')echo  "checked"?>> Pendiente de iniciar<br>
            <input type="radio" class="form-check-input" name="estado" value="R"<?php if( $oferta['estado']=='R')echo  "checked"?>> Realizando Selección<br>
        	<input type="radio" class="form-check-input" name="estado" value="S"<?php if( $oferta['estado']=='S')echo  "checked"?>> Seleccionando candidatos<br>
            <input type="radio" class="form-check-input" name="estado" value="C"<?php if( $oferta['estado']=='C')echo  "checked"?>> Cancelada<br></div>
        <label>Fecha de comunicación</label>
        <input type="text" class="form-control" <?= $_SESSION['admin']==0 ? 'readonly' : ''?> name="fechaFin" value="<?=$oferta['fechaFin']?>"><?=$errores->ErrorFormateado('fechaFin')?><br>
        <label>Psicólogo</label>
        <input type="text" class="form-control" <?= $_SESSION['admin']==0 ? 'readonly' : ''?> name="psicologo" value="<?=$oferta['psicologo']?>"><?=$errores->ErrorFormateado('psicologo')?><br>
  	    <label>Candidato Selecionado</label>
        <input type="text" class="form-control" name="candidato" value="<?=$oferta['candidato']?>"><?=$errores->ErrorFormateado('candidato')?><br>
        <label>Otros datos del candidato</label>
        <textarea class="form-control" rows="5" name="observaciones"><?=$oferta['observaciones']?><?=$errores->ErrorFormateado('observaciones')?></textarea>
    </div>
    
		<button type="submit" class="btn btn-outline-info btn-block" >Enviar</button>

</form>
