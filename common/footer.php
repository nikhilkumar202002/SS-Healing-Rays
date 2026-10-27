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
        
        <div class="row g-4 g-xl-5 justify-content-between">
            
            <!-- 1. Brand & Contact Column -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-12 footer-col-brand">
                <div class="footer-logo-wrapper mb-3">
                    <a href="index.php" class="d-inline-block text-decoration-none" aria-label="SS Healing Rays Home">
                        <img src="assets/logo/main-logo.png" alt="<?= htmlspecialchars($brand_name ?? 'SS Healing Rays') ?>" height="52" class="footer-brand-logo">
                    </a>
                </div>
               
                <div class="d-flex gap-2 mb-4">
                    <a href="#" class="footer-social-btn" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="footer-social-btn" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="footer-social-btn" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
                    <a href="#" class="footer-social-btn" aria-label="WhatsApp"><i class="bi bi-whatsapp"></i></a>
                </div>
                <!-- Mini Reach Us -->
                <ul class="footer-contact-list">
                    <li class="footer-contact-item">
                        <i class="bi bi-geo-alt" aria-hidden="true"></i>
                        <span>Bangalore, Karnataka, India</span>
                    </li>
                    <li class="footer-contact-item">
                        <i class="bi bi-telephone" aria-hidden="true"></i>
                        <a href="tel:<?= htmlspecialchars($phone_tel ?? '+919876543210') ?>">
                            <?= htmlspecialchars($phone_number ?? '+91 98765 43210') ?>
                        </a>
                    </li>
                    <li class="footer-contact-item">
                        <i class="bi bi-envelope" aria-hidden="true"></i>
                        <a href="mailto:contact@sshealingrays.com">contact@sshealingrays.com</a>
                    </li>
                </ul>
            </div>

            <!-- 2. Quick Links Column -->
            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6">
                <h6 class="footer-col-heading">Quick Links</h6>
                <ul class="footer-links">
                    <li><a href="index.php" class="footer-link">Home</a></li>
                    <li><a href="#about" class="footer-link">About Us</a></li>
                    <li><a href="#services" class="footer-link">Healing</a></li>
                    <li><a href="#contact" class="footer-link">Training</a></li>
                    <li><a href="#workshop" class="footer-link">Workshop</a></li>
                    <li><a href="gallery.php" class="footer-link">Gallery</a></li>
                    <li><a href="#contact" class="footer-link">Contact Us</a></li>
                </ul>
            </div>

            <!-- 3. I. Healings Column -->
            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6 col-6">
                <h6 class="footer-col-heading">I. Healings</h6>
                <ul class="footer-links">
                    <li><a href="#services" class="footer-link">Reiki Healing</a></li>
                    <li><a href="#services" class="footer-link">Crystal Healing</a></li>
                    <li><a href="#services" class="footer-link">Angel Healing</a></li>
                    <li><a href="#services" class="footer-link">Energy healing</a></li>
                    <li><a href="#services" class="footer-link">EFT</a></li>
                    <li><a href="#services" class="footer-link">Counselling</a></li>
                    <li><a href="#services" class="footer-link">Trauma Healing</a></li>
                    <li><a href="#services" class="footer-link">Personal Transformation</a></li>
                    <li><a href="#services" class="footer-link">Meditations</a></li>
                    <li><a href="#services" class="footer-link">Tarot Card reading</a></li>
                    <li><a href="#services" class="footer-link">Therapeutic Yoga</a></li>
                </ul>
            </div>

            <!-- 4. II. Training & III. Courses Column -->
            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6 col-12">
                <h6 class="footer-col-heading">II. Training</h6>
                <ul class="footer-links">
                    <li><a href="#contact" class="footer-link">Reiki- Shiki Ryoho &amp; Karuna Reiki (All levels)</a></li>
                    <li><a href="#contact" class="footer-link">Crystal Therapy</a></li>
                    <li><a href="#contact" class="footer-link">Angel Therapy</a></li>
                    <li><a href="#contact" class="footer-link">EFT</a></li>
                </ul>

                <h6 class="footer-subgroup-title">III. Courses on Wellness</h6>
                <ul class="footer-links">
                    <li><a href="#contact" class="footer-link">Spandan</a></li>
                    <li><a href="#contact" class="footer-link">Chetan</a></li>
                </ul>
            </div>

            <!-- 5. IV. Workshops Column -->
            <div class="col-xl-3 col-lg-12 col-md-12 col-12 footer-col-workshops">
                <h6 class="footer-col-heading">IV. Workshops</h6>
                <div class="footer-workshops-grid">
                    <a href="#workshop" class="footer-link">1. Energy Reset</a>
                    <a href="#workshop" class="footer-link">2. Language of crystals</a>
                    <a href="#workshop" class="footer-link">3. Gratitude</a>
                    <a href="#workshop" class="footer-link">4. Loving Yourself</a>
                    <a href="#workshop" class="footer-link">5. Breath work</a>
                    <a href="#workshop" class="footer-link">6. Mudras</a>
                    <a href="#workshop" class="footer-link">7. Relaxation</a>
                    <a href="#workshop" class="footer-link">8. Money manifestation</a>
                    <a href="#workshop" class="footer-link">9. Energy Routine</a>
                    <a href="#workshop" class="footer-link">10. Abundance program</a>
                    <a href="#workshop" class="footer-link">11. Reprogram with meditation</a>
                    <a href="#workshop" class="footer-link">12. Colour meditation</a>
                </div>
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

<!-- Retreat CTA Full Banner Swiper Script -->
<script src="assets/js/cta-banner.js"></script>

</body>
</html>
