<?php
/**
 * Personal Profile Details Page - Sreeparvathy
 * SS Healing Rays
 * 
 * Layout: Split Screen
 * - Left Side: Scrollable rich content details (Instagram bio, 3 Core Pillars, Philosophy, Clarity Call, Testimonial Scrolling Stream)
 * - Right Side: Sticky portrait image of Sreeparvathy with floating chips and quick action card
 * - Banner: Not needed (starts directly below site header)
 */

$page_title       = 'Sreeparvathy – Emotional Wellness Coach & Master Energy Healer | SS Healing Rays';
$page_description = 'Helping women move through stress and emotional overwhelm through Trauma-Informed Coaching, EFT meridian tapping, and Reiki healing with Sreeparvathy.';
$current_page     = 'about';
$cta_text         = 'Book Clarity Call';
$cta_url          = 'https://chat.whatsapp.com/CJpMxOezsRzAutnt2yxuAm';

include __DIR__ . '/common/header.php';
?>

<main class="profile-page-wrapper">
    <section class="profile-section position-relative" id="sreeparvathyProfile" aria-label="Sreeparvathy Personal Profile Details">
        <div class="container">
            <div class="row g-4 g-xl-5 align-items-start">
                
                <!-- ==============================================================
                     1. LEFT COLUMN: Scrollable Content Details
                     ============================================================== -->
                <div class="col-12 col-lg-7 col-xl-7 profile-content-scroll-col">
                    
                    <!-- Breadcrumb Navigation -->
                    <nav class="profile-breadcrumb mb-3" aria-label="Breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="aboutus.php">About Us</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sreeparvathy</li>
                        </ol>
                    </nav>

                    <!-- Pretitle Badge -->
                    <div class="profile-pretitle-badge">
                        <i class="bi bi-stars"></i>
                        <span>Founder &amp; Emotional Wellness Coach</span>
                    </div>

                    <!-- Main Headline -->
                    <h1 class="profile-hero-title">
                        Helping Women Move Through <em>Stress</em> &amp; Emotional <em>Overwhelm</em>
                    </h1>

                    <!-- Lead Paragraph -->
                    <p class="profile-lead-sub">
                        Guiding you from survival mode and high-functioning anxiety into a grounded sanctuary of nervous system safety, somatic release, and inner sovereignty.
                    </p>

                    <!-- Instagram Profile & Community Card (Directly from Uploaded Instagram Info) -->
                    <div class="profile-ig-card">
                        
                        <!-- Card Header -->
                        <div class="profile-ig-header">
                            <div class="profile-ig-user">
                                <div class="profile-ig-avatar" aria-hidden="true">
                                    <img src="assets/images/profile/sreeparvathi.jpg" alt="Sreeparvathy Avatar">
                                </div>
                                <div>
                                    <div class="profile-ig-handle">
                                        <span>heal_sreeparvathy</span>
                                        <i class="bi bi-patch-check-fill" title="Verified Healer"></i>
                                    </div>
                                    <span class="profile-ig-category">Product / Service • Emotional Wellness</span>
                                </div>
                            </div>
                            <div class="profile-ig-stats">
                                <span><strong>722</strong> posts</span>
                                <span><strong>465</strong> followers</span>
                                <span><strong>209</strong> following</span>
                            </div>
                        </div>

                        <!-- Card Bio Text Matching Instagram Upload -->
                        <div class="profile-ig-bio">
                            <div class="profile-ig-bio-line">
                                <i class="bi bi-heart-pulse-fill"></i>
                                <span><strong>Sreeparvathy</strong> || Emotional wellness Coach</span>
                            </div>
                            <div class="profile-ig-bio-line">
                                <i class="bi bi-flower1"></i>
                                <span>Helping women move through stress and emotional overwhelm</span>
                            </div>
                            <div class="profile-ig-bio-line">
                                <i class="bi bi-shield-check"></i>
                                <span>Trauma-informed coaching • EFT • Reiki</span>
                            </div>
                            <div class="profile-ig-bio-line mt-2">
                                <i class="bi bi-chat-quote-fill"></i>
                                <span><strong>DM CLARITY</strong> for a free clarity call &mdash; Link in bio 👇</span>
                            </div>
                        </div>

                        <!-- Direct Social Action Buttons -->
                        <div class="profile-ig-actions">
                            <a href="https://chat.whatsapp.com/CJpMxOezsRzAutnt2yxuAm" 
                               target="_blank" 
                               rel="noopener noreferrer" 
                               class="profile-ig-btn-wa">
                                <i class="bi bi-whatsapp"></i>
                                <span>Join WhatsApp Community</span>
                            </a>
                            <a href="https://www.instagram.com/heal_sreeparvathy/" 
                               target="_blank" 
                               rel="noopener noreferrer" 
                               class="profile-ig-btn-ig">
                                <i class="bi bi-instagram"></i>
                                <span>@heal_sreeparvathy</span>
                            </a>
                        </div>
                    </div>

                    <!-- Core Healing Pillars / Specializations -->
                    <div class="profile-pillars-section mb-5">
                        <h2 class="profile-section-heading">
                            The Three <em>Healing Pillars</em>
                        </h2>
                        
                        <div class="profile-pillars-grid">
                            
                            <!-- Pillar 1: Trauma-Informed Coaching -->
                            <div class="profile-pillar-card">
                                <div class="profile-pillar-icon-box" aria-hidden="true">
                                    <i class="bi bi-shield-heart"></i>
                                </div>
                                <div class="profile-pillar-content">
                                    <h4>Trauma-Informed Coaching</h4>
                                    <p>
                                        A gentle, non-judgmental holding space honoring your nervous system’s natural rhythm. We explore chronic stress triggers, release emotional baggage, and re-establish safety and self-worth from within.
                                    </p>
                                </div>
                            </div>

                            <!-- Pillar 2: EFT (Emotional Freedom Techniques) -->
                            <div class="profile-pillar-card">
                                <div class="profile-pillar-icon-box" aria-hidden="true">
                                    <i class="bi bi-fingerprint"></i>
                                </div>
                                <div class="profile-pillar-content">
                                    <h4>EFT (Emotional Freedom Techniques)</h4>
                                    <p>
                                        Acupressure meridian tapping combined with mindful cognitive reframing. Rapidly reduces amygdala hyperactivity to dissolve chronic anxiety, release trapped panic, and rewire healthy, empowering beliefs.
                                    </p>
                                </div>
                            </div>

                            <!-- Pillar 3: Reiki Energy Healing -->
                            <div class="profile-pillar-card">
                                <div class="profile-pillar-icon-box" aria-hidden="true">
                                    <i class="bi bi-sparkles"></i>
                                </div>
                                <div class="profile-pillar-content">
                                    <h4>Reiki Energy Healing</h4>
                                    <p>
                                        Channeling universal life force energy through traditional Usui and Karuna Reiki protocols to dissolve auric fatigue, rebalance subtle energy vortexes, and ground deep restorative emotional peace.
                                    </p>
                                </div>
                            </div>

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
                    </div>

                    <!-- DM CLARITY Action Box -->
                    <div class="profile-clarity-box">
                        <span class="profile-clarity-badge">Complimentary 1-on-1 Consultation</span>
                        <h3 class="profile-clarity-title">Ready for Your <em>Clarity Call</em>?</h3>
                        <p class="profile-clarity-desc">
                            Send a direct message with the word <strong>CLARITY</strong> or click below to connect directly on WhatsApp. Let&rsquo;s discuss what you&rsquo;re experiencing and explore a personalized path back to emotional balance.
                        </p>
                        <div class="profile-clarity-actions">
                            <a href="https://chat.whatsapp.com/CJpMxOezsRzAutnt2yxuAm" 
                               target="_blank" 
                               rel="noopener noreferrer" 
                               class="profile-btn-clarity-wa">
                                <i class="bi bi-whatsapp"></i>
                                <span>Message on WhatsApp</span>
                            </a>
                            <a href="https://www.instagram.com/heal_sreeparvathy/" 
                               target="_blank" 
                               rel="noopener noreferrer" 
                               class="profile-btn-clarity-ig">
                                <i class="bi bi-instagram"></i>
                                <span>DM on Instagram</span>
                            </a>
                        </div>
                    </div>

                    <!-- Testimonial Scrolling Design -->
                    <div class="profile-testimonials-stream">
                        <div class="profile-testimonials-header">
                            <div>
                                <span class="profile-pretitle-badge mb-1">VOICES OF TRANSFORMATION</span>
                                <h3 class="profile-section-heading mb-0">What Women <em>Say</em></h3>
                            </div>
                            <span class="text-muted small d-none d-md-inline-block">
                                <i class="bi bi-pause-circle me-1"></i>Hover to pause
                            </span>
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
                                
                                <!-- Floating Top Chip -->
                                <div class="profile-portrait-chip-top">
                                    <span>✦ Founder &amp; Master Healer</span>
                                </div>

                                <!-- Floating Bottom Chip -->
                                <div class="profile-portrait-chip-bottom">
                                    <div>
                                        <span class="profile-chip-meta-name">Sreeparvathy</span>
                                        <span class="profile-chip-meta-role">Emotional Wellness Coach</span>
                                    </div>
                                    <a href="https://www.instagram.com/heal_sreeparvathy/" 
                                       target="_blank" 
                                       rel="noopener noreferrer" 
                                       class="profile-chip-ig-icon" 
                                       aria-label="Instagram Profile">
                                        <i class="bi bi-instagram"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Sticky Quick Actions Card -->
                        <div class="profile-sticky-actions-card">
                            <h4 class="profile-sticky-contact-title">Start Your Healing Journey</h4>
                            <p class="profile-sticky-contact-desc">
                                Compassionate 1-on-1 sessions held online worldwide and in-person at our sacred sanctuary.
                            </p>
                            <div class="profile-sticky-btn-group">
                                <a href="https://chat.whatsapp.com/CJpMxOezsRzAutnt2yxuAm" 
                                   target="_blank" 
                                   rel="noopener noreferrer" 
                                   class="profile-sticky-btn-wa">
                                    <i class="bi bi-whatsapp"></i>
                                    <span>Join WhatsApp Community</span>
                                </a>
                                <a href="contact.php?practitioner=Sreeparvathy" 
                                   class="profile-sticky-btn-enquire">
                                    <i class="bi bi-calendar2-check"></i>
                                    <span>Schedule a Session</span>
                                </a>
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