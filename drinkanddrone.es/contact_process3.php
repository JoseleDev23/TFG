<?php
// Cargar la biblioteca PHPMailer
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
require 'PHPMailer-master/src/Exception.php';

// Crear una nueva instancia de PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();

// Configurar el servidor SMTP
$mail->isSMTP();
$mail->Host = 'smtp.drinkanddrone.es'; // Servidor SMTP
$mail->SMTPAuth = true;
$mail->Username = 'info@drinkanddrone.es'; // Usuario SMTP
$mail->Password = 'Numakira2324'; // Contraseña SMTP
$mail->SMTPSecure = false; // Deshabilitar la encriptación TLS
$mail->Port = 25; // Puerto SMTP

// Configurar remitente y destinatario
$mail->setFrom('info@drinkanddrone.es', 'Drink and Drone'); // Cambia esto por una dirección de correo electrónico válida y un nombre de remitente adecuado
$mail->addAddress('info@drinkanddrone.es'); // Correo electrónico de destino

// Configurar el contenido del correo
$mail->isHTML(true);
$mail->Subject = 'Tienes un mensaje de Drink and Drone.';
$mail->Body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Correo de Consulta</title></head><body>
    <table style='width: 100%;'><thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>
    <a href='#'><img src='img/logo.png' alt=''></a><br><br></td></tr></thead><tbody><tr>
    <td style='border:none;'><strong>Nombre:</strong> {$_REQUEST['name']}</td>
    <td style='border:none;'><strong>Email:</strong> {$_REQUEST['email']}</td></tr><tr>
    <td style='border:none;'><strong>Teléfono:</strong> {$_REQUEST['phone']}</td></tr><tr>
    <td colspan='2' style='border:none;'>{$_REQUEST['message']}</td></tr></tbody></table></body></html>";

// Enviar el correo electrónico
if ($mail->send()) {
    echo 'El mensaje se envió correctamente.';
} else {
    echo 'Hubo un error al enviar el mensaje.';
    echo 'Error: ' . $mail->ErrorInfo;
}
