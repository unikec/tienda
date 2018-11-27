<?php
include "conexion.php";
$CCAA=$conex->query("Select * from comunidades");

$comunidades=[];

while($resCCAA= $CCAA->fetch_assoc()){
    $provincias=$conex->query("Select * from provincias where comunidad_id=".$resCCAA['id']);
   
    $prov=[];
    while($resProv=$provincias->fetch_assoc()){
       
        $prov[]= $resProv['provincia'];
    }
  
   $comunidades[]=array('nombre'=>$resCCAA['comunidad'], 'provincias'=>$prov,);
}

