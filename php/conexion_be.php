<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "karmaland";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Crear la base de datos si no existe
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Base de datos creada exitosamente o ya existe\n";
} else {
    echo "Error al crear la base de datos: " . $conn->error . "\n";
}

// Seleccionar la base de datos
$conn->select_db($dbname);

// Crear la tabla si no existe
$sql = "CREATE TABLE IF NOT EXISTS usuarios (
        id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
        nombre VARCHAR(50) NOT NULL,
        apellido VARCHAR(50) NOT NULL,
        username VARCHAR(50) NOT NULL,
        email VARCHAR(50) NOT NULL,
        contrasenia VARCHAR(50) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    echo "Tabla usuarios creada exitosamente o ya existe\n";
} else {
    echo "Error al crear la tabla: " . $conn->error . "\n";
}

// Cerrar la conexión
$conn->close();
?>

