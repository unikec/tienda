<?php
/* Muesta la lista de tareas */

/*include(MODEL_PATH.'funcionesOfertas.php');



// En un planteamiento real puede que incluyesemos más cosas
echo CargaVista('plantilla/layout', array(
    'titulo'=>' Nueva oferta',
    'menu'=>CargaVista('plantilla/menu'),
    'cuerpo'=>CargaVista('insertarOfertaVista'),
));
*/
include (LIB_PATH.'GestorErrores.php');
include (HELPERS_PATH.'funcionesGenerales.php');
include (MODEL_PATH.'funcionesOfertas.php');

// Inicializamos el gestor de errores que utilizaremos en la vista
$errores=new GestorErrores('<span style="color:red; background:#EEE; padding:.2em 1em; margin:1em">', '</span>');

$provincias=getProvincias();
$oferta=array(
    
    'descripcion'=>  VPost('descripcion'),//seguir rellenado por cada uno de los campos que sea posible modificar
    'contacto'=>VPost('contacto'),
    'telefono'=>VPost('telefono'),
    'email'=>VPost('email'),
    'direccion'=>VPost('direccion'),
    'poblacion'=>VPost('poblacion'),
    'cp'=>VPost('cp'),
    'provincia'=>VPost('provincia'),
    'estado'=>VPost('estado'),
    'fechaFin'=>VPost('fechaFin'),
    'psicologo'=>VPost('psicologo'),
    'candidato'=>VPost('candidato'),
    'observaciones'=>VPost('observaciones'),

);

   
    if (! $_POST)
    {
        // Primera vez.
        // Leo el registro y muestro los datos
   
        $htmlCuerpo=CargaVista('insertOfertaVista', array('oferta'=>$oferta,'errores'=>$errores,'provincias'=>$provincias));
   
    }
    else {
        // Filtrar datos
        include ('filtro_compartido.php');
        FiltraCamposPost($errores);
  
        
        if ($errores->HayErrores())
        {
            // Mostrar ventana de nuevo
            $htmlCuerpo=  CargaVista('insertOfertaVista', array('oferta'=>$oferta, 'errores'=>$errores, 'provincias'=>$provincias));
            
        }
        else
        {
            // Guardamos las modificaciones
   
            nuevaOferta(NULL,VPost('descripcion'), VPost('contacto'),VPost('telefono'),VPost('email'),VPost('direccion'),
                VPost('poblacion'), VPost('cp'), VPost('provincia'), VPost('estado'),NULL,cambiaFormatoFecha(VPost('fechaFin')),
                VPost('psicologo'),VPost('candidato'), VPost('observaciones'));
        
            $htmlCuerpo="<p>Se ha guardado la oferta ....</p>";
            
   
        }
    }


// Al llegar aquí aun no he devuelto nada, podría hacer cualquier tipo de acción

// Muestro la plantilla
echo CargaVista('plantilla/layout', array(
    'titulo'=>' Nueva Oferta',
    'menu'=>CargaVista('plantilla/menu'),
    'cuerpo'=>$htmlCuerpo
));
