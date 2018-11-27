<?php

$miNUM= $_POST['temaTres26'];
function MultiPost($n){
    for ($i = 1; $i <= 10; $i++) {
        echo $n." x ".$i." = ".$n*$i."<br>";
    }
}
echo "<h1>Tabla del ".$miNUM."</h1>";
MultiPost($miNUM);

?>