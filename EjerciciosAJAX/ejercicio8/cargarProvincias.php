<?php 
	   $conexion = mysqli_connect("localhost","root","","instituto");
       $consulta = "SELECT * FROM provincias";
       $resultado = mysqli_query($conexion,$consulta);

       echo"<label for='provincia'>Provincia</label>";
       echo"<select id='provinciaSelect' class='form-control' onchange='generarMunicipios()'>";

        while($fila = mysqli_fetch_array($resultado)){
       	 echo "<option value='".$fila["id"]."'>".$fila["provincia"]."</option>";
       	}

       echo "</select>";
?>