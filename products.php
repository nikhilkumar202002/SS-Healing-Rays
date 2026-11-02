<?php
/**
 * ==============================================================================
 * Products & Sacred Offerings Page - SS Healing Rays
 * ==============================================================================
 */

// Page-level configuration variables
$page_title       = 'Sacred Products & Curations | SS Healing Rays';
$page_description = 'Discover thoughtfully curated crystals, sacred home decor, and holistic wellbeing tools energized with pure intention to support your healing journey.';
$current_page     = 'products';
$cta_text         = 'Explore Offerings';
$cta_url          = '#products';

// 1. Common Global Header
include __DIR__ . '/common/header.php';

// Banner image
$product_banner_bg = 'assets/product/crystal-store.jpg';
if (!file_exists(__DIR__ . '/' . $product_banner_bg)) {
    $product_banner_bg = 'assets/images/about/center-crystal-therapy.jpg';
}
?>

<!-- ==========================================================================
     1. Products Hero Banner
     ========================================================================== -->
<section class="product-banner-section position-relative" id="productBanner" aria-label="Sacred Products & Curations Banner">
    <img src="<?= htmlspecialchars($product_banner_bg) ?>" 
         alt="Sacred Products & Offerings" 
         class="product-banner-bg-img"
         loading="eager">

    <div class="product-banner-overlay" aria-hidden="true"></div>

    <div class="container position-relative product-banner-content-wrap">
        <div class="row justify-content-center text-center">
            <div class="col-12 col-lg-11 col-xl-10">
                
                <!-- Breadcrumb Navigation -->
                <nav class="product-breadcrumb mb-3" aria-label="Breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Products</li>
                    </ol>
                </nav>

                <!-- Hero Title: Strict 2 Lines Layout -->
                <h1 class="product-banner-title mb-3">
                    <span class="banner-title-line">Thoughtfully Curated for</span>
                    <span class="banner-title-line">Your <em>Wellbeing</em> & Sacred Space</span>
                </h1>

                <!-- Subtitle Description -->
                <p class="product-banner-subtitle mx-auto mb-0">
                    Discover energized healing crystals, sacred home decor, and transformative holistic wellness tools &mdash; charged with intention to harmonize your physical, emotional, and spiritual vibration.
                </p>

            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     2. Product Offerings Showcase
     ========================================================================== -->
<?php
// Reuse the styled product section component
$product_pretitle        = 'Our Products';
$product_title_1         = 'Thoughtfully Curated for';
$product_title_highlight = 'Your Wellbeing';
$show_product_header     = true;

include __DIR__ . '/home/product.php';
?>

<!-- ==========================================================================
     3. Why Choose Our Sacred Offerings
     ========================================================================== -->
<section class="product-features-section" aria-label="Why Choose Our Sacred Offerings">
    <div class="container">
        
        <div class="text-center max-w-700 mx-auto mb-5">
            <p class="product-pretitle text-uppercase" style="font-size: 0.82rem; font-weight: 700; letter-spacing: 0.14em; color: var(--secondary-color, #ba436c);">Our Sacred Guarantee</p>
            <h2 class="font-serif mb-3" style="font-family: var(--brand-font-marcellus, 'Marcellus', serif); font-size: clamp(1.8rem, 2.5vw, 2.4rem); color: var(--heading-color, #111133);">
                Charged with Purity, Guided by Intention
            </h2>
            <p class="text-muted" style="font-family: var(--brand-font-sans, 'Lato', sans-serif); font-size: 1rem; line-height: 1.7;">
                Every item and program at SS Healing Rays is personally evaluated, cleansed, and blessed to ensure the highest vibrational alignment for your journey.
            </p>
        </div>

        <div class="row g-4 justify-content-center">
            
            <div class="col-12 col-md-6 col-lg-4 d-flex">
                <div class="product-feature-card w-100 text-center">
                    <span class="product-feature-icon" aria-hidden="true">
                        <i class="bi bi-gem"></i>
                    </span>
                    <h3 class="product-feature-title">Authentic & Pure Minerals</h3>
                    <p class="product-feature-desc">
                        100% genuine, ethically sourced crystals and minerals selected for their natural metaphysical resonance and grounding frequencies.
                    </p>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 d-flex">
                <div class="product-feature-card w-100 text-center">
                    <span class="product-feature-icon" aria-hidden="true">
                        <i class="bi bi-stars"></i>
                    </span>
                    <h3 class="product-feature-title">Energetically Cleansed</h3>
                    <p class="product-feature-desc">
                        Every stone and sacred tool is lovingly cleansed with sound frequencies, sage, and Reiki energy before reaching your hands.
                    </p>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 d-flex">
                <div class="product-feature-card w-100 text-center">
                    <span class="product-feature-icon" aria-hidden="true">
                        <i class="bi bi-person-heart"></i>
                    </span>
                    <h3 class="product-feature-title">Personalized Guidance</h3>
                    <p class="product-feature-desc">
                        Not sure which crystal or practice aligns with you? Our master healers personally assist you in choosing what matches your energy.
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- ==========================================================================
     4. Frequently Asked Questions
     ========================================================================== -->
<?php include __DIR__ . '/home/faq.php'; ?>

<!-- ==========================================================================
     5. Sacred Retreat CTA Banner
     ========================================================================== -->
<?php include __DIR__ . '/home/cta-banner.php'; ?>

<!-- ==========================================================================
     6. Common Global Footer
     ========================================================================== -->
<?php include __DIR__ . '/common/footer.php'; ?>

