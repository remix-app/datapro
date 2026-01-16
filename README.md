# Datapolis Website

Sitio web PHP para Datapolis - Soluciones de Inteligencia Artificial para PyMEs en Chile.

## 🚀 Características

- **Diseño moderno** con Tailwind CSS
- **Optimizado para SEO** (Open Graph, Twitter Cards, Schema.org)
- **Seguridad mejorada** (CSRF, CSP headers, XSS protection)
- **Alto rendimiento** (lazy loading, caché, GZIP)
- **Accesible** (ARIA labels, skip-to-content)

## 📁 Estructura

```
├── css/
│   └── custom.css          # Estilos personalizados
├── images/                  # Imágenes WebP optimizadas
├── includes/
│   ├── header.php          # Cabecera con SEO
│   └── footer.php          # Pie de página
├── index.php               # Página principal
├── servicios.php           # Página de servicios
├── contacto.php            # Formulario de contacto
├── terminos.php            # Términos de uso
├── sitemap.xml             # Mapa del sitio
├── robots.txt              # Control de indexación
└── .htaccess               # Configuración Apache
```

## ⚙️ Requisitos

- PHP 7.4 o superior
- Apache con mod_rewrite habilitado
- mod_deflate (para GZIP)
- mod_expires (para caché)
- mod_headers (para headers de seguridad)

## 🔧 Instalación

1. Clona el repositorio:
```bash
git clone https://github.com/tu-usuario/datapolis-web.git
```

2. Configura tu servidor Apache para apuntar a la carpeta del proyecto

3. Actualiza la URL del sitio en `includes/header.php`:
```php
$site_url = 'https://tu-dominio.cl';
```

4. Configura el envío de emails en `contacto.php` (descomenta el código)

## 🔒 Seguridad Implementada

- Protección CSRF en formularios
- Content-Security-Policy headers
- X-Frame-Options (anti-clickjacking)
- X-XSS-Protection
- Referrer-Policy
- Honeypot anti-spam

## 📈 SEO Implementado

- Meta tags Open Graph
- Twitter Cards
- Schema.org (LocalBusiness)
- URLs canónicas
- Sitemap XML
- Robots.txt

## 📄 Licencia

© 2026 Datapolis. Todos los derechos reservados.

---

Diseñado con ❤️ por [Cuboid IA](https://cuboid-ia.com)
