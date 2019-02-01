<?php
/**
 * VISTA QUE MUESTRA LA LISTA DE USUARIOS.
 * El controlador será el que nos proporcine en la variable $pagina, $paginas y el array de $ofertas
 * $ofertas que contiene las ofertas a mostrar
 * $paginas es el total de paginas necesarias para poder mostrar todas las ofertas, puesto por defecto hemos indicado que se muestren 5
 * $pagina es la información de la pagina que está activa
 */
?>
<h1>Usuarios de Job&Carajo</h1>
<?php if($_SESSION['admin']):?>
<a href="?ctrl=nuevoUsuarioControl"><button class="btn btn-info float-right mb-3">Nuevo Usuario</button></a>
<?php endif ?>
<table  class="table table-striped">
	<tr>
        <th>Código</th>
		<th>Alias</th>
		<th>Nombre Completo</th>
		<th>Tipo Usuario</th>
		<th>Contraseña</th>

		<th></th>
	</tr>

<?php foreach($usuarios as $usuario) : ?>
    <tr>
        <td><?=$usuario['id']?></td>
		<td><?=$usuario['usuario']?></td>
		<td><?=$usuario['nombre']?></td>
		<td><?=$usuario['admin']==1 ? 'administrador':'psicologo'?></td>
		<td><?=$usuario['password']?></td>
		<td>
			<a href="?ctrl=modificarUsuarioControl&id=<?=$usuario['id']?>"><button class="btn btn-info"><i class="far fa-edit"></i></button></a>
			<?php if($_SESSION['admin']):?>
			<a href="?ctrl=eliminarUsuarioControl&id=<?=$usuario['id']?>" class="btn btn-info  <?= $_SESSION['admin']==0 ? 'disabled' : ''?> role="button" aria-pressed="true"><i class="fas fa-trash-alt"></i></a>
		    <?php endif ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
