<?php
include "conexion.php";

// Recibir los datos del formulario
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$email = $_POST["email"];
$direccion = $_POST["direccion"];
$telefono = $_POST["telefono"];
$dni = $_POST["dni"];
$contrasena = $_POST["contrasena"];

// Validar el formato del correo electrónico
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: registro_error.php?error=invalid_email");
    exit();
}

// Validar el formato del DNI
if (!preg_match('/^[0-9]{8}[A-Za-z]$/', $dni)) {
    header("Location: registro_error.php?error=invalid_dni");
    exit();
}

// Preparar la consulta SQL para la inserción
$insertar = "INSERT INTO usuarios (email, nombre, apellidos, direccion, telefono, dni, contrasena) 
             VALUES (?, ?, ?, ?, ?, ?, ?)";

// Preparar la declaración y enlazar los parámetros
if ($statement = mysqli_prepare($conexion, $insertar)) {
    mysqli_stmt_bind_param($statement, "sssssss", $email, $nombre, $apellidos, $direccion, $telefono, $dni, $contrasena);

    // Ejecutar la declaración
    if (mysqli_stmt_execute($statement)) {
        // Verificar si la inserción fue exitosa
        if (mysqli_stmt_affected_rows($statement) > 0) {
            // Redirigir a la página de registro exitoso
            header("Location: registro_exitoso.php");
            exit();
        } else {
            // Si la inserción falla, redirigir a registro_error.php
            header("Location: registro_error.php?error=insert_error");
            exit();
        }
    } else {
        // Si hay un error al ejecutar la declaración, redirigir a registro_error.php con el mensaje de error
        header("Location: registro_error.php?error=" . urlencode(mysqli_error($conexion)));
        exit();
    }

    // Cerrar la declaración
    mysqli_stmt_close($statement);
} else {
    // Si hay un error en la preparación de la consulta, redirigir a registro_error.php con el mensaje de error
    header("Location: registro_error.php?error=" . urlencode(mysqli_error($conexion)));
    exit();
}

// Cerrar la conexión
mysqli_close($conexion);
