<?php
session_start();
include "conexion.php"; // Asegúrate de incluir el archivo de conexión a tu base de datos

// Procesar formulario de login (si está presente)
if (isset($_POST['inputEmail'])) {
    $email = $_POST['inputEmail'];
    $password = $_POST['inputPassword'];

    if (empty($email) || empty($password)) {
        $error = "Debes introducir un email y una contraseña";
    } else {
        // Query para buscar al usuario en la base de datos por su email
        $query = "SELECT id_usuario, nombre, contrasena FROM usuarios WHERE email = '$email'";
        $result = mysqli_query($conexion, $query);

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                $usuarioData = mysqli_fetch_assoc($result);
                // Verificar la contraseña
                if ($usuarioData['contrasena'] == $password) {
                    // Inicio de sesión exitoso
                    $_SESSION['usuario'] = $usuarioData['nombre']; // Se guarda el nombre de usuario en la sesión
                    $_SESSION['id_usuario'] = $usuarioData['id_usuario']; // Se guarda el id de usuario en la sesión

                    // Redireccionar al index.php después del inicio de sesión
                    header("Location: index.php");
                    exit();
                } else {
                    $error = "Contraseña incorrecta";
                }
            } else {
                $error = "Usuario no encontrado";
            }
        } else {
            $error = "Error en la consulta: " . mysqli_error($conexion);
        }
    }
}
include "indexLogin.php";
