<div class="container">

	<div class="row">
		<div class="col-md-7 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-body">
                                <?php foreach ($productos as $producto) : ?>
				<a href="<?=site_url()."/producto/mostrarCategoria/".$producto->categoria_id?>" ><span class="glyphicon glyphicon-remove"></a>
				<div class="col-md-6 col-xs-12">
					<center><img src="<?= base_url()."/img/".$producto->imagen?>" height="300px" width="300px"></center><br><br>
                                </div>
				<div class="col-md-6 col-xs-12">
				<h3><b><?=strtoupper($producto->nombre)?></b></h3><br>
					<b>Descripción:</b><br>
					<?=$producto->descripcion?><br>
					<?=$producto->anuncio?><br><br>
					<b>Stock: </b>
					
					<?php if ($producto->stock==0):
                                                echo '<a style="color:#CB4335;"><b>No hay stock</b></a>';                                            
                                            else:
						echo $producto->stock.' disponibles';
					    endif;
					?>		
				</div>
				</div>
				<div class="panel-footer">
					<a class="btn btn-success" href="<?=site_url().'/producto/añadirProducto/'.$producto->id?>"><span class="glyphicon glyphicon-shopping-cart"></span><b>&nbsp;&nbsp;Comprar</b></a>
					<div class="top-right"><h4>Precio: <b><?=$producto->precio?> €</h4></b></div>
                                        
				</div>
                            <?php endforeach; ?>  
			</div>
		</div>
	</div>
</div>