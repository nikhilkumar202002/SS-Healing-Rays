<?php
/**
 * Workshop Cards Component - SS Healing Rays
 * Exact same card design, typography, 3-column grid layout as servicecards.php.
 * Features 12 Experiential Holistic Workshops with natural-width pill button styling.
 */

$workshop_cards_pretitle = $workshop_cards_pretitle ?? 'SACRED CIRCLES &amp; EXPERIENTIAL SESSIONS';
$workshop_cards_title    = $workshop_cards_title ?? '12 Transformative <em>Healing Workshops</em>';
$workshop_cards_subtitle = $workshop_cards_subtitle ?? 'Step into our guided community circles designed to harmonize your energy, awaken spiritual clarity, and elevate your conscious living.';

$workshops_list = $workshops_list ?? [
    [
        'id'    => 'energy-routine',
        'title' => 'Energy Routine',
        'image' => 'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.22 PM.jpeg',
        'desc'  => 'A short, practical daily well-being routine for people with busy schedules. Sessions may be 15–20 minutes and include simple energy-awareness, breathing, relaxation or mindful practices that participants can incorporate into everyday life. Its simple mind-body balance approach makes it easy to practise consistently without requiring long sessions.',
        'url'   => 'contact.php?workshop=Energy+Routine'
    ],
    [
        'id'    => 'energy-reset',
        'title' => 'Energy Reset',
        'image' => 'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.13 PM.jpeg',
        'desc'  => 'A guided self-practice programme introducing participants to a simple energy-cleansing and grounding technique they can learn and practise for their own well-being. It is designed for people who wish to feel more centred, supported and connected to their personal well-being and spiritual practice. This is distinct from Reiki training and does not require enrolment in a full Reiki course. The practice also encourages personal boundaries and a sense of energetic well-being.',
        'url'   => 'contact.php?workshop=Energy+Reset'
    ],
    [
        'id'    => 'gratitude-journey',
        'title' => 'Gratitude Journey',
        'image' => 'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.15 PM.jpeg',
        'desc'  => 'A guided 21-day gratitude programme with daily reflections and simple practices to help participants notice and appreciate positive aspects of everyday life and develop a regular gratitude habit. More than a journalling activity, this structured journey encourages a mindset reset through guided practices and consistent reflection.',
        'url'   => 'contact.php?workshop=Gratitude+Journey'
    ],
    [
        'id'    => 'breathwork',
        'title' => 'Breathwork',
        'image' => 'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.17 PM.jpeg',
        'desc'  => 'A structured programme exploring different breathing practices and breath-awareness techniques. Sessions introduce suitable practices progressively, with attention to comfort, safety and individual ability. Practices can be adapted for older adults and those who prefer a gentle approach, allowing participants to learn comfortable breathing techniques at their own pace.',
        'url'   => 'contact.php?workshop=Breathwork'
    ],
    [
        'id'    => 'yogic-mind-relaxation',
        'title' => 'Yogic & Mind Relaxation',
        'image' => 'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.20 PM.jpeg',
        'desc'  => 'Guided relaxation practices drawing on yoga and complementary well-being techniques to help participants pause, release everyday tension and develop a regular relaxation practice. The mindful blend brings together body awareness, breathwork, guided relaxation and inner stillness in one accessible session.',
        'url'   => 'contact.php?workshop=Yogic+%26+Mind+Relaxation'
    ],
    [
        'id'    => 'reprogram-with-meditation',
        'title' => 'Reprogram with Meditation',
        'image' => 'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.29 PM.jpeg',
        'desc'  => 'Theme-based meditation workshops that may be aligned with lunar cycles, the five elements or reflective themes connected with the planets. Each workshop offers guided meditation and self-reflection, with the theme and practice selected for the session. These workshops encourage a shift in perspective, greater self-awareness and clearer alignment with personal intentions.',
        'url'   => 'contact.php?workshop=Reprogram+with+Meditation'
    ],
    [
        'id'    => 'language-of-crystals-webinar',
        'title' => 'Language of Crystals – Webinar',
        'image' => 'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.14 PM.jpeg',
        'desc'  => 'An introductory and educational webinar exploring crystals, their traditional associations, ways to understand and care for them, and common myths and beliefs. Suitable for crystal enthusiasts and beginners, the webinar helps participants build a more mindful relationship with their crystals and understand how to choose and use them according to their personal intentions.',
        'url'   => 'contact.php?workshop=Language+of+Crystals+%E2%80%93+Webinar'
    ],
    [
        'id'    => 'loving-yourself',
        'title' => 'Loving Yourself',
        'image' => 'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.16 PM.jpeg',
        'desc'  => 'A guided programme focused on self-acceptance, self-compassion and building a kinder relationship with oneself. Particularly relevant to women who have often placed family or social expectations ahead of their own needs, the programme uses guided reflection, meditation and EFT-inspired exercises to encourage reconnection with the self and greater self-acceptance.',
        'url'   => 'contact.php?workshop=Loving+Yourself'
    ],
    [
        'id'    => 'mudras-workshop',
        'title' => 'Mudras Workshop',
        'image' => 'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.18 PM.jpeg',
        'desc'  => 'A practical workshop introducing hand gestures traditionally used in yoga and meditation. Participants learn selected mudras and how to incorporate them into a comfortable personal practice. Mudras offer an accessible way to coordinate attention, breath and body awareness through simple hand gestures. Many can be practised while seated, making the workshop suitable for older adults and those who find floor-based practices difficult, subject to individual comfort.',
        'url'   => 'contact.php?workshop=Mudras+Workshop'
    ],
    [
        'id'    => 'align-manifest-programme',
        'title' => 'Align & Manifest Programme',
        'image' => 'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.21 PM.jpeg',
        'desc'  => 'A guided personal-development programme combining clarity of intention, self-reflection, meditation and selected healing practices. Participants explore their goals, recognise inner barriers and work towards purposeful action aligned with their intentions. The programme goes beyond manifestation techniques by incorporating mindset work and reflection to recognise scarcity-oriented thought patterns and develop a more resourceful outlook.',
        'url'   => 'contact.php?workshop=Align+%26+Manifest+Programme'
    ],
    [
        'id'    => 'abundance-programme',
        'title' => 'Abundance Programme',
        'image' => 'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.23 PM.jpeg',
        'desc'  => 'A personalised programme for people who want to explore greater well-being and a sense of abundance in a chosen area of life, such as career, relationships or personal growth. Through an initial understanding of individual intentions, the programme incorporates relevant reflection, meditation and selected crystal-based practices to help participants recognise limiting beliefs and develop a more resourceful and abundance-oriented mindset.',
        'url'   => 'contact.php?workshop=Abundance+Programme'
    ],
    [
        'id'    => 'colour-meditation',
        'title' => 'Colour Meditation',
        'image' => 'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.30 PM.jpeg',
        'desc'  => 'A guided meditation programme using colour visualisation and traditional colour associations with the chakras and different areas of personal well-being. Through visualisation, relaxation and reflective practices, participants explore colour awareness as a pathway to inner balance and self-awareness.',
        'url'   => 'contact.php?workshop=Colour+Meditation'
    ],
];
?>

<section class="service-cards-section workshop-cards-section position-relative" id="workshopsGrid" aria-label="Transformative Healing Workshops">
    <div class="container">
        
        <!-- Section Header -->
        <div class="service-cards-header text-center">
            <?php if (!empty($workshop_cards_pretitle)): ?>
                <p class="service-cards-pretitle mb-2"><?= $workshop_cards_pretitle ?></p>
            <?php endif; ?>
            <h2 class="service-cards-title"><?= $workshop_cards_title ?></h2>
            <?php if (!empty($workshop_cards_subtitle)): ?>
                <p class="service-cards-subtitle mt-2"><?= htmlspecialchars($workshop_cards_subtitle) ?></p>
            <?php endif; ?>
        </div>

        <!-- 3-Column Workshop Cards Grid (Desktop: 3 cols, Tablet: 2 cols, Mobile: 1 col) -->
        <div class="row service-cards-row justify-content-center">
            <?php foreach ($workshops_list as $index => $workshop): ?>
                <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch mb-4" id="workshop-<?= htmlspecialchars($workshop['id']) ?>">
                    <article class="service-item-card workshop-item-card">
                        
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
                            <div class="service-item-desc">
                                <?php 
                                    $paragraphs = preg_split('/\n\s*\n/', trim($workshop['desc']));
                                    foreach ($paragraphs as $para): 
                                ?>
                                    <p><?= nl2br(htmlspecialchars(trim($para))) ?></p>
                                <?php endforeach; ?>
                            </div>
                            
                            <!-- Main Reusable Button Component from common/button.php -->
                            <div class="service-item-actions workshop-item-actions">
                                <?php
                                    $btn_text    = 'Enquire Now';
                                    $btn_url     = '#serviceBookingModal';
                                    $btn_class   = 'Btn-Workshop-Card';
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
