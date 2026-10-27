<?php
/**
 * ==============================================================================
 * About Us Page - SS Healing Rays
 * ==============================================================================
 */

// Page-level configuration variables
$page_title       = 'About Us | SS Healing Rays';
$page_description = 'Discover the mission, certified master healers, and sacred philosophy behind SS Healing Rays.';
$current_page     = 'about';
$cta_text         = 'Explore Services';
$cta_url          = 'services.php';

// 1. Common Global Header
include __DIR__ . '/common/header.php';

// 2. Full-Height Hero Banner (No Slider, Matches Home Banner Aesthetics)
include __DIR__ . '/about-us/aboutusbanner.php';

// 3. About The Healing Center (Introducing the Center & Sanctuary)
include __DIR__ . '/about-us/aboutthehealing.php';
include __DIR__ . '/home/services.php';

// 4. Meet Our Healers & Guides
include __DIR__ . '/home/team.php';

// 5. Sacred Retreat CTA Banner
include __DIR__ . '/home/cta-banner.php';

// 6. Common Global Footer
include __DIR__ . '/common/footer.php';
?>