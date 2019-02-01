<?php
/**
 * Control que permite filtrar si se han introducido cambios en la clave o el usuario
 * psicologo logueado, y ejecutar la funcion de modificar usuario
 */
//session_start();
if(!isset($_SESSION['dentro'])){
    header('Location:?ctrl=loginControl');
}
if($_SESSION['admin']){
    header('Location:?ctrl=inicioControl');
}
include_once (LIB_PATH.'GestorErrores.php');
include_once (HELPERS_PATH.'funcionesGenerales.php');
include_once (MODEL_PATH.'funcionesUsuarios.php');

// Inicializamos el gestor de errores que utilizaremos en la vista
$errores=new GestorErrores('<span style="color:red; background:#EEE; padding:.2em 1em; margin:1em">', '</span>');

    $id=$_SESSION['id'];
    
    
    if (! $_POST)
    {
        // Primera vez.
        // Leo el regitro y muestro los datos
   
        $datosUsuario = getUsuario($id);
        if (! $datosUsuario )
        {
            // No existe la tarea, error
            $htmlCuerpo=  CargaVista('modificarErrores', array(
                'descripcion_error'=>'No existe la oferta seleccionada'
            ));
        }
        else
        {
           
            // Mostramos los datos
            $htmlCuerpo=  CargaVista('editarUsuarioPsicoVista', array('usuario'=>$datosUsuario, 'errores'=>$errores));
       
        }
    }
    else {
        // Filtrar datos
        include_once ('filtro_compartido.php');
        FiltraEdicionUsuariosPost($errores);
        
        // Creamos el objeto ofertaModificada que es el que se utiliza en el formulario
        // Lo creamos a partir de los datos recibidos del POST
        
        $usuario=array(
    
            'usuario'=>  VPost('usuario'),
           /* 'nombre'=>VPost('nombre'),
            'admin'=>VPost('admin'),*/
            'password'=>VPost('password'),
          
        );
    
        if ($errores->HayErrores())
        {
            // Mostrar ventana de nuevo
            $htmlCuerpo=  CargaVista('editarUsuarioPsicoVista', array('usuario'=>$usuario, 'errores'=>$errores));
         
        }
        else
        {
            // Guardamos las modificaciones
             
                modificarUsuario(VPost('usuario'),VPost('password'),$id);
               
                $htmlCuerpo="<p>Se ha guardado la modificación del usuario ....</p>";
                
            }
     
    }


// Al llegar aquí aun no he devuelto nada, podría hacer cualquier tipo de acción

// Muestro la plantilla
echo CargaVista('plantilla/layout', array(
    'titulo'=>' modificar',
    'menu'=>CargaVista('plantilla/menu'),
    'cuerpo'=>$htmlCuerpo
));