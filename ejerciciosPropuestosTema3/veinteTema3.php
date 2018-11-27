
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Ejercicio veinte Tema 3</title>
</head>
<body>
<?php
function Min20($valores) {
     $elMenor=$valores[0];
    for ($i = 0; $i < count($valores); $i++) {
      //  $elMenor=$valores[0];
        if($elMenor>=($valores[$i])){
            $elMenor=$valores[$i];
        }
    }
    return $elMenor;
}
function Max20($valores) {
    $elMayor=$valores[0];
    for ($i = 0; $i < count($valores); $i++) {
        
        if($elMayor<=$valores[$i]){
            $elMayor=$valores[$i];
        }
    }
    return $elMayor;
}

function MaxPalabras($palabras) {//strlen() sirve para conocer la longitud de un string
    $laMasLarga = $palabras[0];
    for ($i = 0; $i < count($palabras); $i++) {
        if(strlen($laMasLarga)<=strlen($palabras[$i])){
            $laMasLarga = $palabras[$i];
        }
    }return  $laMasLarga;
}

?>
<h1>Trabajando Arrays 20</h1>
	<p>Crea la función Max(array) que nos devolverá el valor máximo de un array. Realiza una
página que pruebe dicha función.
	
	<p>

<?php
$numeros=[5,56,12,63,458,123,333,1000,1,89];
$palabras=["pala", "piña","camello","murcielago","feo"];
$varios=[1,"pelota",3,"azul"];

echo " El numero más alto es ".Max20($numeros)." . Mi propia versión de Max(), llamada Max20()<br>";
echo " El numero más pequeño es ".Min20($numeros)." . Mi propia versión de Min(), llamada Min20()<br>";
echo " El numero más alto es ".Max($numeros)." con la función Max() propia de PHP <br>"; 
echo " La palabra mas larga es: ".MaxPalabras($palabras)."<br>";//la función Max()de php no funciona con palabras
echo "Prueba Max() con un array con distintos tipos: ".Max($varios)."<br>"; //ignora los string
?>



</body>
</html>