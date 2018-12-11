<?php
//session_start();
if(!isset($_SESSION['dentro'])){
    header('Location:?ctrl=loginControl');
}
/**
 *  Muestra la lista de Ofertas
 * controla que el usuario este logueado
 * porporciona información a la vista para la paginación
 * y mostrar la tabla completa de ofertas */

include_once (MODEL_PATH.'funcionesOfertas.php');

$numOfertas=totalOfertas();
$regPag=5;//numero de ofertas que va a mostrar mi pag
$paginasTotal=ceil($numOfertas/$regPag);

//$ofertas=  verOfertas();//ya es antiguo de antes de paginar
$paginaActiva=(int)$_GET['pag'];

if(!$_GET){
 header('location:?ctrl=listarOfertasControl&pag=1');
 
}
if($_GET['pag']>$paginasTotal || $_GET['pag']<=0){
    header('location:?ctrl=listarOfertasControl&pag=1');
}else{
    $ofertas= getOfertasLimitadas((($paginaActiva-1)*$regPag),$regPag);//lequito uno porque el array empieza en cero
// En un planteamiento real puede que incluyesemos más cosas

echo CargaVista('plantilla/layout', array(
    'titulo'=>'Listado de Ofertas',
    'menu'=>CargaVista('plantilla/menu'),
    'cuerpo'=>CargaVista('listaOfertasVista', array('ofertas'=>$ofertas,'numOfertas'=>$numOfertas, 'paginas'=>$paginasTotal, 'pagina'=>$paginaActiva)),
));

}
