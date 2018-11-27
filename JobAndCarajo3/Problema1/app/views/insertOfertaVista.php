<?php  if (HayErrores()>0): ?> <!-- compruebo que es la primera llamada -->

	<div style="border: 1px solid #ccc; color: red">
	<?php foreach($errores as $textoError) {
		echo "<li>".$textoError."</li>";
	}
	?>
	</ul></div>	
	</div>
<?php endif;?>

<form method="post">
<div class="col-sm-10 mx-auto" class="form-group">
		<!-- Puedo obviar el action al ser autollamada -->
		<div id="tomaDatos" >
        <label>Descripción </label>
        <input type="text" class="form-control" name="descrip" value="<?=ValorPost('descrip')?>"><br>
        <label>Persona de Contacto: </label>
        <input type="text" class="form-control" name="persoEsa" value="<?=ValorPost('persoEsa')?>"><br><!--cadena vacia "", si le meto un espacio en blanco al entrecomillado da problemas a la larga  -->
        <label>Telefono</label>
        <input type="text" class="form-control" name="telefono" value="<?= ValorPost('telefono')?>"><br>
        <label>email</label>
        <input type="text" class="form-control" name="email" value="<?= ValorPost('email')?>"><br>
        <label>Dirección</label>
        <input type="text" class="form-control" name="direc" value="<?= ValorPost('direc')?>"><br>
        <label>Código Postal</label>
        <input type="text" class="form-control" name="cp" value="<?= ValorPost('cp')?>"><br>
        <label>Provincia:</label>
        <select name="provincia" id="provincia" class="form-control">
        </select>
        <label>Estado de la oferta:</label>
        <div id="estado" class="form-check border">
            <input type="radio" class="form-check-input" name="est" value="P"<?php if(ValorPost('est')=="P") echo " checked";?>> Pendiente de iniciar<br>
            <input type="radio" class="form-check-input" name="est" value="R"<?php if(ValorPost('est')=="R") echo " checked";?>> Realizando Selección<br>
        	<input type="radio" class="form-check-input" name="est" value="S"<?php if(ValorPost('est')=="S") echo " checked";?>> Seleccionando candidatos<br>
            <input type="radio" class="form-check-input" name="est" value="C"<?php if(ValorPost('est')=="C") echo " checked";?>> Cancelada<br></div>
        <label>Fecha de comunicación</label>
        <input type="text" class="form-control" name="fechaFin" value="<?= ValorPost('fechaFin')?>"><br>
  	    <label>Candidato Selecionado</label>
        <input type="text" class="form-control" name="candi" value="<?= ValorPost('candi')?>"><br>
        <label>Otros datos del candidato</label>
        <textarea class="form-control" rows="5" name="observaciones"><?= valorPost('observaciones')?></textarea>
    </div>
    
		<button type="submit" class="btn btn-outline-info btn-block" >Enviar</button>

</form>
