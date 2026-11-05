<?php
/**
 * ==============================================================================
 * Âme Crystals Dedicated CTA Banner Component - SS Healing Rays
 * "Let Your Crystal Find You."
 * ==============================================================================
 */

$ame_cta_headline_1 = $ame_cta_headline_1 ?? 'Let Your Crystal';
$ame_cta_headline_2 = $ame_cta_headline_2 ?? 'Find You.';
$ame_cta_desc       = $ame_cta_desc ?? "Not sure which crystal is right for you? Let's understand your present needs and help you find a crystal that resonates with your journey.";
$ame_cta_btn_text   = $ame_cta_btn_text ?? 'Claim Free 20-Min Session free session on purchase of Rs.399/-';
$ame_cta_btn_url    = $ame_cta_btn_url ?? '#bookingModal';

$ame_cta_bg_img = $ame_cta_bg_img ?? 'assets/banner/ame-crystals-cta-banner.jpg';
if (!file_exists(dirname(__DIR__) . '/' . $ame_cta_bg_img)) {
    if (file_exists(dirname(__DIR__) . '/assets/banner/ame-crystals-cta-banner.jpeg')) {
        $ame_cta_bg_img = 'assets/banner/ame-crystals-cta-banner.jpeg';
    } elseif (file_exists(dirname(__DIR__) . '/assets/banner/cta-banner.jpg')) {
        $ame_cta_bg_img = 'assets/banner/cta-banner.jpg';
    } elseif (file_exists(dirname(__DIR__) . '/assets/banner/cta-banner.jpeg')) {
        $ame_cta_bg_img = 'assets/banner/cta-banner.jpeg';
    } else {
        $ame_cta_bg_img = 'assets/banner/banner-1.jpg';
    }
}
?>

<section class="ame-cta-section position-relative overflow-hidden" id="ameCta" aria-label="Let Your Crystal Find You">
    <!-- Ambient Sanctuary Background Image -->
    <div class="ame-cta-bg-wrapper" aria-hidden="true">
        <img src="<?= htmlspecialchars($ame_cta_bg_img) ?>" 
             alt="Âme Crystals Sanctuary Atmosphere" 
             class="ame-cta-bg-img"
             loading="lazy">
    </div>

    <!-- Luxury Darkened Gradient Overlay -->
    <div class="ame-cta-overlay" aria-hidden="true"></div>

    <!-- Centered Content -->
    <div class="container position-relative ame-cta-container">
        <div class="ame-cta-content text-center mx-auto">
            
            <!-- Headline: Marcellus with Playfair Highlight -->
            <h2 class="ame-cta-title mb-3">
                <span class="cta-title-line"><?= htmlspecialchars($ame_cta_headline_1) ?></span>
                <span class="cta-title-line">
                    <span class="title-highlight"><?= htmlspecialchars($ame_cta_headline_2) ?></span>
                </span>
            </h2>

            <!-- Subtitle Description -->
            <p class="ame-cta-subtitle mx-auto mb-4">
                <?= htmlspecialchars($ame_cta_desc) ?>
            </p>

            <!-- CTA Action Button -->
            <div class="ame-cta-action d-flex justify-content-center pt-2">
                <?php
                    $btn_text       = $ame_cta_btn_text;
                    $btn_url        = $ame_cta_btn_url;
                    $btn_class      = 'Btn-Ame-Cta';
                    $btn_bg         = '#ffffff';
                    $btn_icon_bg    = 'var(--primary-color, #82387a)';
                    $btn_text_color = 'var(--heading-color, #111133)';
                    $btn_icon_color = '#ffffff';
                    $btn_attr       = 'data-bs-toggle="modal" data-bs-target="#bookingModal" data-service-title="Free 30-Min Crystal Consultation" data-service-category="Âme Crystals" aria-label="' . htmlspecialchars($ame_cta_btn_text) . '"';
                    include dirname(__DIR__) . '/common/button.php';
                ?>
            </div>

        </div>
    </div>
</section>

