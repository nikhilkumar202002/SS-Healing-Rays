<?php

$page_title        = 'Sreeparvathy C M – Trauma-Informed Wellness Coach, Emotional Wellness Practitioner & Educator | SS Healing Rays';
$page_description  = 'Emotional Wellness. Human Growth. Lasting Transformation. Helping individuals and organisations build emotional resilience, self-awareness and well-being.';
$current_page      = 'about';

// WhatsApp & Contact Details Configuration
$whatsapp_phone        = '+91 90006 06792';
$whatsapp_digits       = '919000606792';
$whatsapp_coaching_msg = 'Hi Sreeparvathy, I would like to book a coaching consultation.';
$whatsapp_training_msg = 'Hi Sreeparvathy, I would like to schedule a training needs discussion for our organisation.';

$whatsapp_url_coaching = 'https://wa.me/' . $whatsapp_digits . '?text=' . rawurlencode($whatsapp_coaching_msg);
$whatsapp_url_training = 'https://wa.me/' . $whatsapp_digits . '?text=' . rawurlencode($whatsapp_training_msg);

$pro_email             = 'sreeparvathy.coach@gmail.com';
$general_email         = 'contact@sshealingrays.com';
$linkedin_url          = 'https://www.linkedin.com/in/sreeparvathy-c-m/';

$phone_number          = $whatsapp_phone;
$phone_tel             = '+919000606792';
$cta_text              = 'Book Consultation';
$cta_url               = $whatsapp_url_coaching;

include __DIR__ . '/common/header.php';
?>

<main class="profile-page-wrapper">
    <section class="profile-section position-relative" id="sreeparvathyProfile" aria-label="Sreeparvathy C M Personal Profile Details">
        <div class="container">
            <div class="row g-4 g-xl-5 align-items-start">
       
                <!-- ==============================================================
                     1. LEFT COLUMN: Main Scrollable Content
                     ============================================================== -->
                <div class="col-12 col-lg-7 col-xl-7 profile-content-scroll-col">
                    
                    <!-- Breadcrumb Navigation -->
                    <nav class="profile-breadcrumb mb-3" aria-label="Breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="aboutus">About Us</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sreeparvathy C M</li>
                        </ol>
                    </nav>

                    <!-- Practitioner Eyebrow Badge & Title -->
                    <div class="profile-pretitle-badge">
                        <i class="bi bi-flower1" aria-hidden="true"></i>
                        <span>Sreeparvathy C M</span>
                    </div>

                    <span class="profile-title-tagline d-block">
                        Trauma-Informed Wellness Coach &bull; Emotional Wellness Practitioner &bull; Educator &amp; Mentor
                    </span>

                    <!-- Main Hero Headline -->
                    <h1 class="profile-hero-title">
                        <span class="d-block">Emotional Wellness. Human Growth.</span>
                        <span class="d-block"><em>Lasting Transformation.</em></span>
                    </h1>

                    <!-- Lead Paragraph -->
                    <p class="profile-lead-sub">
                        Helping individuals and organisations build emotional resilience, self-awareness and well-being through trauma-informed coaching, emotional wellness and experiential learning.
                    </p>

                    <!-- Hero Action Buttons -->
                    <div class="profile-hero-actions">
                        <?php
                            $btn_text  = 'Book a Coaching Consultation';
                            $btn_url   = $whatsapp_url_coaching;
                            $btn_class = 'Btn-Profile-Primary';
                            $btn_attr  = 'target="_blank" rel="noopener noreferrer"';
                            include __DIR__ . '/common/button.php';
                        ?>
                        <?php
                            $btn_text  = 'Schedule Training Discussion';
                            $btn_url   = 'mailto:' . htmlspecialchars($pro_email) . '?subject=' . rawurlencode('Training Needs Discussion - Sreeparvathy C M');
                            $btn_class = 'Btn-Profile-Secondary';
                            $btn_attr  = 'title="Email for Organisational Training Discussion"';
                            include __DIR__ . '/common/button.php';
                        ?>
                    </div>

                    <!-- ==============================================================
                         SECTION 02 — AREAS OF EXPERTISE
                         ============================================================== -->
                    <div class="profile-pillars-section mb-5" id="areas-of-expertise">
                        <div class="profile-pillars-header mb-4">
                            <div class="profile-pillars-badge">
                                <i class="bi bi-compass"></i>
                                <span>Core Domains</span>
                            </div>
                            <h2 class="profile-section-heading mb-0">
                                Areas of <em>Expertise</em>
                            </h2>
                        </div>
                        
                        <div class="profile-pillars-grid">
                            
                            <!-- 01 · TRAUMA-INFORMED COACHING -->
                            <div class="profile-pillar-card">
                                <div class="profile-pillar-content">
                                    <div class="profile-pillar-header-row">
                                        <h4>01 &bull; Trauma-Informed Coaching</h4>
                                        <span class="profile-pillar-badge-num">Coaching</span>
                                    </div>
                                    <p>
                                        Understand emotional patterns, release limiting beliefs and build inner resilience. A gentle, safe and attuned holding space honoring nervous system safety and lasting sovereignty.
                                    </p>
                                </div>
                            </div>

                            <!-- 02 · EMOTIONAL WELLNESS & EFT -->
                            <div class="profile-pillar-card">
                                <div class="profile-pillar-content">
                                    <div class="profile-pillar-header-row">
                                        <h4>02 &bull; Emotional Wellness &amp; EFT</h4>
                                        <span class="profile-pillar-badge-num">Somatic EFT</span>
                                    </div>
                                    <p>
                                        Develop emotional awareness, manage stress and cultivate inner balance through gentle meridian tapping combined with mindful cognitive reframing.
                                    </p>
                                </div>
                            </div>

                            <!-- 03 · REIKI & ENERGY HEALING -->
                            <div class="profile-pillar-card">
                                <div class="profile-pillar-content">
                                    <div class="profile-pillar-header-row">
                                        <h4>03 &bull; Reiki &amp; Energy Healing</h4>
                                        <span class="profile-pillar-badge-num">Energy Healing</span>
                                    </div>
                                    <p>
                                        Usui Reiki, Karuna Reiki and holistic energy practices for personal well-being, auric rejuvenation and grounded subtle peace.
                                    </p>
                                </div>
                            </div>

                            <!-- 04 · EMOTIONAL INTELLIGENCE & WORKPLACE WELL-BEING -->
                            <div class="profile-pillar-card">
                                <div class="profile-pillar-content">
                                    <div class="profile-pillar-header-row">
                                        <h4>04 &bull; Emotional Intelligence &amp; Workplace Well-being</h4>
                                        <span class="profile-pillar-badge-num">Workplace</span>
                                    </div>
                                    <p>
                                        Bringing emotional awareness, resilience and healthier human connections into professional environments, team dynamics and leadership development.
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- ==============================================================
                         SECTION 03 — SHORT ABOUT
                         ============================================================== -->
                    <div class="profile-story-block" id="about-sreeparvathy">
                        <h2 class="profile-section-heading">
                            Understanding People. <em>Enabling Growth.</em>
                        </h2>
                        
                        <p class="profile-story-text">
                            With over 13 years of experience in education and mentoring, Sreeparvathy brings together human understanding, emotional wellness and holistic practices to support meaningful personal and professional growth.
                        </p>

                        <div class="profile-quote-callout">
                            <p>
                                &ldquo;Her approach combines trauma-informed coaching, EFT, Reiki and experiential learning, helping individuals and organisations navigate emotional demands with greater awareness and resilience.&rdquo;
                            </p>
                        </div>
                    </div>

                    <!-- ==============================================================
                         SECTION 04 — TWO AUDIENCE PATHWAYS
                         ============================================================== -->
                    <div class="profile-story-block" id="audience-pathways">
                        <h2 class="profile-section-heading">
                            Supporting <em>Individuals &amp; Organisations</em>
                        </h2>

                        <div class="profile-pathways-grid">
                            
                            <!-- Pathway 1: For Individuals -->
                            <div class="profile-pathway-card">
                                <div>
                                    <span class="profile-pathway-badge"><i class="bi bi-person"></i> Personal Path</span>
                                    <h4 class="profile-pathway-title">For Individuals</h4>
                                    <p class="profile-pathway-desc">
                                        Personalised support for emotional wellness, self-awareness and healing. Compassionate 1-on-1 coaching designed around your personal emotional triggers and nervous system recovery.
                                    </p>
                                </div>
                            </div>

                            <!-- Pathway 2: For Organisations & Institutions -->
                            <div class="profile-pathway-card">
                                <div>
                                    <span class="profile-pathway-badge"><i class="bi bi-building"></i> Institutional Path</span>
                                    <h4 class="profile-pathway-title">For Organisations &amp; Institutions</h4>
                                    <p class="profile-pathway-desc">
                                        Experiential learning and wellness engagements focused on emotional intelligence, resilience and workplace well-being to strengthen teams, educators and professionals.
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- ==============================================================
                         SECTION 05 — TESTIMONIALS & TRAINING HIGHLIGHTS
                         ============================================================== -->
                    <div class="profile-testimonials-stream mb-5" id="testimonials">
                        
                        <div class="profile-testimonials-header">
                            <div>
                                <h3 class="profile-section-heading mb-0">Stories of Growth &amp; <em>Transformation</em></h3>
                            </div>
                        </div>

                        <!-- Continuous Scrolling Marquee Track for Personal Testimonials -->
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

                        <!-- Distinct Subsection: Training & Facilitation Highlights -->
                        <div class="profile-training-highlights-section" id="training-highlights">
                            <h4 class="profile-section-heading mb-2">
                                Training &amp; Facilitation <em>Highlights</em>
                            </h4>
                            <p class="profile-story-text mb-3">
                                Editorial summaries of institutional and corporate engagements led by Sreeparvathy C M:
                            </p>

                            <div class="profile-highlights-grid">
                                
                                <!-- Highlight 1 -->
                                <div class="profile-highlight-card">
                                    <h5 class="profile-highlight-title">Workplace Productivity &amp; Well-being</h5>
                                    <span class="profile-highlight-org"><i class="bi bi-briefcase"></i> GQ Engagement</span>
                                    <p class="profile-highlight-desc">
                                        A corporate session exploring how employee well-being can support focus, energy and productivity.
                                    </p>
                                </div>

                                <!-- Highlight 2 -->
                                <div class="profile-highlight-card">
                                    <h5 class="profile-highlight-title">Freshers’ Orientation</h5>
                                    <span class="profile-highlight-org"><i class="bi bi-mortarboard"></i> Engineering College, Palakkad, Kerala</span>
                                    <p class="profile-highlight-desc">
                                        A practical session for incoming students. Participants described the content as insightful and helpful, highlighting perspectives they had not previously considered.
                                    </p>
                                </div>

                                <!-- Highlight 3 -->
                                <div class="profile-highlight-card">
                                    <h5 class="profile-highlight-title">Emotional Intelligence</h5>
                                    <span class="profile-highlight-org"><i class="bi bi-people"></i> Trainers’ Development Session</span>
                                    <p class="profile-highlight-desc">
                                        An engaging learning session for a group of trainers, focused on building awareness and applying emotional intelligence in training and professional interactions.
                                    </p>
                                </div>

                                <!-- Highlight 4 -->
                                <div class="profile-highlight-card">
                                    <h5 class="profile-highlight-title">Mindset Mastery</h5>
                                    <span class="profile-highlight-org"><i class="bi bi-lightbulb"></i> Trainers’ Development Session</span>
                                    <p class="profile-highlight-desc">
                                        A session for trainers exploring mindset, self-awareness and the role of empowering perspectives in personal and professional growth.
                                    </p>
                                </div>

                            </div>
                        </div>

                    </div>

                    <!-- ==============================================================
                         SECTION 06 — FINAL CALL TO ACTION
                         ============================================================== -->
                    <div class="profile-clarity-section mb-4" id="lets-work-together">
                        <h2 class="profile-section-heading">
                            Let’s Work <em>Together</em>
                        </h2>
                        <p class="profile-clarity-desc">
                            Whether you are seeking personal emotional wellness support or looking to strengthen the capabilities and well-being of your people, let’s explore how we can work together.
                        </p>
                        <div class="profile-clarity-actions">
                            <?php
                                $btn_text  = 'Book a Coaching Consultation';
                                $btn_url   = $whatsapp_url_coaching;
                                $btn_class = 'Btn-Profile-Primary';
                                $btn_attr  = 'target="_blank" rel="noopener noreferrer"';
                                include __DIR__ . '/common/button.php';
                            ?>
                            <?php
                                $btn_text  = 'Schedule Training Discussion';
                                $btn_url   = 'mailto:' . htmlspecialchars($pro_email) . '?subject=' . rawurlencode('Training Needs Discussion - Sreeparvathy C M');
                                $btn_class = 'Btn-Profile-Secondary';
                                $btn_attr  = 'title="Email for Organisational Training Discussion"';
                                include __DIR__ . '/common/button.php';
                            ?>
                        </div>
                    </div>

                    <!-- LinkedIn Discreet Profile Callout -->
                    <div class="profile-linkedin-callout">
                        <div class="profile-linkedin-text-wrap">
                            <i class="bi bi-linkedin profile-linkedin-icon"></i>
                            <p class="profile-linkedin-note">
                                For my detailed professional background, experience and credentials, connect with me on LinkedIn.
                            </p>
                        </div>
                        <a href="<?= htmlspecialchars($linkedin_url) ?>" class="profile-linkedin-link" target="_blank" rel="noopener noreferrer">
                            <span>View LinkedIn Profile</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
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
                                     alt="Sreeparvathy C M – Trauma-Informed Wellness Coach & Educator" 
                                     class="profile-portrait-img">
                            </div>
                        </div>

                        <!-- Sticky Quick Actions Card -->
                        <div class="profile-sticky-actions-card">
                            <h4 class="profile-sticky-contact-title mt-0">Sreeparvathy C M</h4>
                            <p class="profile-sticky-contact-desc mb-2">
                                Trauma-Informed Wellness Coach &bull; Emotional Wellness Practitioner &bull; Educator &amp; Mentor
                            </p>

                            <!-- Profile Meta Details -->
                            <ul class="profile-sticky-meta-list">
                                <li class="profile-sticky-meta-item">
                                    <i class="bi bi-whatsapp"></i>
                                    <a href="<?= htmlspecialchars($whatsapp_url_coaching) ?>" target="_blank" rel="noopener noreferrer">
                                        <strong><?= htmlspecialchars($whatsapp_phone) ?></strong>
                                    </a>
                                </li>
                                <li class="profile-sticky-meta-item">
                                    <i class="bi bi-envelope"></i>
                                    <a href="mailto:<?= htmlspecialchars($pro_email) ?>">
                                        <?= htmlspecialchars($pro_email) ?>
                                    </a>
                                </li>
                                <li class="profile-sticky-meta-item">
                                    <i class="bi bi-linkedin"></i>
                                    <a href="<?= htmlspecialchars($linkedin_url) ?>" target="_blank" rel="noopener noreferrer">
                                        Connect on LinkedIn
                                    </a>
                                </li>
                                <li class="profile-sticky-meta-item">
                                    <i class="bi bi-instagram"></i>
                                    <a href="https://www.instagram.com/heal_sreeparvathy/" target="_blank" rel="noopener noreferrer">
                                        @heal_sreeparvathy
                                    </a>
                                </li>
                                <li class="profile-sticky-meta-item">
                                    <i class="bi bi-globe"></i>
                                    <span>Online Worldwide | In-person / Onsite</span>
                                </li>
                                <li class="profile-sticky-meta-item">
                                    <i class="bi bi-mortarboard"></i>
                                    <span>13+ Years in Education &amp; Mentoring</span>
                                </li>
                            </ul>

                            <div class="profile-sticky-btn-group profile-sticky-btn-row d-flex flex-row align-items-center gap-2 mt-3">
                                <?php
                                    $btn_text  = 'Book Consultation';
                                    $btn_url   = $whatsapp_url_coaching;
                                    $btn_class = 'Btn-Profile-Sticky-WA';
                                    $btn_attr  = 'target="_blank" rel="noopener noreferrer" title="Book a Coaching Consultation"';
                                    include __DIR__ . '/common/button.php';
                                ?>
                                <?php
                                    $btn_text  = 'Training Enquiry';
                                    $btn_url   = 'mailto:' . htmlspecialchars($pro_email) . '?subject=' . rawurlencode('Training Needs Discussion - Sreeparvathy C M');
                                    $btn_class = 'Btn-Profile-Sticky-Enquire';
                                    $btn_attr  = 'title="Schedule a Training Needs Discussion"';
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
