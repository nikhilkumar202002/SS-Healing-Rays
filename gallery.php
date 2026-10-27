<?php
/**
 * ==============================================================================
 * Gallery Component - SS Healing Rays
 * ==============================================================================
 * Features:
 *   - Tight Bento Grid of 4 Rows and 4 Columns (Zero White Space)
 *   - Perfectly interlocking cells (2x2 hero, 2x1 landscape, 1x2 portrait, 1x1 squares)
 *   - No Bootstrap container class (Full-width with 50px side padding)
 *   - Centered section heading matching brand typography
 *   - Reusable main button component: "Explore Full Gallery ↗"
 * ==============================================================================
 */

$gallery_pretitle        = $gallery_pretitle ?? 'SACRED GLIMPSES';
$gallery_title_1         = $gallery_title_1 ?? 'Capturing Moments of';
$gallery_title_2         = $gallery_title_2 ?? 'Inner';
$gallery_title_highlight = $gallery_title_highlight ?? 'Transformation';
$gallery_btn_text        = $gallery_btn_text ?? 'Explore Full Gallery';
$gallery_btn_url         = $gallery_btn_url ?? '#gallery';

// 9 Curated Authentic Images specifically sized for the 4x4 Bento Slots
$gallery_bento_items = $gallery_bento_items ?? [
    [
        'class' => 'bento-hero-2x2',
        'image' => 'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.02.55 PM.jpeg',
        'alt'   => 'Sacred Healing Circle Gathering',
    ],
    [
        'class' => 'bento-card-2',
        'image' => 'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.13 PM.jpeg',
        'alt'   => 'Guided Meditation Experience',
    ],
    [
        'class' => 'bento-card-3',
        'image' => 'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.17 PM (1).jpeg',
        'alt'   => 'Reiki Energy Healing Session',
    ],
    [
        'class' => 'bento-wide-2x1-top',
        'image' => 'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.19 PM (1).jpeg',
        'alt'   => 'Whispers of Stillness Retreat Landscape',
    ],
    [
        'class' => 'bento-wide-2x1-mid',
        'image' => 'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.20 PM (1).jpeg',
        'alt'   => 'Holistic Transformation Workshop',
    ],
    [
        'class' => 'bento-card-6',
        'image' => 'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.20 PM.jpeg',
        'alt'   => 'Sacred Energy Connection',
    ],
    [
        'class' => 'bento-tall-1x2',
        'image' => 'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.29 PM.jpeg',
        'alt'   => 'Mindful Breathing Practice',
    ],
    [
        'class' => 'bento-card-8',
        'image' => 'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.33 PM.jpeg',
        'alt'   => 'Tibetan Singing Bowl Sound Bath',
    ],
    [
        'class' => 'bento-wide-2x1-bottom',
        'image' => 'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.46 PM.jpeg',
        'alt'   => 'Sacred Community Gathering',
    ],
];
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

    <!-- 2. Tight Bento Grid (4 Rows x 4 Columns, Zero White Space) -->
    <div class="gallery-bento-grid">
        <?php foreach ($gallery_bento_items as $index => $item): ?>
            <div class="gallery-bento-item <?= htmlspecialchars($item['class']) ?>" data-index="<?= $index ?>">
                <img src="<?= htmlspecialchars($item['image']) ?>" 
                     alt="<?= htmlspecialchars($item['alt']) ?>" 
                     class="gallery-bento-img" 
                     loading="lazy">
                <div class="gallery-hover-overlay" aria-hidden="true">
                    <span class="gallery-zoom-icon">
                        <i class="bi bi-arrows-angle-expand"></i>
                    </span>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- 3. Bottom Action with Main Button -->
    <div class="gallery-action text-center">
        <?php
            $btn_text       = $gallery_btn_text;
            $btn_url        = $gallery_btn_url;
            $btn_class      = 'Btn-Gallery-Main';
            $btn_bg         = '#ffffff';
            $btn_icon_bg    = '#54205f';
            $btn_text_color = '#111133';
            $btn_icon_color = '#ffffff';
            include __DIR__ . '/assets/common/button.php';
        ?>
    </div>

</section>
