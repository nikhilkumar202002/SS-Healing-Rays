<?php

$purpose_badge           = $purpose_badge ?? 'Our Journey';
$purpose_title_1         = $purpose_title_1 ?? 'From Personal Transformation';
$purpose_title_highlight = $purpose_title_highlight ?? 'to Shared Purpose';
$purpose_banner_img      = $purpose_banner_img ?? 'assets/banner/about-banner.jpg';

$purpose_para_1 = $purpose_para_1 ?? 'Almost a decade ago, we were two working professionals trying to balance our careers, families and personal lives. Though our backgrounds were different, we recognised similar emotional struggles—exhaustion, dissatisfaction and the constant feeling of not being able to give our best at work and home.';

$purpose_para_2 = $purpose_para_2 ?? 'Our search for answers led us to a teacher who introduced us to practices for understanding and releasing emotional baggage.';

$purpose_quote  = $purpose_quote ?? '“You don\'t have to depend on someone else every time. Learn these practices and take responsibility for your own life.”';

$purpose_quote_impact = $purpose_quote_impact ?? 'That became the beginning of our transformation.';

$purpose_para_3 = $purpose_para_3 ?? 'As we learned and practised, the way we experienced and responded to life began to change. Our circumstances had not changed much, but our energy, relationships and sense of wellbeing did. We realised that what was helping us could also help others.';

// Evolution Images from assets/images/about/
$evolution_img_1 = $evolution_img_1 ?? (
    file_exists(dirname(__DIR__) . '/assets/images/about/How-work-evolved-1.jpg') 
        ? 'assets/images/about/How-work-evolved-1.jpg' 
        : (file_exists(dirname(__DIR__) . '/assets/images/about/center-reiki-session.jpg') 
            ? 'assets/images/about/center-reiki-session.jpg' 
            : 'assets/images/about-image.jpeg')
);

$evolution_img_2 = $evolution_img_2 ?? (
    file_exists(dirname(__DIR__) . '/assets/images/about/How-work-evolved-2.jpg') 
        ? 'assets/images/about/How-work-evolved-2.jpg' 
        : (file_exists(dirname(__DIR__) . '/assets/images/selected-gallery/Meditation Class in a Sunlit Hall.png') 
            ? 'assets/images/selected-gallery/Meditation Class in a Sunlit Hall.png' 
            : 'assets/images/workshop-healing-circle.png')
);

$evolution_img_3 = $evolution_img_3 ?? (
    file_exists(dirname(__DIR__) . '/assets/images/about/How-work-evolved-3.jpg') 
        ? 'assets/images/about/How-work-evolved-3.jpg' 
        : null
);

// Evolution Milestones
$evolution_milestone_1 = [
    'icon'       => 'bi-mortarboard',
    'title'      => 'From Learning to Teaching',
    'image'      => $evolution_img_1,
    'paragraphs' => [
        'The pandemic gave us the opportunity to deepen our learning and explore different healing modalities. What began as personal growth became a passion for teaching. Through courses and training programmes, we started sharing what we had learned and supporting others in their own growth.',
    ],
];

$evolution_milestone_2 = [
    'icon'       => 'bi-person-heart',
    'title'      => 'From Teaching to Personalised Coaching',
    'image'      => $evolution_img_2,
    'paragraphs' => [
        'We realised that not everyone needed a course. Some needed personal guidance; others needed structured support. This led us to one-to-one coaching and personalised 21-day and three-month programmes, bringing together practices from different modalities to suit individual needs.',
        'As our work grew, we made the significant decision to leave our secure professional careers and dedicate ourselves to this purpose. It was not an easy choice, but one we believed in.',
    ],
];

$evolution_milestone_3 = [
    'icon'       => 'bi-flower1',
    'title'      => 'Our Work Continued to Grow',
    'image'      => $evolution_img_3,
    'paragraphs' => [
        'Over time, our vision expanded to include Âme Crystals, bringing personalised crystal guidance into our work, and Shamaa, extending our offerings into yoga and wellness. Both are part of the wider SS Healing Rays vision.',
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

            <!-- Evolution Journey Grid: Row 1 (2 Columns) & Row 2 (3rd Item Full Width) -->
            <div class="purpose-evolution-grid mx-auto">
                
                <!-- Row 1: 2 Columns for Milestones 1 & 2 -->
                <div class="row g-4 align-items-stretch">
                    
                    <!-- Column 1: From Learning to Teaching -->
                    <div class="col-12 col-lg-6 d-flex">
                        <div class="evolution-card evolution-col-card w-100 text-start">
                            <div class="evolution-card-img-wrap">
                                <img src="<?= htmlspecialchars($evolution_milestone_1['image']) ?>" 
                                     alt="<?= htmlspecialchars($evolution_milestone_1['title']) ?>" 
                                     loading="lazy">
                            </div>
                            <div class="evolution-card-body">
                                <div class="evolution-card-header d-flex align-items-center gap-3 mb-3">
                                    <span class="evolution-icon-wrap" aria-hidden="true">
                                        <i class="bi <?= htmlspecialchars($evolution_milestone_1['icon']) ?>"></i>
                                    </span>
                                    <h3 class="evolution-card-title mb-0"><?= htmlspecialchars($evolution_milestone_1['title']) ?></h3>
                                </div>
                                <div class="evolution-card-desc">
                                    <?php foreach ($evolution_milestone_1['paragraphs'] as $p): ?>
                                        <p><?= $p ?></p>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Column 2: From Teaching to Personalised Coaching -->
                    <div class="col-12 col-lg-6 d-flex">
                        <div class="evolution-card evolution-col-card w-100 text-start">
                            <div class="evolution-card-img-wrap">
                                <img src="<?= htmlspecialchars($evolution_milestone_2['image']) ?>" 
                                     alt="<?= htmlspecialchars($evolution_milestone_2['title']) ?>" 
                                     loading="lazy">
                            </div>
                            <div class="evolution-card-body">
                                <div class="evolution-card-header d-flex align-items-center gap-3 mb-3">
                                    <span class="evolution-icon-wrap" aria-hidden="true">
                                        <i class="bi <?= htmlspecialchars($evolution_milestone_2['icon']) ?>"></i>
                                    </span>
                                    <h3 class="evolution-card-title mb-0"><?= htmlspecialchars($evolution_milestone_2['title']) ?></h3>
                                </div>
                                <div class="evolution-card-desc">
                                    <?php foreach ($evolution_milestone_2['paragraphs'] as $p): ?>
                                        <p><?= $p ?></p>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Row 2: 3rd Item as Next Row (Full-Width Card) -->
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="evolution-card evolution-wide-card w-100 text-start">
                            <div class="row g-4 align-items-center">
                                
                                <div class="col-12 <?= !empty($evolution_milestone_3['image']) ? 'col-lg-7' : 'col-lg-7' ?>">
                                    <div class="evolution-card-header d-flex align-items-center gap-3 mb-3">
                                        <span class="evolution-icon-wrap" aria-hidden="true">
                                            <i class="bi <?= htmlspecialchars($evolution_milestone_3['icon']) ?>"></i>
                                        </span>
                                        <h3 class="evolution-card-title mb-0"><?= htmlspecialchars($evolution_milestone_3['title']) ?></h3>
                                    </div>
                                    <div class="evolution-card-desc mb-0">
                                        <?php foreach ($evolution_milestone_3['paragraphs'] as $p): ?>
                                            <p class="mb-0"><?= $p ?></p>
                                        <?php endforeach; ?>
                                    </div>
                                </div>

                                <div class="col-12 col-lg-5">
                                    <?php if (!empty($evolution_milestone_3['image'])): ?>
                                        <div class="evolution-card-img-wrap evolution-wide-img-wrap">
                                            <img src="<?= htmlspecialchars($evolution_milestone_3['image']) ?>" 
                                                 alt="<?= htmlspecialchars($evolution_milestone_3['title']) ?>" 
                                                 loading="lazy">
                                        </div>
                                    <?php else: ?>
                                        <!-- Sub-brand Showcase Chips: Âme Crystals & Shamaa -->
                                        <div class="evolution-sub-brands d-flex flex-column flex-sm-row flex-lg-column gap-3 justify-content-center">
                                            
                                            <div class="evolution-brand-chip d-flex align-items-center gap-3">
                                                <span class="brand-chip-icon brand-chip-ame" aria-hidden="true">
                                                    <i class="bi bi-gem"></i>
                                                </span>
                                                <div class="brand-chip-info">
                                                    <span class="brand-chip-title">Âme Crystals</span>
                                                    <span class="brand-chip-desc">Personalised crystal guidance & healing</span>
                                                </div>
                                            </div>

                                            <div class="evolution-brand-chip d-flex align-items-center gap-3">
                                                <span class="brand-chip-icon brand-chip-shamaa" aria-hidden="true">
                                                    <i class="bi bi-flower2"></i>
                                                </span>
                                                <div class="brand-chip-info">
                                                    <span class="brand-chip-title">Shamaa</span>
                                                    <span class="brand-chip-desc">Yoga, movement & holistic wellness</span>
                                                </div>
                                            </div>

                                        </div>
                                    <?php endif; ?>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>
