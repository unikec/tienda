<?php
include 'header38T3.php';

if ($errores){
    // <!-- compruebo que es la primera llamada -->
    
    foreach($errores as $textoError) {
        echo "<p>".$textoError."</p>";
    }
    
}
?>
<h2>Subir archivos</h2>

<div class="col-sm-10 mx-auto" class="form-group">

        <!--El tipo de codificación de datos, enctype, DEBE especificarse como sigue -->

<form enctype="multipart/form-data" action="" method="POST">

        <!-- MAX_FILE_SIZE debe preceder al campo de entrada del fichero -->
<input type="hidden" name="MAX_FILE_SIZE" value="30000" />

        <!-- El nombre del elemento de entrada determina el nombre en el array $_FILES -->
        
Enviar este fichero: <input name="fichero_usuario" type="file" />
<input type="submit" value="Enviar fichero" />
</form>

<?php 
include 'footer38T3.php';
?>
