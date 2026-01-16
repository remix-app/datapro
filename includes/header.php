<?php
// Define constant for include protection
if (!defined('DATAPOLIS')) {
    define('DATAPOLIS', true);
}

// Site configuration
$site_url = 'https://datapolis.cl';
$site_name = 'Datapolis';
$og_image = $site_url . '/images/hero.webp';

// Get current page URL
$current_url = $site_url . '/' . basename($_SERVER['PHP_SELF'], '.php');
if (basename($_SERVER['PHP_SELF']) === 'index.php') {
    $current_url = $site_url . '/';
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title ?? 'Datapolis | IA para PyMEs'; ?></title>
    <meta name="description" content="<?php echo $page_description ?? 'Datapolis - Soluciones de Inteligencia Artificial diseñadas para impulsar el crecimiento de PyMEs en Chile'; ?>">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo $current_url; ?>">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $current_url; ?>">
    <meta property="og:title" content="<?php echo $page_title ?? 'Datapolis | IA para PyMEs'; ?>">
    <meta property="og:description" content="<?php echo $page_description ?? 'Soluciones de Inteligencia Artificial para PyMEs en Chile'; ?>">
    <meta property="og:image" content="<?php echo $og_image; ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="<?php echo $site_name; ?>">
    <meta property="og:locale" content="es_CL">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $page_title ?? 'Datapolis | IA para PyMEs'; ?>">
    <meta name="twitter:description" content="<?php echo $page_description ?? 'Soluciones de Inteligencia Artificial para PyMEs en Chile'; ?>">
    <meta name="twitter:image" content="<?php echo $og_image; ?>">
    
    <!-- Additional SEO Meta Tags -->
    <meta name="robots" content="index, follow">
    <meta name="author" content="Datapolis">
    <meta name="theme-color" content="#0a1628">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/logo.webp">
    
    <!-- Preconnect for Performance -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
    
    <!-- Google Fonts with display=swap for performance -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#0a1628',
                        secondary: '#1e3a5f',
                        accent: '#00d4ff',
                        accent2: '#7c3aed',
                        light: '#f1f5f9',
                        muted: '#94a3b8'
                    },
                    fontFamily: {
                        heading: ['Space Grotesk', 'sans-serif'],
                        body: ['Inter', 'sans-serif']
                    }
                }
            }
        }
    </script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
    
    <!-- Schema.org Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "Datapolis",
        "description": "Soluciones de Inteligencia Artificial para PyMEs en Chile. Automatización, Analytics, Chatbots y Capacitación en IA.",
        "url": "https://datapolis.cl",
        "logo": "https://datapolis.cl/images/logo.webp",
        "image": "https://datapolis.cl/images/hero.webp",
        "telephone": "+56912345678",
        "email": "hola@datapolis.cl",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Av. Providencia 1234, Oficina 501",
            "addressLocality": "Providencia",
            "addressRegion": "Región Metropolitana",
            "postalCode": "",
            "addressCountry": "CL"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": "-33.4267",
            "longitude": "-70.6088"
        },
        "openingHoursSpecification": [
            {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
                "opens": "08:30",
                "closes": "17:30"
            },
            {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": "Saturday",
                "opens": "10:00",
                "closes": "14:00"
            }
        ],
        "priceRange": "$$",
        "areaServed": {
            "@type": "Country",
            "name": "Chile"
        },
        "sameAs": [
            "https://linkedin.com/company/datapolis",
            "https://instagram.com/datapolis",
            "https://github.com/datapolis"
        ],
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+56912345678",
            "contactType": "customer service",
            "email": "hola@datapolis.cl",
            "availableLanguage": ["Spanish"]
        }
    }
    </script>
</head>
<body class="font-body bg-primary text-white">
    <!-- Skip to Content Link for Accessibility -->
    <a href="#main-content" class="skip-to-content">Saltar al contenido principal</a>
    
    <!-- Header -->
    <header class="fixed top-0 left-0 right-0 z-50 bg-primary/80 backdrop-blur-lg border-b border-white/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Logo -->
                <a href="index.php" class="flex items-center space-x-2" aria-label="Datapolis - Ir al inicio">
                    <img src="images/logo.webp" alt="Logo Datapolis IA" class="logo-class" width="200" height="60" loading="eager">
                </a>
                
                <!-- Desktop Navigation -->
                <nav class="hidden md:flex items-center space-x-8" aria-label="Navegación principal">
                    <a href="index.php" class="nav-link text-sm font-medium uppercase tracking-wider <?php echo ($current_page ?? '') === 'inicio' ? 'text-accent active' : 'text-white hover:text-accent'; ?>">
                        Inicio
                    </a>
                    <a href="servicios.php" class="nav-link text-sm font-medium uppercase tracking-wider <?php echo ($current_page ?? '') === 'servicios' ? 'text-accent active' : 'text-white hover:text-accent'; ?>">
                        Servicios
                    </a>
                    <a href="contacto.php" class="nav-link text-sm font-medium uppercase tracking-wider <?php echo ($current_page ?? '') === 'contacto' ? 'text-accent active' : 'text-white hover:text-accent'; ?>">
                        Contacto
                    </a>
                </nav>
                
                <!-- CTA Button -->
                <div class="hidden md:block">
                    <a href="contacto.php" class="inline-flex items-center px-6 py-3 rounded-full gradient-bg font-semibold text-sm uppercase tracking-wider hover-scale">
                        <span>Agenda una Demo</span>
                        <i class="fas fa-arrow-right ml-2" aria-hidden="true"></i>
                    </a>
                </div>
                
                <!-- Mobile Menu Button -->
                <button id="menu-toggle" class="md:hidden flex flex-col space-y-1.5 p-2" aria-label="Abrir menú" aria-expanded="false" aria-controls="mobile-menu">
                    <span class="hamburger-line block w-6 h-0.5 bg-white"></span>
                    <span class="hamburger-line block w-6 h-0.5 bg-white"></span>
                    <span class="hamburger-line block w-6 h-0.5 bg-white"></span>
                </button>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="md:hidden hidden bg-primary/95 backdrop-blur-lg border-b border-white/5" aria-hidden="true">
            <nav class="px-4 py-6 space-y-4" aria-label="Navegación móvil">
                <a href="index.php" class="block text-lg font-medium <?php echo ($current_page ?? '') === 'inicio' ? 'text-accent' : 'text-white'; ?>">
                    Inicio
                </a>
                <a href="servicios.php" class="block text-lg font-medium <?php echo ($current_page ?? '') === 'servicios' ? 'text-accent' : 'text-white'; ?>">
                    Servicios
                </a>
                <a href="contacto.php" class="block text-lg font-medium <?php echo ($current_page ?? '') === 'contacto' ? 'text-accent' : 'text-white'; ?>">
                    Contacto
                </a>
                <a href="contacto.php" class="inline-flex items-center px-6 py-3 rounded-full gradient-bg font-semibold text-sm uppercase tracking-wider mt-4">
                    Agenda una Demo
                </a>
            </nav>
        </div>
    </header>
    
    <!-- Main Content Wrapper -->
    <main id="main-content">
    
    <script>
        // Mobile menu toggle with accessibility
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        
        menuToggle.addEventListener('click', () => {
            const isOpen = menuToggle.classList.toggle('menu-open');
            mobileMenu.classList.toggle('hidden');
            menuToggle.setAttribute('aria-expanded', isOpen);
            mobileMenu.setAttribute('aria-hidden', !isOpen);
        });
    </script>
