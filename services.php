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

// 2. Service Page Hero Banner (Exact same layout as Gallery Banner)
include __DIR__ . '/service/servicebanner.php';

// 3. Full Service Cards (3-Column Grid, No Shadows, Enquire Buttons)
include __DIR__ . '/service/servicecards.php';

// 3. Frequently Asked Questions
include __DIR__ . '/home/faq.php';

// 4. Sacred Retreat CTA Banner
include __DIR__ . '/home/cta-banner.php';

// 5. Common Global Footer
include __DIR__ . '/common/footer.php';
?>
