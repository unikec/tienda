<?php
/*
 * Segunda aproximación de creación de una web modular.
 * La aplicación tiene un único punto de entrada. En función del parámetro 
 * GET "page" cargamos el cuerpo de la página.
 * Hay que repetir los includes en todas las páginas
 */
define ('TEMPLATE_PATH', __DIR__."/plantilla/");
define ('VISTAS', __DIR__.'/vistas/');

if (!isset($_GET['page'])) {
    $page_cuerpo=VISTAS."inicio.php";
} else {
    $page_cuerpo=VISTAS.$_GET['page'].".php";
}
// Miramos si existe la página que queremos cargar
if (!file_exists($page_cuerpo))
{
    $page_cuerpo=VISTAS.'error404.php';
}

    include(TEMPLATE_PATH."top_page.php"); 
?>
<div id="wrapper">      
    <div id="header">       
        <?php include(TEMPLATE_PATH."header.php"); ?>        
    </div>  
    <div id="menu" style="float:left; width:10em; border:1px solid #eee; background:#ccffcc; margin:1em .2em; border-radius: 5px">
            <?php include(TEMPLATE_PATH."menu.php"); ?>
        </div>  
    <div id="contenido">
        <?php include($page_cuerpo); ?>        
        <br style="clear:both;" />
    </div>
    <div id="footer">          
        <?php include(TEMPLATE_PATH."footer.php"); ?>        
    </div>
</div>
<?php include(TEMPLATE_PATH."bottom_page.php"); ?>
