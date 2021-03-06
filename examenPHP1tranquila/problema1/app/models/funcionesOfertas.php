<?php
include_once 'datos.php';

function getProvincias(){
        
 return $provincias;
}



/** En verOfertas() se obtienen los datos contendidos en la tabla ofertas, 
 * haciendo un join con la tabla provincias
 * para darle mayor legibilidad a los datos*/

function verOfertas(){//cambiar a getOfertas
   

    return $ofertas;
}

function getOfertasLimitadas($inicio,$regPag){//cambiar a getOfertas
    
    foreach($ofertas as $row){
        $ofertas[$row['id_oferta']]=['id'=> $row['id_oferta'],'descripcion'=>$row['descripcion'],'contacto'=>$row['contacto'],
        'telefono'=>$row['telefono'], 'email'=>$row['email'], 'direccion'=>$row['direccion'],
        'poblacion'=>$row['poblacion'],'cp'=>$row['cp'], 'id_provincia'=>$row['id_provincia'],
        'provincia'=>$row['provincia'], 'estado'=>$row['estado'],'fechaInicial'=>$row['fechaC'],
        'fechaFin'=>$row['fechaF'],'psicologo'=>$row['psicologo'],
        'candidato'=>$row['candidato'],'observaciones'=>$row['observaciones']];
}
return $ofertas;
}


function totalOfertas(){
    $conex=Conexion::getInstance();
    //$sql="SELECT COUNT(*) FROM ofertas";
    $totalOfertas =$conex->dbh->query("SELECT count(*) FROM ofertas")->fetchColumn();
   
    return $totalOfertas;
}
/**Para obtener toda la información detalle de una sola oferta*/
function getOferta($id){
    $conex=Conexion::getInstance();
    $sql="SELECT *, DATE_FORMAT(fechaFin, '%d/%m/%Y') AS fechaF, DATE_FORMAT(fecha_creacion, '%d/%m/%Y') AS fechaC FROM ofertas LEFT JOIN provincias ON ofertas.id_provincia=provincias.id where id_oferta=$id";
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
        
        //$ofertas[]=  $row['descripcion'];
        $oferta=['id'=> $row['id_oferta'],'descripcion'=>$row['descripcion'],'contacto'=>$row['contacto'],
            'telefono'=>$row['telefono'], 'email'=>$row['email'], 'direccion'=>$row['direccion'],
            'poblacion'=>$row['poblacion'],'cp'=>$row['cp'], 'id_provincia'=>$row['id_provincia'],
            'provincia'=>$row['provincia'], 'estado'=>$row['estado'],'fechaInicial'=>$row['fechaC'],
            'fechaFin'=>$row['fechaF'],'psicologo'=>$row['psicologo'],
            'candidato'=>$row['candidato'],'observaciones'=>$row['observaciones']];
    }
    return $oferta;
}
 /** Función para introducir una nueva oferta, solo estará disponible para el usuario Administrador*/


function nuevaOferta( $id,$descripcion, $contacto, $telefono, $email, $direccion, $poblacion,
    $cp, $id_provincia, $estado, $fecha_creacion, $fechaFin, $psicologo,$candidato, 
    $observaciones) {
  $conex=Conexion::getInstance();
 
  $sql="insert into ofertas  values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";// 15 con fecha Inicio
  $query= $conex->dbh->prepare($sql);
  $query->execute([$id,$descripcion, $contacto, $telefono, $email, $direccion, $poblacion,
  $cp, $id_provincia, $estado, $fecha_creacion,$fechaFin, $psicologo,$candidato,
  $observaciones]);

}



/**Esta función precisa de una operación previa pero independiente donde que confirme que realmente se quiere
 * borrar el registro selecionado, para evitar borrados por error
 * Esta función solo estará dispobible para el usario administrador
 * Previo a la eliminación se procederá a confirmar, interactuando con el servidor (no vale un alert de javascript).
 * Se mostrará una página de confirmación en la que se muestren los datos más importantes de la oferta 
 * y se pregunte si se desea borrar o no.
*/
function eliminarOferta($id) {

    $conex=Conexion::getInstance();
    $sql = "delete from ofertas where id_oferta = ?";   //prepared statements
    
    $query = $conex->dbh-> prepare($sql);
    
    $result = $query -> execute(array($id));   //prepared statements value
    
    /*Esta parte final, pueden ser elimminados una vez se compruebe la correcta ejecución del codigo
     * así como la variable result, que solo está para depurar más rapido
     */
    if($result){
        echo "<script>alert('Eliminado')</script>";
    }else{
        echo "<script>alert('error al eliminar')</script>";
    }
            
}

/**En principio esta función permite modificar todos los campos de ofertas, salvo id y fecha de creación
 * Esta función solo estará dispobible para el usario administrador*/
function modificarOferta( $descripcion, $contacto, $telefono, $email, $direccion, $poblacion,
    $cp, $id_provincia, $estado, $fechaFin, $psicologo,$candidato,
    $observaciones, $id_oferta){
        
        $conex=Conexion::getInstance();
       
        $sql=" UPDATE `ofertas` SET `descripcion`='$descripcion',`contacto`='$contacto', `telefono`='$telefono',
        `email`='$email',`direccion`='$direccion',`poblacion`='$poblacion',`cp`='$cp', `id_provincia`='$id_provincia',
        `estado`='$estado',  `fechaFin`='$fechaFin',`psicologo`='$psicologo',
       `candidato`='$candidato',
            `observaciones`='$observaciones' WHERE id_oferta=$id_oferta";
      
        $conex->dbh->prepare($sql);
        $conex->dbh->exec($sql); 
   
}



/**Esta función es semejante a modificarOferta pero estando limitado su uso 
 * Esta función solo es para uso del usuario psicologo*/
function cambiarEstado($id_oferta,$estado){
    $conex=Conexion::getInstance();
    $sql=" UPDATE `ofertas` SET `estado` = ? WHERE `ofertas`.`id_oferta` = ?";
    
    $query= $conex->dbh->prepare($sql);
  //  $query->execute([$estado, $id_oferta]);

    $result=  $query->execute([$estado, $id_oferta]);
    
    //esta parte final, pueden ser elimminados una vez se compruebe la correcta ejecución del codigo
    
    if($result){
        echo "<script>alert('Estado modificado correctamente')</script>";
    }else{
        echo "<script>alert('Error al modificar Estado')</script>";
    }
}

/**Esta función es para uso del usuario psicologo
 * cuando el radio buttom de Estado esté en R(realizando Selección) o
 * bien esté activo S (seleccionando candidato)*/
function modificarPsicologo($estado,$candidato, $observaciones,$id_oferta){
    $conex=Conexion::getInstance();
    $sql=" UPDATE `ofertas` SET `estado` = ?,`candidato`=?,
            `observaciones`=? WHERE `ofertas`.`id_oferta` = ?";
    
    $query= $conex->dbh->prepare($sql);
    
    $result=  $query->execute([$estado,$candidato, $observaciones, $id_oferta]);
    

}


