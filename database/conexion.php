<?php

$host = "127.0.0.1";
$user = "root";
$password = "";
$dbname = "aplicacion_lenguajes";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

$conexion = "Conexión exitosa a la base de datos MySQL";
