<?php

    include 'conexion_be.php'; //Incluyo archivo y creo el acceso a la variable conexion


    $nombre_completo = $_POST['nombre_completo']; //Obtener valores de  name ='nombre_completo'
    $email = $_POST['email'];
    $username = $_POST['username'];
    $edad = $_POST['edad'];
    $contrasenia = $_POST['contrasenia'];
    $pregunta = $_POST['opciones'];
    $respuesta = $_POST['respuesta'];



    $query = "INSERT INTO usuarios(nombre_completo, email, username, edad, contrasenia, pregunta_seguridad, respuesta) VALUES ('$nombre_completo', '$email', '$username', '$edad', '$contrasenia', '$pregunta', '$respuesta')";

    
    //Verificar que el correo no se repita en la DB.
    /*
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email='$email'");

    if(mysqli_num_rows($verificar_correo) > 0){
        echo '
            <script>
                alert("Este correo ya está registrado, intentelo con un nuevo correo.");
                window.location = "../index.php";
            </script>
        ';
        exit();
    }
    */

     //Verificar que el nombre de usuario no se repita en la DB.
     $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE username='$username' ");

     if(mysqli_num_rows($verificar_usuario) > 0){
         echo '
             <script>
                 alert("Este nombre de usuario ya está registrado, intentelo nuevamente con un nuevo usuario.");
                 window.location = "../index.php";
             </script>
         ';
         exit();
     }

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
            <script>
                alert("Usuario almacenado exitosamente.");
                window.location = "../index.php";
            </script>
        ';
    }else{
        echo '
            <script>
                alert("Intentalo de nuevo, el registro no se pudo completar exitosamente.");
                window.location = "../index.php";
            </script>
        ';
    }


    // mysqli_close($conexion); 
?>