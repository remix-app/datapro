<?php
$page_title = "Cursos de IA | Datapolis";
$page_description = "Cursos de Inteligencia Artificial para PyMEs y profesionales: Prompt Engineering, Python, Análisis de Datos y más.";
$current_page = "cursos";
$en_page_link = "courses.php"; // Link to English version

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
                Nuestros <span class="gradient-text">Cursos</span>
            </h1>
            <p class="text-xl text-muted max-w-2xl mx-auto mb-8">
                Formación práctica en Inteligencia Artificial diseñada para generar impacto inmediato en tu negocio
            </p>
            <!-- Decorative Line -->
            <div class="w-24 h-1 gradient-bg mx-auto rounded-full"></div>
        </div>
    </div>
</section>

<!-- Capacitación Content -->
<section class="py-24 bg-light text-primary">
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
                    <article
                        class="bg-white p-6 rounded-xl shadow-sm border-l-4 border-accent transition-transform hover:-translate-y-1 hover:shadow-md">
                        <h3 class="font-heading font-bold text-lg mb-2">Workshop: Prompt Engineering</h3>
                        <p class="text-gray-500 text-sm mb-2">Aprende a usar ChatGPT y herramientas IA para
                            productividad</p>
                        <div class="flex justify-between items-center mt-4">
                            <span class="text-xs text-gray-400 flex items-center"><i class="far fa-clock mr-1"
                                    aria-hidden="true"></i> 4 horas</span>
                            <p class="font-heading font-bold text-accent2">$150.000 CLP/persona</p>
                        </div>
                        <a href="contacto.php?asunto=Workshop Prompt Engineering"
                            class="inline-block mt-4 text-sm font-semibold text-accent hover:text-secondary">Más
                            información &rarr;</a>
                    </article>

                    <article
                        class="bg-white p-6 rounded-xl shadow-sm border-l-4 border-accent2 transition-transform hover:-translate-y-1 hover:shadow-md">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-heading font-bold text-lg">Bootcamp: Python para Análisis de Datos</h3>
                            <span
                                class="bg-accent/10 text-accent text-xs px-3 py-1 rounded-full font-semibold">Nuevo</span>
                        </div>
                        <p class="text-gray-500 text-sm mb-2">De cero a análisis profesional en 6 semanas</p>
                        <div class="flex justify-between items-center mt-4">
                            <span class="text-xs text-gray-400 flex items-center"><i class="far fa-clock mr-1"
                                    aria-hidden="true"></i> 24 horas (6 semanas)</span>
                            <p class="font-heading font-bold text-accent2">$450.000 CLP/persona</p>
                        </div>
                        <a href="contacto.php?asunto=Bootcamp Python"
                            class="inline-block mt-4 text-sm font-semibold text-accent hover:text-secondary">Más
                            información &rarr;</a>
                    </article>

                    <article
                        class="bg-white p-6 rounded-xl shadow-sm border-l-4 border-gray-200 transition-transform hover:-translate-y-1 hover:shadow-md">
                        <h3 class="font-heading font-bold text-lg mb-2">Programa In-Company</h3>
                        <p class="text-gray-500 text-sm mb-2">Formación personalizada para tu equipo en tus
                            instalaciones</p>
                        <div class="flex justify-between items-center mt-4">
                            <span class="text-xs text-gray-400 flex items-center"><i class="fas fa-users mr-1"
                                    aria-hidden="true"></i> Grupos de 5-15 personas</span>
                            <p class="font-heading font-bold text-accent2">Cotización personalizada</p>
                        </div>
                        <a href="contacto.php?asunto=Programa In-Company"
                            class="inline-block mt-4 text-sm font-semibold text-accent hover:text-secondary">Solicitar
                            cotización &rarr;</a>
                    </article>
                </div>
            </div>

            <div class="relative">
                <img src="images/servicio-6.webp" alt="Capacitación en Inteligencia Artificial"
                    class="rounded-2xl shadow-2xl skew-y-3 hover:skew-y-0 transition-transform duration-500"
                    loading="lazy" decoding="async">
                <div class="absolute -bottom-6 -left-6 bg-primary text-white p-6 rounded-xl shadow-xl">
                    <p class="font-heading text-4xl font-bold gradient-text">500+</p>
                    <p class="text-sm text-muted">Profesionales capacitados</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Methodology Section -->
<section class="py-24 bg-primary text-white relative">
    <!-- Decorative Element -->
    <div class="absolute top-0 left-0 w-1/3 h-full bg-gradient-to-r from-accent/5 to-transparent"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="text-center mb-16">
            <h2 class="font-heading text-3xl sm:text-4xl font-bold mb-4">Nuestra Metodología</h2>
            <p class="text-muted max-w-2xl mx-auto">Aprendizaje basado en proyectos reales y aplicación inmediata</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white/5 p-8 rounded-2xl border border-white/10 text-center">
                <div class="w-16 h-16 rounded-full bg-accent/20 flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-laptop-code text-accent text-2xl"></i>
                </div>
                <h3 class="font-bold text-xl mb-3">100% Práctico</h3>
                <p class="text-muted text-sm">Sin teoría aburrida. Desde el primer día estarás escribiendo código o
                    configurando modelos.</p>
            </div>

            <div class="bg-white/5 p-8 rounded-2xl border border-white/10 text-center">
                <div class="w-16 h-16 rounded-full bg-accent2/20 flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-briefcase text-accent2 text-2xl"></i>
                </div>
                <h3 class="font-bold text-xl mb-3">Casos Reales</h3>
                <p class="text-muted text-sm">Trabajamos con datasets y problemas reales de empresas chilenas, no
                    ejemplos de juguete.</p>
            </div>

            <div class="bg-white/5 p-8 rounded-2xl border border-white/10 text-center">
                <div class="w-16 h-16 rounded-full bg-green-500/20 flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-certificate text-green-400 text-2xl"></i>
                </div>
                <h3 class="font-bold text-xl mb-3">Certificación</h3>
                <p class="text-muted text-sm">Al finalizar y aprobar el proyecto final, recibes un certificado digital
                    validado por Datapolis.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-24 bg-light">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="font-heading text-4xl sm:text-5xl font-bold mb-8 text-primary">
            ¿Listo para aprender?
        </h2>
        <p class="text-xl text-gray-600 mb-12">
            Inscríbete hoy y asegura tu cupo para la próxima versión.
        </p>
        <a href="contacto.php"
            class="inline-flex items-center px-10 py-5 rounded-full gradient-bg font-bold text-lg uppercase tracking-wider hover-scale text-white">
            <span>Contactar Inscripciones</span>
            <i class="fas fa-paper-plane ml-3" aria-hidden="true"></i>
        </a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>