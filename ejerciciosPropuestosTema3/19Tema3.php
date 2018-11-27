<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Ejercicio diecinueve Tema 3</title>
</head>
<body>
<?php

function VerificaDNI($dni)
{
    $parteLetra = substr($dni, - 1); // me devuelve la ultima posición
    $partrNum = substr($dni, 0, - 1); // recorta desde la posición 0 a la penultima las dos hacen lo mismo
                                      // $partrNum=substr($dni, 0,8); //recorta desde la posición 0 a la penultima

    $numero = (int) ($partrNum); //El numero estaba en String, lo paso a int
   
    $codigo = ['T','R','W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E'];
    if (($numero > 0) && ($numero <= 99999999)) {

        $letra = $numero % 23;
        if ($codigo[$letra]==$parteLetra) {
           echo "Es válido"; 
        }
        
    } else {
        echo "Hay un herror en el dato introducido";
    }
}
function esValidoDNI($dni){
    $parteLetra = substr($dni, - 1); 
    $partrNum = substr($dni, 0, - 1);     
    $numero = (int) ($partrNum);
    
    $codigo = ['T','R','W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E'];
    
    if (($numero > 0) && ($numero <= 99999999)) {
        $letra = $numero % 23;
        if ($codigo[$letra]==$parteLetra) {
            return true;
        }
        
    } else {
            return false;
    }
}

?>
<h1>Trabajando Arrays</h1>
	<p>Realizar una página que verifique si un dni/nif es correcto. (solo
		hace falta para los que tienen el formato NúmeroLetra).
	
	
	<p>

<?php
$dni = "48933409N";
VerificaDNI($dni);

?>



</body>
</html>
