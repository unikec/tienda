
<?php

$conex=new mysqli('localhost', 'root', '', 'ejercicios');

if (! $conex) {
    die("<p>ERROR EN la conexión</p>");
}

//printf("Conjunto de caracteres inicial: %s\n", $conex->character_set_name());
$conex->set_charset("utf8");
