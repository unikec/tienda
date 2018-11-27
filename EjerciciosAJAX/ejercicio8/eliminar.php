 <?php
 $id= $_GET["id"];


 $conexion = mysqli_connect("localhost","root","","instituto");
 $consulta = "DELETE FROM alumnos WHERE codigo=".$id;
 $resultado = mysqli_query($conexion,$consulta);

 include('alumnos.php');
 ?>