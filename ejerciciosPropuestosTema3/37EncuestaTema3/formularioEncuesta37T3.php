<?php 
//include 'logicaEncuesta37T3.php';
include 'headerEncuesta37T3.php';

if ($errores){
// <!-- compruebo que es la primera llamada -->

 foreach($errores as $textoError) {
		echo "<p>".$textoError."</p>";
	}

}

echo "<h2>Encuesta Ampliada</h2>";

echo '<div class="col-sm-10 mx-auto" class="form-group">';

$p=GetHTMLPregunta();
//print_r($p)
imprimeCuestionario($p);

include 'footerEncuesta37T3.php';
?>
