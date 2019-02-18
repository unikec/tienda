<h2><?=$h2Inicial?></h2>

    <div class="row col-md-12">
       
         <?php foreach ($productos as $producto) : ?>
            <table class="table-borderless col-md-3">
                <tr><td><a href="<?= site_url() . '/Productos/mostrarDetalle/' . $producto->producto_id ?>"><img src="<?= base_url() . '/img/' . $producto->imagen ?>" alt="" class="img-fluid" height="100" width="100"></a></td></tr>
                <tr><td> <?= $producto->nombre ?></td></tr>
                <tr><td>Precio: <?= $producto->precio ?> €</td></tr>
                <tr><td><a class="btn btn-info" href="<?=site_url().'/productos/addProducto/'.$producto->producto_id?>">Al carrito</a ></td></tr>
                       
            </table>
        <?php endforeach; ?>          
            
     </div>




