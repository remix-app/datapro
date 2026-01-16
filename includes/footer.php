<?php
// Protect from direct access
defined('DATAPOLIS') or die('Acceso denegado');
?>
</main>

<!-- Footer -->
<footer class="bg-primary border-t border-white/5 relative">
    <!-- Gradient Top Border -->
    <div class="h-1 gradient-border"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
            <!-- Logo & Description -->
            <div class="lg:col-span-1">
                <a href="index.php" class="flex items-center space-x-2 mb-6" aria-label="Datapolis - Ir al inicio">
                    <img src="images/logo.webp" alt="Logo Datapolis IA" class="logo-footer" width="200" height="60"
                        loading="lazy">
                </a>
                <p class="text-muted text-sm leading-relaxed mb-6">
                    Impulsamos el crecimiento de PyMEs en Chile con soluciones de Inteligencia Artificial accesibles y
                    efectivas.
                </p>
                <!-- Social Icons -->
                <div class="flex space-x-4">
                    <a href="https://linkedin.com/company/datapolis"
                        class="w-10 h-10 rounded-full bg-secondary/50 flex items-center justify-center text-muted hover:text-accent hover:bg-secondary transition-all"
                        aria-label="LinkedIn de Datapolis" rel="noopener noreferrer" target="_blank">
                        <i class="fab fa-linkedin-in" aria-hidden="true"></i>
                    </a>
                    <a href="https://instagram.com/datapolis"
                        class="w-10 h-10 rounded-full bg-secondary/50 flex items-center justify-center text-muted hover:text-accent hover:bg-secondary transition-all"
                        aria-label="Instagram de Datapolis" rel="noopener noreferrer" target="_blank">
                        <i class="fab fa-instagram" aria-hidden="true"></i>
                    </a>
                    <a href="https://twitter.com/datapolis"
                        class="w-10 h-10 rounded-full bg-secondary/50 flex items-center justify-center text-muted hover:text-accent hover:bg-secondary transition-all"
                        aria-label="Twitter de Datapolis" rel="noopener noreferrer" target="_blank">
                        <i class="fab fa-twitter" aria-hidden="true"></i>
                    </a>
                    <a href="https://github.com/datapolis"
                        class="w-10 h-10 rounded-full bg-secondary/50 flex items-center justify-center text-muted hover:text-accent hover:bg-secondary transition-all"
                        aria-label="GitHub de Datapolis" rel="noopener noreferrer" target="_blank">
                        <i class="fab fa-github" aria-hidden="true"></i>
                    </a>
                </div>
            </div>

            <!-- Navigation Links -->
            <div>
                <h4 class="font-heading font-bold text-lg mb-6">Navegación</h4>
                <ul class="space-y-3">
                    <li>
                        <a href="index.php" class="text-muted hover:text-accent transition-colors text-sm">
                            Inicio
                        </a>
                    </li>
                    <li>
                        <a href="servicios.php" class="text-muted hover:text-accent transition-colors text-sm">
                            Servicios
                        </a>
                    </li>
                    <li>
                        <a href="servicios.php#automatizacion"
                            class="text-muted hover:text-accent transition-colors text-sm">
                            Automatización IA
                        </a>
                    </li>
                    <li>
                        <a href="servicios.php#analytics"
                            class="text-muted hover:text-accent transition-colors text-sm">
                            Analytics & Data
                        </a>
                    </li>
                    <li>
                        <a href="contacto.php" class="text-muted hover:text-accent transition-colors text-sm">
                            Contacto
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Hours -->
            <div>
                <h4 class="font-heading font-bold text-lg mb-6">Horarios de Atención</h4>
                <ul class="space-y-3 text-sm">
                    <li class="flex justify-between">
                        <span class="text-muted">Lunes - Viernes</span>
                        <span class="text-white">08:30 - 17:30</span>
                    </li>
                    <li class="flex justify-between">
                        <span class="text-muted">Sábado</span>
                        <span class="text-white">10:00 - 14:00</span>
                    </li>
                    <li class="flex justify-between">
                        <span class="text-muted">Domingo</span>
                        <span class="text-white">Cerrado</span>
                    </li>
                </ul>
                <div class="mt-6 p-4 rounded-lg bg-secondary/30 border border-accent/20">
                    <p class="text-xs text-accent">
                        <i class="fas fa-headset mr-2" aria-hidden="true"></i>
                        Soporte técnico disponible 24/7 para clientes con plan Enterprise
                    </p>
                </div>
            </div>

            <!-- Contact Info -->
            <div>
                <h4 class="font-heading font-bold text-lg mb-6">Contacto</h4>
                <ul class="space-y-4 text-sm">
                    <li class="flex items-start space-x-3">
                        <i class="fas fa-map-marker-alt text-accent mt-1" aria-hidden="true"></i>
                        <span class="text-muted">
                            Av. Providencia 1234, Of. 501<br>
                            Providencia, Santiago, Chile
                        </span>
                    </li>
                    <li class="flex items-center space-x-3">
                        <i class="fab fa-square-whatsapp text-accent" aria-hidden="true"></i>
                        <a href="https://wa.me/56912345678?text=Hola!%20Me%20interesa%20conocer%20más%20sobre%20sus%20servicios%20de%20IA"
                            class="text-muted hover:text-accent transition-colors" rel="noopener noreferrer"
                            target="_blank">
                            WhatsApp
                        </a>
                    </li>
                    <li class="flex items-center space-x-3">
                        <i class="fas fa-envelope text-accent" aria-hidden="true"></i>
                        <a href="mailto:hola@datapolis.cl" class="text-muted hover:text-accent transition-colors">
                            hola@datapolis.cl
                        </a>
                    </li>
                    <li class="flex items-center space-x-3">
                        <i class="fas fa-file-signature text-accent" aria-hidden="true"></i>
                        <a href="terminos.php" class="text-muted hover:text-accent transition-colors">
                            Términos de uso
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <br><br>

        <div class="h-0.5 gradient-border"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
            <div class="flex flex-col md:flex-row items-center justify-between text-sm text-muted">
                <p>
                    © <?php echo date('Y'); ?> Hecho en 🇨🇱 por <strong>Datapolis</strong>
                </p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="https://cuboid-ia.com" class="hover:text-accent transition-colors"
                        rel="noopener noreferrer" target="_blank">
                        Diseñado con <span style="color:#7c3aed">&#9829;</span> por <strong>Cuboid IA</strong>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>

</html>