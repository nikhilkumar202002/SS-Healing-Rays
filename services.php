<?php
/**
 * ==============================================================================
 * Holistic Healing Services - SS Healing Rays
 * ==============================================================================
 */

// Page-level configuration variables
$page_title       = 'Holistic Services & Sacred Healings | SS Healing Rays';
$page_description = 'Experience transformative energy healing, Reiki, EFT, trauma recovery, and certified holistic training sessions.';
$current_page     = 'services';
$cta_text         = 'Book Your Spot';
$cta_url          = 'contact.php';

// 1. Common Global Header
include __DIR__ . '/common/header.php';

// 2. Healing Services Carousel Showcase
include __DIR__ . '/home/services.php';

// 3. Frequently Asked Questions
include __DIR__ . '/home/faq.php';

// 4. Sacred Retreat CTA Banner
include __DIR__ . '/home/cta-banner.php';

// 5. Common Global Footer
include __DIR__ . '/common/footer.php';
?>
