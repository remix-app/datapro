<?php
// Protect from direct access
defined('DATAPOLIS') or die('Access denied');
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
                <a href="index.php" class="flex items-center space-x-2 mb-6" aria-label="Datapolis - Go to home">
                    <img src="../images/logo.webp" alt="Datpolis AI Logo" class="logo-footer" width="200" height="60"
                        loading="lazy">
                </a>
                <p class="text-muted text-sm leading-relaxed mb-6">
                    Boosting SME growth in Chile with accessible and effective Artificial Intelligence solutions.
                </p>
                <!-- Social Icons -->
                <div class="flex space-x-4">
                    <a href="https://linkedin.com/company/datapolis"
                        class="w-10 h-10 rounded-full bg-secondary/50 flex items-center justify-center text-muted hover:text-accent hover:bg-secondary transition-all"
                        aria-label="Datapolis LinkedIn" rel="noopener noreferrer" target="_blank">
                        <i class="fab fa-linkedin-in" aria-hidden="true"></i>
                    </a>
                    <a href="https://instagram.com/datapolis"
                        class="w-10 h-10 rounded-full bg-secondary/50 flex items-center justify-center text-muted hover:text-accent hover:bg-secondary transition-all"
                        aria-label="Datapolis Instagram" rel="noopener noreferrer" target="_blank">
                        <i class="fab fa-instagram" aria-hidden="true"></i>
                    </a>
                    <a href="https://facebook.com/datapolis"
                        class="w-10 h-10 rounded-full bg-secondary/50 flex items-center justify-center text-muted hover:text-accent hover:bg-secondary transition-all"
                        aria-label="Datapolis Facebook" rel="noopener noreferrer" target="_blank">
                        <i class="fab fa-facebook-f" aria-hidden="true"></i>
                    </a>
                    <a href="https://tiktok.com/@datapolis"
                        class="w-10 h-10 rounded-full bg-secondary/50 flex items-center justify-center text-muted hover:text-accent hover:bg-secondary transition-all"
                        aria-label="Datapolis TikTok" rel="noopener noreferrer" target="_blank">
                        <i class="fab fa-tiktok" aria-hidden="true"></i>
                    </a>
                    <a href="https://github.com/datapolis"
                        class="w-10 h-10 rounded-full bg-secondary/50 flex items-center justify-center text-muted hover:text-accent hover:bg-secondary transition-all"
                        aria-label="Datapolis GitHub" rel="noopener noreferrer" target="_blank">
                        <i class="fab fa-github" aria-hidden="true"></i>
                    </a>
                </div>
            </div>

            <!-- Navigation Links -->
            <div>
                <h4 class="font-heading font-bold text-lg mb-6">Navigation</h4>
                <ul class="space-y-3">
                    <li>
                        <a href="index.php" class="text-muted hover:text-accent transition-colors text-sm">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="services.php" class="text-muted hover:text-accent transition-colors text-sm">
                            Services
                        </a>
                    </li>
                    <li>
                        <a href="services.php#automatizacion"
                            class="text-muted hover:text-accent transition-colors text-sm">
                            AI Automation
                        </a>
                    </li>
                    <li>
                        <a href="services.php#analytics" class="text-muted hover:text-accent transition-colors text-sm">
                            Analytics & Data
                        </a>
                    </li>
                    <li>
                        <a href="contact.php" class="text-muted hover:text-accent transition-colors text-sm">
                            Contact
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Hours -->
            <div>
                <h4 class="font-heading font-bold text-lg mb-6">Opening Hours</h4>
                <ul class="space-y-3 text-sm">
                    <li class="flex justify-between">
                        <span class="text-muted">Monday - Friday</span>
                        <span class="text-white">08:30 - 17:30</span>
                    </li>
                    <li class="flex justify-between">
                        <span class="text-muted">Saturday</span>
                        <span class="text-white">10:00 - 14:00</span>
                    </li>
                    <li class="flex justify-between">
                        <span class="text-muted">Sunday</span>
                        <span class="text-white">Closed</span>
                    </li>
                </ul>
                <div class="mt-6 p-4 rounded-lg bg-secondary/30 border border-accent/20">
                    <p class="text-xs text-accent">
                        <i class="fas fa-headset mr-2" aria-hidden="true"></i>
                        24/7 Support available for Enterprise plans
                    </p>
                </div>
            </div>

            <!-- Contact Info -->
            <div>
                <h4 class="font-heading font-bold text-lg mb-6">Contact</h4>
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
                        <a href="https://wa.me/56912345678?text=Hello!%20I%20am%20interested%20in%20your%20AI%20services"
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
                        <a href="terms.php" class="text-muted hover:text-accent transition-colors">
                            Terms of Use
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
                    ©
                    <?php echo date('Y'); ?> Made in 🇨🇱 by <strong>Datapolis</strong>
                </p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="https://cuboid-ia.com" class="hover:text-accent transition-colors"
                        rel="noopener noreferrer" target="_blank">
                        Designed with <span style="color:#7c3aed">&#9829;</span> by <strong>Cuboid IA</strong>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>

</html>