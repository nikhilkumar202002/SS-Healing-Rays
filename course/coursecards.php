<?php
/**
 * Wellness Courses Cards Component - SS Healing Rays
 * Exact same alternating row layout, 80px gap, image-content height matching,
 * and button styling as trainingcards.php.
 * Features 2 Sacred Wellness Courses: 1. Spandan, 2. Chetan.
 */

$wellness_courses = [
    [
        'id'          => 'spandan',
        'title'       => 'Spandan – The Sacred Pulse of Healing &amp; Vibration',
        'desc'        => 'Awaken to the primordial vibrational resonance of life itself. Spandan guides you into the metaphysical science of bio-frequencies, sacred pulse awareness, and sound integration. Learn how subtle vibrations influence your cellular health, how to dissolve disharmony in your biofield, and how to harness healing sonic frequencies to attune your mind and body to profound inner peace and vibrant life force energy.',
        'highlights'  => [
            'Bio-Frequency Scanning & Vibrational Mapping',
            'Pulse Awareness & Subtle Prana Alignment',
            'Primordial Sound Frequencies & Mantras',
            'Cellular Recalibration & Breath Integration',
            'Certified Course Completion Certificate'
        ],
        'image'       => 'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.40 PM.jpeg',
        'alt'         => 'Spandan Sacred Vibration and Pulse Course at SS Healing Rays',
        'url'         => 'contact.php?course=Spandan',
    ],
    [
        'id'          => 'chetan',
        'title'       => 'Chetan – Awaken Witness Consciousness &amp; Presence',
        'desc'        => 'Embark on an illuminating inward journey to awaken pure consciousness and mindful presence. Chetan teaches you ancient and contemporary mindfulness disciplines to transcend habitual mental chatter, dissolve deep-seated limiting subconscious patterns, and cultivate an unwavering center of calm. Learn to navigate life’s everyday challenges with emotional mastery, heightened intuition, and clarity.',
        'highlights'  => [
            'Witness Consciousness & Detached Awareness',
            'Subconscious De-conditioning Practices',
            'Neuro-Spiritual Mindfulness Protocols',
            'Emotional Grounding & Anchoring Presence',
            'Certified Course Completion Certificate'
        ],
        'image'       => 'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.42 PM.jpeg',
        'alt'         => 'Chetan Awakened Consciousness Course at SS Healing Rays',
        'url'         => 'contact.php?course=Chetan',
    ],
];
?>

<section class="training-programs-section position-relative" id="wellnessCourses" aria-label="Sacred Courses on Wellness">
    <div class="container">
        
        <!-- Section Header -->
        <div class="training-section-header text-center">
            <h2 class="training-section-title">Sacred Courses on <em>Wellness</em></h2>
            <p class="training-section-subtitle">
                Deepen your spiritual path through structured wellness courses crafted to awaken vital energy pulse, expand conscious awareness, and integrate ancient holistic wisdom into contemporary daily life.
            </p>
        </div>

        <!-- Alternating Rows Grid (Exact Same Structure as Training Page) -->
        <div class="training-programs-list">
            <?php foreach ($wellness_courses as $index => $course): ?>
                <?php 
                    // Even rows (0): Image Left, Content Right
                    // Odd rows (1): Content Left, Image Right (opposite)
                    $is_reversed = ($index % 2 === 1);
                ?>
                <article class="row align-items-stretch training-program-row <?= $is_reversed ? 'flex-lg-row-reverse' : '' ?>" id="course-<?= htmlspecialchars($course['id']) ?>">
                    
                    <!-- Image Column -->
                    <div class="col-12 col-lg-6 mb-4 mb-lg-0 d-flex flex-column">
                        <div class="training-image-card">
                            <div class="training-image-wrap">
                                <img src="<?= htmlspecialchars($course['image']) ?>" 
                                     alt="<?= htmlspecialchars($course['alt']) ?>" 
                                     class="training-program-img"
                                     loading="lazy">
                            </div>
                        </div>
                    </div>

                    <!-- Content Column -->
                    <div class="col-12 col-lg-6 d-flex flex-column justify-content-center">
                        <div class="training-content-card">
                            
                            <!-- Title -->
                            <h3 class="training-card-title"><?= $course['title'] ?></h3>

                            <!-- Description -->
                            <p class="training-card-desc"><?= $course['desc'] ?></p>

                            <!-- Key Highlights / Feature List -->
                            <ul class="training-highlights-list list-unstyled">
                                <?php foreach ($course['highlights'] as $highlight): ?>
                                    <li class="training-highlight-item">
                                        <span class="training-check-icon-wrap" aria-hidden="true">
                                            <svg class="training-check-icon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round">
                                                <polyline points="20 6 9 17 4 12"></polyline>
                                            </svg>
                                        </span>
                                        <span><?= htmlspecialchars($highlight) ?></span>
                                    </li>
                                <?php endforeach; ?>
                            </ul>

                            <!-- Main Reusable Button Component from common/button.php -->
                            <div class="training-card-action">
                                <?php
                                    $btn_text  = 'Enquire for Batches';
                                    $btn_url   = $course['url'];
                                    $btn_class = 'Btn-Training-Card';
                                    include dirname(__DIR__) . '/common/button.php';
                                ?>
                            </div>

                        </div>
                    </div>

                </article>
            <?php endforeach; ?>
        </div>

    </div>
</section>