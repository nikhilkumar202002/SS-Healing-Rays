<?php
/**
 * Gallery Page Banner Component - SS Healing Rays
 * Clean layout using current data with black linear gradient overlay (bottom to top).
 */

$gallery_banner_bg    = $gallery_banner_bg ?? 'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.40 PM.jpeg';
$gallery_banner_title = $gallery_banner_title ?? 'Moments of <em>Stillness,</em><br>Journeys of <em>Transformation</em>';
$gallery_banner_desc  = $gallery_banner_desc ?? 'Step inside our visual sanctuary. An authentic glimpse into transformative energy healing, guided meditations, sacred retreats, and soul-nourishing community circles.';

?>

<section class="gallery-banner-section position-relative" id="galleryBanner" aria-label="Sacred Gallery Highlights">
    <!-- Background Image -->
    <img src="<?= htmlspecialchars($gallery_banner_bg) ?>" 
         alt="Sacred Healing Gallery Banner" 
         class="gallery-banner-bg-img"
         loading="eager">

    <!-- Black Linear Gradient Overlay from Bottom to Top -->
    <div class="gallery-banner-overlay" aria-hidden="true"></div>

    <div class="container position-relative gallery-banner-content-wrap">
        <div class="row justify-content-center text-center">
            <div class="col-xl-9 col-lg-10 col-md-11">
                
                <!-- Breadcrumb Navigation -->
                <nav class="gallery-breadcrumb mb-3" aria-label="Breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sacred Gallery</li>
                    </ol>
                </nav>

                <!-- Hero Title -->
                <h1 class="gallery-banner-title mb-3">
                    <?= $gallery_banner_title ?>
                </h1>

                <!-- Subtitle Description -->
                <p class="gallery-banner-subtitle mx-auto mb-0">
                    <?= htmlspecialchars($gallery_banner_desc) ?>
                </p>

            </div>
        </div>
    </div>
</section>