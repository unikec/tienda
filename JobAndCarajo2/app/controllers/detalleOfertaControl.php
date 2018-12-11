<?php
//session_start();
if(!isset($_SESSION['dentro'])){
    header('Location:?ctrl=loginControl');
}
/**
 *  Muestra la información completa de una oferta en concreto
 * conectando la vista con la función que nos proporciona toda esta 
 * información */

include_once (MODEL_PATH.'funcionesOfertas.php');

$oferta=  getOferta($_GET['id']);

// En un planteamiento real puede que incluyesemos más cosas
echo CargaVista('plantilla/layout', array(
    'titulo'=>'Informe de Oferta',
    'menu'=>CargaVista('plantilla/menu'),
    'cuerpo'=>CargaVista('detalleOfertaVista', array('oferta'=>$oferta)),
));