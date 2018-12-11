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
     $fechaFin=VPost('fechaFin');
     $fecha_hoy = strtotime('now');    
     $fecha_otra = str_replace('/', '-', $fechaFin);
     $fecha_otra = strtotime($fecha_otra);
   //  echo $fechaFin." es la fecha que recibe de Vpost en filtroCompartido y la fecha actual es ".$fechaActu;
     if ($fechaFin=='')
     {
         $errores->AnotaError('fechaFin', 'La fecha de comunicación no está introducida');
     }
     else //if (!checkdate($month, $day, $year))) {
         if(!validaFechaE($fechaFin)){
         $errores->AnotaError('fechaFin', 'La fecha introducida no tiene un formato correcto');
     }
     else if($fecha_hoy>$fecha_otra){ //!!!PREGUNTAR SI HAY QUE TENER EN CUENTA LA FECHA DE CREACION O BIEN LA ACTUAL??????
         
         $errores->AnotaError('fechaFin', 'La fecha introducida es erronea, no puede ser anterior a la fecha de hoy');
     }
}

function FiltraCamposUsuariosPost(GestorErrores $errores){
  
  
  
    // Filtramos la descripción
    if (VPost('usuario')=='')
    {
        $errores->AnotaError('usuario', 'Se debe introducir texto');
    }
    else if ( strlen(VPost('usuario'))<3)
    {
        $errores->AnotaError('usuario', 'Parece que el nick es demasiado corto');
    }
    
    // Filtramos el nombre de la persona 
    $nombre=VPost('nombre');
    if ($nombre=='')
    {
        $errores->AnotaError('nombre', 'Se debe introducir texto');
    }
    else if ( is_numeric($nombre) )
    {
        $errores->AnotaError('nombre', 'El nombre de la persona no puede ser un número');
    }
    //indique tipo de usuario
    if (VPost('admin')=='')
    {
        $errores->AnotaError('usuario', 'Se debe indicar una opción');
    }
    //contraseña
    if (VPost('password')=='')
    {
        $errores->AnotaError('password', 'Se debe introducir texto');
    }
    else if ( strlen(VPost('password'))<2)
    {
        $errores->AnotaError('password', 'Parece que la contraseña es demasiado corta');
    }
    
  
}

function FiltraEdicionUsuariosPost(GestorErrores $errores){
  
  
  
    // Filtramos la descripción
    if (VPost('usuario')=='')
    {
        $errores->AnotaError('usuario', 'Se debe introducir texto');
    }
    else if ( strlen(VPost('usuario'))<3)
    {
        $errores->AnotaError('usuario', 'Parece que el nick es demasiado corto');
    }
   
    //contraseña
    if (VPost('password')=='')
    {
        $errores->AnotaError('password', 'Se debe introducir texto');
    }
    else if ( strlen(VPost('password'))<2)
    {
        $errores->AnotaError('password', 'Parece que la contraseña es demasiado corta');
    }
    
  
}




