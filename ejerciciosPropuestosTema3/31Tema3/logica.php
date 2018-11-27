<?php
//
// ¿Han enviado datos?  preguntamos a POST //un array vacio es falso
//
$errores=array();// para acumular las frases de error // tiene que 
if ($_POST)
{ // Datos enviados
     
    $hay_errores=FALSE;
    if (ValorP($_POST['nombre']) || strlen($_POST['nombre'])<3) {
        $hay_errores=true;
        $errores['nombre']="<p class='text-center text-danger'><strong>Cuidado:</strong> El campo Nombre no está correcto</p>";
    }
    if (valorP($_POST['apellido1'])|| strlen($_POST['apellido1'])<3){
        $hay_errores=true;
        $errores['apellido1']="<p class='text-center text-danger'><strong>Cuidado:</strong> Existe un problema con el primer apellido no está correcto</p>";
    }
    if (valorP($_POST['apellido2']) && strlen($_POST['apellido2'])<3){ //puede ser que alquien no tenga segundo apellido
        $hay_errores=true;
        $errores['apellido2']="<p class='text-center text-danger'><strong>Cuidado:</strong> Existe un problema con el primer apellido no está correcto</p>";
    }
    
    if (!isset($_POST['genero'])) {
        $hay_errores=true;
        $errores['genero']="<p class='text-center text-danger'><strong>Cuidado:</strong> Selecciona el genero que te refleje</p>";
    }
    $curso=$_POST['curso'];
    if (!$curso){
        $hay_errores=true;
        $errores['curso']="<p class='text-center text-danger'><strong>Cuidado:</strong> Selecciona el curso</p>";
    }
    if(validarFecha($_POST['fecha_Nacimiento'])){
        $hay_errores=true;
        $errores['fecha_Nacimiento']="<p class='text-center text-danger'><strong>Cuidado:</strong> La fecha no es correcta</p>";
    }
    if ($hay_errores)
    { // Hay errores - Debemos mostrarlos y preguntar
        include('formulario.php');
    }
    else
    {
        // Realizamos operaciones que correspondan
        include('formularioTratado.php');
    }
}
else
{ // Mostramos formulario por primera vez
    include('formulario.php');
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


?>
