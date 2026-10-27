<?php

$training_programs = [
    [
        'id'          => 'reiki',
        'number'      => '01',
        'badge'       => 'Pillar I • Energy Healing Mastery',
        'title'       => 'Reiki: Usui Shiki Ryoho &amp; Karuna Reiki – All Levels',
        'desc'        => 'Master the sacred art of channeling universal life force energy. Our certified Reiki training encompasses both traditional Usui Shiki Ryoho and advanced Karuna Reiki. Journey through Level 1 (Self-Healing &amp; Fundamentals), Level 2 (Sacred Symbols &amp; Distance Healing), Master Level (Advanced Attunements), and Grandmaster Teacher certification. Learn sacred hand placements, Byosen energy scanning, aura clearing, and sacred symbol activations with ongoing lineage mentorship.',
        'highlights'  => [
            'Usui & Karuna Lineage Attunements',
            'Distance & Karmic Healing Protocols',
            'Chakra Balancing & Byosen Scanning',
            'Full Manuals & Sacred Symbols Guide',
            'Authorized Practitioner & Master Certificate'
        ],
        'image'       => 'assets/images/services/reiki-healing.jpg',
        'alt'         => 'Reiki Shiki Ryoho and Karuna Reiki Training at SS Healing Rays',
        'url'         => 'contact.php?training=Reiki+Shiki+Ryoho+Karuna+All+Levels',
        'tag'         => 'Levels 1, 2, Master &amp; Grandmaster'
    ],
    [
        'id'          => 'crystal',
        'number'      => '02',
        'badge'       => 'Pillar II • Earth Resonance &amp; Grids',
        'title'       => 'Crystal Therapy &amp; Sacred Grid Mastery',
        'desc'        => 'Discover the metaphysical and vibrational science of natural earth crystals, sacred geometries, and healing gemstones. Learn how to cleanse, program, and activate quartz, obsidian, and master crystals for deep energetic realignment. This comprehensive practitioner certification teaches you sacred geometric crystal grids, chakra laying protocols, pendulum radiesthesia, aura clearing, and distance crystal therapy layouts.',
        'highlights'  => [
            'Sacred Geometric Crystal Grids',
            'Pendulum Dowsing & Chakra Scanning',
            'Chakra Laying & Gemstone Alignment',
            'Cleansing, Charging & Programming Protocols',
            'Certified Crystal Practitioner Certificate'
        ],
        'image'       => 'assets/images/services/crystal-healing.jpg',
        'alt'         => 'Certified Crystal Therapy Training at SS Healing Rays',
        'url'         => 'contact.php?training=Crystal+Therapy',
        'tag'         => 'Practitioner Certification'
    ],
    [
        'id'          => 'angel',
        'number'      => '03',
        'badge'       => 'Pillar III • Higher Dimensional Wisdom',
        'title'       => 'Angel Therapy &amp; Celestial Guidance',
        'desc'        => 'Attune your intuitive gifts to the gentle, high-vibrational guidance of the Angelic Realm, Archangels, and Divine protectors. This profound training program teaches you how to establish clear celestial channels, interpret angel numbers and signs, conduct intuitive card readings, and perform etheric cord cutting and protective shielding rituals. Learn to facilitate compassionate, heart-centered sessions that bring profound solace and spiritual alignment.',
        'highlights'  => [
            'Archangel Invocations & Sacred Rays',
            'Etheric Cord Cutting & Energy Cleansing',
            'Intuitive Angel Card Reading Mastery',
            'Aura Protection Shields & Violet Flame',
            'Certified Angel Therapy Practitioner Diploma'
        ],
        'image'       => 'assets/images/services/angel-healing.jpg',
        'alt'         => 'Angel Therapy Certification Course at SS Healing Rays',
        'url'         => 'contact.php?training=Angel+Therapy',
        'tag'         => 'Intuitive Master Course'
    ],
    [
        'id'          => 'eft',
        'number'      => '04',
        'badge'       => 'Pillar IV • Somatic Acupressure &amp; Mindset',
        'title'       => 'EFT (Emotional Freedom Techniques)',
        'desc'        => 'Harness the transformative power of acupressure meridian tapping combined with mindful cognitive reframing. This certified EFT course trains you to rapidly discharge stored emotional trauma, chronic anxiety, stress patterns, and limiting subconscious beliefs. Master clinical tapping sequences, 9-gamut techniques, cognitive reframing, borrowing benefits in group circles, and compassionate trauma-informed holding space.',
        'highlights'  => [
            'Acupressure Meridian Tapping Maps',
            'Trauma De-escalation & Stress Relief',
            'Subconscious Reframing & Setup Phrases',
            'Borrowing Benefits in Group Practice',
            'Accredited EFT Practitioner Certification'
        ],
        'image'       => 'assets/images/services/eft.jpg',
        'alt'         => 'EFT Emotional Freedom Techniques Training at SS Healing Rays',
        'url'         => 'contact.php?training=EFT',
        'tag'         => 'Clinical & Somatic Curriculum'
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
                            <p class="training-card-desc"><?= $program['desc'] ?></p>

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

                            <!-- Enquiry Action Button -->
                            <div class="training-card-action">
                                <a href="<?= htmlspecialchars($program['url']) ?>" 
                                   class="training-enquire-btn"
                                   aria-label="Enquire about <?= strip_tags($program['title']) ?>">
                                    <span>Enquire for Batches</span>
                                    <span class="training-btn-arrow-wrap" aria-hidden="true">
                                        <svg class="training-arrow-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round">
                                            <line x1="7" y1="17" x2="17" y2="7"></line>
                                            <polyline points="7 7 17 7 17 17"></polyline>
                                        </svg>
                                    </span>
                                </a>
                            </div>

                        </div>
                    </div>

                </article>
            <?php endforeach; ?>
        </div>

    </div>
</section>