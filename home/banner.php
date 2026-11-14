<?php

$banner_slides = $banner_slides ?? [
    [
        'image'       => 'assets/banner/banner-4.jpeg',
        'title'       => 'Indulge in <em>Wellness.</em><br>Reconnect with the <em>Calm Within.</em>',
        'description' => 'Heal and find balance through gentle one-to-one guidance that helps you reconnect with yourself and navigate life with greater ease and grace.',
        'btn1_text'   => 'Explore Our Services',
        'btn1_url'    => '#services',
        'btn2_text'   => 'Book Clarity Call',
        'btn2_url'    => '#booking',
    ],
    [
        'image'       => 'assets/banner/banner-3.jpeg',
        'title'       => 'Awaken Your <em>Potential,</em><br>Embrace Mindful <em>Growth</em>',
        'description' => 'Join empowering wellness master classes, guided group meditation and certified healing courses designed to nurture deep peace and radiant vitality.',
        'btn1_text'   => 'Join Workshop',
        'btn1_url'    => 'workshop',
        'btn2_text'   => 'Connect with us',
        'btn2_url'    => '#bookingModal',
    ],
];
?>

<section class="hero-banner-section position-relative" aria-label="Featured Highlights">
    <!-- Swiper Slider Container -->
    <div class="swiper hero-banner-swiper">
        <div class="swiper-wrapper">
            <?php foreach ($banner_slides as $index => $slide): ?>
                <?php
                    $banner_img = $slide['image'];
                    if (!file_exists(dirname(__DIR__) . '/' . $banner_img)) {
                        if (str_ends_with($banner_img, '.jpeg')) {
                            $alt = substr($banner_img, 0, -5) . '.jpg';
                            if (file_exists(dirname(__DIR__) . '/' . $alt)) $banner_img = $alt;
                        } elseif (str_ends_with($banner_img, '.jpg')) {
                            $alt = substr($banner_img, 0, -4) . '.jpeg';
                            if (file_exists(dirname(__DIR__) . '/' . $alt)) $banner_img = $alt;
                        }
                    }
                ?>
                <div class="swiper-slide" data-slide-index="<?= $index ?>">
                    <!-- Background Cover Image with Ken Burns Transition -->
                    <img src="<?= htmlspecialchars($banner_img) ?>" 
                         alt="<?= strip_tags($slide['title']) ?>" 
                         class="banner-bg-img"
                         loading="<?= $index === 0 ? 'eager' : 'lazy' ?>"
                         onerror="if (!this.dataset.retried) { this.dataset.retried='1'; this.src = (this.src.indexOf('.jpeg') !== -1) ? this.src.replace('.jpeg', '.jpg') : this.src.replace('.jpg', '.jpeg'); }">

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
                                    include dirname(__DIR__) . '/common/button.php';
                                ?>
                            <?php endif; ?>

                            <!-- Secondary Ghost CTA Button (Triggers Booking Modal) -->
                            <?php if (!empty($slide['btn2_text'])): ?>
                                <?php
                                    $btn_text  = $slide['btn2_text'];
                                    $btn_url   = '#bookingModal';
                                    $btn_class = 'Btn-Banner-Ghost';
                                    $btn_attr  = 'data-bs-toggle="modal" data-bs-target="#bookingModal" aria-haspopup="dialog"';
                                    include dirname(__DIR__) . '/common/button.php';
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
