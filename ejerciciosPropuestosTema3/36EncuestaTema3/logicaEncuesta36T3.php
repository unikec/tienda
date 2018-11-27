<?php
//
// ¿Han enviado datos?  preguntamos a POST //un array vacio es falso
//
$errores=array();// para acumular las frases de error // tiene que
if ($_POST)
{ // Datos enviados
    
    $hay_errores=FALSE;
    if(!isset($_POST['sexo'])){
        $hay_errores=true;
        $errores['sexo']="<p class='text-center text-danger'><strong>Cuidado:</strong> El campo Sexo no está contestado</p>";
        
    }
    if(!isset($_POST['aficiones'])){
        $hay_errores=true;
        $errores['aficiones']="<p class='text-center text-danger'><strong>Cuidado:</strong> El campo Aficiones no está seleccionada ninguna opción</p>";
        
    }
    if(!isset($_POST['estudios'])){
        $hay_errores=true;
        $errores['estudios']="<p class='text-center text-danger'><strong>Cuidado:</strong> El campo Aficiones no está seleccionada ninguna opción</p>";
        
    }
    if(empty($_POST['vacaciones'])){
        $hay_errores=true;
        $errores['vacaciones']="<p class='text-center text-danger'><strong>Cuidado:</strong> El campo Vacaciones no está contestado</p>";
        
    }
       
    if ($hay_errores)
    { // Hay errores - Debemos mostrarlos y volver hacer el cuestionario
        include('formularioEncuesta36T3.php');
    }
    else
    {
        // Realizamos el informe, ya tenemos datos y no hay fallos
        include('formularioTratadoEncuesta36T3.php');
    }
}
else
{ // No hay nada en $_post
   //Mostramos formulario de la encuesta por primera vez
    include('formularioEncuesta36T3.php');
}


//Fuciones

/*function ValorP($nombreCampo, $default='')
{
    if (isset($_POST[$nombreCampo]))
        return $_POST[$nombreCampo];
    else
        return $default;
}
*/

function GetHTMLPregunta() { //crea HTML lo devuelve como cadena
  
   $pregunta1=[
       'text_pregunta'=>'Sexo',
       'tipo'=>true,
       'campo'=>'sexo',
       'respuestas'=>[
           ['etiqueta'=>'Hombre','valor'=>'Hombre'],
           ['etiqueta'=>'Mujer','valor'=>'Mujer']
       ]
       
   ];
   
   $pregunta2=[
       'text_pregunta'=>'Aficiones ',
       'tipo'=> false,
       'campo'=> 'aficiones[]',
       'respuestas'=> [
           ['etiqueta'=>'Deporte','valor'=>'Deporte'],
           ['etiqueta'=>'Cine','valor'=>'Cine'],
           ['etiqueta'=>'Teatro','valor'=>'Teadro']
       ]
   ];
   $pregunta3=[
       'text_pregunta'=>'Estudios que tiene ',
       'tipo'=> false,
       'campo'=> 'estudios[]',
       'respuestas'=> [
           ['etiqueta'=>'ESO','valor'=>'ESO'],
           ['etiqueta'=>'C.F.G Medio','valor'=>'C.F.G Medio'],
           ['etiqueta'=>'C.F.G Superior','valor'=>'C.F.G Superior'],
           ['etiqueta'=>'Grado','valor'=>'Grado']
       ]
   ];
   
   $pregunta4=[
       'text_pregunta'=>'Lugar al que te gustaría ir de vacaciones ',
       'tipo'=> true,
       'campo'=>'vacaciones',
       'respuestas'=>[
                       ['etiqueta'=>'Mediterraneo','valor'=>'Mediterraneo'],
                       ['etiqueta'=>'Caribe','valor'=>'Caribe'],
                       ['etiqueta'=>'EEUU','valor'=>'EEUU'],
                       ['etiqueta'=>'Centro Europa','valor'=>'Centro Europa']
                   ]
       
   ];
   $preguntas=['1'=>$pregunta1,'2'=>$pregunta2,'3'=>$pregunta3,'4'=>$pregunta4];
   return $preguntas;
}

function imprimeCuestionario($arrayP){
    
    echo "<form method='post'>";
    
    foreach ($arrayP as $indiX => $pregun){
       
        echo "<h3>Pregunta ".$indiX.": ";
        
        creaPregunta($pregun);
             
    } 
    echo "<input type='submit'></form>";
        // <input type="submit" name="submit" value="Submit">
}

function creaPregunta($pregunta) { //genera formulario
 //  echo "<form method='post'>";
    foreach ($pregunta as $concepto => $contenido) { //foreach1
        if($concepto =='text_pregunta'){
            echo "<label>".$contenido."</label></h3>";
        }
        if($concepto == 'tipo'){
            $tipo= $contenido? "radio" :"checkbox"; //selecciono el tipo de input
            $tipo="<input type='".$tipo."'"; // lo almaceno con su etiqueta html para no liarme con las comillas despues
        }
        if($concepto == 'campo'){ //almaceno campo con su etiqueta html
            $campo= " name='".$contenido."' ";
            
        }
        if($concepto == 'respuestas'){
            foreach ($contenido as  $contenidoR){ //foreach2 lo necesito me encontrado con el segundo array
                
                echo $tipo.$campo; //por cada una de las respuestas inicio un input con el type y el name almacenados antes
                
                foreach ($contenidoR as $conceptoRespuesta => $contenidoRespuesta) { //foreach3 hay otro nivel más de arrays
                    
                   if($conceptoRespuesta == 'etiqueta'){
                        echo " value=".$contenidoRespuesta.">";
                    }
                   if($conceptoRespuesta == 'valor'){
                        echo "<label>".$contenidoRespuesta."</label><br>";   
                    }
              
                }//end foreach3
                
            }//end foreach2
            
        }//end if==respuestas
        
    }//end foreach1
    
}//end function creaPregunta()


?>
