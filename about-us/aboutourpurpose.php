<?php
/**
 * ==============================================================================
 * Our Purpose Section - SS Healing Rays (About Us Page)
 * "From Personal Transformation to Shared Purpose"
 * Features:
 *   - Full background banner view from assets/banner/about-banner.jpg
 *   - Complete visibility of botanical leaves on left & right flanks
 *   - Strict 2-Line Heading: "From Personal Transformation" / "to Shared Purpose"
 *   - Narrative story of the founders' personal journey and pivotal transformation
 *   - Styled quote callout for the teacher's life-changing guidance
 *   - Evolution Journey Card (Left Image | Right Progressive Milestones):
 *       1. From Learning to Teaching
 *       2. From Teaching to Personalised Coaching
 *       3. Our Work Continued to Grow
 * Dedicated Stylesheet: assets/css/aboutourpurpose.css
 * ==============================================================================
 */

$purpose_badge           = $purpose_badge ?? 'Our Journey';
$purpose_title_1         = $purpose_title_1 ?? 'From Personal Transformation';
$purpose_title_highlight = $purpose_title_highlight ?? 'to Shared Purpose';
$purpose_banner_img      = $purpose_banner_img ?? 'assets/banner/about-banner.jpg';

$purpose_para_1 = $purpose_para_1 ?? 'Almost a decade ago, we were two working professionals trying to balance our careers, families and personal lives. Though our backgrounds were different, we recognised similar emotional struggles—exhaustion, dissatisfaction and the constant feeling of not being able to give our best at work and home.';

$purpose_para_2 = $purpose_para_2 ?? 'Our search for answers led us to a teacher who introduced us to practices for understanding and releasing emotional baggage.';

$purpose_quote  = $purpose_quote ?? '“You don\'t have to depend on someone else every time. Learn these practices and take responsibility for your own life.”';

$purpose_quote_impact = $purpose_quote_impact ?? 'That became the beginning of our transformation.';

$purpose_para_3 = $purpose_para_3 ?? 'As we learned and practised, the way we experienced and responded to life began to change. Our circumstances had not changed much, but our energy, relationships and sense of wellbeing did. We realised that what was helping us could also help others.';

// Evolution Journey Milestones (Left Image | Right Content)
$evolution_img = $evolution_img ?? (
    file_exists(dirname(__DIR__) . '/assets/images/about/center-reiki-session.jpg') 
        ? 'assets/images/about/center-reiki-session.jpg' 
        : (file_exists(dirname(__DIR__) . '/assets/images/selected-gallery/Meditation Class in a Sunlit Hall.png') 
            ? 'assets/images/selected-gallery/Meditation Class in a Sunlit Hall.png' 
            : (file_exists(dirname(__DIR__) . '/assets/images/workshop-healing-circle.png') 
                ? 'assets/images/workshop-healing-circle.png' 
                : 'assets/images/about-image.jpeg'))
);

$evolution_milestones = $evolution_milestones ?? [
    [
        'icon'       => 'bi-mortarboard',
        'title'      => 'From Learning to Teaching',
        'paragraphs' => [
            'The pandemic gave us the opportunity to deepen our learning and explore different healing modalities. What began as personal growth became a passion for teaching. Through courses and training programmes, we started sharing what we had learned and supporting others in their own growth.',
        ],
    ],
    [
        'icon'       => 'bi-person-heart',
        'title'      => 'From Teaching to Personalised Coaching',
        'paragraphs' => [
            'We realised that not everyone needed a course. Some needed personal guidance; others needed structured support. This led us to one-to-one coaching and personalised 21-day and three-month programmes, bringing together practices from different modalities to suit individual needs.',
            'As our work grew, we made the significant decision to leave our secure professional careers and dedicate ourselves to this purpose. It was not an easy choice, but one we believed in.',
        ],
    ],
    [
        'icon'       => 'bi-flower1',
        'title'      => 'Our Work Continued to Grow',
        'paragraphs' => [
            'Over time, our vision expanded to include Âme Crystals, bringing personalised crystal guidance into our work, and Shamaa, extending our offerings into yoga and wellness. Both are part of the wider SS Healing Rays vision.',
        ],
    ],
];
?>

<section class="purpose-section position-relative" id="ourPurpose" style="background-image: url('<?= htmlspecialchars($purpose_banner_img) ?>');" aria-label="Our Purpose - From Personal Transformation to Shared Purpose">
    <div class="container-fluid purpose-container">
        
        <div class="purpose-content-wrap mx-auto text-center">
            
            <?php if (!empty($purpose_badge)): ?>
                <!-- Unified Eyebrow Badge -->
                <div class="purpose-badge mb-3">
                    <span class="badge-icon" aria-hidden="true"><i class="bi bi-compass"></i></span>
                    <span class="badge-text"><?= htmlspecialchars($purpose_badge) ?></span>
                </div>
            <?php endif; ?>

            <!-- Main Heading: Strict 2 Lines Layout -->
            <h2 class="purpose-heading">
                <span class="purpose-title-line"><?= htmlspecialchars($purpose_title_1) ?></span>
                <span class="purpose-title-line">
                    <span class="title-highlight"><?= htmlspecialchars($purpose_title_highlight) ?></span>
                </span>
            </h2>

            <!-- Center-Aligned Full-Width Story Narrative -->
            <div class="purpose-description-wrap">
                <p class="purpose-description">
                    <?= htmlspecialchars($purpose_para_1) ?>
                </p>

                <p class="purpose-description">
                    <?= htmlspecialchars($purpose_para_2) ?>
                </p>

                <!-- Pivotal Teacher Quote Callout -->
                <div class="purpose-quote-callout mx-auto my-3 text-center">
                    <blockquote class="purpose-quote">
                        <?= htmlspecialchars($purpose_quote) ?>
                    </blockquote>
                    <p class="purpose-quote-impact">
                        <?= htmlspecialchars($purpose_quote_impact) ?>
                    </p>
                </div>

                <p class="purpose-description">
                    <?= htmlspecialchars($purpose_para_3) ?>
                </p>
            </div>

            <!-- White Background Evolution Card (Left Image | Right Content) -->
            <div class="purpose-two-col-card purpose-evolution-card mx-auto">
                <div class="row g-4 g-lg-5 align-items-stretch">
                    
                    <!-- Left Column: Visual Showcase Image -->
                    <div class="col-12 col-lg-5 d-flex">
                        <div class="evolution-image-wrapper w-100">
                            <div class="evolution-image-card">
                                <img src="<?= htmlspecialchars($evolution_img) ?>" 
                                     alt="Our Journey - SS Healing Rays Evolution" 
                                     loading="lazy">
                            </div>
                        </div>
                    </div>

                    <!-- Right Column: Evolution Milestones Content -->
                    <div class="col-12 col-lg-7 d-flex">
                        <div class="evolution-content-wrapper w-100 text-start">
                            <div class="evolution-milestones-list">
                                <?php foreach ($evolution_milestones as $index => $milestone): ?>
                                    <div class="evolution-milestone-item <?= $index < count($evolution_milestones) - 1 ? 'has-divider' : '' ?>">
                                        <div class="milestone-header d-flex align-items-center gap-3">
                                            <span class="milestone-icon" aria-hidden="true">
                                                <i class="bi <?= htmlspecialchars($milestone['icon']) ?>"></i>
                                            </span>
                                            <h3 class="milestone-title mb-0"><?= htmlspecialchars($milestone['title']) ?></h3>
                                        </div>
                                        <div class="milestone-body">
                                            <?php foreach ($milestone['paragraphs'] as $p): ?>
                                                <p class="milestone-desc"><?= $p ?></p>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
</section>
