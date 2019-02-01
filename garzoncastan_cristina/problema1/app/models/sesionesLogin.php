<?php
use Problema1\app\models\Conexion;

/**Incluimos el fichero de la clase Conf*/
require_once 'Configuration.php';

/**Incluimos el fichero de la clase Conexion*/
require_once 'Conexion.php';

/**
 * Función que aclara si el usuario está logueado o no
 */
function estaDentro()
{
    if (!isset($_SESSION['dentro']) || !$_SESSION['dentro']) // Si no existe la sesión…
    { //
        return false;
    } else {

        return true;
    }

}

/**
 * Permite verificar si los datos introducidos en la vista login
 * corresponden al usuario indicado con la contraseña introducida
 */
function loginOk($usuarioPost, $passwordPost)
{

    $conex = Conexion::getInstance();
    $stmt = $conex->dbh->prepare("SELECT * FROM usuarios Where usuario='" . $usuarioPost . "' and password='" . $passwordPost . "'");
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

/**
 * Aclara si es usuario es tipo administrador
 */
function esAdmin()
{
    if ($_SESSION['admin'] == 1) // 1 es administrador, 0 es psicologo
    {
        return $_SESSION['admin'] = 'administrador';
    }

} //end esAdmin()

/**
 * Aclara si es usuario es tipo psicologo
 */
function esPsicologo()
{
    if ($_SESSION['admin'] == 0) // 1 es administrador, 0 es psicologo
    {
        return $_SESSION['admin'] = 'psicologo';
    }

} //end esPsicologo()

/**
 * En concreto devuelve el dato nombre del usuario loqueado
 */
function getNombre()
{
    return $_SESSION['nombre'];
}

/**
 * Nos permite aclarar que tipo de usuario está logueado en la aplicación
 */
function tipoUsuario()
{
    if ($_SESSION['admin'] == 1) { // 1 es administrador, 0 es psicologo
        return 'administrador';
    }
    if ($_SESSION['admin'] == 0) {
        return 'psicologo';
    }

}


/**
 * Permite finalizar sesión
 */
function logOut()
{

    session_unset();
    //  $_SESSION['dentro']=FALSE;
    header("Location:?ctrl=loginControl");
}

/**
 * Permite conocer quien esl usuario logueado
 */
function quienSoy()
{
    if (estaDentro()) {
        return $_SESSION['usuario'];
    } else {
        return '';
    }
}
