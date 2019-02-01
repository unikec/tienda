<?php
function getProvinciasByCode(){
	
$database = mysqli_connect("localhost", "root", "", "exampleDB");

mysqli_set_charset($database, 'utf8');

	$query="SELECT * FROM provincias WHERE comunidad_id LIKE '%".$_GET['prov']."%'";
	
	$result=mysqli_query($database,$query);
	
	echo "<table border='1'><th>Nombre</th>";
	
	while ($datos = mysqli_fetch_row($result)) {
		
		echo "<tr><td>".$datos[2]."</td></tr>";
			
	}
	echo "</table>";
}

getProvinciasByCode();