<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<title>Formularios Boton +1</title>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
	<h1>Boton + 1</h1>
</div>
  


 <div class="col-sm-8">
 <p>Realiza un formulario que contendrá un campo de texto en el que se almacenará un
número y un botón [+1] . Al pulsar el botón [+1] se mostrará de nuevo la página y se
incrementará en uno el contenido del campo de texto.</p>
		<!-- Puedo obviar el action al ser autollamada -->
		<form method="post">
        <label>Introduce número</label>
        <input type="text" name="num" value="<?=Suma1('num')?>"><br>
        <button type="submit" class="btn btn-primary" >+1</button>
       

		
	
<div class="col-sm-8">


<?php
function Suma1($nombreCampo,$default='') {
    if (isset($_POST[$nombreCampo])){
        $masUno=(int) $_POST[$nombreCampo];
        return $masUno+1;
    } else
           return $default;
}


    
?>
</div>
</form>
</body>
</html>