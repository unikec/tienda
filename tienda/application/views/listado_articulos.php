<?php
/* foreach ($productos -> result() as $row) {
echo $row->imagen.'<br>';
}
 */
?>
<div class="container">
	<h2>Productos destacados</h2>
	
    <div class="row">
        <div class="col-md-6">
            <table class="table table-borderless">
		<tbody>
            <tr>
	<?php foreach ($productos->result() as $row) :?>
          <td><img src="<?=base_url().'/img/' . $row->imagen ?>" alt="" class="img-fluid" height="100" width="100"></td></tr>
          <tr><td> <?= $row->nombre ?></td></tr>
          <tr><td><?= $row->precio ?></td></tr>
          <tr><td><button>Al carrito</button ></td></tr></div>
        <?php endforeach;?>   

      </div>
		</tbody>
	</table>
</div>

</body>

</html>
