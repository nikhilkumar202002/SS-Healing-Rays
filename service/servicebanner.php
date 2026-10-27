<?php

$service_banner_bg   = $service_banner_bg ?? 'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.19 PM (1).jpeg';
$service_banner_desc = $service_banner_desc ?? 'Immerse yourself in integrative energy therapies, certified training courses, and transformative personal healing sessions tailored to restore your body, mind, and spirit.';

// Split into two distinct lines without accidental word wrapping
if (isset($service_banner_title)) {
    $parts = preg_split('/<br\s*\/?>/i', $service_banner_title);
    $service_banner_title_1 = $parts[0] ?? $service_banner_title;
    $service_banner_title_2 = $parts[1] ?? '';
} else {
    $service_banner_title_1 = $service_banner_title_1 ?? 'Sacred Modalities for';
    $service_banner_title_2 = $service_banner_title_2 ?? 'Deep Healing & <em>Transformation</em>';
}
?>

<section class="service-banner-section position-relative" id="serviceBanner" aria-label="Sacred Healing Services Banner">
    <!-- Background Image -->
    <img src="<?= htmlspecialchars($service_banner_bg) ?>" 
         alt="Sacred Healing Services Banner" 
         class="service-banner-bg-img"
         loading="eager">

    <!-- Black Linear Gradient Overlay from Bottom to Top -->
    <div class="service-banner-overlay" aria-hidden="true"></div>

    <div class="container position-relative service-banner-content-wrap">
        <div class="row justify-content-center text-center">
            <div class="col-12 col-lg-11 col-xl-10">
                
                <!-- Breadcrumb Navigation -->
                <nav class="service-breadcrumb mb-3" aria-label="Breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Healing Services</li>
                    </ol>
                </nav>

                <!-- Hero Title: Strict 2 Lines without Line Breaking -->
                <h1 class="service-banner-title mb-3">
                    <span class="banner-title-line"><?= $service_banner_title_1 ?></span>
                    <?php if (!empty($service_banner_title_2)): ?>
                        <span class="banner-title-line"><?= $service_banner_title_2 ?></span>
                    <?php endif; ?>
                </h1>

                <!-- Subtitle Description -->
                <p class="service-banner-subtitle mx-auto mb-0">
                    <?= htmlspecialchars($service_banner_desc) ?>
                </p>

            </div>
        </div>
    </div>
</section>