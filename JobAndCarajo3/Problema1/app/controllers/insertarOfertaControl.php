<?php
/* Muesta la lista de tareas */

include(MODEL_PATH.'funcionesOfertas.php');



// En un planteamiento real puede que incluyesemos más cosas
echo CargaVista('plantilla/layout', array(
    'titulo'=>' Nueva oferta',
    'menu'=>CargaVista('plantilla/menu'),
    'cuerpo'=>CargaVista('insertarOfertaVista'),
));
