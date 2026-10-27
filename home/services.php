<?php
/**
 * ==============================================================================
 * Services Carousel Component - SS Healing Rays (Swiper 11)
 * Displays 11 Healing Services without Bootstrap .container class (fluid/wide layout)
 * Matches UI Screenshot:
 *   - Centered "Healing Services" heading in Marcellus font (#5b2160)
 *   - Full-bleed / wide Swiper carousel with 4 cards in desktop view
 *   - Rounded card images (border-radius: 28px) with left-aligned Marcellus titles
 *   - Clean circular floating navigation chevrons (< and >)
 *   - Centered "Explore Service ↗" pill CTA button
 * ==============================================================================
 */

$services_title    = $services_title ?? 'Healing Services';
$services_cta_text = $services_cta_text ?? 'Explore Service';
$services_cta_url  = $services_cta_url ?? '#services';

$services_list = $services_list ?? [
    [
        'title' => 'Trauma Healing',
        'image' => 'assets/images/services/trauma-healing.png',
        'url'   => '#trauma-healing'
    ],
    [
        'title' => 'Personal Transformation',
        'image' => 'assets/images/services/personal-transformation.png',
        'url'   => '#personal-transformation'
    ],
    [
        'title' => 'Guided Meditation',
        'image' => 'assets/images/services/meditations.png',
        'url'   => '#meditations'
    ],
    [
        'title' => 'Tarot Card Reading',
        'image' => 'assets/images/services/tarot-card-reading.png',
        'url'   => '#tarot-reading'
    ],
    [
        'title' => 'Reiki Healing',
        'image' => 'assets/images/services/reiki-healing.jpg',
        'url'   => '#reiki'
    ],
    [
        'title' => 'Crystal Healing',
        'image' => 'assets/images/services/crystal-healing.jpg',
        'url'   => '#crystal-healing'
    ],
    [
        'title' => 'Angel Healing',
        'image' => 'assets/images/services/angel-healing.jpg',
        'url'   => '#angel-healing'
    ],
    [
        'title' => 'Energy healing',
        'image' => 'assets/images/services/energy-healing.jpg',
        'url'   => '#energy-healing'
    ],
    [
        'title' => 'EFT',
        'image' => 'assets/images/services/eft.jpg',
        'url'   => '#eft'
    ],
    [
        'title' => 'Counselling',
        'image' => 'assets/images/services/counselling.jpg',
        'url'   => '#counselling'
    ],
    [
        'title' => 'Therapeutic Yoga',
        'image' => 'assets/images/services/therapeutic-yoga.jpg',
        'url'   => '#yoga'
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
