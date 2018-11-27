<?php


//$dir_subida = 'descargas/';//si lo quisiera guardar en una sola carpeta todas las descargas

$dir_subida = '';//lo almaceno en la misma carpeta donde estoy 38subirArchivoTema3
$fichero_subido = $dir_subida . basename($_FILES['fichero_usuario']['name']);


if (move_uploaded_file($_FILES['fichero_usuario']['tmp_name'], $fichero_subido)) {
    ////header('Content-Type: application/octet-stream');
    header('Content-Type:'.$_FILES['fichero_usuario']['type']); //con content type le doy la cabecera al navegador para que interprete
    readfile($fichero_subido); //solo, no vale para imágenes
    EXIT;
    //echo "El fichero es válido y se subió con éxito.\n";
   
} else {
    include 'header39T3.php';
  //  echo "¡Posible ataque de subida de ficheros!\n";
    echo "<P>Fichero subido: $fichero_subido</p>";
    include 'footer39T3.php';
}

