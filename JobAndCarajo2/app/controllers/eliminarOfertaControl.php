<?php
/* Muesta la lista de tareas */

include(MODEL_PATH.'funcionesOfertas.php');

$oferta=  getOferta($_GET['id']);
$id=$_GET['id'];

if(! $_POST){
    // En un planteamiento real puede que incluyesemos más cosas
    echo CargaVista('plantilla/layout', array(
        'titulo'=>'Informe de Oferta',
        'menu'=>CargaVista('plantilla/menu'),
        'cuerpo'=>CargaVista('eliminarOfertaVista', array('oferta'=>$oferta)),
    ));
    
}else{
    
    if ($_POST['pregunta']=='si') {
       // echo "has pulsado si";
         eliminarOferta($id);
         header('Location:?ctrl=listarOfertasControl');
    }else {
     
        header('Location:?ctrl=listarOfertasControl');
        //?ctrl=detalleOfertaControl
    }
}
