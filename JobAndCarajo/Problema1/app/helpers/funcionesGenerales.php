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

/*function VPostFecha($fecha, $default='')
{
    if (isset($_POST[$fecha])){
        $valores=preg_split('/(\/|-)/',$_POST[$fecha]);
        $fechaE=$valores[2]."/".$valores[0]."/".$valores[1];
   
        return  $fechaE;
    }
    else
    {
        return $default;
    }
}*/


/**
 *
 * @param string $name Nombre del campo
 * @param array $opciones Opciones que tiene el select
 * 			clave array=valor option
 * 			valor array=texto option
 * @param string $valorDefecto Valor seleccionado
 * @return string
 */
function myCreaSelect($name, $opciones, $valorDefecto='')
{
    $html='<select name='.$name.'>';
    foreach($opciones as $text)
    {
        if ($text==$valorDefecto)
            $select='selected="selected"';
            else{
                $select="";
            }    $html.="<option value=".$text." $select>$text</option>";
    }
    $html.="</select>";
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