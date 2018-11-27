<?php
 require_once "modelo.php";
 
 class controlador{
   private $modelo;
   
   public function __construct() {
     $this->modelo = new modelo();
   }

  public function index() {
    $parametros = [  "tituloventana" => "Paginación con PHP,PDO y MVC"   ];
    
   //Mostramos la página de inicio 
    include_once 'inicio.php';
  }

   public function listado(){
     $tituloventana= "Listado de usuarios";
     $resultModelo = NULL;
     $mensaje = NULL;
      
         
     //Establecemos el número de registroa a mostrar por página,por defecto 2
     $regsxpag = (isset($_GET['regsxpag']))? (int)$_GET['regsxpag']:2;
     
     //Establecemos el la página que vamos a mostrar, por página,por defecto la 1
     $pagina = (isset($_GET['pagina']))? (int)$_GET['pagina']:1;
     
      //Definimos la variable $inicio que indique la posición del registro desde el que se
     $inicio= ($pagina>1)? (($pagina*$regsxpag)-$regsxpag): 0;
     
     //Realizamos la consulta
     $resultModelo = $this->modelo->listarusuarios($inicio, $regsxpag);
     if($resultModelo['correcto']):
       $registros = $resultModelo['datos'];
       $totalregistros = $resultModelo['contador'];
       $numpaginas= ceil($totalregistros/$regsxpag);
      else:
       $totalregistros=0;
       $mensaje = [ "tipo" => "danger",
                    "mensaje" => "El listado no pudo realizarse correctamente!! :(
                    <br/>({$resultModelo["error"]})"
                  ];   
      endif;
     require_once 'vista.php';
   }
 }
 
?>

