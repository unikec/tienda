
    <?php
        $codigo = $_POST["codigo"];
        $conexion = mysqli_connect("localhost","root","","instituto");
        $consulta = "SELECT * FROM alumnos where codigo=".$codigo;
        $resultado = mysqli_query($conexion,$consulta);

        echo "<h4 class='text-center'>Editar</h4>
         <form role='form'  method='POST' onsubmit='realizarEdit(".$codigo."); return false'>";


        while($fila = mysqli_fetch_array($resultado)){
              echo"<div class='form-group'>
                <label for='nombre'>Nombre</label>
                <input type='text' class='form-control' id='nombreEdit' name='nombreEdit' value='".$fila["nombre"]."'>
              </div>
              <div class='form-group'>
                <label for='direccion'>Direccion</label>
                <input type='text' class='form-control' id='direccionEdit' name='direccionEdit' value='".$fila["direccion"]."'>
              </div>
              <div class='form-group'>
                <label for='provincia'>Provincia</label>
                <input type='text' class='form-control' id='provinciaEdit' name='provinciaEdit' value='".$fila["provincia"]."'>
              </div>
              <div class='form-group'>
                <label for='poblacion'>Poblacion</label>
                <input type='text' class='form-control' id='poblacionEdit' name='poblacionEdit' value='".$fila["poblacion"]."'>
              </div>
              <div class='form-group'>
                <label for='telefono'>Telefono</label>
                <input type='text' class='form-control' id='telefonoEdit'  name='telefonoEdit' value='".$fila["telefono"]."'>
              </div>

              <button type='submit' class='btn btn-primary btn-block'>Editar</button>
            </form>
          </div> ";
        }
    ?>

