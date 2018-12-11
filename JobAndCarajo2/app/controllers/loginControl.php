<?php

if ($_POST) { // Comprobamos que recibimos los datos y que no están vacíos
    $usuariook = $_POST['usuario'];
    $passok = $_POST['password'];
    if(loginOk($usuariook, $passok )){
      /*  $_SESSION['dentro'] = true;
        $_SESSION['usuario'] = getNombre();
        $_SESSION['admin'] = tipoUsuario();*/
        $_SESSION['hora'] =   date("H:i:s");
        // mostramos a la página de inicio de nuestro sitio web
        header('Location:?ctrl=inicioControl');
        exit;
    } else { // clave erronea
        $login_error = true;
        echo CargaVista('plantilla/layout', array(
            'titulo' => 'Login',
            'menu' => CargaVista('plantilla/menuLogin'),
            'cuerpo' => CargaVista('loginVista', array('login_error' => $login_error)),
        ));
    }
} else { // 1ª VEZ
    echo CargaVista('plantilla/layout', array(
        'titulo' => 'Login',
        'menu' => CargaVista('plantilla/menuLogin'),
        'cuerpo' => CargaVista('loginVista'),
    ));
}
