<?php
/**
 * ==============================================================================
 * SS Healing Rays - Sanctuary for Personal Growth & Holistic Wellness
 * Main Landing Page (Index)
 * 
 * Component Architecture:
 *   - /common/ : Reusable site-wide components (header.php, footer.php, button.php)
 *   - /home/   : Homepage sections (banner, workshop, services, team, cta-banner, testimonials, gallery, faq, contact)
 * ==============================================================================
 */

// Page-level configuration variables
$page_title       = 'SS Healing Rays | Restore Your Natural Vitality & Inner Peace';
$page_description = 'Transformative energy healing, chakra alignment, and personalized holistic wellness sessions.';
$current_page     = 'home';
$cta_text         = 'Explore Services';
$cta_url          = '#services';

// 1. Common Global Header
include __DIR__ . '/common/header.php';

// 2. Homepage Hero Banner Slider
include __DIR__ . '/home/banner.php';

// 3. Homepage About & Workshop Section
include __DIR__ . '/home/workshop.php';

// 4. Homepage Healing Services Showcase
include __DIR__ . '/home/services.php';

// 5. Homepage Meet Our Healers & Team
include __DIR__ . '/home/team.php';

// 6. Homepage Impact & Statistics Counter
include __DIR__ . '/home/counter.php';

// 7. Homepage Retreat Call-to-Action Banner
include __DIR__ . '/home/cta-banner.php';

// 7. Homepage Testimonials Bento Grid
include __DIR__ . '/home/testimonials.php';

// 8. Homepage Sacred Dual Marquee Gallery
include __DIR__ . '/home/gallery.php';

// 9. Homepage Frequently Asked Questions
include __DIR__ . '/home/faq.php';

// 10. Homepage Consultation & Session Booking Form
include __DIR__ . '/home/contact.php';

// 11. Common Global Footer
include __DIR__ . '/common/footer.php';
?>
