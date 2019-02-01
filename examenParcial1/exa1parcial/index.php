<?php
session_start();
define('CTRL_PATH', __DIR__ . '/ctrl/');
define('MODEL_PATH', __DIR__ . '/models/');
define('VIEW_PATH', __DIR__ . '/views/');


include_once MODEL_PATH . 'sesionesLogin.php'; //funciones necesarias para logear
include_once HELPERS_PATH . 'vistas.php';

//forma de entrada antes del login
//$ctrl=isset($_GET['ctrl']) ? $_GET['ctrl'] : 'inicioControl';

// Cuerpo del controlador frontal




$ctrl = isset($_GET['ctrl']) ? $_GET['ctrl'] : 'loginControl';
// Nombre del fichero a incluir
$ctrl_file = CTRL_PATH . $ctrl . '.php';

if (file_exists($ctrl_file)) {
    include_once $ctrl_file;
    
} else { // Error 404
    echo CargaVista('plantilla/layout', array(
        'titulo' => 'Página no encontrada',
        'menu' => CargaVista('plantilla/menu'),
        'cuerpo' => CargaVista('error404', array('file' => $ctrl_file)),
    ));
}