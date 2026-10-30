<?php

$mission_tag       = $mission_tag ?? 'Our Mission';
$mission_title     = $mission_title ?? 'To Encourage Healing, Awareness & Personal Growth';
$mission_desc_1    = $mission_desc_1 ?? 'Our mission is to create a compassionate and welcoming space where individuals can explore holistic wellbeing, nurture self-awareness, and approach their personal journeys with greater understanding.';
$mission_desc_2    = $mission_desc_2 ?? 'Through mindful practices and supportive guidance, we aim to encourage inner balance, emotional awareness, and a deeper connection with oneself.';
$mission_img       = $mission_img ?? (
    file_exists(dirname(__DIR__) . '/assets/images/about/mission.jpg')
        ? 'assets/images/about/mission.jpg'
        : (file_exists(dirname(__DIR__) . '/assets/images/about/mission')
            ? 'assets/images/about/mission'
            : 'assets/images/about-image.jpeg')
);

// Vision Card Data
$vision_tag        = $vision_tag ?? 'Our Vision';
$vision_title      = $vision_title ?? 'A World That Embraces Inner Balance & Wellbeing';
$vision_desc_1     = $vision_desc_1 ?? 'Our vision is to encourage a greater appreciation of holistic wellbeing and the importance of nurturing our inner lives.';
$vision_desc_2     = $vision_desc_2 ?? 'We aspire to contribute to a culture of compassion, mindfulness, and personal growth in which individuals feel encouraged to understand themselves, respect their own journeys, and embrace positive change.';
$vision_img        = $vision_img ?? (
    file_exists(dirname(__DIR__) . '/assets/images/about/vision.jpg')
        ? 'assets/images/about/vision.jpg'
        : (file_exists(dirname(__DIR__) . '/assets/images/about/vision')
            ? 'assets/images/about/vision'
            : 'assets/images/workshop-healing-circle.png')
);
?>

<section class="vision-mission-section position-relative" id="ourVisionMission" aria-label="Our Mission and Vision">
    <div class="container">
        
        <div class="row g-4 g-xl-5 justify-content-center vm-grid">
            
            <!-- Card 1: Our Mission -->
            <div class="col-12 col-lg-6 vm-col">
                <div class="vm-card">
                    
                    <!-- Background Image & White Gradient Overlay -->
                    <div class="vm-card-media">
                        <img src="<?= htmlspecialchars($mission_img) ?>" 
                             alt="<?= htmlspecialchars($mission_tag . ' - ' . $mission_title) ?>"
                             class="vm-card-img"
                             loading="lazy">
                        <div class="vm-card-gradient" aria-hidden="true"></div>
                    </div>

                    <!-- Card Content Placed Over Gradient -->
                    <div class="vm-card-content">
                        
                        <div class="vm-card-badge">
                            <span class="badge-icon" aria-hidden="true">
                                <i class="bi bi-compass"></i>
                            </span>
                            <span class="badge-text"><?= htmlspecialchars($mission_tag) ?></span>
                        </div>

                        <h3 class="vm-card-title">
                            <?= htmlspecialchars($mission_title) ?>
                        </h3>

                        <div class="vm-card-desc-wrap">
                            <p class="vm-card-desc">
                                <?= htmlspecialchars($mission_desc_1) ?>
                            </p>
                            <p class="vm-card-desc">
                                <?= htmlspecialchars($mission_desc_2) ?>
                            </p>
                        </div>

                    </div>

                </div>
            </div>

            <!-- Card 2: Our Vision -->
            <div class="col-12 col-lg-6 vm-col">
                <div class="vm-card">
                    
                    <!-- Background Image & White Gradient Overlay -->
                    <div class="vm-card-media">
                        <img src="<?= htmlspecialchars($vision_img) ?>" 
                             alt="<?= htmlspecialchars($vision_tag . ' - ' . $vision_title) ?>"
                             class="vm-card-img"
                             loading="lazy">
                        <div class="vm-card-gradient" aria-hidden="true"></div>
                    </div>

                    <!-- Card Content Placed Over Gradient -->
                    <div class="vm-card-content">
                        
                        <div class="vm-card-badge">
                            <span class="badge-icon" aria-hidden="true">
                                <i class="bi bi-eye"></i>
                            </span>
                            <span class="badge-text"><?= htmlspecialchars($vision_tag) ?></span>
                        </div>

                        <h3 class="vm-card-title">
                            <?= htmlspecialchars($vision_title) ?>
                        </h3>

                        <div class="vm-card-desc-wrap">
                            <p class="vm-card-desc">
                                <?= htmlspecialchars($vision_desc_1) ?>
                            </p>
                            <p class="vm-card-desc">
                                <?= htmlspecialchars($vision_desc_2) ?>
                            </p>
                        </div>

                    </div>

                </div>
            </div>

        </div>

    </div>
</section>
