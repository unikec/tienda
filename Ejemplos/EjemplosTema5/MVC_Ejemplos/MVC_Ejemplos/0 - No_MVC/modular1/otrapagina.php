<?php
/*
 * Primera aproximación de creación de una web modular.
 * Cada controlador incluye las partes que le faltan para crear una página
 * Hay que repetir los includes en todas las páginas
 */
define ('TEMPLATE_PATH', __DIR__."/plantilla/");
?>
<?php include(TEMPLATE_PATH."top_page.php"); ?>
<?php include(TEMPLATE_PATH."header.php"); ?>
<div id="contenido"> 
    <h1>Otra página</h1>
    <p>Texto de la segunda página</p> 
    <p><a href="otrapagina.php">Otra página</a></p>
</div>
<?php include(TEMPLATE_PATH."footer.php"); ?>
