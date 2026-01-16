<?php
$page_title = "Services | Datapolis - AI Solutions for SMEs";
$page_description = "Explore our Artificial Intelligence services: Automation, Analytics, Chatbots, Computer Vision, Consulting, and Training.";
$current_page = "services";
$es_page_link = "servicios.php";

include '../includes/header_en.php';
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
                Our <span class="gradient-text">Services</span>
            </h1>
            <p class="text-xl text-muted max-w-2xl mx-auto mb-8">
                Artificial Intelligence solutions designed for the specific needs of small and medium-sized enterprises
            </p>
            <!-- Decorative Line -->
            <div class="w-24 h-1 gradient-bg mx-auto rounded-full"></div>
        </div>
    </div>
</section>

<!-- Sticky Navigation -->
<nav class="sticky top-20 z-40 bg-secondary/90 backdrop-blur-lg border-y border-white/5"
    aria-label="Services navigation">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-center space-x-2 sm:space-x-8 py-4 overflow-x-auto">
            <a href="#automation"
                class="text-sm font-medium text-muted hover:text-accent transition-colors whitespace-nowrap px-4 py-2 rounded-full hover:bg-white/5">
                Automation
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
                AI Vision
            </a>
            <a href="#consulting"
                class="text-sm font-medium text-muted hover:text-accent transition-colors whitespace-nowrap px-4 py-2 rounded-full hover:bg-white/5">
                Consulting
            </a>
            <a href="#training"
                class="text-sm font-medium text-muted hover:text-accent transition-colors whitespace-nowrap px-4 py-2 rounded-full hover:bg-white/5">
                Training
            </a>
        </div>
    </div>
</nav>

<!-- Automation Section -->
<section id="automation" class="py-24 bg-light text-primary">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div>
                <div class="flex items-center space-x-3 mb-4">
                    <div class="w-12 h-12 rounded-xl gradient-bg flex items-center justify-center">
                        <i class="fas fa-robot text-white text-xl" aria-hidden="true"></i>
                    </div>
                    <span class="text-accent uppercase tracking-widest text-sm font-semibold">RPA + AI</span>
                </div>
                <h2 class="font-heading text-4xl sm:text-5xl font-bold mb-6">
                    Intelligent <span class="text-secondary">Automation</span>
                </h2>
                <p class="text-lg text-gray-600 mb-8">
                    Free your team from repetitive tasks with intelligent bots that learn and improve over time.
                </p>

                <!-- Service Items -->
                <div class="space-y-6">
                    <article class="bg-white p-6 rounded-xl shadow-sm border-l-4 border-accent">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-heading font-bold text-lg">Process Automation (RPA)</h3>
                            <span
                                class="bg-accent/10 text-accent text-xs px-3 py-1 rounded-full font-semibold">Popular</span>
                        </div>
                        <p class="text-gray-500 text-sm mb-2">Bots mimicking human actions in business systems</p>
                        <p class="font-heading font-bold text-accent2">From $800.000 CLP/mo</p>
                    </article>

                    <article class="bg-white p-6 rounded-xl shadow-sm border-l-4 border-accent2">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-heading font-bold text-lg">Intelligent Document Processing</h3>
                            <span
                                class="bg-accent2/10 text-accent2 text-xs px-3 py-1 rounded-full font-semibold">New</span>
                        </div>
                        <p class="text-gray-500 text-sm mb-2">Advanced OCR + NLP to extract data from invoices,
                            contracts, and forms</p>
                        <p class="font-heading font-bold text-accent2">From $600.000 CLP/mo</p>
                    </article>

                    <article class="bg-white p-6 rounded-xl shadow-sm border-l-4 border-gray-200">
                        <h3 class="font-heading font-bold text-lg mb-2">Email & Response Automation</h3>
                        <p class="text-gray-500 text-sm mb-2">Automatic classification and smart replies to frequent
                            queries</p>
                        <p class="font-heading font-bold text-accent2">From $400.000 CLP/mo</p>
                    </article>
                </div>
            </div>

            <div class="relative">
                <img src="../images/servicio-1.webp" alt="Intelligent Automation with AI" class="rounded-2xl shadow-2xl"
                    loading="lazy" decoding="async">
                <div class="absolute -bottom-6 -left-6 bg-primary text-white p-6 rounded-xl shadow-xl">
                    <p class="font-heading text-4xl font-bold text-accent">70%</p>
                    <p class="text-sm text-muted">Time Reduction</p>
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
                <img src="../images/servicio-2.webp" alt="Analytics and Data Science" class="rounded-2xl shadow-2xl"
                    loading="lazy" decoding="async">
                <div class="absolute -top-6 -right-6 bg-light text-primary p-6 rounded-xl shadow-xl">
                    <p class="font-heading text-4xl font-bold text-accent2">3x</p>
                    <p class="text-sm text-gray-500">Better Decisions</p>
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
                    Transform data into strategic decisions with interactive dashboards and predictive models.
                </p>

                <!-- Service Items -->
                <div class="space-y-6">
                    <article class="bg-secondary/50 p-6 rounded-xl border border-white/10">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-heading font-bold text-lg">Executive Dashboards</h3>
                            <span
                                class="bg-accent/20 text-accent text-xs px-3 py-1 rounded-full font-semibold">Popular</span>
                        </div>
                        <p class="text-muted text-sm mb-2">Real-time visualization of KPIs and business metrics</p>
                        <p class="font-heading font-bold text-accent">From $500.000 CLP/mo</p>
                    </article>

                    <article class="bg-secondary/50 p-6 rounded-xl border border-white/10">
                        <h3 class="font-heading font-bold text-lg mb-2">Predictive Models</h3>
                        <p class="text-muted text-sm mb-2">Demand forecasting, churn prediction, and customer behavior
                        </p>
                        <p class="font-heading font-bold text-accent">From $1.200.000 CLP/project</p>
                    </article>

                    <article class="bg-secondary/50 p-6 rounded-xl border border-white/10">
                        <h3 class="font-heading font-bold text-lg mb-2">Data Integration</h3>
                        <p class="text-muted text-sm mb-2">Unified sources: ERP, CRM, eCommerce, social media</p>
                        <p class="font-heading font-bold text-accent">From $800.000 CLP/project</p>
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
                    Chatbots & <span class="text-secondary">AI Assistants</span>
                </h2>
                <p class="text-lg text-gray-600 mb-8">
                    Serve your customers 24/7 with virtual assistants that understand context and resolve queries
                    naturally.
                </p>

                <!-- Service Items -->
                <div class="space-y-6">
                    <article class="bg-white p-6 rounded-xl shadow-sm border-l-4 border-accent">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-heading font-bold text-lg">WhatsApp Business Chatbot</h3>
                            <span
                                class="bg-green-100 text-green-600 text-xs px-3 py-1 rounded-full font-semibold">Recommended</span>
                        </div>
                        <p class="text-gray-500 text-sm mb-2">Direct integration with WhatsApp for automated support</p>
                        <p class="font-heading font-bold text-accent2">From $450.000 CLP/mo</p>
                    </article>

                    <article class="bg-white p-6 rounded-xl shadow-sm border-l-4 border-accent2">
                        <h3 class="font-heading font-bold text-lg mb-2">Web Assistant with GPT</h3>
                        <p class="text-gray-500 text-sm mb-2">Intelligent widget for your website powered by generative
                            AI</p>
                        <p class="font-heading font-bold text-accent2">From $350.000 CLP/mo</p>
                    </article>

                    <article class="bg-white p-6 rounded-xl shadow-sm border-l-4 border-gray-200">
                        <h3 class="font-heading font-bold text-lg mb-2">Enterprise Multichannel Bot</h3>
                        <p class="text-gray-500 text-sm mb-2">Unified solution for WhatsApp, Instagram, Messenger, and
                            web</p>
                        <p class="font-heading font-bold text-accent2">From $900.000 CLP/mo</p>
                    </article>
                </div>
            </div>

            <div class="relative">
                <img src="../images/servicio-3.webp" alt="Chatbots and AI Assistants" class="rounded-2xl shadow-2xl"
                    loading="lazy" decoding="async">
                <div class="absolute -bottom-6 -right-6 bg-primary text-white p-6 rounded-xl shadow-xl">
                    <p class="font-heading text-4xl font-bold text-accent">24/7</p>
                    <p class="text-sm text-muted">Availability</p>
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
                <img src="../images/servicio-4.webp" alt="Computer Vision with AI" class="rounded-2xl shadow-2xl"
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
                    Computer <span class="gradient-text">Vision</span>
                </h2>
                <p class="text-lg text-muted mb-8">
                    Intelligent image and video analysis for quality control, security, and industrial automation.
                </p>

                <!-- Service Items -->
                <div class="space-y-6">
                    <article class="bg-secondary/50 p-6 rounded-xl border border-white/10">
                        <h3 class="font-heading font-bold text-lg mb-2">Visual Quality Control</h3>
                        <p class="text-muted text-sm mb-2">Automatic defect detection in production lines</p>
                        <p class="font-heading font-bold text-accent">From $2.000.000 CLP/project</p>
                    </article>

                    <article class="bg-secondary/50 p-6 rounded-xl border border-white/10">
                        <h3 class="font-heading font-bold text-lg mb-2">Product Recognition</h3>
                        <p class="text-muted text-sm mb-2">Automatic inventory and visual stock tracking</p>
                        <p class="font-heading font-bold text-accent">From $1.500.000 CLP/project</p>
                    </article>

                    <article class="bg-secondary/50 p-6 rounded-xl border border-white/10">
                        <h3 class="font-heading font-bold text-lg mb-2">Real-time Video Analytics</h3>
                        <p class="text-muted text-sm mb-2">Security monitoring and people counting</p>
                        <p class="font-heading font-bold text-accent">From $1.800.000 CLP/project</p>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Consulting Section -->
<section id="consulting" class="py-24 bg-gradient-to-br from-secondary to-primary">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <div class="inline-flex items-center justify-center w-16 h-16 rounded-2xl gradient-bg mb-6">
                <i class="fas fa-project-diagram text-white text-2xl" aria-hidden="true"></i>
            </div>
            <h2 class="font-heading text-4xl sm:text-5xl font-bold mb-6">
                Machine Learning <span class="gradient-text">Consulting</span>
            </h2>
            <p class="text-xl text-muted max-w-2xl mx-auto">
                We help you identify the best AI opportunities for your business and design a successful implementation
                strategy
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <article
                class="bg-white/5 backdrop-blur-sm p-8 rounded-2xl border border-white/10 text-center hover:border-accent/50 transition-all">
                <div class="w-16 h-16 rounded-full bg-accent/20 flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-search text-accent text-2xl" aria-hidden="true"></i>
                </div>
                <h3 class="font-heading font-bold text-xl mb-4">AI Diagnostics</h3>
                <p class="text-muted text-sm mb-6">Digital maturity assessment and automation opportunities</p>
                <p class="font-heading font-bold text-2xl text-accent">$500.000 CLP</p>
                <p class="text-xs text-muted mt-1">One 4-hour session</p>
            </article>

            <article class="bg-accent/10 backdrop-blur-sm p-8 rounded-2xl border border-accent text-center relative">
                <span
                    class="absolute -top-3 left-1/2 transform -translate-x-1/2 bg-accent text-primary text-xs px-4 py-1 rounded-full font-bold">MOST
                    POPULAR</span>
                <div class="w-16 h-16 rounded-full gradient-bg flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-road text-white text-2xl" aria-hidden="true"></i>
                </div>
                <h3 class="font-heading font-bold text-xl mb-4">Strategic Roadmap</h3>
                <p class="text-muted text-sm mb-6">Detailed 12-month AI implementation plan with prioritization</p>
                <p class="font-heading font-bold text-2xl text-accent">$1.800.000 CLP</p>
                <p class="text-xs text-muted mt-1">Includes 3 workshops</p>
            </article>

            <article
                class="bg-white/5 backdrop-blur-sm p-8 rounded-2xl border border-white/10 text-center hover:border-accent/50 transition-all">
                <div class="w-16 h-16 rounded-full bg-accent2/20 flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-users-cog text-accent2 text-2xl" aria-hidden="true"></i>
                </div>
                <h3 class="font-heading font-bold text-xl mb-4">Mentorship</h3>
                <p class="text-muted text-sm mb-6">Continuous guidance for your team during implementation</p>
                <p class="font-heading font-bold text-2xl text-accent">$800.000 CLP/mo</p>
                <p class="text-xs text-muted mt-1">Minimum 3 months</p>
            </article>
        </div>
    </div>
</section>

<!-- Training Section -->
<section id="training" class="py-24 bg-light text-primary">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div>
                <div class="flex items-center space-x-3 mb-4">
                    <div class="w-12 h-12 rounded-xl bg-accent2 flex items-center justify-center">
                        <i class="fas fa-graduation-cap text-white text-xl" aria-hidden="true"></i>
                    </div>
                    <span class="text-accent2 uppercase tracking-widest text-sm font-semibold">Continuous
                        Education</span>
                </div>
                <h2 class="font-heading text-4xl sm:text-5xl font-bold mb-6">
                    Training in <span class="text-secondary">AI & Data</span>
                </h2>
                <p class="text-lg text-gray-600 mb-8">
                    Boost your team's skills with practical and up-to-date training programs.
                </p>

                <!-- Course Items -->
                <div class="space-y-6">
                    <article class="bg-white p-6 rounded-xl shadow-sm border-l-4 border-accent">
                        <h3 class="font-heading font-bold text-lg mb-2">Workshop: Prompt Engineering</h3>
                        <p class="text-gray-500 text-sm mb-2">Learn to use ChatGPT and AI tools for productivity</p>
                        <div class="flex justify-between items-center">
                            <span class="text-xs text-gray-400"><i class="far fa-clock mr-1" aria-hidden="true"></i> 4
                                hours</span>
                            <p class="font-heading font-bold text-accent2">$150.000 CLP/person</p>
                        </div>
                    </article>

                    <article class="bg-white p-6 rounded-xl shadow-sm border-l-4 border-accent2">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-heading font-bold text-lg">Bootcamp: Python for Data Analysis</h3>
                            <span
                                class="bg-accent/10 text-accent text-xs px-3 py-1 rounded-full font-semibold">New</span>
                        </div>
                        <p class="text-gray-500 text-sm mb-2">From zero to professional analysis in 6 weeks</p>
                        <div class="flex justify-between items-center">
                            <span class="text-xs text-gray-400"><i class="far fa-clock mr-1" aria-hidden="true"></i> 24
                                hours (6 weeks)</span>
                            <p class="font-heading font-bold text-accent2">$450.000 CLP/person</p>
                        </div>
                    </article>

                    <article class="bg-white p-6 rounded-xl shadow-sm border-l-4 border-gray-200">
                        <h3 class="font-heading font-bold text-lg mb-2">In-Company Program</h3>
                        <p class="text-gray-500 text-sm mb-2">Customized training for your team at your facilities</p>
                        <div class="flex justify-between items-center">
                            <span class="text-xs text-gray-400"><i class="fas fa-users mr-1" aria-hidden="true"></i>
                                Groups of 5-15 people</span>
                            <p class="font-heading font-bold text-accent2">Custom Quote</p>
                        </div>
                    </article>
                </div>
            </div>

            <div class="relative">
                <img src="../images/servicio-6.webp" alt="Artificial Intelligence Training"
                    class="rounded-2xl shadow-2xl" loading="lazy" decoding="async">
                <div class="absolute -bottom-6 -left-6 bg-primary text-white p-6 rounded-xl shadow-xl">
                    <p class="font-heading text-4xl font-bold gradient-text">500+</p>
                    <p class="text-sm text-muted">Professionals Trained</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-24 bg-primary">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="font-heading text-4xl sm:text-5xl font-bold mb-8">
            Don't know where to start?
        </h2>
        <p class="text-xl text-muted mb-12">
            Book a free 30-minute consultation and let's discuss your business needs
        </p>
        <a href="contact.php"
            class="inline-flex items-center px-10 py-5 rounded-full gradient-bg font-bold text-lg uppercase tracking-wider hover-scale">
            <span>Book Free Consultation</span>
            <i class="fas fa-calendar-check ml-3" aria-hidden="true"></i>
        </a>

        <p class="text-sm text-muted mt-8">
            <i class="fas fa-info-circle mr-1" aria-hidden="true"></i>
            All prices are in CLP and do not include VAT. Conditions apply.
        </p>
    </div>
</section>

<?php include '../includes/footer_en.php'; ?>