<?php
/**
 * ==============================================================================
 * Individual Journey Approach Section Component - SS Healing Rays (About Us Page)
 * Layout: Left Column Content (Heading + Full Paragraph) | Right Column Image (Equal Height, No Border)
 * Dedicated Stylesheet: assets/css/aboutapproach.css
 * ==============================================================================
 */

$approach_title_main      = $approach_title_main ?? 'Support That Respects Your';
$approach_title_highlight = $approach_title_highlight ?? 'Individual Journey';

$approach_description     = $approach_description ?? "We understand that seeking support can be a personal decision. Everyone comes with different experiences, expectations, and needs, and we believe these differences deserve to be respected. Our approach emphasizes compassionate guidance, individual attention, and a welcoming environment where people can explore their wellbeing without feeling pressured or judged. We value practices that encourage relaxation, reflection, emotional awareness, and personal growth. We also recognize the importance of respecting personal boundaries and allowing individuals to decide what feels appropriate for them. Rather than viewing wellbeing as a destination that must be reached, we see it as an ongoing journey of understanding, learning, and change. Our intention is to make that journey feel more approachable by creating space for self-reflection, mindful awareness, and a stronger connection with oneself.";

$approach_img             = $approach_img ?? (
    file_exists(dirname(__DIR__) . '/assets/images/about/phylosophy.jpg')
        ? 'assets/images/about/phylosophy.jpg'
        : (file_exists(dirname(__DIR__) . '/assets/images/about/phylosophy')
            ? 'assets/images/about/phylosophy'
            : 'assets/images/about-image.jpeg')
);
$approach_img_alt         = $approach_img_alt ?? 'Support That Respects Your Individual Journey - SS Healing Rays';
?>

<section class="approach-section position-relative" id="ourApproach" aria-label="Our Individualized Approach">
    <div class="container">
        
        <div class="row align-items-stretch g-4 g-lg-5 approach-grid-row">
            
            <!-- Left Column: Heading and Full Paragraph -->
            <div class="col-12 col-lg-6 col-approach-content">
                <div class="approach-content">
                    
                    <!-- Main Section Heading -->
                    <h2 class="approach-heading">
                        <span class="approach-heading-main"><?= htmlspecialchars($approach_title_main) ?></span>
                        <span class="approach-heading-highlight title-highlight"><?= htmlspecialchars($approach_title_highlight) ?></span>
                    </h2>

                    <!-- Full Paragraph Description -->
                    <p class="approach-description">
                        <?= htmlspecialchars($approach_description) ?>
                    </p>

                </div>
            </div>

            <!-- Right Column: Equal-Height Borderless Sanctuary Image -->
            <div class="col-12 col-lg-6 col-approach-image">
                <div class="approach-image-wrapper">
                    <div class="approach-image-card">
                        <img src="<?= htmlspecialchars($approach_img) ?>" 
                             alt="<?= htmlspecialchars($approach_img_alt) ?>"
                             class="approach-image"
                             loading="lazy">
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
