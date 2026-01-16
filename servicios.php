<?php
$page_title = "Servicios | Datapolis - Soluciones de IA para PyMEs";
$page_description = "Explora nuestros servicios de Inteligencia Artificial: Automatización, Analytics, Chatbots, Visión Computacional, Consultoría y Capacitación.";
$current_page = "servicios";

include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="relative pt-32 pb-16 bg-primary overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0"
            style="background-image: url('data:image/svg+xml,%3Csvg width=&quot;60&quot; height=&quot;60&quot; viewBox=&quot;0 0 60 60&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;%3E%3Cg fill=&quot;none&quot; fill-rule=&quot;evenodd&quot;%3E%3Cg fill=&quot;%2300d4ff&quot; fill-opacity=&quot;0.4&quot;%3E%3Cpath d=&quot;M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z&quot;/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');">
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="text-center">
            <h1 class="font-heading text-5xl sm:text-6xl lg:text-7xl font-bold mb-6">
                Nuestros <span class="gradient-text">Servicios</span>
            </h1>
            <p class="text-xl text-muted max-w-2xl mx-auto mb-8">
                Soluciones de Inteligencia Artificial diseñadas para las necesidades específicas de pequeñas y medianas
                empresas
            </p>
            <!-- Decorative Line -->
            <div class="w-24 h-1 gradient-bg mx-auto rounded-full"></div>
        </div>
    </div>
</section>

<!-- Sticky Navigation -->
<nav class="sticky top-20 z-40 bg-secondary/90 backdrop-blur-lg border-y border-white/5"
    aria-label="Navegación de servicios">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-center space-x-2 sm:space-x-8 py-4 overflow-x-auto">
            <a href="#automatizacion"
                class="text-sm font-medium text-muted hover:text-accent transition-colors whitespace-nowrap px-4 py-2 rounded-full hover:bg-white/5">
                Automatización
            </a>
            <a href="#analytics"
                class="text-sm font-medium text-muted hover:text-accent transition-colors whitespace-nowrap px-4 py-2 rounded-full hover:bg-white/5">
                Analytics
            </a>
            <a href="#chatbots"
                class="text-sm font-medium text-muted hover:text-accent transition-colors whitespace-nowrap px-4 py-2 rounded-full hover:bg-white/5">
                Chatbots
            </a>
            <a href="#vision"
                class="text-sm font-medium text-muted hover:text-accent transition-colors whitespace-nowrap px-4 py-2 rounded-full hover:bg-white/5">
                Visión IA
            </a>
            <a href="#consultoria"
                class="text-sm font-medium text-muted hover:text-accent transition-colors whitespace-nowrap px-4 py-2 rounded-full hover:bg-white/5">
                Consultoría
            </a>
            <a href="#capacitacion"
                class="text-sm font-medium text-muted hover:text-accent transition-colors whitespace-nowrap px-4 py-2 rounded-full hover:bg-white/5">
                Capacitación
            </a>
        </div>
    </div>
</nav>

<!-- Automatización Section -->
<section id="automatizacion" class="py-24 bg-light text-primary">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div>
                <div class="flex items-center space-x-3 mb-4">
                    <div class="w-12 h-12 rounded-xl gradient-bg flex items-center justify-center">
                        <i class="fas fa-robot text-white text-xl" aria-hidden="true"></i>
                    </div>
                    <span class="text-accent uppercase tracking-widest text-sm font-semibold">RPA + IA</span>
                </div>
                <h2 class="font-heading text-4xl sm:text-5xl font-bold mb-6">
                    Automatización <span class="text-secondary">Inteligente</span>
                </h2>
                <p class="text-lg text-gray-600 mb-8">
                    Liberamos a tu equipo de tareas repetitivas con bots inteligentes que aprenden y mejoran con el
                    tiempo.
                </p>

                <!-- Service Items -->
                <div class="space-y-6">
                    <article class="bg-white p-6 rounded-xl shadow-sm border-l-4 border-accent">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-heading font-bold text-lg">Automatización de Procesos (RPA)</h3>
                            <span
                                class="bg-accent/10 text-accent text-xs px-3 py-1 rounded-full font-semibold">Popular</span>
                        </div>
                        <p class="text-gray-500 text-sm mb-2">Bots que replican acciones humanas en sistemas
                            empresariales</p>
                        <p class="font-heading font-bold text-accent2">Desde $800.000 CLP/mes</p>
                    </article>

                    <article class="bg-white p-6 rounded-xl shadow-sm border-l-4 border-accent2">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-heading font-bold text-lg">Procesamiento Inteligente de Documentos</h3>
                            <span
                                class="bg-accent2/10 text-accent2 text-xs px-3 py-1 rounded-full font-semibold">Nuevo</span>
                        </div>
                        <p class="text-gray-500 text-sm mb-2">OCR avanzado + NLP para extraer datos de facturas,
                            contratos y formularios</p>
                        <p class="font-heading font-bold text-accent2">Desde $600.000 CLP/mes</p>
                    </article>

                    <article class="bg-white p-6 rounded-xl shadow-sm border-l-4 border-gray-200">
                        <h3 class="font-heading font-bold text-lg mb-2">Automatización de Email & Respuestas</h3>
                        <p class="text-gray-500 text-sm mb-2">Clasificación automática y respuestas inteligentes a
                            consultas frecuentes</p>
                        <p class="font-heading font-bold text-accent2">Desde $400.000 CLP/mes</p>
                    </article>
                </div>
            </div>

            <div class="relative">
                <img src="images/servicio-1.webp" alt="Automatización Inteligente con IA" class="rounded-2xl shadow-2xl"
                    loading="lazy" decoding="async">
                <div class="absolute -bottom-6 -left-6 bg-primary text-white p-6 rounded-xl shadow-xl">
                    <p class="font-heading text-4xl font-bold text-accent">70%</p>
                    <p class="text-sm text-muted">Reducción de tiempo</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Analytics Section -->
<section id="analytics" class="py-24 bg-primary">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div class="order-2 lg:order-1 relative">
                <img src="images/servicio-2.webp" alt="Analytics y Data Science" class="rounded-2xl shadow-2xl"
                    loading="lazy" decoding="async">
                <div class="absolute -top-6 -right-6 bg-light text-primary p-6 rounded-xl shadow-xl">
                    <p class="font-heading text-4xl font-bold text-accent2">3x</p>
                    <p class="text-sm text-gray-500">Mejores decisiones</p>
                </div>
            </div>

            <div class="order-1 lg:order-2">
                <div class="flex items-center space-x-3 mb-4">
                    <div class="w-12 h-12 rounded-xl bg-accent2 flex items-center justify-center">
                        <i class="fas fa-chart-pie text-white text-xl" aria-hidden="true"></i>
                    </div>
                    <span class="text-accent2 uppercase tracking-widest text-sm font-semibold">Data Science</span>
                </div>
                <h2 class="font-heading text-4xl sm:text-5xl font-bold mb-6">
                    Analytics & <span class="gradient-text">Insights</span>
                </h2>
                <p class="text-lg text-muted mb-8">
                    Transforma datos en decisiones estratégicas con dashboards interactivos y modelos predictivos.
                </p>

                <!-- Service Items -->
                <div class="space-y-6">
                    <article class="bg-secondary/50 p-6 rounded-xl border border-white/10">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-heading font-bold text-lg">Dashboards Ejecutivos</h3>
                            <span
                                class="bg-accent/20 text-accent text-xs px-3 py-1 rounded-full font-semibold">Popular</span>
                        </div>
                        <p class="text-muted text-sm mb-2">Visualización en tiempo real de KPIs y métricas de negocio
                        </p>
                        <p class="font-heading font-bold text-accent">Desde $500.000 CLP/mes</p>
                    </article>

                    <article class="bg-secondary/50 p-6 rounded-xl border border-white/10">
                        <h3 class="font-heading font-bold text-lg mb-2">Modelos Predictivos</h3>
                        <p class="text-muted text-sm mb-2">Predicción de demanda, churn, y comportamiento de clientes
                        </p>
                        <p class="font-heading font-bold text-accent">Desde $1.200.000 CLP/proyecto</p>
                    </article>

                    <article class="bg-secondary/50 p-6 rounded-xl border border-white/10">
                        <h3 class="font-heading font-bold text-lg mb-2">Integración de Datos</h3>
                        <p class="text-muted text-sm mb-2">Unificación de fuentes: ERP, CRM, eCommerce, redes sociales
                        </p>
                        <p class="font-heading font-bold text-accent">Desde $800.000 CLP/proyecto</p>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Chatbots Section -->
<section id="chatbots" class="py-24 bg-light text-primary">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div>
                <div class="flex items-center space-x-3 mb-4">
                    <div class="w-12 h-12 rounded-xl gradient-bg flex items-center justify-center">
                        <i class="fas fa-comments text-white text-xl" aria-hidden="true"></i>
                    </div>
                    <span class="text-accent uppercase tracking-widest text-sm font-semibold">NLP & Conversational
                        AI</span>
                </div>
                <h2 class="font-heading text-4xl sm:text-5xl font-bold mb-6">
                    Chatbots & <span class="text-secondary">Asistentes IA</span>
                </h2>
                <p class="text-lg text-gray-600 mb-8">
                    Atiende a tus clientes 24/7 con asistentes virtuales que entienden el contexto y resuelven consultas
                    de forma natural.
                </p>

                <!-- Service Items -->
                <div class="space-y-6">
                    <article class="bg-white p-6 rounded-xl shadow-sm border-l-4 border-accent">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-heading font-bold text-lg">Chatbot WhatsApp Business</h3>
                            <span
                                class="bg-green-100 text-green-600 text-xs px-3 py-1 rounded-full font-semibold">Recomendado</span>
                        </div>
                        <p class="text-gray-500 text-sm mb-2">Integración directa con WhatsApp para atención
                            automatizada</p>
                        <p class="font-heading font-bold text-accent2">Desde $450.000 CLP/mes</p>
                    </article>

                    <article class="bg-white p-6 rounded-xl shadow-sm border-l-4 border-accent2">
                        <h3 class="font-heading font-bold text-lg mb-2">Asistente Web con GPT</h3>
                        <p class="text-gray-500 text-sm mb-2">Widget inteligente para tu sitio web con IA generativa</p>
                        <p class="font-heading font-bold text-accent2">Desde $350.000 CLP/mes</p>
                    </article>

                    <article class="bg-white p-6 rounded-xl shadow-sm border-l-4 border-gray-200">
                        <h3 class="font-heading font-bold text-lg mb-2">Bot Multicanal Enterprise</h3>
                        <p class="text-gray-500 text-sm mb-2">Solución unificada para WhatsApp, Instagram, Messenger y
                            web</p>
                        <p class="font-heading font-bold text-accent2">Desde $900.000 CLP/mes</p>
                    </article>
                </div>
            </div>

            <div class="relative">
                <img src="images/servicio-3.webp" alt="Chatbots y Asistentes de IA" class="rounded-2xl shadow-2xl"
                    loading="lazy" decoding="async">
                <div class="absolute -bottom-6 -right-6 bg-primary text-white p-6 rounded-xl shadow-xl">
                    <p class="font-heading text-4xl font-bold text-accent">24/7</p>
                    <p class="text-sm text-muted">Disponibilidad total</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Vision Section -->
<section id="vision" class="py-24 bg-primary">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div class="order-2 lg:order-1 relative">
                <img src="images/servicio-4.webp" alt="Visión Computacional con IA" class="rounded-2xl shadow-2xl"
                    loading="lazy" decoding="async">
            </div>

            <div class="order-1 lg:order-2">
                <div class="flex items-center space-x-3 mb-4">
                    <div class="w-12 h-12 rounded-xl bg-accent2 flex items-center justify-center">
                        <i class="fas fa-eye text-white text-xl" aria-hidden="true"></i>
                    </div>
                    <span class="text-accent2 uppercase tracking-widest text-sm font-semibold">Computer Vision</span>
                </div>
                <h2 class="font-heading text-4xl sm:text-5xl font-bold mb-6">
                    Visión <span class="gradient-text">Computacional</span>
                </h2>
                <p class="text-lg text-muted mb-8">
                    Análisis inteligente de imágenes y video para control de calidad, seguridad y automatización
                    industrial.
                </p>

                <!-- Service Items -->
                <div class="space-y-6">
                    <article class="bg-secondary/50 p-6 rounded-xl border border-white/10">
                        <h3 class="font-heading font-bold text-lg mb-2">Control de Calidad Visual</h3>
                        <p class="text-muted text-sm mb-2">Detección automática de defectos en líneas de producción</p>
                        <p class="font-heading font-bold text-accent">Desde $2.000.000 CLP/proyecto</p>
                    </article>

                    <article class="bg-secondary/50 p-6 rounded-xl border border-white/10">
                        <h3 class="font-heading font-bold text-lg mb-2">Reconocimiento de Productos</h3>
                        <p class="text-muted text-sm mb-2">Inventario automático y seguimiento de stock visual</p>
                        <p class="font-heading font-bold text-accent">Desde $1.500.000 CLP/proyecto</p>
                    </article>

                    <article class="bg-secondary/50 p-6 rounded-xl border border-white/10">
                        <h3 class="font-heading font-bold text-lg mb-2">Análisis de Video en Tiempo Real</h3>
                        <p class="text-muted text-sm mb-2">Monitoreo de seguridad y conteo de personas</p>
                        <p class="font-heading font-bold text-accent">Desde $1.800.000 CLP/proyecto</p>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Consultoría Section -->
<section id="consultoria" class="py-24 bg-gradient-to-br from-secondary to-primary">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <div class="inline-flex items-center justify-center w-16 h-16 rounded-2xl gradient-bg mb-6">
                <i class="fas fa-project-diagram text-white text-2xl" aria-hidden="true"></i>
            </div>
            <h2 class="font-heading text-4xl sm:text-5xl font-bold mb-6">
                Consultoría en <span class="gradient-text">Machine Learning</span>
            </h2>
            <p class="text-xl text-muted max-w-2xl mx-auto">
                Te ayudamos a identificar las mejores oportunidades de IA para tu negocio y diseñar una estrategia de
                implementación exitosa
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <article
                class="bg-white/5 backdrop-blur-sm p-8 rounded-2xl border border-white/10 text-center hover:border-accent/50 transition-all">
                <div class="w-16 h-16 rounded-full bg-accent/20 flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-search text-accent text-2xl" aria-hidden="true"></i>
                </div>
                <h3 class="font-heading font-bold text-xl mb-4">Diagnóstico IA</h3>
                <p class="text-muted text-sm mb-6">Evaluación de madurez digital y oportunidades de automatización</p>
                <p class="font-heading font-bold text-2xl text-accent">$500.000 CLP</p>
                <p class="text-xs text-muted mt-1">Una sesión de 4 horas</p>
            </article>

            <article class="bg-accent/10 backdrop-blur-sm p-8 rounded-2xl border border-accent text-center relative">
                <span
                    class="absolute -top-3 left-1/2 transform -translate-x-1/2 bg-accent text-primary text-xs px-4 py-1 rounded-full font-bold">MÁS
                    POPULAR</span>
                <div class="w-16 h-16 rounded-full gradient-bg flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-road text-white text-2xl" aria-hidden="true"></i>
                </div>
                <h3 class="font-heading font-bold text-xl mb-4">Roadmap Estratégico</h3>
                <p class="text-muted text-sm mb-6">Plan detallado de implementación IA a 12 meses con priorización</p>
                <p class="font-heading font-bold text-2xl text-accent">$1.800.000 CLP</p>
                <p class="text-xs text-muted mt-1">Incluye 3 talleres</p>
            </article>

            <article
                class="bg-white/5 backdrop-blur-sm p-8 rounded-2xl border border-white/10 text-center hover:border-accent/50 transition-all">
                <div class="w-16 h-16 rounded-full bg-accent2/20 flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-users-cog text-accent2 text-2xl" aria-hidden="true"></i>
                </div>
                <h3 class="font-heading font-bold text-xl mb-4">Acompañamiento</h3>
                <p class="text-muted text-sm mb-6">Mentoría continua para tu equipo durante la implementación</p>
                <p class="font-heading font-bold text-2xl text-accent">$800.000 CLP/mes</p>
                <p class="text-xs text-muted mt-1">Mínimo 3 meses</p>
            </article>
        </div>
    </div>
</section>

<!-- Capacitación Section -->
<section id="capacitacion" class="py-24 bg-light text-primary">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div>
                <div class="flex items-center space-x-3 mb-4">
                    <div class="w-12 h-12 rounded-xl bg-accent2 flex items-center justify-center">
                        <i class="fas fa-graduation-cap text-white text-xl" aria-hidden="true"></i>
                    </div>
                    <span class="text-accent2 uppercase tracking-widest text-sm font-semibold">Educación Continua</span>
                </div>
                <h2 class="font-heading text-4xl sm:text-5xl font-bold mb-6">
                    Capacitación en <span class="text-secondary">IA & Data</span>
                </h2>
                <p class="text-lg text-gray-600 mb-8">
                    Potencia las habilidades de tu equipo con programas de formación prácticos y actualizados.
                </p>

                <!-- Course Items -->
                <div class="space-y-6">
                    <article class="bg-white p-6 rounded-xl shadow-sm border-l-4 border-accent">
                        <h3 class="font-heading font-bold text-lg mb-2">Workshop: Prompt Engineering</h3>
                        <p class="text-gray-500 text-sm mb-2">Aprende a usar ChatGPT y herramientas IA para
                            productividad</p>
                        <div class="flex justify-between items-center">
                            <span class="text-xs text-gray-400"><i class="far fa-clock mr-1" aria-hidden="true"></i> 4
                                horas</span>
                            <p class="font-heading font-bold text-accent2">$150.000 CLP/persona</p>
                        </div>
                    </article>

                    <article class="bg-white p-6 rounded-xl shadow-sm border-l-4 border-accent2">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-heading font-bold text-lg">Bootcamp: Python para Análisis de Datos</h3>
                            <span
                                class="bg-accent/10 text-accent text-xs px-3 py-1 rounded-full font-semibold">Nuevo</span>
                        </div>
                        <p class="text-gray-500 text-sm mb-2">De cero a análisis profesional en 6 semanas</p>
                        <div class="flex justify-between items-center">
                            <span class="text-xs text-gray-400"><i class="far fa-clock mr-1" aria-hidden="true"></i> 24
                                horas (6 semanas)</span>
                            <p class="font-heading font-bold text-accent2">$450.000 CLP/persona</p>
                        </div>
                    </article>

                    <article class="bg-white p-6 rounded-xl shadow-sm border-l-4 border-gray-200">
                        <h3 class="font-heading font-bold text-lg mb-2">Programa In-Company</h3>
                        <p class="text-gray-500 text-sm mb-2">Formación personalizada para tu equipo en tus
                            instalaciones</p>
                        <div class="flex justify-between items-center">
                            <span class="text-xs text-gray-400"><i class="fas fa-users mr-1" aria-hidden="true"></i>
                                Grupos de 5-15 personas</span>
                            <p class="font-heading font-bold text-accent2">Cotización personalizada</p>
                        </div>
                    </article>
                </div>
            </div>

            <div class="relative">
                <img src="images/servicio-6.webp" alt="Capacitación en Inteligencia Artificial"
                    class="rounded-2xl shadow-2xl" loading="lazy" decoding="async">
                <div class="absolute -bottom-6 -left-6 bg-primary text-white p-6 rounded-xl shadow-xl">
                    <p class="font-heading text-4xl font-bold gradient-text">500+</p>
                    <p class="text-sm text-muted">Profesionales capacitados</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-24 bg-primary">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="font-heading text-4xl sm:text-5xl font-bold mb-8">
            ¿No sabes por dónde empezar?
        </h2>
        <p class="text-xl text-muted mb-12">
            Agenda una consultoría gratuita de 30 minutos y conversemos sobre las necesidades de tu negocio
        </p>
        <a href="contacto.php"
            class="inline-flex items-center px-10 py-5 rounded-full gradient-bg font-bold text-lg uppercase tracking-wider hover-scale">
            <span>Agendar Consultoría Gratis</span>
            <i class="fas fa-calendar-check ml-3" aria-hidden="true"></i>
        </a>

        <p class="text-sm text-muted mt-8">
            <i class="fas fa-info-circle mr-1" aria-hidden="true"></i>
            Todos los precios están en CLP y no incluyen IVA. Aplican condiciones.
        </p>
    </div>
</section>

<?php include 'includes/footer.php'; ?>