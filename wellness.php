<?php
/**
 * ==============================================================================
 * Shamaa Wellness - The Yoga & Mindful Movement Center
 * Dedicated Offerings & Sanctuary Page - SS Healing Rays
 * ==============================================================================
 */

// Page-level configuration variables
$page_title       = 'Shamaa Wellness | Yoga & Mindful Movement Center | SS Healing Rays';
$page_description = 'Nurturing balance, emotional wellbeing, and physical vitality through therapeutic yoga, conscious breathwork, and mindful somatic movement at Shamaa Wellness.';
$current_page     = 'wellness';
$cta_text         = 'Book Demo Session';
$cta_url          = '#bookingModal';

// 1. Common Global Header
include __DIR__ . '/common/header.php';

// Robust live-server image resolution
$wellness_hero_bg = file_exists(__DIR__ . '/assets/product/wellness.jpg')
    ? 'assets/product/wellness.jpg'
    : (file_exists(__DIR__ . '/assets/product/wellness.jpeg')
        ? 'assets/product/wellness.jpeg'
        : 'assets/banner/banner-1.jpg');

$wellness_cta_bg = file_exists(__DIR__ . '/assets/banner/cta-banner.jpg') 
    ? 'assets/banner/cta-banner.jpg' 
    : (file_exists(__DIR__ . '/assets/banner/cta-banner.jpeg') 
        ? 'assets/banner/cta-banner.jpeg' 
        : 'assets/banner/banner-1.jpg');
?>

<!-- ==========================================================================
     1. Shamaa Wellness Hero Banner
     ========================================================================== -->
<section class="wellness-hero-section position-relative" id="wellnessHeroBanner" aria-label="Shamaa Wellness Hero Banner">
    <img src="<?= htmlspecialchars($wellness_hero_bg) ?>" 
         alt="Shamaa Wellness - The Yoga &amp; Mindful Movement Sanctuary" 
         class="wellness-hero-bg"
         loading="eager">

    <div class="wellness-hero-overlay" aria-hidden="true"></div>

    <div class="container position-relative wellness-hero-content">
        <div class="row justify-content-center text-center">
            <div class="col-12 col-lg-11 col-xl-10">
                
                <!-- Breadcrumb Navigation -->
                <nav class="product-breadcrumb mb-3" aria-label="Breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Shamaa Wellness</li>
                    </ol>
                </nav>

                <!-- Center Logo Emblem Badge -->
                <div class="mb-3 d-inline-block">
                    <span class="wellness-hero-badge">
                        <i class="bi bi-flower1" aria-hidden="true"></i>
                        <span>The Yoga &amp; Mindful Movement Center</span>
                    </span>
                </div>

                <!-- Hero Title: Strict 2 Lines Layout -->
                <h1 class="wellness-hero-title mb-3">
                    <span class="banner-title-line">Nurturing Balance &amp; Physical Vitality</span>
                    <span class="banner-title-line">Through <em>Mindful Movement</em> &amp; Sacred Breath</span>
                </h1>

                <!-- Story Subtitle Description -->
                <p class="wellness-hero-subtitle mx-auto mb-4">
                    At <strong>Shamaa Wellness</strong>, we invite you to pause, breathe deeply, and reconnect with your inner calm. We believe true healing begins when body and mind move as one. Through therapeutic yoga, conscious breathwork, and somatic restorative flows, we create a safe sanctuary for you to release tension, restore vitality, and awaken enduring wellbeing.
                </p>

                <!-- Dual CTAs -->
                <div class="wellness-hero-actions pt-2">
                    <button type="button" 
                            class="btn-wellness-demo"
                            data-bs-toggle="modal" 
                            data-bs-target="#bookingModal"
                            aria-label="Book a Demo Session">
                        <i class="bi bi-calendar2-check" aria-hidden="true"></i>
                        <span>Book a Demo Session</span>
                    </button>

                    <a href="#wellnessOfferings" class="btn-wellness-outline" aria-label="Explore Our Practices">
                        <span>Explore Practices</span>
                        <i class="bi bi-arrow-down" aria-hidden="true"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- ==========================================================================
     2. Philosophy & Introduction (Left Content | Right Image)
     ========================================================================== -->
<section class="wellness-about-section position-relative" id="wellnessAbout" aria-label="About Shamaa Wellness Philosophy">
    <div class="container">
        <div class="row align-items-center g-4 g-lg-5">
            
            <!-- Left Content Column -->
            <div class="col-12 col-lg-6">
                <p class="wellness-pretitle">Mindful Movement &amp; Somatic Healing</p>
                <h2 class="wellness-heading">
                    Movement as Medicine, <br><em>Breath as Harmony</em>
                </h2>
                
                <p class="wellness-text">
                    <strong>Shamaa Wellness</strong> is our dedicated sanctuary for conscious movement, therapeutic yoga, and mindful living. Founded under SS Healing Rays, our classes are designed not for performance or competition, but for deep, embodied restoration.
                </p>
                <p class="wellness-text">
                    Whether you are navigating chronic physical stiffness, occupational stress, or seeking to cultivate mental clarity, our certified facilitators guide each session with individualized attention and gentle reverence for your unique journey.
                </p>

                <!-- Feature Chips Row -->
                <div class="wellness-feature-badge-row">
                    <span class="wellness-chip">
                        <i class="bi bi-shield-check"></i> Gentle &amp; Non-Judgmental
                    </span>
                    <span class="wellness-chip">
                        <i class="bi bi-wind"></i> Somatic Breath Integration
                    </span>
                    <span class="wellness-chip">
                        <i class="bi bi-heart-pulse"></i> Postural Restoration
                    </span>
                </div>
            </div>

            <!-- Right Image Frame with Floating Pill -->
            <div class="col-12 col-lg-6">
                <div class="wellness-media-frame">
                    <img src="assets/images/about/center-yoga-sanctuary.jpg" 
                         alt="Shamaa Yoga Sanctuary at SS Healing Rays" 
                         class="wellness-media-img"
                         loading="lazy">
                    
                    <div class="wellness-floating-pill">
                        <span class="pill-icon" aria-hidden="true">
                            <i class="bi bi-stars"></i>
                        </span>
                        <div class="pill-text">
                            <strong>Sanctuary for Growth</strong>
                            <small>Safe, Peaceful &amp; Energized Environment</small>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ==========================================================================
     3. Pathways to Wellness (Core Offerings 6-Card Grid)
     ========================================================================== -->
<section class="wellness-offerings-section position-relative" id="wellnessOfferings" aria-label="Our Core Wellness Offerings">
    <div class="container">
        
        <!-- Section Header -->
        <div class="text-center max-w-700 mx-auto mb-5">
            <p class="wellness-pretitle">Our Sacred Offerings</p>
            <h2 class="wellness-heading">
                Holistic Practices Tailored to <em>Your Rhythm</em>
            </h2>
            <p class="wellness-text text-muted mx-auto" style="max-width: 680px;">
                Choose from restorative group flows, private therapeutic alignments, or specialized corporate wellness programs crafted to awaken conscious vitality.
            </p>
        </div>

        <!-- 6 Cards Grid -->
        <div class="row g-4 justify-content-center">
            
            <!-- Card 1: Therapeutic Yoga -->
            <div class="col-12 col-md-6 col-lg-4 d-flex">
                <div class="wellness-card w-100">
                    <div>
                        <div class="wellness-card-icon" aria-hidden="true">
                            <i class="bi bi-person-arms-up"></i>
                        </div>
                        <h3 class="wellness-card-title">Therapeutic Yoga</h3>
                        <p class="wellness-card-desc">
                            Conscious asana sequences customized to alleviate chronic back stiffness, release muscular tension, and re-establish natural spinal alignment.
                        </p>
                    </div>
                    <div class="pt-3 mt-3 border-top border-light-subtle d-flex justify-content-between align-items-center">
                        <span class="small text-muted fw-semibold">Personalized / Group</span>
                        <a href="#bookingModal" data-bs-toggle="modal" class="text-decoration-none small fw-bold" style="color: var(--secondary-color, #ba436c);">
                            Enquire <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 2: Conscious Pranayama -->
            <div class="col-12 col-md-6 col-lg-4 d-flex">
                <div class="wellness-card w-100">
                    <div>
                        <div class="wellness-card-icon" aria-hidden="true">
                            <i class="bi bi-wind"></i>
                        </div>
                        <h3 class="wellness-card-title">Conscious Pranayama</h3>
                        <p class="wellness-card-desc">
                            Sacred yogic breathwork techniques that regulate heart-rate variability, soothe an overactive nervous system, and awaken radiant life-force energy.
                        </p>
                    </div>
                    <div class="pt-3 mt-3 border-top border-light-subtle d-flex justify-content-between align-items-center">
                        <span class="small text-muted fw-semibold">Breath Mastery</span>
                        <a href="#bookingModal" data-bs-toggle="modal" class="text-decoration-none small fw-bold" style="color: var(--secondary-color, #ba436c);">
                            Enquire <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 3: Restorative & Yin Yoga -->
            <div class="col-12 col-md-6 col-lg-4 d-flex">
                <div class="wellness-card w-100">
                    <div>
                        <div class="wellness-card-icon" aria-hidden="true">
                            <i class="bi bi-moon-stars"></i>
                        </div>
                        <h3 class="wellness-card-title">Restorative &amp; Yin Yoga</h3>
                        <p class="wellness-card-desc">
                            Long-held, fully supported restorative poses using cushions and bolsters to release deep fascial holding patterns and invite restorative stillness.
                        </p>
                    </div>
                    <div class="pt-3 mt-3 border-top border-light-subtle d-flex justify-content-between align-items-center">
                        <span class="small text-muted fw-semibold">Deep Release</span>
                        <a href="#bookingModal" data-bs-toggle="modal" class="text-decoration-none small fw-bold" style="color: var(--secondary-color, #ba436c);">
                            Enquire <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 4: Somatic Mindfulness -->
            <div class="col-12 col-md-6 col-lg-4 d-flex">
                <div class="wellness-card w-100">
                    <div>
                        <div class="wellness-card-icon" aria-hidden="true">
                            <i class="bi bi-brightness-high"></i>
                        </div>
                        <h3 class="wellness-card-title">Somatic Mindfulness</h3>
                        <p class="wellness-card-desc">
                            Sensory body-scan meditations and conscious stillness practices designed to quiet chronic mental chatter and ground deep present-moment peace.
                        </p>
                    </div>
                    <div class="pt-3 mt-3 border-top border-light-subtle d-flex justify-content-between align-items-center">
                        <span class="small text-muted fw-semibold">Mind-Body Calm</span>
                        <a href="#bookingModal" data-bs-toggle="modal" class="text-decoration-none small fw-bold" style="color: var(--secondary-color, #ba436c);">
                            Enquire <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 5: Prenatal & Gentle Care -->
            <div class="col-12 col-md-6 col-lg-4 d-flex">
                <div class="wellness-card w-100">
                    <div>
                        <div class="wellness-card-icon" aria-hidden="true">
                            <i class="bi bi-flower1"></i>
                        </div>
                        <h3 class="wellness-card-title">Gentle &amp; Nurturing Flows</h3>
                        <p class="wellness-card-desc">
                            Soft, supportive movement sequences tailored for individuals seeking low-impact physical care, graceful recovery, and gentle joint decompression.
                        </p>
                    </div>
                    <div class="pt-3 mt-3 border-top border-light-subtle d-flex justify-content-between align-items-center">
                        <span class="small text-muted fw-semibold">Gentle Restoration</span>
                        <a href="#bookingModal" data-bs-toggle="modal" class="text-decoration-none small fw-bold" style="color: var(--secondary-color, #ba436c);">
                            Enquire <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 6: Corporate Ergo-Wellness -->
            <div class="col-12 col-md-6 col-lg-4 d-flex">
                <div class="wellness-card w-100">
                    <div>
                        <div class="wellness-card-icon" aria-hidden="true">
                            <i class="bi bi-building"></i>
                        </div>
                        <h3 class="wellness-card-title">Corporate Wellness</h3>
                        <p class="wellness-card-desc">
                            Targeted workplace posture routines, desk stretching, and guided 15-minute nervous system resets to prevent burnout and boost team focus.
                        </p>
                    </div>
                    <div class="pt-3 mt-3 border-top border-light-subtle d-flex justify-content-between align-items-center">
                        <span class="small text-muted fw-semibold">Workplace Vitality</span>
                        <a href="#bookingModal" data-bs-toggle="modal" class="text-decoration-none small fw-bold" style="color: var(--secondary-color, #ba436c);">
                            Enquire <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- ==========================================================================
     4. Dedicated Space & The Studio Experience (Left Image | Right Content)
     ========================================================================== -->
<section class="wellness-space-section position-relative" id="wellnessSpace" aria-label="Shamaa Sanctuary Experience">
    <div class="container">
        <div class="row align-items-center g-4 g-lg-5 flex-lg-row-reverse">
            
            <!-- Right Content Column -->
            <div class="col-12 col-lg-6">
                <p class="wellness-pretitle">The Sanctuary Experience</p>
                <h2 class="wellness-heading">
                    A Quiet Haven Away from <em>Daily Distractions</em>
                </h2>
                <p class="wellness-text">
                    Our movement sanctuary is intentionally crafted to feel like an oasis of calm. With soft natural light, peaceful acoustic frequencies, and clean organic energy, every element allows your nervous system to downshift and unwind.
                </p>

                <!-- Checkmarks Checklist -->
                <ul class="wellness-checklist">
                    <li>
                        <i class="bi bi-check-circle-fill" aria-hidden="true"></i>
                        <span><strong>Small Intimate Batches:</strong> Capped participant sizes ensuring individualized attention and posture guidance.</span>
                    </li>
                    <li>
                        <i class="bi bi-check-circle-fill" aria-hidden="true"></i>
                        <span><strong>Organic Props Provided:</strong> Eco-friendly natural mats, organic cotton bolsters, straps, and blocks provided for comfort.</span>
                    </li>
                    <li>
                        <i class="bi bi-check-circle-fill" aria-hidden="true"></i>
                        <span><strong>Flexible Scheduling:</strong> Morning, afternoon, and evening batches designed to seamlessly match your lifestyle.</span>
                    </li>
                    <li>
                        <i class="bi bi-check-circle-fill" aria-hidden="true"></i>
                        <span><strong>Online &amp; In-Studio:</strong> Join in-person at our Hyderabad center or access live interactive sessions worldwide.</span>
                    </li>
                </ul>

                <button type="button" 
                        class="btn-wellness-demo"
                        data-bs-toggle="modal" 
                        data-bs-target="#bookingModal"
                        aria-label="Reserve a Demo Session">
                    <i class="bi bi-calendar2-heart" aria-hidden="true"></i>
                    <span>Reserve Your Demo Session</span>
                </button>
            </div>

            <!-- Left Image Column -->
            <div class="col-12 col-lg-6">
                <div class="wellness-media-frame">
                    <img src="assets/images/services/Therapeutic Yoga.jpg" 
                         alt="Therapeutic Yoga Session at Shamaa Wellness" 
                         class="wellness-media-img"
                         style="aspect-ratio: 4/3; object-position: center 25%;"
                         loading="lazy">
                    
                    <div class="wellness-floating-pill">
                        <span class="pill-icon" aria-hidden="true">
                            <i class="bi bi-shield-heart"></i>
                        </span>
                        <div class="pill-text">
                            <strong>Certified Mentors</strong>
                            <small>Experienced &amp; Compassionate Guidance</small>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ==========================================================================
     5. Transformative Benefits (4 Pillars on Deep Navy)
     ========================================================================== -->
<section class="wellness-pillars-section position-relative" id="wellnessPillars" aria-label="Enduring Benefits of Shamaa Wellness">
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
<section class="wellness-faq-section position-relative" id="wellnessFaq" aria-label="Shamaa Wellness FAQ">
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
                                Absolutely. Shamaa Wellness welcomes individuals of every fitness level, body type, and age. Our certified instructors provide personalized modifications so you can move comfortably without strain, pressure, or judgment.
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
                                Fitness yoga often focuses on fast pacing, calorie burn, and extreme flexibility. In contrast, Therapeutic Yoga at Shamaa Wellness prioritizes functional alignment, breath integration, nervous system regulation, and somatic healing tailored to alleviate chronic tension and fatigue.
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
                                Simply click any of the "Book a Demo Session" buttons on this page or reach out directly via WhatsApp at +91 90006 06792. Our team will understand your personal wellness goals and suggest the ideal batch timing for you.
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>
</section>

<!-- ==========================================================================
     7. Shamaa Wellness Bottom CTA Banner
     ========================================================================== -->
<section class="wellness-cta-section position-relative text-center" id="wellnessCta" aria-label="Book Demo Session Banner">
    <img src="<?= htmlspecialchars($wellness_cta_bg) ?>" 
         alt="Shamaa Mindful Movement Sanctuary" 
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
                    <a href="https://wa.me/919000606792" 
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
// Common Global Footer
include __DIR__ . '/common/footer.php'; 
?>

