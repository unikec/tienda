<?php include("encabezado.php")?>
<?php  if ($errores): ?> <!-- compruebo que es la primera llamada -->

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
        <label>Nombre </label>
        <input type="text" class="form-control" name="nombre" value="<?=ValorP('nombre')?>"><br>
        <label>Primer Apellido </label>
        <input type="text" class="form-control" name="apellido1" value="<?=ValorP('apellido1')?>"><br><!--cadena vacia "", si le meto un espacio en blanco al entrecomillado da problemas a la larga  -->
        <label>Segundo Apellido </label>
        <input type="text" class="form-control" name="apellido2" value="<?= ValorP('apellido2')?>"><br>
        <label>Sexo:</label>
        <div id="sex" class="form-check border">
            <input type="radio" class="form-check-input" name="genero" value="H"<?php if(ValorP('genero')=="H") echo " checked";?>> Hombre<br>
            <input type="radio" class="form-check-input" name="genero" value="M"<?php if(ValorP('genero')=="M") echo " checked";?>> Mujer<br>
        </div>
        <label>Curso academico:</label>
        <select name="curso" id="curso" class="form-control">
            <option value="">selecciona ..</option>
            <option value="SMR1"<?php if(ValorP('curso')=="SMR1") echo " seleted";?>>1º SMR</option>
            <option value="SMR2"<?php if(ValorP('curso')=="SMR2") echo " selected";?>>2º SMR</option>
            <option value="ASIR1"<?php if(ValorP('curso')=="ASIR1") echo " selected";?>>1º ASIR</option>
            <option value="ASIR2"<?php if(ValorP('curso')=="ASIR2") echo " selected";?>>2º ASIR</option>
            <option value="DAW1"<?php if(ValorP('curso')=="DAW1") echo " selected";?>>1º DAW</option>
            <option value="DAW2"<?php if(ValorP('curso')=="DAW2") echo " selected";?>>2º DAW</option>
        </select>
        <div>
        <label>Fecha Nacimiento</label>
        <input type="date" class="form-control" name="fecha_Nacimiento" id="fechaNacimiento" value="<?=$_POST? $_POST['fecha_Nacimiento']:"";?>">
        </div>
        <label>Observaciones</label>
        <textarea class="form-control" rows="5" name="observaciones" value="<?= valorTextA('observaciones')?>"></textarea>
    </div>
    
		<button type="submit" class="btn btn-outline-info btn-block" >Enviar</button>

</form>
</body>
</html>
