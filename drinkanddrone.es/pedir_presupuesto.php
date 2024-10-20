<?php
session_start();
include "conexion.php";

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario'])) {
    // Redireccionar al login si el usuario no ha iniciado sesión
    header("Location: login.php");
    exit();
}

// Obtener el ID de usuario de la sesión
$id_usuario = $_SESSION['id_usuario'];

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar los datos del formulario
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $observaciones = $_POST['observaciones'];
    $usuario_id = $_SESSION['id_usuario']; // Obtener el ID de usuario de la sesión

    // Insertar los datos en la base de datos
    $query = "INSERT INTO presupuestos (nombre, email, observaciones, usuario_id) 
              VALUES (?, ?, ?, ?)";
    if ($stmt = $conexion->prepare($query)) { // Utilizar $conexion en lugar de $mysqli para la consulta  stmt=(statement object) asi evitamos la   inyeccion de de SQL
        // Vincular variables a la declaración preparada como parámetros
        $stmt->bind_param("sssi", $nombre, $email, $observaciones, $usuario_id);

        // Ejecutar la declaración
        if ($stmt->execute()) {
            // Si se ha realizado el Presupuesto correctamente 
            // Enviar correo electrónico
            $to = 'info@drinkanddrone.es';
            $subject = 'Nuevo presupuesto solicitado';
            $message = "Se ha solicitado un nuevo presupuesto:\n\nNombre: $nombre\nEmail: $email\nObservaciones: $observaciones";
            $headers = 'From: info@drinkanddrone.es' . "\r\n" .
                'Reply-To: info@drinkanddrone.es' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

            mail($to, $subject, $message, $headers);

            // Redirigir al usuario a la página de registro_presupuesto.php
            header("Location: registro_presupuesto.php");
            exit(); // Finalizar la ejecución del script
        } else {
            // Error al registrar el presupuesto
            echo "<script>alert('Error al solicitar el presupuesto. Por favor, inténtalo de nuevo.');</script>";
        }

        // Cerrar la declaración
        $stmt->close();
    }
}
