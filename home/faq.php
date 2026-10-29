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

$faq_items = $faq_items ?? [
    [
        'question' => 'How can I choose the right healing approach for my needs?',
        'answer'   => 'You don’t need to make that decision on your own. During your clarity call, we discuss your concerns, understand your needs, and explore the approaches that may suit you best. You can then choose what feels comfortable and appropriate for you.',
    ],
    [
        'question' => 'Do I need to change my lifestyle or follow any specific beliefs?',
        'answer'   => 'No. Our practices do not require you to follow a particular belief system or make major lifestyle changes. We explain the purpose of each approach, its potential benefits, and its limitations so you can make an informed decision.',
    ],
    [
        'question' => 'What can I expect during a one-to-one healing session?',
        'answer'   => 'You will be offered a supportive, confidential, and non-judgmental space to share your concerns at your own pace. Your privacy is respected, and your personal information is handled confidentially. Each session is tailored to your needs and comfort level.',
    ],
    [
        'question' => 'How many sessions will I need to achieve my goals?',
        'answer'   => 'The number of sessions varies depending on your concerns, goals, and individual experience. Some people may notice changes early, while others may benefit from continued support. We review your progress together and discuss the next steps based on your needs.',
    ],
    [
        'question' => 'Can holistic energy healing complement conventional medical treatment?',
        'answer'   => 'Yes. Holistic energy practices may complement conventional care by supporting relaxation, stress management, and emotional wellbeing. However, they do not replace medical treatment, psychological care, or prescribed medication. Individual experiences vary, and we encourage you to continue consulting your qualified healthcare professionals.',
    ],
    [
        'question' => 'Can I benefit from energy healing sessions remotely?',
        'answer'   => 'Yes. You can access personalised distance healing sessions from the comfort of your home, with care and attention tailored to your needs. However, individual experiences vary.',
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

        <!-- 3. Bottom Clarity Call CTA -->
        <div class="faq-contact-help text-center mx-auto">
            <p class="faq-help-text">
                Still have questions? Let’s find the right support for you.
            </p>
            <div class="faq-help-action d-flex justify-content-center">
                <?php
                    $btn_text  = 'Book a Clarity Call';
                    $btn_url   = '#bookingModal';
                    $btn_class = 'Btn-Faq-Clarity';
                    $btn_attr  = 'data-bs-toggle="modal" data-bs-target="#bookingModal" aria-haspopup="dialog"';
                    include dirname(__DIR__) . '/common/button.php';
                ?>
            </div>
        </div>

    </div>
</section>
