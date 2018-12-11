<?php
/**
 * Vista para ver en detalle la información contenida en la base de datos sobre una oferta en concreto
 * Es la información ampliada del anticipo que se muestra en la tabla de listaOfertas*/

?>
<h1>Informe Oferta</h1>
<?php if($_SESSION['admin']==1):?>
<a href="?ctrl=modificarOfertaControl&id=<?=$oferta['id']?>"><button class="btn btn-info float-right mb-3">Modificar</button></a>
<?php endif ?>
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













