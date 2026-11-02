<?php
/**
 * ==============================================================================
 * Community & Pathways Section Component - SS Healing Rays (About Us Page)
 * "There Is a Place for You at SS Healing Rays"
 * Features:
 *   - Minimal, High-End Sanctuary Aesthetic
 *   - Unified Eyebrow Badge ("Our Community")
 *   - Strict 2-Line Hero Heading with Brand Serif Highlight
 *   - Welcoming Lead Narrative
 *   - 3 Interactive Pathway Cards with Integrated Dynamic CTAs & Hover Animations
 *   - Minimal Reflective Statement (No bulky quote blocks)
 * Dedicated Stylesheet: assets/css/aboutcommunity.css
 * ==============================================================================
 */

$community_badge           = $community_badge ?? 'Our Community';
$community_title_main      = $community_title_main ?? 'There Is a Place for You';
$community_title_highlight = $community_title_highlight ?? 'at SS Healing Rays';

$community_lead = $community_lead ?? 'Whether you are looking for personal transformation, wish to learn new practices, or aspire to support others through your own skills and knowledge, there is a place for you in the SS Healing Rays community.';

$community_cards = $community_cards ?? [
    [
        'step'        => '01',
        'icon'        => 'bi bi-person-heart',
        'title'       => 'Looking for transformation?',
        'description' => 'Find personalised guidance and support for your journey.',
        'cta_text'    => 'Connect With Us',
        'cta_url'     => 'contact',
    ],
    [
        'step'        => '02',
        'icon'        => 'bi bi-journal-bookmark',
        'title'       => 'Want to learn and explore?',
        'description' => 'Discover courses, practices and opportunities to expand your knowledge.',
        'cta_text'    => 'Explore Programs',
        'cta_url'     => 'training',
    ],
    [
        'step'        => '03',
        'icon'        => 'bi bi-stars',
        'title'       => 'Want to grow as a practitioner?',
        'description' => 'If you have expertise, a passion for helping others and an interest in building a profession or collaborating with us, let\'s explore possibilities together.',
        'cta_text'    => 'Collaborate With Us',
        'cta_url'     => 'contact',
    ],
];

$community_statement = $community_statement ?? 'We began by learning to transform our own lives. Today, we bring that learning together to support yours – and to create a community where transformation continues to grow.';
?>

<section class="about-community-section position-relative" id="aboutCommunity" aria-label="Community - There Is a Place for You at SS Healing Rays">
    <div class="container community-container">
        
        <!-- Section Header -->
        <div class="community-header text-center mx-auto">
            
            <!-- Unified Eyebrow Badge -->
            <div class="community-badge mb-3">
                <span class="badge-icon" aria-hidden="true"><i class="bi bi-people"></i></span>
                <span class="badge-text"><?= htmlspecialchars($community_badge) ?></span>
            </div>

            <!-- Strict 2-Line Heading -->
            <h2 class="community-heading">
                <span class="community-title-line"><?= htmlspecialchars($community_title_main) ?></span>
                <span class="community-title-line">
                    <span class="title-highlight"><?= htmlspecialchars($community_title_highlight) ?></span>
                </span>
            </h2>

            <!-- Lead Narrative -->
            <p class="community-lead">
                <?= htmlspecialchars($community_lead) ?>
            </p>
        </div>

        <!-- 3 Minimal Interactive Pathway Cards -->
        <div class="row g-4 justify-content-center community-grid">
            <?php foreach ($community_cards as $card): ?>
                <div class="col-12 col-md-6 col-lg-4 d-flex">
                    <div class="community-card w-100 d-flex flex-column">
                        
                        <!-- Top Row: Icon & Step Indicator -->
                        <div class="community-card-top d-flex align-items-center justify-content-between">
                            <div class="community-card-icon" aria-hidden="true">
                                <i class="<?= htmlspecialchars($card['icon']) ?>"></i>
                            </div>
                            <span class="community-card-step"><?= htmlspecialchars($card['step']) ?></span>
                        </div>

                        <!-- Card Heading & Description -->
                        <div class="community-card-body">
                            <h3 class="community-card-title">
                                <?= htmlspecialchars($card['title']) ?>
                            </h3>
                            <p class="community-card-desc">
                                <?= htmlspecialchars($card['description']) ?>
                            </p>
                        </div>

                        <!-- Integrated Dynamic CTA with Hover Animation -->
                        <div class="community-card-footer mt-auto pt-4">
                            <?php
                                $btn_text  = $card['cta_text'];
                                $btn_url   = $card['cta_url'];
                                $btn_class = 'Btn-Community-Pill w-100 justify-content-between';
                                include dirname(__DIR__) . '/common/button.php';
                            ?>
                        </div>

                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Minimal Poetic Closing Statement -->
        <div class="community-statement-wrap text-center mx-auto">
            <p class="community-statement-text">
                “<?= htmlspecialchars($community_statement) ?>”
            </p>
        </div>

    </div>
</section>
