<?php
include 'header40T3.php';



echo "El nombre es ". $_GET["nombre"]."<br>";
echo "El nombre es ". urldecode($_GET["nombre"])."<br>";

echo "La edad es ".$_GET["edad"];

include 'footer40T3.php';
?>