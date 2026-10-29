<?php
/**
 * ==============================================================================
 * Reusable Footer Component - SS Healing Rays (Bootstrap 5.3)
 * Structure:
 *   - Outer Section: Transparent background
 *   - Inside Container Card: Light grey (#f4f4f7) with 50px surrounding margin & border-radius
 *   - Service Pillars:
 *       I. Healings (11 items)
 *       II. Training (4 items) & III. Courses (2 items)
 *       IV. Workshops (12 items)
 *       Quick Links, Brand & Contact Details
 * ==============================================================================
 */
?>
<footer class="site-footer" id="siteFooter">
    <div class="footer-container-card">
        
        <!-- 3-Column Footer Layout: Logo & Brand, Quick Links, Contact Details -->
        <div class="row g-4 g-lg-5 justify-content-between">
            
            <!-- 1. Logo & Brand Identity Column -->
            <div class="col-lg-5 col-md-12 col-12 footer-col-brand">
                <div class="footer-logo-wrapper mb-3">
                    <a href="/" class="d-inline-block text-decoration-none" aria-label="SS Healing Rays Home">
                        <img src="assets/logo/main-logo.png" alt="<?= htmlspecialchars($brand_name ?? 'SS Healing Rays') ?>" class="footer-brand-logo">
                    </a>
                </div>
                <p class="footer-bio mb-4">
                    A sacred and compassionate sanctuary to pause, release stress, restore inner harmony, and nurture mind-body-soul wellbeing through personalized holistic healing modalities.
                </p>
                <div class="d-flex gap-2">
                    <a href="#" class="footer-social-btn" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="footer-social-btn" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="footer-social-btn" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
                    <a href="https://wa.me/919000606792" target="_blank" rel="noopener noreferrer" class="footer-social-btn" aria-label="WhatsApp"><i class="bi bi-whatsapp"></i></a>
                </div>
            </div>

            <!-- 2. Quick Links Column -->
            <div class="col-lg-3 col-md-6 col-12 ps-lg-4">
                <h6 class="footer-col-heading">Quick Links</h6>
                <ul class="footer-links">
                    <li><a href="/" class="footer-link">Home</a></li>
                    <li><a href="aboutus" class="footer-link">About Us</a></li>
                    <li><a href="services" class="footer-link">Healing Services</a></li>
                    <li><a href="training" class="footer-link">Training</a></li>
                    <li><a href="workshop" class="footer-link">Workshop</a></li>
                    <li><a href="gallery" class="footer-link">Gallery</a></li>
                    <li><a href="contact" class="footer-link">Contact Us</a></li>
                </ul>
            </div>

            <!-- 3. Contact Details Column -->
            <div class="col-lg-4 col-md-6 col-12">
                <h6 class="footer-col-heading">Contact Details</h6>
                <ul class="footer-contact-list">
                    <li class="footer-contact-item">
                        <i class="bi bi-geo-alt" aria-hidden="true"></i>
                        <span>Hyderabad, India.</span>
                    </li>
                    <li class="footer-contact-item">
                        <i class="bi bi-telephone" aria-hidden="true"></i>
                        <div class="d-flex flex-column gap-1">
                            <a href="tel:+919000606792">+91 90006 06792</a>
                            <a href="tel:+919966010981">+91 99660 10981</a>
                        </div>
                    </li>
                    <li class="footer-contact-item">
                        <i class="bi bi-envelope" aria-hidden="true"></i>
                        <a href="mailto:sshealingrays@gmail.com">sshealingrays@gmail.com</a>
                    </li>
                </ul>
            </div>

        </div>

        <!-- 6. Bottom Copyright Bar -->
        <div class="footer-bottom d-flex flex-column flex-md-row justify-content-between align-items-center gap-2">
            <div class="footer-copyright">
                &copy; <?= date('Y') ?> <?= htmlspecialchars($brand_name ?? 'SS Healing Rays') ?>. All rights reserved.
            </div>
            <div class="footer-credit">
                Design @Domain dude
            </div>
        </div>

    </div>
</footer>

<?php
// Global Popup Booking Form Modal (Triggered by Hero Banner and Site-wide Booking Buttons)
include __DIR__ . '/popupbookingform.php';
?>

<!-- Bootstrap 5.3 (Latest) JavaScript Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<!-- Swiper 11 (Latest) JavaScript Bundle -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Header Scroll Interactions -->
<script src="assets/js/header.js"></script>

<!-- Hero Banner Swiper Script -->
<script src="assets/js/banner.js"></script>

<!-- Healing Services Carousel Script -->
<script src="assets/js/services.js"></script>

<!-- Counter Animation Script -->
<script src="assets/js/counter.js"></script>

<!-- Retreat CTA Full Banner Swiper Script -->
<script src="assets/js/cta-banner.js"></script>

</body>
</html>
