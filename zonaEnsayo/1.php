<?php

function validaFecha($fecha)//FORMATO AMERICANO AÑO/MES/DIA
{ //checkdate($month, $day, $year)
    $valores=explode('/', $fecha);
    if(count($valores) == 3 && checkdate($valores[2], $valores[1], $valores[0])){
        return true;
    }
    return false;
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

Function posFecha($fecha){
    $valores=preg_split('/(\/|-)/',$fecha);
    return $fechaE=$valores[2]."/".$valores[0]."/".$valores[1];
    
}

$fecha_hoy = strtotime('now');

$fecha_otra = str_replace('/', '-', '12/02/2020');
$fecha_otra = strtotime($fecha_otra);

// $fecha_otra = strtotime('31/02/2011'); daría error

//var_dump($fecha_hoy > $fecha_otra); //bool(true)!



//
$fecha='29/03/1983';
$fecha2='22/02/2020';
//$fechaActu=date('d/m/Y');

//if(validaFechaE($fecha2)){
 //   echo $fecha2.' valida<br>';
    
   // echo "en formato americano: ".cambiaFormatoFecha($fecha2)."<br>";
    //echo $fechaActu."<br>";
    if($fecha_hoy<$fecha_otra){
        echo $fecha_otra." es futuro";
    }else{
        echo $fecha_otra.' es pasado';
    }
//}else{
 //   echo 'no valida';    
  //  }
    
//echo posFecha($fecha)  ;
