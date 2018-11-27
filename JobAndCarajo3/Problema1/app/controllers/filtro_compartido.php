<?php
/**
 * Realiza el filtrado de campos y almacena los errores en el gestor de errores
 * @param GestorErrores $errores
 */
function FiltraCamposPost(GestorErrores $errores){
  // $fechaActu=strtotime(date('Y/m/d',time()));
   $fechaActu=date('Y/m/d');
   echo $fechaActu;
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
   /* $fechaFin=VPost('fechaFin');
    if ($fechaFin=='')
    {
        $errores->AnotaError('fechaFin', 'La fecha de comunicación no está introducida');
    }
    else //if (!checkdate($month, $day, $year))) {
        if(!validaFechaE($fechaFin)){
        $errores->AnotaError('fechaFin', 'La fecha introducida no tiene un formato correcto');
    }
    else if($fechaActu>$fechaFin){
        $errores->AnotaError('fechaFin', 'La fecha introducida es erronea, no puede ser anterior a la fecha de hoy');
    }*/
}

/*function validaFecha($fecha){
 $sep = " [\/\-] ";
 $req = "#^(((0? [1-9] |1\d|2 [0-8] ){$sep}(0? [1-9] |1 [012] )|(29|30){$sep}(0? [13456789] |1 [012] )|31{$sep}(0? [13578] |1 [02] )){$sep}(19| [2-9] \d)\d{2}|29{$sep}0?2{$sep}((19| [2-9] \d)(0 [48] | [2468]  [048] | [13579]  [26] )|(( [2468]  [048] | [3579]  [26] )00)))$#";
 return preg_match($reg, $fecha);
 }*/




