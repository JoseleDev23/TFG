<?php

$to = "info@drinkanddrone.es"; // Correo electrónico de destino
$from = $_REQUEST['email']; // Correo electrónico del remitente
$name = $_REQUEST['name']; // Nombre del remitente
$phone = $_REQUEST['phone']; // Teléfono del remitente
$message = $_REQUEST['message']; // Mensaje del remitente

$subject = "Tienes un mensaje de Drink and Drone."; // Asunto del correo

// Construir el cuerpo del correo electrónico
$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Correo de Consulta</title></head><body>";
$body .= "<table style='width: 100%;'>";
$body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
$body .= "<a href='#'><img src='img/logo.png' alt=''></a><br><br>";
$body .= "</td></tr></thead><tbody><tr>";
$body .= "<td style='border:none;'><strong>Nombre:</strong> {$name}</td>";
$body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";
$body .= "</tr>";
$body .= "<tr><td style='border:none;'><strong>Teléfono:</strong> {$phone}</td></tr>";
$body .= "<tr><td colspan='2' style='border:none;'>{$message}</td></tr>";
$body .= "</tbody></table>";
$body .= "</body></html>";

// Configurar los parámetros del servidor SMTP
$smtpServer = "smtp.drinkanddrone.es"; // Servidor SMTP
$smtpPort = 25; // Puerto SMTP
$username = "info@drinkanddrone.es"; // Usuario SMTP
$password = "Numakira23"; // Contraseña SMTP

// Configurar los encabezados del correo electrónico
$headers = "From: {$from}\r\n";
$headers .= "Reply-To: {$from}\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

// Intentar enviar el correo electrónico con autenticación SMTP
$smtp = stream_socket_client('tcp://' . $smtpServer . ':' . $smtpPort, $errno, $errstr, 30);
if (!$smtp) {
    echo "Error al conectar al servidor SMTP: $errstr ($errno)";
} else {
    // Envía el comando de autenticación
    fwrite($smtp, "AUTH LOGIN\r\n");
    $response = fread($smtp, 1024);
    if (strpos($response, '334') === false) {
        echo "Error al autenticar en el servidor SMTP";
    } else {
        // Envía el nombre de usuario codificado en base64
        fwrite($smtp, base64_encode($username) . "\r\n");
        $response = fread($smtp, 1024);
        if (strpos($response, '334') === false) {
            echo "Error al enviar el nombre de usuario al servidor SMTP";
        } else {
            // Envía la contraseña codificada en base64
            fwrite($smtp, base64_encode($password) . "\r\n");
            $response = fread($smtp, 1024);
            if (strpos($response, '235') === false) {
                echo "Error al enviar la contraseña al servidor SMTP";
            } else {
                // Envía el correo electrónico
                if (mail($to, $subject, $body, $headers)) {
                    echo "El mensaje se envió correctamente.";
                } else {
                    echo "Hubo un error al enviar el mensaje.";
                }
            }
        }
    }
    fclose($smtp);
}

// // Intentar enviar el correo electrónico
// if (mail($to, $subject, $body, $headers)) {
//     echo "El mensaje se envió correctamente.";
// } else {
//     echo "Hubo un error al enviar el mensaje.<br>";
//     $lastError = error_get_last();
//     if ($lastError !== null && isset($lastError['message'])) {
//         echo "Detalles del error: " . $lastError['message'];
//     } else {
//         echo "No se pudo obtener información detallada sobre el error.";
//     }
// }
