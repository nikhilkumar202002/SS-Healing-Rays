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
                    
                    <!-- Sacred Lotus Flower Badge (PiFlowerLotusThin) -->
                    <div class="workshop-badge">
                        <svg class="workshop-badge-icon" width="18" height="18" viewBox="0 0 256 256" fill="currentColor" aria-hidden="true">
                            <path d="M242.37,123.65a11.54,11.54,0,0,0-7.08-5.46A71.5,71.5,0,0,0,209,116.52c5.48-21.46,2.38-38.36-.75-48a12.16,12.16,0,0,0-14.16-8.19,82.85,82.85,0,0,0-31,14.17,91.06,91.06,0,0,0-27.9-36,11.91,11.91,0,0,0-14.44,0,91.06,91.06,0,0,0-27.9,36,82.92,82.92,0,0,0-31-14.17,12.16,12.16,0,0,0-14.16,8.19c-3.13,9.68-6.23,26.58-.75,48a71.5,71.5,0,0,0-26.26,1.67,11.54,11.54,0,0,0-7.08,5.46,12,12,0,0,0-1.2,9.22c3.24,12,13.2,34.81,43.52,52.92S113.45,204,128,204s41.61,0,72.07-18.21,40.28-40.93,43.52-52.92A12,12,0,0,0,242.37,123.65ZM195.8,68.11A4.2,4.2,0,0,1,200.67,71c4,12.5,8,38.35-10.77,71-10.45,18.19-25.11,32.2-38.11,41.44C162,170,172,149.24,172,119.19a113.35,113.35,0,0,0-5.88-37A75.28,75.28,0,0,1,195.8,68.11ZM55.33,71a4.19,4.19,0,0,1,4.87-2.84A75.28,75.28,0,0,1,89.88,82.19a113.35,113.35,0,0,0-5.88,37c0,30.05,10,50.82,20.21,64.23-13-9.24-27.66-23.25-38.11-41.44C47.32,109.3,51.29,83.45,55.33,71Zm4.72,108c-27.9-16.67-37-37.32-39.9-48.15a4,4,0,0,1,.41-3.13,3.59,3.59,0,0,1,2.21-1.73,64.62,64.62,0,0,1,26.73-1,123.48,123.48,0,0,0,9.66,21c13.28,23.1,32.66,39.67,48.27,49.11A116.34,116.34,0,0,1,60.05,178.93Zm68,16.34a75.75,75.75,0,0,1-17.08-16.4C98.37,162.58,92,142.5,92,119.19c0-44.25,23.49-66.75,33.59-74.36a4,4,0,0,1,4.82,0C140.51,52.44,164,74.94,164,119.19c0,23.31-6.37,43.39-18.92,59.68A75.75,75.75,0,0,1,128,195.27Zm107.85-64.49c-2.92,10.83-12,31.48-39.9,48.15a116.34,116.34,0,0,1-47.38,16.15c15.61-9.44,35-26,48.27-49.11a123.48,123.48,0,0,0,9.66-21,64.45,64.45,0,0,1,26.73,1,3.59,3.59,0,0,1,2.21,1.73A4,4,0,0,1,235.85,130.78Z"/>
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
