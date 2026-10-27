<?php
/**
 * Workshop Cards Component - SS Healing Rays
 * Exact same card design, typography, 3-column grid layout, and button styling as servicecards.php.
 * Features 12 Sacred Workshop Circles with authentic images from the gallery.
 */

$workshop_cards_pretitle = $workshop_cards_pretitle ?? 'SACRED CIRCLES &amp; EXPERIENTIAL SESSIONS';
$workshop_cards_title    = $workshop_cards_title ?? '12 Transformative <em>Healing Workshops</em>';
$workshop_cards_subtitle = $workshop_cards_subtitle ?? 'Step into our guided community circles designed to harmonize your energy, awaken spiritual clarity, and elevate your conscious living.';

$workshops_list = $workshops_list ?? [
    [
        'id'    => 'energy-reset',
        'title' => 'Energy Reset',
        'image' => 'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.13 PM.jpeg',
        'desc'  => 'A dynamic bio-energetic realignment workshop designed to clear auric debris, discharge nervous system fatigue, and reset your natural vitality through conscious breath and aura sweeping.',
        'url'   => 'contact.php?workshop=Energy+Reset'
    ],
    [
        'id'    => 'language-of-crystals',
        'title' => 'Language of crystals',
        'image' => 'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.14 PM.jpeg',
        'desc'  => 'Immerse in the sacred vibrational frequencies of healing gemstones. Learn to decipher mineral geometries, program intention grids, and attune to crystal frequencies for daily life.',
        'url'   => 'contact.php?workshop=Language+of+crystals'
    ],
    [
        'id'    => 'gratitude',
        'title' => 'Gratitude',
        'image' => 'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.15 PM.jpeg',
        'desc'  => 'A heart-opening experiential circle centered on cultivating profound gratitude practices, heart-brain coherence, and sacred journaling to elevate your everyday vibrational frequency.',
        'url'   => 'contact.php?workshop=Gratitude'
    ],
    [
        'id'    => 'loving-yourself',
        'title' => 'Loving Yourself',
        'image' => 'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.16 PM.jpeg',
        'desc'  => 'A compassionate inner healing workshop addressing inner-child wounding, releasing harsh self-judgment, and anchoring unconditional self-compassion through guided soul meditations.',
        'url'   => 'contact.php?workshop=Loving+Yourself'
    ],
    [
        'id'    => 'breath-work',
        'title' => 'Breath work',
        'image' => 'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.17 PM.jpeg',
        'desc'  => 'Conscious connected pranayama journeys designed to release trapped somatic trauma, boost cellular oxygenation, and open transformative states of mental calm and emotional release.',
        'url'   => 'contact.php?workshop=Breath+work'
    ],
    [
        'id'    => 'mudras',
        'title' => 'Mudras',
        'image' => 'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.18 PM.jpeg',
        'desc'  => 'Discover the ancient Vedic science of sacred hand mudras to direct subtle prana, balance the five primary elements within your body, and enhance meditation focus and healing flow.',
        'url'   => 'contact.php?workshop=Mudras'
    ],
    [
        'id'    => 'relaxation',
        'title' => 'Relaxation',
        'image' => 'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.20 PM.jpeg',
        'desc'  => 'A sanctuary of deep nervous system restoration featuring Yoga Nidra, therapeutic sound frequencies, and guided progressive muscle relaxation to dissolve burnout and chronic tension.',
        'url'   => 'contact.php?workshop=Relaxation'
    ],
    [
        'id'    => 'money-manifestation',
        'title' => 'Money manifestation',
        'image' => 'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.21 PM.jpeg',
        'desc'  => 'Dissolve subconscious scarcity vows, heal ancestral money beliefs, and align your energy field with the natural flow of divine abundance and magnetic prosperity.',
        'url'   => 'contact.php?workshop=Money+manifestation'
    ],
    [
        'id'    => 'energy-routine',
        'title' => 'Energy Routine',
        'image' => 'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.22 PM.jpeg',
        'desc'  => 'Learn an empowering, practical daily 15-minute energetic hygiene routine incorporating the 4 Thumps, cross-crawl, hook-up, and zip-up to stay protected and grounded everywhere.',
        'url'   => 'contact.php?workshop=Energy+Routine'
    ],
    [
        'id'    => 'abundance-program',
        'title' => 'Abundance program',
        'image' => 'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.23 PM.jpeg',
        'desc'  => 'A comprehensive multi-phase manifestation intensive designed to reprogram subconscious wealth barriers, activate prosperity chakras, and anchor enduring holistic prosperity.',
        'url'   => 'contact.php?workshop=Abundance+program'
    ],
    [
        'id'    => 'reprogram-with-meditation',
        'title' => 'Reprogram with meditation',
        'image' => 'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.29 PM.jpeg',
        'desc'  => 'Harness neuro-energetic meditation protocols to access theta brainwave states, release deep-seated limiting habits, and consciously rewrite empowering subconscious blueprints.',
        'url'   => 'contact.php?workshop=Reprogram+with+meditation'
    ],
    [
        'id'    => 'colour-meditation',
        'title' => 'Colour meditation',
        'image' => 'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.30 PM.jpeg',
        'desc'  => 'A luminous healing circle working with the spectrum of therapeutic colour frequencies and rainbow rays to bathe and recalibrate each chakra, restoring chromatic vibrational harmony.',
        'url'   => 'contact.php?workshop=Colour+meditation'
    ],
];
?>

<section class="service-cards-section position-relative" id="workshopsGrid" aria-label="Transformative Healing Workshops">
    <div class="container">
        
        <!-- Section Header -->
        <div class="service-cards-header text-center">
            <h2 class="service-cards-title"><?= $workshop_cards_title ?></h2>
        </div>

        <!-- 3-Column Workshop Cards Grid (Desktop: 3 cols, Tablet: 2 cols, Mobile: 1 col) -->
        <div class="row service-cards-row justify-content-center">
            <?php foreach ($workshops_list as $index => $workshop): ?>
                <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch mb-4" id="workshop-<?= htmlspecialchars($workshop['id']) ?>">
                    <article class="service-item-card">
                        
                        <!-- Top Image -->
                        <div class="service-item-media">
                            <img src="<?= htmlspecialchars($workshop['image']) ?>" 
                                 alt="<?= htmlspecialchars($workshop['title']) ?> Workshop at SS Healing Rays" 
                                 loading="lazy">
                        </div>

                        <!-- Card Body (Heading + Description + Enquire Button) -->
                        <div class="service-item-body">
                            <span class="service-item-number"><?= sprintf('%02d', $index + 1) ?>.</span>
                            <h3 class="service-item-title"><?= htmlspecialchars($workshop['title']) ?></h3>
                            <p class="service-item-desc"><?= htmlspecialchars($workshop['desc']) ?></p>
                            
                            <!-- Main Reusable Button Component from common/button.php -->
                            <div class="service-item-actions">
                                <?php
                                    $btn_text    = 'Enquire Now';
                                    $btn_url     = '#serviceBookingModal';
                                    $btn_class   = 'Btn-Card-Main w-100 justify-content-between';
                                    $clean_title = htmlspecialchars(html_entity_decode(strip_tags($workshop['title']), ENT_QUOTES, 'UTF-8'));
                                    $btn_attr    = 'data-bs-toggle="modal" data-bs-target="#serviceBookingModal" data-service-title="' . $clean_title . '" data-service-category="IV. Workshops" aria-label="Enquire about ' . $clean_title . ' Workshop"';
                                    include dirname(__DIR__) . '/common/button.php';
                                ?>
                            </div>
                        </div>

                    </article>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>