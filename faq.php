<?php
/**
 * FAQ Section - SS Healing Rays
 * Classic Accordion Layout with 8 Questions and Answers
 * Clean, borderless and shadowless aesthetic.
 */

$faq_pretitle        = $faq_pretitle ?? 'FREQUENTLY ASKED QUESTIONS';
$faq_title_1         = $faq_title_1 ?? 'Answers to Your';
$faq_title_2         = $faq_title_2 ?? 'Sacred';
$faq_title_highlight = $faq_title_highlight ?? 'Inquiries';
$faq_subtitle        = $faq_subtitle ?? 'Explore essential insights into our energy healing modalities, session preparations, and holistic sanctuary experiences.';

$faq_items = [
    [
        'question' => 'What can I expect during my first energy healing session?',
        'answer'   => 'Your first session begins with a gentle, heart-centered consultation to discuss your personal intentions, physical comfort, and emotional state. You will rest comfortably and fully clothed in our tranquil sanctuary while our certified master practitioners channel universal life force energy. Most guests report feeling deep warmth, light tingling, and an immediate release of accumulated tension.',
    ],
    [
        'question' => 'How does Chakra Balancing work, and how do I know if mine are blocked?',
        'answer'   => 'Chakras are seven core subtle energy vortexes that govern physical vitality and emotional harmony. When chronic stress, unresolved emotions, or burnout occur, these energy centers can become sluggish or congested. Common indicators include fatigue, anxiety, brain fog, and emotional sensitivity. Through sacred pendulum dowsing, therapeutic frequencies, and targeted crystal work, we restore free-flowing energetic equilibrium.',
    ],
    [
        'question' => 'Are distance or virtual energy healing sessions as effective as in-person visits?',
        'answer'   => 'Yes, absolutely. Universal energy and subtle consciousness are not constrained by physical space or geographic distance. During a remote session, our practitioners tune into your individual energy field through deep intentional presence and sacred resonance. Clients across the globe regularly report the exact same profound warmth, clarity, emotional shifts, and renewal experienced in person.',
    ],
    [
        'question' => 'What should I wear or prepare prior to attending my appointment?',
        'answer'   => 'We recommend wearing loose, comfortable clothing made of natural, breathable fabrics such as cotton or linen. Please stay well-hydrated throughout the day and avoid heavy meals or high doses of caffeine within two hours of your appointment. Arriving with an open mind, gentle breath, and quiet heart allows you to receive the optimal benefits of the healing frequencies.',
    ],
    [
        'question' => 'What is Sound Healing with Tibetan Singing Bowls, and how does it heal?',
        'answer'   => 'Sacred Tibetan singing bowls and precision-tuned quartz crystals produce rich harmonic vibrations that entrain brainwaves from high-stress beta states into restorative theta and delta meditative states. Acoustic resonance travels directly through the water molecules in your cells, clearing subconscious mental chatter, soothing the nervous system, and restoring cellular coherence.',
    ],
    [
        'question' => 'How many sessions will I need to experience lasting transformation?',
        'answer'   => 'Many clients experience remarkable lightness, emotional relief, and peaceful clarity from their very first visit. For longstanding patterns, chronic stress, or deep soul transformation, we generally recommend a foundational series of 3 to 5 sessions spaced over several weeks to consolidate and sustain your new vibrational baseline.',
    ],
    [
        'question' => 'Can holistic energy healing complement conventional medical treatments?',
        'answer'   => 'Energy therapies such as Reiki, crystal alignment, and sound immersion are holistic complementary practices designed to support and enhance your total well-being alongside conventional medical care. While energy healing accelerates natural recuperation and mental resilience, it is not a replacement for professional medical diagnosis or prescribed medical therapies.',
    ],
    [
        'question' => 'How do I schedule a session or register for upcoming healing workshops?',
        'answer'   => 'You can easily reserve your private appointment or save a seat for our upcoming weekend workshops through our online booking button, by WhatsApp, or via direct phone consultation. Our compassionate care team is always delighted to assist you in selecting the ideal modality for your unique healing path.',
    ],
];
?>

<section class="faq-section position-relative" id="faq" aria-label="Frequently Asked Questions">
    <div class="container">
        
        <!-- 1. Section Header -->
        <div class="faq-header text-center mx-auto">
            <p class="faq-pretitle"><?= htmlspecialchars($faq_pretitle) ?></p>
            <h2 class="faq-heading">
                <span class="d-block"><?= htmlspecialchars($faq_title_1) ?></span>
                <span class="d-block">
                    <?= htmlspecialchars($faq_title_2) ?>
                    <span class="title-highlight"><?= htmlspecialchars($faq_title_highlight) ?></span>
                </span>
            </h2>
        
        </div>

        <!-- 2. Classic Accordion (No Border, No Box Shadow) -->
        <div class="faq-accordion-wrapper mx-auto">
            <div class="accordion accordion-flush" id="faqAccordion">
                <?php foreach ($faq_items as $index => $item): 
                    $collapse_id = "faqCollapse_" . $index;
                    $heading_id  = "faqHeading_" . $index;
                    // First item open by default for classic accordion clarity
                    $is_first    = ($index === 0);
                ?>
                    <div class="accordion-item faq-item">
                        <h3 class="accordion-header" id="<?= $heading_id ?>">
                            <button class="accordion-button faq-button <?= $is_first ? '' : 'collapsed' ?>" 
                                    type="button" 
                                    data-bs-toggle="collapse" 
                                    data-bs-target="#<?= $collapse_id ?>" 
                                    aria-expanded="<?= $is_first ? 'true' : 'false' ?>" 
                                    aria-controls="<?= $collapse_id ?>">
                                <span class="faq-question-text"><?= htmlspecialchars($item['question']) ?></span>
                                <span class="faq-toggle-icon" aria-hidden="true">
                                    <i class="bi bi-chevron-down"></i>
                                </span>
                            </button>
                        </h3>
                        <div id="<?= $collapse_id ?>" 
                             class="accordion-collapse collapse <?= $is_first ? 'show' : '' ?>" 
                             aria-labelledby="<?= $heading_id ?>" 
                             data-bs-parent="#faqAccordion">
                            <div class="accordion-body faq-body">
                                <p class="faq-answer-text mb-0">
                                    <?= htmlspecialchars($item['answer']) ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- 3. Bottom Help Assistance Note -->
        <div class="faq-contact-help text-center mx-auto">
            <p class="mb-0 text-secondary">
                Have a unique question not listed here? 
                <a href="#contact" class="faq-help-link">Speak with our sanctuary guide</a> 
                or reach us directly via WhatsApp.
            </p>
        </div>

    </div>
</section>
