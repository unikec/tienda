<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prueba";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//respetar acentos
mysqli_set_charset($conn, "utf8");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//echo "<p>Conexion"; echo "<pre>"; var_dump($conn); echo "</pre>";
?>