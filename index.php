<?php include 'php/conexion_be.php'; ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Registro</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./assets/css/estilos.css">
    
</head>
<body>
    <main>


        <div class="contenedor__todo">

            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>Ya tenés una cuenta?</h3>
                    <p>Inicie sesión para entrar a la pagina.</p>
                    <button id="btn__iniciar-sesion">Iniciar sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>Todavia no tenés cuenta?</h3>
                    <p>Registrate para iniciar sesión.</p>
                    <button id="btn__registrarse">Registrarse</button>
                </div>
            </div>
            <!-- Formularios -->
            <div class="contenedor__login-register">
                <!-- Login -->
                <form action="php/login_usuario_be.php" method="POST" class="formulario__login">
                    <h2>Iniciar sesión</h2>
                    <input type="text" placeholder="Correo Electrónico" name="email">
                    <input type="password" id="inputId" placeholder="Contraseña" name="contrasenia">
                    <button class="show-password" id="showPasswordLogin" type="button" onclick="togglePasswordVisibility('inputId')">Mostrar Contraseña</button>
                    <br>
                    <button>Entrar</button>
                    
                    <button id="btn__forgotten_password">¿Olvidaste la contraseña?</button>
                </form>
                <!-- Register -->
                <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre completo" name="nombre_completo">
                    <input type="text" placeholder="Edad" name="edad">
                    <input type="text" placeholder="Correo Electrónico" name="email">
                    <input type="text" placeholder="Usuario" name="username">


                    
                    <input type="password" id="inputIdRegister" placeholder="Contraseña" name="contrasenia">
                    <button class="show-password" id="showPasswordRegister" type="button" onclick="togglePasswordVisibility('inputIdRegister')">Mostrar Contraseña</button>

                    <select id="opciones" name="opciones">
                        <option value="">Pregunta de seguridad</option>
                        <option value="opcion1">Equipo de fútbol</option>
                        <option value="opcion2">Mejor amigo de la infancia</option>
                        <option value="opcion3">Nombre de la mascota</option>
                    </select>
                    <input type="text" placeholder="Respuesta" name="respuesta">
                    <button id="btn__registrarse">Registrarse</button>
                </form>


<!-- 
                <form action="recuperar.php" method="post" class = "formulario_recupero">
                    <label for="email">Correo Electrónico:</label>
                    <input type="email" name="email" required>
                    <label for="respuesta_seguridad">Respuesta a la Pregunta de Seguridad:</label>
                    <input type="text" name="respuesta_seguridad" required>
                    <button type="submit">Enviar</button>
                </form> -->
                

            </div>

        </div>


    </main>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="assets/js/sweetAlert.js"></script>
    <script src="./assets/js/script.js"></script>
    <script src="./assets/js/passwordToggle.js"></script>
</body>
</html>