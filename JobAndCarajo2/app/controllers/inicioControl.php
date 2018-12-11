<?php
//session_start();
if(!isset($_SESSION['dentro'])){
    header('Location:?ctrl=loginControl');
}
echo CargaVista('plantilla/layout', array(
    'titulo'=>'Página de inicio',
    'menu'=>CargaVista('plantilla/menu'),
    'cuerpo'=>CargaVista('inicioVista'),
));
