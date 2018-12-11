<?php
use Problema1\app\models\Conexion;

/*Incluimos el fichero de la clase Conf*/
require_once 'Configuration.php';

/*Incluimos el fichero de la clase Conexion*/
require_once 'Conexion.php';

function estaDentro()
{
    if (!isset($_SESSION['dentro']) || !$_SESSION['dentro']) // Si no existe la sesión…
    { // En el supuesto en el que se trató de acceder directamente a una página sin loguearse previamente
        //  MOSTRAMOS a la página de login con el tipo de error ‘fuera’: que indica que
        return false;
    } else {

      return true;
    }

}

function loginOk($usuarioPost, $passwordPost){

  $conex = Conexion::getInstance();
    $stmt = $conex->dbh->prepare("SELECT * FROM usuarios Where usuario='" . $usuarioPost . "' and password='".$passwordPost ."'");
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();
    $user = $stmt->fetch();
    if (!$user) {
        return false;
    } else {
        $_SESSION['dentro'] = true;
        $_SESSION['usuario'] = $user['nombre'];
        $_SESSION['admin'] = $user['admin']; 
        $_SESSION['id'] = $user['id']; 
       return true;
    }
}

function esAdmin()
{
    if ($_SESSION['admin'] == 1) // 1 es administrador, 0 es psicologo
    return $_SESSION['admin'] = 'administrador';
} //end esAdmin()

function esPsicologo()
{
    if ($_SESSION['admin'] == 0) // 1 es administrador, 0 es psicologo
    return $_SESSION['admin'] = 'psicologo';
} //end esPsicologo()

function getNombre(){
     return $_SESSION['nombre'];
}

function tipoUsuario(){
 if ($_SESSION['admin'] == 1){ // 1 es administrador, 0 es psicologo
    return 'administrador';
  } 
  if($_SESSION['admin'] == 0){
    return 'psicologo';
  }
  
}

function logOut(){

    session_unset();
    //  $_SESSION['dentro']=FALSE;
    header("Location:?ctrl=loginControl");
}

function quienSoy()
{
    if (estaDentro()) {
        return $_SESSION['usuario'];
    } else {
        return '';
    }
}
