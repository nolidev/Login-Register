<?php
include 'php/conexion_be.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST["email"];
    $respuestaUsuario = $_POST["respuesta"];

    // Obtener la respuesta de seguridad almacenada desde la base de datos
    $respuestaSeguridadAlmacenada = obtenerRespuestaSeguridadDesdeBD($correo);

    if ($respuestaUsuario === $respuestaSeguridadAlmacenada) {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nuevaContraseña = $_POST["respuesta"];

            // Actualizar la contraseña en la base de datos
            actualizarContraseñaEnBD($correo, $nuevaContraseña);

            echo "Contraseña restablecida con éxito. <a href='login_usuario_be.php'>Iniciar sesión</a>";
        } else {
            // Mostrar el formulario para restablecer la contraseña
            ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Restablecer Contraseña</title>
                <!-- Agrega tus enlaces CSS y otros encabezados aquí -->
            </head>
            <body>
                <h2>Restablecer Contraseña</h2>
                <form action="recuperar.php" method="post" id="formulario_recupero">
                    <label for="nueva_contraseña">Nueva Contraseña:</label>
                    <input type="password" name="nueva_contraseña" required>
                    <button type="submit">Guardar Contraseña</button>
                </form>
            </body>
            </html>
            <?php
        }
    } else {
        echo "La respuesta de seguridad proporcionada no coincide.";
    }
}

function obtenerRespuestaSeguridadDesdeBD($correo) {
    $conexion = obtenerConexionBD();

    // Consulta preparada para prevenir inyecciones SQL
    $stmt = $conexion->prepare("SELECT respuesta FROM usuarios WHERE correo = ?");
    $stmt->bind_param("s", $correo);
    $stmt->execute();
    $stmt->bind_result($respuesta);
    $stmt->fetch();
    $stmt->close();

    $conexion->close();

    return $respuesta;
}

// Actualizar la contraseña en la base de datos
function actualizarContraseñaEnBD($correo, $nuevaContraseña) {
    $conexion = obtenerConexionBD();

    // Consulta preparada para prevenir inyecciones SQL
    $stmt = $conexion->prepare("UPDATE usuarios SET contrasenia = ? WHERE correo = ?");
    $stmt->bind_param("ss", $nuevaContraseña, $correo);
    $stmt->execute();
    $stmt->close();

    $conexion->close();

    echo "Contraseña actualizada en la base de datos para el correo: $correo";
}
?>

