<?php

$page_title       = 'SHAMAA | Where Yogic Wisdom Meets the Art of Healing | SS Healing Rays';
$page_description = 'Therapeutic Yoga and integrated wellness practices, thoughtfully adapted to the individual at SHAMAA.';
$current_page     = 'shamaa';
$pro_phone_code = '+91';
$pro_phone      = '9966010981';
$whatsapp_phone = '9966010981';
$pro_email      = 'contact@sshealingrays.com';
$social_fb       = 'sshealingrays';
$social_insta    = 'sravantiheals';
$social_x        = 'sshealingrays';
$social_wa       = '9966010981';
$social_linkedin = 'sshealingrays';
$social_youtube  = 'sshealingrays';
$social_threads  = 'sshealingrays';
$whatsapp_url_coaching = 'https://wa.me/' . $whatsapp_phone . '?text=' . rawurlencode('Hi, I would like to enquire about SHAMAA Wellness.');
$whatsapp_url_wellness = 'https://wa.me/' . $whatsapp_phone . '?text=' . rawurlencode('Hi, I would like to book a Clarity Call for SHAMAA Therapeutic Yoga.');
$whatsapp_url_programs = 'https://wa.me/' . $whatsapp_phone . '?text=' . rawurlencode('Hi, I would like to explore SHAMAA programmes.');
$cta_text         = 'Book Clarity Call';
$cta_url          = $whatsapp_url_wellness;
$current_user = 'shamaa';

include __DIR__ . '/common/header.php';
?>

<main class="shamaa-page-content" id="shamaaPageContent">

<?php
include __DIR__ . '/products/shamaabanner.php';

$wellness_cta_bg = file_exists(__DIR__ . '/assets/banner/cta-banner.jpg') 
    ? 'assets/banner/cta-banner.jpg' 
    : (file_exists(__DIR__ . '/assets/banner/cta-banner.jpeg') 
        ? 'assets/banner/cta-banner.jpeg' 
        : 'assets/banner/banner-1.jpg');
?>

<?php
$shamaa_about_img = 'assets/product/shamaa/Mindful-Wellness-Studio-Meditation.jpg';
if (!file_exists(__DIR__ . '/' . $shamaa_about_img)) {
    if (file_exists(__DIR__ . '/assets/images/about/Mindful-Wellness-Studio-Meditation.jpg')) {
        $shamaa_about_img = 'assets/images/about/Mindful-Wellness-Studio-Meditation.jpg';
    } else {
        $shamaa_about_img = 'assets/images/about/center-yoga-sanctuary.jpg';
    }
}
?>

<section class="wellness-about-section position-relative" id="wellnessAbout" aria-label="About SHAMAA Philosophy">
    <div class="container">
        <div class="row align-items-center g-4 g-lg-5 position-relative">
            
            <div class="col-12 col-lg-6 shamaa-about-media-col">
                <div class="wellness-media-frame shamaa-sticky-frame">
                    <img src="<?= htmlspecialchars($shamaa_about_img) ?>" 
                         alt="SHAMAA – Sthiram Sukham Asanam Mindful Yoga Sanctuary" 
                         class="wellness-media-img"
                         loading="lazy">
                </div>
            </div>

            <div class="col-12 col-lg-6 shamaa-about-content-col">
                <p class="wellness-pretitle">Mindful Movement &amp; Somatic Healing</p>
                <h2 class="wellness-heading mb-2">
                    Movement as Medicine, <br><em>Breath as Harmony</em>
                </h2>
                
                <p class="shamaa-philosophy-subheading mb-4">
                    <em>Sthiram Sukham Asanam &ndash; Steady, Comfortable and Personal.</em>
                </p>
                
                <p class="wellness-text">
                    At <strong>SHAMAA</strong>, yoga begins with individual comfort and ability, not perfect postures. Practice is gently adapted, whether seated, lying down, using a chair or on a yoga mat.
                </p>
                <p class="wellness-text">
                    With mindful breathing, relaxation, mudras and suitable healing practices, each participant progresses at their own pace.
                </p>

                <div class="shamaa-principles-block my-4">
                    <h3 class="shamaa-principles-title">Our Three Principles</h3>

                    <div class="shamaa-principle-item d-flex align-items-start gap-3 mb-3">
                        <span class="shamaa-principle-badge" aria-hidden="true">
                            <i class="bi bi-check2"></i>
                        </span>
                        <div class="shamaa-principle-text">
                            <strong>Begin Where You Are</strong> &ndash; Start with your comfort and ability.
                        </div>
                    </div>

                    <div class="shamaa-principle-item d-flex align-items-start gap-3 mb-3">
                        <span class="shamaa-principle-badge" aria-hidden="true">
                            <i class="bi bi-check2"></i>
                        </span>
                        <div class="shamaa-principle-text">
                            <strong>Progress Without Pressure</strong> &ndash; Explore supported and suitable movements.
                        </div>
                    </div>

                    <div class="shamaa-principle-item d-flex align-items-start gap-3 mb-0">
                        <span class="shamaa-principle-badge" aria-hidden="true">
                            <i class="bi bi-check2"></i>
                        </span>
                        <div class="shamaa-principle-text">
                            <strong>Consistency Over Perfection</strong> &ndash; Value regular practice over perfect postures.
                        </div>
                    </div>
                </div>

                <div class="shamaa-philosophy-action pt-2">
                    <?php
                        $btn_text  = 'Discover the SHAMAA Approach';
                        $btn_url   = '#wellnessOfferings';
                        $btn_class = 'Btn-Shamaa-Approach';
                        $btn_attr  = 'title="Discover the SHAMAA Approach"';
                        include __DIR__ . '/common/button.php';
                    ?>
                </div>

            </div>

        </div>
    </div>
</section>

<?php
if (!function_exists('resolve_shamaa_img')) {
    function resolve_shamaa_img($path) {
        $root = __DIR__;
        if (file_exists($root . '/' . $path)) {
            return $path;
        }
        $dir = dirname($path);
        $base = basename($path);
        $candidates = [
            $dir . '/' . str_replace(' ', '-', $base),
            $dir . '/' . str_replace('-', ' ', $base),
            $dir . '/' . strtolower($base),
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

$shamaa_therapeutic_hero_img = resolve_shamaa_img('assets/product/shamaa/offerings/Guided-Seated-Side-Stretch.jpg');

$shamaa_supporting_services = [
    [
        'id'    => 'breathwork',
        'title' => 'Breathwork',
        'image' => resolve_shamaa_img('assets/product/shamaa/offerings/Serene-Group-Pranayama-Meditation.jpg'),
        'desc'  => 'Mindful breathing practices.',
    ],
    [
        'id'    => 'mudras',
        'title' => 'Mudras',
        'image' => resolve_shamaa_img('assets/product/shamaa/offerings/Gyan-Mudra-in-Green-Serenity.jpg'),
        'desc'  => 'Traditional mindful gestures.',
    ],
    [
        'id'    => 'relaxation',
        'title' => 'Relaxation',
        'image' => resolve_shamaa_img('assets/product/shamaa/offerings/Peaceful-Group-Savasana-in-a-Sunlit-Studio.jpg'),
        'desc'  => 'Meditation and restful practices.',
    ],
];

$shamaa_supporting_practices = [
    [
        'id'    => 'practice-personalized',
        'title' => 'Personalized Yoga Sessions',
        'image' => resolve_shamaa_img('assets/product/shamaa/offerings/Guided-Seated-Side-Stretch.jpg'),
        'desc'  => 'One-to-one sessions shaped around the participant’s needs, comfort, experience and wellness goals.',
    ],
    [
        'id'    => 'practice-group',
        'title' => 'Group Yoga Sessions',
        'image' => resolve_shamaa_img('assets/product/shamaa/offerings/Serene-Group-Yoga-Side-Stretch.jpg'),
        'desc'  => 'Guided group practices that encourage consistency, shared learning and a supportive practice environment.',
    ],
    [
        'id'    => 'practice-breathwork',
        'title' => 'Conscious Breathwork & Pranayama',
        'image' => resolve_shamaa_img('assets/product/shamaa/offerings/Serene-Group-Pranayama-Meditation.jpg'),
        'desc'  => 'Appropriate breathing practices introduced with care and adapted to the participant’s comfort and capacity.',
    ],
    [
        'id'    => 'practice-mudras',
        'title' => 'Mudras',
        'image' => resolve_shamaa_img('assets/product/shamaa/offerings/Gyan-Mudra-in-Green-Serenity.jpg'),
        'desc'  => 'Traditional yogic hand gestures incorporated into suitable sessions to support concentration, awareness and mindful practice.',
    ],
    [
        'id'    => 'practice-meditation',
        'title' => 'Meditation & Guided Relaxation',
        'image' => resolve_shamaa_img('assets/product/shamaa/4-5.jpg'),
        'desc'  => 'Guided practices that encourage stillness, attention and relaxation.',
    ],
    [
        'id'    => 'practice-yoga-nidra',
        'title' => 'Yoga Nidra & Restful Practices',
        'image' => resolve_shamaa_img('assets/product/shamaa/offerings/Peaceful-Group-Savasana-in-a-Sunlit-Studio.jpg'),
        'desc'  => 'Supported relaxation practices, including lying-down options when suitable.',
    ],
    [
        'id'    => 'practice-face-yoga',
        'title' => 'Face Yoga',
        'image' => resolve_shamaa_img('assets/product/shamaa/offerings/Serene-Facial-Yoga-in-a-Green-Studio.jpg'),
        'desc'  => 'Gentle facial movements and mindful techniques that can be included in a personal self-care routine.',
    ],
];

$shamaa_clarity_call_url = "https://wa.me/919966010981?text=" . rawurlencode('Hi Sravanti, I would like to book a Clarity Call for SHAMAA Therapeutic Yoga & Supporting Practices.');
?>
<section class="wellness-offerings-section service-cards-section position-relative overflow-hidden" id="wellnessOfferings" aria-label="Therapeutic Yoga – Begin Where You Are">

    <!-- Decorative Corner Leaves -->
    <div class="shamaa-leaf-decoration shamaa-leaf-top-left" aria-hidden="true">
        <img src="assets/product/shamaa/leaf.png" 
             alt="" 
             class="shamaa-leaf-img" 
             loading="lazy">
    </div>
    <div class="shamaa-leaf-decoration shamaa-leaf-bottom-right" aria-hidden="true">
        <img src="assets/product/shamaa/leaf-2.png" 
             alt="" 
             class="shamaa-leaf-img" 
             loading="lazy">
    </div>

    <div id="therapeuticYoga" class="position-absolute" style="top: -95px;"></div>
    <div class="container position-relative" style="z-index: 2;">
        
        <!-- Row 1: Left Main Content | Right Hero Image -->
        <div class="row align-items-center g-4 g-lg-5 mb-5 pb-lg-3">
            <div class="col-12 col-lg-6">
                <p class="wellness-pretitle">SHAMAA YOGIC OFFERINGS</p>
                <h2 class="wellness-heading mb-2">
                    Therapeutic Yoga
                </h2>
                <p class="shamaa-philosophy-subheading mb-4">
                    <em>Begin Where You Are.</em>
                </p>
                <p class="wellness-text">
                    Therapeutic Yoga at SHAMAA welcomes those who feel hesitant, uncomfortable or unsure about beginning yoga.
                </p>
                <p class="wellness-text">
                    Practice starts with gentle, manageable movements and supported positions on a bed, chair or mat, progressing at an individual pace.
                </p>
                
                <div class="shamaa-focus-callout mt-4">
                    <span class="focus-title">The focus:</span>
                    <span class="focus-desc">Comfort, confidence, mobility and gradual progress.</span>
                </div>
            </div>

            <div class="col-12 col-lg-6">
                <div class="wellness-media-frame shamaa-therapeutic-media-frame">
                    <img src="<?= htmlspecialchars($shamaa_therapeutic_hero_img) ?>" 
                         alt="Therapeutic Yoga – Begin Where You Are at SHAMAA" 
                         class="wellness-media-img"
                         loading="lazy">
                </div>
            </div>
        </div>

        <!-- Row 2: Supporting Services (3 Cards with Image) -->
        <div class="shamaa-supporting-services-wrapper pt-3">
            <div class="shamaa-supporting-header text-center max-w-700 mx-auto mb-4 mb-lg-5">
                <p class="wellness-pretitle mb-1">COMPLEMENTARY PRACTICES</p>
                <h3 class="shamaa-supporting-title">Supporting Services</h3>
            </div>

            <div class="row g-4 justify-content-center">
                <?php foreach ($shamaa_supporting_services as $index => $service): ?>
                    <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch" id="<?= htmlspecialchars($service['id']) ?>">
                        <article class="service-item-card shamaa-offering-card">
                            
                            <div class="service-item-media">
                                <img src="<?= htmlspecialchars($service['image']) ?>" 
                                     alt="<?= htmlspecialchars($service['title']) ?> at SHAMAA" 
                                     loading="lazy">
                            </div>

                            <div class="service-item-body">
                                <span class="service-item-number"><?= sprintf('%02d', $index + 1) ?>.</span>
                                <h4 class="service-item-title"><?= htmlspecialchars($service['title']) ?></h4>
                                <div class="service-item-desc mb-0">
                                    <p class="mb-0"><?= htmlspecialchars($service['desc']) ?></p>
                                </div>
                            </div>

                        </article>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Row 3: Supporting Practices – Smaller Horizontal Cards Carousel -->
        <div class="shamaa-practices-carousel-wrapper mt-5 pt-4 pt-lg-5">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-end mb-4">
                <div>
                    <p class="wellness-pretitle mb-1">SUPPORTING PRACTICES</p>
                    <h3 class="shamaa-supporting-title">Specialized Practices &amp; Techniques</h3>
                </div>
                <!-- Carousel Nav Arrows -->
                <div class="shamaa-practices-nav d-none d-md-flex align-items-center gap-2 mt-3 mt-md-0">
                    <button type="button" class="shamaa-carousel-btn shamaa-practices-prev" aria-label="Previous Practice">
                        <i class="bi bi-arrow-left"></i>
                    </button>
                    <button type="button" class="shamaa-carousel-btn shamaa-practices-next" aria-label="Next Practice">
                        <i class="bi bi-arrow-right"></i>
                    </button>
                </div>
            </div>

            <!-- Swiper Container -->
            <div class="swiper shamaa-practices-swiper" id="shamaaPracticesSwiper">
                <div class="swiper-wrapper">
                    <?php foreach ($shamaa_supporting_practices as $practice): ?>
                        <div class="swiper-slide shamaa-practice-slide">
                            <div class="shamaa-horizontal-card">
                                <div class="shamaa-hcard-media">
                                    <img src="<?= htmlspecialchars($practice['image']) ?>" 
                                         alt="<?= htmlspecialchars($practice['title']) ?>" 
                                         class="shamaa-hcard-img" 
                                         loading="lazy">
                                </div>
                                <div class="shamaa-hcard-body">
                                    <h4 class="shamaa-hcard-title"><?= htmlspecialchars($practice['title']) ?></h4>
                                    <p class="shamaa-hcard-desc"><?= htmlspecialchars($practice['desc']) ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <!-- Pagination Dots -->
                <div class="swiper-pagination shamaa-practices-pagination mt-4"></div>
            </div>

            <!-- Action Button: Book a Clarity Call on WhatsApp -->
            <div class="shamaa-practices-action text-center mt-4 pt-2">
                <a href="<?= htmlspecialchars($shamaa_clarity_call_url) ?>" 
                   target="_blank" 
                   rel="noopener noreferrer" 
                   class="btn-shamaa-clarity-call d-inline-flex align-items-center gap-2"
                   title="Book a Clarity Call on WhatsApp">
                    <i class="bi bi-whatsapp"></i>
                    <span>Book a Clarity Call</span>
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>

    </div>
</section>

<?php
$shamaa_wa_number = (strpos($whatsapp_phone, '91') === 0) ? $whatsapp_phone : ('91' . preg_replace('/\D/', '', $whatsapp_phone));
$whatsapp_url_clarity = 'https://wa.me/' . $shamaa_wa_number . '?text=' . rawurlencode('Hi Sravanti, I would like to book a Clarity Call for SHAMAA Online Wellness Sessions.');

$shamaa_highlights = [
    [
        'icon'  => 'bi bi-camera-video',
        'title' => 'Guided Online Sessions',
        'desc'  => 'Practice from home.',
    ],
    [
        'icon'  => 'bi bi-person-heart',
        'title' => 'Personalized Attention',
        'desc'  => 'Guidance shaped around individual needs and comfort.',
    ],
    [
        'icon'  => 'bi bi-people',
        'title' => 'Individual & Group Practice',
        'desc'  => 'One-to-one and group options.',
    ],
    [
        'icon'  => 'bi bi-clock-history',
        'title' => 'Flexible Timings',
        'desc'  => 'Suitable for different time zones.',
    ],
    [
        'icon'  => 'bi bi-flower1',
        'title' => 'An Integrated Approach',
        'desc'  => 'Yoga, breathwork, meditation, mudras, relaxation and relevant healing practices.',
    ],
];

$shamaa_slider_images = [
    'assets/product/shamaa/Section-4-1.jpg',
    'assets/product/shamaa/Section-4-2.jpg',
    'assets/product/shamaa/4-3.jpg',
    'assets/product/shamaa/Section-4-4.jpg',
    'assets/product/shamaa/4-5.jpg',
    'assets/product/shamaa/4-6.jpg',
    'assets/product/shamaa/4-7-2.jpg',
];
?>
<section class="shamaa-guided-section position-relative" id="guidedExperience" aria-label="A Guided Wellness Experience, Wherever You Are">

    <div id="onlineWellness" class="position-absolute" style="top: -95px;"></div>
    <div class="container">

        <div class="shamaa-guided-row-content">
            <!-- Section Header (Centered) -->
            <div class="shamaa-guided-header text-center max-w-860 mx-auto mb-5">
                <p class="wellness-pretitle mb-2">PERSONAL GUIDANCE, WHEREVER YOU ARE</p>
                <h2 class="shamaa-guided-heading mb-2">
                    A Guided Wellness Experience, <br class="d-none d-md-block"><em>Wherever You Are</em>
                </h2>
                <p class="shamaa-guided-subheading mb-3">
                    Personal Guidance. Meaningful Practice. Holistic Well-being.
                </p>
                <p class="shamaa-guided-desc mx-auto mb-0">
                    SHAMAA offers guided online yoga and wellness sessions, making it possible for participants to practise from the comfort of their own homes. Sessions are shaped around individual needs, comfort and wellness goals. Whether through personalized one-to-one guidance or group practice, participants are supported in exploring movement, breath, relaxation and yogic practices at a pace that feels appropriate to them.
                </p>
            </div>
            <div class="shamaa-highlights-grid">
                <?php foreach ($shamaa_highlights as $index => $hl): ?>
                    <div class="shamaa-highlight-card">
                        <div class="shamaa-highlight-icon-box">
                            <i class="<?= htmlspecialchars($hl['icon']) ?>" aria-hidden="true"></i>
                        </div>
                        <h3 class="shamaa-highlight-title"><?= htmlspecialchars($hl['title']) ?></h3>
                        <p class="shamaa-highlight-desc"><?= htmlspecialchars($hl['desc']) ?></p>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>

    </div>
    <div class="shamaa-slider-row mt-5 pt-2 pt-lg-4">
        <div class="shamaa-infinite-marquee" aria-label="SHAMAA Experience Visual Journey">
            <div class="shamaa-marquee-track">
                
                <!-- Track Group A -->
                <div class="shamaa-marquee-group">
                    <?php foreach ($shamaa_slider_images as $img): ?>
                        <div class="shamaa-slider-card">
                            <img src="<?= htmlspecialchars(resolve_shamaa_img($img)) ?>" 
                                 alt="SHAMAA Guided Experience" 
                                 class="shamaa-slider-img" 
                                 loading="lazy">
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Track Group B (Duplicated for 100% seamless infinite drift) -->
                <div class="shamaa-marquee-group" aria-hidden="true">
                    <?php foreach ($shamaa_slider_images as $img): ?>
                        <div class="shamaa-slider-card">
                            <img src="<?= htmlspecialchars(resolve_shamaa_img($img)) ?>" 
                                 alt="SHAMAA Guided Experience" 
                                 class="shamaa-slider-img" 
                                 loading="lazy">
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </div>
    </div>

    <!-- Bottom Action Button (Centered below Image Scrolling) -->
    <div class="shamaa-guided-bottom-action text-center mt-5 pt-2 pt-lg-3 d-flex flex-column align-items-center justify-content-center">
        <?php
            $btn_text  = 'Book a Clarity Call';
            $btn_url   = $whatsapp_url_clarity;
            $btn_class = 'Btn-Shamaa-Approach Btn-Shamaa-Clarity';
            $btn_icon  = 'bi bi-whatsapp';
            $btn_attr  = 'target="_blank" rel="noopener noreferrer" title="Book a Clarity Call on WhatsApp"';
            include __DIR__ . '/common/button.php';
        ?>
        <span class="shamaa-clarity-caption mt-2 text-muted">
            <i class="bi bi-shield-check text-success me-1"></i> Personalized &amp; Confidential
        </span>
    </div>
</section>

<!-- ==========================================================================
     5. Enduring Transformation (4 Pillars, Full Width 50px Padding, No Container)
     ========================================================================== -->
<?php
if (!function_exists('resolve_pillar_vector')) {
    function resolve_pillar_vector($slug, $num) {
        $root = __DIR__;
        $candidates = [
            'assets/product/shamaa/pillar-cards/' . $slug . '.png',
            'assets/product/shamaa/pillar-cards/' . $num . '.png',
            'assets/images/shamaa/' . $slug . '.png',
            'assets/images/shamaa/pillar-' . $num . '.png',
            'assets/product/shamaa/' . $slug . '.png',
            'assets/product/shamaa/pillar-' . $num . '.png',
            'assets/product/shamaa/pillars/pillar-' . $num . '.png',
            'assets/images/' . $slug . '.png',
            'assets/images/pillar-' . $num . '.png',
        ];
        foreach ($candidates as $cand) {
            if (file_exists($root . '/' . $cand)) {
                return $cand;
            }
        }
        return null;
    }
}

$shamaa_pillars = [
    [
        'num'   => '01',
        'slug'  => 'physical-awareness',
        'title' => 'Physical Awareness',
        'desc'  => 'Explore movement, mobility and strength within an appropriate range.',
        'image' => 'assets/product/shamaa/pillar-cards/physical-awareness.png',
        'icon'  => 'bi bi-person-arms-up',
    ],
    [
        'num'   => '02',
        'slug'  => 'breath-awareness',
        'title' => 'Breath Awareness',
        'desc'  => 'Develop a mindful relationship with breathing through suitable guided practices.',
        'image' => 'assets/product/shamaa/pillar-cards/breath-awareness.png',
        'icon'  => 'bi bi-wind',
    ],
    [
        'num'   => '03',
        'slug'  => 'emotional-mental-wellbeing',
        'title' => 'Emotional & Mental Well-being',
        'desc'  => 'Make space for relaxation and self-awareness.',
        'image' => 'assets/product/shamaa/pillar-cards/emotional-mental-well-being.png',
        'icon'  => 'bi bi-heart-pulse',
    ],
    [
        'num'   => '04',
        'slug'  => 'confidence-consistency',
        'title' => 'Confidence Through Consistency',
        'desc'  => 'Build confidence through achievable steps, without comparison or pressure.',
        'image' => 'assets/product/shamaa/pillar-cards/confidence-through-consitency.png',
        'icon'  => 'bi bi-stars',
    ],
];
?>
<style>
/* Instant override: Zero hovering top borders across all cards */
.shamaa-highlight-card::before,
.shamaa-highlight-card::after,
.shamaa-transformation-card::before,
.shamaa-transformation-card::after,
.shamaa-offering-card::before,
.shamaa-offering-card::after,
.wellness-card::before,
.wellness-card::after {
    display: none !important;
    content: none !important;
    opacity: 0 !important;
    height: 0 !important;
    border: none !important;
    background: none !important;
}
</style>

<section class="shamaa-transformation-section position-relative" id="enduringTransformation" aria-label="Enduring Transformation – Four Pillars">
    <!-- Anchor for direct deep linking -->
    <div id="transformationPillars" class="position-absolute" style="top: -95px;"></div>

    <!-- Section Header (Centered) -->
    <div class="shamaa-transformation-header text-center max-w-850 mx-auto mb-5">
        <p class="wellness-pretitle mb-2">FOUR PILLARS OF PRACTICE</p>
        <h2 class="shamaa-transformation-heading mb-2">
            Enduring <em>Transformation</em>
        </h2>
        <p class="shamaa-transformation-subheading mb-3">
            Building Confidence, Comfort and Consistency&mdash;One Practice at a Time.
        </p>
        <p class="shamaa-transformation-desc mx-auto mb-0">
            With guided, consistent practice, SHAMAA helps build confidence, awareness and a deeper connection with body, breath and mind.
        </p>
    </div>

    <!-- 4 Cards Grid (Full width across 50px section padding, no container) -->
    <div class="shamaa-transformation-grid">
        <?php foreach ($shamaa_pillars as $pillar): ?>
            <?php 
                $vector_img = (!empty($pillar['image']) && file_exists(__DIR__ . '/' . $pillar['image'])) 
                    ? $pillar['image'] 
                    : resolve_pillar_vector($pillar['slug'] ?? '', $pillar['num'] ?? ''); 
            ?>
            <article class="shamaa-transformation-card">
                <div class="shamaa-pillar-vector-wrap">
                    <?php if (!empty($vector_img)): ?>
                        <img src="<?= htmlspecialchars($vector_img) ?>" 
                             alt="<?= htmlspecialchars($pillar['title']) ?> Vector" 
                             class="shamaa-pillar-vector-img" 
                             loading="lazy">
                    <?php else: ?>
                        <div class="shamaa-pillar-vector-placeholder">
                            <i class="<?= htmlspecialchars($pillar['icon']) ?>" aria-hidden="true"></i>
                        </div>
                    <?php endif; ?>
                </div>

                <h3 class="shamaa-transformation-card-title"><?= htmlspecialchars($pillar['title']) ?></h3>
                <p class="shamaa-transformation-card-desc"><?= htmlspecialchars($pillar['desc']) ?></p>
            </article>
        <?php endforeach; ?>
    </div>

    <!-- Bottom Action Button (Centered below the cards) -->
    <div class="shamaa-transformation-action text-center mt-5 pt-3 pt-lg-4">
        <?php
            $btn_text  = 'Explore the Practices';
            $btn_url   = '#wellnessOfferings';
            $btn_class = 'Btn-Shamaa-Approach Btn-Shamaa-Explore';
            $btn_attr  = 'title="Explore the Practices"';
            include __DIR__ . '/common/button.php';
        ?>
    </div>

</section>

<!-- ==========================================================================
     6. Frequently Asked Questions (Section 6 - Accordion)
     ========================================================================== -->
<?php include __DIR__ . '/products/shamaafaq.php'; ?>

<!-- ==========================================================================
     7. Dedicated CTA Section ("Yoga Is for Everyone. Begin Where You Are.")
     ========================================================================== -->
<?php include __DIR__ . '/products/shamaacta.php'; ?>

</main>

<?php 
// Common Global Modals & Footer
include __DIR__ . '/common/popupbookingform.php';
include __DIR__ . '/common/serviceform.php';
include __DIR__ . '/common/footer.php'; 
?>

<!-- Initialize SHAMAA Supporting Practices Swiper Carousel -->
<script>
window.addEventListener('load', function () {
    if (typeof Swiper !== 'undefined' && document.getElementById('shamaaPracticesSwiper')) {
        new Swiper('#shamaaPracticesSwiper', {
            slidesPerView: 1,
            spaceBetween: 16,
            loop: true,
            grabCursor: true,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },
            pagination: {
                el: '.shamaa-practices-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.shamaa-practices-next',
                prevEl: '.shamaa-practices-prev',
            },
            breakpoints: {
                640: {
                    slidesPerView: 1.4,
                    spaceBetween: 18,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 2.3,
                    spaceBetween: 22,
                },
                1200: {
                    slidesPerView: 3,
                    spaceBetween: 24,
                }
            }
        });
    }
});
</script>
