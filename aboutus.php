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
$cta_url          = 'services';

// 1. Common Global Header
include __DIR__ . '/common/header.php';

// 2. Full-Height Hero Banner (No Slider, Matches Home Banner Aesthetics)
include __DIR__ . '/about-us/aboutusbanner.php';

// 2.5 Our Purpose & Philosophy Section

// 3. About The Healing Center (Introducing the Center & Sanctuary)
include __DIR__ . '/about-us/aboutthehealing.php';

// 4. Our Purpose Banner Section
include __DIR__ . '/about-us/aboutourpurpose.php';

// 5. Holistic Philosophy 4-Card Section (White Background)
include __DIR__ . '/about-us/aboutusphylosophy.php';

// 6. Individual Journey Approach Section (Left Content | Right Image)
include __DIR__ . '/about-us/aboutapproach.php';

// 7. Mission & Vision 2-Card Fixed-Height Section
include __DIR__ . '/about-us/aboutvisionmission.php';



// 7. Common Global Footer
include __DIR__ . '/common/footer.php';
?>