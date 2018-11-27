
    <?php
        error_reporting (0);
        $orden;
        if(is_null($_GET['orden'])){
            $orden='codigo';
        }else{
            $orden=$_GET['orden'];
        }
        $conexion = mysqli_connect("localhost","root","","instituto");
        $consulta = "SELECT * FROM alumnos ORDER BY ".$orden;
        $resultado = mysqli_query($conexion,$consulta);

        echo '<tr>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Direccion</th>
                <th>Provincia</th>
                <th>Poblacion</th>
                <th>Telefono</th>
                <th>Eliminar</th>
                <th>Editar</th>
                <th>Notas</th>
              </tr>';

        while($fila = mysqli_fetch_array($resultado)){
          echo "<tr>";
            echo "<td>".$fila["codigo"]."</td>";
            echo "<td>".$fila["nombre"]."</td>";
            echo "<td>".$fila["direccion"]."</td>";
            echo "<td>".$fila["provincia"]."</td>";
            echo "<td>".$fila["poblacion"]."</td>";
            echo "<td>".$fila["telefono"]."</td>";
            echo "<td><button id='".$fila["codigo"]."' type='button' class='btn btn-default' onclick='eliminarAlumno(this)' style='color:red'>
            <span class='glyphicon glyphicon-remove'></span>
            </button></td>";
            echo "<td><button id='".$fila["codigo"]."' type='button' class='btn btn-default' onclick='editarAlumno(this)'>
            <span class='glyphicon glyphicon-pencil'></span>
            </button></td>";
            echo "<td><button id='".$fila["codigo"]."' type='button' class='btn btn-default' onclick='verNotas(this)'>
            <span class='glyphicon glyphicon-book' style='color:green'></span>
            </button></td>";
          echo "</tr>";
        }
    ?>

