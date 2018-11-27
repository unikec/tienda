<?php
include (LIB_PATH.'GestorErrores.php');
include (HELPERS_PATH.'funcionesGenerales.php');
include (MODEL_PATH.'funcionesOfertas.php');

// Inicializamos el gestor de errores que utilizaremos en la vista
$errores=new GestorErrores('<span style="color:red; background:#EEE; padding:.2em 1em; margin:1em">', '</span>');

$provincias=getProvincias();

if (! isset($_GET['id']))
{
    // No existe la Oferta, error
    
    $htmlCuerpo=  CargaVista('modificarErrores', array(
        'descripcion_error'=>'No existe la oferta seleccionada'
    ));
}
else
{ // Han indicado el id
    $id=$_GET['id'];
    
    
    if (! $_POST)
    {
        // Primera vez.
        // Leo el regitro y muestro los datos
   
        $datosOferta = getOferta($id);
        if (! $datosOferta )
        {
            // No existe la tarea, error
            $htmlCuerpo=  CargaVista('modificarErrores', array(
                'descripcion_error'=>'No existe la oferta seleccionada'
            ));
        }
        else
        {
           
            // Mostramos los datos
            $htmlCuerpo=  CargaVista('modificarOfertaVista', array('oferta'=>$datosOferta, 'errores'=>$errores, 'provincias'=>$provincias));
         /*   echo CargaVista('plantilla/layout', array(
                'titulo'=>' modificar',
                'menu'=>CargaVista('plantilla/menu'),
                //'cuerpo'=>$htmlCuerpo,
                'cuerpo'=> CargaVista('modificarOfertaVista', array('oferta'=>$ofertaSinModificar, 'errores'=>$errores))
            ));*/
        }
    }
    else {
        // Filtrar datos
        include ('filtro_compartido.php');
        FiltraCamposPost($errores);
        
        // Creamos el objeto ofertaModificada que es el que se utiliza en el formulario
        // Lo creamos a partir de los datos recibidos del POST
        $ofertaModificada=array(
            
            'descripcion'=>  VPost('descripcion'),//seguir rellenado por cada uno de los campos que sea posible modificar
            'contacto'=>VPost('contacto'),
            'telefono'=>VPost('telefono'), 
            'email'=>VPost('email'),
            'direccion'=>VPost('direccion'),
            'poblacion'=>VPost('poblacion'),
            'cp'=>VPost('cp'),
            'id_provincia'=>VPost('id_provincia'), 
            'estado'=>VPost('estado'),
            'fechaFin'=>VPost('fechaFin'),
            'psicologo'=>VPost('psicologo'),
            'candidato'=>VPost('candidato'),
            'observaciones'=>VPost('observaciones'),
            'id_oferta'=>$id
        );
    
        if ($errores->HayErrores())
        {
            // Mostrar ventana de nuevo
            $htmlCuerpo=  CargaVista('modificarOfertaVista', array('oferta'=>$ofertaModificada, 'errores'=>$errores, 'provincias'=>$provincias));
         
        }
        else
        {
            // Guardamos las modificaciones
     // echo "hola voy a guardar";
         modificarOferta(VPost('descripcion'), VPost('contacto'),VPost('telefono'),VPost('email'),VPost('direccion'),
               VPost('poblacion'), VPost('cp'), VPost('id_provincia'), VPost('estado'),cambiaFormatoFecha(VPost('fechaFin')), VPost('psicologo'),
               VPost('candidato'), VPost('observaciones'), $id);//cambiaFormatoFecha(VPost('fechaFin'))
        //  saveOferta($ofertaModificada);
            $htmlCuerpo="<p>Se ha guardado la oferta ....</p>";
        }
    }
} // de Han indicado el id

// Al llegar aquí aun no he devuelto nada, podría hacer cualquier tipo de acción

// Muestro la plantilla
echo CargaVista('plantilla/layout', array(
    'titulo'=>' modificar',
    'menu'=>CargaVista('plantilla/menu'),
    'cuerpo'=>$htmlCuerpo
));

