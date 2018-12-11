<?php
use Problema1\app\models\Conexion;

/*Incluimos el fichero de la clase Conf*/
require_once 'Configuration.php';

/*Incluimos el fichero de la clase Conexion*/
require_once 'Conexion.php';

/**
 * 
 *  la función insert usuario es igual que la nueva oferta pero usando bindParadm
 * */
function nuevoUsuario($id,$usuario,$nombre,$admin,$password)
{
    $conex=Conexion::getInstance();
    try {
        $query=$conex->dbh->prepare('insert into usuarios values(?,?,?,?,?)');
       
        $query->bindParam(1, $id);
        $query->bindParam(2, $usuario);
        $query->bindParam(3, $nombre);
        $query->bindParam(4, $admin);// indicar insertar 1 para admin 0 para psicologos
        $query->bindParam(5, $password);
        $query->execute();
      //  $query->execute([$id,$usuario,$admin,$contraseña]);
    } catch (PDOException $e) {
        $e->getMessage();
    }
}

function getUsuario($id){
    $conex=Conexion::getInstance();
    $sql="SELECT * FROM usuarios where usuarios.id=$id";
    // Especificamos el fetch mode antes de llamar a fetch()
    $stmt = $conex->dbh->prepare($sql);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    // Excecute
    $stmt->execute();
    // solo hay uno o ninguno
    $row = $stmt->fetch();
    if (!$row) {
        $oferta=NULL;
    }
    else {
    
        $oferta=['id'=> $row['id'],'usuario'=>$row['usuario'],'nombre'=>$row['nombre'],
        'admin'=>$row['admin'], 'password'=>$row['password']];
    }
    return $oferta;
}

function modificarUsuario($usuario,$password,$idUsuario){
        
        $conex=Conexion::getInstance();
       
        $sql=" UPDATE `usuarios` SET `usuario`='$usuario',`password`='$password' WHERE id=$idUsuario";
      
        $conex->dbh->prepare($sql);
        $conex->dbh->exec($sql); 
   

}//end functio modificar clave o usuario


function eliminarUsuario($id) {

    $conex=Conexion::getInstance();
    $sql = "delete from usuarios where id = ?";   //prepared statements
    $query = $conex->dbh-> prepare($sql);
    $result = $query -> execute(array($id));   //prepared statements value
 
    if($result){
        echo "<script>alert('Eliminado')</script>";
    }else{
        echo "<script>alert('error al eliminar')</script>";
    }
            
} 
function listarUsuarios(){
    
  $conex=Conexion::getInstance();
  $stmt = $conex->dbh->prepare("SELECT * FROM usuarios");   
  $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $stmt->execute();
  $listaUsuarios=[];
  while ($row = $stmt->fetch()){
    $listaUsuarios[]=array('id'=>$row['id'],'usuario'=>$row['usuario'],'nombre'=>$row['nombre'],'admin'=>$row['admin'],'password'=>$row['password']) ;      
  }
  return $listaUsuarios;
}