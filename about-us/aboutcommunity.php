<?php
/**
 * ==============================================================================
 * Community & Pathways Section Component - SS Healing Rays (About Us Page)
 * "There Is a Place for You at SS Healing Rays"
 * Features:
 *   - Balanced 2-Line Hero Heading with Brand Serif Highlight
 *   - Welcoming Lead Narrative on Community Inclusion
 *   - 3-Column Responsive Pathways Grid (Transformation | Learning | Practitioner)
 *   - Reflective Community Growth Statement
 *   - 3 Action CTAs: Connect With Us | Explore Programs | Collaborate With Us
 * Dedicated Stylesheet: assets/css/aboutcommunity.css
 * ==============================================================================
 */

$community_title_main      = $community_title_main ?? 'There Is a Place for You';
$community_title_highlight = $community_title_highlight ?? 'at SS Healing Rays';

$community_lead = $community_lead ?? 'Whether you are looking for personal transformation, wish to learn new practices, or aspire to support others through your own skills and knowledge, there is a place for you in the SS Healing Rays community.';

$community_cards = $community_cards ?? [
    [
        'step'        => '01',
        'badge'       => 'Personal Growth',
        'icon'        => 'bi bi-heart-pulse',
        'title'       => 'Looking for transformation?',
        'description' => 'Find personalised guidance and support for your journey.',
    ],
    [
        'step'        => '02',
        'badge'       => 'Expand Knowledge',
        'icon'        => 'bi bi-journal-bookmark',
        'title'       => 'Want to learn and explore?',
        'description' => 'Discover courses, practices and opportunities to expand your knowledge.',
    ],
    [
        'step'        => '03',
        'badge'       => 'Practitioner Growth',
        'icon'        => 'bi bi-stars',
        'title'       => 'Want to grow as a practitioner?',
        'description' => 'If you have expertise, a passion for helping others and an interest in building a profession or collaborating with us, let\'s explore possibilities together.',
    ],
];

$community_statement = $community_statement ?? 'We began by learning to transform our own lives. Today, we bring that learning together to support yours – and to create a community where transformation continues to grow.';
?>

<section class="about-community-section position-relative" id="aboutCommunity" aria-label="Community - There Is a Place for You at SS Healing Rays">
    <div class="container community-container">
        
        <!-- Section Header -->
        <div class="community-header text-center mx-auto">
            <div class="community-badge mb-3">
                <span class="badge-icon" aria-hidden="true"><i class="bi bi-people"></i></span>
                <span class="badge-text">Our Community</span>
            </div>

            <h2 class="community-heading">
                <span class="community-title-line"><?= htmlspecialchars($community_title_main) ?></span>
                <span class="community-title-line">
                    <span class="title-highlight"><?= htmlspecialchars($community_title_highlight) ?></span>
                </span>
            </h2>

            <p class="community-lead">
                <?= htmlspecialchars($community_lead) ?>
            </p>
        </div>

        <!-- 3 Pathway Pillars Grid -->
        <div class="row g-4 justify-content-center community-grid">
            <?php foreach ($community_cards as $card): ?>
                <div class="col-12 col-md-6 col-lg-4 d-flex">
                    <div class="community-card w-100">
                        <div class="community-card-top d-flex align-items-center justify-content-between">
                            <div class="community-card-icon" aria-hidden="true">
                                <i class="<?= htmlspecialchars($card['icon']) ?>"></i>
                            </div>
                            <span class="community-card-step"><?= htmlspecialchars($card['step']) ?></span>
                        </div>

                        <h3 class="community-card-title">
                            <?= htmlspecialchars($card['title']) ?>
                        </h3>

                        <p class="community-card-desc">
                            <?= htmlspecialchars($card['description']) ?>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Concluding Reflective Statement Callout -->
        <div class="community-statement-box text-center mx-auto">
            <div class="statement-quote-mark" aria-hidden="true">“</div>
            <p class="community-statement-text">
                <?= htmlspecialchars($community_statement) ?>
            </p>
        </div>

        <!-- Action CTAs: 3 Buttons -->
        <div class="community-actions d-flex flex-wrap justify-content-center align-items-center">
            
            <!-- Button 1: Connect With Us -->
            <div class="community-btn-item">
                <?php
                    $btn_text       = 'Connect With Us';
                    $btn_url        = 'contact';
                    $btn_class      = 'btn-community-action btn-community-plum';
                    $btn_bg         = '#82387a';
                    $btn_text_color = '#ffffff';
                    $btn_icon_bg    = '#ba436c';
                    $btn_icon_color = '#ffffff';
                    include dirname(__DIR__) . '/common/button.php';
                ?>
            </div>

            <!-- Button 2: Explore Programs -->
            <div class="community-btn-item">
                <?php
                    $btn_text       = 'Explore Programs';
                    $btn_url        = 'training';
                    $btn_class      = 'btn-community-action btn-community-white';
                    $btn_bg         = '#ffffff';
                    $btn_text_color = '#111133';
                    $btn_icon_bg    = '#82387a';
                    $btn_icon_color = '#ffffff';
                    include dirname(__DIR__) . '/common/button.php';
                ?>
            </div>

            <!-- Button 3: Collaborate With Us -->
            <div class="community-btn-item">
                <?php
                    $btn_text       = 'Collaborate With Us';
                    $btn_url        = 'contact';
                    $btn_class      = 'btn-community-action btn-community-rose';
                    $btn_bg         = '#ba436c';
                    $btn_text_color = '#ffffff';
                    $btn_icon_bg    = '#82387a';
                    $btn_icon_color = '#ffffff';
                    include dirname(__DIR__) . '/common/button.php';
                ?>
            </div>

        </div>

    </div>
</section>

