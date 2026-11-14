<?php

$service_cards_pretitle = $service_cards_pretitle ?? 'SACRED OFFERINGS &amp; MODALITIES';
$service_cards_title    = $service_cards_title ?? 'Comprehensive <em>Holistic Services</em>';
$service_cards_subtitle = $service_cards_subtitle ?? 'Explore our tailored energy therapies, trauma recovery, and personal healing sessions held in a compassionate, non-judgmental sanctuary.';

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

$full_services_list = $full_services_list ?? [
    [
        'title' => 'Reiki Healing',
        'image' => resolve_service_img('assets/images/services/Reiki Healing.jpg'),
        'desc'  => "Reiki is a Japanese energy-healing practice that works with universal life force energy, the vital energy understood to flow through all living beings. Reiki Grandmasters Sreeparvathy and Sravanti offer personalised Reiki sessions using their training and experience, including appropriate advanced Reiki techniques.\n\nDuring a session, Reiki is channelled to support the flow and balance of energy. The practice works with the person's energy field (aura) and chakra system, helping address perceived energetic imbalances and support a greater sense of harmony, relaxation and overall well-being.",
        'url'   => 'contact.php?service=Reiki+Healing'
    ],
    [
        'title' => 'Crystal Healing & Crystal Spa',
        'image' => resolve_service_img('assets/images/services/Crystal Healing.jpg'),
        'desc'  => "Our crystal services include crystal healing, chakra-focused crystal sessions and crystal spa experiences. We select crystals according to the client's stated needs and the intention of the session, and may also curate personalised crystal sets.\n\nDuring in-person sessions, crystals may be placed on or around the body as appropriate. For online sessions, selected crystals can be couriered to the client with guidance on how to hold or place them, with distance support included where suitable. Personalised crystal grids can also be prepared and charged as part of selected services.",
        'url'   => 'contact.php?service=Crystal+Healing+and+Crystal+Spa'
    ],
    [
        'title' => 'Angel Healing',
        'image' => resolve_service_img('assets/images/services/Angel-Healing.jpg'),
        'desc'  => "Angel healing is a spiritual practice that may involve prayer, intention and guided connection with angels, archangels, guardian angels and spirit-animal symbolism. Sessions are personalised around the client's intentions and may be combined with energy-based practices.\n\nWhere appropriate, sessions may also include intuitive card-based guidance or reflective readings to help clients explore their questions, gain perspective and consider possible next steps. Cards are used as a tool for reflection and guidance, not guaranteed predictions.",
        'url'   => 'contact.php?service=Angel+Healing'
    ],
    [
        'title' => 'Energy Healing',
        'image' => resolve_service_img('assets/images/services/Energy healing.jpg'),
        'desc'  => "These sessions draw on traditional energy-work concepts, including the body's meridian and chakra systems. The approach and techniques are selected according to the individual's needs and the purpose of the session.",
        'url'   => 'contact.php?service=Energy+Healing'
    ],
    [
        'title' => 'EFT – Emotional Freedom Techniques',
        'image' => resolve_service_img('assets/images/services/EFT.jpg'),
        'desc'  => "EFT sessions combine focused conversation with gentle tapping on selected acupressure points while bringing attention to thoughts, feelings or experiences. After understanding the client's concern through an initial conversation, we use appropriate tapping statements and guided steps to support emotional awareness and coping.",
        'url'   => 'contact.php?service=EFT'
    ],
    [
        'title' => 'Counselling & Personal Guidance',
        'image' => resolve_service_img('assets/images/services/Counselling.jpg'),
        'desc'  => "A supportive one-to-one space to talk through personal concerns, gain perspective and explore practical next steps. As certified counsellors and EFT practitioners, we use attentive listening, relevant psychological and self-reflection tools, and a respectful, non-judgmental approach to help clients understand their concerns, consider new perspectives and identify practical next steps within the scope of our training.",
        'url'   => 'contact.php?service=Counselling+and+Personal+Guidance'
    ],
    [
        'title' => 'Trauma-Informed Support',
        'image' => resolve_service_img('assets/images/services/Trauma Healing.jpg'),
        'desc'  => "A personalised, supportive process for people navigating the effects of difficult or distressing experiences. Depending on the person's needs and comfort, sessions may draw on EFT, grounding, relaxation, crystal-based practices and other complementary well-being approaches.\n\nOur Mindset Reset approach may combine EFT, grounding, relaxation, energy-based practices and guided self-reflection to help clients recognise unhelpful patterns and develop more supportive responses. The work is paced collaboratively according to individual comfort and remains complementary to, not a replacement for, appropriate trauma-focused mental-health care.",
        'url'   => 'contact.php?service=Trauma-Informed+Support'
    ],
    [
        'title' => 'Personal Transformation Healing',
        'image' => resolve_service_img('assets/images/services/Personal Transformation.jpg'),
        'desc'  => "A tailored series of sessions for individuals who want to work on recurring personal challenges, strengthen self-awareness or move towards a meaningful personal goal. After a clarity conversation, we identify an appropriate combination of modalities and agree on a personalised approach.\n\nThe programme may combine more than one healing modality and focuses on building self-awareness, resilience and a constructive mindset, with agreed steps and continued guidance rather than a fixed sequence of techniques.",
        'url'   => 'contact.php?service=Personal+Transformation+Healing'
    ],
    [
        'title' => 'Guided Meditation & Alpha Meditation',
        'image' => resolve_service_img('assets/images/services/Guided Meditation.jpg'),
        'desc'  => "Guided meditation sessions include practices for relaxation, focus, self-awareness and inner reflection. Depending on the session, themes may draw on the five elements, nature, visualisation, deep relaxation or alpha meditation.\n\nWe offer one-to-one meditation guidance because not every style of meditation suits every person. After understanding the client's needs, comfort and experience, we suggest an appropriate practice and adapt it to the individual.",
        'url'   => 'contact.php?service=Guided+Meditation+and+Alpha+Meditation'
    ],
    [
        'title' => 'Tarot Reading',
        'image' => resolve_service_img('assets/images/services/Tarot Card Reading.jpg'),
        'desc'  => "Tarot is offered as a reflective guidance session using selected card decks to help clients explore a question, consider different perspectives and build awareness. It is not presented as a guaranteed prediction or a substitute for professional advice in health, legal or financial matters.",
        'url'   => 'contact.php?service=Tarot+Reading'
    ],
    [
        'title' => 'Therapeutic Yoga & Yoga-Based Healing',
        'image' => resolve_service_img('assets/images/services/Therapeutic Yoga.jpg'),
        'desc'  => "Personalised sessions combine appropriate yogic practices with a mindful, whole-person approach. Depending on the client's needs and abilities, sessions may include therapeutic asanas, breathwork, pranayama, mudras, relaxation and meditation.\n\nYou do not need to be a yoga practitioner or feel confident with asanas to begin. If you are hesitant, inflexible or unsure about getting onto a mat, we start where you are—with comfortable seated or chair-based practices, breath awareness, mudras and relaxation. As your comfort and confidence develop, we gradually introduce suitable mat-based practices at your pace. The aim is to make yoga approachable, adaptable and supportive, not intimidating.",
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
                    'Reiki Healing'                           => 'reiki-healing',
                    'Crystal Healing & Crystal Spa'           => 'crystal-healing',
                    'Crystal Healing'                         => 'crystal-healing',
                    'Angel Healing'                           => 'angel-healing',
                    'Energy Healing'                          => 'energy-healing',
                    'Energy healing'                          => 'energy-healing',
                    'EFT – Emotional Freedom Techniques'      => 'eft',
                    'EFT'                                     => 'eft',
                    'Counselling & Personal Guidance'         => 'counselling',
                    'Counselling'                             => 'counselling',
                    'Trauma-Informed Support'                 => 'trauma-healing',
                    'Trauma Healing'                          => 'trauma-healing',
                    'Personal Transformation Healing'         => 'personal-transformation',
                    'Guided Meditation & Alpha Meditation'    => 'meditations',
                    'Meditations'                             => 'meditations',
                    'Tarot Reading'                           => 'tarot-card-reading',
                    'Tarot Card reading'                      => 'tarot-card-reading',
                    'Therapeutic Yoga & Yoga-Based Healing'   => 'therapeutic-yoga',
                    'Therapeutic Yoga'                        => 'therapeutic-yoga',
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
                            <div class="service-item-desc">
                                <?php 
                                    $paragraphs = preg_split('/\n\s*\n/', trim($service['desc']));
                                    foreach ($paragraphs as $para): 
                                ?>
                                    <p><?= nl2br(htmlspecialchars(trim($para))) ?></p>
                                <?php endforeach; ?>
                            </div>
                            
                            <!-- Main Reusable Button Component from common/button.php -->
                            <div class="service-item-actions">
                                <?php
                                    $btn_text    = 'Enquire Now';
                                    $btn_url     = '#serviceBookingModal';
                                    $btn_class   = 'Btn-Card-Main w-100 justify-content-between';
                                    $clean_title = htmlspecialchars(html_entity_decode(strip_tags($service['title']), ENT_QUOTES, 'UTF-8'));
                                    $btn_attr    = 'data-bs-toggle="modal" data-bs-target="#serviceBookingModal" data-service-title="' . $clean_title . '" data-service-category="I. Healings" aria-label="Enquire about ' . $clean_title . '"';
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