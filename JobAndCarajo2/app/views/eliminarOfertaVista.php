<?php 
/**Esta vista nos da la oportunidad de volver a rebisar los datos que queremos borrar
a mismo tiempo que nos pide la confirmación de que realmente se quiere borrar la oferta indicada o 
bien solo es que hemos pulsado el boton de enlace al borrado por error*/
?>
<h3 class="text-center">¿Realmente desea borrar la oferta correspondiente a los siguiente datos?</h3>

<form  method="post">

<div class="text-center">
  <button type="submit" class="btn btn-outline-warning btn-l mr-5 m-5"  name="pregunta" value ="si">SI</button>
  <button type="submit" class="btn btn-outline-warning btn-s ml-5 my-5" name="pregunta" value ="no">NO</button>
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