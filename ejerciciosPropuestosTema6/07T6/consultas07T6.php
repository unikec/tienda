<?php
include 'conexion07T6.php';

$errores=array();// para acumular las frases de error // tiene que
if ($_POST)
{ // Datos enviados
    
    $hay_errores=FALSE;
    if (!isset($_POST['nuevaProvincia'] ) || empty($_POST['nuevaProvincia']) || is_null($_POST['nuevaProvincia']) ) {
        $hay_errores=true;
        $errores['vacio']="<p class='text-center text-danger'><strong>Cuidado:</strong>No has introducido ninguna provincia</p>";
    }
    
    if(esRepetida($_POST['nuevaProvincia'])){
        $hay_errores=true;
        $errores['repetida']="<p class='text-center text-danger'><strong>Cuidado:</strong>La provincia indicada ya está introducida</p>";
    }
    if( preg_match("/[0-9]+/i", $_POST['nuevaProvincia'])){
        $hay_errores=true;
        $errores['numerica']="<p class='text-center text-danger'><strong>Cuidado:</strong>No has introducido una provincia válida</p>";
    }
    
    if ($hay_errores)
    { // Hay errores - Debemos mostrarlos y preguntar
        include('formulario.php');
    }
    else
    {
        // Realizamos operaciones que correspondan
        include('formulario.php');
    }
}
else
{ // Mostramos formulario por primera vez
    include('formulario.php');
}


function insert($nombre) {
    global $conex;
    if($nombre==""){
        echo "Fallo en el control de variable vacia";
    }else{
    $conex->query("INSERT INTO provincias (id, slug, provincia, comunidad_id, capital_id) 
                           VALUES (NULL,'$nombre', '$nombre', 20, -1 )");
   
    }
}
function listaProvincias(){
    global $conex;

    $provincias=$conex->query("Select provincia from provincias where comunidad_id=20");
    echo "<ol>";
    while ($resProvincias=$provincias->fetch_assoc()){
        echo "<li>".$resProvincias['provincia']."</li>";
    }
    echo "</ol>";
}

/*function esRepetida($dato){ //primera versión 
    global $conex;
    $provincias=$conex->query("Select provincia from provincias where comunidad_id=20");
    
    echo "<h1>ES REPETIDA</h1><pre>"; print_r($provincias); echo "</pre>";
    
   foreach ($provincias as $idX =>$prov) {
       if($prov == $dato){
           return true;
       }
       return false;
   }*/
  
  function esRepetida($dato){
       global $conex;
       $provincias=$conex->query("Select * from provincias like '$dato");
       
       print_r($provincias); echo "</pre>";
      
       //$row_cnt = $provincias->num_rows;
   
           if(!$provincias){
               return true;
           }
           return false;
       
    
}
