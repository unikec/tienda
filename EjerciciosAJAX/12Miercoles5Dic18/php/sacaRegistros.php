<?php 
include '../php/conexion.php';
       $consulta = "SELECT * FROM  municipios";
       $resultado = mysqli_query($conex,$consulta);
      // $datos=[];
        while($fila = mysqli_fetch_array($resultado)){
      //  $datos[]=array($fila["id"], $fila["municipio"],$fila["latitud"],$fila["longitud"]);
      	// array_push($datos,  $fila["id"], $fila["municipio"],$fila["latitud"],$fila["longitud"]);
        //$datos[]=array('id'=> $fila["id"], 'municipio'=>$fila["municipio"],'latitud'=>$fila["latitud"],'longitud'=>$fila["longitud"]) ;
     echo $fila["municipio"].','.$fila["id"].','.$fila["latitud"].','.$fila["longitud"].',';
  //  echo $fila["municipio"].',';
      }
        
    
//echo $datos;
//echo('<pre>');
//print_r($datos);
//echo('</pre>');