<?php
/**
 * ==============================================================================
 * Âme Crystals - The Signature Crystal Collection
 * Dedicated Brand & Product Page - SS Healing Rays
 * ==============================================================================
 */

// Page-level configuration variables
$page_title       = 'Âme Crystals | The Signature Crystal Collection | SS Healing Rays';
$page_description = 'Inspired by the French word âme (soul), Âme Crystals brings together authentic, intention-charged natural crystals and sacred stones from Mother Earth.';
$current_page     = 'ame-crystals';
$cta_text         = 'Book Consultation';
$cta_url          = '#bookingModal';

// 1. Common Global Header
include __DIR__ . '/common/header.php';

// Robust live-server image resolution for hero banner
$ame_hero_banner_img = 'assets/banner/ame-crystals-banner.jpg';
if (!file_exists(__DIR__ . '/' . $ame_hero_banner_img)) {
    if (file_exists(__DIR__ . '/assets/banner/ame-crystals-banner.jpeg')) {
        $ame_hero_banner_img = 'assets/banner/ame-crystals-banner.jpeg';
    } elseif (file_exists(__DIR__ . '/assets/banner/banner-1.jpg')) {
        $ame_hero_banner_img = 'assets/banner/banner-1.jpg';
    } elseif (file_exists(__DIR__ . '/assets/banner/banner-1.jpeg')) {
        $ame_hero_banner_img = 'assets/banner/banner-1.jpeg';
    }
}

// Robust live-server image resolution for Ame logo
$ame_logo_img = 'assets/product/product-logo-2.png';
if (!file_exists(__DIR__ . '/' . $ame_logo_img)) {
    if (file_exists(__DIR__ . '/assets/product/product-logo-1.png')) {
        $ame_logo_img = 'assets/product/product-logo-1.png';
    }
}
?>

<!-- ==========================================================================
     1. Âme Crystals Hero Banner
     ========================================================================== -->
<section class="product-banner-section ame-crystal-hero position-relative" id="ameHeroBanner" aria-label="Âme Crystals Hero Banner">
    <img src="<?= htmlspecialchars($ame_hero_banner_img) ?>" 
         alt="Âme Crystals Sanctuary & Store" 
         class="product-banner-bg-img"
         loading="eager">

    <div class="product-banner-overlay" aria-hidden="true"></div>

    <div class="container position-relative product-banner-content-wrap">
        <div class="row justify-content-center text-center">
            <div class="col-12 col-lg-11 col-xl-10">
                
                <!-- Brand Identity: Logo on top and Heading -->
                <div class="ame-hero-brand-header mb-3">
                    <div class="ame-hero-logo-badge mx-auto mb-2">
                        <img src="<?= htmlspecialchars($ame_logo_img) ?>" 
                             alt="Âme Crystals Emblem Logo" 
                             class="ame-hero-logo-img"
                             loading="eager">
                    </div>
                    <h2 class="ame-hero-brand-heading mb-1">Âme Crystals</h2>
                    <span class="ame-hero-brand-subheading">The Signature Crystal Collection</span>
                </div>

                <!-- Hero Title: Strict 2 Lines Layout -->
                <h1 class="product-banner-title mb-3">
                    <span class="banner-title-line">You don't always choose a crystal.</span>
                    <span class="banner-title-line">Sometimes, the <em>crystal finds you.</em></span>
                </h1>

                <!-- Story Description (Single Paragraph) -->
                <p class="product-banner-subtitle mx-auto mb-4">
                    Inspired by the French word <em>âme</em>, meaning soul, <strong>Âme Crystals</strong> is built around the beautiful connection between a crystal and the person it finds. We believe every stone from Mother Earth carries a story. Some become silent supporters, some remind us of our strength, and some bring comfort, grounding and encouragement when we need them most.
                </p>

                <!-- Dual CTAs -->
                <div class="ame-hero-actions d-flex flex-wrap align-items-center justify-content-center gap-3 pt-2">
                    <div class="crystal-primary-btn-wrap">
                        <?php
                            $btn_text  = 'Discover Your Crystal';
                            $btn_url   = '#ameJourney';
                            $btn_class = 'Btn-Crystal-Primary';
                            include __DIR__ . '/common/button.php';
                        ?>
                    </div>

                    <button type="button" 
                            class="btn btn-hero-crystal-consultation"
                            data-bs-toggle="modal" 
                            data-bs-target="#bookingModal"
                            aria-label="Book Your Crystal Consultation">
                        <i class="bi bi-calendar2-heart me-2" aria-hidden="true"></i>
                        <span>Book Your Crystal Consultation</span>
                    </button>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     2. A Crystal with a Purpose (Left Content | Right Gallery Image)
     ========================================================================== -->
<?php
$crystal_eyebrow            = ''; // Minimal layout without subheading badge
$crystal_headline_1         = 'A Crystal with a Purpose';
$crystal_headline_2         = '';
$crystal_desc_1             = "We don't see crystals merely as beautiful stones or accessories. We see them as meaningful companions in one's personal journey. Depending on what you are navigating, a crystal can serve as a reminder, a motivator, a source of comfort or a symbol of protection and encouragement.";
$crystal_desc_2             = "Crystals are not a replacement for medical care, professional support or the actions needed to create change in life. We see them as an additional source of personal and symbolic support.";
$show_crystal_ctas          = false;
$crystal_primary_cta_text   = '';
$crystal_secondary_cta_text = '';

// Robust live-server image resolution for Purpose crystal image
$crystal_img = 'assets/images/purpose.jpg';
if (!file_exists(__DIR__ . '/' . $crystal_img)) {
    if (file_exists(__DIR__ . '/assets/images/purpose.jpeg')) {
        $crystal_img = 'assets/images/purpose.jpeg';
    } elseif (file_exists(__DIR__ . '/assets/images/purpose')) {
        $crystal_img = 'assets/images/purpose';
    } else {
        $crystal_img = 'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.22 PM.jpeg';
    }
}
$crystal_img_alt            = 'A Crystal with a Purpose - Âme Crystals';
include __DIR__ . '/products/productbanner.php';
?>

<!-- ==========================================================================
     2.5 The Âme Selection Journey Process Flow
     ========================================================================== -->
<?php include __DIR__ . '/products/amejourney.php'; ?>

<!-- ==========================================================================
     3. Curated Crystal Categories Swiper Slider
     ========================================================================== -->
<?php include __DIR__ . '/products/amecategories.php'; ?>

<!-- ==========================================================================
     4. Personalised Crystal Grids (Left Image | Right Content)
     ========================================================================== -->
<?php include __DIR__ . '/products/amegrid.php'; ?>

<!-- ==========================================================================
     5. Lifelong Crystal Guidance & Care (Left Image | Right Content)
     ========================================================================== -->
<?php include __DIR__ . '/products/ameguidance.php'; ?>

<!-- ==========================================================================
     6. When the Right Crystal Finds Its Soulmate (Left Content | Right Image)
     ========================================================================== -->
<?php include __DIR__ . '/products/amestories.php'; ?>

<!-- ==========================================================================
     7. Crystal Frequently Asked Questions
     ========================================================================== -->
<?php include __DIR__ . '/products/amefaq.php'; ?>

<!-- ==========================================================================
     8. Dedicated Âme Crystals CTA Banner ("Let Your Crystal Find You.")
     ========================================================================== -->
<?php include __DIR__ . '/products/amecta.php'; ?>

<?php include __DIR__ . '/common/footer.php'; ?>
