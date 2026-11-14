<?php

// Robust live-server image resolution for service images
if (!function_exists('resolve_service_img')) {
    function resolve_service_img($path) {
        $root = dirname(__DIR__);
        if (file_exists($root . '/' . $path)) {
            return $path;
        }
        $dir = dirname($path);
        $base = basename($path);
        $candidates = [
            $dir . '/' . str_replace(' ', '-', $base),
            $dir . '/' . str_replace('-', ' ', $base),
            $dir . '/' . strtolower($base),
            $dir . '/' . strtoupper($base),
            $dir . '/' . str_replace('.jpg', '.jpeg', $base),
            $dir . '/' . str_replace('.jpeg', '.jpg', $base),
            $dir . '/' . strtolower(str_replace(' ', '-', $base)),
        ];
        foreach ($candidates as $cand) {
            if (file_exists($root . '/' . $cand)) {
                return $cand;
            }
        }
        return $path;
    }
}

$training_programs = [
    [
        'id'          => 'reiki',
        'number'      => '01',
        'badge'       => 'Pillar I • Energy Healing Mastery',
        'title'       => 'Usui Reiki &amp; Karuna Reiki Training',
        'desc'        => 'Sreeparvathy and Sravanti are Reiki Grandmasters and offer structured Reiki training across available levels, including Usui Reiki and Karuna Reiki. The programmes guide students through Reiki principles and practice, self-practice, hands-on techniques and appropriate advanced methods.',
        'highlights'  => [
            'Guided by Reiki Grandmasters Sreeparvathy & Sravanti',
            'Structured Reiki Training Across Available Levels',
            'Reiki Principles, Self-Practice & Daily Discipline',
            'Hands-On Energy Channeling Techniques',
            'Appropriate Advanced Methods & Lineage Guidance'
        ],
        'image'       => resolve_service_img('assets/images/services/Reiki Healing.jpg'),
        'alt'         => 'Usui Reiki and Karuna Reiki Training at SS Healing Rays',
        'url'         => 'contact.php?training=Usui+Reiki+and+Karuna+Reiki+Training',
        'tag'         => 'Usui Reiki &amp; Karuna Reiki'
    ],
    [
        'id'          => 'crystal',
        'number'      => '02',
        'badge'       => 'Pillar II • Earth Resonance &amp; Grids',
        'title'       => 'Crystal Therapy Training',
        'desc'        => 'Crystal therapy training is offered at different levels, progressing from foundational understanding to advanced crystal knowledge and techniques. Depending on the level, students learn about crystal properties, selection and care, chakra-related applications, personal and family use, intention-setting and crystal grids.',
        'highlights'  => [
            'Progressive Training from Foundational to Advanced',
            'Crystal Properties, Selection & Cleansing Care',
            'Chakra-Related Applications & Vibrational Harmonization',
            'Practical Techniques for Personal & Family Well-Being',
            'Intention-Setting & Sacred Crystal Grid Creation'
        ],
        'image'       => resolve_service_img('assets/images/services/Crystal Healing.jpg'),
        'alt'         => 'Crystal Therapy Training at SS Healing Rays',
        'url'         => 'contact.php?training=Crystal+Therapy+Training',
        'tag'         => 'Progressive Training Levels'
    ],
    [
        'id'          => 'angel',
        'number'      => '03',
        'badge'       => 'Pillar III • Higher Dimensional Wisdom',
        'title'       => 'Angel Therapy Training',
        'desc'        => 'Angel therapy programmes are offered at different levels to help learners explore spiritual practices involving angels, personal and guardian angels, intention and reflective guidance. Advanced learning may include introductory Tarot-reading skills and practical application, as specified for that level.',
        'highlights'  => [
            'Multi-Level Spiritual Exploration Programmes',
            'Connecting with Personal & Guardian Angels',
            'Spiritual Intention & Reflective Guidance Practices',
            'Introductory Tarot-Reading Skills & Techniques',
            'Practical Real-World Application for Each Level'
        ],
        'image'       => resolve_service_img('assets/images/services/Angel-Healing.jpg'),
        'alt'         => 'Angel Therapy Training at SS Healing Rays',
        'url'         => 'contact.php?training=Angel+Therapy+Training',
        'tag'         => 'Includes Tarot-Reading Skills'
    ],
    [
        'id'          => 'eft',
        'number'      => '04',
        'badge'       => 'Pillar IV • Somatic Acupressure &amp; Mindset',
        'title'       => 'EFT Training',
        'desc'        => "EFT training introduces learners to Emotional Freedom Techniques, beginning with personal practice and self-application. Further levels develop the knowledge and practical skills needed to use EFT responsibly when supporting others, within the learner's training and professional scope.\n\nThe training helps learners build confidence in using EFT for personal practice and, with appropriate training and adherence to professional requirements, develop the skills to offer sessions independently. For some learners, this may create an opportunity to develop an additional income stream; outcomes and client demand are not guaranteed.",
        'highlights'  => [
            'Foundations in Personal Practice & Self-Application',
            'Knowledge & Skills to Support Others Responsibly',
            'Confidence-Building for Independent Client Sessions',
            'Adherence to Professional Requirements & Scope',
            'Potential to Develop an Additional Income Stream'
        ],
        'image'       => resolve_service_img('assets/images/services/EFT.jpg'),
        'alt'         => 'EFT Emotional Freedom Techniques Training at SS Healing Rays',
        'url'         => 'contact.php?training=EFT+Training',
        'tag'         => 'Personal &amp; Professional Scope'
    ],
];
?>

<section class="training-programs-section position-relative" id="trainingPrograms" aria-label="Certified Holistic Training Programs">
    <div class="container">
        
        <!-- Section Header -->
        <div class="training-section-header text-center">
        
            <h2 class="training-section-title">Certified <em>Training Programs</em></h2>
            <p class="training-section-subtitle">
                Deepen your calling with authentic, certified curriculum led by experienced master mentors. Each program blends sacred initiations, practical hands-on hours, comprehensive study materials, and recognized practitioner credentials.
            </p>
        </div>

        <!-- Alternating 4-Row Programs Grid -->
        <div class="training-programs-list">
            <?php foreach ($training_programs as $index => $program): ?>
                <?php 
                    // Even rows (0, 2): Image Left, Content Right
                    // Odd rows (1, 3): Content Left, Image Right (opposite)
                    $is_reversed = ($index % 2 === 1);
                ?>
                <article class="row align-items-stretch training-program-row <?= $is_reversed ? 'flex-lg-row-reverse' : '' ?>" id="program-<?= htmlspecialchars($program['id']) ?>">
                    
                    <!-- Image Column -->
                    <div class="col-12 col-lg-6 mb-4 mb-lg-0 d-flex flex-column">
                        <div class="training-image-card">
                            <div class="training-image-wrap">
                                <img src="<?= htmlspecialchars($program['image']) ?>" 
                                     alt="<?= htmlspecialchars($program['alt']) ?>" 
                                     class="training-program-img"
                                     loading="lazy">
                            </div>
                        </div>
                    </div>

                    <!-- Content Column -->
                    <div class="col-12 col-lg-6 d-flex flex-column justify-content-center">
                        <div class="training-content-card">
                            
                            <!-- Title -->
                            <h3 class="training-card-title"><?= $program['title'] ?></h3>

                            <!-- Description -->
                            <div class="training-card-desc">
                                <?php 
                                    $paragraphs = preg_split('/\n\s*\n/', trim($program['desc']));
                                    foreach ($paragraphs as $para): 
                                ?>
                                    <p><?= nl2br(htmlspecialchars(trim($para))) ?></p>
                                <?php endforeach; ?>
                            </div>

                            <!-- Key Highlights / Feature List -->
                            <ul class="training-highlights-list list-unstyled">
                                <?php foreach ($program['highlights'] as $highlight): ?>
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
                                    $btn_text    = 'Enquire for Batches';
                                    $btn_url     = '#serviceBookingModal';
                                    $btn_class   = 'Btn-Training-Card';
                                    $clean_title = htmlspecialchars(html_entity_decode(strip_tags($program['title']), ENT_QUOTES, 'UTF-8'));
                                    $btn_attr    = 'data-bs-toggle="modal" data-bs-target="#serviceBookingModal" data-service-title="' . $clean_title . '" data-service-category="II. Training"';
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