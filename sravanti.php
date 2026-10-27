<?php

$page_title        = 'Sravanti – Energy Healer, Transformation Coach & Yoga Guide | SS Healing Rays';
$page_description  = 'Awaken your inner light with Sravanti through integrative Energy Healing, Transformation Coaching, and Therapeutic Yoga at SS Healing Rays.';
$current_page      = 'about';

// WhatsApp Direct Connect Configuration with Initial Message
$whatsapp_phone    = '+91 99660 10981';
$whatsapp_digits   = '919966010981';
$whatsapp_message  = 'Hi Sravanti, I would like to connect for personal healing, transformation coaching & yoga guidance.';
$whatsapp_url      = 'https://wa.me/' . $whatsapp_digits . '?text=' . rawurlencode($whatsapp_message);

$phone_number      = $whatsapp_phone;
$phone_tel         = '+919966010981';
$cta_text          = 'Connect with Sravanti';
$cta_url           = $whatsapp_url;

include __DIR__ . '/common/header.php';
?>

<main class="profile-page-wrapper">
    <section class="profile-section position-relative" id="sravantiProfile" aria-label="Sravanti Personal Profile Details">
        <div class="container">
            <div class="row g-4 g-xl-5 align-items-start">
       
                <div class="col-12 col-lg-7 col-xl-7 profile-content-scroll-col">
                    
                    <!-- Breadcrumb Navigation -->
                    <nav class="profile-breadcrumb mb-3" aria-label="Breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item"><a href="aboutus.php">About Us</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sravanti</li>
                        </ol>
                    </nav>

                    <!-- Main Headline -->
                    <h1 class="profile-hero-title">
                        Awaken Your Inner Light Through <em>Energy</em>, <em>Awareness</em> &amp; Yoga
                    </h1>

                    <!-- Lead Paragraph -->
                    <p class="profile-lead-sub">
                        Guiding individuals towards profound inner harmony, energetic alignment, and conscious personal transformation through intuitive healing, life coaching, and mindful yoga practices.
                    </p>

                    <!-- Core Healing Pillars / Specializations -->
                    <div class="profile-pillars-section mb-5" id="healing-pillars">
                        <div class="profile-pillars-header">
                            <h2 class="profile-section-heading">
                                The Three <em>Healing Pillars</em>
                            </h2>
                        </div>
                        
                        <div class="profile-pillars-grid">
                            
                            <!-- Pillar 1: Energy Healing & Subtle Alignment -->
                            <div class="profile-pillar-card">
                                <div class="profile-pillar-content">
                                    <div class="profile-pillar-header-row">
                                        <h4>Energy Healing &amp; Subtle Alignment</h4>
                                        <span class="profile-pillar-badge-num">Pillar I</span>
                                    </div>
                                    <p>
                                        Realigning your subtle energy centers (chakras) and clearing accumulated vibrational density. Restores natural vitality, clears energetic sluggishness, and anchors emotional serenity throughout your mind and body.
                                    </p>
                                </div>
                            </div>

                            <!-- Pillar 2: Inner Transformation Coaching -->
                            <div class="profile-pillar-card">
                                <div class="profile-pillar-content">
                                    <div class="profile-pillar-header-row">
                                        <h4>Inner Transformation Coaching</h4>
                                        <span class="profile-pillar-badge-num">Pillar II</span>
                                    </div>
                                    <p>
                                        Empowering 1-on-1 coaching designed to elevate personal awareness, dissolve subconscious barriers, and reframe limiting patterns into conscious self-sovereignty, clarity, and intentional living.
                                    </p>
                                </div>
                            </div>

                            <!-- Pillar 3: Therapeutic Yoga & Mindful Breath -->
                            <div class="profile-pillar-card">
                                <div class="profile-pillar-content">
                                    <div class="profile-pillar-header-row">
                                        <h4>Therapeutic Yoga &amp; Mindful Breath</h4>
                                        <span class="profile-pillar-badge-num">Pillar III</span>
                                    </div>
                                    <p>
                                        Integrating mindful somatic asanas, restorative postures, and pranayama breath regulation to release muscular holding patterns, ground the nervous system, and awaken holistic well-being.
                                    </p>
                                </div>
                            </div>

                        </div>

                    </div>

                    <!-- Philosophy & Conscious Holding Space -->
                    <div class="profile-story-block">
                        <h2 class="profile-section-heading">
                            The Journey of <em>Inner Transformation</em>
                        </h2>
                        
                        <p class="profile-story-text">
                            In today’s fast-paced world, it is easy to become disconnected from our natural rhythm. When energy stagnates, we experience mental fatigue, emotional stiffness, and physical disquiet. Transformation does not require forcing change &mdash; it begins with awakening conscious awareness.
                        </p>

                        <div class="profile-quote-callout">
                            <p>
                                &ldquo;Healing is not about becoming someone new. It is about gently remembering the clarity, vitality, and peace that was always yours.&rdquo;
                            </p>
                        </div>

                        <p class="profile-story-text">
                            Sravanti creates an attuned, sacred holding space where body, mind, and energy are nurtured as one. By harmonizing energetic pathways, mindful movement, and intentional coaching, each session guides you to release what no longer serves and step into lasting self-balance.
                        </p>
                        
                    </div>

                    <!-- DM / Connect Action Section (Plain Clean Layout with Main Button Design) -->
                    <div class="profile-clarity-section mb-5" id="clarity-call">
                        <h2 class="profile-section-heading">
                            Begin Your <em>Transformation</em>
                        </h2>
                        <p class="profile-clarity-desc">
                            Connect directly on WhatsApp (+91 99660 10981) or reach out via Instagram (@sravantiheals). Let&rsquo;s discuss your current path and design a personalized journey of energy, awareness, and renewal.
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
                                $btn_url   = 'https://www.instagram.com/sravantiheals/';
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
                                <h3 class="profile-section-heading mb-0">What Seekers <em>Share</em></h3>
                            </div>
                        </div>

                        <!-- Continuous Scrolling Marquee Track -->
                        <div class="profile-testimonials-track-wrapper">
                            <div class="profile-testimonials-marquee">
                                
                                <!-- Testimonial 1 -->
                                <article class="profile-testi-card">
                                    <div class="profile-testi-stars">★★★★★</div>
                                    <p class="profile-testi-quote">
                                        &ldquo;Sravanti guided me through subconscious blockages that held my career and relationships back for years. The clarity, self-compassion, and confidence I gained are priceless.&rdquo;
                                    </p>
                                    <div class="profile-testi-footer">
                                        <span class="profile-testi-name">Kavita Ramanathan</span>
                                        <span class="profile-testi-tag">Subconscious Reset</span>
                                    </div>
                                </article>

                                <!-- Testimonial 2 -->
                                <article class="profile-testi-card">
                                    <div class="profile-testi-stars">★★★★★</div>
                                    <p class="profile-testi-quote">
                                        &ldquo;Her therapeutic yoga sessions completely changed my relationship with my body. Chronic lower back tension melted away, and I finally learned to breathe with ease.&rdquo;
                                    </p>
                                    <div class="profile-testi-footer">
                                        <span class="profile-testi-name">Rajeshwari Patel</span>
                                        <span class="profile-testi-tag">Therapeutic Yoga</span>
                                    </div>
                                </article>

                                <!-- Testimonial 3 -->
                                <article class="profile-testi-card">
                                    <div class="profile-testi-stars">★★★★★</div>
                                    <p class="profile-testi-quote">
                                        &ldquo;Working with Sravanti brought tremendous clarity when I was in a period of intense transition. Her coaching is intuitive, empowering, and deeply grounding.&rdquo;
                                    </p>
                                    <div class="profile-testi-footer">
                                        <span class="profile-testi-name">Sunita Deshmukh</span>
                                        <span class="profile-testi-tag">Transformation</span>
                                    </div>
                                </article>

                                <!-- Testimonial 4 -->
                                <article class="profile-testi-card">
                                    <div class="profile-testi-stars">★★★★★</div>
                                    <p class="profile-testi-quote">
                                        &ldquo;Every session with Sravanti is like hitting a soulful reset button. Her chakra healing dissolved heavy emotional fatigue and brought back my joyful spark.&rdquo;
                                    </p>
                                    <div class="profile-testi-footer">
                                        <span class="profile-testi-name">Archana Venkat</span>
                                        <span class="profile-testi-tag">Energy Alignment</span>
                                    </div>
                                </article>

                                <!-- Testimonial 5 -->
                                <article class="profile-testi-card">
                                    <div class="profile-testi-stars">★★★★★</div>
                                    <p class="profile-testi-quote">
                                        &ldquo;Sravanti creates an oasis of peace. Her blend of breathwork, meditation, and life coaching gave me real practical tools to stay centered under stress.&rdquo;
                                    </p>
                                    <div class="profile-testi-footer">
                                        <span class="profile-testi-name">Sneha Kapoor</span>
                                        <span class="profile-testi-tag">Breath &amp; Mind</span>
                                    </div>
                                </article>

                                <!-- Testimonial 6 -->
                                <article class="profile-testi-card">
                                    <div class="profile-testi-stars">★★★★★</div>
                                    <p class="profile-testi-quote">
                                        &ldquo;Sravanti holds space with profound warmth and wisdom. If you feel disconnected or out of balance, her guidance is an authentic blessing.&rdquo;
                                    </p>
                                    <div class="profile-testi-footer">
                                        <span class="profile-testi-name">Preethi Sundaram</span>
                                        <span class="profile-testi-tag">Inner Sovereignty</span>
                                    </div>
                                </article>

                                <!-- DUPLICATE SET FOR SEAMLESS INFINITE LOOP -->
                                <article class="profile-testi-card" aria-hidden="true">
                                    <div class="profile-testi-stars">★★★★★</div>
                                    <p class="profile-testi-quote">
                                        &ldquo;Sravanti guided me through subconscious blockages that held my career and relationships back for years. The clarity, self-compassion, and confidence I gained are priceless.&rdquo;
                                    </p>
                                    <div class="profile-testi-footer">
                                        <span class="profile-testi-name">Kavita Ramanathan</span>
                                        <span class="profile-testi-tag">Subconscious Reset</span>
                                    </div>
                                </article>

                                <article class="profile-testi-card" aria-hidden="true">
                                    <div class="profile-testi-stars">★★★★★</div>
                                    <p class="profile-testi-quote">
                                        &ldquo;Her therapeutic yoga sessions completely changed my relationship with my body. Chronic lower back tension melted away, and I finally learned to breathe with ease.&rdquo;
                                    </p>
                                    <div class="profile-testi-footer">
                                        <span class="profile-testi-name">Rajeshwari Patel</span>
                                        <span class="profile-testi-tag">Therapeutic Yoga</span>
                                    </div>
                                </article>

                                <article class="profile-testi-card" aria-hidden="true">
                                    <div class="profile-testi-stars">★★★★★</div>
                                    <p class="profile-testi-quote">
                                        &ldquo;Working with Sravanti brought tremendous clarity when I was in a period of intense transition. Her coaching is intuitive, empowering, and deeply grounding.&rdquo;
                                    </p>
                                    <div class="profile-testi-footer">
                                        <span class="profile-testi-name">Sunita Deshmukh</span>
                                        <span class="profile-testi-tag">Transformation</span>
                                    </div>
                                </article>

                                <article class="profile-testi-card" aria-hidden="true">
                                    <div class="profile-testi-stars">★★★★★</div>
                                    <p class="profile-testi-quote">
                                        &ldquo;Every session with Sravanti is like hitting a soulful reset button. Her chakra healing dissolved heavy emotional fatigue and brought back my joyful spark.&rdquo;
                                    </p>
                                    <div class="profile-testi-footer">
                                        <span class="profile-testi-name">Archana Venkat</span>
                                        <span class="profile-testi-tag">Energy Alignment</span>
                                    </div>
                                </article>

                                <article class="profile-testi-card" aria-hidden="true">
                                    <div class="profile-testi-stars">★★★★★</div>
                                    <p class="profile-testi-quote">
                                        &ldquo;Sravanti creates an oasis of peace. Her blend of breathwork, meditation, and life coaching gave me real practical tools to stay centered under stress.&rdquo;
                                    </p>
                                    <div class="profile-testi-footer">
                                        <span class="profile-testi-name">Sneha Kapoor</span>
                                        <span class="profile-testi-tag">Breath &amp; Mind</span>
                                    </div>
                                </article>

                                <article class="profile-testi-card" aria-hidden="true">
                                    <div class="profile-testi-stars">★★★★★</div>
                                    <p class="profile-testi-quote">
                                        &ldquo;Sravanti holds space with profound warmth and wisdom. If you feel disconnected or out of balance, her guidance is an authentic blessing.&rdquo;
                                    </p>
                                    <div class="profile-testi-footer">
                                        <span class="profile-testi-name">Preethi Sundaram</span>
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
                                <img src="assets/images/profile/sravanti.jpg" 
                                     alt="Sravanti Healer, Transformation Coach & Yoga Guide at SS Healing Rays" 
                                     class="profile-portrait-img">
                            
                            </div>
                        </div>

                        <!-- Sticky Quick Actions Card -->
                        <div class="profile-sticky-actions-card">
                            <h4 class="profile-sticky-contact-title">Start Your Transformation</h4>
                            <p class="profile-sticky-contact-desc">
                                Compassionate 1-on-1 healing sessions, yoga guidance, and coaching available online worldwide and in-person.
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
                                    $btn_url   = 'contact.php?practitioner=Sravanti';
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