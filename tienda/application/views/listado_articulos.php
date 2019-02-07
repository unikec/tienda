<?php
/* foreach ($productos -> result() as $row) {
  echo $row->imagen.'<br>';
  }
 */
?>
    <h2><?php $h2Inicial ?></h2>

    <div class="row col-md-12">
       
                            
                    <?php foreach ($productos as $row) : ?>
                    <table class="table-borderless col-md-3">
                        
                        <tr><td><a href="<?= site_url() . '/productos/mostrarDetalle/' . $row->producto_id ?>"><img src="<?= base_url() . '/img/' . $row->imagen ?>" alt="" class="img-fluid" height="100" width="100"></a></td></tr>
                        <tr><td> <?= $row->nombre ?></td></tr>
                        <tr><td><?= $row->precio ?></td></tr>
                        <tr><td><button>Al carrito</button ></td></tr>
                       
                     </table>
                    <?php endforeach; ?>   

                
            
        </div>

        </body>

        </html>
