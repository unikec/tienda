<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<title>Formularios Boton +1</title>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
	<h1>Boton + 1 HIDDEN</h1>
</div>
  


 <div class="col-sm-8">
 <p>Realiza un formulario que contendrá un campo de texto en el que se almacenará un
número y un botón [+1] . Al pulsar el botón [+1] se mostrará de nuevo la página y se
incrementará en uno el contenido del campo de texto.</p>
<p>Realiza el ejercicio anterior, pero en lugar de utilizar un cuadro de texto el número lo
mostraras en un párrafo.
Nota: Puede que os resulta interesante utilizar un campo oculto.</p>
		<!-- Puedo obviar el action al ser autollamada -->
		<form method="post">
        
        <?php OcultarConDato('num') ?><!-- Esta función contien el formulario,
       								 pero en función que ya se haya enviado información
       								 una primera vez luego lo oculto  -->
        <p><?=Suma1('num')?></p><!-- vuelco el resultado de suma en un p -->
        
        <button type="submit" class="btn btn-primary" >+1</button>
       

		
	
<div class="col-sm-8">


<?php
function Suma1($nombreCampo,$default='') {
    if (isset($_POST[$nombreCampo])){ //pregunto si tiene algo el campo de texto
        $masUno=(int) $_POST[$nombreCampo]; //en tal caso lo paso a int
        return $masUno+1;  //le sumo uno y devuelve el resutlado
    } else
           return $default; //si aun no tiene nada, devuelvo el campo vacio
}
function OcultarConDato($nombreCampo){
    if(isset($_POST[$nombreCampo])){ //una vez que ya se ha introducido el dato lo oculto 
                                     // pero tambien lo actualizo con el value para que la función suma pueda seguir aumentando
        echo "<input hidden type='text' name=".$nombreCampo." value=".Suma1($nombreCampo)."><br>";//
    }else{
        echo "<label>Introduce número </label><input type='text' name=".$nombreCampo."><br>";
    }
}


    
?>
</div>
</form>
</body>
</html>