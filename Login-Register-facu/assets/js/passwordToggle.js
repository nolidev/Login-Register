function togglePasswordVisibility(inputId) {
    const passwordInput = document.getElementById(inputId);
    const showPasswordButton = document.getElementById("showPasswordLogin");
    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        showPasswordButton.textContent = "Ocultar Contraseña";
    } else {
        passwordInput.type = "password";
        showPasswordButton.textContent = "Mostrar Contraseña";
    }
}



document.getElementById("btn__registrarse").addEventListener("click", function(event) {
    event.preventDefault(); // Previene el envío del formulario
});