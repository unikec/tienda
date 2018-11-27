<?php 
function EsBisiesto($año){
    
    if (($año%4==0)&&($año%100) || ($año%400==0)) {
        return true;
    }
}

function DiasMes($num_mes,$año){
    $num=0;
    switch ($num_mes) {
        case 1: $num=31; break;
        case 2: $num=(esBisiesto($año))?29:28; break;//controlar si es año bisiesto
        case 3: $num=31; break;
        case 4: $num=30; break;
        case 5: $num=31; break;
        case 6: $num=30; break;
        case 7: $num=31; break;
        case 8: $num=31; break;
        case 9: $num=30; break;
        case 10: $num=31; break;
        case 11: $num=30; break;
        case 12: $num=31; break;
    }
    return $num;//devuelve el numero de días que tiene el mes
}

function NombreMes($numMes)
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
}

function NombreDia($d){
    $dNombre="";
    switch ($d) {
        case 0: $dNombre="Domingo";break;
        case 1: $dNombre="Lunes";break;
        case 2: $dNombre="Martes";break;
        case 3: $dNombre="Miércoles";break;
        case 4: $dNombre="Jueves";break;
        case 5: $dNombre="Viernes";break;
        case 6: $dNombre="Sábado";break;
        
    }return $dNombre;
}
function imprimeMes11($mes,$ñ){ //necesito el mes y el año
    echo "Mes: ". NombreMes($mes)."<br>";
    $dias=DiasMes($mes, $ñ);//devuelve el numero de días que tiene el mes
    for ($i = 1; $i <= $dias; $i++) {
        echo NombreMes($mes)." / ".$ñ." / ".$i.", ";
    }
    echo "<br>";
}

function imprimeMes($mes,$ñ){ //necesito el mes y el año
    echo "Mes: ". NombreMes($mes)."<br>";
    $dias=DiasMes($mes, $ñ);//devuelve el numero de días que tiene el mes
    for ($i = 1; $i <= $dias; $i++) {
        echo $i.", ".$mes.", ".$ñ."<br>";
    }
}
function imprimeAños11($ini, $fin){
    for ($y = $ini; $y < $fin; $y++) { //desde el año que comienza hasta el que termina
        echo "<h2>Año ". $y."</h2>"; //Cartel para aclarar cuando empieza nuevo año
        for ($m = 1; $m <=12;$m++) { //bucle para los 12 meses
            imprimeMes11($m,$y);
        }
        echo "<br>"; //salto para cuando termina el año
    }
}//end function imprimeAños

function imprimeAños($ini, $fin){
    for ($y = $ini; $y < $fin; $y++) { //desde el año que comienza hasta el que termina
        echo "<h2>Año ". $y."</h2>"; //Cartel para aclarar cuando empieza nuevo año
        for ($m = 1; $m <=12;$m++) { //bucle para los 12 meses
            imprimeMes($m,$y);
        }
        echo "<br>"; //salto para cuando termina el año
    }
}//end function imprimeAños

?>
