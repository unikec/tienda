<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Ejercicio once Tema 3</title>
</head>
<body>
<?php
include 'funcionesFechas.php';

/*function NombreMes($numMes)
{
    $mesLetra = "";
    switch ($numMes) {
        case 1:
            $mesLetra = "Enero";
            break;
        case 2:
            $mesLetra = "Febrero";
            break;
        case 3:
            $mesLetra = "Marzo";
            break;
        case 4:
            $mesLetra = "Abril";
            break;
        case 5:
            $mesLetra = "Mayo";
            break;
        case 6:
            $mesLetra = "Junio";
            break;
        case 7:
            $mesLetra = "Julio";
            break;
        case 8:
            $mesLetra = "Agosto";
            break;
        case 9:
            $mesLetra = "Septiembre";
            break;
        case 10:
            $mesLetra = "Octubre";
            break;
        case 11:
            $mesLetra = "Noviembre";
            break;
        case 12:
            $mesLetra = "Diciembre";
            break;
    }
    return $mesLetra; // devuelve el nombre del mes en función de su numero
}*/

?>

<h1>Fechas</h1>
	<p>Crea la función NombreMes(num_mes) que devolverá una cadena que será
		el nombre de mes que corresponde al parámetro. Modifica el ejercicio
		anterior para que en cada línea aparezca el nombre de més y el año y a
		continuación solo aparezca el número de día.<p>
<?php
$año=1999;
$añoTope=2012;
imprimeAños11($año, $añoTope)
?>
</body>
</html>
