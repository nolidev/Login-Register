<?php

    include 'conexion_be.php';

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' and contrasena='$contrasena'");

    if(mysqli_num_rows($validar_login) > 0){
        echo '
            <script>
            window.location = "bienvenida.php";
            </script>
        ';
        exit;
    }else{
        echo '
        <script>
        alert("El correo electrónico o la contraseña no son validos.");
        window.location = "../index.html";
        </script>
        ';
        exit;
    }

?>

