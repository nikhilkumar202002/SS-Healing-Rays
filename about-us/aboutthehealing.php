<?php

$about_healing_img   = $about_healing_img ?? (file_exists(dirname(__DIR__) . '/assets/images/about-image.jpeg') ? 'assets/images/about-image.jpeg' : 'assets/images/workshop-healing-circle.png');
$about_healing_title = $about_healing_title ?? 'A Sacred Sanctuary for Holistic Healing & <em>Transformation</em>';
?>

<section class="about-healing-section position-relative" id="aboutCenter" aria-label="About SS Healing Rays Center">
    <div class="container">
        <div class="row align-items-center justify-content-center gx-lg-5 about-healing-row">
            
            <!-- Left Column: Parabolic Arch Image Card (matching homepage shape) -->
            <div class="col-12 col-lg-5 d-flex justify-content-center">
                <div class="about-healing-image-card">
                    <img src="<?= htmlspecialchars($about_healing_img) ?>" 
                         alt="SS Healing Rays Sanctuary & Center" 
                         loading="lazy">
                </div>
            </div>

            <!-- Right Column: Heading & Elaborated Description Only -->
            <div class="col-12 col-lg-7 d-flex align-items-center">
                <div class="about-healing-content">
                    <h2 class="about-healing-heading">
                        <?= $about_healing_title ?>
                    </h2>
                    
                    <div class="about-healing-description">
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