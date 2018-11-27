<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<title>CalculadoraT3</title>
</head>
<body>
<div class="jumbotron text-center bg-info" style="margin-bottom:0">
	<h1>Calculadora</h1>
</div>

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
	<div id="carcasa">
		<div id="inputs" >
            <label>Operador 1: </label><input type="number" class="form-control" name="op1" value="<?=ValorP('op1')?>"><br>
            <label>Operador 2: </label><input type="number" class="form-control" name="op2" value="<?=ValorP('op2')?>"><br>
            <label>Operación: </label><input type="text" class="form-control" name="operacion" value="<?= ValorP('simbolo')?>" readonly><br>
            <label>Resultado: </label><input type="number" class="form-control" name="res" value="<?=Calcula()?>" readonly><br>
    	</div>
        <div id="botones" class="mx-5 btn-group btn-group-lg " >
    		<button type="submit" class="mx-5 btn btn-outline-primary "  name="simbolo"  value="sumar" >[+Sumar]</button>
    		<button type="submit" class="mx-5 btn btn-outline-success  "  name="simbolo"  value="restar">[-Restar]</button>
    		<button type="submit" class="mx-5 btn btn-outline-info "  name="simbolo"  value="multiplicar">[*Multiplicar]</button>
    		<button type="submit" class="mx-5 btn btn-outline-warning "  name="simbolo"  value="dividir">[/Dividir]</button>
		</div>
	</div>
</form>
</body>
</html>

