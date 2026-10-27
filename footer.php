<?php
/**
 * ==============================================================================
 * Reusable Footer Component - SS Healing Rays (Bootstrap 5.3)
 * ==============================================================================
 */
?>
<footer class="site-footer bg-dark text-light pt-5 pb-4 mt-5 border-top" style="border-color: rgba(186, 67, 108, 0.3) !important;">
    <div class="container">
        <div class="row g-4 justify-content-between">
            <div class="col-lg-4 col-md-6">
                <div class="d-flex align-items-center gap-2 mb-3">
                    <?php if (!empty($site_logo)): ?>
                        <img src="<?= htmlspecialchars($site_logo) ?>" alt="<?= htmlspecialchars($brand_name ?? 'SS Healing Rays') ?>" height="40" class="rounded-circle">
                    <?php endif; ?>
                    <h5 class="mb-0 text-white font-serif"><?= htmlspecialchars($brand_name ?? 'SS Healing Rays') ?></h5>
                </div>
                <p class="text-secondary small mb-3">
                    A dedicated sanctuary for holistic wellness, chakra balancing, and radiant energy healing. Empowering your journey toward mindful equilibrium and personal growth.
                </p>
                <div class="d-flex gap-2">
                    <a href="#" class="btn btn-sm btn-outline-secondary rounded-circle" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="btn btn-sm btn-outline-secondary rounded-circle" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="btn btn-sm btn-outline-secondary rounded-circle" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
                </div>
            </div>

            <div class="col-lg-2 col-md-6">
                <h6 class="text-secondary-color text-uppercase mb-3 fw-semibold small">Quick Links</h6>
                <ul class="list-unstyled text-secondary small d-flex flex-column gap-2 mb-0">
                    <li><a href="index.php" class="text-secondary text-decoration-none">Home</a></li>
                    <li><a href="#about" class="text-secondary text-decoration-none">About Sanctuary</a></li>
                    <li><a href="#services" class="text-secondary text-decoration-none">Healing Modalities</a></li>
                    <li><a href="#testimonials" class="text-secondary text-decoration-none">Stories</a></li>
                    <li><a href="#contact" class="text-secondary text-decoration-none">Contact Us</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6">
                <h6 class="text-secondary-color text-uppercase mb-3 fw-semibold small">Healing Services</h6>
                <ul class="list-unstyled text-secondary small d-flex flex-column gap-2 mb-0">
                    <li><span class="text-secondary">Reiki &amp; Energy Healing</span></li>
                    <li><span class="text-secondary">Chakra Alignment</span></li>
                    <li><span class="text-secondary">Crystal Therapy</span></li>
                    <li><span class="text-secondary">Sound Meditation</span></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6">
                <h6 class="text-secondary-color text-uppercase mb-3 fw-semibold small">Visit Us</h6>
                <p class="text-secondary small mb-2">
                    <i class="bi bi-geo-alt text-secondary-color me-1"></i> Bangalore, Karnataka, India
                </p>
                <p class="text-secondary small mb-2">
                    <i class="bi bi-telephone text-secondary-color me-1"></i> <?= htmlspecialchars($phone_number ?? '+91 98765 43210') ?>
                </p>
                <p class="text-secondary small mb-0">
                    <i class="bi bi-clock text-secondary-color me-1"></i> Mon - Sat: 9:00 AM - 7:00 PM
                </p>
            </div>
        </div>

        <div class="border-top border-secondary border-opacity-25 mt-4 pt-3 text-center small text-secondary">
            &copy; <?= date('Y') ?> <?= htmlspecialchars($brand_name ?? 'SS Healing Rays') ?>. All rights reserved.
        </div>
    </div>
</footer>

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

</body>
</html>
