<?php
$hay_errores=false;
if ($_POST){
    if (ValorP($_POST['nombre']) || strlen($_POST['nombre'])<3) {
        $hay_errores=true;
        echo "<p class='text-center text-danger'><strong>Cuidado:</strong> El campo Nombre no está correcto</p>";
    }
    if (valorP($_POST['apellido1'])|| strlen($_POST['apellido1'])<3){
        $hay_errores=true;
        echo "<p class='text-center text-danger'><strong>Cuidado:</strong> Existe un problema con el primer apellido no está correcto</p>";
    }
    //no control el segundo apellido porque hay parte de la población que no tienen
   
    if (!isset($_POST['genero'])) {
        $hay_errores=true;
        echo "<p class='text-center text-danger'><strong>Cuidado:</strong> Selecciona el genero que te refleje</p>";
    }
    $curso=$_POST['curso'];
    if (!$curso){
        $hay_errores=true;
        echo "<p class='text-center text-danger'><strong>Cuidado:</strong> Selecciona el curso</p>";
    }
    if(validarFecha($_POST['fecha_Nacimiento'])){
        $hay_errores=true;
        echo "<p class='text-center text-danger'><strong>Cuidado:</strong> La fecha no es correcta</p>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<title>Formularios selec y radioButtom</title>
</head>
<body>
<div class="jumbotron text-center bg-info" style="margin-bottom:0">
	<h1>Datos personales</h1>
</div>
<!--  <div class="col-sm-4" style="background-color:orange"></div>	-->
<?php  if (!$_POST  || $hay_errores){  ?> <!-- compruebo que es la primera llamada -->
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
        <input type="date" class="form-control" name="fecha_Nacimiento" id="fechaNacimiento" value="<?=$_POST? $_POST['fecha_Nacimiento']:" ";?>">
        </div>
    </div>
    
		<button type="submit" class="btn btn-outline-info btn-block" >Enviar</button>
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
    
function ValorP($nombreCampo, $default='')
{
    if (isset($_POST[$nombreCampo]))
        return $_POST[$nombreCampo];
    else
        return $default;
}
function validarFecha($fecha){ //compruebo que me de una fecha de nac de alguine posiblemente vivo
    
    $hoy=date('Y/m/d');
    if($fecha<'1910/01/01' || $fecha>$hoy){
        return true;
    }
    return false;
}

function validarFecha1($fecha){ //explode Devuelve un array de string, diviendo por lo que le demos.
    
    $valores = explode('/', $fecha); //en este caso un /
    if(count($valores) == 3 && checkdate($valores[0],$valores[1], $valores[2])){
        return true;
    }
    return false;
}

?>
</form>
</body>
</html>