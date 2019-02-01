<?php
$conex=new mysqli('localhost', 'root', '', 'alumnos');

if (! $conex) {
    die("<p>ERROR EN la conexión</p>");
}

$conex->set_charset("utf8");
