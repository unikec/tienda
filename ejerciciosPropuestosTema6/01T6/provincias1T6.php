<?php
include "conexion.php";

// Leemos CCAA
$rsProv=SelectQuery($conex, 'select * from provincias');

   
    $provincias=[];
    while ($regProv=mysqli_fetch_assoc($rsProv)) {
        $provincias[]=$regProv['provincia'];
    }
    
  foreach ($provincias as $idx =>$nombreP)
  echo $nombreP."<br>";

/*
/**
 * Función que podemos reutilizar para no tener que ensuciar el código con
 * comprobaciones
 * @param unknown $conex
 * @param unknown $sql
 */
function SelectQuery($conex, $sql) {
    
    $rs = mysqli_query ($conex, $sql );
    
    /*
     * Después de cada consulta podemos utilizar las funciones msqli_errno y mysqli_error
     * para obtener información sobre el error
     */
    if (! $rs) {
        echo "<p>Error en sentencia SQL:</p><pre>$sql</pre>";
        echo "<p>Error Nº: ". mysqli_errno($conex)."</p>";
        echo "<p>Error Desc: ".mysqli_error($conex)."</p>";
        die('<p><strong>Finalizado programa</strong></p>');
    }
    
    return $rs;
}