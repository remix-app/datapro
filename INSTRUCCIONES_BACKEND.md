# Implementación de Backend de Correo (PHPMailer)

Para que el formulario de contacto envíe correos reales de forma segura usando tu hosting cPanel, utilizaremos **PHPMailer**, la librería estándar de PHP para envío de correos.

## Pasos de Instalación en cPanel

### Opción A: Si tienes acceso a Terminal/SSH (Recomendado)
1. Navega a la carpeta de tu proyecto: `cd public_html`
2. Ejecuta: `composer require phpmailer/phpmailer`

### Opción B: Instalación Manual (Subir Archivos)
1. Descarga PHPMailer desde: [https://github.com/PHPMailer/PHPMailer/archive/refs/tags/v6.9.1.zip](https://github.com/PHPMailer/PHPMailer)
2. Descomprime el archivo.
3. Crea una carpeta llamada `vendor` en la raíz de tu sitio (al mismo nivel que `index.php`).
4. Dentro de `vendor`, crea una carpeta `phpmailer`.
5. crea otra carpeta `src` dentro de `phpmailer` si es necesario, o simplemente asegúrate de que la estructura sea:
   - `vendor/phpmailer/src/PHPMailer.php`
   - `vendor/phpmailer/src/SMTP.php`
   - `vendor/phpmailer/src/Exception.php`

   *(Nota: Si usas Composer, la ruta será `vendor/autoload.php` y el script lo detectará automáticamente)*

## Configuración

1. En la carpeta `includes`, verás un archivo `email_config.php.example`.
2. Renómbralo a `email_config.php`.
3. Edítalo con los datos de tu cuenta de correo creada en cPanel:
   - **Host**: Generalmente `mail.tudominio.com`
   - **User**: Tu correo completo (ej: `contacto@datapolis.cl`)
   - **Password**: La contraseña de ese correo.
   - **Port**: 465 (SSL) o 587 (TLS).

## ¡Listo!
El formulario detectará automáticamente la librería y enviará los correos usando tu servidor SMTP, lo cual evita que lleguen a SPAM.
