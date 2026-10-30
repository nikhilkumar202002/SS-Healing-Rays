<?php

$services_title    = $services_title ?? 'Healing Services';
$services_cta_text = $services_cta_text ?? 'Explore Services';
$services_cta_url  = $services_cta_url ?? 'services';

$services_list = $services_list ?? [
    [
        'title' => 'Trauma Healing',
        'image' => 'assets/images/services/Trauma Healing.jpg',
        'url'   => 'services#trauma-healing'
    ],
    [
        'title' => 'Personal Transformation',
        'image' => 'assets/images/services/Personal Transformation.jpg',
        'url'   => 'services#personal-transformation'
    ],
    [
        'title' => 'Guided Meditation',
        'image' => 'assets/images/services/Guided Meditation.jpg',
        'url'   => 'services#meditations'
    ],
    [
        'title' => 'Tarot Card Reading',
        'image' => 'assets/images/services/Tarot Card Reading.jpg',
        'url'   => 'services#tarot-card-reading'
    ],
    [
        'title' => 'Reiki Healing',
        'image' => 'assets/images/services/Reiki Healing.jpg',
        'url'   => 'services#reiki-healing'
    ],
    [
        'title' => 'Crystal Healing',
        'image' => 'assets/images/services/Crystal Healing.jpg',
        'url'   => 'services#crystal-healing'
    ],
    [
        'title' => 'Angel Healing',
        'image' => 'assets/images/services/Angel Healing.jpg',
        'url'   => 'services#angel-healing'
    ],
    [
        'title' => 'Energy healing',
        'image' => 'assets/images/services/Energy healing.jpg',
        'url'   => 'services#energy-healing'
    ],
    [
        'title' => 'EFT',
        'image' => 'assets/images/services/EFT.jpg',
        'url'   => 'services#eft'
    ],
    [
        'title' => 'Counselling',
        'image' => 'assets/images/services/Counselling.jpg',
        'url'   => 'services#counselling'
    ],
    [
        'title' => 'Therapeutic Yoga',
        'image' => 'assets/images/services/Therapeutic Yoga.jpg',
        'url'   => 'services#therapeutic-yoga'
    ],
];
?>

<section class="services-section" id="services">
    
    <!-- 1. Centered Header -->
    <div class="services-header text-center">
        <h2 class="services-title"><?= htmlspecialchars($services_title) ?></h2>
    </div>

    <!-- 2. Fluid / Wide Swiper Carousel (No Bootstrap .container) -->
    <div class="services-carousel-wrapper">
        
        <!-- Navigation Prev Button -->
        <button type="button" class="services-nav-btn services-nav-prev" id="servicesPrevBtn" aria-label="Previous service">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="15 18 9 12 15 6"></polyline>
            </svg>
        </button>

        <!-- Swiper Container -->
        <div class="swiper services-swiper">
            <div class="swiper-wrapper">
                <?php foreach ($services_list as $index => $service): ?>
                    <div class="swiper-slide service-slide">
                        <a href="<?= htmlspecialchars($service['url']) ?>" class="service-card-link">
                            <div class="service-card">
                                <div class="service-image-box">
                                    <img src="<?= htmlspecialchars($service['image']) ?>" 
                                         alt="<?= htmlspecialchars($service['title']) ?>" 
                                         loading="lazy">
                                </div>
                                <h3 class="service-card-title"><?= htmlspecialchars($service['title']) ?></h3>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Navigation Next Button -->
        <button type="button" class="services-nav-btn services-nav-next" id="servicesNextBtn" aria-label="Next service">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
        </button>
        
    </div>

    <!-- 3. Bottom Action Button: Explore Service ↗ -->
    <div class="services-actions text-center">
        <?php
            $btn_text  = $services_cta_text;
            $btn_url   = $services_cta_url;
            $btn_class = 'Btn-Services-Primary';
            include dirname(__DIR__) . '/common/button.php';
        ?>
    </div>

</section>
