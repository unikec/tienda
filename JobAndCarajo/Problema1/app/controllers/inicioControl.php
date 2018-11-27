<?php


echo CargaVista('plantilla/layout', array(
    'titulo'=>'Página de inicio',
    'menu'=>CargaVista('plantilla/menu'),
    'cuerpo'=>CargaVista('inicioVista'),
));
