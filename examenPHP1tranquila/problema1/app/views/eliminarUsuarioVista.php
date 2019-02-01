<?php
/**
 * Vista de confirmación de que realmente quiere borrar los datos del usuario seleccionado
 */
?>
<h3 class="text-center">¿Realmente desea borrar el usuario correspondiente a los siguiente datos?</h3>

<form  method="post">

<div class="text-center">
  <button type="submit" class="btn btn-outline-warning btn-l mr-5 m-5"  name="pregunta" value ="si">SI</button>
  <button type="submit" class="btn btn-outline-warning btn-s ml-5 my-5" name="pregunta" value ="no">NO</button>
</div>
</form>



<table class="table table-bordered">
                
                <tr><td>id</td>
                    <td><?=$usuario['id']?></td>
                </tr>
                <tr><td>Usuario o Nick</td>
                     <td><?=$usuario['usuario']?></td>
                </tr>
                <tr><td>Nombre</td>
                    <td><?=$usuario['nombre']?></td>
                </tr>
                <tr><td>Tipo de usuario</td>
                    <td><?=$usuario['admin']?></td>
                </tr>
                <tr><td>Password</td>
                    <td><?=$usuario['password']?></td>
                </tr>
                
            </table> 