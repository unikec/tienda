<?php
/**
 * Realiza el filtrado de campos y almacena los errores en el gestor de errores
 * @param GestorErrores $errores
 */
function FiltraCamposPost(GestorErrores $errores){
  
    // Filtramos la descripción
    if (VPost('descripcion')=='')
    {
        $errores->AnotaError('descripcion', 'Se debe introducir texto');
    }
    else if ( strlen(VPost('descripcion'))<5)
    {
        $errores->AnotaError('descripcion', 'Parece que la descripción es demasiado corta');
    }
    
    // Filtramos la persona Contacto
    $contacto=VPost('contacto');
    if ($contacto=='')
    {
        $errores->AnotaError('contacto', 'Se debe introducir texto');
    }
    else if ( is_numeric($contacto) )
    {
        $errores->AnotaError('contacto', 'El la persona de contacto no puede ser un número');
    }
    
    //Filtramos telefono
    $telefono=VPost('telefono');
    if ($telefono=='')
    {
        $errores->AnotaError('telefono', 'Se debe introducir texto');
    }                                                                  //presunpongo que Job&Carajo solo trabaja con ofertas en el ámbito nacional
    else if (!preg_match("/^(\+34|0034|34)?[6|7|9][0-9]{8}$/",$telefono)) { //formato válido solo para tlf españoles
        //si lo quisiese cambiar a prefijos mundiales \+[1-9]{0,3}
        //no está probado
        
        $errores->AnotaError('telefono', 'El telefono no tiene un formato correcto');
    }
    //Filtar email
    $email=VPost('email');
    if ($email=='')
    {
        $errores->AnotaError('email', 'El campo email está vacio');
    }
    else if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
        
        $errores->AnotaError('email', 'El email no tiene un formato correcto');
    }
    //Filtrar correcto cp
    $cp=VPost('cp');
    if (!preg_match('/^[0-9]{5,5}([- ]?[0-9]{4,4})?$/', $cp)) {
        
        $errores->AnotaError('cp', 'El cp no tiene un formato correcto');
    }
    
   //Filtar fecha comunicación o fechaFin
    $fechaFin=VPost('fechaFin');
    $fecha_hoy = strtotime('now');    
    $fecha_otra = str_replace('/', '-', $fechaFin);
    $fecha_otra = strtotime($fecha_otra);
//  echo $fechaFin." es la fecha que recibe de Vpost en filtroCompartido y la fecha actual es ".$fecha_hoy;
    if ($fechaFin=='')
    {
        $errores->AnotaError('fechaFin', 'La fecha de comunicación no está introducida');
    }
    else 
        if(!validaFechaE($fechaFin)){
        $errores->AnotaError('fechaFin', 'La fecha introducida no tiene un formato correcto');
    }
    else  //!!!PREGUNTAR SI HAY QUE TENER EN CUENTA LA FECHA DE CREACION O BIEN LA ACTUAL??????
        if($fecha_hoy>$fecha_otra){
        $errores->AnotaError('fechaFin', 'La fecha introducida es erronea, no puede ser anterior a la fecha de hoy');
    }
    
}





