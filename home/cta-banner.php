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

$cta_banner_title_1  = $cta_banner_title_1 ?? 'Join Us at';
$cta_banner_title_2  = $cta_banner_title_2 ?? 'Whispers of Stillness';
$cta_banner_title_3  = $cta_banner_title_3 ?? 'Retreat';
$cta_banner_btn_text = $cta_banner_btn_text ?? 'Book your slot';
$cta_banner_btn_url  = $cta_banner_btn_url ?? '#book-retreat';

$cta_banner_images = $cta_banner_images ?? [
    'assets/banner/cta-banner.jpeg',
    'assets/banner/cta-banner-2.jpeg',
    'assets/banner/cta-banner-3.jpeg',
];
?>

<section class="cta-banner-section position-relative overflow-hidden" id="retreat-cta" aria-label="Whispers of Stillness Retreat">
    <!-- Ambient Background Crossfade Swiper -->
    <div class="swiper cta-banner-swiper" aria-hidden="true">
        <div class="swiper-wrapper">
            <?php foreach ($cta_banner_images as $index => $img): ?>
                <div class="swiper-slide">
                    <img src="<?= htmlspecialchars($img) ?>" 
                         alt="Whispers of Stillness Retreat Atmosphere <?= $index + 1 ?>" 
                         class="cta-banner-bg-img"
                         loading="<?= $index === 0 ? 'eager' : 'lazy' ?>">
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Soft Luminous Daylight Overlay (Matching UI Screenshot) -->
    <div class="cta-banner-overlay" aria-hidden="true"></div>

    <!-- Centered Content -->
    <div class="container position-relative cta-banner-container">
        <div class="cta-banner-content text-center mx-auto">
            
            <h2 class="cta-banner-title">
                <span class="cta-title-line cta-title-main"><?= htmlspecialchars($cta_banner_title_1) ?></span>
                <span class="cta-title-line cta-title-highlight"><?= htmlspecialchars($cta_banner_title_2) ?></span>
                <span class="cta-title-line cta-title-main"><?= htmlspecialchars($cta_banner_title_3) ?></span>
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
                    include dirname(__DIR__) . '/common/button.php';
                ?>
            </div>

        </div>
    </div>
</section>
