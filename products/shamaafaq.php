<?php
/**
 * ==============================================================================
 * SHAMAA - Frequently Asked Questions (Section 6)
 * Dedicated Component for shamaa.php
 * ==============================================================================
 */

$faq_pretitle        = 'FREQUENTLY ASKED QUESTIONS';
$faq_title_1         = 'Frequently Asked';
$faq_title_2         = '';
$faq_title_highlight = 'Questions';
$faq_subtitle        = 'A Few Things to Know Before Beginning the SHAMAA Journey.';
$faq_section_id      = 'shamaaFaq';
$faq_anchor_id       = 'wellnessFaq';
$faq_prefix          = 'shamaaFaq';

$faq_items = [
    [
        'question' => 'Is yoga suitable for someone who is afraid or hesitant to begin?',
        'answer'   => 'Yes. SHAMAA’s Therapeutic Yoga approach meets participants at their current comfort and ability level. Prior yoga experience is not required. The first step may be a simple supported movement or chair-based practice.',
    ],
    [
        'question' => 'What if I cannot sit on the floor or lift my arms comfortably?',
        'answer'   => 'The practice can be adapted. Depending on individual needs, comfort and safety, sessions may begin with supported cot/bed-based or chair-based movements. The mat can be introduced when appropriate. No one is expected to force a movement or posture.',
    ],
    [
        'question' => 'Is there an age limit for joining?',
        'answer'   => 'SHAMAA has guided participants ranging from 13 to 75 years of age. Suitability depends on individual health, mobility, needs and the practices selected—not age alone.',
    ],
    [
        'question' => 'Are sessions online or offline?',
        'answer'   => 'SHAMAA currently conducts guided online sessions. Participants can practise from home, subject to the session format and available schedule.',
    ],
    [
        'question' => 'Do I need previous yoga experience?',
        'answer'   => 'No. Beginners are welcome. Sessions begin with an understanding of the participant’s experience, comfort and goals.',
    ],
    [
        'question' => 'How is SHAMAA different from a regular yoga class?',
        'answer'   => 'Therapeutic Yoga is central to the SHAMAA approach. Rather than expecting everyone to follow the same postures, practices are adapted to the individual. Yogic techniques may be integrated with breathwork, mudras, meditation, relaxation and relevant healing approaches.',
    ],
    [
        'question' => 'What if I have a medical condition or breathing difficulty?',
        'answer'   => 'Please share relevant health information before beginning. Practices must be selected according to individual suitability. People with significant medical conditions, cardiac or respiratory concerns, recent procedures or unexplained symptoms should consult their treating healthcare professional before starting or changing an exercise programme. SHAMAA sessions are complementary wellness support and do not replace medical care.',
    ],
    [
        'question' => 'Are session timings flexible for participants in different time zones?',
        'answer'   => 'Yes. We understand that participants may be joining from different parts of the world. Session timings can be discussed and adjusted, depending on your preferred time zone and our mutual availability. Please share your preferred timings with us, and we will try to accommodate them wherever possible.',
    ],
    [
        'question' => 'What is a clarity call?',
        'answer'   => 'A clarity call is an initial conversation to understand a person’s concerns, expectations and comfort level, explain the SHAMAA approach and discuss whether a suitable session or demonstration may be appropriate. It is an opportunity to ask questions before deciding to begin.',
    ],
    [
        'question' => 'How can a session be booked?',
        'answer'   => 'Send a WhatsApp message to SHAMAA to request a clarity call, or use the existing enquiry form on the SS Healing Rays website. The SHAMAA team will respond with next steps and available session details.',
    ],
];

// Configure Bottom CTA
$faq_help_text  = 'Still have questions? Let’s find the right yogic practice for your comfort.';
$faq_cta_text   = 'Book a Clarity Call';
$faq_cta_url    = 'https://wa.me/919966010981?text=' . rawurlencode('Hi Sravanti, I would like to book a Clarity Call for SHAMAA Therapeutic Yoga & Wellness.');
$faq_cta_class  = 'Btn-Shamaa-Approach Btn-Shamaa-Clarity';
$faq_cta_attr   = 'target="_blank" rel="noopener noreferrer" title="Book a Clarity Call on WhatsApp"';

// Include the core styled Accordion FAQ component
include dirname(__DIR__) . '/home/faq.php';
