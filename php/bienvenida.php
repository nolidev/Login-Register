<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/sweetAlert.js"></script> 
    <title>Bienvenid@!</title>
</head>
<body>
    <h1>Bienvenido a la pagina web.</h1>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
                // Mostrar una alerta de SweetAlert
                Swal.fire({
                    icon: "success",
                    title: "Bienvenido!",
                    text: "El inicio de sesión a la pagina fue exitoso!"
                }).then(function() {
                    // Redirigir de regreso a la página de inicio
                    window.location = "../index.html";
                });
            </script>
</body>
</html>