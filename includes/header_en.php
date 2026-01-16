<?php
// Define constant for include protection
if (!defined('DATAPOLIS')) {
    define('DATAPOLIS', true);
}

// Site configuration
// Base URL for English subfolder
$site_url = 'https://datapolis.cl/en';
$base_root = 'https://datapolis.cl'; // For canonical linking to root if needed
$site_name = 'Datapolis';
// Correct path for images in subfolder structure is ../images/
$og_image = $site_url . '/../images/hero.webp';

// Get current page URL
$current_url = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $page_title ?? 'Datapolis | AI for SMEs'; ?>
    </title>
    <meta name="description"
        content="<?php echo $page_description ?? 'Datapolis - Artificial Intelligence solutions designed to boost growth for SMEs in Chile.'; ?>">

    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo $current_url; ?>">

    <!-- Hreflang Tags for SEO Internationalization -->
    <link rel="alternate" hreflang="es" href="<?php echo str_replace('/en/', '/', $current_url); ?>" />
    <link rel="alternate" hreflang="en" href="<?php echo $current_url; ?>" />

    <!-- Open Graph Meta Tags -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $current_url; ?>">
    <meta property="og:title" content="<?php echo $page_title ?? 'Datapolis | AI for SMEs'; ?>">
    <meta property="og:description"
        content="<?php echo $page_description ?? 'Artificial Intelligence solutions for Chilean SMEs'; ?>">
    <meta property="og:image" content="<?php echo $og_image; ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="<?php echo $site_name; ?>">
    <meta property="og:locale" content="en_US">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $page_title ?? 'Datapolis | AI for SMEs'; ?>">
    <meta name="twitter:description"
        content="<?php echo $page_description ?? 'Artificial Intelligence solutions for Chilean SMEs'; ?>">
    <meta name="twitter:image" content="<?php echo $og_image; ?>">

    <!-- Additional SEO Meta Tags -->
    <meta name="robots" content="index, follow">
    <meta name="author" content="Datapolis">
    <meta name="theme-color" content="#0a1628">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../images/favicon.ico">
    <link rel="apple-touch-icon" href="../images/logo.webp">

    <!-- Preconnect for Performance -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>

    <!-- Google Fonts with display=swap for performance -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Space+Grotesk:wght@400;500;600;700&display=swap"
        rel="stylesheet">

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
    <link rel="stylesheet" href="../css/custom.css">

    <!-- Schema.org Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "Datapolis",
        "description": "Artificial Intelligence Solutions for SMEs in Chile. Automation, Analytics, Chatbots and AI Training.",
        "url": "https://datapolis.cl/en",
        "logo": "https://datapolis.cl/images/logo.webp",
        "image": "https://datapolis.cl/images/hero.webp",
        "telephone": "+56912345678",
        "email": "hola@datapolis.cl",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Av. Providencia 1234, Oficina 501",
            "addressLocality": "Providencia",
            "addressRegion": "Metropolitan Region",
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
            "availableLanguage": ["Spanish", "English"]
        }
    }
    </script>
</head>

<body class="font-body bg-primary text-white">
    <!-- Skip to Content Link for Accessibility -->
    <a href="#main-content" class="skip-to-content">Skip to main content</a>

    <!-- Header -->
    <header class="fixed top-0 left-0 right-0 z-50 bg-primary/80 backdrop-blur-lg border-b border-white/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Logo (33% width) -->
                <div class="w-1/3">
                    <a href="index.php" class="flex items-center space-x-2" aria-label="Datapolis - Go to home">
                        <img src="../images/logo.webp" alt="Datpolis AI Logo" class="logo-class"
                            style="max-width: 200px; width: 100%;" height="60" loading="eager">
                    </a>
                </div>

                <div class="flex items-center justify-end w-2/3 space-x-6">
                    <!-- Desktop Navigation -->
                    <nav class="hidden md:flex items-center space-x-6" aria-label="Main navigation">
                        <a href="index.php"
                            class="nav-link text-sm font-medium uppercase tracking-wider <?php echo ($current_page ?? '') === 'home' ? 'text-accent active' : 'text-white hover:text-accent'; ?>">
                            Home
                        </a>
                        <a href="services.php"
                            class="nav-link text-sm font-medium uppercase tracking-wider <?php echo ($current_page ?? '') === 'services' ? 'text-accent active' : 'text-white hover:text-accent'; ?>">
                            Services
                        </a>
                        <a href="courses.php"
                            class="nav-link text-sm font-medium uppercase tracking-wider <?php echo ($current_page ?? '') === 'courses' ? 'text-accent active' : 'text-white hover:text-accent'; ?>">
                            Courses
                        </a>
                        <a href="blog.php"
                            class="nav-link text-sm font-medium uppercase tracking-wider <?php echo ($current_page ?? '') === 'blog' ? 'text-accent active' : 'text-white hover:text-accent'; ?>">
                            Blog
                        </a>
                    </nav>

                    <!-- Buttons Container -->
                    <div class="hidden md:flex items-center space-x-4">
                        <!-- Contact Button -->
                        <a href="contact.php"
                            class="inline-flex items-center px-6 py-2 rounded-full gradient-bg font-semibold text-sm uppercase tracking-wider hover-scale">
                            <span>Contact</span>
                        </a>

                        <!-- Language Switcher (Last item, rightmost) -->
                        <a href="../<?php echo isset($es_page_link) ? $es_page_link : 'index.php'; ?>"
                            class="inline-flex items-center px-3 py-2 rounded-full border border-white/20 hover:border-accent hover:bg-white/5 transition-all text-sm font-medium"
                            aria-label="Switch to Spanish">
                            <span class="mr-2">🇨🇱</span> ES
                        </a>
                    </div>
                </div>

                <!-- Mobile Menu Button -->
                <button id="menu-toggle" class="md:hidden flex flex-col space-y-1.5 p-2" aria-label="Open menu"
                    aria-expanded="false" aria-controls="mobile-menu">
                    <span class="hamburger-line block w-6 h-0.5 bg-white"></span>
                    <span class="hamburger-line block w-6 h-0.5 bg-white"></span>
                    <span class="hamburger-line block w-6 h-0.5 bg-white"></span>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="md:hidden hidden bg-primary/95 backdrop-blur-lg border-b border-white/5"
            aria-hidden="true">
            <nav class="px-4 py-6 space-y-4" aria-label="Mobile navigation">
                <a href="index.php"
                    class="block text-lg font-medium <?php echo ($current_page ?? '') === 'home' ? 'text-accent' : 'text-white'; ?>">
                    Home
                </a>
                <a href="services.php"
                    class="block text-lg font-medium <?php echo ($current_page ?? '') === 'services' ? 'text-accent' : 'text-white'; ?>">
                    Services
                </a>
                <a href="contact.php"
                    class="block text-lg font-medium <?php echo ($current_page ?? '') === 'contact' ? 'text-accent' : 'text-white'; ?>">
                    Contact
                </a>

                <!-- Language Switcher Mobile -->
                <a href="../<?php echo isset($es_page_link) ? $es_page_link : 'index.php'; ?>"
                    class="flex items-center text-lg font-medium text-white/80 hover:text-white mt-4">
                    <span class="mr-2">🇪🇸</span> Versión en Español
                </a>

                <a href="contact.php"
                    class="inline-flex items-center px-6 py-3 rounded-full gradient-bg font-semibold text-sm uppercase tracking-wider mt-4">
                    Book a Demo
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