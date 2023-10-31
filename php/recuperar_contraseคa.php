<?php
include 'conexion_be.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener datos del formulario
    $email = $_POST['email'];
    $respuesta_seguridad = $_POST['respuesta_seguridad'];
    $nueva_contraseña = $_POST['nueva_contraseña'];

    // Buscar el usuario por email y respuesta de seguridad
    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND respuesta = '$respuesta_seguridad'";
    $result = $conexion->query($sql);

    if ($result->num_rows > 0) {
        // Actualizar la contraseña en la base de datos
        $row = $result->fetch_assoc();
        $id_usuario = $row['id'];
        $sql_update = "UPDATE usuarios SET contrasenia = '$nueva_contraseña' WHERE id = $id_usuario";
        if ($conexion->query($sql_update) === TRUE) {

            echo '
                <script>
                window.location = "cambioContraseñaExitoso.php";
                </script>
                ';
                exit;
        } else {
            echo "Error al actualizar la contraseña: " . $conexion->error;
        }
    } else {
        echo "Usuario no encontrado o respuesta de seguridad incorrecta.";
    }
} else {
    echo "Acceso no autorizado.";
}
?>
