<?php
/**
 * ==============================================================================
 * Gallery Component - SS Healing Rays
 * ==============================================================================
 * Features:
 *   - 3 Rows x 4 Columns Grid (12 Images)
 *   - No Bootstrap container class (Full-width layout with 50px left/right padding)
 *   - Section heading matching brand typography (Marcellus + Playfair Display)
 *   - Loads authentic images from assets/images/gallery folder
 *   - Smooth image hover micro-interactions
 * ==============================================================================
 */

$gallery_pretitle        = $gallery_pretitle ?? 'SACRED GLIMPSES';
$gallery_title_1         = $gallery_title_1 ?? 'Capturing Moments of';
$gallery_title_2         = $gallery_title_2 ?? 'Inner';
$gallery_title_highlight = $gallery_title_highlight ?? 'Transformation';

// Discover images dynamically from assets/images/gallery
$gallery_dir = __DIR__ . '/assets/images/gallery';
$discovered_images = glob($gallery_dir . '/*.{jpeg,jpg,png,webp,JPEG,JPG,PNG}', GLOB_BRACE);

if (!empty($discovered_images)) {
    // Select 12 authentic gallery images
    $gallery_images = array_map(function($path) {
        return 'assets/images/gallery/' . basename($path);
    }, array_slice($discovered_images, 0, 12));
} else {
    // Fallback curated list
    $gallery_images = [
        'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.02.55 PM.jpeg',
        'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.13 PM.jpeg',
        'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.17 PM (1).jpeg',
        'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.18 PM.jpeg',
        'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.19 PM (1).jpeg',
        'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.22 PM.jpeg',
        'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.23 PM (1).jpeg',
        'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.29 PM.jpeg',
        'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.33 PM.jpeg',
        'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.40 PM.jpeg',
        'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.46 PM.jpeg',
        'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.53 PM.jpeg',
    ];
}
?>

<section class="gallery-section position-relative" id="gallery" aria-label="Photo Gallery of Sacred Healing Moments">
    
    <!-- 1. Section Header -->
    <div class="gallery-header text-center mx-auto">
        <p class="gallery-pretitle"><?= htmlspecialchars($gallery_pretitle) ?></p>
        <h2 class="gallery-heading">
            <span class="d-block"><?= htmlspecialchars($gallery_title_1) ?></span>
            <span class="d-block">
                <?= htmlspecialchars($gallery_title_2) ?>
                <span class="title-highlight"><?= htmlspecialchars($gallery_title_highlight) ?></span>
            </span>
        </h2>
    </div>

    <!-- 2. Gallery 3 Rows x 4 Columns Grid (No container class, 50px side padding) -->
    <div class="gallery-grid">
        <?php foreach ($gallery_images as $index => $img): ?>
            <div class="gallery-item" data-index="<?= $index ?>">
                <div class="gallery-card">
                    <img src="<?= htmlspecialchars($img) ?>" 
                         alt="SS Healing Rays Sacred Experience <?= $index + 1 ?>" 
                         class="gallery-img" 
                         loading="lazy">
                    <div class="gallery-hover-overlay" aria-hidden="true">
                        <span class="gallery-zoom-icon">
                            <i class="bi bi-arrows-angle-expand"></i>
                        </span>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</section>
