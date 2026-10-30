<?php

$identity_heading_main      = $identity_heading_main ?? 'A Ray of Light on';
$identity_heading_highlight = $identity_heading_highlight ?? 'Every Journey';

$identity_subtitle          = $identity_subtitle ?? 'Light often reminds us of warmth, hope, and the possibility of a new beginning.';

$identity_description       = $identity_description ?? 'At SS Healing Rays, we want our brand to evoke that same sense of calm and possibility. The image of a gentle ray of light reflects our aspiration to create a welcoming environment where individuals can pause, reconnect with themselves, and explore their personal journeys. For us, wellbeing is not about becoming someone else. It is about developing a deeper understanding of who we are and finding space to grow with patience and compassion. This philosophy shapes the atmosphere we hope to create: one grounded in kindness, self-awareness, and the possibility of positive change.';

$identity_bg_img            = $identity_bg_img ?? (
    file_exists(dirname(__DIR__) . '/assets/images/about/phylosophy.jpg')
        ? 'assets/images/about/phylosophy.jpg'
        : (file_exists(dirname(__DIR__) . '/assets/images/about/phylosophy')
            ? 'assets/images/about/phylosophy'
            : 'assets/images/about/our-dentity.jpg')
);
?>

<section class="identity-section position-relative" id="ourIdentity" style="background-image: url('<?= htmlspecialchars($identity_bg_img) ?>');" aria-label="Our Identity - A Ray of Light on Every Journey">
    
    <!-- Soft Center Radial Gradient Overlay -->
    <div class="identity-radial-overlay" aria-hidden="true"></div>

    <div class="container-fluid identity-container position-relative">
        <div class="identity-content-wrap mx-auto text-center">
            
            <!-- Main Heading (2-Line Balanced Layout) -->
            <h2 class="identity-heading">
                <span class="identity-title-line"><?= htmlspecialchars($identity_heading_main) ?></span>
                <span class="identity-title-line">
                    <span class="title-highlight"><?= htmlspecialchars($identity_heading_highlight) ?></span>
                </span>
            </h2>

            <!-- Subtitle Tagline -->
            <p class="identity-subtitle">
                <?= htmlspecialchars($identity_subtitle) ?>
            </p>

            <!-- Center-Aligned Full-Width Description Paragraph -->
            <div class="identity-description-wrap">
                <p class="identity-description">
                    <?= htmlspecialchars($identity_description) ?>
                </p>
            </div>

        </div>
    </div>
</section>
