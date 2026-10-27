<?php

$page_title        = 'Sreeparvathy – Emotional Wellness Coach & Master Energy Healer | SS Healing Rays';
$page_description  = 'Helping women move through stress and emotional overwhelm through Trauma-Informed Coaching, EFT meridian tapping, and Reiki healing with Sreeparvathy.';
$current_page      = 'about';

// WhatsApp Direct Connect Configuration with Initial Message
$whatsapp_phone    = '+91 90006 06792';
$whatsapp_digits   = '919000606792';
$whatsapp_message  = 'Hi Sreeparvathy, I would like to request a free CLARITY call for emotional wellness & healing.';
$whatsapp_url      = 'https://wa.me/' . $whatsapp_digits . '?text=' . rawurlencode($whatsapp_message);

$phone_number      = $whatsapp_phone;
$phone_tel         = '+919000606792';
$cta_text          = 'Book Clarity Call';
$cta_url           = $whatsapp_url;

include __DIR__ . '/common/header.php';
?>

<main class="profile-page-wrapper">
    <section class="profile-section position-relative" id="sreeparvathyProfile" aria-label="Sreeparvathy Personal Profile Details">
        <div class="container">
            <div class="row g-4 g-xl-5 align-items-start">
       
                <div class="col-12 col-lg-7 col-xl-7 profile-content-scroll-col">
                    
                    <!-- Breadcrumb Navigation -->
                    <nav class="profile-breadcrumb mb-3" aria-label="Breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="aboutus.php">About Us</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sreeparvathy</li>
                        </ol>
                    </nav>

           

                    <!-- Main Headline -->
                    <h1 class="profile-hero-title">
                        Helping Women Move Through <em>Stress</em> &amp; Emotional <em>Overwhelm</em>
                    </h1>

                    <!-- Lead Paragraph -->
                    <p class="profile-lead-sub">
                        Guiding you from survival mode and high-functioning anxiety into a grounded sanctuary of nervous system safety, somatic release, and inner sovereignty.
                    </p>

                    <!-- Hero Actions via common/button.php -->
                    <div class="profile-hero-actions d-flex flex-wrap align-items-center gap-3 mb-5">
                        <?php
                            $btn_text  = 'Book a Clarity Call';
                            $btn_url   = $whatsapp_url;
                            $btn_class = 'Btn-Profile-Primary';
                            $btn_attr  = 'target="_blank" rel="noopener noreferrer"';
                            include __DIR__ . '/common/button.php';
                        ?>
                        <?php
                            $btn_text  = 'Explore Healing Pillars';
                            $btn_url   = '#healing-pillars';
                            $btn_class = 'Btn-Profile-Secondary';
                            include __DIR__ . '/common/button.php';
                        ?>
                    </div>

                    <!-- Core Healing Pillars / Specializations -->
                    <div class="profile-pillars-section mb-5" id="healing-pillars">
                        <div class="profile-pillars-header">
                            <h2 class="profile-section-heading">
                                The Three <em>Healing Pillars</em>
                            </h2>
                        </div>
                        
                        <div class="profile-pillars-grid">
                            
                            <!-- Pillar 1: Trauma-Informed Coaching -->
                            <div class="profile-pillar-card">
                                <div class="profile-pillar-content">
                                    <div class="profile-pillar-header-row">
                                        <h4>Trauma-Informed Coaching</h4>
                                        <span class="profile-pillar-badge-num">Pillar I</span>
                                    </div>
                                    <p>
                                        A gentle, non-judgmental holding space honoring your nervous system’s natural rhythm. We explore chronic stress triggers, release emotional baggage, and re-establish safety and self-worth from within.
                                    </p>
                                </div>
                            </div>

                            <!-- Pillar 2: EFT (Emotional Freedom Techniques) -->
                            <div class="profile-pillar-card">
                                <div class="profile-pillar-content">
                                    <div class="profile-pillar-header-row">
                                        <h4>EFT (Emotional Freedom Techniques)</h4>
                                        <span class="profile-pillar-badge-num">Pillar II</span>
                                    </div>
                                    <p>
                                        Acupressure meridian tapping combined with mindful cognitive reframing. Rapidly reduces amygdala hyperactivity to dissolve chronic anxiety, release trapped panic, and rewire healthy, empowering beliefs.
                                    </p>
                                </div>
                            </div>

                            <!-- Pillar 3: Reiki Energy Healing -->
                            <div class="profile-pillar-card">
                                <div class="profile-pillar-content">
                                    <div class="profile-pillar-header-row">
                                        <h4>Reiki Energy Healing</h4>
                                        <span class="profile-pillar-badge-num">Pillar III</span>
                                    </div>
                                    <p>
                                        Channeling universal life force energy through traditional Usui and Karuna Reiki protocols to dissolve auric fatigue, rebalance subtle energy vortexes, and ground deep restorative emotional peace.
                                    </p>
                                </div>
                            </div>

                        </div>

                        <!-- Pillar Action CTA via common/button.php -->
                        <div class="profile-pillars-action mt-4">
                            <?php
                                $btn_text  = 'Enquire for Sessions';
                                $btn_url   = 'contact.php?practitioner=Sreeparvathy';
                                $btn_class = 'Btn-Profile-Primary';
                                include __DIR__ . '/common/button.php';
                            ?>
                        </div>
                    </div>

                    <!-- Philosophy & Compassionate Holding Space -->
                    <div class="profile-story-block">
                        <h2 class="profile-section-heading">
                            Healing in a <em>Safe Sanctuary</em>
                        </h2>
                        
                        <p class="profile-story-text">
                            Many women carry an invisible weight: the expectation to be resilient, productive, and nurturing, even when their own nervous systems are screaming in exhaustion. When stress becomes chronic, it doesn't just stay in your thoughts &mdash; it settles into your muscles, your sleep patterns, and your emotional reactivity.
                        </p>

                        <div class="profile-quote-callout">
                            <p>
                                &ldquo;You do not need to be fixed. You simply need a gentle, safe space to lay down what was never yours to carry alone.&rdquo;
                            </p>
                        </div>

                        <p class="profile-story-text">
                            Sreeparvathy combines holistic coaching with direct somatic meridian tapping and energetic healing. Instead of intellectualizing your pain, we work directly with the nervous system to create sustainable shifts, restoring your natural calm, healthy personal boundaries, and joyful presence.
                        </p>

                        <!-- Story Action CTA via common/button.php -->
                        <div class="profile-story-action mt-4">
                            <?php
                                $btn_text  = 'Begin Your Healing Journey';
                                $btn_url   = 'contact.php?practitioner=Sreeparvathy';
                                $btn_class = 'Btn-Profile-Primary';
                                include __DIR__ . '/common/button.php';
                            ?>
                        </div>
                    </div>

                    <!-- DM CLARITY Action Section (Plain Clean Layout with Main Button Design) -->
                    <div class="profile-clarity-section mb-5" id="clarity-call">
                        <h2 class="profile-section-heading">
                            Ready for Your <em>Clarity Call</em>?
                        </h2>
                        <p class="profile-clarity-desc">
                            Send a direct message with the word <strong>CLARITY</strong> or click below to connect directly on WhatsApp (+91 90006 06792). Let&rsquo;s discuss what you&rsquo;re experiencing and explore a personalized path back to emotional balance.
                        </p>
                        <div class="profile-clarity-actions">
                            <?php
                                $btn_text  = 'Message on WhatsApp';
                                $btn_url   = $whatsapp_url;
                                $btn_class = 'Btn-Profile-Primary';
                                $btn_attr  = 'target="_blank" rel="noopener noreferrer"';
                                include __DIR__ . '/common/button.php';
                            ?>
                            <?php
                                $btn_text  = 'DM on Instagram';
                                $btn_url   = 'https://www.instagram.com/heal_sreeparvathy/';
                                $btn_class = 'Btn-Profile-Secondary';
                                $btn_attr  = 'target="_blank" rel="noopener noreferrer"';
                                include __DIR__ . '/common/button.php';
                            ?>
                        </div>
                    </div>

                    <!-- Testimonial Scrolling Design -->
                    <div class="profile-testimonials-stream">
                        <div class="profile-testimonials-header">
                            <div>
                                
                                <h3 class="profile-section-heading mb-0">What Women <em>Say</em></h3>
                            </div>
                            
                        </div>

                        <!-- Continuous Scrolling Marquee Track -->
                        <div class="profile-testimonials-track-wrapper">
                            <div class="profile-testimonials-marquee">
                                
                                <!-- Testimonial 1 -->
                                <article class="profile-testi-card">
                                    <div class="profile-testi-stars">★★★★★</div>
                                    <p class="profile-testi-quote">
                                        &ldquo;Working with Sreeparvathy changed how I respond to stress completely. For years I was living in constant fight-or-flight. Her trauma-informed holding space and EFT tapping gave me my peace back.&rdquo;
                                    </p>
                                    <div class="profile-testi-footer">
                                        <span class="profile-testi-name">Ananya Sharma</span>
                                        <span class="profile-testi-tag">Stress Relief</span>
                                    </div>
                                </article>

                                <!-- Testimonial 2 -->
                                <article class="profile-testi-card">
                                    <div class="profile-testi-stars">★★★★★</div>
                                    <p class="profile-testi-quote">
                                        &ldquo;The clarity call was the turning point for my burnout. Sreeparvathy listened without judgment and guided me through gentle tapping that dissolved knots of grief talk therapy never reached.&rdquo;
                                    </p>
                                    <div class="profile-testi-footer">
                                        <span class="profile-testi-name">Pooja Krishnan</span>
                                        <span class="profile-testi-tag">Burnout Recovery</span>
                                    </div>
                                </article>

                                <!-- Testimonial 3 -->
                                <article class="profile-testi-card">
                                    <div class="profile-testi-stars">★★★★★</div>
                                    <p class="profile-testi-quote">
                                        &ldquo;Every session with Sreeparvathy feels like stepping into an oasis. She helped me unburden emotional baggage from childhood and set firm, loving boundaries without guilt.&rdquo;
                                    </p>
                                    <div class="profile-testi-footer">
                                        <span class="profile-testi-name">Meera Nambiar</span>
                                        <span class="profile-testi-tag">Emotional Freedom</span>
                                    </div>
                                </article>

                                <!-- Testimonial 4 -->
                                <article class="profile-testi-card">
                                    <div class="profile-testi-stars">★★★★★</div>
                                    <p class="profile-testi-quote">
                                        &ldquo;As a healthcare professional, my nervous system was chronically overloaded. Sreeparvathy's blend of Reiki and somatic EFT brought profound stillness back into my daily routine.&rdquo;
                                    </p>
                                    <div class="profile-testi-footer">
                                        <span class="profile-testi-name">Dr. Shalini Varma</span>
                                        <span class="profile-testi-tag">Nervous System</span>
                                    </div>
                                </article>

                                <!-- Testimonial 5 -->
                                <article class="profile-testi-card">
                                    <div class="profile-testi-stars">★★★★★</div>
                                    <p class="profile-testi-quote">
                                        &ldquo;I used to experience daily panic surges. Her 1-on-1 coaching gave me practical daily grounding tools that restored my confidence and inner sovereignty.&rdquo;
                                    </p>
                                    <div class="profile-testi-footer">
                                        <span class="profile-testi-name">Divya Menon</span>
                                        <span class="profile-testi-tag">Anxiety Healing</span>
                                    </div>
                                </article>

                                <!-- Testimonial 6 -->
                                <article class="profile-testi-card">
                                    <div class="profile-testi-stars">★★★★★</div>
                                    <p class="profile-testi-quote">
                                        &ldquo;Sreeparvathy holds space with unmatched compassion. If you are struggling with overwhelm, her coaching is the greatest gift of healing you can give yourself.&rdquo;
                                    </p>
                                    <div class="profile-testi-footer">
                                        <span class="profile-testi-name">Ritika Sengupta</span>
                                        <span class="profile-testi-tag">Inner Sovereignty</span>
                                    </div>
                                </article>

                                <!-- DUPLICATE SET FOR SEAMLESS INFINITE LOOP -->
                                <article class="profile-testi-card" aria-hidden="true">
                                    <div class="profile-testi-stars">★★★★★</div>
                                    <p class="profile-testi-quote">
                                        &ldquo;Working with Sreeparvathy changed how I respond to stress completely. For years I was living in constant fight-or-flight. Her trauma-informed holding space and EFT tapping gave me my peace back.&rdquo;
                                    </p>
                                    <div class="profile-testi-footer">
                                        <span class="profile-testi-name">Ananya Sharma</span>
                                        <span class="profile-testi-tag">Stress Relief</span>
                                    </div>
                                </article>

                                <article class="profile-testi-card" aria-hidden="true">
                                    <div class="profile-testi-stars">★★★★★</div>
                                    <p class="profile-testi-quote">
                                        &ldquo;The clarity call was the turning point for my burnout. Sreeparvathy listened without judgment and guided me through gentle tapping that dissolved knots of grief talk therapy never reached.&rdquo;
                                    </p>
                                    <div class="profile-testi-footer">
                                        <span class="profile-testi-name">Pooja Krishnan</span>
                                        <span class="profile-testi-tag">Burnout Recovery</span>
                                    </div>
                                </article>

                                <article class="profile-testi-card" aria-hidden="true">
                                    <div class="profile-testi-stars">★★★★★</div>
                                    <p class="profile-testi-quote">
                                        &ldquo;Every session with Sreeparvathy feels like stepping into an oasis. She helped me unburden emotional baggage from childhood and set firm, loving boundaries without guilt.&rdquo;
                                    </p>
                                    <div class="profile-testi-footer">
                                        <span class="profile-testi-name">Meera Nambiar</span>
                                        <span class="profile-testi-tag">Emotional Freedom</span>
                                    </div>
                                </article>

                                <article class="profile-testi-card" aria-hidden="true">
                                    <div class="profile-testi-stars">★★★★★</div>
                                    <p class="profile-testi-quote">
                                        &ldquo;As a healthcare professional, my nervous system was chronically overloaded. Sreeparvathy's blend of Reiki and somatic EFT brought profound stillness back into my daily routine.&rdquo;
                                    </p>
                                    <div class="profile-testi-footer">
                                        <span class="profile-testi-name">Dr. Shalini Varma</span>
                                        <span class="profile-testi-tag">Nervous System</span>
                                    </div>
                                </article>

                                <article class="profile-testi-card" aria-hidden="true">
                                    <div class="profile-testi-stars">★★★★★</div>
                                    <p class="profile-testi-quote">
                                        &ldquo;I used to experience daily panic surges. Her 1-on-1 coaching gave me practical daily grounding tools that restored my confidence and inner sovereignty.&rdquo;
                                    </p>
                                    <div class="profile-testi-footer">
                                        <span class="profile-testi-name">Divya Menon</span>
                                        <span class="profile-testi-tag">Anxiety Healing</span>
                                    </div>
                                </article>

                                <article class="profile-testi-card" aria-hidden="true">
                                    <div class="profile-testi-stars">★★★★★</div>
                                    <p class="profile-testi-quote">
                                        &ldquo;Sreeparvathy holds space with unmatched compassion. If you are struggling with overwhelm, her coaching is the greatest gift of healing you can give yourself.&rdquo;
                                    </p>
                                    <div class="profile-testi-footer">
                                        <span class="profile-testi-name">Ritika Sengupta</span>
                                        <span class="profile-testi-tag">Inner Sovereignty</span>
                                    </div>
                                </article>

                            </div>
                        <!-- Testimonials Action CTA via common/button.php -->
                        <div class="profile-testimonials-action text-center mt-4 pt-2">
                            <?php
                                $btn_text  = 'Schedule Your Transformation';
                                $btn_url   = 'contact.php?practitioner=Sreeparvathy';
                                $btn_class = 'Btn-Profile-Primary';
                                include __DIR__ . '/common/button.php';
                            ?>
                        </div>
                    </div>

                </div>

                <!-- ==============================================================
                     2. RIGHT COLUMN: Sticky / Static Portrait Image Card
                     ============================================================== -->
                <div class="col-12 col-lg-5 col-xl-5 profile-media-sticky-col">
                    <div class="profile-sticky-media-wrap">
                        
                        <!-- Portrait Card -->
                        <div class="profile-portrait-card">
                            <div class="profile-portrait-frame">
                                <img src="assets/images/profile/sreeparvathi.jpg" 
                                     alt="Sreeparvathy Emotional Wellness Coach at SS Healing Rays" 
                                     class="profile-portrait-img">
                            
                            </div>
                        </div>

                        <!-- Sticky Quick Actions Card -->
                        <div class="profile-sticky-actions-card">
                            <h4 class="profile-sticky-contact-title">Start Your Healing Journey</h4>
                            <p class="profile-sticky-contact-desc">
                                Compassionate 1-on-1 sessions held online worldwide and in-person at our sacred sanctuary.
                            </p>
                            <div class="profile-sticky-btn-group d-flex flex-column gap-2 mt-3">
                                <?php
                                    $btn_text  = 'Connect on WhatsApp';
                                    $btn_url   = $whatsapp_url;
                                    $btn_class = 'Btn-Profile-Sticky-WA';
                                    $btn_attr  = 'target="_blank" rel="noopener noreferrer"';
                                    include __DIR__ . '/common/button.php';
                                ?>
                                <?php
                                    $btn_text  = 'Schedule a Session';
                                    $btn_url   = 'contact.php?practitioner=Sreeparvathy';
                                    $btn_class = 'Btn-Profile-Sticky-Enquire';
                                    include __DIR__ . '/common/button.php';
                                ?>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
</main>

<?php
include __DIR__ . '/common/footer.php';
?>