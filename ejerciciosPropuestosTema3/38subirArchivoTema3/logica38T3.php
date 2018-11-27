<?php
//
// ¿Han enviado datos?  preguntamos a POST //un array vacio es falso
//
$errores=array();// para acumular las frases de error // tiene que
if ($_POST)
{ // Datos enviados
    
    $hay_errores=FALSE;
  /*  if (ValorP($_POST['op1']) || !is_numeric($_POST['op1'])) {
        $hay_errores=true;
        $errores['op1']="<p class='text-center text-danger'><strong>Cuidado:</strong> Fallo en campo operador 1 </p>";
    }
    
    if (ValorP($_POST['op2']) || !is_numeric($_POST['op2'])) {
        $hay_errores=true;
        $errores['op2']="<p class='text-center text-danger'><strong>Cuidado:</strong> Fallo en campo operador 2 </p>";
    }*/
    
    
    if ($hay_errores)
    { // Hay errores - Debemos mostrarlos y preguntar
        
        include('formulario38T3.php');
    }
    else
    {
        
        // Realizamos operaciones que correspondan
        include('formularioTratado38T3.php');
    }
}
else
{ // Mostramos formulario por primera vez
    
    include('formulario38T3.php');
}




function ValorP($nombreCampo, $default='')
{
    if (isset($_POST[$nombreCampo]))
        return $_POST[$nombreCampo];
        else
            return $default;
}
