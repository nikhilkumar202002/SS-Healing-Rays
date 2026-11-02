<?php
/**
 * ==============================================================================
 * Philosophy Section Component - SS Healing Rays (About Us Page)
 * Features:
 *   - Pure White Background (#ffffff)
 *   - Four Philosophy Cards (01 to 04)
 *   - Soft lilac/blush tinted cards with smooth hover elevation
 *   - Marcellus + Playfair Display italic headline
 * Dedicated Stylesheet: assets/css/aboutusphylosophy.css
 * ==============================================================================
 */

$philosophy_heading     = $philosophy_heading ?? 'Different People. Different Needs.<br class="d-none d-md-inline"> <span class="title-highlight">Personalised Pathways.</span>';
$philosophy_subtitle    = $philosophy_subtitle ?? "We don't believe in a one-size-fits-all approach to transformation. Our work begins with understanding you, your concerns and what you wish to change. We then explore suitable practices and approaches to create a pathway that respects your needs and pace.";

$philosophy_cards = $philosophy_cards ?? [
    [
        'number' => '01',
        'title'  => 'Compassion Without Judgement',
        'desc'   => 'A safe, confidential and non-judgemental space where you can express yourself freely.',
        'icon'   => 'bi bi-heart',
    ],
    [
        'number' => '02',
        'title'  => 'Every Journey Is Unique',
        'desc'   => "We understand that each person's experiences, challenges and goals are different.",
        'icon'   => 'bi bi-compass',
    ],
    [
        'number' => '03',
        'title'  => 'Knowledge Meets Practical Application',
        'desc'   => 'We bring together different modalities, learnings and practical tools to support meaningful change.',
        'icon'   => 'bi bi-lightbulb',
    ],
    [
        'number' => '04',
        'title'  => 'Growth Towards Independence',
        'desc'   => 'Our intention is to equip you with the understanding and practices to navigate life with greater confidence and independence.',
        'icon'   => 'bi bi-flower1',
    ],
];
?>

<section class="philosophy-section position-relative" id="ourPhilosophy" aria-label="Our Holistic Philosophy">
    <div class="container">
        
        <!-- Section Header -->
        <div class="philosophy-header text-center">
            
            <!-- Unified Eyebrow Badge -->
            <div class="philosophy-badge mb-3">
                <span class="badge-icon" aria-hidden="true"><i class="bi bi-stars"></i></span>
                <span class="badge-text">Our Philosophy</span>
            </div>

            <h2 class="philosophy-heading">
                <?= $philosophy_heading ?>
            </h2>
            <?php if (!empty($philosophy_subtitle)): ?>
                <p class="philosophy-subtitle">
                    <?= htmlspecialchars($philosophy_subtitle) ?>
                </p>
            <?php endif; ?>
        </div>

        <!-- 4 Philosophy Cards Grid (4 Columns on Desktop, 2 on Tablet, 1 on Mobile) -->
        <div class="row g-4 justify-content-center philosophy-grid">
            <?php foreach ($philosophy_cards as $card): ?>
                <div class="col-12 col-md-6 col-lg-3 philosophy-card-col">
                    <div class="philosophy-card">
                        
                        <div class="philosophy-card-top">
                            <span class="philosophy-card-number"><?= htmlspecialchars($card['number']) ?></span>
                            <?php if (!empty($card['icon'])): ?>
                                <span class="philosophy-card-icon" aria-hidden="true">
                                    <i class="<?= htmlspecialchars($card['icon']) ?>"></i>
                                </span>
                            <?php endif; ?>
                        </div>

                        <h3 class="philosophy-card-title">
                            <?= htmlspecialchars($card['title']) ?>
                        </h3>

                        <p class="philosophy-card-desc">
                            <?= htmlspecialchars($card['desc']) ?>
                        </p>

                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>
