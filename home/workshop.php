<?php


$welcome_logo          = $welcome_logo ?? 'assets/logo/main-logo.png';
$welcome_tagline       = $welcome_tagline ?? 'WELCOME TO HEAL WITH SS HEALING RAYS';
$welcome_headline      = $welcome_headline ?? "A safe space to release trauma, ease stress, and return to your calm, where every session soothes the mind, restores the body’s balance, and inspires healing from within.";

$about_badge           = $about_badge ?? 'ABOUT SS HEALING RAYS';
$about_title_1         = $about_title_1 ?? 'What Makes My';
$about_title_2         = $about_title_2 ?? 'Healing';
$about_title_highlight = $about_title_highlight ?? 'Unique';
$about_desc            = $about_desc ?? "At Heal with Sreeparvathy, healing is more than a single session. I combine Reiki, EFT and energy healing with compassionate coaching to help you release trauma, ease stress and reconnect with your inner calm. Each session is shaped around you, held in a safe, non-judgmental space, and guided at a pace that feels right for you.";
$about_btn_text        = $about_btn_text ?? 'Learn More';
$about_btn_url         = $about_btn_url ?? '#about';
$about_img             = $about_img ?? (file_exists(dirname(__DIR__) . '/assets/images/about-image.jpeg') ? 'assets/images/about-image.jpeg' : 'assets/images/workshop-healing-circle.png');
?>

<section class="about-section workshop-section" id="about">
    <div class="container">
        
        <!-- 1. Top Section Header (Full Length Without Breaking) -->
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

        <!-- 2. Main Content Grid (Two Columns: Left Image Arch | Right Content) -->
        <div class="row align-items-center justify-content-center about-grid-row">
            
            <!-- Left Column: Parabolic Arch Image Card -->
            <div class="col-12 col-lg-auto col-about-image d-flex justify-content-center">
                <div class="workshop-image-card">
                    <img src="<?= htmlspecialchars($about_img) ?>" 
                         alt="<?= htmlspecialchars($about_title_1 . ' ' . $about_title_2 . ' ' . $about_title_highlight) ?>"
                         loading="lazy">
                </div>
            </div>

            <!-- Right Column: About Us Content & Actions -->
            <div class="col-12 col-lg-auto col-about-content">
                <div class="workshop-content about-content">
                    
                    <!-- Sacred Energy Pinwheel Badge -->
                    <div class="about-badge workshop-badge">
                        <svg class="about-badge-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <circle cx="12" cy="12" r="3"/>
                            <path d="M12 2v3M12 19v3M4.93 4.93l2.12 2.12M16.95 16.95l2.12 2.12M2 12h3M19 12h3M4.93 19.07l2.12-2.12M16.95 7.05l2.12-2.12"/>
                        </svg>
                        <span><?= htmlspecialchars($about_badge) ?></span>
                    </div>

                    <!-- Main About Heading: "What Makes My / Healing Unique" -->
                    <h3 class="about-heading workshop-heading">
                        <span class="title-line-1"><?= htmlspecialchars($about_title_1) ?></span>
                        <span class="title-line-2">
                            <span class="title-main"><?= htmlspecialchars($about_title_2) ?></span>
                            <span class="title-highlight"><?= htmlspecialchars($about_title_highlight) ?></span>
                        </span>
                    </h3>

                    <!-- Compassionate Description -->
                    <p class="about-description workshop-description">
                        <?= htmlspecialchars($about_desc) ?>
                    </p>

                    <!-- Main Reusable Button Component -->
                    <div class="about-actions workshop-actions">
                        <?php
                            $btn_text  = $about_btn_text;
                            $btn_url   = $about_btn_url;
                            $btn_class = 'Btn-About-Primary';
                            include dirname(__DIR__) . '/common/button.php';
                        ?>
                    </div>

                </div>
            </div>

        </div>

    </div>
</section>