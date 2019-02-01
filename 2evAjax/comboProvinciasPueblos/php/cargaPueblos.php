<?php 
$id = $_GET["id"];	
$database = mysqli_connect("localhost", "root", "", "ejercicios");

mysqli_set_charset($database,'utf8');

	$query="SELECT * FROM municipios WHERE provincia_id= $id";
	
	$result=mysqli_query($database,$query);
	
	echo "<select id='sel2'>";
	
	while ($datos = mysqli_fetch_row($result)) {
		
		echo "<option value='".$datos[2]."'>".$datos[1]."</option>";
			
	}
	echo "</select>";



