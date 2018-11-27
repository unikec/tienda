<?php
include 'header38T3.php';

//$dir_subida = 'descargas/';//si lo quisiera guardar en una sola carpeta todas las descargas

$dir_subida = '';//lo almaceno en la misma carpeta donde estoy 38subirArchivoTema3
$fichero_subido = $dir_subida . basename($_FILES['fichero_usuario']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['fichero_usuario']['tmp_name'], $fichero_subido)) {
    echo "El fichero es válido y se subió con éxito.\n";
} else {
    echo "¡Posible ataque de subida de ficheros!\n";
}

//echo 'Más información de depuración:';
//print_r($_FILES);
//echo "esto es lo que sale con ficheroSubido ". $fichero_subido;
//print "</pre>";

//cuidado con las comillas que la lias y mucho

echo "<a href='". $fichero_subido."'>Enlace al fichero subido</a>";

include 'footer38T3.php';
?>