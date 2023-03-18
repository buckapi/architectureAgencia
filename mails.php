<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';

// Configuración del servidor SMTP
$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host       = 'smtp.gmail.com'; // el host del servidor SMTP
$mail->SMTPAuth   = true;
$mail->Username   = 'tu_correo@gmail.com'; // tu correo electrónico
$mail->Password   = 'tu_contraseña'; // tu contraseña
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // TLS o SSL
$mail->Port       = 587; // el puerto del servidor SMTP

// Configuración del correo electrónico
$mail->setFrom('tu_correo@gmail.com', 'Tu nombre');
$mail->addAddress('destinatario@gmail.com', 'Destinatario');
$mail->addReplyTo('tu_correo@gmail.com', 'Tu nombre');

$mail->isHTML(true); // el correo electrónico es HTML
$mail->Subject = 'Asunto del correo electrónico';
$mail->Body    = 'Este es el mensaje del correo electrónico';

// Envío del correo electrónico
if ($mail->send()) {
    echo 'El correo electrónico fue enviado correctamente';
} else {
    echo 'No se pudo enviar el correo electrónico';
}
?>
