<?php

    include 'conexion_be.php';

    $usuario = $_POST['username'];
    $contrasenia = $_POST['contrasenia'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE username='$usuario' and contrasenia='$contrasenia'");

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
        alert("El usuario o la contraseña no son validos.");
        window.location = "../index.php";
        </script>
        ';
        exit;
    }

?>

