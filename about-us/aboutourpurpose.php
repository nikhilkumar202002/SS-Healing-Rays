<?php
/**
 * ==============================================================================
 * Our Purpose Section - SS Healing Rays (About Us Page)
 * Features:
 *   - Full background banner view from assets/banner/about-banner.jpg
 *   - Complete visibility of botanical leaves on left & right flanks
 *   - Strict 2-Line Heading: "Creating Space for" / "Healing, Hope & New Beginnings"
 *   - Full-width center-aligned description text
 * Dedicated Stylesheet: assets/css/aboutourpurpose.css
 * ==============================================================================
 */

$purpose_title_1         = $purpose_title_1 ?? 'Creating Space for';
$purpose_title_highlight = $purpose_title_highlight ?? 'Healing, Hope & New Beginnings';
$purpose_banner_img      = $purpose_banner_img ?? 'assets/banner/about-banner.jpg';

$purpose_description = $purpose_description ?? 'At SS Healing Rays, our philosophy is rooted in the belief that wellbeing begins with taking time to understand ourselves. The journey towards greater balance can look different for everyone. Sometimes it begins with a desire for calm. Sometimes it comes from the need to understand difficult emotions, develop greater self-awareness, or make room for personal change. We believe that a compassionate and welcoming environment can provide an opportunity to pause, reflect, and reconnect with what matters. Through our focus on holistic wellbeing and mindful practices, we aim to encourage individuals to approach their personal journeys with patience, openness, and kindness towards themselves. Our purpose is to create a space where people can explore these possibilities without judgement and take meaningful steps towards greater self-understanding.';
?>

<section class="purpose-section position-relative" id="ourPurpose" style="background-image: url('<?= htmlspecialchars($purpose_banner_img) ?>');" aria-label="Our Purpose and Philosophy">
    <div class="container-fluid purpose-container">
        
        <div class="purpose-content-wrap mx-auto text-center">
            
            <!-- Main Heading: Strict 2 Lines Layout -->
            <h2 class="purpose-heading">
                <span class="purpose-title-line"><?= htmlspecialchars($purpose_title_1) ?></span>
                <span class="purpose-title-line">
                    <span class="title-highlight"><?= htmlspecialchars($purpose_title_highlight) ?></span>
                </span>
            </h2>

            <!-- Center-Aligned Full-Width Description -->
            <div class="purpose-description-wrap">
                <p class="purpose-description">
                    <?= htmlspecialchars($purpose_description) ?>
                </p>
            </div>

        </div>

    </div>
</section>
