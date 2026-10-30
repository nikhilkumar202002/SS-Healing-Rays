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

$philosophy_heading     = $philosophy_heading ?? 'A Holistic Approach to <span class="title-highlight">Inner Wellbeing</span>';
$philosophy_subtitle    = $philosophy_subtitle ?? "We believe that personal wellbeing involves understanding ourselves with greater awareness, compassion, and patience. Our philosophy respects each individual's experiences and recognizes that meaningful personal growth takes time.";

$philosophy_cards = $philosophy_cards ?? [
    [
        'number' => '01',
        'title'  => 'Compassion Without Judgement',
        'desc'   => 'Every individual deserves to feel heard, respected, and welcomed. We value a compassionate approach that honours personal experiences and emotional needs.',
        'icon'   => 'bi bi-heart',
    ],
    [
        'number' => '02',
        'title'  => 'Every Journey Is Unique',
        'desc'   => 'No two people experience life in exactly the same way. We respect individual preferences, personal boundaries, and different paths towards wellbeing.',
        'icon'   => 'bi bi-compass',
    ],
    [
        'number' => '03',
        'title'  => 'Awareness and Mindfulness',
        'desc'   => 'Taking time to notice our thoughts, feelings, and experiences can encourage reflection and a deeper understanding of ourselves.',
        'icon'   => 'bi bi-brightness-high',
    ],
    [
        'number' => '04',
        'title'  => 'Growth at Your Own Pace',
        'desc'   => 'Personal transformation is an ongoing process. We believe in allowing space for gradual change, self-discovery, and a more mindful relationship with ourselves.',
        'icon'   => 'bi bi-flower1',
    ],
];
?>

<section class="philosophy-section position-relative" id="ourPhilosophy" aria-label="Our Holistic Philosophy">
    <div class="container">
        
        <!-- Section Header -->
        <div class="philosophy-header text-center">
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
