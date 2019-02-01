<?php
/**
 * VISTA QUE MUESTRA LA LISTA DE OFERTAS.
 * El controlador será el que nos proporcine en la variable $pagina, $paginas y el array de $ofertas
 * $ofertas que contiene las ofertas a mostrar
 * $paginas es el total de paginas necesarias para poder mostrar todas las ofertas, puesto por defecto hemos indicado que se muestren 5
 * $pagina es la información de la pagina que está activa
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

		<td>
			<a href="?ctrl=detalleOfertaControl&id=<?=$oferta['id']?>"><button class="btn btn-info"><i class="fas fa-info"></i></button></a>
			<a href="?ctrl=modificarOfertaControl&id=<?=$oferta['id']?>"><button class="btn btn-info"><i class="far fa-edit"></i></button></a>
	  	<a href="?ctrl=eliminarOfertaControl&id=<?=$oferta['id']?>" class="btn btn-info  <?= $_SESSION['admin']==0 ? 'disabled' : ''?> role="button" aria-pressed="true"><i class="fas fa-trash-alt"></i></a>
		</td>
	</tr>
<?php endforeach; ?>
</table>

<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item <?= $pagina<=1 ? 'disabled' : ''?> "><a class="page-link" href="?ctrl=listarOfertasControl&pag=<?= $pagina-1?>">Anterior</a></li>
		<?php for ($i=1; $i <=$paginas ; $i++):?>
    <li class="page-item <?= $pagina==$i ? 'active' : ''?> "><a class="page-link " href="?ctrl=listarOfertasControl&pag=<?=$i?>"><?=$i?></a></li>
		<?php  endfor ?>
    <li class="page-item <?= $pagina>=$paginas ? 'disabled' : ''?>"><a class="page-link" href="?ctrl=listarOfertasControl&pag=<?=$pagina+1?>">Siguiente</a></li>
  </ul>
</nav>
