<?php
/**
 * ==============================================================================
 * Homepage About Us Section - SS Healing Rays
 * Layout: Left Column Content | Right Column Image Arch
 * Dedicated Stylesheet: assets/css/aboutus.css
 * ==============================================================================
 */

$about_badge           = $about_badge ?? 'ABOUT SS HEALING RAYS';
$about_title_1         = $about_title_1 ?? 'What Makes Our';
$about_title_2         = $about_title_2 ?? 'Healing';
$about_title_highlight = $about_title_highlight ?? 'Unique.';
$about_desc            = $about_desc ?? "We offer a compassionate, non-judgmental space,
combining healing modalities to suit your needs and pace. Many clients report meaningful
shifts early in their journey. Beyond sessions, we share simple tools to help you navigate life
with greater confidence and independence. Our nurturing community offers connection and 
encouragement along the way. We support you as you find your wings—and celebrate seeing
you fly.";
$about_btn_text        = $about_btn_text ?? 'Learn More';
$about_btn_url         = $about_btn_url ?? '#about';
$about_img             = $about_img ?? (file_exists(dirname(__DIR__) . '/assets/images/about-image.jpeg') ? 'assets/images/about-image.jpeg' : 'assets/images/workshop-healing-circle.png');
?>

<section class="about-section position-relative" id="about">
    <div class="container">

        <!-- Main Content Grid (Two Columns: Left Content | Right Image Arch) -->
        <div class="row align-items-center justify-content-center about-grid-row">
            
            <!-- Left Column: About Us Content & Actions -->
            <div class="col-12 col-lg-auto col-about-content order-2 order-lg-1">
                <div class="about-content">
                    
                    <!-- Sacred Energy Pinwheel Badge -->
                    <div class="about-badge">
                        <svg class="about-badge-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <circle cx="12" cy="12" r="3"/>
                            <path d="M12 2v3M12 19v3M4.93 4.93l2.12 2.12M16.95 16.95l2.12 2.12M2 12h3M19 12h3M4.93 19.07l2.12-2.12M16.95 7.05l2.12-2.12"/>
                        </svg>
                        <span><?= htmlspecialchars($about_badge) ?></span>
                    </div>

                    <!-- Main About Heading: "What Makes Our / Healing Unique." -->
                    <h3 class="about-heading">
                        <span class="title-line-1"><?= htmlspecialchars($about_title_1) ?></span>
                        <span class="title-line-2">
                            <span class="title-main"><?= htmlspecialchars($about_title_2) ?></span>
                            <span class="title-highlight"><?= htmlspecialchars($about_title_highlight) ?></span>
                        </span>
                    </h3>

                    <!-- Compassionate Description -->
                    <p class="about-description">
                        <?= htmlspecialchars($about_desc) ?>
                    </p>

                    <!-- Main Reusable Button Component -->
                    <div class="about-actions">
                        <?php
                            $btn_text  = $about_btn_text;
                            $btn_url   = $about_btn_url;
                            $btn_class = 'Btn-About-Primary';
                            include dirname(__DIR__) . '/common/button.php';
                        ?>
                    </div>

                </div>
            </div>

            <!-- Right Column: Parabolic Arch Image Card -->
            <div class="col-12 col-lg-auto col-about-image d-flex justify-content-center order-1 order-lg-2">
                <div class="about-image-card">
                    <img src="<?= htmlspecialchars($about_img) ?>" 
                         alt="<?= htmlspecialchars($about_title_1 . ' ' . $about_title_2 . ' ' . $about_title_highlight) ?>"
                         loading="lazy">
                </div>
            </div>

        </div>

    </div>
</section>
