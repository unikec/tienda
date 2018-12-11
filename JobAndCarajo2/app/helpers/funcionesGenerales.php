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

/**esta modificacion de la funcion anterior es debido a que al modicar la vista modificar oferta 
me era más facil establecer la opcion disabled, si creo directamente la etiqueta selec con su class 
directamente en la vista
 *  */

function creaSelect($options,$valorDefecto=''){
    
    $html='';
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

function validaFechaE($fecha)//FORMATO ESPAÑOL DIA/MES/AÑO
{
    $valores=preg_split('/(\/|-)/',$fecha);
    if(count($valores) == 3 && checkdate($valores[1], $valores[0], $valores[2])){
        return true;
    }
    return false;
}

function cambiaFormatoFecha($fechaOK){ //la fecha validada en este supuesto vendrá en formato español d/m/Y
    $valores=preg_split('/(\/|-)/',$fechaOK);
    $fechaAmericana= $valores[2]."-".$valores[1]."-".$valores[0];
    return $fechaAmericana;
    
}