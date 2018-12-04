<?php
session_start();
/*
 * CONTROLADOR FRONTAL - Aproximación 2ª
 *
 * Todas las peticiones pasaran por esta página
 *
 * En este enfoque en el controlador frontal se dedica unica y exclusivamente
 * a dirigir la petión sin presentar nada. De eso se encargará el controlador
 *
 */

// definimos constantes que facilitan el trabajo
define('CTRL_PATH', __DIR__ . '/controllers/');
define('MODEL_PATH', __DIR__ . '/models/');
define('VIEW_PATH', __DIR__ . '/views/');
define('TEMPLATE_PATH', __DIR__ . '/plantilla/');
define('LIB_PATH', __DIR__ . '/lib/');
define('HELPERS_PATH', __DIR__ . '/helpers/');

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

