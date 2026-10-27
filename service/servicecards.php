<?php

$service_cards_pretitle = $service_cards_pretitle ?? 'SACRED OFFERINGS &amp; MODALITIES';
$service_cards_title    = $service_cards_title ?? 'Comprehensive <em>Holistic Services</em>';
$service_cards_subtitle = $service_cards_subtitle ?? 'Explore our tailored energy therapies, trauma recovery, and personal healing sessions held in a compassionate, non-judgmental sanctuary.';

$full_services_list = $full_services_list ?? [
    [
        'title' => 'Reiki Healing',
        'image' => 'assets/images/services/reiki-healing.jpg',
        'desc'  => 'A deeply restorative Japanese energy therapy that channels universal life force to dissolve stagnant blocks, align chakras, and catalyze physical and emotional self-healing.',
        'url'   => 'contact.php?service=Reiki+Healing'
    ],
    [
        'title' => 'Crystal Healing',
        'image' => 'assets/images/services/crystal-healing.jpg',
        'desc'  => 'Harnesses the natural vibrational resonance of pure earth crystals placed on sacred energy vortexes to cleanse auric fields, release stress, and inspire mental clarity.',
        'url'   => 'contact.php?service=Crystal+Healing'
    ],
    [
        'title' => 'Angel Healing',
        'image' => 'assets/images/services/angel-healing.jpg',
        'desc'  => 'A gentle, high-vibrational healing modality connecting you with angelic guidance for divine protection, intuitive clarity, and profound emotional solace during life transitions.',
        'url'   => 'contact.php?service=Angel+Healing'
    ],
    [
        'title' => 'Energy healing',
        'image' => 'assets/images/services/energy-healing.jpg',
        'desc'  => 'Holistic biofield realignment that clears energetic fatigue, releases heavy emotional residue, and harmonizes your physical, emotional, and spiritual layers.',
        'url'   => 'contact.php?service=Energy+healing'
    ],
    [
        'title' => 'EFT',
        'image' => 'assets/images/services/eft.jpg',
        'desc'  => 'Acupressure meridian tapping combined with mindful cognitive reframing to rapidly dissolve chronic anxiety, release trapped trauma, and rewire healthy thought patterns.',
        'url'   => 'contact.php?service=EFT'
    ],
    [
        'title' => 'Counselling',
        'image' => 'assets/images/services/counselling.jpg',
        'desc'  => 'A safe, empathetic sanctuary offering confidential dialogue, emotional grounding, and practical holistic tools to navigate relationship hurdles and personal growth.',
        'url'   => 'contact.php?service=Counselling'
    ],
    [
        'title' => 'Trauma Healing',
        'image' => 'assets/images/services/trauma-healing.png',
        'desc'  => 'Gentle somatic and energetic trauma recovery that supports the nervous system in discharging stored subconscious stress, restoring inner safety and lasting resilience.',
        'url'   => 'contact.php?service=Trauma+Healing'
    ],
    [
        'title' => 'Personal Transformation Healing',
        'image' => 'assets/images/services/personal-transformation.png',
        'desc'  => 'An immersive, multi-layered journey addressing root subconscious patterns, unlocking emotional freedom, and empowering you to step boldly into your soul purpose.',
        'url'   => 'contact.php?service=Personal+Transformation+Healing'
    ],
    [
        'title' => 'Meditations',
        'image' => 'assets/images/services/meditations.png',
        'desc'  => 'Soulful mindfulness journeys, conscious pranayama breathwork, and guided visualization designed to quiet mental chatter, expand awareness, and ground profound inner peace.',
        'url'   => 'contact.php?service=Meditations'
    ],
    [
        'title' => 'Tarot Card reading',
        'image' => 'assets/images/services/tarot-card-reading.png',
        'desc'  => 'Intuitive symbolic tarot readings offering illuminating perspectives, spiritual alignment, and actionable clarity for your relationships, career, and soul path.',
        'url'   => 'contact.php?service=Tarot+Card+reading'
    ],
    [
        'title' => 'Therapeutic Yoga',
        'image' => 'assets/images/services/therapeutic-yoga.jpg',
        'desc'  => 'Conscious, therapeutic movement combined with restorative breath integration to release somatic holding patterns, improve flexibility, and nurture embodied vitality.',
        'url'   => 'contact.php?service=Therapeutic+Yoga'
    ],
];
?>

<section class="service-cards-section position-relative" id="servicesGrid" aria-label="Comprehensive Healing Services">
    <div class="container">
        
        <!-- Section Header -->
        <div class="service-cards-header text-center">
         
            <h2 class="service-cards-title"><?= $service_cards_title ?></h2>
           
        </div>

        <!-- 3-Column Service Cards Grid (Desktop: 3 cols, Tablet: 2 cols, Mobile: 1 col) -->
        <div class="row service-cards-row justify-content-center">
            <?php
                $service_slugs = [
                    'Reiki Healing'                     => 'reiki-healing',
                    'Crystal Healing'                   => 'crystal-healing',
                    'Angel Healing'                     => 'angel-healing',
                    'Energy healing'                    => 'energy-healing',
                    'EFT'                               => 'eft',
                    'Counselling'                       => 'counselling',
                    'Trauma Healing'                    => 'trauma-healing',
                    'Personal Transformation Healing'   => 'personal-transformation',
                    'Meditations'                       => 'meditations',
                    'Tarot Card reading'                => 'tarot-card-reading',
                    'Therapeutic Yoga'                  => 'therapeutic-yoga',
                ];
            ?>
            <?php foreach ($full_services_list as $index => $service): ?>
                <?php
                    $card_id = $service_slugs[$service['title']] ?? strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $service['title'])));
                ?>
                <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch mb-4 service-card-col" id="<?= htmlspecialchars($card_id) ?>">
                    <article class="service-item-card">
                        
                        <!-- Top Image -->
                        <div class="service-item-media">
                            <img src="<?= htmlspecialchars($service['image']) ?>" 
                                 alt="<?= htmlspecialchars($service['title']) ?> at SS Healing Rays" 
                                 loading="lazy">
                        </div>

                        <!-- Card Body (Heading + Description + Enquire Button) -->
                        <div class="service-item-body">
                            <span class="service-item-number"><?= sprintf('%02d', $index + 1) ?>.</span>
                            <h3 class="service-item-title"><?= htmlspecialchars($service['title']) ?></h3>
                            <p class="service-item-desc"><?= htmlspecialchars($service['desc']) ?></p>
                            
                            <!-- Pinned Enquire Button -->
                            <div class="service-item-actions">
                                <a href="#serviceBookingModal" 
                                   class="service-enquire-btn" 
                                   data-bs-toggle="modal" 
                                   data-bs-target="#serviceBookingModal" 
                                   data-service-title="<?= htmlspecialchars($service['title']) ?>" 
                                   data-service-category="I. Healings" 
                                   aria-label="Enquire about <?= htmlspecialchars($service['title']) ?>">
                                    <span>Enquire Now</span>
                                    <span class="service-enquire-icon-wrap" aria-hidden="true">
                                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round">
                                            <line x1="7" y1="17" x2="17" y2="7"></line>
                                            <polyline points="7 7 17 7 17 17"></polyline>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>

                    </article>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>