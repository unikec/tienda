<?php
/**
 * Control que permite la conexión de la vista lista usuarios con las funciones de eliminar un usuario,
 *  pero previamente requiere confirmación.
 * A esta parte de la aplicación solo se puede acceder desde un usuario tipo administrador, por ello desde este controlador lo 
 * primero que hace es solo admitir la usuario logueados y solo si son administradores
 */
//session_start();
if(!isset($_SESSION['dentro'])){
    header('Location:?ctrl=loginControl');
}
if(!$_SESSION['admin']){
    header('Location:?ctrl=inicioControl');
}
/* Muesta la lista de tareas */

include_once (MODEL_PATH.'funcionesUsuarios.php');

$usuario=  getUsuario($_GET['id']);
$id=$_GET['id'];

if(! $_POST){
    // En un planteamiento real puede que incluyesemos más cosas
    echo CargaVista('plantilla/layout', array(
        'titulo'=>'Informe de Oferta',
        'menu'=>CargaVista('plantilla/menu'),
        'cuerpo'=>CargaVista('eliminarUsuarioVista', array('usuario'=>$usuario)),
    ));
    
}else{
    
    if ($_POST['pregunta']=='si') {
       // echo "has pulsado si";
         eliminarUsuario($id);
         header('Location:?ctrl=listarUsuariosControl');
    }else {
     
        header('Location:?ctrl=listarUsuariosControl');
        //?ctrl=detalleOfertaControl
    }
}
