<?php

$about_healing_img_top    = $about_healing_img_top ?? (file_exists(dirname(__DIR__) . '/assets/images/about/center-reiki-session.jpg') ? 'assets/images/about/center-reiki-session.jpg' : 'assets/images/services/Reiki Healing.jpg');
$about_healing_img_bottom = $about_healing_img_bottom ?? (file_exists(dirname(__DIR__) . '/assets/images/about/center-crystal-therapy.jpg') ? 'assets/images/about/center-crystal-therapy.jpg' : 'assets/images/services/Crystal Healing.jpg');
$about_healing_title_1    = $about_healing_title_1 ?? 'A Sacred Sanctuary for';
$about_healing_title_2    = $about_healing_title_2 ?? 'Holistic Healing & <em>Transformation</em>';
?>

<section class="about-healing-section position-relative" id="aboutCenter" aria-label="About SS Healing Rays Center">
    <div class="container">
        <div class="row align-items-stretch justify-content-center about-healing-row">
            
            <!-- Left Column: Two Stacked Images (Top & Bottom, 2:3 Ratio, Matching Right Content) -->
            <div class="col-12 col-lg-6 d-flex justify-content-center justify-content-lg-end align-items-stretch">
                <div class="about-healing-images-stack">
                    <div class="about-healing-image-card">
                        <img src="<?= htmlspecialchars($about_healing_img_top) ?>" 
                             alt="SS Healing Rays Sanctuary & Center" 
                             loading="lazy">
                    </div>
                    <div class="about-healing-image-card">
                        <img src="<?= htmlspecialchars($about_healing_img_bottom) ?>" 
                             alt="SS Healing Rays Healing Modalities" 
                             loading="lazy">
                    </div>
                </div>
            </div>

            <!-- Right Column: Heading & Elaborated Description Only (Equal 50% Column, Full Width Content) -->
            <div class="col-12 col-lg-6 d-flex flex-column justify-content-center justify-content-lg-start">
                <div class="about-healing-content w-100">
                    <h2 class="about-healing-heading">
                        <span class="about-healing-title-line"><?= $about_healing_title_1 ?></span>
                        <span class="about-healing-title-line"><?= $about_healing_title_2 ?></span>
                    </h2>
                    
                    <div class="about-healing-description w-100">
                        <p>
                            Welcome to <strong>SS Healing Rays</strong>, a sanctuary founded on the sacred belief that true healing begins when the mind, body, and spirit are brought into profound alignment. Established as a peaceful refuge from the overwhelming pace of modern life, our center offers a safe, nurturing environment where you can gently release emotional blockages, dissolve anxiety, and awaken your natural state of vitality.
                        </p>
                        <p>
                            Our holistic approach harmoniously blends time-honored energy traditions with proven psycho-emotional wellness modalities. From classical <strong>Usui &amp; Karuna Reiki</strong> and pure <strong>Crystal Therapy</strong> to intuitive <strong>Angel Guidance</strong> and scientifically grounded <strong>Emotional Freedom Techniques (EFT)</strong>, every modality is offered with deep compassion and personalized attentiveness tailored to your unique journey.
                        </p>
                        <p>
                            Whether you are seeking relief from chronic stress, navigating personal transitions, or walking a conscious path toward self-realization, SS Healing Rays is here to guide and empower you. Beyond private therapeutic sessions, our center is a thriving community hub offering accredited training programs, mindfulness retreats, and transformative workshops designed to help you embody enduring harmony and inner peace.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>