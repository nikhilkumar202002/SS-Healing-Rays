<?php
/**
 * ==============================================================================
 * SHAMAA - The Yoga & Mindful Movement Sanctuary
 * Dedicated Brand & Wellness Page - SS Healing Rays
 * ==============================================================================
 */

// Page-level configuration variables
$page_title       = 'SHAMAA | Where Yogic Wisdom Meets the Art of Healing | SS Healing Rays';
$page_description = 'Therapeutic Yoga and integrated wellness practices, thoughtfully adapted to the individual at SHAMAA.';
$current_page     = 'shamaa';

$pro_phone_code = '+91';
$pro_phone      = '9966010981';
$whatsapp_phone = '9966010981';
$pro_email      = 'contact@sshealingrays.com';

// Default social values
$social_fb       = 'sshealingrays';
$social_insta    = 'sravantiheals';
$social_x        = 'sshealingrays';
$social_wa       = '9966010981';
$social_linkedin = 'sshealingrays';
$social_youtube  = 'sshealingrays';
$social_threads  = 'sshealingrays';

// WhatsApp URLs
$whatsapp_url_coaching = 'https://wa.me/' . $whatsapp_phone . '?text=' . rawurlencode('Hi, I would like to enquire about SHAMAA Wellness.');
$whatsapp_url_wellness = 'https://wa.me/' . $whatsapp_phone . '?text=' . rawurlencode('Hi, I would like to book a Clarity Call for SHAMAA Therapeutic Yoga.');
$whatsapp_url_programs = 'https://wa.me/' . $whatsapp_phone . '?text=' . rawurlencode('Hi, I would like to explore SHAMAA programmes.');

$cta_text         = 'Book Clarity Call';
$cta_url          = $whatsapp_url_wellness;

// Set current user (practitioner) for reuse across included files
$current_user = 'shamaa';

// 1. Common Global Header
include __DIR__ . '/common/header.php';

// 2. SHAMAA Dedicated Hero Banner (Same layout & typography as Âme Crystals)
include __DIR__ . '/products/shamaabanner.php';

// Live-server image resolution for CTA banner
$wellness_cta_bg = file_exists(__DIR__ . '/assets/banner/cta-banner.jpg') 
    ? 'assets/banner/cta-banner.jpg' 
    : (file_exists(__DIR__ . '/assets/banner/cta-banner.jpeg') 
        ? 'assets/banner/cta-banner.jpeg' 
        : 'assets/banner/banner-1.jpg');
?>

<!-- ==========================================================================
     2. Philosophy & Introduction (Left Image Sticky | Right Content)
     ========================================================================== -->
<section class="wellness-about-section position-relative" id="wellnessAbout" aria-label="About SHAMAA Philosophy">
    <div class="container">
        <div class="row align-items-start g-4 g-lg-5 position-relative">
            
            <!-- Left Image Column (Sticky Static on Desktop while Right Content Scrolls) -->
            <div class="col-12 col-lg-6 shamaa-sticky-media-col">
                <div class="wellness-media-frame shamaa-sticky-frame">
                    <img src="assets/images/about/center-yoga-sanctuary.jpg" 
                         alt="SHAMAA – Sthiram Sukham Asanam Yoga Sanctuary" 
                         class="wellness-media-img"
                         loading="lazy">
                </div>
            </div>

            <!-- Right Content Column -->
            <div class="col-12 col-lg-6">
                <p class="wellness-pretitle">Mindful Movement &amp; Somatic Healing</p>
                <h2 class="wellness-heading mb-2">
                    Movement as Medicine, <br><em>Breath as Harmony</em>
                </h2>
                
                <p class="shamaa-philosophy-subheading mb-4">
                    <strong>Sthiram Sukham Asanam</strong> &ndash; Steady, Comfortable and Personal.
                </p>
                
                <p class="wellness-text">
                    At <strong>SHAMAA</strong>, yoga begins with the individual&mdash;not with a prescribed posture. The principle of <em>Sthiram Sukham Asanam</em> guides every practice: a posture is meaningful when it is steady and comfortable for the person practising it. There is no requirement to touch the toes, sit on the floor, lift the arms overhead or perform an asana perfectly.
                </p>
                <p class="wellness-text">
                    For someone who feels unsure about movement, practice may begin while seated or lying on a cot or bed. As confidence, comfort and ability develop, the practice may progress to a chair and, when suitable, to the yoga mat. Breathing practices, relaxation, mudras and appropriate healing techniques may be integrated according to individual needs.
                </p>

                <!-- Three Core Principles -->
                <div class="shamaa-principles-block my-4">
                    <div class="shamaa-principle-item d-flex align-items-start gap-3 mb-3">
                        <span class="shamaa-principle-badge" aria-hidden="true">
                            <i class="bi bi-check2"></i>
                        </span>
                        <div class="shamaa-principle-text">
                            <strong>Begin Where You Are</strong> &ndash; practice starts from present comfort and ability.
                        </div>
                    </div>

                    <div class="shamaa-principle-item d-flex align-items-start gap-3 mb-3">
                        <span class="shamaa-principle-badge" aria-hidden="true">
                            <i class="bi bi-check2"></i>
                        </span>
                        <div class="shamaa-principle-text">
                            <strong>Progress Without Pressure</strong> &ndash; supported cot/bed, chair and mat options are considered as appropriate.
                        </div>
                    </div>

                    <div class="shamaa-principle-item d-flex align-items-start gap-3 mb-3">
                        <span class="shamaa-principle-badge" aria-hidden="true">
                            <i class="bi bi-check2"></i>
                        </span>
                        <div class="shamaa-principle-text">
                            <strong>Consistency Over Perfection</strong> &ndash; regular, comfortable practice matters more than an ideal-looking posture.
                        </div>
                    </div>
                </div>

                <!-- CTA Button to Scroll to Section 3 -->
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

<!-- ==========================================================================
     3. Therapeutic Yoga – Begin Where You Are (7-Card Grid)
     ========================================================================== -->
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

$shamaa_offerings = [
    [
        'id'    => 'personalized-yoga',
        'title' => 'Personalized Yoga Sessions',
        'image' => resolve_shamaa_img('assets/images/services/Therapeutic Yoga.jpg'),
        'desc'  => 'One-to-one sessions shaped around the participant’s needs, comfort, experience and wellness goals.',
    ],
    [
        'id'    => 'group-yoga',
        'title' => 'Group Yoga Sessions',
        'image' => resolve_shamaa_img('assets/images/selected-gallery/Yoga session to students at college.jpg'),
        'desc'  => 'Guided group practices that encourage consistency, shared learning and a supportive practice environment.',
    ],
    [
        'id'    => 'conscious-breathwork-pranayama',
        'title' => 'Conscious Breathwork & Pranayama',
        'image' => resolve_shamaa_img('assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.17 PM.jpeg'),
        'desc'  => 'Appropriate breathing practices introduced with care and adapted to the participant’s comfort and capacity.',
    ],
    [
        'id'    => 'mudras',
        'title' => 'Mudras',
        'image' => resolve_shamaa_img('assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.20 PM.jpeg'),
        'desc'  => 'Traditional yogic hand gestures incorporated into suitable sessions to support concentration, awareness and mindful practice.',
    ],
    [
        'id'    => 'meditation-guided-relaxation',
        'title' => 'Meditation & Guided Relaxation',
        'image' => resolve_shamaa_img('assets/images/services/Guided Meditation.jpg'),
        'desc'  => 'Guided practices that encourage stillness, attention and relaxation.',
    ],
    [
        'id'    => 'yoga-nidra-restful-practices',
        'title' => 'Yoga Nidra & Restful Practices',
        'image' => resolve_shamaa_img('assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.13 PM.jpeg'),
        'desc'  => 'Supported relaxation practices, including lying-down options when suitable.',
    ],
    [
        'id'    => 'face-yoga',
        'title' => 'Face Yoga',
        'image' => resolve_shamaa_img('assets/images/services/Personal Transformation.jpg'),
        'desc'  => 'Gentle facial movements and mindful techniques that can be included in a personal self-care routine.',
    ],
];
?>
<section class="wellness-offerings-section service-cards-section position-relative" id="wellnessOfferings" aria-label="Therapeutic Yoga – Begin Where You Are">
    <!-- Anchor for hero and page links targeting #therapeuticYoga -->
    <div id="therapeuticYoga" class="position-absolute" style="top: -95px;"></div>

    <div class="container">
        
        <!-- Section Header -->
        <div class="service-cards-header text-center max-w-700 mx-auto mb-5">
            <p class="service-cards-pretitle">SHAMAA YOGIC OFFERINGS</p>
            <h2 class="service-cards-title">
                Therapeutic Yoga &ndash; <em>Begin Where You Are</em>
            </h2>
            <p class="service-cards-subtitle text-muted mx-auto">
                Thoughtfully adapted sessions designed for every body and experience level&mdash;rooted in comfort, steady practice, and compassionate guidance.
            </p>
        </div>

        <!-- 7-Card Grid (3 Columns on Desktop, 2 on Tablet, 1 on Mobile) -->
        <div class="row service-cards-row justify-content-center">
            <?php foreach ($shamaa_offerings as $index => $offering): ?>
                <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch mb-4" id="<?= htmlspecialchars($offering['id']) ?>">
                    <article class="service-item-card shamaa-offering-card">
                        
                        <!-- Top Image -->
                        <div class="service-item-media">
                            <img src="<?= htmlspecialchars($offering['image']) ?>" 
                                 alt="<?= htmlspecialchars($offering['title']) ?> at SHAMAA" 
                                 loading="lazy">
                        </div>

                        <!-- Card Body (Heading + Description) -->
                        <div class="service-item-body">
                            <span class="service-item-number"><?= sprintf('%02d', $index + 1) ?>.</span>
                            <h3 class="service-item-title"><?= htmlspecialchars($offering['title']) ?></h3>
                            <div class="service-item-desc mb-0">
                                <p class="mb-0"><?= htmlspecialchars($offering['desc']) ?></p>
                            </div>
                        </div>

                    </article>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<!-- ==========================================================================
     4. Guided Wellness Experience (Left Side Content | Right Side Image)
     ========================================================================== -->
<section class="wellness-space-section position-relative" id="wellnessSpace" aria-label="A Guided Wellness Experience, Wherever You Are">
    <div id="wellnessOnline" class="position-absolute" style="top: -95px;"></div>
    <div class="container">
        <div class="row align-items-start g-4 g-lg-5 position-relative">
            
            <!-- Left Content Column (Scrolls smoothly on Desktop) -->
            <div class="col-12 col-lg-6">
                <p class="wellness-pretitle">PERSONAL GUIDANCE, WHEREVER YOU ARE</p>
                <h2 class="wellness-heading mb-2">
                    A Guided Wellness Experience, <br><em>Wherever You Are</em>
                </h2>
                
                <p class="shamaa-philosophy-subheading mb-3">
                    <strong>Personal Guidance.</strong> Meaningful Practice. Holistic Well-being.
                </p>
                
                <p class="wellness-text mb-4">
                    SHAMAA offers guided online yoga and wellness sessions, making it possible for participants to practise from the comfort of their own homes. Sessions are shaped around individual needs, comfort and wellness goals. Whether through personalized one-to-one guidance or group practice, participants are supported in exploring movement, breath, relaxation and yogic practices at a pace that feels appropriate to them.
                </p>

                <!-- Highlights Checklist -->
                <ul class="wellness-checklist mb-4">
                    <li>
                        <i class="bi bi-check-circle-fill" aria-hidden="true"></i>
                        <span><strong>Guided Online Sessions</strong> &ndash; practice from home.</span>
                    </li>
                    <li>
                        <i class="bi bi-check-circle-fill" aria-hidden="true"></i>
                        <span><strong>Personalized Attention</strong> &ndash; guidance shaped around individual needs and comfort.</span>
                    </li>
                    <li>
                        <i class="bi bi-check-circle-fill" aria-hidden="true"></i>
                        <span><strong>Individual &amp; Group Practice</strong> &ndash; one-to-one and group options.</span>
                    </li>
                    <li>
                        <i class="bi bi-check-circle-fill" aria-hidden="true"></i>
                        <span><strong>Flexible Timings</strong> &ndash; Suitable for different time zones.</span>
                    </li>
                    <li>
                        <i class="bi bi-check-circle-fill" aria-hidden="true"></i>
                        <span><strong>An Integrated Approach</strong> &ndash; yoga, breathwork, meditation, mudras, relaxation and relevant healing practices.</span>
                    </li>
                </ul>

                <!-- Button: Book a Clarity Call (WhatsApp click-to-chat) -->
                <div class="pt-2">
                    <?php
                        $btn_text  = 'Book a Clarity Call';
                        $wa_msg    = rawurlencode('Hi Sravanti, I would like to book a Clarity Call for SHAMAA Online Yoga & Wellness.');
                        $btn_url   = "https://wa.me/919966010981?text={$wa_msg}";
                        $btn_class = 'Btn-Shamaa-Approach';
                        $btn_attr  = 'target="_blank" rel="noopener noreferrer" title="Book a Clarity Call on WhatsApp" aria-label="Book a Clarity Call on WhatsApp"';
                        include __DIR__ . '/common/button.php';
                    ?>
                </div>
            </div>

            <!-- Right Image Column (Sticky Static on Desktop while Left Content Scrolls) -->
            <div class="col-12 col-lg-6 shamaa-sticky-media-col">
                <div class="wellness-media-frame shamaa-sticky-frame">
                    <img src="<?= htmlspecialchars(resolve_shamaa_img('assets/images/selected-gallery/Online yoga session international yoga day.PNG')) ?>" 
                         alt="A Guided Wellness Experience, Wherever You Are – SHAMAA Online Sessions" 
                         class="wellness-media-img"
                         style="aspect-ratio: 4/3; object-fit: cover;"
                         loading="lazy">
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ==========================================================================
     5. Transformative Benefits (4 Pillars on Deep Navy)
     ========================================================================== -->
<section class="wellness-pillars-section position-relative" id="wellnessPillars" aria-label="Enduring Benefits of SHAMAA">
    <div class="container position-relative" style="z-index: 2;">
        
        <div class="text-center max-w-700 mx-auto mb-5">
            <p class="wellness-pretitle" style="color: #ffdfba;">Enduring Transformation</p>
            <h2 class="wellness-heading text-white">
                What You Will Experience on <em>Your Journey</em>
            </h2>
            <p class="wellness-text text-white-50 mx-auto" style="max-width: 660px;">
                Through consistent practice, your body and mind will establish new patterns of ease, resilience, and vitality.
            </p>
        </div>

        <div class="row g-4 justify-content-center">
            
            <div class="col-12 col-sm-6 col-lg-3 d-flex">
                <div class="wellness-pillar-card w-100">
                    <div class="wellness-pillar-num">Pillar 01</div>
                    <h3 class="wellness-pillar-title">Physical Ease</h3>
                    <p class="wellness-pillar-desc">
                        Release chronic somatic holding patterns, lubricate stiff joints, and experience newfound fluidity and lightness in everyday movement.
                    </p>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3 d-flex">
                <div class="wellness-pillar-card w-100">
                    <div class="wellness-pillar-num">Pillar 02</div>
                    <h3 class="wellness-pillar-title">Nervous Calm</h3>
                    <p class="wellness-pillar-desc">
                        Shift from chronic fight-or-flight stimulation into the restorative parasympathetic state for restful sleep and reduced cortisol levels.
                    </p>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3 d-flex">
                <div class="wellness-pillar-card w-100">
                    <div class="wellness-pillar-num">Pillar 03</div>
                    <h3 class="wellness-pillar-title">Emotional Balance</h3>
                    <p class="wellness-pillar-desc">
                        Cultivate an anchor of inner peace that remains centered and unwavering through personal transitions and daily pressures.
                    </p>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3 d-flex">
                <div class="wellness-pillar-card w-100">
                    <div class="wellness-pillar-num">Pillar 04</div>
                    <h3 class="wellness-pillar-title">Sacred Wholeness</h3>
                    <p class="wellness-pillar-desc">
                        Experience the harmonious union of physical vitality, conscious breath, and spiritual alignment across all areas of your life.
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- ==========================================================================
     6. Frequently Asked Questions (Accordion)
     ========================================================================== -->
<section class="wellness-faq-section position-relative" id="wellnessFaq" aria-label="SHAMAA FAQ">
    <div class="container">
        
        <div class="text-center max-w-700 mx-auto mb-5">
            <p class="wellness-pretitle">Common Enquiries</p>
            <h2 class="wellness-heading">
                Frequently Asked <em>Questions</em>
            </h2>
            <p class="wellness-text text-muted mx-auto" style="max-width: 600px;">
                Everything you need to know about joining our mindful movement and yoga sessions.
            </p>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-lg-9 col-xl-8">
                
                <div class="accordion wellness-accordion" id="wellnessFaqAccordion">
                    
                    <!-- FAQ 1 -->
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                I have never practiced yoga before. Can I still join?
                            </button>
                        </h3>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#wellnessFaqAccordion">
                            <div class="accordion-body">
                                Absolutely. SHAMAA welcomes individuals of every fitness level, body type, and age. Our certified instructors provide personalized modifications so you can move comfortably without strain, pressure, or judgment.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                What do I need to bring for my demo session?
                            </button>
                        </h3>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#wellnessFaqAccordion">
                            <div class="accordion-body">
                                Just wear comfortable, breathable clothing that allows free movement. Premium sanitized yoga mats, props, bolsters, and filtered drinking water are all provided at our studio. If joining online, ensure you have a quiet space and a stable internet connection.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                How does Therapeutic Yoga differ from fitness gym yoga?
                            </button>
                        </h3>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#wellnessFaqAccordion">
                            <div class="accordion-body">
                                Fitness yoga often focuses on fast pacing, calorie burn, and extreme flexibility. In contrast, Therapeutic Yoga at SHAMAA prioritizes functional alignment, breath integration, nervous system regulation, and somatic healing tailored to alleviate chronic tension and fatigue.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Can I combine yoga with energy healing sessions at SS Healing Rays?
                            </button>
                        </h3>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#wellnessFaqAccordion">
                            <div class="accordion-body">
                                Yes, highly recommended! Many of our clients find that pairing mindful movement with Reiki, Crystal Therapy, or Sound Resonance creates profound synergy—grounding energy shifts into the physical body and accelerating lasting wellbeing.
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 5 -->
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                How do I schedule my demo session or private class?
                            </button>
                        </h3>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#wellnessFaqAccordion">
                            <div class="accordion-body">
                                Simply click any of the "Book a Demo Session" buttons on this page or reach out directly via WhatsApp at +91 99660 10981. Our team will understand your personal wellness goals and suggest the ideal batch timing for you.
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>
</section>

<!-- ==========================================================================
     7. SHAMAA Bottom CTA Banner
     ========================================================================== -->
<section class="wellness-cta-section position-relative text-center" id="wellnessCta" aria-label="Book Demo Session Banner">
    <img src="<?= htmlspecialchars($wellness_cta_bg) ?>" 
         alt="SHAMAA Mindful Movement Sanctuary" 
         class="wellness-cta-bg" 
         loading="lazy">

    <div class="wellness-cta-overlay" aria-hidden="true"></div>

    <div class="container position-relative wellness-cta-content">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10 col-xl-8">
                
                <p class="wellness-pretitle" style="color: #ffdfba;">Begin Your Renewal</p>
                <h2 class="wellness-heading text-white mb-3">
                    Step Onto the Mat. <br><em>Rediscover Your Inner Radiance.</em>
                </h2>
                <p class="wellness-text text-white-50 mx-auto mb-4" style="max-width: 620px;">
                    Whether you are taking your very first step into mindful movement or seeking a nurturing sanctuary for deeper healing, we are here to support your journey.
                </p>

                <div class="d-flex flex-wrap justify-content-center align-items-center gap-3">
                    <button type="button" 
                            class="btn-wellness-demo"
                            data-bs-toggle="modal" 
                            data-bs-target="#bookingModal"
                            aria-label="Book Your Demo Session">
                        <i class="bi bi-calendar2-check" aria-hidden="true"></i>
                        <span>Book Your Demo Session</span>
                    </button>
                    <a href="https://wa.me/919966010981" 
                       target="_blank" 
                       rel="noopener noreferrer" 
                       class="btn-wellness-outline"
                       aria-label="Chat on WhatsApp">
                        <i class="bi bi-whatsapp text-success" aria-hidden="true"></i>
                        <span>Chat With Us</span>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>

<?php 
// Common Global Modals & Footer
include __DIR__ . '/common/popupbookingform.php';
include __DIR__ . '/common/serviceform.php';
include __DIR__ . '/common/footer.php'; 
?>
