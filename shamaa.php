<?php
/**
 * ==============================================================================
 * SHAMAA - The Yoga & Mindful Movement Sanctuary
 * Dedicated Brand & Wellness Page - SS Healing Rays
 * ==============================================================================
 */

// Page-level configuration variables
$page_title       = 'SHAMAA | Where Yogic Wisdom Meets the Art of Healing | SS Healing Rays';
$page_description = 'Therapeutic Yoga and integrated wellness practices, thoughtfully adapted to the individual at SHAMAA.';
$current_page     = 'shamaa';
$cta_text         = 'Book Clarity Call';
$cta_url          = '#shamaaHeroBanner';

$pro_phone_code = '+91';
$pro_phone      = '9966010981';
$whatsapp_phone = '9966010981';
$pro_email      = 'contact@sshealingrays.com';

// Default social values
$social_fb       = 'sshealingrays';
$social_insta    = 'sravantiheals';
$social_x        = 'sshealingrays';
$social_wa       = '9966010981';
$social_linkedin = 'sshealingrays';
$social_youtube  = 'sshealingrays';
$social_threads  = 'sshealingrays';

// WhatsApp URLs
$whatsapp_url_coaching = 'https://wa.me/' . $whatsapp_phone . '?text=' . rawurlencode('Hi, I would like to enquire about SHAMAA Wellness.');
$whatsapp_url_wellness = 'https://wa.me/' . $whatsapp_phone . '?text=' . rawurlencode('Hi, I would like to book a Clarity Call for SHAMAA Therapeutic Yoga.');
$whatsapp_url_programs = 'https://wa.me/' . $whatsapp_phone . '?text=' . rawurlencode('Hi, I would like to explore SHAMAA programmes.');

// Set current user (practitioner) for reuse across included files
$current_user = 'shamaa';

// 1. Common Global Header
include __DIR__ . '/common/header.php';

// 2. SHAMAA Dedicated Hero Banner
include __DIR__ . '/products/shamaabanner.php';

// 3. Common Booking Modal & Footer
include __DIR__ . '/common/popupbookingform.php';
include __DIR__ . '/common/footer.php';
?>