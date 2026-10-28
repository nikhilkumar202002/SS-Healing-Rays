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
                            <div class="masonry-zoom-icon" aria-label="Expand photo">
                                <i class="bi bi-arrows-fullscreen"></i>
                            </div>
                        </div>
                    </div>

                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<!-- Fullscreen Interactive Lightbox Modal -->
<div class="gallery-lightbox-modal" id="galleryLightbox" role="dialog" aria-modal="true" aria-label="Photo Preview Lightbox">
    <!-- Close Button -->
    <button type="button" class="lightbox-close-btn" id="lightboxCloseBtn" aria-label="Close photo preview">
        <i class="bi bi-x-lg"></i>
    </button>

    <!-- Navigation Chevrons -->
    <button type="button" class="lightbox-nav-btn lightbox-prev-btn" id="lightboxPrevBtn" aria-label="Previous photo">
        <i class="bi bi-chevron-left"></i>
    </button>
    <button type="button" class="lightbox-nav-btn lightbox-next-btn" id="lightboxNextBtn" aria-label="Next photo">
        <i class="bi bi-chevron-right"></i>
    </button>

    <!-- Lightbox Main Image & Caption -->
    <div class="lightbox-content-box">
        <img src="" alt="Fullscreen Gallery Photo" class="lightbox-img" id="lightboxActiveImg">
        <div class="lightbox-caption-bar">
            <span id="lightboxCaption"></span>
            <span class="lightbox-counter" id="lightboxCounter"></span>
        </div>
    </div>
</div>

<!-- Lightbox Interactive Script (Vanilla JS) -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const masonryItems = Array.from(document.querySelectorAll('.masonry-item'));
    const lightbox = document.getElementById('galleryLightbox');
    const lightboxImg = document.getElementById('lightboxActiveImg');
    const lightboxCaption = document.getElementById('lightboxCaption');
    const lightboxCounter = document.getElementById('lightboxCounter');
    const closeBtn = document.getElementById('lightboxCloseBtn');
    const prevBtn = document.getElementById('lightboxPrevBtn');
    const nextBtn = document.getElementById('lightboxNextBtn');

    let currentIndex = 0;

    // 1. Open Lightbox
    function openLightbox(index) {
        if (!masonryItems.length) return;
        currentIndex = (index + masonryItems.length) % masonryItems.length;
        const targetItem = masonryItems[currentIndex];

        const src = targetItem.getAttribute('data-src');
        const caption = targetItem.getAttribute('data-caption') || 'Sacred Healing Moment';

        lightboxImg.src = src;
        lightboxCaption.textContent = caption;
        lightboxCounter.textContent = `${currentIndex + 1} / ${masonryItems.length}`;

        lightbox.classList.add('is-active');
        document.body.style.overflow = 'hidden';
    }

    // 2. Close Lightbox
    function closeLightbox() {
        lightbox.classList.remove('is-active');
        document.body.style.overflow = '';
        setTimeout(() => {
            lightboxImg.src = '';
        }, 200);
    }

    // 3. Attach Item Click
    masonryItems.forEach((item, idx) => {
        item.addEventListener('click', function() {
            openLightbox(idx);
        });
    });

    // 4. Lightbox Controls
    closeBtn.addEventListener('click', closeLightbox);
    
    prevBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        openLightbox(currentIndex - 1);
    });

    nextBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        openLightbox(currentIndex + 1);
    });

    // Click backdrop to close
    lightbox.addEventListener('click', (e) => {
        if (e.target === lightbox) {
            closeLightbox();
        }
    });

    // Keyboard Shortcuts (Esc, Left Arrow, Right Arrow)
    document.addEventListener('keydown', (e) => {
        if (!lightbox.classList.contains('is-active')) return;
        if (e.key === 'Escape') closeLightbox();
        if (e.key === 'ArrowLeft') openLightbox(currentIndex - 1);
        if (e.key === 'ArrowRight') openLightbox(currentIndex + 1);
    });
});
</script>