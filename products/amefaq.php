<?php
/**
 * ==============================================================================
 * Âme Crystals & Sacred Products - Frequently Asked Questions
 * Dedicated Component for ame-crystals.php and products.php
 * ==============================================================================
 */

$faq_pretitle        = 'FREQUENTLY ASKED QUESTIONS';
$faq_title_1         = 'Frequently Asked';
$faq_title_2         = 'Crystal';
$faq_title_highlight = 'Questions';

$faq_items = [
    [
        'question' => 'How do I choose the right crystal?',
        'answer'   => "You don't need to know everything about crystals before choosing one. With every purchase from Âme, you can have a free 30-minute crystal consultation. We understand your needs and guide you towards suitable options.",
    ],
    [
        'question' => 'Should I choose a crystal based on my zodiac sign, Rashi or Nakshatra?',
        'answer'   => 'These can be useful reference points. We also consider your present concerns, intentions and individual requirements before recommending a crystal.',
    ],
    [
        'question' => 'How do I cleanse my crystals?',
        'answer'   => 'Different crystals may need different care methods. We provide guidance on suitable cleansing and maintenance for the crystals you purchase.',
    ],
    [
        'question' => 'What does it mean if my crystal breaks?',
        'answer'   => 'A broken crystal does not necessarily mean something negative has happened. Crystals can break due to physical impact, natural fractures or wear. Contact us and we can guide you on what to do next.',
    ],
    [
        'question' => 'Can I wear my crystal every day?',
        'answer'   => 'This depends on the particular stone, its physical properties and how you intend to use it. We will guide you on suitable usage and care.',
    ],
    [
        'question' => 'Do you offer customised combinations and crystal grids?',
        'answer'   => 'Yes. Based on your consultation and requirements, we can guide you on suitable combinations and create personalised crystal grids. Our custom grids are energised for 21 days before handover.',
    ],
    [
        'question' => 'What does lifelong support include?',
        'answer'   => 'We provide ongoing guidance on usage, cleansing and care. For Hyderabad customers, in-person re-tying or minor bracelet upkeep may also be possible, depending on the requirement.',
    ],
    [
        'question' => 'Can I get a consultation without purchasing?',
        'answer'   => 'The complimentary 30-minute consultation is offered with a purchase from Âme. For other consultation enquiries, please contact us to discuss availability and terms.',
    ],
];

// Include the styled Accordion FAQ component
include dirname(__DIR__) . '/home/faq.php';

