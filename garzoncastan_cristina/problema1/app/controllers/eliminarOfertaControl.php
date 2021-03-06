<?php
//session_start();
if(!isset($_SESSION['dentro'])){
    header('Location:?ctrl=loginControl');
}
if(!$_SESSION['admin']){
    header('Location:?ctrl=inicioControl');
}
/**
 * Conector entre la vista donde se enlaza el deseo de eliminar una oferta concreta
 * con la función eliminar oferta.
 * Solo pueden acceder a esta funcionalidad los usuarios administradores logueados
 *  */

include_once (MODEL_PATH.'funcionesOfertas.php');

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
