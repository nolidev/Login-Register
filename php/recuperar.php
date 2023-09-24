<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST["correo"];
    $respuestaUsuario = $_POST["respuesta_seguridad"];



    if ($respuestaUsuario === $respuestaSeguridadAlmacenada) {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nuevaContraseña = $_POST["nueva_contraseña"];
            // Actualizar la contraseña en la base de datos
            // ...

            echo "Contraseña restablecida con éxito. <a href='login_usuario_be.php'>Iniciar sesión</a>";
        } else {

            ?>
            <!DOCTYPE html>
            <html>
            <head>
                <title>Restablecer Contraseña</title>
            </head>
            <body>
                <h2>Restablecer Contraseña</h2>
                <form action="" method="post">
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
?>
