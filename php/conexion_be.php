<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "karmaland";

// Crear conexión
$conexion = new mysqli($servername, $username, $password);


if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Crear la base de datos si no existe
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conexion->query($sql) === TRUE) {
    echo "Base de datos creada exitosamente o ya existe\n";
} else {
    echo "Error al crear la base de datos: " . $conexion->error . "\n";
}

// Seleccionar la base de datos
$conexion->select_db($dbname);

// Crear la tabla si no existe
$sql = "CREATE TABLE IF NOT EXISTS usuarios (
        id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
        nombre_completo VARCHAR(50) NOT NULL,
        username VARCHAR(50) NOT NULL,
        email VARCHAR(50) NOT NULL,
        contrasenia VARCHAR(50) NOT NULL
)";
if ($conexion->query($sql) === TRUE) {
    echo "Tabla usuarios creada exitosamente o ya existe\n";
} else {
    echo "Error al crear la tabla: " . $conexion->error . "\n";
}


?>

