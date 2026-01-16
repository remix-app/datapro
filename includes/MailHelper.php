<?php
// includes/MailHelper.php

// Intentar cargar autoloader de Composer
if (file_exists(__DIR__ . '/../vendor/autoload.php')) {
    require_once __DIR__ . '/../vendor/autoload.php';
}
// Si no, intentar cargar manualmente clases de PHPMailer (instalación manual)
elseif (file_exists(__DIR__ . '/../vendor/phpmailer/src/PHPMailer.php')) {
    require_once __DIR__ . '/../vendor/phpmailer/src/Exception.php';
    require_once __DIR__ . '/../vendor/phpmailer/src/PHPMailer.php';
    require_once __DIR__ . '/../vendor/phpmailer/src/SMTP.php';
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class MailHelper
{
    public static function send($subject, $htmlBody, $plainBody, $replyToEmail = null, $replyToName = null)
    {
        // Verificar si existe configuración
        if (!file_exists(__DIR__ . '/email_config.php')) {
            error_log("MailHelper Error: email_config.php not found.");
            return false;
        }

        require_once __DIR__ . '/email_config.php';

        // Verificar si PHPMailer está disponible
        if (class_exists('PHPMailer\PHPMailer\PHPMailer')) {
            $mail = new PHPMailer(true);
            try {
                // Configuración del Servidor
                $mail->isSMTP();
                $mail->Host = SMTP_HOST;
                $mail->SMTPAuth = true;
                $mail->Username = SMTP_USER;
                $mail->Password = SMTP_PASS;
                $mail->SMTPSecure = SMTP_SECURE; // 'ssl' o 'tls'
                $mail->Port = SMTP_PORT;
                $mail->CharSet = 'UTF-8';

                // Destinatarios
                $mail->setFrom(SMTP_USER, MAIL_FROM_NAME);
                $mail->addAddress(MAIL_TO_ADDRESS); // Destino principal (admin)

                if ($replyToEmail) {
                    $mail->addReplyTo($replyToEmail, $replyToName);
                }

                // Contenido
                $mail->isHTML(true);
                $mail->Subject = $subject;
                $mail->Body = $htmlBody;
                $mail->AltBody = $plainBody; // Versión texto plano

                $mail->send();
                return true;
            } catch (Exception $e) {
                error_log("MailHelper Error: Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
                return false;
            }
        } else {
            error_log("MailHelper Error: PHPMailer class not found.");
            // Fallback a mail() nativo (menos seguro/confiable)
            $headers = "From: " . MAIL_FROM_NAME . " <" . SMTP_USER . ">\r\n";
            if ($replyToEmail) {
                $headers .= "Reply-To: $replyToName <$replyToEmail>\r\n";
            }
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

            return mail(MAIL_TO_ADDRESS, $subject, $htmlBody, $headers);
        }
    }
}
