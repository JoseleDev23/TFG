function validateForm() {
    // Obtener los valores de los campos del formulario
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var message = document.getElementById("message").value;

    // Validar que los campos no estén vacíos
    if (name.trim() === '' || email.trim() === '' || message.trim() === '') {
        alert("Por favor, complete todos los campos.");
        return false;
    }

    // Validar el formato del correo electrónico
    var emailRegex = /^\S+@\S+\.\S+$/;
    if (!emailRegex.test(email)) {
        alert("Por favor, introduzca una dirección de correo electrónico válida.");
        return false;
    }

    // Si pasa todas las validaciones, devolver true
    return true;
}
