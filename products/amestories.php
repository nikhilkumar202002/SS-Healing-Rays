<?php
/**
 * ==============================================================================
 * Genuine Client Stories Section - Âme Crystals (SS Healing Rays)
 * "When the Right Crystal Finds Its Soulmate"
 * 
 * Layout:
 *   - Row 1: Left Side Image | Right Side Heading & Description
 *   - Row 2: 4-Column First Preview Infinite Testimonial Slider
 * 
 * Dedicated Stylesheet: assets/css/productbanner.css
 * ==============================================================================
 */

$stories_headline_1 = $stories_headline_1 ?? 'When the Right Crystal';
$stories_headline_2 = $stories_headline_2 ?? 'Finds Its Soulmate';
$stories_row1_img   = $stories_row1_img ?? 'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.40 PM.jpeg';
if (!file_exists(dirname(__DIR__) . '/' . $stories_row1_img)) {
    if (file_exists(dirname(__DIR__) . '/assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.40 PM.jpg')) {
        $stories_row1_img = 'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.40 PM.jpg';
    } elseif (file_exists(dirname(__DIR__) . '/assets/banner/ame-crystals-banner.jpg')) {
        $stories_row1_img = 'assets/banner/ame-crystals-banner.jpg';
    }
}

$client_stories = $client_stories ?? [
    [
        'quote'    => 'I went in looking for something completely different, but during our consultation, this Amethyst cluster kept drawing my attention. It has become my everyday anchor for morning meditation and calm.',
        'context'  => 'Selected during an in-person aura and pendulum consultation in Hyderabad to support a peaceful daily grounding ritual.',
        'author'   => 'Ananya',
        'location' => 'Hyderabad',
        'piece'    => 'Natural Amethyst Cluster',
    ],
    [
        'quote'    => 'The customised bracelet was thoughtfully arranged around my career transition. Knowing each stone was selected and cleansed specifically for my intention made it feel deeply personal.',
        'context'  => 'A bespoke combination of Citrine, Tiger\'s Eye, and Clear Quartz, crafted to accompany his daily professional journey.',
        'author'   => 'Rahul M.',
        'location' => 'Hyderabad',
        'piece'    => 'Custom Intention Bracelet',
    ],
    [
        'quote'    => 'When my bracelet cord became loose after months of continuous wear, they restrung and re-energised it for me at the sanctuary. That ongoing care is what makes Âme truly special.',
        'context'  => 'In-person maintenance and cord re-tying provided at our Hyderabad center as part of our lifelong support commitment.',
        'author'   => 'Sunita K.',
        'location' => 'Hyderabad',
        'piece'    => 'Restrung Gemstone Bracelet',
    ],
    [
        'quote'    => 'The consultation helped me understand which stones brought emotional gentleness. Wearing the mala during stressful workdays gives me a subtle, calming touchpoint.',
        'context'  => 'Recommended after an online guidance session focused on emotional harmony and mindful pauses during busy schedules.',
        'author'   => 'Meera N.',
        'location' => 'Bengaluru',
        'piece'    => 'Rose Quartz & Moonstone Mala',
    ],
    [
        'quote'    => 'Having the crystal grid set up in my study after its 21-day energising process created such a focused, serene atmosphere for my new venture.',
        'context'  => 'Customised intention grid arranged with Pyrite, Green Aventurine, and Quartz for a home office workspace.',
        'author'   => 'Karthik S.',
        'location' => 'Hyderabad',
        'piece'    => '21-Day Energised Grid',
    ],
    [
        'quote'    => 'Simple, clear instructions on cleansing and space placement made all the difference. I didn\'t need to be an expert to care for them properly.',
        'context'  => 'Guided selection for front entrance grounding and crystal maintenance instructions shared post-purchase.',
        'author'   => 'Deepa V.',
        'location' => 'Chennai',
        'piece'    => 'Tourmaline & Selenite Pair',
    ],
];
?>

<section class="ame-stories-section position-relative" id="ameStories" aria-label="When the Right Crystal Finds Its Soulmate">
    <div class="container ame-stories-container">
        
        <!-- ==================================================================
             ROW 1: Left Side Image | Right Side Heading & Description
             ================================================================== -->
        <div class="row align-items-lg-stretch align-items-center g-4 g-lg-5 mb-5 ame-stories-intro-row">
            
            <!-- Left Side: Image Media Card (Height matches right content) -->
            <div class="col-12 col-lg-5 ame-stories-intro-media d-flex flex-column justify-content-center">
                <div class="ame-stories-image-card position-relative overflow-hidden w-100 h-100 flex-grow-1">
                    <img src="<?= htmlspecialchars($stories_row1_img) ?>" 
                         alt="When the Right Crystal Finds Its Soulmate" 
                         class="ame-stories-intro-img"
                         loading="lazy">
              
                </div>
            </div>

            <!-- Right Side: Heading & Description -->
            <div class="col-12 col-lg-7 ame-stories-intro-content d-flex flex-column justify-content-center">
                <div class="ame-stories-intro-body">
                    
                    <div class="intro-headline-wrap mb-3">
                        <!-- Headline -->
                        <h2 class="ame-stories-heading mb-0">
                            <?= htmlspecialchars($stories_headline_1) ?> <span class="title-highlight"><?= htmlspecialchars($stories_headline_2) ?></span>
                        </h2>
                    </div>

                    <!-- Description -->
                    <div class="ame-stories-intro-text">
                        <p class="mb-3">
                            We believe a crystal finds its soulmate when intention meets authentic guidance. Every story represents a real personal connection—from initial consultation and careful selection, to intention customisation and ongoing care.
                        </p>
                        <p class="mb-0 text-muted">
                            Shared with permission, these concise experiences reflect the everyday comfort, grounding, and symbolic support our crystals bring to personal journeys, without guaranteed outcomes.
                        </p>
                    </div>

                </div>
            </div>

        </div>

        <!-- ==================================================================
             ROW 2: Testimonial 4 Columns First Preview Infinite Slider
             ================================================================== -->
        <div class="ame-stories-slider-row position-relative">
            
            <div class="swiper ame-testimonials-swiper" id="ameTestimonialsSwiper">
                <div class="swiper-wrapper">
                    <?php foreach ($client_stories as $index => $story): ?>
                        <div class="swiper-slide ame-story-slide">
                            <div class="ame-testimonial-card h-100 d-flex flex-column justify-content-between">
                                
                                <!-- Card Top: Quote Icon -->
                                <div class="card-header-meta mb-3">
                                    <span class="story-quote-icon" aria-hidden="true">
                                        <i class="bi bi-quote"></i>
                                    </span>
                                </div>

                                <!-- Card Middle: Quote Text & Context -->
                                <div class="card-quote-body flex-grow-1 mb-4">
                                    <blockquote class="story-quote-text mb-2">
                                        "<?= htmlspecialchars($story['quote']) ?>"
                                    </blockquote>
                                    <p class="story-context-text mb-0">
                                        <?= htmlspecialchars($story['context']) ?>
                                    </p>
                                </div>

                                <!-- Card Footer: Author Name & Location -->
                                <div class="card-author-footer pt-3 border-top d-flex align-items-center">
                                    <div class="author-info d-flex align-items-center gap-2">
                                        <span class="author-avatar-circle">
                                            <?= htmlspecialchars(substr($story['author'], 0, 1)) ?>
                                        </span>
                                        <div class="author-text-details">
                                            <strong class="author-name d-block"><?= htmlspecialchars($story['author']) ?></strong>
                                            <small class="author-location text-muted"><?= htmlspecialchars($story['location']) ?></small>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>

        </div>

    </div>
</section>

<!-- Swiper Initializer for Automatic Testimonial Slider -->
<script>
(function() {
    function initAmeTestimonialsSwiper() {
        const swiperContainer = document.getElementById('ameTestimonialsSwiper');
        if (!swiperContainer) return;

        // Ensure Swiper library is loaded; retry if not yet ready
        if (typeof Swiper === 'undefined') {
            setTimeout(initAmeTestimonialsSwiper, 60);
            return;
        }

        if (swiperContainer.dataset.initialized === 'true') {
            return;
        }
        swiperContainer.dataset.initialized = 'true';

        const ameSwiper = new Swiper('#ameTestimonialsSwiper', {
            slidesPerView: 1.15,
            spaceBetween: 16,
            loop: true,
            loopAdditionalSlides: 2,
            speed: 700,
            grabCursor: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },
            breakpoints: {
                576: {
                    slidesPerView: 1.8,
                    spaceBetween: 18,
                },
                768: {
                    slidesPerView: 2.5,
                    spaceBetween: 20,
                },
                992: {
                    slidesPerView: 3.5,
                    spaceBetween: 22,
                },
                1200: {
                    slidesPerView: 3.5,
                    spaceBetween: 24,
                }
            }
        });

        // Store reference
        window.ameTestimonialsSwiper = ameSwiper;
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initAmeTestimonialsSwiper);
    } else {
        initAmeTestimonialsSwiper();
    }
    window.addEventListener('load', initAmeTestimonialsSwiper);
})();
</script>
