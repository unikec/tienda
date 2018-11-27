<?php
function muestraTabla(){
    $dni=$_GET['dni'];

    $conex=new mysqli('localhost', 'root', '', 'alumnos');
    
    if (! $conex) {
        die("<p>ERROR EN la conexión</p>");
    }
    
    $conex->set_charset("utf8");
    $alumnos=$conex->query("SELECT * FROM alumnostb WHERE dni='$dni' "  );
    if(!$alumnos)
	echo "<p style='color:red'>Error</p>";

    while ($regAlumnos=$alumnos->fetch_assoc()){
	
		echo $regAlumnos['dni'] . "," . $regAlumnos['nombre'] . "," . $regAlumnos['telefono'] . "," . $regAlumnos['localidad'] . "," . $regAlumnos['Fecha nacimiento'];

}

}
  /*  echo "<table  class='table table-bordered'>";
    
            
        echo'<thead><tr><th scope="col">NOMBRE</th><th scope="col">LOCALIDAD</th><th scope="col">TELEFONO</th></tr></thead>';
       while ($regAlumnos=$alumnos->fetch_assoc()){
     
            echo "<tbody><tr><td>";
            echo($regAlumnos['nombre']);
             echo("</td><td>");
             echo($regAlumnos['localidad']);
             echo("</td><td>");
             echo($regAlumnos['telefono']);
             echo("</td><td>");
             echo('<form method="post"><input type="hidden" ');
             echo('name="user_id" value="'.$regAlumnos['id'].'">'."\n");
             echo('<input type="submit" value="Del" name="delete">');
            echo("\n</form>\n");
            echo("</td></tr></tbody></table>\n");
    }
}

*/

muestraTabla();

?>
