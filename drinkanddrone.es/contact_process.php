<?php
// Cargar la biblioteca PHPMailer
require_once 'PHPMailer-master/src/PHPMailer.php';
require_once 'PHPMailer-master/src/SMTP.php';
require_once 'PHPMailer-master/src/Exception.php';

// Crear una nueva instancia de PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();

// Configurar el servidor SMTP
$mail->isSMTP();
$mail->Host = 'smtp.servidor-correo.net'; // Servidor SMTP
$mail->SMTPAuth = true;
$mail->Username = 'info@drinkanddrone.es'; // Usuario SMTP
$mail->Password = 'Numakira23'; // Contraseña SMTP
$mail->SMTPSecure = 'tls'; // Habilitar encriptación TLS (STARTTLS)
$mail->Port = 587; // Puerto SMTP

// Configurar remitente y destinatario
$mail->setFrom('info@drinkanddrone.es', 'Drink and Drone');
$mail->addAddress('info@drinkanddrone.es');

// Validar las variables de solicitud
$name = htmlspecialchars($_REQUEST['name']);
$email = htmlspecialchars($_REQUEST['email']);
$phone = htmlspecialchars($_REQUEST['phone']);
$message = htmlspecialchars($_REQUEST['message']);

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
    header('Location: email_enviado.php');
    exit();
} else {
    echo 'Hubo un error al enviar el mensaje.';
    echo 'Error: ' . $mail->ErrorInfo;
}
