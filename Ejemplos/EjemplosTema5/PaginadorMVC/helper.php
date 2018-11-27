
<?php //Sólo mostramos los enlaces a páginas si existen registros a mostrar
function paginacion($totalregistros, $regsxpag, $numpaginas, $pagina) 
 { 
  if($totalregistros>=1):  
    ?>
    <nav aria-label="Page navigation example" class="text-center">
      <ul class="pagination">    
        <?php 
        if ($pagina > $numpaginas && $numpaginas > 0) { // Si introduzco una página mayor que el total de páginas, voy a la última página
            header("location:index.php?pagina=$numpaginas&regsxpag=$regsxpag"); }
	if ($pagina < 1 && $numpaginas > 0){ // Si introduzco una página menor que 1, redirigimos a la primera página
            header("location: index.php?pagina=1&regsxpag=$regsxpag");}
        //Controlamos que no se introduzcan valores indebidos por la URL    
        if($regsxpag!=2 && $regsxpag!=4 && $regsxpag!=8 && $regsxpag!=10){ $regsxpag=4;}    
        //Comprobamos si estamos en la primera página. Si es así, deshabilitamos el botón 'anterior'
        if($pagina==1): ?>
          <li class="page-item disabled"><a class="page-link" href="#">&laquo;</a></li>
        <?php else: ?>
          <li class="page-item"><a class="page-link" href="index.php?pagina=<?php echo $pagina-1; ?>&regsxpag=<?= $regsxpag ?>"> &laquo;</a></li>
        <?php  
        endif;
        //Mostramos como activos el botón de la página actual
         for($i=1;$i<=$numpaginas;$i++){
            if($pagina==$i){
              echo '<li class="page-item active"> 
                <a class="page-link" href="index.php?pagina=' . $i . '&regsxpag=' . $regsxpag . '">'. $i .'</a></li>';
             }else {
              echo '<li class="page-item"> 
                <a class="page-link" href="index.php?pagina=' . $i . '&regsxpag=' . $regsxpag . '">'. $i .'</a></li>';
            }
          }
        //Comprobamos si estamos en la última página. Si es así, deshabilitamos el botón 'siguiente'
        if($pagina==$numpaginas): ?>  
           <li class="page-item disabled"><a class="page-link" href="#">&raquo;</a></li>
        <?php else: ?>
           <li class="page-item"><a class="page-link" href="index.php?pagina=<?php echo $pagina+1; ?>&regsxpag=<?= $regsxpag ?>"> &raquo; </a></li>
        <?php endif; ?>    
      </ul>         
    </nav>
    <?php endif;  //if($totalregistros>=1):
   }?>

