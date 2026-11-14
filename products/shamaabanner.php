<?php

$shamaa_brand_name       = $shamaa_brand_name ?? 'SHAMAA';
$shamaa_heading_1        = $shamaa_heading_1 ?? 'Where Yogic Wisdom';
$shamaa_heading_2        = $shamaa_heading_2 ?? 'Meets the <em>Art of Healing.</em>';
$shamaa_subheading       = $shamaa_subheading ?? 'Therapeutic Yoga and integrated wellness practices, thoughtfully adapted to the individual.';
$shamaa_description      = $shamaa_description ?? 'SHAMAA brings together the wisdom of yoga and holistic healing practices to support physical, mental and emotional well-being. With Therapeutic Yoga at its heart, sessions are designed for individuals who may feel hesitant about yoga, have difficulty with certain movements or are simply unsure where to begin. Practice starts at a comfortable level and progresses at an individual pace—because yoga is not about perfect postures; it is about steady, comfortable and consistent practice.';
$shamaa_whatsapp_phone   = $shamaa_whatsapp_phone ?? '919966010981';
$shamaa_whatsapp_text    = rawurlencode('Hi Sravanti, I would like to book a Clarity Call for SHAMAA Therapeutic Yoga & Wellness.');
$shamaa_whatsapp_url     = "https://wa.me/{$shamaa_whatsapp_phone}?text={$shamaa_whatsapp_text}";

$shamaa_primary_cta_text = $shamaa_primary_cta_text ?? 'Book a Clarity Call';
$shamaa_primary_cta_url  = $shamaa_primary_cta_url ?? $shamaa_whatsapp_url;
$shamaa_secondary_cta_text = $shamaa_secondary_cta_text ?? 'Explore Therapeutic Yoga';
$shamaa_secondary_cta_url  = $shamaa_secondary_cta_url ?? '#therapeuticYoga';

$shamaa_banner_bg = 'assets/banner/shamaa-banner.jpg';
if (!file_exists(dirname(__DIR__) . '/' . $shamaa_banner_bg)) {
    if (file_exists(dirname(__DIR__) . '/assets/banner/shamaa-banner.jpeg')) {
        $shamaa_banner_bg = 'assets/banner/shamaa-banner.jpeg';
    } elseif (file_exists(dirname(__DIR__) . '/assets/product/wellness.jpg')) {
        $shamaa_banner_bg = 'assets/product/wellness.jpg';
    } else {
        $shamaa_banner_bg = 'assets/banner/banner-1.jpg';
    }
}

// Robust live-server image resolution for Shamaa logo
$shamaa_logo_img = 'assets/product/product-logo-1.png';
if (!file_exists(dirname(__DIR__) . '/' . $shamaa_logo_img)) {
    if (file_exists(dirname(__DIR__) . '/assets/logo/main-logo.png')) {
        $shamaa_logo_img = 'assets/logo/main-logo.png';
    }
}
?>

<section class="product-banner-section ame-crystal-hero shamaa-hero-banner position-relative" id="shamaaHeroBanner" aria-label="SHAMAA Hero Banner">
    <img src="<?= htmlspecialchars($shamaa_banner_bg) ?>" 
         alt="SHAMAA &ndash; Where Yogic Wisdom Meets the Art of Healing" 
         class="product-banner-bg-img"
         loading="eager">

    <div class="product-banner-overlay" aria-hidden="true"></div>

    <div class="container position-relative product-banner-content-wrap">
        <div class="row justify-content-center text-center">
            <div class="col-12 col-lg-11 col-xl-10">
                
                <!-- Brand Identity: Logo on top and Heading -->
                <div class="ame-hero-brand-header mb-3">
                    <div class="ame-hero-logo-wrap mx-auto mb-2">
                        <img src="<?= htmlspecialchars($shamaa_logo_img) ?>" 
                             alt="<?= htmlspecialchars($shamaa_brand_name) ?> Emblem Logo" 
                             class="ame-hero-logo-img"
                             loading="eager">
                    </div>
                    <h2 class="ame-hero-brand-heading mb-0"><?= htmlspecialchars($shamaa_brand_name) ?></h2>
                </div>

                <!-- Hero Title: Strict 2 Lines Layout -->
                <h1 class="product-banner-title mb-3">
                    <span class="banner-title-line"><?= $shamaa_heading_1 ?></span>
                    <span class="banner-title-line"><?= $shamaa_heading_2 ?></span>
                </h1>

                <!-- Subheading (Clean text: no background, no pill border, no icon) -->
                <?php if (!empty($shamaa_subheading)): ?>
                    <p class="shamaa-hero-subheading mb-3 mx-auto">
                        <?= htmlspecialchars($shamaa_subheading) ?>
                    </p>
                <?php endif; ?>

                <!-- Story Description Paragraph -->
                <p class="product-banner-subtitle mx-auto mb-4">
                    <?= htmlspecialchars($shamaa_description) ?>
                </p>

                <!-- Action Buttons: Primary WhatsApp Button + Secondary Explore Button -->
                <div class="ame-hero-actions d-flex flex-wrap align-items-center justify-content-center gap-3 pt-2">
                    
                    <!-- Button 1: Book a Clarity Call (WhatsApp Link) -->
                    <?php if (!empty($shamaa_primary_cta_text)): ?>
                        <div class="crystal-primary-btn-wrap">
                            <?php
                                $btn_text  = $shamaa_primary_cta_text;
                                $btn_url   = $shamaa_primary_cta_url;
                                $btn_class = 'Btn-Crystal-Primary Btn-Shamaa-Primary';
                                $btn_attr  = 'target="_blank" rel="noopener noreferrer" title="Book a Clarity Call on WhatsApp"';
                                include dirname(__DIR__) . '/common/button.php';
                            ?>
                        </div>
                    <?php endif; ?>

                    <!-- Button 2: Explore Therapeutic Yoga (Frosted Pill CTA) -->
                    <?php if (!empty($shamaa_secondary_cta_text)): ?>
                        <a href="<?= htmlspecialchars($shamaa_secondary_cta_url) ?>" 
                           class="btn-hero-crystal-consultation btn-hero-shamaa-explore"
                           title="<?= htmlspecialchars($shamaa_secondary_cta_text) ?>">
                            <i class="bi bi-person-arms-up me-2" aria-hidden="true"></i>
                            <span><?= htmlspecialchars($shamaa_secondary_cta_text) ?></span>
                        </a>
                    <?php endif; ?>

                </div>

            </div>
        </div>
    </div>
</section>
