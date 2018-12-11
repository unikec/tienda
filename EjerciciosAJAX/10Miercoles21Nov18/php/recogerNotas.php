<?php
include '../php/conex.php';
 $id= $_GET["id"];

 $consulta = "SELECT * FROM notas LEFT JOIN alumnostb ON notas.id_alumno= alumnostb.id WHERE id=".$id;

 $resultado = mysqli_query($conex,$consulta);
 echo "<th>ALUMNO</th>";
 echo "<th>ASIGNATURA</th>";
 echo "<th>NOTA</th>";
 

 while($fila = mysqli_fetch_array($resultado)){
 	echo "<tr>";
 	    echo "<td>".$fila['nombre']."</td>";
 		echo "<td>".$fila['descripcion']."</td>";
 		echo "<td>".$fila['nota']."</td>";
 		
 	echo "</tr>";
 }