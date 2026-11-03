<?php
/**
 * ==============================================================================
 * The Âme Selection Journey - Process Flow Component
 * Dedicated Brand Component for Âme Crystals (ame-crystals.php)
 * 
 * Features:
 *   - Eyebrow Badge: "How It Works" / "The Selection Process"
 *   - 2-Line Headline: "The Âme Selection Journey"
 *   - 4-Step Interactive Process Flow (Understand -> Identify -> Customise -> Guide)
 *   - Connecting Progress Visual on Desktop
 *   - Hover Animations & Responsive Stacking
 * ==============================================================================
 */

// Section Configuration Variables
$journey_title_line1     = $journey_title_line1 ?? 'The Âme';
$journey_title_highlight = $journey_title_highlight ?? 'Selection Journey';
$journey_subtitle        = $journey_subtitle ?? 'Every crystal finds its guardian through a thoughtful, intuitive 4-step process designed to harmonize with your personal journey and intentions.';

$journey_steps = $journey_steps ?? [
    [
        'step'        => '01',
        'title'       => 'Understand',
        'icon'        => 'bi bi-chat-heart',
        'description' => 'We begin with a personal consultation to understand your concerns, intentions and current requirements.',
    ],
    [
        'step'        => '02',
        'title'       => 'Identify',
        'icon'        => 'bi bi-compass',
        'description' => 'We explore crystals and combinations that align with the support you are looking for, informed by our experience, aura reading, pendulum and aura-rod guidance.',
    ],
    [
        'step'        => '03',
        'title'       => 'Customise',
        'icon'        => 'bi bi-gem',
        'description' => 'We help select and customise the crystal, combination and form to suit your needs.',
    ],
    [
        'step'        => '04',
        'title'       => 'Guide',
        'icon'        => 'bi bi-stars',
        'description' => 'We share practical instructions on using, cleansing and caring for your crystals, with continued support after purchase.',
    ],
];
?>

<section class="ame-journey-section position-relative" id="ameJourney" aria-label="The Âme Selection Journey">
    <div class="container ame-journey-container">
        
        <!-- Section Header -->
        <div class="ame-journey-header text-center mx-auto mb-5">

            <!-- Main Heading (2-Line Balanced Layout) -->
            <h2 class="ame-journey-heading mb-3">
                <span class="journey-title-line"><?= htmlspecialchars($journey_title_line1) ?></span>
                <span class="journey-title-line">
                    <span class="title-highlight"><?= htmlspecialchars($journey_title_highlight) ?></span>
                </span>
            </h2>

            <?php if (!empty($journey_subtitle)): ?>
                <!-- Subtitle Narrative -->
                <p class="ame-journey-lead mx-auto mb-0">
                    <?= htmlspecialchars($journey_subtitle) ?>
                </p>
            <?php endif; ?>
        </div>

        <!-- 4-Step Process Flow Grid -->
        <div class="row g-4 justify-content-center ame-journey-row position-relative">
            <?php foreach ($journey_steps as $index => $step): ?>
                <div class="col-12 col-md-6 col-lg-3 d-flex">
                    <div class="ame-journey-card w-100 d-flex flex-column position-relative">
                        
                        <!-- Top Meta: Step Number & Icon -->
                        <div class="ame-journey-card-top d-flex align-items-center justify-content-between mb-3">
                            <span class="ame-journey-step-num" aria-label="Step <?= $step['step'] ?>"><?= htmlspecialchars($step['step']) ?></span>
                            <div class="ame-journey-card-icon" aria-hidden="true">
                                <i class="<?= htmlspecialchars($step['icon']) ?>"></i>
                            </div>
                        </div>

                        <!-- Step Title -->
                        <h3 class="ame-journey-card-title mb-2">
                            <?= htmlspecialchars($step['title']) ?>
                        </h3>

                        <!-- Step Description -->
                        <p class="ame-journey-card-desc mb-0 flex-grow-1">
                            <?= htmlspecialchars($step['description']) ?>
                        </p>

                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

