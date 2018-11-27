<?php

//$dni=$_GET['dni'];

$conex=new mysqli('localhost', 'root', '', 'alumnos');

if (! $conex) {
    die("<p>ERROR EN la conexión</p>");
}

$conex->set_charset("utf8");


function muestraTabla(){
   global $conex;
    $alumnos=$conex->query("SELECT * FROM alumnostb "  );
    if(!$alumnos){
        echo "<p style='color:red'>Error</p>";
    }
    else{
         echo "<table  class='table table-bordered'>";     
         echo'<thead><tr><th scope="col">NOMBRE</th><th scope="col">LOCALIDAD</th><th scope="col">TELEFONO</th><th scope="col">OPCIONES</th></tr></thead>';
         
         while ($regAlumnos=$alumnos->fetch_assoc()){
         echo "<tbody><tr><td>";
         echo($regAlumnos['nombre']);
         echo("</td><td>");
         echo($regAlumnos['localidad']);
         echo("</td><td>");
         echo($regAlumnos['telefono']);
         echo("</td>");
      // echo"<button onclick='.ver(".$regAlumnos['dni'].").'>ver</button></td>";
         echo "<td><a onclick='entregaDNI(".$regAlumnos['dni'].")'>ver</td>";
         }//end while
        //"<a href='modiProvincias8T6.php?provincia=".$regProvincias['provincia']."'>
    }  //end else  
    echo("</tr></tbody></table>\n");
}//end function muestra tabla

//<button onclick="myFunction()">Click me</button>

muestraTabla();

?>