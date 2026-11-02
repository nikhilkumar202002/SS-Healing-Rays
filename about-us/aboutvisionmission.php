<?php
/**
 * ==============================================================================
 * Mission & Vision Section Component - SS Healing Rays (About Us Page)
 * Features:
 *   - Alternating (Opposite Direction) 2-Block Layout:
 *       1. Vision: Left Side Image | Right Side Content
 *       2. Mission: Left Side Content | Right Side Image
 *   - Responsive Ordering (Image first on mobile, alternating on desktop)
 *   - Elevated Image Cards with smooth hover scale
 *   - Community Commitment Note Callout in Mission
 * Dedicated Stylesheet: assets/css/aboutvisionmission.css
 * ==============================================================================
 */

// Vision Data (Block 1: Left Image | Right Content)
$vision_tag        = $vision_tag ?? 'Our Vision';
$vision_title      = $vision_title ?? 'Many Paths. One Community.<br><span class="title-highlight">A Greater Purpose.</span>';
$vision_paragraphs = $vision_paragraphs ?? [
    'To nurture a confident, growing community within SS Healing Rays, where dedicated members are encouraged to explore diverse modalities and schools of thought, discover their own strengths and grow in the direction that feels right for them.',
    'We have spent years learning, exploring, practising and growing into the practitioners we are today. We want to make that journey shorter and more supported for our community members by sharing the knowledge, experience and guidance we have gathered along the way — without limiting them to our own teachings or one way of working.',
    'As members deepen their knowledge and develop their skills, we envision opportunities for those who wish to grow as practitioners, build a profession in wellness or collaborate with SS Healing Rays. Our larger aspiration is to bring diverse expertise together under one umbrella, united by a shared purpose: helping people heal, grow and transform.',
    'We took years to explore, learn and grow into who we are today. Through SS Healing Rays, we want to make that journey easier for our dedicated community members — not by limiting their paths, but by giving them the knowledge, guidance and freedom to discover their own.',
];
$vision_img        = $vision_img ?? (
    file_exists(dirname(__DIR__) . '/assets/images/about/vision.jpg')
        ? 'assets/images/about/vision.jpg'
        : (file_exists(dirname(__DIR__) . '/assets/images/about/vision')
            ? 'assets/images/about/vision'
            : 'assets/images/workshop-healing-circle.png')
);

// Mission Data (Block 2: Left Content | Right Image)
$mission_tag       = $mission_tag ?? 'Our Mission';
$mission_title     = $mission_title ?? 'Shorten the Journey. Share What We Have Learned.<br><span class="title-highlight">Grow Together.</span>';
$mission_paragraphs = $mission_paragraphs ?? [
    'To make the learning and growth journey easier for our dedicated community members through shared knowledge, practical guidance, continuous learning and opportunities to practise.',
    'We aim to help them build confidence, develop their individual strengths and, if they choose, grow into skilled practitioners who can support the transformation of others.',
];
$mission_note_label = $mission_note_label ?? 'A note on our community commitment';
$mission_note_text  = $mission_note_text ?? 'We encourage SS Healing Rays community members to learn beyond our own programmes and teachings, and to explore other teachers, modalities and schools of thought. Practitioner development, mentoring and collaboration opportunities described here are intended for members of our community who have the skills and interest to take that path; this is not an open public practitioner platform.';

$mission_img       = $mission_img ?? (
    file_exists(dirname(__DIR__) . '/assets/images/about/mission.jpg')
        ? 'assets/images/about/mission.jpg'
        : (file_exists(dirname(__DIR__) . '/assets/images/about/mission')
            ? 'assets/images/about/mission'
            : 'assets/images/about-image.jpeg')
);
?>

<section class="vision-mission-section position-relative" id="ourVisionMission" aria-label="Our Vision and Mission">
    <div class="container vm-container">
        
        <!-- ====================================================================
             Block 1: OUR VISION (Left Side Image | Right Side Content)
             ==================================================================== -->
        <div class="row align-items-stretch vm-row vm-row-vision">
            
            <!-- Left: Vision Image -->
            <div class="col-12 col-lg-6 col-vm-media">
                <div class="vm-image-card">
                    <img src="<?= htmlspecialchars($vision_img) ?>" 
                         alt="<?= strip_tags($vision_tag . ' - ' . $vision_title) ?>"
                         class="vm-image"
                         loading="lazy">
                </div>
            </div>

            <!-- Right: Vision Content -->
            <div class="col-12 col-lg-6 col-vm-content">
                <div class="vm-content-wrap">
                    
                    <!-- Eyebrow Badge -->
                    <div class="vm-badge mb-3">
                        <span class="badge-icon" aria-hidden="true"><i class="bi bi-eye"></i></span>
                        <span class="badge-text"><?= htmlspecialchars($vision_tag) ?></span>
                    </div>

                    <!-- Main Heading -->
                    <h2 class="vm-heading">
                        <?= $vision_title ?>
                    </h2>

                    <!-- Descriptive Paragraphs -->
                    <div class="vm-desc-wrap">
                        <?php foreach ($vision_paragraphs as $para): ?>
                            <p class="vm-desc"><?= htmlspecialchars($para) ?></p>
                        <?php endforeach; ?>
                    </div>

                </div>
            </div>

        </div>

        <!-- ====================================================================
             Block 2: OUR MISSION (Left Side Content | Right Side Image)
             ==================================================================== -->
        <div class="row align-items-stretch vm-row vm-row-mission">
            
            <!-- Left: Mission Content (order-2 on mobile, order-lg-1 on desktop) -->
            <div class="col-12 col-lg-6 order-2 order-lg-1 col-vm-content">
                <div class="vm-content-wrap">
                    
                    <!-- Eyebrow Badge -->
                    <div class="vm-badge mb-3">
                        <span class="badge-icon" aria-hidden="true"><i class="bi bi-compass"></i></span>
                        <span class="badge-text"><?= htmlspecialchars($mission_tag) ?></span>
                    </div>

                    <!-- Main Heading -->
                    <h2 class="vm-heading">
                        <?= $mission_title ?>
                    </h2>

                    <!-- Descriptive Paragraphs -->
                    <div class="vm-desc-wrap">
                        <?php foreach ($mission_paragraphs as $para): ?>
                            <p class="vm-desc"><?= htmlspecialchars($para) ?></p>
                        <?php endforeach; ?>

                        <!-- Community Commitment Note Callout -->
                        <div class="vm-note-callout mt-4">
                            <strong class="vm-note-label">
                                <i class="bi bi-info-circle me-1" aria-hidden="true"></i> <?= htmlspecialchars($mission_note_label) ?>
                            </strong>
                            <p class="vm-note-text">
                                <?= htmlspecialchars($mission_note_text) ?>
                            </p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Right: Mission Image (order-1 on mobile, order-lg-2 on desktop) -->
            <div class="col-12 col-lg-6 order-1 order-lg-2 col-vm-media">
                <div class="vm-image-card">
                    <img src="<?= htmlspecialchars($mission_img) ?>" 
                         alt="<?= strip_tags($mission_tag . ' - ' . $mission_title) ?>"
                         class="vm-image"
                         loading="lazy">
                </div>
            </div>

        </div>

    </div>
</section>
