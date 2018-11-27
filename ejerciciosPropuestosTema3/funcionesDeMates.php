<?php

function muestraTablas($numtablas)
{ // siver para imprimir varias tablas de multiplicar seguidas
  // $totalTablas=$numtablas+1;
    for ($j = 1; $j <= $numtablas; $j ++) {
        // echo "<h1>Tabla del ".$j."</h1>";
        tablaDeMultiplicar($j);
        echo "<br>";
    }
}

function tablaDeMultiplicar($j)
{
    echo "<h2>Tabla del " . $j . "</h2>";
    for ($i = 1; $i <= 10; $i ++) {
        echo $j . " x " . $i . " = " . ($j * $i) . "<br>";
    }
}

function numAleatorio1al100()
{
    return rand(1, 100); // genera enteros entre los parámetros que le pases
}

function numAleatorioEnLetra()
{ // Solo hasta 10
    $x = rand(1, 10);
    switch ($x) {
        case 1:
            echo "uno";
            break;
        case 2:
            echo "dos";
            break;
        case 3:
            echo "tres";
            break;
        case 4:
            echo "cuatro";
            break;
        case 5:
            echo "cinco";
            break;
        case 6:
            echo "seis";
            break;
        case 7:
            echo "siete";
            break;
        case 8:
            echo "ocho";
            break;
        case 9:
            echo "nueve";
            break;
        case 10:
            echo "diez";
            break;
        default:
            echo "algo no va bien";
            break;
    }
}

function imprimeArrayDeUno($n,$z) // primera versión para imprimir el array de multiplos de un numero
{
    echo "<h2>Multiplos de " . $n."</h2>";
   imprimeArrayMulti($z);
}
function imprimeArrayMulti($z){
    for ($i = 1; $i < count($z); $i ++) { // la función count() cuenta los elementos del array
        if ($i % 11 == 0) {
            echo "<br>";
        } else {
            echo $z[$i] . ", "; // no se porque sale subrayado en este punto la variable ???????
        }
    }
}
function imprimeTituloDeMultiplos($n) { //si se pide los multiplos de varios numeros
    echo "<h2>Multiplos de " . $n[0];
    if (count($n) > 1) {
        echo " y " . $n[1] . "</h2>";
    }else { echo "</h2>";
        }
}

function imprimeArrayDeDos($array, $z)
{
    imprimeTituloDeMultiplos($array);
    imprimeArrayMulti($z);
}

function multiplosDeUnNumero($e)
{
    $acumulaMultiplos = array();
    for ($i = 0; $i <= 1000; $i ++) {
        if ($i % $e == 0) {
            array_push($acumulaMultiplos, $i); // array_push me almacena en la ultima posición del array
        }
    }
    return $acumulaMultiplos;
}

function multiploDeDosNumeros($e)
{
    $acumulaMultiplos = array();
    for ($i = 0; $i <= 1000; $i ++) {
        if ($i % $e[0] == 0 && $i % $e[1] == 0) {
            array_push($acumulaMultiplos, $i); // array_push me almacena en la ultima posición del array
        }
    }
    return $acumulaMultiplos;
}



function EsMultiplo($numero, $divisor) {
    return ($numero%divisor) == 0;
}
