<?php

class modelo {
  private $conexion;
  // Parámetros de conexión a la base de datos 
  private $host = "localhost";
  private $user = "root";
  private $pass = "";
  private $db   = "bdpaginacion";

  public function __construct() {
    $this->conectar();
  }

  public function conectar() {
    // Conexión a la base de datos usando PDO
    $return = ['correcta'=> FALSE , 'error' => "" ];
    try { 
      $this->conexion = new  PDO("mysql:host=$this->host;dbname=$this->db",  $this->user, $this->pass);
      $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $this->conexion->exec("set names utf8");
      $this->correcta = TRUE;
    } catch (PDOException $ex) {
      $this->correcta = FALSE;
      $this->error = $ex->getMessage();
    }
    return $return;
  }

  public function listarusuarios($inicio, $regsxpag) {
    $parametros = [ "correcto" => FALSE,
                    "datos"    => NULL,
                    "contador" => 0,
                    "mensaje"  => ""  
                  ];
    /*Preparamos la consulta que vamos a realizar utilizando el parámetro SQL_CALC_FOUND_ROWS, que requerido por la función FOUND_ROWS() para poder obtener el número de filas obtenidas de la consulata sin tener que realizar otra nueva con el COUNT*/
    try{
        $sql = "SELECT SQL_CALC_FOUND_ROWS * FROM usuarios LIMIT $inicio, $regsxpag";
        
        $registros = $this->conexion->prepare($sql);
        //Ejecutamos la consulta...
        $registros->execute();
        //Almacenamos en una variable los registros obtenidos de la consulta
        $registros = $registros->fetchAll(PDO::FETCH_ASSOC);
        $return["correcto"] = TRUE;
        $return["datos"]    = $registros;
        //Calculamos el número de registros obtenidos
        $totalregistros = $this->conexion->query("SELECT FOUND_ROWS() as total");
        $totalregistros = $totalregistros->fetch()['total'];
        $return["contador"] = $totalregistros;
    }catch(PDOException $ex){
      $return["correcto"] = FALSE;
      $return["error"] = $ex->getMessage();
    }
    return $return;
  }
}
