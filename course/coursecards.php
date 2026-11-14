<?php
/**
 * Wellness Courses Cards Component - SS Healing Rays
 * Exact same alternating row layout, 80px gap, image-content height matching,
 * and button styling as trainingcards.php.
 * Features 2 Sacred Wellness Programmes:
 * 1. SPANDAN – Personal Wellness Mentoring with Sreeparvathy
 * 2. CHETAN – Integrated Mind, Body & Spirit Programme with Sravanti
 */

$wellness_courses = [
    [
        'id'          => 'spandan',
        'title'       => 'SPANDAN &ndash; Personal Wellness Mentoring with Sreeparvathy',
        'badge'       => 'Personal Wellness Mentoring',
        'desc'        => 'SPANDAN is curated and led by Sreeparvathy, Corporate Trainer and Wellness Coach. Drawing on her experience in wellness guidance and the healing modalities offered through SS Healing Rays, the programme focuses on physical, emotional and mental well-being. Its concepts and practices are designed to encourage self-awareness, personal growth and meaningful transformation.',
        'specialised_pathway_title' => 'Specialised pathway: Healpreneur Coaching',
        'specialised_pathway_desc'  => 'SPANDAN also includes a specialised Healpreneur Coaching pathway for participants who wish to develop their skills as independent wellness or healing practitioners. Alongside learning and personal development, this pathway covers building practitioner confidence, understanding client needs, structuring sessions and exploring responsible ways to offer services. It may help participants work towards an additional income opportunity, without guaranteeing earnings or clients.',
        'highlights'  => [
            'Curated & Led by Sreeparvathy, Corporate Trainer & Wellness Coach',
            'Comprehensive Physical, Emotional & Mental Well-Being',
            'Self-Awareness, Personal Growth & Meaningful Transformation',
            'Specialised Pathway: Healpreneur Coaching for Practitioners',
            'Mentorship in Client Needs, Structuring Sessions & Responsible Practice'
        ],
        'image'       => 'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.40 PM.jpeg',
        'alt'         => 'SPANDAN Personal Wellness Mentoring with Sreeparvathy at SS Healing Rays',
        'url'         => 'contact.php?course=Spandan',
    ],
    [
        'id'          => 'chetan',
        'title'       => 'CHETAN &ndash; Integrated Mind, Body &amp; Spirit Programme with Sravanti',
        'badge'       => 'Mind, Body & Spirit Integration',
        'desc'        => "CHETAN is curated and led by Sravanti, Energy Healing Practitioner, Inner Transformation Coach and Therapeutic Yoga Teacher. It brings together suitable energy-healing practices, EFT, meditation and therapeutic yoga techniques in a personalised mentoring programme.\n\nThe programme is shaped around the participant's goals and may include mindful movement, breathwork, mudras, relaxation and other relevant practices to support physical, emotional and mental well-being.",
        'specialised_pathway_title' => null,
        'specialised_pathway_desc'  => null,
        'highlights'  => [
            'Curated & Led by Sravanti, Energy Healer, Transformation Coach & Yoga Teacher',
            'Integrates Energy Healing, EFT, Meditation & Therapeutic Yoga',
            'Personalised One-on-One Mentoring Shaped Around Your Goals',
            'Mindful Movement, Breathwork, Mudras & Relaxation',
            'Holistic Support for Physical, Emotional & Mental Well-Being'
        ],
        'image'       => 'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.42 PM.jpeg',
        'alt'         => 'CHETAN Integrated Mind, Body and Spirit Programme with Sravanti at SS Healing Rays',
        'url'         => 'contact.php?course=Chetan',
    ],
];
?>

<section class="training-programs-section position-relative" id="wellnessCourses" aria-label="Sacred Courses on Wellness">
    <div class="container">
        
        <!-- Section Header -->
        <div class="training-section-header text-center">
            <h2 class="training-section-title">Courses on <em>Wellness</em></h2>
            <p class="training-section-subtitle">
                Personalised mentoring and transformational wellness programmes curated by experienced wellness coaches and practitioners to guide your physical, emotional and mental well-being.
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
                            <div class="training-card-desc">
                                <?php 
                                    $paragraphs = preg_split('/\n\s*\n/', trim($course['desc']));
                                    foreach ($paragraphs as $para): 
                                ?>
                                    <p><?= nl2br(htmlspecialchars(trim($para))) ?></p>
                                <?php endforeach; ?>
                            </div>

                            <!-- Specialised Pathway Callout (Healpreneur Coaching in SPANDAN) -->
                            <?php if (!empty($course['specialised_pathway_title'])): ?>
                                <div class="course-specialised-pathway">
                                    <span class="course-specialised-pathway-title"><?= htmlspecialchars($course['specialised_pathway_title']) ?></span>
                                    <p class="course-specialised-pathway-text"><?= htmlspecialchars($course['specialised_pathway_desc']) ?></p>
                                </div>
                            <?php endif; ?>

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
                                    $btn_text    = 'Enquire for Programme';
                                    $btn_url     = '#serviceBookingModal';
                                    $btn_class   = 'Btn-Training-Card';
                                    $clean_title = htmlspecialchars(html_entity_decode(strip_tags($course['title']), ENT_QUOTES, 'UTF-8'));
                                    $btn_attr    = 'data-bs-toggle="modal" data-bs-target="#serviceBookingModal" data-service-title="' . $clean_title . '" data-service-category="III. Courses on Wellness"';
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