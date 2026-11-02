<?php
/**
 * ==============================================================================
 * Who We Are / About The Center Component - SS Healing Rays (About Us Page)
 * Features:
 *   - Eyebrow Badge: "WHO WE ARE"
 *   - 2-Line Headline: "More than a healing centre." / "A journey of learning, transformation and shared purpose."
 *   - 2-Column Responsive Grid (Left Stacked Images | Right Narrative & Stats)
 *   - Founders & Community Narrative with Modalities & Guidance
 * Dedicated Stylesheet: assets/css/aboutthehealing.css
 * ==============================================================================
 */

$about_healing_badge      = $about_healing_badge ?? 'Who We Are';
$about_healing_title_1    = $about_healing_title_1 ?? 'More than a healing centre.';
$about_healing_title_2    = $about_healing_title_2 ?? 'A journey of learning, transformation and shared purpose.';

$about_healing_img_top    = $about_healing_img_top ?? (file_exists(dirname(__DIR__) . '/assets/images/about/center-reiki-session.jpg') ? 'assets/images/about/center-reiki-session.jpg' : 'assets/images/services/Reiki Healing.jpg');
$about_healing_img_bottom = $about_healing_img_bottom ?? (file_exists(dirname(__DIR__) . '/assets/images/about/center-crystal-therapy.jpg') ? 'assets/images/about/center-crystal-therapy.jpg' : 'assets/images/services/Crystal Healing.jpg');

$about_healing_paragraphs = $about_healing_paragraphs ?? [
    'Founded by <strong>Sreeparvathy CM</strong> and <strong>Sravantii Chitturi</strong>, SS Healing Rays is a holistic wellness, healing, coaching and training platform.',
    'With over <strong>10 years</strong> of learning and service, we have supported <strong>500+ clients</strong> through individual sessions, courses, workshops, webinars and wellness initiatives.',
    'Our work brings together diverse modalities and practical approaches to emotional wellbeing, personal growth and transformation. We begin by understanding each individual\'s needs and then explore the right knowledge, guidance and practices to support their journey.',
];
?>

<section class="about-healing-section position-relative" id="aboutCenter" aria-label="About SS Healing Rays Center - Who We Are">
    <div class="container">
        <div class="row align-items-stretch justify-content-center about-healing-row">
            
            <!-- Left Column: Two Stacked Images (Top & Bottom, 2:3 Ratio, Matching Right Content) -->
            <div class="col-12 col-lg-6 d-flex justify-content-center justify-content-lg-end align-items-stretch">
                <div class="about-healing-images-stack">
                    <div class="about-healing-image-card">
                        <img src="<?= htmlspecialchars($about_healing_img_top) ?>" 
                             alt="SS Healing Rays Sanctuary & Center" 
                             loading="lazy">
                    </div>
                    <div class="about-healing-image-card">
                        <img src="<?= htmlspecialchars($about_healing_img_bottom) ?>" 
                             alt="SS Healing Rays Healing Modalities" 
                             loading="lazy">
                    </div>
                </div>
            </div>

            <!-- Right Column: Heading & Elaborated Description (Equal 50% Column, Full Width Content) -->
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

                    <!-- Trust & Impact Stats Highlight -->
                    <div class="about-healing-stats d-flex flex-wrap align-items-center gap-3 mt-4 pt-1">
                        <div class="healing-stat-pill d-inline-flex align-items-center">
                            <span class="stat-number">10+</span>
                            <span class="stat-label">Years of Service</span>
                        </div>
                        <div class="healing-stat-pill d-inline-flex align-items-center">
                            <span class="stat-number">500+</span>
                            <span class="stat-label">Clients Supported</span>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
