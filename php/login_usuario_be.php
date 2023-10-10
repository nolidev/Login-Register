<?php

    include 'conexion_be.php';

    $email = $_POST['email'];
    $contrasenia = $_POST['contrasenia'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email='$email' and contrasenia='$contrasenia'");

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
        window.location = "../index.php";
        </script>
        ';
        exit;
    }

?>

