<?php
//$conex=new mysqli('localhost', 'cristinagarzon', 'marisma2018', 'cristinagarzon');
$conex=new mysqli('localhost', 'root', '', 'examen');


if (! $conex) {
    die("<p>ERROR EN la conexión</p>");
}

$conex->set_charset("utf8");
