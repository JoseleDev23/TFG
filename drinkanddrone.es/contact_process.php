<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
require 'PHPMailer-master/src/Exception.php';

// Crear una nueva instancia de PHPMailer
$mail = new PHPMailer();

// Configurar el servidor SMTP
$mail->isSMTP();
$mail->Host = 'smtp.servidor-correo.net'; // Servidor SMTP
$mail->SMTPAuth = true;
$mail->Username = 'info@drinkdrone.es'; // Usuario SMTP
$mail->Password = 'Numakira2324'; // Contraseña SMTP
$mail->SMTPSecure = 'tls'; // Habilitar encriptación TLS (STARTTLS)
$mail->Port = 587; // Puerto SMTP

// Configurar remitente y destinatario
$mail->setFrom('info@drinkdrone.es', 'Drink and Drone');
$mail->addAddress('info@drinkdrone.es');

// Escapar y validar las variables de solicitud
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$phone = htmlspecialchars($_POST['phone']);
$message = htmlspecialchars($_POST['message']);

// Validar campos obligatorios
if (empty($name) || empty($email) || empty($phone) || empty($message)) {
    header('Location: email_no_enviado.php?error=Todos los campos deben estar llenos.');
    exit;
}

// Validar formato de correo electrónico
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('Location: email_no_enviado.php?error=Formato de email inválido.');
    exit;
}

// Configurar el contenido del correo
$mail->isHTML(true);
$mail->Subject = 'Tienes un mensaje de Drink and Drone.';
$mail->Body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Correo de Consulta</title></head><body>
    <table style='width: 100%;'><thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>
    <a href='#'><img src='img/logo.png' alt=''></a><br><br></td></tr></thead><tbody><tr>
    <td style='border:none;'><strong>Nombre:</strong> $name</td>
    <td style='border:none;'><strong>Email:</strong> $email</td></tr><tr>
    <td style='border:none;'><strong>Teléfono:</strong> $phone</td></tr><tr>
    <td colspan='2' style='border:none;'>$message</td></tr></tbody></table></body></html>";

// Enviar el correo electrónico
if ($mail->send()) {
    // Redirigir a la página de éxito si el correo se envió correctamente
    header('Location: email_enviado.php');
    exit;
} else {
    // Mostrar un mensaje de error si falla el envío del correo
    header('Location: email_no_enviado.php?error=Hubo un error al enviar el mensaje.');
}
