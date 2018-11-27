<?php
/**
 * VISTA QUE MUESTA LA LISTA DE TAREAS.
 * El controlador será el que nos proporcine en la variable $tareas
 * que contiene las tareas a mostrar
 */
?>
<h1>Ofertas de empleo</h1>
<table  class="table table-striped">
	<tr>
		<th>Descripción</th>
		<th>Provincia</th>
		<th>Estado</th>
		<th>Fecha_Comunicacion</th>
		<th>Psicólogo</th>
		<th>Candidato</th>
		<th></th>
	</tr>
<?php foreach($ofertas as $oferta) : ?>
    <tr>

		<td><?=$oferta['descripcion']?></td>
		<td><?=$oferta['provincia']?></td>
		<td><?=$oferta['estado']?></td>
		<td><?=$oferta['fechaFin']?></td>
		<td><?=$oferta['psicologo']?></td>
		<td><?=$oferta['candidato']?></td>

		<td><a href="?ctrl=detalleOfertaControl&id=<?=$oferta['id']?>">[+info]</a>
			<a href="?ctrl=modificarOfertaControl&id=<?=$oferta['id']?>">[Modificar]</a>
			<a href="?ctrl=borrarOfertaControl&id=<?=$oferta['id']?>">[Borrar]</a></td>
	</tr>
<?php endforeach; ?>
</table>
