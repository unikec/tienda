<?php
//session_start();
if(!isset($_SESSION['dentro'])){
    header('Location:?ctrl=loginControl');
}
/* Muesta la lista de tareas */

include_once (MODEL_PATH.'funcionesOfertas.php');

$oferta=  getOferta($_GET['id']);

// En un planteamiento real puede que incluyesemos más cosas
echo CargaVista('plantilla/layout', array(
    'titulo'=>'Informe de Oferta',
    'menu'=>CargaVista('plantilla/menu'),
    'cuerpo'=>CargaVista('detalleOfertaVista', array('oferta'=>$oferta)),
));