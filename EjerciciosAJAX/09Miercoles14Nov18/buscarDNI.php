<?php

//$dni=$_GET['dni'];

$conex=new mysqli('localhost', 'root', '', 'alumnos');

if (! $conex) {
    die("<p>ERROR EN la conexión</p>");
}

$conex->set_charset("utf8");

function ver($dni){
    echo "hola";
    global $conex;
    $dni=$_GET['dni'];
    $alumnos=$conex->query("SELECT * FROM alumnostb WHERE dni='$dni' "  );
    if(!$alumnos){
       echo "<p style='color:red'>Error</p>"; 
    }
    while ($regAlumnos=$alumnos->fetch_assoc()){
	echo "<p>".$regAlumnos['dni'] . "," . $regAlumnos['nombre'] . "," . $regAlumnos['telefono'] . "," . $regAlumnos['localidad'] . "," . $regAlumnos['Fecha nacimiento']."</p>";
    } 
}