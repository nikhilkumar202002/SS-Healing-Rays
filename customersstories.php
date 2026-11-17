<?php

$page_title        = 'Customer Stories – Voices of Transformation | SS Healing Rays';
$page_description  = 'Read all 33 authentic client stories and testimonials covering Âme Crystals, Reiki healing, EFT clarity, and SHAMAA therapeutic yoga at SS Healing Rays.';
$current_page      = 'customer-stories';
$cta_text          = 'Chat with us';
$cta_url           = 'https://wa.me/919000606792';

// 1. Common Global Header
include __DIR__ . '/common/header.php';

// 2. Load all 33 testimonials dynamically from dataset
$dataset_file = __DIR__ . '/dataset/testimonials.json';
$all_testimonials = [];
if (file_exists($dataset_file)) {
    $raw_json = file_get_contents($dataset_file);
    $parsed   = json_decode($raw_json, true);
    if (!empty($parsed['testimonials'])) {
        $all_testimonials = $parsed['testimonials'];
    }
}

// Helper to categorize each testimonial into clean filter groups & visual badges
function resolve_testimonial_meta(array $t): array {
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

// Calculate tally counts for filter buttons
$filter_counts = [
    'all'        => count($all_testimonials),
    'crystals'   => 0,
    'reiki'      => 0,
    'yoga'       => 0,
    'eft'        => 0,
    'programmes' => 0,
];

foreach ($all_testimonials as $item) {
    $meta = resolve_testimonial_meta($item);
    $g = $meta['group'];
    if (isset($filter_counts[$g])) {
        $filter_counts[$g]++;
    }
}
?>

<main class="stories-page-wrapper">

    <!-- ==========================================================================
         TESTIMONIALS SECTION: Dynamic Masonry Layout with Interactive Filter Tabs
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
                    Authentic words and heartfelt reflections from our seekers, practitioners, and crystal guardians across <?= count($all_testimonials) ?> transformative journeys.
                </p>
            </div>

            <!-- Interactive Modality Filter Tabs -->
            <nav class="stories-filter-nav" aria-label="Filter testimonials by modality">
                <button type="button" class="stories-filter-btn active" data-filter="all">
                    All Stories <span class="stories-filter-count"><?= $filter_counts['all'] ?></span>
                </button>
                <button type="button" class="stories-filter-btn" data-filter="crystals">
                    <i class="bi bi-gem"></i> Âme Crystals <span class="stories-filter-count"><?= $filter_counts['crystals'] ?></span>
                </button>
                <button type="button" class="stories-filter-btn" data-filter="reiki">
                    <i class="bi bi-stars"></i> Reiki Practice & Training <span class="stories-filter-count"><?= $filter_counts['reiki'] ?></span>
                </button>
                <button type="button" class="stories-filter-btn" data-filter="yoga">
                    <i class="bi bi-person-arms-up"></i> SHAMAA Yoga <span class="stories-filter-count"><?= $filter_counts['yoga'] ?></span>
                </button>
                <button type="button" class="stories-filter-btn" data-filter="eft">
                    <i class="bi bi-heart-pulse"></i> EFT Clarity <span class="stories-filter-count"><?= $filter_counts['eft'] ?></span>
                </button>
                <button type="button" class="stories-filter-btn" data-filter="programmes">
                    <i class="bi bi-sun"></i> Holistic Programmes <span class="stories-filter-count"><?= $filter_counts['programmes'] ?></span>
                </button>
            </nav>

            <!-- Dynamic Pure CSS Columns Masonry Wall (All 33 Testimonials from Dataset) -->
            <div class="testimonials-masonry-wall" id="storiesMasonryWall">
                <?php foreach ($all_testimonials as $item): ?>
                    <?php 
                        $meta   = resolve_testimonial_meta($item);
                        $stars  = !empty($item['rating']) ? (int)$item['rating'] : 5;
                        $author = !empty($item['author']) ? $item['author'] : 'Valued Seeker';
                        $title  = !empty($item['title']) ? $item['title'] : ($item['category'] ?? 'Healing Reflection');
                        $quote  = $item['quote'] ?? '';
                        $guide  = $item['practitioner'] ?? '';
                        $cryst  = $item['crystal'] ?? '';
                    ?>
                    <div class="masonry-item" data-group="<?= htmlspecialchars($meta['group']) ?>" data-id="<?= (int)$item['id'] ?>">
                        <article class="masonry-testimonial-card">
                            
                            <!-- Header: Stars + Modality Badge -->
                            <div class="masonry-card-header">
                                <div class="masonry-stars" aria-label="<?= $stars ?> out of 5 stars">
                                    <?php for ($s = 0; $s < $stars; $s++): ?>
                                        <i class="bi bi-star-fill"></i>
                                    <?php endfor; ?>
                                </div>
                                <span class="masonry-badge">
                                    <i class="bi <?= htmlspecialchars($meta['icon']) ?>"></i>
                                    <?= htmlspecialchars($meta['badge']) ?>
                                </span>
                            </div>

                            <!-- Title / Highlight -->
                            <h3 class="masonry-card-title">
                                <?= htmlspecialchars($title) ?>
                            </h3>

                            <!-- Authentic Quotation -->
                            <p class="masonry-quote">
                                &ldquo;<?= htmlspecialchars($quote) ?>&rdquo;
                            </p>

                            <!-- Card Footer: Author + Guide attribution -->
                            <div class="masonry-card-footer">
                                <h4 class="masonry-author">
                                    <?= htmlspecialchars($author) ?>
                                </h4>
                                <div class="masonry-meta-tags">
                                    <?php if (!empty($guide)): ?>
                                        <span class="masonry-meta-item">
                                            <i class="bi bi-sparkles"></i>
                                            Guided by <?= htmlspecialchars($guide) ?>
                                        </span>
                                    <?php endif; ?>
                                    <?php if (!empty($cryst) && $cryst !== $meta['badge']): ?>
                                        <span class="masonry-meta-item">
                                            <i class="bi bi-gem"></i>
                                            <?= htmlspecialchars($cryst) ?>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                        </article>
                    </div>
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

<script>
// Interactive Client-Side Masonry Filter
document.addEventListener('DOMContentLoaded', function () {
    const filterBtns = document.querySelectorAll('.stories-filter-btn');
    const masonryItems = document.querySelectorAll('.masonry-item');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', function () {
            const targetFilter = this.getAttribute('data-filter');

            // Toggle active pill state
            filterBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');

            // Filter items with smooth transition
            masonryItems.forEach(item => {
                const group = item.getAttribute('data-group');
                if (targetFilter === 'all' || group === targetFilter) {
                    item.classList.remove('is-hidden');
                } else {
                    item.classList.add('is-hidden');
                }
            });
        });
    });
});
</script>

<?php
// 4. Common Global Footer
include __DIR__ . '/common/footer.php';
?>
