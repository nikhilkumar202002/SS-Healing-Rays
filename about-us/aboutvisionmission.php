<?php
/**
 * ==============================================================================
 * Vision & Mission Section Component - SS Healing Rays (About Us Page)
 * Features:
 *   - Combined Single Section Layout:
 *       Left Side Content | Right Side Image
 *   - Eyebrow Badge: "Vision & Greater Purpose"
 *   - 2-Line Heading: "Many Paths. One Community." / "A Greater Purpose."
 *   - 3 Curated Narrative Paragraphs
 *   - Elevated Image Card with Smooth Hover Zoom
 * Dedicated Stylesheet: assets/css/aboutvisionmission.css
 * ==============================================================================
 */

$vm_badge      = $vm_badge ?? 'Vision & Greater Purpose';
$vm_title_1    = $vm_title_1 ?? 'Many Paths. One Community.';
$vm_title_2    = $vm_title_2 ?? 'A Greater Purpose.';
$vm_title      = $vm_title ?? ($vm_title_1 . '<br><span class="title-highlight">' . $vm_title_2 . '</span>');

$vm_paragraphs = $vm_paragraphs ?? [
    'At SS Healing Rays, we believe growth should leave room for curiosity and individual choice. We encourage our community to explore different modalities, learn from diverse teachers and discover the path that feels right for them.',
    'We want to share the knowledge and experience we have gathered, making the learning journey more supported—not by limiting people to one approach, but by helping them build confidence and their own strengths.',
    'For those who wish to take their learning further, there may be opportunities to develop as practitioners or collaborate with SS Healing Rays. Our larger purpose is to bring diverse expertise together to help people heal, grow and transform.',
];

$vm_img = $vm_img ?? (
    file_exists(dirname(__DIR__) . '/assets/images/about/vision.jpg')
        ? 'assets/images/about/vision.jpg'
        : (file_exists(dirname(__DIR__) . '/assets/images/about/mission.jpg')
            ? 'assets/images/about/mission.jpg'
            : (file_exists(dirname(__DIR__) . '/assets/images/about/vision')
                ? 'assets/images/about/vision'
                : 'assets/images/about-image.jpeg'))
);
?>

<section class="vision-mission-section position-relative" id="ourVisionMission" aria-label="Our Vision and Mission - SS Healing Rays">
    <div class="container vm-container">
        
        <div class="row align-items-center vm-row">
            
            <!-- Left Side: Content Column -->
            <div class="col-12 col-lg-6 col-vm-content">
                <div class="vm-content-wrap">
                    
                    <!-- Unified Eyebrow Badge -->
                    <div class="vm-badge mb-3">
                        <span class="badge-icon" aria-hidden="true"><i class="bi bi-compass"></i></span>
                        <span class="badge-text"><?= htmlspecialchars($vm_badge) ?></span>
                    </div>

                    <!-- Main Heading (2-Line Balanced Layout) -->
                    <h2 class="vm-heading">
                        <?= $vm_title ?>
                    </h2>

                    <!-- Descriptive Paragraphs -->
                    <div class="vm-desc-wrap">
                        <?php foreach ($vm_paragraphs as $para): ?>
                            <p class="vm-desc"><?= htmlspecialchars($para) ?></p>
                        <?php endforeach; ?>
                    </div>

                </div>
            </div>

            <!-- Right Side: Image Column -->
            <div class="col-12 col-lg-6 col-vm-media">
                <div class="vm-image-wrapper">
                    <div class="vm-image-card">
                        <img src="<?= htmlspecialchars($vm_img) ?>" 
                             alt="Many Paths. One Community. A Greater Purpose. - SS Healing Rays Vision & Mission"
                             class="vm-image"
                             loading="lazy">
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
