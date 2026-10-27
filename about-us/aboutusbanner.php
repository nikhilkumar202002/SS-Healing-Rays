<?php
/**
 * ==============================================================================
 * About Us Full-Height Hero Banner - SS Healing Rays
 * Static full-height (100vh) hero banner matching home banner visual aesthetics
 * (no slider needed, black bottom-to-top linear gradient overlay, Marcellus
 * headline with Playfair italic accents, and dual signature CTA buttons).
 * ==============================================================================
 */

$about_banner_image       = $about_banner_image ?? 'assets/banner/banner-2.jpeg';
$about_banner_title       = $about_banner_title ?? 'A Sacred Sanctuary for<br>Personal Growth & <em>Healing</em>';
$about_banner_description = $about_banner_description ?? 'An exclusive sanctuary where authentic Reiki alignment, trauma recovery, and intuitive coaching meet compassionate guidance on your path to lasting peace.';
$about_banner_btn1_text   = $about_banner_btn1_text ?? 'Explore Services';
$about_banner_btn1_url    = $about_banner_btn1_url ?? 'services';
$about_banner_btn2_text   = $about_banner_btn2_text ?? 'Meet Our Healers';
$about_banner_btn2_url    = $about_banner_btn2_url ?? '#about';
?>

<section class="static-hero-banner position-relative" id="aboutBanner" aria-label="About Us Highlights">
    <!-- Background Cover Image with Ken Burns Drift -->
    <img src="<?= htmlspecialchars($about_banner_image) ?>" 
         alt="<?= strip_tags($about_banner_title) ?>" 
         class="banner-bg-img"
         loading="eager">

    <!-- Slight Black Overlay with Linear Gradient from Bottom to Top -->
    <div class="banner-overlay" aria-hidden="true"></div>

    <!-- Banner Text Content -->
    <div class="banner-content">
        <h1 class="banner-title mb-3">
            <?= $about_banner_title ?>
        </h1>

        <p class="banner-description">
            <?= htmlspecialchars($about_banner_description) ?>
        </p>

        <div class="banner-actions">
            <!-- Primary CTA Button (Explore Services ↗) -->
            <?php if (!empty($about_banner_btn1_text)): ?>
                <?php
                    $btn_text  = $about_banner_btn1_text;
                    $btn_url   = $about_banner_btn1_url;
                    $btn_class = 'Btn-Banner-Primary';
                    include dirname(__DIR__) . '/common/button.php';
                ?>
            <?php endif; ?>

            <!-- Secondary Ghost CTA Button (Meet Our Healers ↗) -->
            <?php if (!empty($about_banner_btn2_text)): ?>
                <?php
                    $btn_text  = $about_banner_btn2_text;
                    $btn_url   = $about_banner_btn2_url;
                    $btn_class = 'Btn-Banner-Ghost';
                    include dirname(__DIR__) . '/common/button.php';
                ?>
            <?php endif; ?>
        </div>
    </div>
</section>