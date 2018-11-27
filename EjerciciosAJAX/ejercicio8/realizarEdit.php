
    <?php
        $codigo = $_POST["codigo"];
        $nombre= $_POST["nombre"];
        $direccion= $_POST["direccion"];
        $provincia= $_POST["provincia"];
        $poblacion= $_POST["poblacion"];
        $telefono= $_POST["telefono"];


        $conexion = mysqli_connect("localhost","root","","instituto");
        $consulta = "UPDATE alumnos SET nombre='".$nombre."', direccion='".$direccion."',provincia='".$provincia."',poblacion='".$poblacion."',telefono='".$telefono."' WHERE codigo=".$codigo;

        $resultado = mysqli_query($conexion,$consulta);


         include('alumnos.php');
        
    ?>
