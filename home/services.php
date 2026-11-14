<?php

$services_title    = $services_title ?? 'Healing Services';
$services_cta_text = $services_cta_text ?? 'Explore Services';
$services_cta_url  = $services_cta_url ?? 'services';

// Robust live-server image resolution for service images
if (!function_exists('resolve_service_img')) {
    function resolve_service_img($path) {
        $root = dirname(__DIR__);
        if (file_exists($root . '/' . $path)) {
            return $path;
        }
        $dir = dirname($path);
        $base = basename($path);
        $candidates = [
            $dir . '/' . str_replace(' ', '-', $base),
            $dir . '/' . str_replace('-', ' ', $base),
            $dir . '/' . strtolower($base),
            $dir . '/' . strtoupper($base),
            $dir . '/' . str_replace('.jpg', '.jpeg', $base),
            $dir . '/' . str_replace('.jpeg', '.jpg', $base),
            $dir . '/' . strtolower(str_replace(' ', '-', $base)),
        ];
        foreach ($candidates as $cand) {
            if (file_exists($root . '/' . $cand)) {
                return $cand;
            }
        }
        return $path;
    }
}

$services_list = $services_list ?? [
    [
        'title' => 'Trauma Healing',
        'image' => resolve_service_img('assets/images/services/Trauma Healing.jpg'),
        'url'   => 'services#trauma-healing'
    ],
    [
        'title' => 'Personal Transformation',
        'image' => resolve_service_img('assets/images/services/Personal Transformation.jpg'),
        'url'   => 'services#personal-transformation'
    ],
    [
        'title' => 'Guided Meditation',
        'image' => resolve_service_img('assets/images/services/Guided Meditation.jpg'),
        'url'   => 'services#meditations'
    ],
    [
        'title' => 'Tarot Card Reading',
        'image' => resolve_service_img('assets/images/services/Tarot Card Reading.jpg'),
        'url'   => 'services#tarot-card-reading'
    ],
    [
        'title' => 'Reiki Healing',
        'image' => resolve_service_img('assets/images/services/Reiki Healing.jpg'),
        'url'   => 'services#reiki-healing'
    ],
    [
        'title' => 'Crystal Healing',
        'image' => resolve_service_img('assets/images/services/Crystal Healing.jpg'),
        'url'   => 'services#crystal-healing'
    ],
    [
        'title' => 'Angel Healing',
        'image' => resolve_service_img('assets/images/services/Angel-Healing.jpg'),
        'url'   => 'services#angel-healing'
    ],
    [
        'title' => 'Energy healing',
        'image' => resolve_service_img('assets/images/services/Energy healing.jpg'),
        'url'   => 'services#energy-healing'
    ],
    [
        'title' => 'EFT',
        'image' => resolve_service_img('assets/images/services/EFT.jpg'),
        'url'   => 'services#eft'
    ],
    [
        'title' => 'Counselling',
        'image' => resolve_service_img('assets/images/services/Counselling.jpg'),
        'url'   => 'services#counselling'
    ],
    [
        'title' => 'Therapeutic Yoga',
        'image' => resolve_service_img('assets/images/services/Therapeutic Yoga.jpg'),
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
