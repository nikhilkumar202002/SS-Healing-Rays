<?php

$identity_heading_main      = $identity_heading_main ?? 'A Ray of Light on';
$identity_heading_highlight = $identity_heading_highlight ?? 'Every Journey';

$identity_paragraphs        = $identity_paragraphs ?? [
    'We believe wellbeing is not about becoming someone else. It is about understanding yourself more deeply, finding the support that feels right and creating space for growth—one step at a time.',
    'Wherever you are in your journey, you are welcome to explore what feels right for you.',
];

$identity_cta_text          = $identity_cta_text ?? 'Explore Our Services';
$identity_cta_url           = $identity_cta_url ?? 'services';

$identity_bg_img            = $identity_bg_img ?? (
    file_exists(dirname(__DIR__) . '/assets/banner/about-banner-cta.jpg')
        ? 'assets/banner/about-banner-cta.jpg'
        : (file_exists(dirname(__DIR__) . '/assets/banner/about-banner-cta.jpeg')
            ? 'assets/banner/about-banner-cta.jpeg'
            : (file_exists(dirname(__DIR__) . '/assets/images/about/our-dentity.jpg')
                ? 'assets/images/about/our-dentity.jpg'
                : 'assets/images/about/phylosophy.jpg'))
);
?>

<section class="identity-section position-relative" id="ourIdentity" style="background-image: url('<?= htmlspecialchars($identity_bg_img) ?>');" aria-label="Our Identity - A Ray of Light on Every Journey">
    
    <!-- Soft Center Radial Gradient Overlay -->
    <div class="identity-radial-overlay" aria-hidden="true"></div>

    <div class="container-fluid identity-container position-relative">
        <div class="identity-content-wrap mx-auto text-center">
            
            <!-- Unified Eyebrow Badge -->
            <div class="identity-badge mb-3">
                <span class="badge-icon" aria-hidden="true"><i class="bi bi-brightness-high"></i></span>
                <span class="badge-text">Our Identity</span>
            </div>

            <!-- Main Heading (2-Line Balanced Layout) -->
            <h2 class="identity-heading">
                <span class="identity-title-line"><?= htmlspecialchars($identity_heading_main) ?></span>
                <span class="identity-title-line">
                    <span class="title-highlight"><?= htmlspecialchars($identity_heading_highlight) ?></span>
                </span>
            </h2>

            <!-- Center-Aligned Full-Width Description Paragraphs -->
            <div class="identity-description-wrap">
                <?php foreach ($identity_paragraphs as $para): ?>
                    <p class="identity-description">
                        <?= htmlspecialchars($para) ?>
                    </p>
                <?php endforeach; ?>
            </div>

            <!-- Explore Our Services CTA Button -->
            <?php if (!empty($identity_cta_text)): ?>
                <div class="identity-actions mt-4 pt-1 d-flex justify-content-center">
                    <?php
                        $btn_text  = $identity_cta_text;
                        $btn_url   = $identity_cta_url;
                        $btn_class = 'Btn-Identity-CTA';
                        include dirname(__DIR__) . '/common/button.php';
                    ?>
                </div>
            <?php endif; ?>

        </div>
    </div>
</section>
