<?php
//session_start();
if(!isset($_SESSION['dentro'])){
    header('Location:?ctrl=loginControl');
}
/**
 * Es a partir de este punto donde el usuario siempre debe estar logueado
 */
echo CargaVista('plantilla/layout', array(
    'titulo'=>'Página de inicio',
    'menu'=>CargaVista('plantilla/menu'),
    'cuerpo'=>CargaVista('inicioVista'),
));
