<?php
/**
 * Vista para confirmar el borrado de una de las ofertas*/

?>
<h3>¿Realmente desea borrar la oferta correspondiente a los siguiente datos?</h3>

<form  method="post">
<div class='form-group'>
<button type="submit" class="mx-auto btn btn-warning btn-lg" name="pregunta" value ="si">SI</button>
<button type="submit" class="mx-auto btn btn-warning btn-lg" name="pregunta" value ="no">NO</button>
</div>
</form>



<table class="table table-bordered">
                
                <tr><td>id</td>
                    <td><?=$oferta['id']?></td>
                </tr>
                <tr><td>Descripción</td>
                     <td><?=$oferta['descripcion']?></td>
                </tr>
                <tr><td>Contacto</td>
                    <td><?=$oferta['contacto']?></td>
                </tr>
                <tr><td>Telefono</td>
                    <td><?=$oferta['telefono']?></td>
                </tr>
                <tr><td>email</td>
                    <td><?=$oferta['email']?></td>
                </tr>
                <tr><td>Dirección</td>
                    <td><?=$oferta['direccion']?></td>
                </tr>
                <tr><td>Poblacion</td>
                    <td><?=$oferta['poblacion']?></td>
                </tr>
                <tr><td>CP</td>
                    <td><?=$oferta['cp']?></td>
                </tr>
                <tr><td>Provincia</td>
                    <td><?=$oferta['provincia']?></td>
                </tr>
                <tr><td>Estado</td>
                    <td><?=$oferta['estado']?></td>
                </tr>
                <tr><td>Fecha_Creación</td>
                    <td><?=$oferta['fechaInicial']?></td>
                </tr>
                <tr><td>Fecha_Comunicacion</td>
                    <td><?=$oferta['fechaFin']?></td>
                </tr>
                <tr><td>Psicólogo</td>
                    <td><?=$oferta['psicologo']?></td>
                </tr>
                <tr><td>Candidato</td>
                    <td><?=$oferta['candidato']?></td>
                </tr>
                <tr><td>Otros datos candidato</td>
                    <td><?=$oferta['observaciones']?></td>
                </tr>
            </table> 