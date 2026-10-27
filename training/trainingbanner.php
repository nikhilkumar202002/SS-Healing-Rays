<?php
/**
 * Training Page Banner Component - SS Healing Rays
 * Exact layout as Gallery Banner with pure black linear gradient overlay (bottom to top).
 * Typography: Marcellus headline across two balanced lines with Playfair Display italic accents.
 */

$training_banner_bg    = $training_banner_bg ?? 'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.41 PM.jpeg';
$training_banner_desc  = $training_banner_desc ?? 'Empower your healing gifts through certified training in Reiki, Crystal Therapy, Angel Healing, and transformative wellness courses guided by experienced master mentors.';

// Split into two distinct lines without accidental word wrapping
if (isset($training_banner_title)) {
    $parts = preg_split('/<br\s*\/?>/i', $training_banner_title);
    $training_banner_title_1 = $parts[0] ?? $training_banner_title;
    $training_banner_title_2 = $parts[1] ?? '';
} else {
    $training_banner_title_1 = $training_banner_title_1 ?? 'Empower Your Sacred Calling,';
    $training_banner_title_2 = $training_banner_title_2 ?? 'Certified Holistic <em>Training</em>';
}

?>

<section class="gallery-banner-section training-banner-section position-relative" id="trainingBanner" aria-label="Certified Holistic Training Banner">
    <!-- Background Image -->
    <img src="<?= htmlspecialchars($training_banner_bg) ?>" 
         alt="Certified Holistic Training Banner" 
         class="gallery-banner-bg-img training-banner-bg-img"
         loading="eager">

    <!-- Black Linear Gradient Overlay from Bottom to Top -->
    <div class="gallery-banner-overlay training-banner-overlay" aria-hidden="true"></div>

    <div class="container position-relative gallery-banner-content-wrap training-banner-content-wrap">
        <div class="row justify-content-center text-center">
            <div class="col-12 col-lg-11 col-xl-10">
                
                <!-- Breadcrumb Navigation -->
                <nav class="gallery-breadcrumb training-breadcrumb mb-3" aria-label="Breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Certified Training</li>
                    </ol>
                </nav>

                <!-- Hero Title: Strict 2 Lines without Line Breaking -->
                <h1 class="gallery-banner-title training-banner-title mb-3">
                    <span class="banner-title-line"><?= $training_banner_title_1 ?></span>
                    <?php if (!empty($training_banner_title_2)): ?>
                        <span class="banner-title-line"><?= $training_banner_title_2 ?></span>
                    <?php endif; ?>
                </h1>

                <!-- Subtitle Description -->
                <p class="gallery-banner-subtitle training-banner-subtitle mx-auto mb-0">
                    <?= htmlspecialchars($training_banner_desc) ?>
                </p>

            </div>
        </div>
    </div>
</section>
