
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<title>Formularios selec y radioButtom</title>
</head>
<body>
<div class="jumbotron text-center" style="margin-bottom:0">
	<h1>Datos personales</h1>
</div>
 <div class="col-sm-4" style="background-color:orange">
<?php  if (!$_POST){  ?> <!-- compruebo que es la primera llamada -->
<form method="post">
 <div class="col-sm-8">
		<!-- Puedo obviar el action al ser autollamada -->
		<div id="tomaDatos">
        Nombre <input type="text" name="nombre"><br>
        Primer Apellido <input type="text" name="apellido1"><br>
        Segundo Apellido <input type="text" name="apellido2"><br>
        <div id="sex">Sexo:<br>
            <input type="radio" name="genero" value="hombre"> Hombre<br>
            <input type="radio" name="genero" value="Mujer"> Mujer<br>
        </div>
        <select name="curso" id="curso" >
            <option value="">selecciona ..</option>
            <option value="SMR1">1º SMR</option>
            <option value="SMR2">2º SMR</option>
            <option value="ASIR1">1º ASIR</option>
            <option value="ASIR2">2º ASIR</option>
            <option value="DAW1">1º DAW</option>
            <option value="DAW2">2º DAW</option>
        </select></br>
        Fecha Nacimiento<input type="date" name="fecha_Nacimiento" id="fechaNacimiento">
    </div>

		<button type="submit" class="btn btn-primary" >ok</button>
	</div>
<div class="col-sm-8">
<?php
} else {
    
    echo "<table class='table table-bordered'><tr>";
    foreach ($_POST as $idConte=>$conte){
        echo"<td>".strtoupper($idConte)."</td>";
    }
    echo "</tr><tr>";
        foreach ($_POST as $idConte=>$conte){
            echo"<td>".$conte."</td>";
        }
    echo "</tr></table>";
}
    
?>
</div>
</form>
</body>
</html>