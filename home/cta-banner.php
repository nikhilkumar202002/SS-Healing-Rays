<?php
/**
 * ==============================================================================
 * Whispers of Stillness Retreat - Full Banner CTA Section
 * ==============================================================================
 * Features:
 *   - Ambient background image carousel with smooth crossfade fade animation
 *   - Soft luminous daylight overlay matching the UI screenshot
 *   - Signature typography: "Join Us at / Whispers of Stillness / Retreat"
 *   - Project standard reusable button: "Book your slot ↗"
 * ==============================================================================
 */

$cta_banner_title_1  = $cta_banner_title_1 ?? 'Join our';
$cta_banner_title_2  = $cta_banner_title_2 ?? 'Healing Circle.';
$cta_banner_title_3  = $cta_banner_title_3 ?? '';
$cta_banner_btn_text = $cta_banner_btn_text ?? 'Book your slot';
$cta_banner_btn_url  = $cta_banner_btn_url ?? '#bookingModal';

$cta_banner_image = $cta_banner_image ?? 'assets/banner/cta-banner.jpeg';
?>

<section class="cta-banner-section position-relative overflow-hidden" id="retreat-cta" aria-label="Join our Healing Circle">
    <!-- Ambient Single Background Image -->
    <div class="cta-banner-bg-wrapper" aria-hidden="true">
        <img src="<?= htmlspecialchars($cta_banner_image) ?>" 
             alt="Healing Circle Atmosphere" 
             class="cta-banner-bg-img"
             loading="eager">
    </div>

    <!-- Soft Luminous Daylight Overlay (Matching UI Screenshot) -->
    <div class="cta-banner-overlay" aria-hidden="true"></div>

    <!-- Centered Content -->
    <div class="container position-relative cta-banner-container">
        <div class="cta-banner-content text-center mx-auto">
            
            <h2 class="cta-banner-title">
                <?php if (!empty($cta_banner_title_1)): ?>
                    <span class="cta-title-line cta-title-main"><?= htmlspecialchars($cta_banner_title_1) ?></span>
                <?php endif; ?>
                <?php if (!empty($cta_banner_title_2)): ?>
                    <span class="cta-title-line cta-title-highlight"><?= htmlspecialchars($cta_banner_title_2) ?></span>
                <?php endif; ?>
                <?php if (!empty($cta_banner_title_3)): ?>
                    <span class="cta-title-line cta-title-main"><?= htmlspecialchars($cta_banner_title_3) ?></span>
                <?php endif; ?>
            </h2>

            <div class="cta-banner-action">
                <?php
                    $btn_text       = $cta_banner_btn_text;
                    $btn_url        = $cta_banner_btn_url;
                    $btn_class      = 'Btn-Cta-Retreat';
                    $btn_bg         = '#ffffff';
                    $btn_icon_bg    = '#54205f';
                    $btn_text_color = '#111133';
                    $btn_icon_color = '#ffffff';
                    $btn_attr       = 'data-bs-toggle="modal" data-bs-target="#bookingModal" aria-haspopup="dialog"';
                    include dirname(__DIR__) . '/common/button.php';
                ?>
            </div>

        </div>
    </div>
</section>
