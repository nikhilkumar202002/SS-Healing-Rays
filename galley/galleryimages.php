<?php

$gallery_dir = dirname(__DIR__) . '/assets/images/gallery';
$gallery_items = [];

$captions = [
    'Sacred Energy Alignment',
    'Deep Soul Connection',
    'Mindful Inner Stillness',
    'Hearts in Harmony',
    'Holistic Healing Circle',
    'Chakra Harmonization Sanctuary',
    'Reiki Awakening Practice',
    'Tibetan Sound Bath Resonance',
    'Peaceful Contemplation and Balance',
    'Guided Meditation Journey',
];

if (is_dir($gallery_dir)) {
    $raw_files = [];
    $all_entries = @scandir($gallery_dir);
    if ($all_entries !== false) {
        foreach ($all_entries as $entry) {
            if ($entry === '.' || $entry === '..' || str_starts_with($entry, '.')) {
                continue;
            }
            $ext = strtolower(pathinfo($entry, PATHINFO_EXTENSION));
            if (in_array($ext, ['jpg', 'jpeg', 'png', 'webp'])) {
                $raw_files[] = $gallery_dir . '/' . $entry;
            }
        }
    }
    
    if (!empty($raw_files)) {
        natsort($raw_files);
        $idx = 0;
        foreach ($raw_files as $file) {
            $filename = basename($file);
            $caption  = $captions[$idx % count($captions)];
            $gallery_items[] = [
                'src'     => 'assets/images/gallery/' . $filename,
                'alt'     => 'SS Healing Rays - ' . $caption,
                'caption' => $caption,
                'index'   => $idx,
            ];
            $idx++;
        }
    }
}

$total_images = count($gallery_items);
?>

<section class="masonry-gallery-section" id="gallery" aria-label="Photo Gallery Collection">
    <div class="container-fluid px-3 px-md-4 px-xl-5">
        
        <!-- Section Header with Marcellus and Playfair Display highlighted font -->
        <div class="masonry-header text-center">
           
            <h2 class="masonry-heading">
                Explore the <em>Sacred</em> Moments
            </h2>
            <p class="masonry-lead mx-auto">
                Every photograph captures genuine stillness, energetic breakthroughs, and mindful connections experienced within our sanctuary.
            </p>
        </div>

        <!-- Pure CSS Columns Masonry Grid (All Images) -->
        <div class="masonry-columns" id="masonryGrid">
            <?php foreach ($gallery_items as $item): ?>
                <div class="masonry-item" 
                     data-index="<?= $item['index'] ?>"
                     data-src="<?= htmlspecialchars($item['src']) ?>"
                     data-caption="<?= htmlspecialchars($item['caption']) ?>">
                    
                    <img src="<?= htmlspecialchars($item['src']) ?>" 
                         alt="<?= htmlspecialchars($item['alt']) ?>" 
                         class="masonry-img" 
                         loading="lazy">
                    
                    <div class="masonry-overlay">
                        <div class="masonry-item-bottom w-100">
                            <span class="masonry-item-caption">
                                <?= htmlspecialchars($item['caption']) ?>
                            </span>
                        </div>
                    </div>

                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

