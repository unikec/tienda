 <?php


 $nombre= $_POST["nombre"];
 $direccion= $_POST["direccion"];
 $provincia= $_POST["provincia"];
 $poblacion= $_POST["poblacion"];
 $telefono= $_POST["telefono"];
 $orden=$_POST['orden'];

 $conexion = mysqli_connect("localhost","root","","instituto");
 $consulta = "INSERT INTO alumnos(nombre,direccion,provincia,poblacion,telefono) VALUES ('".$nombre."','".$direccion."','".$provincia."','".$poblacion."',".$telefono.")";
 $resultado = mysqli_query($conexion,$consulta);

 include('alumnos.php');
 ?>