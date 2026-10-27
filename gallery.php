<?php
/**
 * ==============================================================================
 * Sacred Gallery Page - SS Healing Rays
 * ==============================================================================
 */

// Page-level configuration variables
$page_title       = 'Sacred Gallery | SS Healing Rays';
$page_description = 'Explore 65+ authentic glimpses of sacred healing circles, guided meditations, retreats, and spiritual awakenings at SS Healing Rays.';
$current_page     = 'gallery';
$cta_text         = 'Book a Session';
$cta_url          = 'contact.php';

// 1. Common Global Header
include __DIR__ . '/common/header.php';

// 2. Gallery Hero Banner
include __DIR__ . '/galley/gallerybanner.php';

// 3. Full Masonry Photo Gallery Collection (All Images + Lightbox)
include __DIR__ . '/galley/galleryimages.php';

// 4. Common Global Footer
include __DIR__ . '/common/footer.php';
?>
