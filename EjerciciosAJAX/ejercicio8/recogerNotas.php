<?php

 $nombre= $_GET["id"];


 $conexion = mysqli_connect("localhost","root","","instituto");
 $consulta = "SELECT * FROM notas WHERE codigo=".$nombre;
 $resultado = mysqli_query($conexion,$consulta);
 echo "<th>ID</th>";
 echo "<th>DESCRIPCION</th>";
 echo "<th>NOTA</th>";
 echo "<th>ID_ALUMNO</th>";

 while($fila = mysqli_fetch_array($resultado)){
 	echo "<tr>";
 		echo "<td>".$fila['id_notas']."</td>";
 		echo "<td>".$fila['descripcion']."</td>";
 		echo "<td>".$fila['nota']."</td>";
 		echo "<td>".$fila['codigo']."</td>";
 	echo "</tr>";
 }
  ?>