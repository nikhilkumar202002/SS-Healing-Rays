<?php
/**
 * ==============================================================================
 * Workshop Section - SS Healing Rays
 * Layout: Left Column Image Arch | Right Column Content
 * Dedicated Stylesheet: assets/css/workshop.css
 * ==============================================================================
 */

$welcome_logo              = $welcome_logo ?? 'assets/logo/main-logo.png';
$welcome_tagline           = $welcome_tagline ?? 'Welcome to SS Healing Rays: A Space to Pause, Reconnect and Grow';
$welcome_headline          = $welcome_headline ?? "A safe space to release trauma, ease stress, and return to your calm, where every session soothes the mind, restores the body’s balance, and inspires healing from within.";

$workshop_badge            = $workshop_badge ?? 'WORKSHOP';
$workshop_title_1          = $workshop_title_1 ?? 'Release & Restore';
$workshop_title_highlight  = $workshop_title_highlight ?? 'A Healing Circle';
$workshop_desc             = $workshop_desc ?? "Join our upcoming workshops to pause, release stress, and explore what’s been weighing you down. Through guided practices, reflection, and shared learning, discover simple tools to nurture calm, balance, and clarity in everyday life. Come as you are, connect with others, and grow at your own pace.";
$workshop_btn_text         = $workshop_btn_text ?? 'Explore Workshops';
$workshop_btn_url          = $workshop_btn_url ?? 'workshop';
$workshop_img              = $workshop_img ?? (file_exists(dirname(__DIR__) . '/assets/images/workshop-healing-circle.png') ? 'assets/images/workshop-healing-circle.png' : 'assets/images/about-image.jpeg');
?>

<section class="workshop-section position-relative" id="workshop">
    <div class="container">
        
        <!-- 1. Top Section Header (Full Length Without Breaking) -->
        <?php if (!empty($show_welcome_header ?? true)): ?>
            <div class="workshop-top-header">
                <?php if (!empty($welcome_logo)): ?>
                    <div class="workshop-brand-seal-wrapper">
                        <img src="<?= htmlspecialchars($welcome_logo) ?>" 
                             alt="SS Healing Rays" 
                             class="workshop-brand-seal">
                    </div>
                <?php endif; ?>

                <p class="workshop-pretitle"><?= htmlspecialchars($welcome_tagline) ?></p>

                <h2 class="workshop-welcome-text">
                    <?= htmlspecialchars($welcome_headline) ?>
                </h2>
            </div>
        <?php endif; ?>

        <!-- 2. Main Content Grid (Two Columns: Left Image Arch | Right Content) -->
        <div class="row align-items-center justify-content-center workshop-grid-row">
            
            <!-- Left Column: Parabolic Arch Image Card -->
            <div class="col-12 col-lg-auto col-workshop-image d-flex justify-content-center">
                <div class="workshop-image-card">
                    <img src="<?= htmlspecialchars($workshop_img) ?>" 
                         alt="<?= htmlspecialchars($workshop_title_1 . ' ' . $workshop_title_highlight) ?>"
                         loading="lazy">
                </div>
            </div>

            <!-- Right Column: Workshop Content & Actions -->
            <div class="col-12 col-lg-auto col-workshop-content">
                <div class="workshop-content">
                    
                    <!-- Sacred Energy Pinwheel Badge -->
                    <div class="workshop-badge">
                        <svg class="workshop-badge-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <circle cx="12" cy="12" r="3"/>
                            <path d="M12 2v3M12 19v3M4.93 4.93l2.12 2.12M16.95 16.95l2.12 2.12M2 12h3M19 12h3M4.93 19.07l2.12-2.12M16.95 7.05l2.12-2.12"/>
                        </svg>
                        <span><?= htmlspecialchars($workshop_badge) ?></span>
                    </div>

                    <!-- Main Workshop Heading: "Release & Restore / A Healing Circle" -->
                    <h3 class="workshop-heading">
                        <span class="workshop-title-line-1"><?= htmlspecialchars($workshop_title_1) ?></span>
                        <span class="workshop-title-line-2">
                            <span class="workshop-title-highlight"><?= htmlspecialchars($workshop_title_highlight) ?></span>
                        </span>
                    </h3>

                    <!-- Compassionate Description -->
                    <p class="workshop-description">
                        <?= htmlspecialchars($workshop_desc) ?>
                    </p>

                    <!-- Main Reusable Button Component -->
                    <div class="workshop-actions">
                        <?php
                            $btn_text  = $workshop_btn_text;
                            $btn_url   = $workshop_btn_url;
                            $btn_class = 'Btn-Workshop-Primary';
                            include dirname(__DIR__) . '/common/button.php';
                        ?>
                    </div>

                </div>
            </div>

        </div>

    </div>
</section>
