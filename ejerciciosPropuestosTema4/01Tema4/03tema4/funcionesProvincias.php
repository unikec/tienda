<?php
include_once 'conexion.php';

function getComunidades() {
    $conex=Conexion::getInstance();
    $sql = 'SELECT * FROM comunidades';
    $stmt= $conex->db->prepare($sql);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();
    $comunidades=[];
    while($row= $stmt->fetch()  ) {
      $comunidades[]= array('id'=>$row['id'],'comunidad'=> $row['comunidad']);
    }
    return $comunidades;
}
function verOfertas(){//cambiar a getOfertas
  $conex=Conexion::getInstance();     
  $sql="SELECT *, DATE_FORMAT(fechaFin, '%d/%m/%Y') AS fechaF, DATE_FORMAT(fecha_creacion, '%d/%m/%Y') AS fechaC FROM ofertas LEFT JOIN provincias ON ofertas.id_provincia=provincias.id";
  // Especificamos el fetch mode antes de llamar a fetch()
  $stmt = $conex->db->prepare($sql);
  $stmt->setFetchMode(PDO::FETCH_ASSOC);
  // Excecute
  $stmt->execute();
  // Acumulamos los resultados
  
  $ofertas=[];
  while ($row = $stmt->fetch()){
      
      //$ofertas[]=  $row['descripcion'];
      $ofertas[]=array('id'=> $row['id_oferta'],'descripcion'=>$row['descripcion'],'contacto'=>$row['contacto'],
          'telefono'=>$row['telefono'], 'email'=>$row['email'], 'direccion'=>$row['direccion'],
          'poblacion'=>$row['poblacion'],'cp'=>$row['cp'], 'id_provincia'=>$row['id_provincia'],
          'provincia'=>$row['provincia'], 'estado'=>$row['estado'],'fechaInicial'=>$row['fechaC'],
          'fechaFin'=>$row['fechaF'],'psicologo'=>$row['psicologo'],
          'candidato'=>$row['candidato'],'observaciones'=>$row['observaciones']);
  }
  return $ofertas;
}
function getProvincias(){
  $conex=Conexion::getInstance();
  // Prepare
 
  $stmt = $conex->db->prepare("SELECT * FROM provincias");
  // Especificamos el fetch mode antes de llamar a fetch()
      
  $stmt->setFetchMode(PDO::FETCH_ASSOC);
  // Excecute
  $stmt->execute();
  // Acumulamos los resultados
  $provincias=[];
  while ($row = $stmt->fetch()){
     
      //$provincias[]=  $row['provincia'];
      $provincias[$row['id']]=$row['provincia'];
   
  }
return $provincias;
}

function getProvinciasPorComunidades($idComunidad) {
    
  $conex = conexion::getInstance();
    $sql = 'SELECT * FROM provincias where comunidad_id=$idComunidad';
    $stmt= $conex->db->prepare($sql);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();
    $provincias=[];
    while($row= $stmt->fetch()  ) {
      $provincias[]= array('id'=>$row['id'],'provincia'=> $row['provincia']);
    }
    return $provincias;
}