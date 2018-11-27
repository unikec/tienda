<?php

function listaProvincias($nombreCA){
    global $conex;
    
    $provincias=$conex->query("SELECT * FROM provincias P, comunidades C WHERE P.comunidad_id=C.id AND c.comunidad='$nombreCA'");
    echo "<ol>";
    while ($regProvincias=$provincias->fetch_assoc()){
        echo "<li>".$regProvincias['provincia']."<a href='modiProvincias8T6.php?provincia=".$regProvincias['provincia']."'>  Editar</a></li>";
        
        //echo $regProvincias['provincia']. ' <a href="ej11ModificarProvincia.php?id='.$regProvincias['id'].'">Modificar</a>' ;
    }
    echo "</ol>";
}


function esRepetida($dato){
    global $conex;
    $provincias=$conex->query("Select * from provincias like '$dato");
    
    print_r($provincias); echo "</pre>";
        
    if(!$provincias){
        return true;
    }
    return false;
}

function modificarNombre($nombre, $provin) {
    global $conex;
    $modiNombre=$conex->query("UPDATE provincias SET provincia='".$nombre."' WHERE provincias.provincia='".$provin."'");
    if($modiNombre === TRUE){
        echo "Registro modificado correctamente <br>";
       
    } else {
        echo "Error: " . query . "<br>" . $conex->error;
    }
    /*$sql = "UPDATE provincias SET slug = '".$_POST['provincia']."', provincia = '".$_POST['provincia']."' WHERE id = ".$_POST['id'] ;
    if ($mysqli->query($sql) === TRUE) {
        echo "Registro modificado correctamente <br>";
        echo '<a href="ej11MuestraProvincia.php?CCAAID='.$_POST['CCAAID'].'"><p>Mostrar Provincias</p></a>';
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }*/
}
function listaCCAA(){
    global $conex;
   
    $CCAA=$conex->query("Select * from comunidades");
    
    $comunidades=[];
    
    while($regCCAA= $CCAA->fetch_assoc()){
        
     
       $comunidades []= ['id'=>$regCCAA['id'], 'comunidad'=>$regCCAA['comunidad']/*, 'provincias'=>[]*/];
    }
    return $comunidades;
}//end listaCCAA


    
function CreaSelect($name, $opciones, $valorDefecto=''){
    echo '<select name="'.$name.'">';
    foreach ($opciones as $id) {
        foreach($id as $value=>$text){
             if($value==$name){
                echo "<option value='".$text."'>".$text."</option>";
             }         
        }
    }
    echo"</select>";
}//end func crea Selec