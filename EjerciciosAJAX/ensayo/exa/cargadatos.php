<?php
	$cod=$_GET['cod'];
	
	mysql_connect('docarmo.net','examen','marisma');
	mysql_select_db('examen');
	$consulta = mysql_query('SELECT * FROM articulos WHERE codigo ='.$cod);
	
	while ($arrayConsulta = mysql_fetch_array($consulta)) {
		echo $arrayConsulta['descripcion'].','.$arrayConsulta['precio'];
	}
?>