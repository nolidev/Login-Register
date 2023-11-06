<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="js/sweetAlert.js"></script> 
    <title>Cambio de contraseña</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
                // Mostrar una alerta de SweetAlert
                Swal.fire({
                    icon: "success",
                    title: "Contraseña modificada",
                    text: "El cambio de contraseña fue exitoso!"
                }).then(function() {
                    // Redirigir de regreso a la página de inicio
                    window.location = "../index.php";
                });
            </script>
</body>
</html>