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
 *   - White Background 2-Column Story Container:
 *       Col 1: From Learning to Teaching
 *       Col 2: From Teaching to Personalised Coaching
 * Dedicated Stylesheet: assets/css/aboutourpurpose.css
 * ==============================================================================
 */

$purpose_badge           = $purpose_badge ?? 'Our Journey';
$purpose_title_1         = $purpose_title_1 ?? 'From Personal Transformation';
$purpose_title_highlight = $purpose_title_highlight ?? 'to Shared Purpose';
$purpose_banner_img      = $purpose_banner_img ?? 'assets/banner/about-banner.jpg';

$purpose_para_1 = $purpose_para_1 ?? 'Almost a decade ago, we were two working professionals trying to balance our careers, families and personal lives. Despite coming from different family backgrounds, we discovered that we were carrying remarkably similar emotional burdens. Exhaustion, lack of motivation, dissatisfaction and the constant guilt of not being able to give our best at work and home had become part of our everyday lives. Our conversations helped us realise that something needed to change.';

$purpose_para_2 = $purpose_para_2 ?? 'At a time when holistic healing practices were not widely known, our search for answers led us to a teacher who introduced us to different ways of understanding and releasing emotional baggage.';

$purpose_quote  = $purpose_quote ?? '“You don\'t have to depend on someone else every time. Learn these practices and take responsibility for your own life.”';

$purpose_quote_impact = $purpose_quote_impact ?? 'That became the beginning of our transformation.';

$purpose_para_3 = $purpose_para_3 ?? 'As we continued learning and practising, our energy, productivity, relationships and overall wellbeing began to shift. The people and circumstances around us remained largely the same, but the way we experienced and responded to life changed. We realised that what was helping us could also help others.';

// 2-Column Story Content
$purpose_col1_title = 'From Learning to Teaching';
$purpose_col1_paragraphs = [
    'The pandemic gave us an opportunity to invest even more deeply in learning, exploring and expanding our understanding of different modalities and approaches. What started as personal growth gradually became a passion for teaching.',
    'We began sharing what we had learnt through courses and training programs, helping people develop the knowledge and confidence to take charge of their own transformation.',
    'Watching our students grow and create meaningful changes in their lives strengthened our belief in the power of learning and consistent practice.'
];

$purpose_col2_title = 'From Teaching to Personalised Coaching';
$purpose_col2_paragraphs = [
    'As our work evolved, we recognised that not everyone had the time, energy or capacity to undertake a lengthy learning journey. Some needed personal guidance, while others needed structured support to remain consistent and navigate their challenges.',
    'We asked ourselves: <em>How could we bring together years of learning and experience to make meaningful transformation more accessible to others?</em>',
    'This led us to one-to-one coaching and personalised transformation programs. We began integrating the most useful elements of our learning from different modalities into individual coaching journeys and structured 21-day and three-month programs. Our intention was to help people access the right support without having to spend the same years exploring and learning everything themselves.',
    'As our passion and the demand for our work grew, we eventually made the significant decision to leave our secure professional careers and dedicate ourselves fully to this purpose. It was not an easy decision, but we trusted the journey and the purpose that had brought us this far.'
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

            <!-- White Background 2-Column Story Container -->
            <div class="purpose-two-col-card mx-auto">
                <div class="row g-4 g-lg-5 align-items-stretch">
                    
                    <!-- Column 1: From Learning to Teaching -->
                    <div class="col-12 col-lg-6 d-flex">
                        <div class="story-col-card w-100">
                            <div class="story-col-header">
                                <span class="story-col-icon" aria-hidden="true">
                                    <i class="bi bi-mortarboard"></i>
                                </span>
                                <h3 class="story-col-title"><?= htmlspecialchars($purpose_col1_title) ?></h3>
                            </div>
                            <div class="story-col-content">
                                <?php foreach ($purpose_col1_paragraphs as $para): ?>
                                    <p class="story-col-desc"><?= $para ?></p>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>

                    <!-- Column 2: From Teaching to Personalised Coaching -->
                    <div class="col-12 col-lg-6 d-flex">
                        <div class="story-col-card story-col-divider w-100">
                            <div class="story-col-header">
                                <span class="story-col-icon" aria-hidden="true">
                                    <i class="bi bi-person-heart"></i>
                                </span>
                                <h3 class="story-col-title"><?= htmlspecialchars($purpose_col2_title) ?></h3>
                            </div>
                            <div class="story-col-content">
                                <?php foreach ($purpose_col2_paragraphs as $para): ?>
                                    <p class="story-col-desc"><?= $para ?></p>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
</section>
