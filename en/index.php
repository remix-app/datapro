<?php
$page_title = "Datapolis | Artificial Intelligence for SMEs";
$page_description = "Datapolis - AI Solutions designed to boost growth for SMEs in Chile. Automation, Analytics, Chatbots and more.";
$current_page = "home";
$es_page_link = "index.php"; // Link back to Spanish version

include '../includes/header_en.php';
?>

<!-- Hero Section -->
<section class="relative min-h-screen flex items-center justify-center overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0">
        <img src="../images/hero.webp" alt="Datapolis - AI for SMEs" class="w-full h-full object-cover" loading="eager"
            decoding="async" fetchpriority="high">
        <div class="absolute inset-0 bg-gradient-to-r from-primary via-primary/50 to-primary/20"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-primary via-transparent to-transparent"></div>
    </div>

    <!-- Content -->
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32 text-center">
        <!-- Pretitle -->
        <p class="text-accent uppercase tracking-[0.3em] text-sm font-medium mb-6 float-animation">
            <i class="fas fa-map-marker-alt mr-2" aria-hidden="true"></i> Santiago & All of Chile
        </p>

        <!-- Main Title -->
        <h1 class="font-heading text-5xl sm:text-6xl lg:text-7xl font-bold leading-tight mb-8">
            Transforming SMEs with<br>
            <span class="gradient-text">Artificial Intelligence</span>
        </h1>

        <!-- Subtitle -->
        <p class="text-xl sm:text-2xl text-muted max-w-3xl mx-auto mb-12">
            Automation <span class="text-accent">•</span>
            Analytics <span class="text-accent">•</span>
            Chatbots <span class="text-accent">•</span>
            Machine Learning
        </p>

        <!-- CTAs -->
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="services.php"
                class="group inline-flex items-center px-8 py-4 rounded-full border-2 border-white/30 text-white font-semibold hover:border-accent hover:text-accent transition-all">
                <span>View Services</span>
                <i class="fas fa-arrow-down ml-2 group-hover:translate-y-1 transition-transform" aria-hidden="true"></i>
            </a>
            <a href="contact.php"
                class="inline-flex items-center px-8 py-4 rounded-full gradient-bg font-semibold hover-scale">
                <span>Contact Us</span>
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
                    Welcome to Datapolis
                </p>
                <h2 class="font-heading text-4xl sm:text-5xl font-bold mb-8 leading-tight">
                    Accessible AI to<br>
                    <span class="text-secondary">boost your business</span>
                </h2>
                <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                    At Datapolis, we believe Artificial Intelligence shouldn't be exclusive to large corporations.
                    Our mission is to democratize access to advanced technologies, allowing Chilean SMEs to compete on
                    equal ground.
                </p>
                <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                    We develop custom solutions that automate processes, extract insights from your data, and improve
                    customer experience.
                    All with a practical approach and measurable ROI.
                </p>

                <!-- Stats -->
                <div class="flex flex-wrap items-center gap-8 py-6 border-t border-b border-gray-200">
                    <div class="text-center">
                        <p class="font-heading text-4xl font-bold text-accent2">5+</p>
                        <p class="text-sm text-gray-500">Years Exp</p>
                    </div>
                    <div class="w-px h-12 bg-gray-200"></div>
                    <div class="text-center">
                        <p class="font-heading text-4xl font-bold text-accent2">40%</p>
                        <p class="text-sm text-gray-500">Avg Savings</p>
                    </div>
                    <div class="w-px h-12 bg-gray-200"></div>
                    <div class="text-center">
                        <p class="font-heading text-4xl font-bold text-accent2">100%</p>
                        <p class="text-sm text-gray-500">Satisfaction</p>
                    </div>
                </div>
            </div>

            <!-- Image -->
            <div class="relative">
                <div class="aspect-square rounded-2xl overflow-hidden shadow-2xl">
                    <img src="../images/ambiente.webp" alt="Datapolis Team working on AI solutions"
                        class="w-full h-full object-cover" loading="lazy" decoding="async">
                </div>
                <!-- Floating Card -->
                <div class="absolute -bottom-6 -left-6 bg-white p-6 rounded-xl shadow-xl border-l-4 border-accent">
                    <div class="flex items-center space-x-3">
                        <div class="w-12 h-12 rounded-full gradient-bg flex items-center justify-center">
                            <i class="fas fa-check text-white text-lg" aria-hidden="true"></i>
                        </div>
                        <div>
                            <p class="font-heading font-bold text-primary">Certified</p>
                            <p class="text-sm text-gray-500">B Corp</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="py-24 bg-primary relative" id="services">
    <!-- Decorative Line -->
    <div class="w-24 h-1 gradient-bg mx-auto mb-16 rounded-full"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="text-center mb-16">
            <h2 class="font-heading text-4xl sm:text-5xl lg:text-6xl font-bold mb-6">
                Summer <span class="gradient-text">Courses 2026</span>
            </h2>
            <p class="text-xl text-muted max-w-2xl mx-auto">
                Artificial Intelligence solutions applied to Accounting and Chilean SMEs
            </p>
        </div>

        <!-- Services Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-8">
            <!-- Service 1 -->
            <article
                class="group card-hover bg-secondary/30 rounded-2xl overflow-hidden border border-white/5 hover:border-accent/50">
                <div class="aspect-square overflow-hidden">
                    <img src="../images/servicio-1.webp" alt="Data protection course with ChatGPT"
                        class="card-image w-full h-full object-cover transition-transform duration-500" loading="lazy"
                        decoding="async">
                </div>
                <div class="p-6 border-l-4 border-accent">
                    <span class="text-xs uppercase tracking-wider text-accent font-semibold">Introductory Course (AI
                        101)</span>
                    <h3 class="font-heading text-2xl font-bold mt-2 mb-3">Data Protection<br>when working with ChatGPT
                    </h3>
                    <p class="text-muted text-sm">
                        Automate repetitive processes with intelligent bots. Reduce errors and free up your team for
                        higher-value tasks.
                    </p>
                </div>
            </article>

            <!-- Service 2 -->
            <article
                class="group card-hover bg-secondary/30 rounded-2xl overflow-hidden border border-white/5 hover:border-accent/50">
                <div class="aspect-square overflow-hidden">
                    <img src="../images/servicio-2.webp" alt="Excel enabled for ChatGPT course"
                        class="card-image w-full h-full object-cover transition-transform duration-500" loading="lazy"
                        decoding="async">
                </div>
                <div class="p-6 border-l-4 border-accent">
                    <span class="text-xs uppercase tracking-wider text-accent font-semibold">Introductory Course (AI
                        101)</span>
                    <h3 class="font-heading text-2xl font-bold mt-2 mb-3">Enabling Excel to<br>work with ChatGPT</h3>
                    <p class="text-muted text-sm">
                        Transform your data into strategic decisions. Interactive dashboards and ML-powered predictions.
                    </p>
                </div>
            </article>

            <!-- Service 3 -->
            <article
                class="group card-hover bg-secondary/30 rounded-2xl overflow-hidden border border-white/5 hover:border-accent/50">
                <div class="aspect-square overflow-hidden">
                    <img src="../images/servicio-3.webp" alt="ChatGPT applied to Tax Declarations course"
                        class="card-image w-full h-full object-cover transition-transform duration-500" loading="lazy"
                        decoding="async">
                </div>
                <div class="p-6 border-l-4 border-accent2">
                    <span class="text-xs uppercase tracking-wider text-accent2 font-semibold">Intermediate Course (AI
                        201)</span>
                    <h3 class="font-heading text-2xl font-bold mt-2 mb-3">Applied ChatGPT:<br>Tax Declarations</h3>
                    <p class="text-muted text-sm">
                        Serve customers 24/7 with intelligent virtual assistants. Integration with WhatsApp, web, and
                        social media.
                    </p>
                </div>
            </article>

            <!-- Service 4 -->
            <article
                class="group card-hover bg-secondary/30 rounded-2xl overflow-hidden border border-white/5 hover:border-accent/50">
                <div class="aspect-square overflow-hidden">
                    <img src="../images/servicio-4.webp" alt="AI-powered Accounting course"
                        class="card-image w-full h-full object-cover transition-transform duration-500" loading="lazy"
                        decoding="async">
                </div>
                <div class="p-6 border-l-4 border-accent2">
                    <span class="text-xs uppercase tracking-wider text-accent2 font-semibold">Intermediate Course (AI
                        201)</span>
                    <h3 class="font-heading text-2xl font-bold mt-2 mb-3">Accounting powered by<br>Artificial
                        Intelligence</h3>
                    <p class="text-muted text-sm">
                        Image and video analysis for quality control, security, and automated recognition.
                    </p>
                </div>
            </article>

            <!-- Service 5 -->
            <article
                class="group card-hover bg-secondary/30 rounded-2xl overflow-hidden border border-white/5 hover:border-accent/50">
                <div class="aspect-square overflow-hidden">
                    <img src="../images/servicio-5.webp" alt="ChatGPT for AI reporting course"
                        class="card-image w-full h-full object-cover transition-transform duration-500" loading="lazy"
                        decoding="async">
                </div>
                <div class="p-6 border-l-4 border-accent">
                    <span class="text-xs uppercase tracking-wider text-accent font-semibold">Advanced Course (AI
                        301)</span>
                    <h3 class="font-heading text-2xl font-bold mt-2 mb-3">Applied ChatGPT:<br>Creating Reports with AI
                    </h3>
                    <p class="text-muted text-sm">
                        We help you identify AI opportunities in your business and design a successful implementation
                        strategy.
                    </p>
                </div>
            </article>

            <!-- Service 6 -->
            <article
                class="group card-hover bg-secondary/30 rounded-2xl overflow-hidden border border-white/5 hover:border-accent/50">
                <div class="aspect-square overflow-hidden">
                    <img src="../images/servicio-6.webp" alt="Strategic Advisor Law 21.713 course"
                        class="card-image w-full h-full object-cover transition-transform duration-500" loading="lazy"
                        decoding="async">
                </div>
                <div class="p-6 border-l-4 border-accent">
                    <span class="text-xs uppercase tracking-wider text-accent font-semibold">Advanced Course (AI
                        301)</span>
                    <h3 class="font-heading text-2xl font-bold mt-2 mb-3">Law 21.713:<br>The Strategic Advisor</h3>
                    <p class="text-muted text-sm">
                        Workshops and training programs for your team to master the most relevant AI tools.
                    </p>
                </div>
            </article>
        </div>

        <!-- Link to Services -->
        <div class="text-center mt-12">
            <a href="services.php"
                class="inline-flex items-center text-accent font-semibold hover:text-white transition-colors group">
                <span>View all courses</span>
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
                    <img src="../images/ambiente2.webp" alt="Datapolis professional team"
                        class="w-full h-full object-cover" loading="lazy" decoding="async">
                </div>
                <!-- Stats Card -->
                <div class="absolute -top-6 -right-6 bg-primary text-white p-6 rounded-xl shadow-xl">
                    <p class="font-heading text-5xl font-bold gradient-text">5+</p>
                    <p class="text-sm text-muted">Years of AI Experience</p>
                </div>
            </div>

            <!-- Content -->
            <div class="order-1 lg:order-2">
                <p class="text-accent uppercase tracking-widest text-sm font-semibold mb-4">
                    Our History
                </p>
                <h2 class="font-heading text-4xl sm:text-5xl font-bold mb-8 leading-tight">
                    From academia to<br>
                    <span class="text-secondary">real impact</span>
                </h2>
                <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                    Datapolis transforms professionals and SMEs through practical AI training, focusing on measurable
                    results,
                    real cases from the Chilean market, and an ethical approach that puts technology in service of
                    sustainable businesses.
                </p>
                <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                    Today we are a team of professionals passionate about making technology work for everyone.
                    Every project we develop has a simple principle: generate measurable and sustainable value for real
                    businesses.
                </p>

                <!-- Values -->
                <div class="grid grid-cols-2 gap-4">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 rounded-lg bg-accent/10 flex items-center justify-center">
                            <i class="fas fa-lightbulb text-accent" aria-hidden="true"></i>
                        </div>
                        <span class="font-semibold">Innovation</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 rounded-lg bg-accent/10 flex items-center justify-center">
                            <i class="fas fa-handshake text-accent" aria-hidden="true"></i>
                        </div>
                        <span class="font-semibold">Collaboration</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 rounded-lg bg-accent/10 flex items-center justify-center">
                            <i class="fas fa-chart-line text-accent" aria-hidden="true"></i>
                        </div>
                        <span class="font-semibold">Results</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 rounded-lg bg-accent/10 flex items-center justify-center">
                            <i class="fas fa-shield-alt text-accent" aria-hidden="true"></i>
                        </div>
                        <span class="font-semibold">AI Ethics</span>
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
        <img src="../images/hero.webp" alt="Datapolis decorative background" class="w-full h-full object-cover"
            loading="lazy" decoding="async">
        <div class="absolute inset-0 bg-gradient-to-r from-primary via-primary/40 to-primary/20"></div>
    </div>

    <!-- Content -->
    <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="font-heading text-4xl sm:text-5xl lg:text-6xl font-bold mb-8">
            Ready to take your SME<br>
            <span class="gradient-text">to the next level?</span>
        </h2>
        <p class="text-xl text-muted mb-12 max-w-2xl mx-auto">
            Book a free consultation and discover how AI can transform your business
        </p>
        <a href="contact.php"
            class="inline-flex items-center px-10 py-5 rounded-full gradient-bg font-bold text-lg uppercase tracking-wider hover-scale">
            <span>Start Now</span>
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
                    Welcome to Datapolis
                </p>
                <h2 class="font-heading text-4xl sm:text-5xl font-bold mb-8 leading-tight">
                    Accessible AI to<br>
                    <span class="text-secondary">boost your business</span>
                </h2>
                <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                    Artificial Intelligence is revolutionizing how Chilean SMEs compete in today's market.
                    At Datapolis, we offer specialized courses designed for accountants, administrators, and
                    entrepreneurs seeking to automate processes,
                    optimize decision-making, and boost their business productivity.
                </p>
                <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                    Our Summer 2026 programs combine theory and practice, focusing on real tools like ChatGPT, Excel
                    with AI, and specific solutions for the Chilean accounting sector.
                    From data protection to automated report creation, every course is designed to generate immediate
                    results in your professional activity.
                </p>

            </div>

            <!-- Image -->
            <div class="relative">
                <div class="aspect-square rounded-2xl overflow-hidden shadow-2xl">
                    <img src="../images/ambiente3.webp" alt="Collaborative work environment at Datapolis"
                        class="w-full h-full object-cover" loading="lazy" decoding="async">
                </div>
            </div>
        </div>
    </div>
</section>

<?php include '../includes/footer_en.php'; ?>