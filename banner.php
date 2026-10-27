<?php

$banner_slides = $banner_slides ?? [
    [
        'image'       => 'assets/banner/banner-1.jpeg',
        'title'       => 'Indulge in <em>Wellness,</em><br>Surrounded by <em>Elegance</em>',
        'description' => 'An exclusive sanctuary where world-class spa treatments, mindful movement, and gourmet nutrition meet luxury accommodation in breathtaking destinations.',
        'btn1_text'   => 'Explore Retreats',
        'btn1_url'    => '#services',
        'btn2_text'   => 'Reserve Your Suite',
        'btn2_url'    => '#booking',
    ],
    [
        'image'       => 'assets/banner/banner-2.jpeg',
        'title'       => 'Harmonize Your <em>Energy,</em><br>Restore Inner <em>Serenity</em>',
        'description' => 'Experience authentic Tibetan singing bowl resonance, sacred Reiki alignment, and transformative holistic sessions to renew your mind, body, and spirit.',
        'btn1_text'   => 'Explore Modalities',
        'btn1_url'    => '#services',
        'btn2_text'   => 'Book a Session',
        'btn2_url'    => '#booking',
    ],
    [
        'image'       => 'assets/banner/banner-3.jpeg',
        'title'       => 'Awaken Your <em>Potential,</em><br>Embrace Mindful <em>Growth</em>',
        'description' => 'Join empowering wellness masterclasses, guided group meditation, and certified healing courses designed to nurture deep peace and radiant vitality.',
        'btn1_text'   => 'Join Workshop',
        'btn1_url'    => '#services',
        'btn2_text'   => 'Connect with Us',
        'btn2_url'    => '#contact',
    ],
];
?>

<section class="hero-banner-section position-relative" aria-label="Featured Highlights">
    <!-- Swiper Slider Container -->
    <div class="swiper hero-banner-swiper">
        <div class="swiper-wrapper">
            <?php foreach ($banner_slides as $index => $slide): ?>
                <div class="swiper-slide" data-slide-index="<?= $index ?>">
                    <!-- Background Cover Image with Ken Burns Transition -->
                    <img src="<?= htmlspecialchars($slide['image']) ?>" 
                         alt="<?= strip_tags($slide['title']) ?>" 
                         class="banner-bg-img"
                         loading="<?= $index === 0 ? 'eager' : 'lazy' ?>">

                    <!-- Cinematic Dark Vignette Overlay -->
                    <div class="banner-overlay" aria-hidden="true"></div>

                    <!-- Slide Text Content -->
                    <div class="banner-content">
                        <h1 class="banner-title mb-3">
                            <?= $slide['title'] ?>
                        </h1>

                        <p class="banner-description">
                            <?= htmlspecialchars($slide['description']) ?>
                        </p>

                        <div class="banner-actions">
                            <!-- Primary CTA Button (Explore Retreats ↗) -->
                            <?php if (!empty($slide['btn1_text'])): ?>
                                <?php
                                    $btn_text  = $slide['btn1_text'];
                                    $btn_url   = $slide['btn1_url'] ?? '#services';
                                    $btn_class = 'Btn-Banner-Primary';
                                    include __DIR__ . '/assets/common/button.php';
                                ?>
                            <?php endif; ?>

                            <!-- Secondary Ghost CTA Button (Reserve Your Suite ↗) -->
                            <?php if (!empty($slide['btn2_text'])): ?>
                                <?php
                                    $btn_text  = $slide['btn2_text'];
                                    $btn_url   = $slide['btn2_url'] ?? '#booking';
                                    $btn_class = 'Btn-Banner-Ghost';
                                    include __DIR__ . '/assets/common/button.php';
                                ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Glassmorphism Navigation Controls -->
        <div class="swiper-button-prev" aria-label="Previous Slide"></div>
        <div class="swiper-button-next" aria-label="Next Slide"></div>
    </div>
</section>
