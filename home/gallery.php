<?php

$gallery_heading  = $gallery_heading ?? 'Moments of Connection, Learning & <span class="title-highlight">Celebration</span>';
$gallery_desc     = $gallery_desc ?? 'A glimpse into our community, shared experiences and milestones.';
$gallery_btn_text = $gallery_btn_text ?? 'Explore Âme Crystals';
$gallery_btn_url  = $gallery_btn_url ?? 'ame-crystals';

// Alt tags for mindful accessibility
$gallery_alt_titles = [
    'Sacred Healing Circle Gathering',
    'Guided Meditation Experience',
    'Spiritual Energy Awakening',
    'Chakra Harmonization Sanctuary',
    'Reiki Energy Healing Session',
    'Peaceful Contemplation and Balance',
    'Whispers of Stillness Retreat',
    'Sacred Energy Connection',
    'Mindful Breathing Practice',
    'Deep Crystal Vibration Sanctuary',
    'Angel Guidance Meditation',
    'Tibetan Singing Bowl Sound Bath',
    'Sacred Community Gathering',
    'Inner Peace and Renewal',
    'Luminous Soul Alignment Session',
    'Holistic Wellness Circle',
    'Heart-Centered Energy Flow',
    'Divine Presence & Stillness',
    'Spiritual Healing Breakthrough',
    'Radiant Living Connection',
];

$gallery_row_1 = [];
$gallery_row_2 = [];

$selected_gallery_dir = dirname(__DIR__) . '/assets/images/selected-gallery';

if (is_dir($selected_gallery_dir)) {
    $raw_files = [];
    $all_entries = @scandir($selected_gallery_dir);
    if ($all_entries !== false) {
        foreach ($all_entries as $entry) {
            if ($entry === '.' || $entry === '..' || str_starts_with($entry, '.')) {
                continue;
            }
            $ext = strtolower(pathinfo($entry, PATHINFO_EXTENSION));
            if (in_array($ext, ['jpg', 'jpeg', 'png', 'webp'])) {
                $raw_files[] = $entry;
            }
        }
    }
    if (!empty($raw_files)) {
        natsort($raw_files);
        $idx = 0;
        foreach ($raw_files as $file) {
            $alt_text = $gallery_alt_titles[$idx % count($gallery_alt_titles)];
            $item = [
                'image' => 'assets/images/selected-gallery/' . $file,
                'alt'   => $alt_text,
            ];
            if ($idx % 2 === 0) {
                $gallery_row_1[] = $item;
            } else {
                $gallery_row_2[] = $item;
            }
            $idx++;
        }
    }
}

// Fallback if directory scan returns empty
if (empty($gallery_row_1) || empty($gallery_row_2)) {
    $gallery_row_1 = [
        ['image' => 'assets/images/selected-gallery/Celebration 2.jpg',                                'alt' => 'Community Healing Celebration'],
        ['image' => 'assets/images/selected-gallery/Copy of Kanha 4.jpg',                             'alt' => 'Mindful Stillness and Reflection'],
        ['image' => 'assets/images/selected-gallery/IMG_3736 (1).PNG',                                'alt' => 'Spiritual Energy Awakening'],
        ['image' => 'assets/images/selected-gallery/IMG_3863.PNG',                                    'alt' => 'Chakra Harmonization Sanctuary'],
        ['image' => 'assets/images/selected-gallery/Online yoga session international yoga day.PNG',   'alt' => 'Online Yoga Session International Yoga Day'],
        ['image' => 'assets/images/selected-gallery/Screenshot_20260621_151422_Gallery.jpg',          'alt' => 'Sacred Healing Circle Gathering'],
        ['image' => 'assets/images/selected-gallery/WhatsApp Image 2026-11-11 at 11.24.38 PM.jpeg',   'alt' => 'Reiki Energy Healing Session'],
        ['image' => 'assets/images/selected-gallery/WhatsApp Image 2026-11-11 at 11.40.06 PM.jpeg',   'alt' => 'Guided Meditation Experience'],
        ['image' => 'assets/images/selected-gallery/WhatsApp Image 2026-11-11 at 11.40.07 PM.jpeg',   'alt' => 'Deep Crystal Vibration Sanctuary'],
        ['image' => 'assets/images/selected-gallery/WhatsApp Image 2026-11-11 at 11.43.59 PM (5).jpeg', 'alt' => 'Inner Peace and Renewal'],
        ['image' => 'assets/images/selected-gallery/Yoga session to students at college.jpg',         'alt' => 'Yoga Session for College Students'],
        ['image' => 'assets/images/selected-gallery/celebration 10.jpg',                               'alt' => 'Heart-Centered Energy Celebration'],
        ['image' => 'assets/images/selected-gallery/celebration 7.jpg',                                'alt' => 'Transformative Healing Milestone'],
        ['image' => 'assets/images/selected-gallery/celebration 9.jpg',                                'alt' => 'Radiant Spiritual Connection'],
    ];

    $gallery_row_2 = [
        ['image' => 'assets/images/selected-gallery/Celebrations-1.jpg',                              'alt' => 'Sacred Community Gathering'],
        ['image' => 'assets/images/selected-gallery/IMG_3715.PNG',                                    'alt' => 'Holistic Wellness Circle'],
        ['image' => 'assets/images/selected-gallery/IMG_3767.PNG',                                    'alt' => 'Peaceful Contemplation and Balance'],
        ['image' => 'assets/images/selected-gallery/Meditation Class in a Sunlit Hall.png',           'alt' => 'Meditation Class in a Sunlit Hall'],
        ['image' => 'assets/images/selected-gallery/Screenshot_20260621_151408_Gallery.jpg',          'alt' => 'Mindful Breathing Practice'],
        ['image' => 'assets/images/selected-gallery/WhatsApp Image 2026-11-11 at 11.24.37 PM.jpeg',   'alt' => 'Divine Presence & Stillness'],
        ['image' => 'assets/images/selected-gallery/WhatsApp Image 2026-11-11 at 11.26.41 PM.jpeg',   'alt' => 'Whispers of Stillness Retreat'],
        ['image' => 'assets/images/selected-gallery/WhatsApp Image 2026-11-11 at 11.40.07 PM (2).jpeg', 'alt' => 'Angel Guidance Meditation'],
        ['image' => 'assets/images/selected-gallery/WhatsApp Image 2026-11-11 at 11.40.35 PM.jpeg',   'alt' => 'Tibetan Singing Bowl Sound Bath'],
        ['image' => 'assets/images/selected-gallery/WhatsApp Image 2026-11-11 at 11.43.59 PM.jpeg',   'alt' => 'Luminous Soul Alignment Session'],
        ['image' => 'assets/images/selected-gallery/celebration - 6.jpg',                              'alt' => 'Community Joy and Energy Flow'],
        ['image' => 'assets/images/selected-gallery/celebration 4.jpg',                                'alt' => 'Soul Breakthrough Milestone'],
        ['image' => 'assets/images/selected-gallery/celebration 8.jpg',                                'alt' => 'Radiant Living Connection'],
        ['image' => 'assets/images/selected-gallery/celebrations 8.jpg',                               'alt' => 'Sacred Energy Celebration'],
    ];
}
?>

<section class="gallery-section position-relative" id="gallery" aria-label="Photo Gallery of Sacred Healing Moments">
    
    <!-- 1. Section Header (Centered with internal spacing) -->
    <div class="gallery-header text-center mx-auto">
        <h2 class="gallery-heading"><?= $gallery_heading ?></h2>
        <?php if (!empty($gallery_desc)): ?>
            <p class="gallery-description"><?= htmlspecialchars($gallery_desc) ?></p>
        <?php endif; ?>
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
