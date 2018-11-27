<?php 
	   $id = $_POST["id"];
	   $conexion = mysqli_connect("localhost","root","","instituto");
       $consulta = "SELECT municipio FROM municipios WHERE provincia=".$id;
       $resultado = mysqli_query($conexion,$consulta);

       echo"<label for='provincia'>Municipios</label>";
       echo"<select id='MunicipioSelect' class='form-control'>";

        while($fila = mysqli_fetch_array($resultado)){
       	 echo "<option>".$fila["municipio"]."</option>";
       	}

       echo "</select>";
?>