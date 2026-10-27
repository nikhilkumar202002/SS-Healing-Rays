<?php
/**
 * Workshop Page Banner Component - SS Healing Rays
 * Exact layout as Training Page Banner with pure black linear gradient overlay (bottom to top).
 * Typography: Marcellus headline across two balanced lines with Playfair Display italic accents.
 */

$workshop_banner_bg    = $workshop_banner_bg ?? 'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.46 PM.jpeg';
$workshop_banner_desc  = $workshop_banner_desc ?? 'Join our sacred community circles, immersive breathwork journeys, energy resets, and guided meditation workshops crafted to awaken self-love, align your chakras, and manifest abundance.';

// Split into two distinct lines without accidental word wrapping
if (isset($workshop_banner_title)) {
    $parts = preg_split('/<br\s*\/?>/i', $workshop_banner_title);
    $workshop_banner_title_1 = $parts[0] ?? $workshop_banner_title;
    $workshop_banner_title_2 = $parts[1] ?? '';
} else {
    $workshop_banner_title_1 = $workshop_banner_title_1 ?? 'Sacred Healing Circles,';
    $workshop_banner_title_2 = $workshop_banner_title_2 ?? 'Experiential Holistic <em>Workshops</em>';
}

?>

<section class="gallery-banner-section workshop-banner-section position-relative" id="workshopBanner" aria-label="Experiential Holistic Workshops Banner">
    <!-- Background Image -->
    <img src="<?= htmlspecialchars($workshop_banner_bg) ?>" 
         alt="Experiential Holistic Workshops Banner" 
         class="gallery-banner-bg-img workshop-banner-bg-img"
         loading="eager">

    <!-- Black Linear Gradient Overlay from Bottom to Top -->
    <div class="gallery-banner-overlay workshop-banner-overlay" aria-hidden="true"></div>

    <div class="container position-relative gallery-banner-content-wrap workshop-banner-content-wrap">
        <div class="row justify-content-center text-center">
            <div class="col-12 col-lg-11 col-xl-10">
                
                <!-- Breadcrumb Navigation -->
                <nav class="gallery-breadcrumb workshop-breadcrumb mb-3" aria-label="Breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Workshops</li>
                    </ol>
                </nav>

                <!-- Hero Title: Strict 2 Lines without Line Breaking -->
                <h1 class="gallery-banner-title workshop-banner-title mb-3">
                    <span class="banner-title-line"><?= $workshop_banner_title_1 ?></span>
                    <?php if (!empty($workshop_banner_title_2)): ?>
                        <span class="banner-title-line"><?= $workshop_banner_title_2 ?></span>
                    <?php endif; ?>
                </h1>

                <!-- Subtitle Description -->
                <p class="gallery-banner-subtitle workshop-banner-subtitle mx-auto mb-0">
                    <?= htmlspecialchars($workshop_banner_desc) ?>
                </p>

            </div>
        </div>
    </div>
</section>