<?php

$about_healing_badge      = $about_healing_badge ?? 'Who We Are';
$about_healing_title_1    = $about_healing_title_1 ?? 'More Than a Healing Centre';
$about_healing_title_2    = $about_healing_title_2 ?? 'A journey of learning, transformation and shared purpose.';

$about_healing_img        = $about_healing_img ?? (
    file_exists(dirname(__DIR__) . '/assets/images/profile/who-we-are.jpg') 
        ? 'assets/images/profile/who-we-are.jpg' 
        : (file_exists(dirname(__DIR__) . '/assets/images/about/who-we-are.jpg') 
            ? 'assets/images/about/who-we-are.jpg' 
            : (file_exists(dirname(__DIR__) . '/assets/images/about/center-reiki-session.jpg') 
                ? 'assets/images/about/center-reiki-session.jpg' 
                : 'assets/images/services/Reiki Healing.jpg'))
);

$about_healing_paragraphs = $about_healing_paragraphs ?? [
    'Founded by <strong>Sreeparvathy CM</strong> and <strong>Sravanti Chitturi</strong>, SS Healing Rays is a wellness, healing, coaching and learning platform shaped by our own experiences and years of practice.',
    'We bring together different modalities and practical approaches through personal sessions, courses, workshops and wellness initiatives—guided by each person\'s needs.',
];

$about_healing_stats = $about_healing_stats ?? [
    [
        'number' => '10',
        'suffix' => '+',
        'unit'   => 'years',
        'icon'   => 'bi-clock-history',
    ],
    [
        'number' => '500',
        'suffix' => '+',
        'unit'   => 'people reached',
        'icon'   => 'bi-people',
    ],
];
?>

<section class="about-healing-section position-relative" id="aboutCenter" aria-label="About SS Healing Rays Center - Who We Are">
    <div class="container">
        <div class="row align-items-stretch justify-content-center about-healing-row">
            
            <!-- Left Column: Single Visual Showcase Image -->
            <div class="col-12 col-lg-6 d-flex justify-content-center justify-content-lg-end align-items-stretch">
                <div class="about-healing-image-wrapper">
                    <div class="about-healing-image-card">
                        <img src="<?= htmlspecialchars($about_healing_img) ?>" 
                             alt="Who We Are - SS Healing Rays Sanctuary & Healers" 
                             loading="lazy">
                    </div>
                </div>
            </div>

            <!-- Right Column: Heading & Content Box -->
            <div class="col-12 col-lg-6 d-flex flex-column justify-content-center justify-content-lg-start">
                <div class="about-healing-content w-100">
                    
                    <!-- Eyebrow Badge -->
                    <div class="about-healing-badge mb-3">
                        <span class="badge-icon" aria-hidden="true"><i class="bi bi-flower1"></i></span>
                        <span class="badge-text"><?= htmlspecialchars($about_healing_badge) ?></span>
                    </div>

                    <!-- Main Heading (2-Line Balanced Layout) -->
                    <h2 class="about-healing-heading">
                        <span class="about-healing-title-line"><?= htmlspecialchars($about_healing_title_1) ?></span>
                        <span class="about-healing-title-line">
                            <span class="title-highlight"><?= htmlspecialchars($about_healing_title_2) ?></span>
                        </span>
                    </h2>
                    
                    <!-- Description Paragraphs -->
                    <div class="about-healing-description w-100">
                        <?php foreach ($about_healing_paragraphs as $para): ?>
                            <p><?= $para ?></p>
                        <?php endforeach; ?>
                    </div>

                    <!-- Trust & Impact Stats Counter (1 Row x 2 Columns) -->
                    <div class="about-healing-stats" id="aboutHealingStats">
                        <div class="row g-3 g-sm-4 healing-stats-row">
                            <?php foreach ($about_healing_stats as $stat): ?>
                                <div class="col-6">
                                    <div class="healing-stat-card">
                                        <div class="stat-icon-wrap" aria-hidden="true">
                                            <i class="bi <?= htmlspecialchars($stat['icon']) ?>"></i>
                                        </div>
                                        <div class="stat-info">
                                            <div class="stat-number-wrap">
                                                <span class="stat-number counter-count" data-target="<?= htmlspecialchars($stat['number']) ?>"><?= htmlspecialchars($stat['number']) ?></span><span class="stat-suffix"><?= htmlspecialchars($stat['suffix']) ?></span>
                                            </div>
                                            <?php if (!empty($stat['unit'])): ?>
                                                <span class="stat-unit"><?= htmlspecialchars($stat['unit']) ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
