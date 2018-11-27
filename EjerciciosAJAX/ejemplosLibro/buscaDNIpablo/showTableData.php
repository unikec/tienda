<?php

function showTabla(){
	
	$dni=$_GET['info'];
	
$database = mysqli_connect("127.0.0.1", "root", "", "exampleDB");

mysqli_set_charset($database, 'utf8');

$query="SELECT * FROM alumno WHERE dni='".$dni."'";

$result=mysqli_query($database,$query);

if(!$result)
	echo "<p style='color:red'>Error</p>";

while ($datos = mysqli_fetch_row($result)) {
	
		echo $datos[1] . "," . $datos[2] . "," . $datos[3] . "," . $datos[4] . "," . $datos[5];

}

}

showTabla();


?>