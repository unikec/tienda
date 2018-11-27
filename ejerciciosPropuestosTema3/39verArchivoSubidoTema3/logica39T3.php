<?php
//
// ¿Han enviado datos?  preguntamos a POST //un array vacio es falso
//
$errores=array();// para acumular las frases de error // tiene que
if ($_POST)
{ // Datos enviados
    
    $hay_errores=FALSE;
    if (empty($_POST['MAX_FILE_SIZE']))  {
     $hay_errores=true;
     $errores['MAX_FILE_SIZE']="<p class='text-center text-danger'><strong>Cuidado:</strong> Has pulsado enviar sin seleccionar ningún archivo </p>";
     }
     
    
    
    
    if ($hay_errores)
    { // Hay errores - Debemos mostrarlos y preguntar
        
        include('formulario39T3.php');
    }
    else
    {
        
        // Realizamos operaciones que correspondan
        include('formularioTratado39T3.php');
    }
}
else
{ // Mostramos formulario por primera vez
    
    include('formulario39T3.php');
}




function ValorP($nombreCampo, $default='')
{
    if (isset($_POST[$nombreCampo]))
        return $_POST[$nombreCampo];
        else
            return $default;
}

?>
