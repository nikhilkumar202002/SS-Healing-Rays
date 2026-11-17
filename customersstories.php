<?php

$page_title        = 'Customer Stories – Voices of Transformation | SS Healing Rays';
$page_description  = 'Watch client video testimonials, read genuine WhatsApp message feedback, and explore 33 authentic healing stories across Âme Crystals, Reiki, EFT, and SHAMAA Yoga at SS Healing Rays.';
$current_page      = 'customer-stories';
$cta_text          = 'Chat with us';
$cta_url           = 'https://wa.me/919000606792';

// 1. Common Global Header
include __DIR__ . '/common/header.php';

// 2. Load 33 Written Testimonials from dataset/testimonials.json
$testimonials_file = __DIR__ . '/dataset/testimonials.json';
$raw_testimonials = [];
if (file_exists($testimonials_file)) {
    $parsed_t = json_decode(file_get_contents($testimonials_file), true);
    if (!empty($parsed_t['testimonials'])) {
        $raw_testimonials = $parsed_t['testimonials'];
    }
}

// 3. Load Videos and Screenshots from dataset/testimonialAssets.json
$assets_file = __DIR__ . '/dataset/testimonialAssets.json';
$raw_assets = [];
if (file_exists($assets_file)) {
    $raw_assets = json_decode(file_get_contents($assets_file), true) ?? [];
}

// Helper to categorize written testimonials into filter groups & badges
function resolve_written_meta(array $t): array {
    $cat = $t['category'] ?? '';
    if (stripos($cat, 'Crystal') !== false) {
        return [
            'group' => 'crystals',
            'badge' => !empty($t['crystal']) ? $t['crystal'] : 'Âme Crystals',
            'icon'  => 'bi-gem',
        ];
    }
    if (stripos($cat, 'Reiki') !== false) {
        return [
            'group' => 'reiki',
            'badge' => 'Reiki Practice',
            'icon'  => 'bi-stars',
        ];
    }
    if (stripos($cat, 'Shamaa') !== false || stripos($cat, 'Yoga') !== false) {
        return [
            'group' => 'yoga',
            'badge' => 'Therapeutic Yoga',
            'icon'  => 'bi-person-arms-up',
        ];
    }
    if (stripos($cat, 'EFT') !== false) {
        return [
            'group' => 'eft',
            'badge' => 'EFT & Clarity',
            'icon'  => 'bi-heart-pulse',
        ];
    }
    return [
        'group' => 'programmes',
        'badge' => 'Holistic Programme',
        'icon'  => 'bi-sun',
    ];
}

// Separate and normalize assets
$videos_list = [];
$screenshots_list = [];
foreach ($raw_assets as $asset) {
    if (!empty($asset['isDuplicate'])) {
        continue;
    }
    if (($asset['mediaType'] ?? '') === 'video') {
        $formatted_date = !empty($asset['date']) ? date('M Y', strtotime($asset['date'])) : '';
        $clean_title = !empty($asset['clientName']) 
            ? $asset['clientName'] . ' Video Testimony' 
            : (!empty($asset['title']) ? $asset['title'] : 'Client Video Experience');
        
        $videos_list[] = [
            'kind'    => 'video',
            'id'      => 'vid-' . ($asset['id'] ?? uniqid()),
            'type'    => 'video',
            'group'   => 'video',
            'badge'   => 'Video Experience',
            'icon'    => 'bi-play-circle-fill',
            'title'   => $clean_title,
            'src'     => $asset['relativePath'],
            'client'  => !empty($asset['clientName']) ? $asset['clientName'] : 'SS Healing Rays Seeker',
            'date'    => $formatted_date,
            'size'    => $asset['sizeFormatted'] ?? '',
        ];
    } elseif (($asset['mediaType'] ?? '') === 'image') {
        $src_source = $asset['source'] ?? 'WhatsApp';
        $badge_label = $src_source . ' Feedback';
        $formatted_date = !empty($asset['date']) ? date('M Y', strtotime($asset['date'])) : '';
        $caption = !empty($asset['date']) ? 'Client feedback note (' . date('F Y', strtotime($asset['date'])) . ')' : 'Authentic client message feedback';
        
        $screenshots_list[] = [
            'kind'    => 'screenshot',
            'id'      => 'shot-' . ($asset['id'] ?? uniqid()),
            'type'    => 'screenshot',
            'group'   => 'screenshot',
            'badge'   => $badge_label,
            'icon'    => ($src_source === 'Instagram') ? 'bi-instagram' : 'bi-whatsapp',
            'title'   => !empty($asset['title']) ? $asset['title'] : $badge_label,
            'src'     => $asset['relativePath'],
            'caption' => $caption,
            'date'    => $formatted_date,
        ];
    }
}

// Normalize written testimonials
$written_list = [];
foreach ($raw_testimonials as $item) {
    $meta = resolve_written_meta($item);
    $written_list[] = [
        'kind'     => 'written',
        'id'       => 'story-' . ($item['id'] ?? uniqid()),
        'type'     => 'written',
        'group'    => $meta['group'],
        'badge'    => $meta['badge'],
        'icon'     => $meta['icon'],
        'title'    => !empty($item['title']) ? $item['title'] : ($item['category'] ?? 'Healing Reflection'),
        'stars'    => !empty($item['rating']) ? (int)$item['rating'] : 5,
        'quote'    => $item['quote'] ?? '',
        'author'   => !empty($item['author']) ? $item['author'] : 'Valued Seeker',
        'guide'    => $item['practitioner'] ?? '',
        'crystal'  => $item['crystal'] ?? '',
    ];
}

// Interleave all 138 items for a rich multimedia Masonry presentation on "All" view
$all_cards = [];
$v_idx = 0; $v_count = count($videos_list);
$w_idx = 0; $w_count = count($written_list);
$s_idx = 0; $s_count = count($screenshots_list);

while ($v_idx < $v_count || $w_idx < $w_count || $s_idx < $s_count) {
    // 1 video
    if ($v_idx < $v_count) {
        $all_cards[] = $videos_list[$v_idx++];
    }
    // 2-3 written stories
    for ($k = 0; $k < 3 && $w_idx < $w_count; $k++) {
        $all_cards[] = $written_list[$w_idx++];
    }
    // 5-7 screenshots
    for ($k = 0; $k < 7 && $s_idx < $s_count; $k++) {
        $all_cards[] = $screenshots_list[$s_idx++];
    }
}

// Calculate precise counts for filter navigation pills
$counts = [
    'all'        => count($all_cards),
    'video'      => count($videos_list),
    'written'    => count($written_list),
    'screenshot' => count($screenshots_list),
    'crystals'   => 0,
    'reiki'      => 0,
    'yoga'       => 0,
    'eft'        => 0,
    'programmes' => 0,
];

foreach ($written_list as $w) {
    $g = $w['group'];
    if (isset($counts[$g])) {
        $counts[$g]++;
    }
}
?>

<main class="stories-page-wrapper">

    <!-- ==========================================================================
         TESTIMONIALS SECTION: Full Multimedia Masonry Wall (Videos, Screenshots & Stories)
         ========================================================================== -->
    <section class="testimonials-section position-relative" id="customerStoriesGrid" aria-label="Client Testimonials and Experiences">
        <div class="container">
            
            <!-- Section Header -->
            <div class="testimonials-header text-center mx-auto">
                <p class="testimonials-pretitle">VOICES OF TRANSFORMATION</p>
                <h2 class="testimonials-heading">
                    <span class="d-block">Words of Healing,</span>
                    <span class="d-block">
                        Felt from the
                        <span class="title-highlight">Heart</span>
                    </span>
                </h2>
                <p class="stories-section-lead">
                    Experience authentic client transformations across <?= $counts['all'] ?> real touchpoints — including <?= $counts['video'] ?> video reflections, <?= $counts['screenshot'] ?> WhatsApp message notes, and <?= $counts['written'] ?> heartfelt written journeys.
                </p>
            </div>

            <!-- Interactive Multimedia & Modality Filter Tabs -->
            <nav class="stories-filter-nav" aria-label="Filter testimonials by format and modality">
                <button type="button" class="stories-filter-btn active" data-filter="all">
                    All Media <span class="stories-filter-count"><?= $counts['all'] ?></span>
                </button>
                <button type="button" class="stories-filter-btn" data-filter="video">
                    <i class="bi bi-play-circle-fill"></i> Videos <span class="stories-filter-count"><?= $counts['video'] ?></span>
                </button>
                <button type="button" class="stories-filter-btn" data-filter="written">
                    <i class="bi bi-card-text"></i> Written Stories <span class="stories-filter-count"><?= $counts['written'] ?></span>
                </button>
                <button type="button" class="stories-filter-btn" data-filter="screenshot">
                    <i class="bi bi-whatsapp"></i> Chat &amp; Social Notes <span class="stories-filter-count"><?= $counts['screenshot'] ?></span>
                </button>
                <button type="button" class="stories-filter-btn" data-filter="crystals">
                    <i class="bi bi-gem"></i> Âme Crystals <span class="stories-filter-count"><?= $counts['crystals'] ?></span>
                </button>
                <button type="button" class="stories-filter-btn" data-filter="reiki">
                    <i class="bi bi-stars"></i> Reiki Practice <span class="stories-filter-count"><?= $counts['reiki'] ?></span>
                </button>
                <button type="button" class="stories-filter-btn" data-filter="yoga">
                    <i class="bi bi-person-arms-up"></i> SHAMAA Yoga <span class="stories-filter-count"><?= $counts['yoga'] ?></span>
                </button>
                <button type="button" class="stories-filter-btn" data-filter="eft">
                    <i class="bi bi-heart-pulse"></i> EFT Clarity <span class="stories-filter-count"><?= $counts['eft'] ?></span>
                </button>
                <button type="button" class="stories-filter-btn" data-filter="programmes">
                    <i class="bi bi-sun"></i> Holistic Programmes <span class="stories-filter-count"><?= $counts['programmes'] ?></span>
                </button>
            </nav>

            <!-- Dynamic Pure CSS Columns Masonry Wall -->
            <div class="testimonials-masonry-wall" id="storiesMasonryWall">
                <?php foreach ($all_cards as $card): ?>
                    
                    <?php if ($card['kind'] === 'video'): ?>
                        <!-- ================= CARD TYPE: VIDEO TESTIMONIAL (Pure media, no captions) ================= -->
                        <div class="masonry-item" data-type="video" data-group="video" data-id="<?= htmlspecialchars($card['id']) ?>">
                            <article class="masonry-testimonial-card masonry-video-card p-2 p-md-3">
                                <div class="masonry-video-wrapper mb-0">
                                    <video controls preload="metadata" playsinline class="masonry-video-player" aria-label="Client Video Testimonial">
                                        <source src="<?= htmlspecialchars($card['src']) ?>" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                            </article>
                        </div>

                    <?php elseif ($card['kind'] === 'screenshot'): ?>
                        <!-- ================= CARD TYPE: SCREENSHOT / CHAT FEEDBACK (Pure media, no captions) ================= -->
                        <div class="masonry-item" data-type="screenshot" data-group="screenshot" data-id="<?= htmlspecialchars($card['id']) ?>">
                            <article class="masonry-testimonial-card masonry-screenshot-card p-2 p-md-3">
                                <div class="masonry-screenshot-wrapper masonry-screenshot-click mb-0" 
                                     data-full-src="<?= htmlspecialchars($card['src']) ?>" 
                                     title="Click to view full message">
                                    <img src="<?= htmlspecialchars($card['src']) ?>" 
                                         alt="Client Feedback" 
                                         class="masonry-screenshot-img" 
                                         loading="lazy">
                                    <span class="masonry-zoom-pill"><i class="bi bi-arrows-fullscreen"></i> Tap to Zoom</span>
                                </div>
                            </article>
                        </div>

                    <?php else: ?>
                        <!-- ================= CARD TYPE: WRITTEN STORY ================= -->
                        <div class="masonry-item" data-type="written" data-group="<?= htmlspecialchars($card['group']) ?>" data-id="<?= htmlspecialchars($card['id']) ?>">
                            <article class="masonry-testimonial-card">
                                
                                <!-- Header: Stars + Modality Badge -->
                                <div class="masonry-card-header">
                                    <div class="masonry-stars" aria-label="<?= $card['stars'] ?> out of 5 stars">
                                        <?php for ($s = 0; $s < $card['stars']; $s++): ?>
                                            <i class="bi bi-star-fill"></i>
                                        <?php endfor; ?>
                                    </div>
                                    <span class="masonry-badge">
                                        <i class="bi <?= htmlspecialchars($card['icon']) ?>"></i>
                                        <?= htmlspecialchars($card['badge']) ?>
                                    </span>
                                </div>

                                <!-- Title -->
                                <h3 class="masonry-card-title">
                                    <?= htmlspecialchars($card['title']) ?>
                                </h3>

                                <!-- Authentic Quotation -->
                                <p class="masonry-quote">
                                    &ldquo;<?= htmlspecialchars($card['quote']) ?>&rdquo;
                                </p>

                                <!-- Card Footer: Author + Guide attribution -->
                                <div class="masonry-card-footer">
                                    <h4 class="masonry-author">
                                        <?= htmlspecialchars($card['author']) ?>
                                    </h4>
                                    <div class="masonry-meta-tags">
                                        <?php if (!empty($card['guide'])): ?>
                                            <span class="masonry-meta-item">
                                                <i class="bi bi-sparkles"></i>
                                                Guided by <?= htmlspecialchars($card['guide']) ?>
                                            </span>
                                        <?php endif; ?>
                                        <?php if (!empty($card['crystal']) && $card['crystal'] !== $card['badge']): ?>
                                            <span class="masonry-meta-item">
                                                <i class="bi bi-gem"></i>
                                                <?= htmlspecialchars($card['crystal']) ?>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                            </article>
                        </div>

                    <?php endif; ?>

                <?php endforeach; ?>
            </div>

            <!-- Bottom Call to Action Card -->
            <div class="stories-bottom-cta">
                <h3 class="stories-bottom-cta-heading">
                    Ready to Write Your Own <em>Healing Story</em>?
                </h3>
                <p class="stories-bottom-cta-desc">
                    Whether you are seeking relief from stress, releasing emotional burdens, or realigning your inner energy, our compassionate guides are here to walk with you.
                </p>
                <div class="d-flex justify-content-center align-items-center gap-3 flex-wrap">
                    <?php
                        $btn_text  = 'Book a Healing Session';
                        $btn_url   = 'contact';
                        $btn_class = 'Btn-Profile-Primary';
                        include __DIR__ . '/common/button.php';
                    ?>
                </div>
            </div>

        </div>
    </section>

</main>

<!-- Lightbox Modal for Full-Size Screenshot View -->
<div class="modal fade" id="testimonialImageModal" tabindex="-1" aria-labelledby="testimonialImageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered testimonial-modal-dialog">
        <div class="modal-content border-0 bg-dark bg-opacity-75 shadow-none" style="backdrop-filter: blur(8px);">
            <div class="modal-header border-0 pb-0 justify-content-end">
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center p-2 p-md-3">
                <img src="" id="modalTestimonialImg" class="testimonial-modal-img" alt="Client Feedback Note">
            </div>
        </div>
    </div>
</div>

<script>
// Interactive Client-Side Masonry Filter and Image Lightbox Modal
document.addEventListener('DOMContentLoaded', function () {
    const filterBtns = document.querySelectorAll('.stories-filter-btn');
    const masonryItems = document.querySelectorAll('.masonry-item');
    const modalElement = document.getElementById('testimonialImageModal');
    const modalImg = document.getElementById('modalTestimonialImg');
    const modalCap = document.getElementById('modalTestimonialCaption');
    let bsModal = null;

    if (modalElement && typeof bootstrap !== 'undefined') {
        bsModal = new bootstrap.Modal(modalElement);
    }

    // Filter pills logic
    filterBtns.forEach(btn => {
        btn.addEventListener('click', function () {
            const target = this.getAttribute('data-filter');

            // Toggle active pill state
            filterBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');

            // Pause any playing videos when switching filters
            document.querySelectorAll('.masonry-video-player').forEach(v => {
                if (!v.paused) v.pause();
            });

            // Filter items with smooth transition
            masonryItems.forEach(item => {
                const type = item.getAttribute('data-type');
                const group = item.getAttribute('data-group');
                let show = false;

                if (target === 'all') {
                    show = true;
                } else if (target === 'video') {
                    show = (type === 'video');
                } else if (target === 'written') {
                    show = (type === 'written');
                } else if (target === 'screenshot') {
                    show = (type === 'screenshot');
                } else {
                    show = (group === target);
                }

                if (show) {
                    item.classList.remove('is-hidden');
                } else {
                    item.classList.add('is-hidden');
                }
            });
        });
    });

    // Screenshot click to open lightbox modal
    document.querySelectorAll('.masonry-screenshot-click').forEach(trigger => {
        trigger.addEventListener('click', function () {
            const src = this.getAttribute('data-full-src');
            if (modalImg) modalImg.src = src;
            if (bsModal) bsModal.show();
        });
    });
});
</script>

<?php
// 4. Common Global Footer
include __DIR__ . '/common/footer.php';
?>
