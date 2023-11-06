<?php
include 'conexion_be.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener datos del formulario
    $email = $_POST['email'];
    $respuesta_seguridad = $_POST['respuesta_seguridad'];
    $nuevo_user = $_POST['nuevo_usuario'];

    // Buscar el usuario por email y respuesta de seguridad
    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND respuesta = '$respuesta_seguridad'";
    $result = $conexion->query($sql);

    if ($result->num_rows > 0) {
        // Actualizar la contraseña en la base de datos
        $row = $result->fetch_assoc();
        $id_usuario = $row['id'];
        $sql_update = "UPDATE usuarios SET username = '$nuevo_user' WHERE id = $id_usuario";
        if ($conexion->query($sql_update) === TRUE) {
            echo '
                <script>
                window.location = "cambioUsuarioExitoso.php";
                </script>
                ';
                exit;
        } else {
            echo "Error al actualizar username: " . $conexion->error;
        }
    } else {
        echo "Email no registrado o respuesta de seguridad incorrecta.";
    }
} else {
    echo "Acceso no autorizado.";
}
?>
