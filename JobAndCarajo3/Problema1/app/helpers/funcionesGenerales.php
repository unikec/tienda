<?php
/**
 * Funciones de ayuda que nos permitirán trabajar con formularios
 *
 */

/**
 * Devuelve el valor de una variable enviada por POST. Devolverá el valor
 * por defecto en caso de no existir.
 *
 * @param string $campo
 * @param string $default   Valor por defecto en caso de no existir
 * @return string
 */
function VPost($campo, $default='')
{
    if (isset($_POST[$campo]))
    {
        return $_POST[$campo];
    }
    else
    {
        return $default;
    }
}

/**
 *
 * @param string $name Nombre del campo
 * @param array $opciones Opciones que tiene el select
 * 			clave array=valor option
 * 			valor array=texto option
 * @param string $valorDefecto Valor seleccionado
 * @return string
 */


function myCreaSelect($name,$options,$valorDefecto=''){
   
    $html="<select name=".$name.">";
    foreach ($options as $id => $valorOption) {
        if ($id==$valorDefecto){
            $seleccionado ='selected="selected"';
        }else{
            $seleccionado="";
        }
       
       $html.= "<option value=".$id." ".$seleccionado.">".$valorOption."</option>";
   }
   $html.='</select>';
   return $html;
}

function validaFecha($fecha)//FORMATO ESPAÑOL AÑO/MES/DIA
{ //checkdate($month, $day, $year)
    $valores=explode('/', $fecha);
    if(count($valores) == 3 && checkdate($valores[2], $valores[1], $valores[0])){
        return true;
    }
    return false;
}


function validaFechaE($fecha)//FORMATO ESPAÑOL DIA/MES/AÑO
{   //checkdate($month, $day, $year)
    // probar con separadores $sep = " [\/\-] ";
    $valores=explode('/', $fecha);
    if(count($valores) == 3 && checkdate($valores[1], $valores[0], $valores[2])){
        return true;
    }
    return false;
}

function cambiaFormatoFecha($fecha){
   
    
}