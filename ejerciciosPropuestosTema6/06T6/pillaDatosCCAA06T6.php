<?php
include "conexion06T6.php";

// Leemos CCAA
$CCAA=$conex->query("Select * from comunidades");


echo "<select name='comunidades'>";
while ($resCCAA= $CCAA->fetch_assoc()) {
   echo "<option>".$resCCAA['comunidad']."</option>";
}
echo "</select>";

