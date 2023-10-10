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
    
    // Seleccionar la base de datos
    $conexion->select_db($dbname);

    // Crear la tabla si no existe
    $sql = "CREATE TABLE IF NOT EXISTS usuarios (
        id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
        nombre_completo VARCHAR(50) NOT NULL,
        username VARCHAR(50) NOT NULL,
        email VARCHAR(50) NOT NULL,
        contrasenia VARCHAR(50) NOT NULL,
        pregunta_seguridad VARCHAR(50) NOT NULL,
        respuesta VARCHAR(50) NOT NULL
    )";
    if ($conexion->query($sql) === TRUE) {
        
        // Verificar si los datos precargados ya se han insertado
        $sql_check_data = "SELECT COUNT(*) as count FROM usuarios";
        $result = $conexion->query($sql_check_data);
        $row = $result->fetch_assoc();
        if ($row['count'] == 0) {
            // Insertar datos precargados solo si la tabla está vacía
            $sql = "INSERT INTO usuarios (nombre_completo, username, email, contrasenia, pregunta_seguridad, respuesta) VALUES
                ('Nombre1 Apellido1', 'usuario1', 'usuario1@example.com', 'contrasenia1', 'Pregunta1', 'Respuesta1'),
                ('Nombre2 Apellido2', 'usuario2', 'usuario2@example.com', 'contrasenia2', 'Pregunta2', 'Respuesta2'),
                ('Nombre3 Apellido3', 'usuario3', 'usuario3@example.com', 'contrasenia3', 'Pregunta3', 'Respuesta3')";
            if ($conexion->query($sql) === TRUE) {
                echo "Datos precargados insertados con éxito.";
            } else {
                echo "Error al insertar datos precargados: " . $conexion->error . "\n";
            }
        } else {
            echo "Los datos precargados ya existen en la tabla.";
        }
    } else {
        echo "Error al crear la tabla: " . $conexion->error . "\n";
    }
} else {
    echo "Error al crear la base de datos: " . $conexion->error . "\n";
}

?>