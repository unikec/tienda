<?php
function getMunicipios(){
	
$database = mysqli_connect("localhost", "root", "", "exampleDB");

mysqli_set_charset($database, 'utf8');

	$query="SELECT * FROM municipios";
	
	$result=mysqli_query($database,$query);
	
	
	while ($datos = mysqli_fetch_row($result)) {
		
		echo $datos[1].",";
			
	}
}

getMunicipios();