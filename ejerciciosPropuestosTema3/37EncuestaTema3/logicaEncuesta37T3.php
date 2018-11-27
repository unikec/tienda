<?php
//
// ¿Han enviado datos? preguntamos a POST //un array vacio es falso
//
include 'bateriaPreguntasEncuesta37T3.php';
$errores = array(); // para acumular las frases de error // tiene que
if ($_POST) { // Datos enviados

    $hay_errores = FALSE;
    if (! isset($_POST['sexo'])) {
        $hay_errores = true;
        $errores['sexo'] = "<p class='text-center text-danger'><strong>Cuidado:</strong> El campo Sexo no está contestado</p>";
    }
    if (! isset($_POST['aficiones'])) {
        $hay_errores = true;
        $errores['aficiones'] = "<p class='text-center text-danger'><strong>Cuidado:</strong> El campo Aficiones no está seleccionada ninguna opción</p>";
    }
    if (! isset($_POST['estudios'])) {
        $hay_errores = true;
        $errores['estudios'] = "<p class='text-center text-danger'><strong>Cuidado:</strong> El campo Aficiones no está seleccionada ninguna opción</p>";
    }
    if (empty($_POST['vacaciones'])) {
        $hay_errores = true;
        $errores['vacaciones'] = "<p class='text-center text-danger'><strong>Cuidado:</strong> El campo Vacaciones no está contestado</p>";
    }

    if ($hay_errores) { // Hay errores - Debemos mostrarlos y volver hacer el cuestionario
        include ('formularioEncuesta37T3.php');
    } else {
        // Realizamos el informe, ya tenemos datos y no hay fallos
        include ('formularioTratadoEncuesta37T3.php');
    }
} else { // No hay nada en $_post
         // Mostramos formulario de la encuesta por primera vez
    include ('formularioEncuesta37T3.php');
}

// Fuciones

/*
 * function ValorP($nombreCampo, $default='')
 * {
 * if (isset($_POST[$nombreCampo]))
 * return $_POST[$nombreCampo];
 * else
 * return $default;
 * }
 */


function imprimeCuestionario($arrayP)
{
    echo "<form method='post'>";

    foreach ($arrayP as $indiX => $pregun) {

        echo "<h3>Pregunta " . $indiX . ": ";

        creaPregunta($pregun);
    }
    echo "<input type='submit'></form>";
   
}

function creaPregunta($pregunta)
{ // genera formulario
 
    echo "<label>" . $pregunta['text_pregunta'] . "</label></h3>";
    
    $tipo = $pregunta['tipo'] ? "radio" : "checkbox"; // selecciono el tipo de input
    
    $tipo = "<input type='" . $tipo . "'"; // lo almaceno con su etiqueta html para no liarme con las comillas despues
    $campo = " name='" . $pregunta['campo'] . "' "; // almaceno campo con su etiqueta html
    
    foreach ($pregunta['respuestas'] as $contenidoR) { // foreach lo necesito me encontrado con el segundo array

        echo $tipo . $campo; // por cada una de las respuestas inicio un input con el type y el name almacenados antes
        echo " value=" . $contenidoR['etiqueta'] . ">";
        echo "<label>" . $contenidoR['valor'] . "</label><br>";
     } // end foreach
      
}// end function creaPregunta()
function preguntaExtra()
{
    
   
}
?>
