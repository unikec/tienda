<?php
use Problema1\app\models\Conexion;

/*Incluimos el fichero de la clase Conf*/
require_once 'Configuration.php';

/*Incluimos el fichero de la clase Conexion*/
require_once 'Conexion.php';

function estaDentro(){
    if(!isset($_SESSION['dentro']) || ! $_SESSION['dentro'])  // Si no existe la sesión…
    { // En el supuesto en el que se trató de acceder directamente a una página sin loguearse previamente
     //  MOSTRAMOS a la página de login con el tipo de error ‘fuera’: que indica que
       return false; 
    }else{
      
       return true;
    }
    
}
function loginOk($usuarioPost,$passwordPost){
 
  $conex=Conexion::getInstance();
  $stmt = $conex->dbh->prepare("SELECT password FROM usuarios Where usuario='".$usuarioPost."'");   
  $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $stmt->execute();
  $passok='';
  while ($row = $stmt->fetch()){
    $passok= $row['password'];      
  }
   if($passwordPost == $passok){
    return true;
  }else
    return false;
 // if ($_POST['usuario'] == $usuariook && $_POST['password'] == $passok) {
}


function getNombre(){

}
function esAdmin($usuarioPost){
  $conex=Conexion::getInstance();
  $stmt = $conex->dbh->prepare("SELECT admin FROM usuarios Where usuario='".$usuarioPost."'");   
  $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $stmt->execute();
  while ($row = $stmt->fetch()){
   return $row['admin'];      
  }
}//end esAdmin()

function esPsicologo(){

}
function logOut(){
  session_unset();
  //  $_SESSION['dentro']=FALSE;
  header("Location:?ctrl=loginControl");
}

