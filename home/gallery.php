<?php
/**
 * Gallery Section - SS Healing Rays
 * Two continuous slow sliders moving in opposite directions, full bleed (zero horizontal padding),
 * accompanied by section header and main button.
 */

$gallery_pretitle        = $gallery_pretitle ?? 'SACRED GLIMPSES';
$gallery_title_1         = $gallery_title_1 ?? 'Capturing Moments of';
$gallery_title_2         = $gallery_title_2 ?? 'Inner';
$gallery_title_highlight = $gallery_title_highlight ?? 'Transformation';
$gallery_btn_text        = $gallery_btn_text ?? 'Explore Full Gallery';
$gallery_btn_url         = $gallery_btn_url ?? '#gallery';

// Row 1 Gallery Items (slides in one direction)
$gallery_row_1 = [
    [
        'image' => 'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.02.55 PM.jpeg',
        'alt'   => 'Sacred Healing Circle Gathering',
    ],
    [
        'image' => 'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.13 PM.jpeg',
        'alt'   => 'Guided Meditation Experience',
    ],
    [
        'image' => 'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.14 PM.jpeg',
        'alt'   => 'Spiritual Energy Awakening',
    ],
    [
        'image' => 'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.15 PM.jpeg',
        'alt'   => 'Chakra Harmonization Sanctuary',
    ],
    [
        'image' => 'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.17 PM (1).jpeg',
        'alt'   => 'Reiki Energy Healing Session',
    ],
    [
        'image' => 'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.18 PM (1).jpeg',
        'alt'   => 'Peaceful Contemplation and Balance',
    ],
    [
        'image' => 'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.19 PM (1).jpeg',
        'alt'   => 'Whispers of Stillness Retreat',
    ],
    [
        'image' => 'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.20 PM (1).jpeg',
        'alt'   => 'Holistic Transformation Workshop',
    ],
];

// Row 2 Gallery Items (slides in opposite direction)
$gallery_row_2 = [
    [
        'image' => 'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.20 PM.jpeg',
        'alt'   => 'Sacred Energy Connection',
    ],
    [
        'image' => 'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.21 PM.jpeg',
        'alt'   => 'Mindful Breathing Practice',
    ],
    [
        'image' => 'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.22 PM.jpeg',
        'alt'   => 'Deep Crystal Vibration Sanctuary',
    ],
    [
        'image' => 'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.23 PM (1).jpeg',
        'alt'   => 'Angel Guidance Meditation',
    ],
    [
        'image' => 'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.23 PM.jpeg',
        'alt'   => 'Tibetan Singing Bowl Sound Bath',
    ],
    [
        'image' => 'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.29 PM (1).jpeg',
        'alt'   => 'Sacred Community Gathering',
    ],
    [
        'image' => 'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.29 PM.jpeg',
        'alt'   => 'Inner Peace and Renewal',
    ],
    [
        'image' => 'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.33 PM.jpeg',
        'alt'   => 'Luminous Soul Alignment Session',
    ],
];
?>

<section class="gallery-section position-relative" id="gallery" aria-label="Photo Gallery of Sacred Healing Moments">
    
    <!-- 1. Section Header (Centered with internal spacing) -->
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

    <!-- 2. Dual Continuous Sliders (Full-Bleed, Opposite Directions, Smooth & Slow) -->
    <div class="gallery-sliders-wrapper">
        
        <!-- Slider Row 1: Drifts to Left (Opposite of Row 2) -->
        <div class="gallery-slider-row" data-direction="left">
            <div class="gallery-track gallery-track-left">
                <!-- Set A -->
                <div class="gallery-track-group">
                    <?php foreach ($gallery_row_1 as $item): ?>
                        <div class="gallery-slide-card">
                            <img src="<?= htmlspecialchars($item['image']) ?>" 
                                 alt="<?= htmlspecialchars($item['alt']) ?>" 
                                 class="gallery-slide-img" 
                                 loading="lazy">
                            <div class="gallery-hover-overlay" aria-hidden="true">
                                <span class="gallery-zoom-icon">
                                    <i class="bi bi-arrows-angle-expand"></i>
                                </span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <!-- Set B (Duplicated for 100% seamless infinite drift) -->
                <div class="gallery-track-group" aria-hidden="true">
                    <?php foreach ($gallery_row_1 as $item): ?>
                        <div class="gallery-slide-card">
                            <img src="<?= htmlspecialchars($item['image']) ?>" 
                                 alt="<?= htmlspecialchars($item['alt']) ?>" 
                                 class="gallery-slide-img" 
                                 loading="lazy">
                            <div class="gallery-hover-overlay" aria-hidden="true">
                                <span class="gallery-zoom-icon">
                                    <i class="bi bi-arrows-angle-expand"></i>
                                </span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <!-- Slider Row 2: Drifts to Right (Opposite of Row 1) -->
        <div class="gallery-slider-row" data-direction="right">
            <div class="gallery-track gallery-track-right">
                <!-- Set A -->
                <div class="gallery-track-group">
                    <?php foreach ($gallery_row_2 as $item): ?>
                        <div class="gallery-slide-card">
                            <img src="<?= htmlspecialchars($item['image']) ?>" 
                                 alt="<?= htmlspecialchars($item['alt']) ?>" 
                                 class="gallery-slide-img" 
                                 loading="lazy">
                            <div class="gallery-hover-overlay" aria-hidden="true">
                                <span class="gallery-zoom-icon">
                                    <i class="bi bi-arrows-angle-expand"></i>
                                </span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <!-- Set B (Duplicated for 100% seamless infinite drift) -->
                <div class="gallery-track-group" aria-hidden="true">
                    <?php foreach ($gallery_row_2 as $item): ?>
                        <div class="gallery-slide-card">
                            <img src="<?= htmlspecialchars($item['image']) ?>" 
                                 alt="<?= htmlspecialchars($item['alt']) ?>" 
                                 class="gallery-slide-img" 
                                 loading="lazy">
                            <div class="gallery-hover-overlay" aria-hidden="true">
                                <span class="gallery-zoom-icon">
                                    <i class="bi bi-arrows-angle-expand"></i>
                                </span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

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
            include dirname(__DIR__) . '/common/button.php';
        ?>
    </div>

</section>
