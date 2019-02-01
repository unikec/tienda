<?php
class conexion
{ 
    public $db;   // handle of the db connexion    
    //Datos de host, base de datos, usuario y contraseña 
    private static $dns = "mysql:dbname=jobandcarajo2;host=localhost"; 
    private static $user = "root"; 
    private static $pass = "";     
    private static $instance;

    public function __construct ()  
    {        
       $this->db = new PDO(self::$dns,self::$user,self::$pass);       
    } 

    //Nos devuelve la conexion actual, si no existe la crea y la envia
    public static function getInstance()
    { 
        if(!isset(self::$instance)) 
        { 
            $object= __CLASS__; 
            self::$instance=new $object; 
        } 
        return self::$instance; 
    }    
} 
/***
$dsn = 'mysql:dbname=ejercicios;host=localhost';
$usuario = 'root';
$contraseña = '';
$dbh;
$instance;

$conex = new PDO($dsn, $usuario, $contraseña);
if (! $conex) {
    die("<p>ERROR EN la conexión</p>");
}

//printf("Conjunto de caracteres inicial: %s\n", $conex->character_set_name());
//$conex->set_charset("utf8");

/* */

