<?php
/**
 * ==============================================================================
 * Individual Journey Approach Section Component - SS Healing Rays (About Us Page)
 * Layout: Left Column Content (Heading + 3 Pathway Offerings) | Right Column Image (Equal Height, No Border)
 * Dedicated Stylesheet: assets/css/aboutapproach.css
 * ==============================================================================
 */

$approach_title_main      = $approach_title_main ?? 'Multiple Ways to';
$approach_title_highlight = $approach_title_highlight ?? 'Learn, Grow and Transform';

$approach_pathways        = $approach_pathways ?? [
    [
        'title' => 'Personalised Coaching & Healing',
        'desc'  => 'Individual support through personalised coaching and suitable healing approaches to navigate emotional, personal, relationship and professional challenges.',
        'icon'  => 'bi bi-heart-pulse',
    ],
    [
        'title' => 'Learning & Transformation Programs',
        'desc'  => 'Structured courses, workshops and 21-day and three-month programs that bring together practical tools and learnings from multiple modalities.',
        'icon'  => 'bi bi-mortarboard',
    ],
    [
        'title' => 'Wellness & Professional Development',
        'desc'  => 'Meditation, yoga, therapeutic yoga, emotional wellbeing and corporate training initiatives that support individuals, groups and workplaces.',
        'icon'  => 'bi bi-brightness-high',
    ],
];

$approach_img             = $approach_img ?? (
    file_exists(dirname(__DIR__) . '/assets/images/about/phylosophy.jpg')
        ? 'assets/images/about/phylosophy.jpg'
        : (file_exists(dirname(__DIR__) . '/assets/images/about/phylosophy')
            ? 'assets/images/about/phylosophy'
            : 'assets/images/about-image.jpeg')
);
$approach_img_alt         = $approach_img_alt ?? 'Multiple Ways to Learn, Grow and Transform - SS Healing Rays';
?>

<section class="approach-section position-relative" id="ourApproach" aria-label="Our Individualized Approach">
    <div class="container">
        
        <div class="row align-items-stretch g-4 g-lg-5 approach-grid-row">
            
            <!-- Left Column: Heading and 3 Pathway Offerings -->
            <div class="col-12 col-lg-6 col-approach-content">
                <div class="approach-content">
                    
                    <!-- Main Section Heading -->
                    <h2 class="approach-heading">
                        <span class="approach-heading-main"><?= htmlspecialchars($approach_title_main) ?></span>
                        <span class="approach-heading-highlight title-highlight"><?= htmlspecialchars($approach_title_highlight) ?></span>
                    </h2>

                    <!-- 3 Pathway Offerings -->
                    <div class="approach-pathways">
                        <?php foreach ($approach_pathways as $item): ?>
                            <div class="approach-pathway-item">
                                <div class="approach-pathway-icon" aria-hidden="true">
                                    <i class="<?= htmlspecialchars($item['icon']) ?>"></i>
                                </div>
                                <div class="approach-pathway-body">
                                    <h3 class="approach-pathway-title">
                                        <?= htmlspecialchars($item['title']) ?>
                                    </h3>
                                    <p class="approach-pathway-desc">
                                        <?= htmlspecialchars($item['desc']) ?>
                                    </p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                </div>
            </div>

            <!-- Right Column: Equal-Height Borderless Sanctuary Image -->
            <div class="col-12 col-lg-6 col-approach-image">
                <div class="approach-image-wrapper">
                    <div class="approach-image-card">
                        <img src="<?= htmlspecialchars($approach_img) ?>" 
                             alt="<?= htmlspecialchars($approach_img_alt) ?>"
                             class="approach-image"
                             loading="lazy">
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
