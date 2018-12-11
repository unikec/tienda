<?php
//session_start();
if(!isset($_SESSION['dentro'])){
    header('Location:?ctrl=loginControl');
}
if(!$_SESSION['admin']){
    header('Location:?ctrl=inicioControl');
}
include_once (LIB_PATH.'GestorErrores.php');
include_once (HELPERS_PATH.'funcionesGenerales.php');
include_once (MODEL_PATH.'funcionesUsuarios.php');

// Inicializamos el gestor de errores que utilizaremos en la vista
$errores=new GestorErrores('<span style="color:red; background:#EEE; padding:.2em 1em; margin:1em">', '</span>');


$usuario=array(
    
    'usuario'=>  VPost('usuarios'),
    'nombre'=>VPost('nombre'),
    'admin'=>VPost('admin'),
    'password'=>VPost('password'),
  
);

  
    if (! $_POST)
    {
        
            // No hay datos iniciales
        $htmlCuerpo=CargaVista('nuevoUsuarioVista', array('usuario'=>$usuario,'errores'=>$errores));
           
    
    
    }
    else {
        // Filtrar datos
        include_once ('filtro_compartido.php');
        FiltraCamposUsuariosPost($errores);
        
        if ($errores->HayErrores())
        {
            // Mostrar ventana de nuevo
            $htmlCuerpo=  CargaVista('nuevoUsuarioVista', array('usuario'=>$usuario, 'errores'=>$errores));
            
        }
        else
        {
            // Guardamos las modificaciones
           // insert_usuario($id,$usuario,$admin,$password)
            nuevoUsuario(NULL,VPost('usuario'), VPost('nombre'),VPost('admin'),VPost('password'));
           
            $htmlCuerpo="<p>Se ha guardado el usuario ....</p>";
  
        }
    }


// Al llegar aquí aun no he devuelto nada, podría hacer cualquier tipo de acción

// Muestro la plantilla
echo CargaVista('plantilla/layout', array(
    'titulo'=>' Nueva Oferta',
    'menu'=>CargaVista('plantilla/menu'),
    'cuerpo'=>$htmlCuerpo
));