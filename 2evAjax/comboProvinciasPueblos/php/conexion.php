<?php
$conex=new mysqli('localhost', 'root', '', 'ejercicios');

if (! $conex) {
    die("<p>ERROR EN la conexión</p>");
}

$conex->set_charset("utf8");
