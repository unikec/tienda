<?php 
include 'header40T3.php';
if ($errores){
    // <!-- compruebo que es la primera llamada -->
    
    foreach($errores as $textoError) {
        echo "<p>".$textoError."</p>";
    }
    
}

?> 


 <a href="RecibeInfoEnlace40T3.php?nombre=<?= urlencode("Ana & Rocío") ?>&edad=<?= urlencode("19") ?>">Paso variables Nombre y Edad a la página destino.php</a> 

<!--<a href="RecibeInfoEnlace40T3.php?nombre=Ana & Rocío&edad=19">Paso variables Nombre y Edad a la página destino.php</a>-->
<?php

include 'footer40T3.php';
?>