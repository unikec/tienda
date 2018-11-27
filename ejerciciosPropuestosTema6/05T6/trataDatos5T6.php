<?php
include 'pillaDatos5T6.php';

foreach ($comunidades as $comunidad) {
    echo "<tr><td rowspan='" . count($comunidad['provincias']) . "'>" . $comunidad['nombre'] . "</td>";
    /*
     * con count conozco el numero de provincias de una comunidad
     * y se lo paso a la etiqueta html rowspan para la celda con el nombre de la comunidad
     * sean tan alto como celdas de provincias tiene
     */

    foreach ($comunidad['provincias'] as $provincia) {

        echo "<td>$provincia</td></tr>";
        
    } // end foreachProvincias
    echo "</td>";
} // end foreachCCCAA
echo "</tr></tbody></table>";
