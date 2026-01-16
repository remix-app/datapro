<?php
$page_title = "Terms of Use | Datapolis";
$page_description = "Terms and conditions of use for the Datapolis website - Artificial Intelligence Solutions for SMEs.";
$current_page = "terms";
$es_page_link = "terminos.php";

include '../includes/header_en.php';
?>

<!-- Hero Section -->
<section class="relative pt-32 pb-16 bg-primary overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="text-center">
            <h1 class="font-heading text-5xl sm:text-6xl font-bold mb-6">
                Terms of <span class="gradient-text">Use</span>
            </h1>
            <p class="text-xl text-muted max-w-2xl mx-auto mb-8">
                Last updated:
                <?php echo date('d/m/Y'); ?>
            </p>
            <div class="w-24 h-1 gradient-bg mx-auto rounded-full"></div>
        </div>
    </div>
</section>

<!-- Content -->
<section class="py-24 bg-light text-primary">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="prose prose-lg max-w-none">

            <article class="bg-white p-8 rounded-2xl shadow-sm mb-8">
                <h2 class="font-heading text-2xl font-bold mb-4 text-primary">1. Acceptance of Terms</h2>
                <p class="text-gray-600 leading-relaxed">
                    By accessing and using the Datapolis website (hereinafter, "the Site"), you agree to be legally
                    bound by these Terms of Use. If you do not agree with any of these terms, we recommend not using our
                    Site.
                </p>
            </article>

            <article class="bg-white p-8 rounded-2xl shadow-sm mb-8">
                <h2 class="font-heading text-2xl font-bold mb-4 text-primary">2. Description of Services</h2>
                <p class="text-gray-600 leading-relaxed">
                    Datapolis offers consulting, training, and Artificial Intelligence solution development services for
                    small and medium-sized enterprises in Chile. Specific services, pricing, and conditions will be
                    detailed in individual contracts with each client.
                </p>
            </article>

            <article class="bg-white p-8 rounded-2xl shadow-sm mb-8">
                <h2 class="font-heading text-2xl font-bold mb-4 text-primary">3. Use of the Site</h2>
                <p class="text-gray-600 leading-relaxed mb-4">
                    You agree to use the Site only for lawful purposes and in a way that does not infringe on the rights
                    of third parties. It is prohibited to:
                </p>
                <ul class="list-disc list-inside text-gray-600 space-y-2">
                    <li>Use the Site for illegal or fraudulent activities</li>
                    <li>Attempt unauthorized access to systems or data</li>
                    <li>Distribute malware or malicious content</li>
                    <li>Copy or reproduce content without authorization</li>
                </ul>
            </article>

            <article class="bg-white p-8 rounded-2xl shadow-sm mb-8">
                <h2 class="font-heading text-2xl font-bold mb-4 text-primary">4. Intellectual Property</h2>
                <p class="text-gray-600 leading-relaxed">
                    All content on the Site, including text, graphics, logos, images, videos, and software, is the
                    property of Datapolis or its licensors and is protected by Chilean intellectual property laws and
                    international treaties.
                </p>
            </article>

            <article class="bg-white p-8 rounded-2xl shadow-sm mb-8">
                <h2 class="font-heading text-2xl font-bold mb-4 text-primary">5. Personal Data Protection</h2>
                <p class="text-gray-600 leading-relaxed">
                    The collection and use of personal data are governed by our Privacy Policy. By using the Site, you
                    consent to the collection and use of your data in accordance with said policy and current Chilean
                    legislation, including Law No. 19.628 on Privacy Protection.
                </p>
            </article>

            <article class="bg-white p-8 rounded-2xl shadow-sm mb-8">
                <h2 class="font-heading text-2xl font-bold mb-4 text-primary">6. Limitation of Liability</h2>
                <p class="text-gray-600 leading-relaxed">
                    Datapolis shall not be liable for direct, indirect, incidental, or consequential damages resulting
                    from the use or inability to use the Site or services. The content of the Site is provided "as is"
                    without warranties of any kind.
                </p>
            </article>

            <article class="bg-white p-8 rounded-2xl shadow-sm mb-8">
                <h2 class="font-heading text-2xl font-bold mb-4 text-primary">7. Modifications</h2>
                <p class="text-gray-600 leading-relaxed">
                    Datapolis reserves the right to modify these Terms of Use at any time. Modifications will be
                    effective immediately upon posting on the Site. Continued use of the Site after any modification
                    constitutes your acceptance of the new terms.
                </p>
            </article>

            <article class="bg-white p-8 rounded-2xl shadow-sm mb-8">
                <h2 class="font-heading text-2xl font-bold mb-4 text-primary">8. Governing Law</h2>
                <p class="text-gray-600 leading-relaxed">
                    These Terms of Use shall be governed by and construed in accordance with the laws of the Republic of
                    Chile. Any dispute arising in connection with these terms shall be subject to the exclusive
                    jurisdiction of the courts of Santiago, Chile.
                </p>
            </article>

            <article class="bg-white p-8 rounded-2xl shadow-sm mb-8">
                <h2 class="font-heading text-2xl font-bold mb-4 text-primary">9. Contact</h2>
                <p class="text-gray-600 leading-relaxed">
                    If you have questions about these Terms of Use, you can contact us at:
                </p>
                <ul class="list-none text-gray-600 mt-4 space-y-2">
                    <li><i class="fas fa-envelope text-accent mr-2" aria-hidden="true"></i> Email: <a
                            href="mailto:hola@datapolis.cl" class="text-accent hover:underline">hola@datapolis.cl</a>
                    </li>
                    <li><i class="fas fa-map-marker-alt text-accent mr-2" aria-hidden="true"></i> Address: Av.
                        Providencia 1234, Office 501, Providencia, Santiago</li>
                </ul>
            </article>

        </div>

        <!-- Back Link -->
        <div class="text-center mt-12">
            <a href="index.php"
                class="inline-flex items-center text-accent font-semibold hover:text-secondary transition-colors group">
                <i class="fas fa-arrow-left mr-2 group-hover:-translate-x-2 transition-transform"
                    aria-hidden="true"></i>
                <span>Back to Home</span>
            </a>
        </div>
    </div>
</section>

<?php include '../includes/footer_en.php'; ?>