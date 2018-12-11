<?php
include '../php/conex.php';

    
$alumnos=$conex->query("SELECT * FROM alumnostb "  );

        echo '<tr>
                <th>DNI</th>
                <th>Nombre</th> 
                <th>Fecha Nacimiento</th>
                <th>Poblacion</th>
                <th>Telefono</th>
                <th>Eliminar</th>
                <th>Editar</th>
                <th>Notas</th>
              </tr>';

        while($regAlumnos=$alumnos->fetch_assoc()){
          echo "<tr>";
            echo "<td>".$regAlumnos["dni"]."</td>";
            echo "<td>".$regAlumnos["nombre"]."</td>";        
            echo "<td>".$regAlumnos["Fecha nacimiento"]."</td>";
            echo "<td>".$regAlumnos["localidad"]."</td>";
            echo "<td>".$regAlumnos["telefono"]."</td>";
            echo "<td><button id='".$regAlumnos["id"]."' type='button' class='btn btn-default' onclick='eliminarAlumno(this)' style='color:red'>
            <span class='glyphicon glyphicon-remove'></span>
            </button></td>";
            echo "<td><button id='".$regAlumnos["id"]."' type='button' class='btn btn-default' onclick='editarAlumno(this)'>
            <span class='glyphicon glyphicon-pencil'></span>
            </button></td>";
            echo "<td><button id='".$regAlumnos["id"]."' type='button' class='btn btn-default' onclick='verNotas(this)'>
            <span class='glyphicon glyphicon-book' style='color:green'></span>
            </button></td>";
          echo "</tr>";
        }
    /*
    function muestraTabla(){
   global $conex;
    $alumnos=$conex->query("SELECT * FROM alumnostb "  );
    if(!$alumnos){
        echo "<p style='color:red'>Error</p>";
    }
    else{
         echo "<table  class='table table-bordered'>";     
         echo'<thead><tr><th scope="col">NOMBRE</th><th scope="col">LOCALIDAD</th><th scope="col">TELEFONO</th><th scope="col">OPCIONES</th></tr></thead>';
         
         while ($regAlumnos=$alumnos->fetch_assoc()){
         echo "<tbody><tr><td>";
         echo($regAlumnos['nombre']);
         echo("</td><td>");
         echo($regAlumnos['localidad']);
         echo("</td><td>");
         echo($regAlumnos['telefono']);
         echo("</td>");
      // echo"<button onclick='.ver(".$regAlumnos['dni'].").'>ver</button></td>";
         echo "<td><a onclick='buscaDNI(".$regAlumnos['dni'].")'>ver</td>";
         }//end while
        //"<a href='modiProvincias8T6.php?provincia=".$regProvincias['provincia']."'>
    }  //end else  
    echo("</tr></tbody></table>\n");
}//end function muestra tabla

//<button onclick="myFunction()">Click me</button>

muestraTabla();
/*
<?php
    */