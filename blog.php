<?php
$page_title = "Blog de IA y Tecnología | Datapolis";
$page_description = "Artículos, noticias y consejos sobre Inteligencia Artificial para empresas y profesionales en Chile.";
$current_page = "blog";
$en_page_link = "blog.php"; // Link to English version

include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="relative pt-32 pb-16 bg-primary overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0"
            style="background-image: radial-gradient(#444cf7 1px, transparent 1px); background-size: 30px 30px;"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative text-center">
        <h1 class="font-heading text-5xl sm:text-6xl font-bold mb-6">
            Blog <span class="gradient-text">Datapolis</span>
        </h1>
        <p class="text-xl text-muted max-w-2xl mx-auto mb-8">
            Insights, tendencias y guías prácticas sobre IA para el mundo real.
        </p>
    </div>
</section>

<!-- Blog Grid -->
<section class="py-24 bg-light text-primary">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Featured Article (Optional or just part of grid) -->

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Article 1 -->
            <article
                class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group flex flex-col h-full border border-gray-100">
                <div class="aspect-video overflow-hidden">
                    <img src="images/servicio-4.webp" alt="IA en PyMEs Chilenas"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                        loading="lazy">
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center space-x-2 mb-4">
                        <span
                            class="bg-accent/10 text-accent text-xs px-2 py-1 rounded-full font-semibold">Tendencias</span>
                        <span class="text-gray-400 text-xs">15 Ene, 2026</span>
                    </div>
                    <h2 class="font-heading text-xl font-bold mb-3 group-hover:text-accent transition-colors">
                        Cómo la IA está transformando las PyMEs chilenas en 2026
                    </h2>
                    <p class="text-gray-600 text-sm mb-4 flex-grow">
                        Desde la automatización de facturas hasta la atención al cliente personalizada. Descubre los
                        casos de uso más exitosos de este año y cómo tú puedes aplicarlos.
                    </p>
                    <div class="mt-auto pt-4 border-t border-gray-100 flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <div class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center">
                                <i class="fas fa-user text-gray-500 text-xs"></i>
                            </div>
                            <span class="text-xs text-gray-500 font-medium">Equipo Datapolis</span>
                        </div>
                        <a href="#" class="text-accent text-sm font-semibold hover:text-secondary">Leer más &rarr;</a>
                    </div>
                </div>
            </article>

            <!-- Article 2 -->
            <article
                class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group flex flex-col h-full border border-gray-100">
                <div class="aspect-video overflow-hidden">
                    <img src="images/servicio-1.webp" alt="Herramientas IA para Contadores"
                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                        loading="lazy">
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center space-x-2 mb-4">
                        <span
                            class="bg-accent2/10 text-accent2 text-xs px-2 py-1 rounded-full font-semibold">Herramientas</span>
                        <span class="text-gray-400 text-xs">10 Ene, 2026</span>
                    </div>
                    <h2 class="font-heading text-xl font-bold mb-3 group-hover:text-accent transition-colors">
                        5 Herramientas de IA gratuitas para Contadores
                    </h2>
                    <p class="text-gray-600 text-sm mb-4 flex-grow">
                        No necesitas gastar una fortuna para optimizar tu estudio contable. Analizamos las mejores
                        opciones gratuitas para análisis de datos y OCR.
                    </p>
                    <div class="mt-auto pt-4 border-t border-gray-100 flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <div class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center">
                                <i class="fas fa-user text-gray-500 text-xs"></i>
                            </div>
                            <span class="text-xs text-gray-500 font-medium">Ana M. (Expert)</span>
                        </div>
                        <a href="#" class="text-accent text-sm font-semibold hover:text-secondary">Leer más &rarr;</a>
                    </div>
                </div>
            </article>

            <!-- Placeholder for more content -->
            <div
                class="bg-gray-50 rounded-2xl border-2 border-dashed border-gray-200 flex flex-col items-center justify-center p-8 text-center h-full min-h-[400px]">
                <div class="w-16 h-16 bg-gray-100 rounded-full flex items-center justify-center mb-4">
                    <i class="fas fa-pen-nib text-gray-400 text-2xl"></i>
                </div>
                <h3 class="font-bold text-gray-800 mb-2">Próximamente más contenido</h3>
                <p class="text-gray-500 text-sm mb-6">Estamos preparando nuevos artículos sobre Ley 21.713 y
                    automatización.</p>
                <div class="bg-white p-4 rounded-lg shadow-sm w-full max-w-xs">
                    <p class="text-xs text-gray-400 mb-2">Suscríbete al newsletter</p>
                    <form class="flex" onsubmit="event.preventDefault();">
                        <input type="email" placeholder="Tu email"
                            class="flex-grow px-3 py-2 bg-gray-50 rounded-l-md border border-gray-200 text-sm focus:outline-none focus:border-accent">
                        <button class="bg-accent text-white px-3 py-2 rounded-r-md text-sm hover:bg-secondary"><i
                                class="fas fa-paper-plane"></i></button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Newsletter Section -->
<section class="py-16 bg-primary text-white border-t border-white/10">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h2 class="font-heading text-2xl font-bold mb-4">Mantente Actualizado</h2>
        <p class="text-muted mb-8">Recibe las últimas novedades sobre IA para empresas directamente en tu correo.</p>
        <form class="flex flex-col sm:flex-row gap-4 justify-center max-w-md mx-auto">
            <input type="email" placeholder="Ingresa tu correo electrónico"
                class="flex-grow px-6 py-3 rounded-full bg-white/10 border border-white/20 text-white placeholder-gray-400 focus:outline-none focus:border-accent focus:bg-white/20 transition-all">
            <button type="submit"
                class="px-8 py-3 rounded-full gradient-bg font-semibold hover-scale whitespace-nowrap">
                Suscribirse
            </button>
        </form>
    </div>
</section>

<?php include 'includes/footer.php'; ?>