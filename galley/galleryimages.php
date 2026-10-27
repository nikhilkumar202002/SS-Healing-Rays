<?php

$gallery_dir = dirname(__DIR__) . '/assets/images/gallery';
$gallery_items = [];

$category_presets = [
    ['slug' => 'circles',    'badge' => 'Healing Circle',    'caption' => 'Sacred Energy Alignment'],
    ['slug' => 'retreats',   'badge' => 'Retreat Gathering', 'caption' => 'Deep Soul Connection'],
    ['slug' => 'meditation', 'badge' => 'Meditation',        'caption' => 'Mindful Inner Stillness'],
    ['slug' => 'community',  'badge' => 'Sacred Community',  'caption' => 'Hearts in Harmony'],
];

if (is_dir($gallery_dir)) {
    $raw_files = glob($gallery_dir . '/*.{jpeg,jpg,png,webp,JPEG,JPG,PNG,WEBP}', GLOB_BRACE);
    if ($raw_files) {
        natsort($raw_files);
        $idx = 0;
        foreach ($raw_files as $file) {
            $filename = basename($file);
            $preset   = $category_presets[$idx % count($category_presets)];
            $gallery_items[] = [
                'src'      => 'assets/images/gallery/' . $filename,
                'alt'      => 'SS Healing Rays ' . $preset['badge'] . ' - ' . $preset['caption'],
                'category' => $preset['slug'],
                'badge'    => $preset['badge'],
                'caption'  => $preset['caption'],
                'index'    => $idx,
            ];
            $idx++;
        }
    }
}

$total_images = count($gallery_items);
?>

<section class="masonry-gallery-section" id="gallery" aria-label="Photo Gallery Collection">
    <div class="container-fluid px-3 px-md-4 px-xl-5">
        
        <!-- Section Header -->
        <div class="masonry-header text-center">
            
            <h2 class="masonry-heading">
                Explore the <em>Sacred</em> Moments
            </h2>
            <p class="masonry-lead mx-auto">
                Every photograph captures genuine stillness, energetic breakthroughs, and mindful connections experienced within our sanctuary.
            </p>
        </div>

        <!-- Filter Tabs -->
        <div class="masonry-filter-nav" role="tablist" aria-label="Gallery category filters">
            <button type="button" class="masonry-filter-btn active" data-filter="all">
                All Moments (<?= $total_images ?>)
            </button>
            <button type="button" class="masonry-filter-btn" data-filter="circles">
                Healing Circles
            </button>
            <button type="button" class="masonry-filter-btn" data-filter="retreats">
                Retreat Gatherings
            </button>
            <button type="button" class="masonry-filter-btn" data-filter="meditation">
                Guided Meditations
            </button>
            <button type="button" class="masonry-filter-btn" data-filter="community">
                Sacred Community
            </button>
        </div>

        <!-- Pure CSS Columns Masonry Grid -->
        <div class="masonry-columns" id="masonryGrid">
            <?php foreach ($gallery_items as $item): ?>
                <div class="masonry-item" 
                     data-category="<?= htmlspecialchars($item['category']) ?>" 
                     data-index="<?= $item['index'] ?>"
                     data-src="<?= htmlspecialchars($item['src']) ?>"
                     data-caption="<?= htmlspecialchars($item['caption']) ?> • <?= htmlspecialchars($item['badge']) ?>">
                    
                    <img src="<?= htmlspecialchars($item['src']) ?>" 
                         alt="<?= htmlspecialchars($item['alt']) ?>" 
                         class="masonry-img" 
                         loading="lazy">
                    
                    <div class="masonry-overlay">
                        <span class="masonry-item-badge">
                            <?= htmlspecialchars($item['badge']) ?>
                        </span>
                        
                        <div class="masonry-item-bottom">
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

<!-- Inline Interactive Script for Filtering & Lightbox (Vanilla JS) -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.masonry-filter-btn');
    const masonryItems = Array.from(document.querySelectorAll('.masonry-item'));
    const lightbox = document.getElementById('galleryLightbox');
    const lightboxImg = document.getElementById('lightboxActiveImg');
    const lightboxCaption = document.getElementById('lightboxCaption');
    const lightboxCounter = document.getElementById('lightboxCounter');
    const closeBtn = document.getElementById('lightboxCloseBtn');
    const prevBtn = document.getElementById('lightboxPrevBtn');
    const nextBtn = document.getElementById('lightboxNextBtn');

    let currentVisibleItems = [...masonryItems];
    let currentIndex = 0;

    // 1. Category Filtering
    filterButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            filterButtons.forEach(b => b.classList.remove('active'));
            this.classList.add('active');

            const filter = this.getAttribute('data-filter');

            masonryItems.forEach(item => {
                const itemCat = item.getAttribute('data-category');
                if (filter === 'all' || itemCat === filter) {
                    item.classList.remove('is-hidden');
                } else {
                    item.classList.add('is-hidden');
                }
            });

            currentVisibleItems = masonryItems.filter(item => !item.classList.contains('is-hidden'));
        });
    });

    // 2. Open Lightbox
    function openLightbox(index) {
        if (!currentVisibleItems.length) return;
        currentIndex = (index + currentVisibleItems.length) % currentVisibleItems.length;
        const targetItem = currentVisibleItems[currentIndex];

        const src = targetItem.getAttribute('data-src');
        const caption = targetItem.getAttribute('data-caption') || 'Sacred Healing Moment';

        lightboxImg.src = src;
        lightboxCaption.textContent = caption;
        lightboxCounter.textContent = `${currentIndex + 1} / ${currentVisibleItems.length}`;

        lightbox.classList.add('is-active');
        document.body.style.overflow = 'hidden';
    }

    // 3. Close Lightbox
    function closeLightbox() {
        lightbox.classList.remove('is-active');
        document.body.style.overflow = '';
        setTimeout(() => {
            lightboxImg.src = '';
        }, 200);
    }

    // 4. Attach Item Click
    masonryItems.forEach(item => {
        item.addEventListener('click', function() {
            const visibleIdx = currentVisibleItems.indexOf(this);
            if (visibleIdx !== -1) {
                openLightbox(visibleIdx);
            }
        });
    });

    // 5. Lightbox Controls
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