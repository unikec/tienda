<?php
//session_start();
if(!isset($_SESSION['dentro'])){
    header('Location:?ctrl=loginControl');
}
if(!$_SESSION['admin']){
    header('Location:?ctrl=inicioControl');
}

/**
 * Muestra la lista de usuarios, solo es para usuario administrador y por ello
 * este controlador restringe la entrada solo si estás logueado y si eres usuario
*/



include_once (MODEL_PATH.'funcionesUsuarios.php');

$usuarios= listarUsuarios();

echo CargaVista('plantilla/layout', array(
    'titulo'=>'Listado de Ofertas',
    'menu'=>CargaVista('plantilla/menu'),
    'cuerpo'=>CargaVista('listarUsuariosVista', array('usuarios'=> $usuarios)),
));

