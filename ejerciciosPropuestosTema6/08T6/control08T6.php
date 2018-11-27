<?php
include "conexion08T6.php";
include "funcionesModificar08T6.php";
$hayError=FALSE;
$errores=array();


if ( ! $_POST )
{ // Si no han enviado el fomulario
    //include 'modiProvincias8T6.php';
}
else
{
    if (!isset($_POST['nuevoNombre'] ) || empty($_POST['nuevoNombre']) || is_null($_POST['nuevoNombre']) ) {
        $hay_errores=true;
        $errores['nuevoNombre']="<p class='text-center text-danger'><strong>Cuidado:</strong>No has introducido ningún cambio</p>";
    }
    
    if(esRepetida($_POST['nuevoNombre'])){
        $hay_errores=true;
        $errores['nuevoNombre']="<p class='text-center text-danger'><strong>Cuidado:</strong>La provincia indicada ya está introducida</p>";
    }
    if( preg_match("/[0-9]+/i", $_POST['nuevoNombre'])){
        $hay_errores=true;
        $errores['nuevoNombre']="<p class='text-center text-danger'><strong>Cuidado:</strong>No has introducido un nombre de provincia válido</p>";
    }
    
    if ($errores)
    {
        // Hay error
        
    }
    else
    { // NO hay error
        //include 'modiProvincias8T6.php';
    }
}
