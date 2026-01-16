<?php
// Configuración de Correo Electrónico (SMTP)
// RENOMBRAR ESTE ARCHIVO A: email_config.php y completar con los datos reales

define('SMTP_HOST', 'ma.cl'); // Tu servidor de correo (ej. mail.midominio.com o smtp.gmail.com)
define('SMTP_USER', 'sit@.cl'); // Tu correo completo
define('SMTP_PASS', 'Ww23@!'); // La contraseña del correo
define('SMTP_PORT', 465); // Puerto SMTP (465 para SSL, 587 para TLS)
define('SMTP_SECURE', 'ssl'); // 'ssl' o 'tls'

define('MAIL_FROM_NAME', 'Web Datapolis'); // Nombre que aparecerá en el remitente
define('MAIL_TO_ADDRESS', 'ho.cl'); // A dónde llegarán los correos del formulario
