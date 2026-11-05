<?php
/**
 * ==============================================================================
 * Curated Crystal Categories Component - SS Healing Rays
 * "Beautifully crafted, Intentionally chosen - Crystal for sale"
 * Dedicated to ame-crystals.php
 * ==============================================================================
 */

$crystal_cat_title_1     = $crystal_cat_title_1 ?? 'Beautifully crafted, Intentionally chosen';
$crystal_cat_title_2     = $crystal_cat_title_2 ?? '- Crystal for sale';
$crystal_cat_lead        = $crystal_cat_lead ?? 'A carefully curated selection of product categories, intentionally chosen to bring comfort, grounding, and harmony to your personal journey.';

// Helper to resolve .jpg vs .jpeg on various server environments
if (!function_exists('resolve_ame_cat_img')) {
    function resolve_ame_cat_img($path) {
        $full = dirname(__DIR__) . '/' . $path;
        if (file_exists($full)) {
            return $path;
        }
        if (str_ends_with($path, '.jpeg')) {
            $alt = substr($path, 0, -5) . '.jpg';
            if (file_exists(dirname(__DIR__) . '/' . $alt)) return $alt;
        } elseif (str_ends_with($path, '.jpg')) {
            $alt = substr($path, 0, -4) . '.jpeg';
            if (file_exists(dirname(__DIR__) . '/' . $alt)) return $alt;
        }
        return $path;
    }
}

$crystal_categories = $crystal_categories ?? [
    [
        'title'       => 'Crystal jewellery',
        'subtitle'    => 'Bracelets, Malas (including Customized combinations), Pendants, Bangles, Finger rings, Ear rings & Anklets',
        'image'       => resolve_ame_cat_img('assets/categories/customize.jpeg'),
    ],
    [
        'title'       => 'Home and Space Decor',
        'subtitle'    => 'Trees, Wind chimes, Towers, Clusters, Pyramids, Figurines (God, Goddess, Angels, Spirit animals)',
        'image'       => resolve_ame_cat_img('assets/categories/home-decor.jpeg'),
    ],
    [
        'title'       => 'Crystal Pouches',
        'subtitle'    => 'For Abundance, Harmonious Relationships, Protection, Career, Wealth & Money, Success & Students.',
        'image'       => resolve_ame_cat_img('assets/categories/tumble-stones.jpeg'),
    ],
    [
        'title'       => 'Cleansers',
        'subtitle'    => 'California White sage, Palo Santo, Salt products, Selenite products.',
        'image'       => resolve_ame_cat_img('assets/categories/crystal-grid.jpeg'),
    ],
];
?>

<section class="crystal-categories-section position-relative" id="crystalCategories" aria-label="Curated Crystal Categories">
    <div class="container crystal-categories-container">
        
        <!-- Header with Title -->
        <div class="row align-items-end mb-4 mb-lg-5 crystal-cat-header-row">
            <div class="col-12 col-lg-10">
                <div class="crystal-cat-header text-center text-lg-start">
                    
                    <!-- Headline: 2-Line Balanced Layout -->
                    <h2 class="crystal-cat-heading mb-3">
                        <span class="heading-line"><?= htmlspecialchars($crystal_cat_title_1) ?></span>
                        <span class="heading-line">
                            <span class="title-highlight"><?= htmlspecialchars($crystal_cat_title_2) ?></span>
                        </span>
                    </h2>

                    <!-- Lead Description -->
                    <p class="crystal-cat-lead mb-0">
                        <?= htmlspecialchars($crystal_cat_lead) ?>
                    </p>

                </div>
            </div>
        </div>

        <!-- 4-Card Responsive Grid (No Slider) -->
        <div class="row g-4 crystal-categories-grid">
            <?php foreach ($crystal_categories as $item): ?>
                <div class="col-12 col-sm-6 col-lg-3 d-flex">
                    <div class="crystal-cat-card w-100 h-100 d-flex flex-column">
                        
                        <!-- Card Image Box -->
                        <div class="crystal-cat-media position-relative overflow-hidden">
                            <img src="<?= htmlspecialchars($item['image']) ?>" 
                                 alt="<?= htmlspecialchars($item['title']) ?>" 
                                 class="crystal-cat-img"
                                 loading="lazy">
                        </div>

                        <!-- Card Body -->
                        <div class="crystal-cat-body d-flex flex-column flex-grow-1 p-3 p-sm-4">
                            <h3 class="crystal-cat-card-title mb-2">
                                <?= htmlspecialchars($item['title']) ?>
                            </h3>
                            <p class="crystal-cat-card-desc mb-3 flex-grow-1">
                                <?= htmlspecialchars($item['subtitle']) ?>
                            </p>
                            
                            <!-- Card Footer Action: Enquiry Now Button -->
                            <div class="crystal-cat-footer mt-auto">
                                <button type="button" 
                                        class="btn btn-crystal-enquiry w-100"
                                        data-bs-toggle="modal" 
                                        data-bs-target="#bookingModal"
                                        data-service-title="<?= htmlspecialchars($item['title']) ?>"
                                        data-service-category="Âme Crystals"
                                        aria-label="Enquiry Now for <?= htmlspecialchars($item['title']) ?>">
                                    Enquiry Now
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>
