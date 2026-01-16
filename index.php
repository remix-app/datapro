<?php
$page_title = "Datapolis | Inteligencia Artificial para PyMEs";
$page_description = "Datapolis - Soluciones de Inteligencia Artificial diseñadas para impulsar el crecimiento de PyMEs en Chile. Automatización, Analytics, Chatbots y más.";
$current_page = "inicio";

include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="relative min-h-screen flex items-center justify-center overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0">
        <img src="images/hero.webp" alt="Datapolis - IA para PyMEs" class="w-full h-full object-cover" loading="eager"
            decoding="async" fetchpriority="high">
        <div class="absolute inset-0 bg-gradient-to-r from-primary via-primary/50 to-primary/20"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-primary via-transparent to-transparent"></div>
    </div>

    <!-- Content -->
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32 text-center">
        <!-- Pretitle -->
        <p class="text-accent uppercase tracking-[0.3em] text-sm font-medium mb-6 float-animation">
            <i class="fas fa-map-marker-alt mr-2" aria-hidden="true"></i> Santiago y Todo Chile
        </p>

        <!-- Main Title -->
        <h1 class="font-heading text-5xl sm:text-6xl lg:text-7xl font-bold leading-tight mb-8">
            Transformamos PyMEs con<br>
            <span class="gradient-text">Inteligencia Artificial</span>
        </h1>

        <!-- Subtitle -->
        <p class="text-xl sm:text-2xl text-muted max-w-3xl mx-auto mb-12">
            Automatización <span class="text-accent">•</span>
            Analytics <span class="text-accent">•</span>
            Chatbots <span class="text-accent">•</span>
            Machine Learning
        </p>

        <!-- CTAs -->
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="servicios.php"
                class="group inline-flex items-center px-8 py-4 rounded-full border-2 border-white/30 text-white font-semibold hover:border-accent hover:text-accent transition-all">
                <span>Ver Servicios</span>
                <i class="fas fa-arrow-down ml-2 group-hover:translate-y-1 transition-transform" aria-hidden="true"></i>
            </a>
            <a href="contacto.php"
                class="inline-flex items-center px-8 py-4 rounded-full gradient-bg font-semibold hover-scale">
                <span>Contáctanos</span>
                <i class="fas fa-arrow-right ml-2" aria-hidden="true"></i>
            </a>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2">
        <div class="w-6 h-10 border-2 border-white/30 rounded-full flex items-start justify-center p-2">
            <div class="w-1.5 h-3 bg-accent rounded-full animate-bounce"></div>
        </div>
    </div>
</section>

<!-- Intro Section -->
<section class="py-24 bg-light text-primary relative overflow-hidden">
    <!-- Decorative Element -->
    <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-l from-accent/5 to-transparent"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <!-- Text Content -->
            <div>
                <p class="text-accent uppercase tracking-widest text-sm font-semibold mb-4">
                    Bienvenidos a Datapolis
                </p>
                <h2 class="font-heading text-4xl sm:text-5xl font-bold mb-8 leading-tight">
                    IA accesible para<br>
                    <span class="text-secondary">impulsar tu negocio</span>
                </h2>
                <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                    En Datapolis, creemos que la Inteligencia Artificial no debería ser exclusiva de las grandes
                    corporaciones. Nuestra misión es democratizar el acceso a tecnologías avanzadas, permitiendo que
                    PyMEs chilenas compitan en igualdad de condiciones.
                </p>
                <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                    Desarrollamos soluciones personalizadas que automatizan procesos, extraen insights de tus datos y
                    mejoran la experiencia de tus clientes. Todo con un enfoque práctico y retorno de inversión medible.
                </p>

                <!-- Stats -->
                <div class="flex flex-wrap items-center gap-8 py-6 border-t border-b border-gray-200">
                    <div class="text-center">
                        <p class="font-heading text-4xl font-bold text-accent2">5+</p>
                        <p class="text-sm text-gray-500">Proyectos</p>
                    </div>
                    <div class="w-px h-12 bg-gray-200"></div>
                    <div class="text-center">
                        <p class="font-heading text-4xl font-bold text-accent2">40%</p>
                        <p class="text-sm text-gray-500">Ahorro Promedio</p>
                    </div>
                    <div class="w-px h-12 bg-gray-200"></div>
                    <div class="text-center">
                        <p class="font-heading text-4xl font-bold text-accent2">100%</p>
                        <p class="text-sm text-gray-500">Satisfacción</p>
                    </div>
                </div>
            </div>

            <!-- Image -->
            <div class="relative">
                <div class="aspect-square rounded-2xl overflow-hidden shadow-2xl">
                    <img src="images/ambiente.webp" alt="Equipo Datapolis trabajando en soluciones de IA"
                        class="w-full h-full object-cover" loading="lazy" decoding="async">
                </div>
                <!-- Floating Card -->
                <div class="absolute -bottom-6 -left-6 bg-white p-6 rounded-xl shadow-xl border-l-4 border-accent">
                    <div class="flex items-center space-x-3">
                        <div class="w-12 h-12 rounded-full gradient-bg flex items-center justify-center">
                            <i class="fas fa-check text-white text-lg" aria-hidden="true"></i>
                        </div>
                        <div>
                            <p class="font-heading font-bold text-primary">Certificados</p>
                            <p class="text-sm text-gray-500">Empresa B</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="py-24 bg-primary relative" id="servicios">
    <!-- Decorative Line -->
    <div class="w-24 h-1 gradient-bg mx-auto mb-16 rounded-full"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-16">
            <h2 class="font-heading text-4xl sm:text-5xl lg:text-6xl font-bold mb-6">
                Cursos <span class="gradient-text">de Verano 2026</span>
            </h2>
            <p class="text-xl text-muted max-w-2xl mx-auto">
                Soluciones de la Inteligencia Artificial aplicadas a la Contabilidad y las PyMEs chilenas</p>
        </div>

        <!-- Services Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-8">
            <!-- Service 1 -->
            <article
                class="group card-hover bg-secondary/30 rounded-2xl overflow-hidden border border-white/5 hover:border-accent/50">
                <div class="aspect-square overflow-hidden">
                    <img src="images/servicio-1.webp" alt="Curso de protección de datos al trabajar con ChatGPT"
                        class="card-image w-full h-full object-cover transition-transform duration-500" loading="lazy"
                        decoding="async">
                </div>
                <div class="p-6 border-l-4 border-accent">
                    <span class="text-xs uppercase tracking-wider text-accent font-semibold">Curso introductorio (IA
                        101)</span>
                    <h3 class="font-heading text-2xl font-bold mt-2 mb-3">Protección de datos<br>al trabajar con ChatGPT
                    </h3>
                    <p class="text-muted text-sm">
                        Automatiza procesos repetitivos con bots inteligentes. Reduce errores y libera a tu equipo para
                        tareas de mayor valor.
                    </p>
                </div>
            </article>

            <!-- Service 2 -->
            <article
                class="group card-hover bg-secondary/30 rounded-2xl overflow-hidden border border-white/5 hover:border-accent/50">
                <div class="aspect-square overflow-hidden">
                    <img src="images/servicio-2.webp" alt="Curso de Excel habilitado para ChatGPT"
                        class="card-image w-full h-full object-cover transition-transform duration-500" loading="lazy"
                        decoding="async">
                </div>
                <div class="p-6 border-l-4 border-accent">
                    <span class="text-xs uppercase tracking-wider text-accent font-semibold">Curso introductorio (IA
                        101)</span>
                    <h3 class="font-heading text-2xl font-bold mt-2 mb-3">Habilitar Excel para<br>el trabajo con ChatGPT
                    </h3>
                    <p class="text-muted text-sm">
                        Transforma tus datos en decisiones estratégicas. Dashboards interactivos y predicciones
                        impulsadas por ML.
                    </p>
                </div>
            </article>

            <!-- Service 3 -->
            <article
                class="group card-hover bg-secondary/30 rounded-2xl overflow-hidden border border-white/5 hover:border-accent/50">
                <div class="aspect-square overflow-hidden">
                    <img src="images/servicio-3.webp" alt="Curso de ChatGPT aplicado a Declaraciones Juradas"
                        class="card-image w-full h-full object-cover transition-transform duration-500" loading="lazy"
                        decoding="async">
                </div>
                <div class="p-6 border-l-4 border-accent2">
                    <span class="text-xs uppercase tracking-wider text-accent2 font-semibold">Curso intermedio (IA
                        201)</span>
                    <h3 class="font-heading text-2xl font-bold mt-2 mb-3">ChatGPT aplicado:<br>Declaraciones Juradas
                    </h3>
                    <p class="text-muted text-sm">
                        Atiende clientes 24/7 con asistentes virtuales inteligentes. Integración con WhatsApp, web y
                        redes sociales.
                    </p>
                </div>
            </article>

            <!-- Service 4 -->
            <article
                class="group card-hover bg-secondary/30 rounded-2xl overflow-hidden border border-white/5 hover:border-accent/50">
                <div class="aspect-square overflow-hidden">
                    <img src="images/servicio-4.webp" alt="Curso de Contabilidad potenciada con IA"
                        class="card-image w-full h-full object-cover transition-transform duration-500" loading="lazy"
                        decoding="async">
                </div>
                <div class="p-6 border-l-4 border-accent2">
                    <span class="text-xs uppercase tracking-wider text-accent2 font-semibold">Curso intermedio (IA
                        201)</span>
                    <h3 class="font-heading text-2xl font-bold mt-2 mb-3">Contabilidad potenciada con<br>Inteligencia
                        Artificial</h3>
                    <p class="text-muted text-sm">
                        Análisis de imágenes y video para control de calidad, seguridad y reconocimiento automático.
                    </p>
                </div>
            </article>

            <!-- Service 5 -->
            <article
                class="group card-hover bg-secondary/30 rounded-2xl overflow-hidden border border-white/5 hover:border-accent/50">
                <div class="aspect-square overflow-hidden">
                    <img src="images/servicio-5.webp" alt="Curso de ChatGPT para creación de informes con IA"
                        class="card-image w-full h-full object-cover transition-transform duration-500" loading="lazy"
                        decoding="async">
                </div>
                <div class="p-6 border-l-4 border-accent">
                    <span class="text-xs uppercase tracking-wider text-accent font-semibold">Curso Avanzado (IA
                        301)</span>
                    <h3 class="font-heading text-2xl font-bold mt-2 mb-3">ChatGPT aplicado:<br>Creando informes con IA
                    </h3>
                    <p class="text-muted text-sm">
                        Te ayudamos a identificar oportunidades de IA en tu negocio y diseñar una estrategia de
                        implementación exitosa.
                    </p>
                </div>
            </article>

            <!-- Service 6 -->
            <article
                class="group card-hover bg-secondary/30 rounded-2xl overflow-hidden border border-white/5 hover:border-accent/50">
                <div class="aspect-square overflow-hidden">
                    <img src="images/servicio-6.webp" alt="Curso sobre Ley 21.713 como Asesor Estratégico"
                        class="card-image w-full h-full object-cover transition-transform duration-500" loading="lazy"
                        decoding="async">
                </div>
                <div class="p-6 border-l-4 border-accent">
                    <span class="text-xs uppercase tracking-wider text-accent font-semibold">Curso Avanzado (IA
                        301)</span>
                    <h3 class="font-heading text-2xl font-bold mt-2 mb-3">Ley 21.713:<br>El Asesor Estratégico</h3>
                    <p class="text-muted text-sm">
                        Workshops y programas de formación para que tu equipo domine las herramientas de IA más
                        relevantes.
                    </p>
                </div>
            </article>
        </div>

        <!-- Link to Services -->
        <div class="text-center mt-12">
            <a href="servicios.php"
                class="inline-flex items-center text-accent font-semibold hover:text-white transition-colors group">
                <span>Ver todos los cursos</span>
                <i class="fas fa-arrow-right ml-2 group-hover:translate-x-2 transition-transform"
                    aria-hidden="true"></i>
            </a>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="py-24 bg-light text-primary">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <!-- Image -->
            <div class="relative order-2 lg:order-1">
                <div class="aspect-[4/3] rounded-2xl overflow-hidden shadow-2xl">
                    <img src="images/ambiente2.webp" alt="Equipo de profesionales de Datapolis"
                        class="w-full h-full object-cover" loading="lazy" decoding="async">
                </div>
                <!-- Stats Card -->
                <div class="absolute -top-6 -right-6 bg-primary text-white p-6 rounded-xl shadow-xl">
                    <p class="font-heading text-5xl font-bold gradient-text">5+</p>
                    <p class="text-sm text-muted">Años de experiencia en IA</p>
                </div>
            </div>

            <!-- Content -->
            <div class="order-1 lg:order-2">
                <p class="text-accent uppercase tracking-widest text-sm font-semibold mb-4">
                    Nuestra Historia
                </p>
                <h2 class="font-heading text-4xl sm:text-5xl font-bold mb-8 leading-tight">
                    De la academia al<br>
                    <span class="text-secondary">impacto real</span>
                </h2>
                <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                    Datapolis transforma profesionales y PyMEs mediante capacitación práctica en IA, con foco en
                    resultados medibles, casos reales del mercado chileno y un enfoque ético que pone la tecnología al
                    servicio de negocios sostenibles</p>
                <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                    Hoy somos un equipo de profesionales apasionados por hacer que la tecnología trabaje para todos.
                    Cada proyecto
                    que desarrollamos tiene un principio simple: generar valor medible y sostenible para negocios
                    reales.
                </p>

                <!-- Values -->
                <div class="grid grid-cols-2 gap-4">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 rounded-lg bg-accent/10 flex items-center justify-center">
                            <i class="fas fa-lightbulb text-accent" aria-hidden="true"></i>
                        </div>
                        <span class="font-semibold">Innovación</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 rounded-lg bg-accent/10 flex items-center justify-center">
                            <i class="fas fa-handshake text-accent" aria-hidden="true"></i>
                        </div>
                        <span class="font-semibold">Colaboración</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 rounded-lg bg-accent/10 flex items-center justify-center">
                            <i class="fas fa-chart-line text-accent" aria-hidden="true"></i>
                        </div>
                        <span class="font-semibold">Resultados</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 rounded-lg bg-accent/10 flex items-center justify-center">
                            <i class="fas fa-shield-alt text-accent" aria-hidden="true"></i>
                        </div>
                        <span class="font-semibold">Ética IA</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Banner -->
<section class="relative py-32 overflow-hidden">
    <!-- Background -->
    <div class="absolute inset-0">
        <img src="images/hero.webp" alt="Fondo decorativo Datapolis" class="w-full h-full object-cover" loading="lazy"
            decoding="async">
        <div class="absolute inset-0 bg-gradient-to-r from-primary via-primary/40 to-primary/20"></div>
    </div>

    <!-- Content -->
    <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="font-heading text-4xl sm:text-5xl lg:text-6xl font-bold mb-8">
            ¿Listo para llevar tu PyME<br>
            <span class="gradient-text">al siguiente nivel?</span>
        </h2>
        <p class="text-xl text-muted mb-12 max-w-2xl mx-auto">
            Agenda una consultoría gratuita y descubre cómo la IA puede transformar tu negocio
        </p>
        <a href="contacto.php"
            class="inline-flex items-center px-10 py-5 rounded-full gradient-bg font-bold text-lg uppercase tracking-wider hover-scale">
            <span>Comenzar Ahora</span>
            <i class="fas fa-rocket ml-3" aria-hidden="true"></i>
        </a>
    </div>
</section>

<!-- Intro Section 2 -->
<section class="py-24 bg-light text-primary relative overflow-hidden">
    <!-- Decorative Element -->
    <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-l from-accent/5 to-transparent"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <!-- Text Content -->
            <div>
                <p class="text-accent uppercase tracking-widest text-sm font-semibold mb-4">
                    Bienvenidos a Datapolis
                </p>
                <h2 class="font-heading text-4xl sm:text-5xl font-bold mb-8 leading-tight">
                    IA accesible para<br>
                    <span class="text-secondary">impulsar tu negocio</span>
                </h2>
                <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                    La Inteligencia Artificial está revolucionando la forma en que las PyMEs chilenas compiten en el
                    mercado actual. En Datapolis, ofrecemos cursos especializados diseñados para contadores,
                    administradores y emprendedores que buscan automatizar procesos, optimizar la toma de decisiones y
                    potenciar la productividad de sus negocios.
                </p>
                <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                    Nuestros programas de verano 2026 combinan teoría y práctica, enfocándose en herramientas reales
                    como ChatGPT, Excel con IA y soluciones específicas para el sector contable chileno. Desde la
                    protección de datos hasta la creación de informes automatizados, cada curso está diseñado para
                    generar resultados inmediatos en tu actividad profesional.
                </p>

            </div>

            <!-- Image -->
            <div class="relative">
                <div class="aspect-square rounded-2xl overflow-hidden shadow-2xl">
                    <img src="images/ambiente3.webp" alt="Ambiente de trabajo colaborativo en Datapolis"
                        class="w-full h-full object-cover" loading="lazy" decoding="async">
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>