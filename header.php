<?php
/**
 * ==============================================================================
 * Reusable Header Component - SS Healing Rays (Bootstrap 5.3)
 * Layout: Left Side Menu | Center Brand Logo | Right Call-to-Action Button
 * ==============================================================================
 * 
 * Usage in any page:
 * ------------------------------------------------------------------------------
 * <?php
 *   $page_title   = 'Services | SS Healing Rays';
 *   $current_page = 'services'; // highlights active link
 *   include 'header.php';
 * ?>
 * <main>Your page content here</main>
 * <?php include 'footer.php'; ?>
 * ------------------------------------------------------------------------------
 */

// Configurable component variables (defaults can be overridden per page)
$page_title       = $page_title ?? 'SS Healing Rays | Holistic Wellness & Energy Healing';
$page_description = $page_description ?? 'Experience holistic healing, energy alignment, and inner peace with SS Healing Rays.';
$current_page     = $current_page ?? 'home';
$brand_name       = $brand_name ?? 'SS Healing Rays';
$brand_subtitle   = $brand_subtitle ?? 'A Sanctuary for Personal Growth';
$site_logo        = $site_logo ?? 'assets/logo/main-logo-white-border.png'; // Main logo with white border
$cta_text         = $cta_text ?? 'Explore Services';
$cta_url          = $cta_url ?? '#services';
$phone_number     = $phone_number ?? '+91 98765 43210';
$phone_tel        = preg_replace('/[^0-9+]/', '', $phone_number);

// Navigation items array (centralized & customizable per page)
$nav_items = $nav_items ?? [
    'home' => [
        'label' => 'Home',
        'url'   => 'index.php',
    ],
    'about' => [
        'label' => 'About Us',
        'url'   => '#about',
    ],
    'services' => [
        'label' => 'Services',
        'url'   => '#services',
        'children' => [
            ['label' => 'Reiki & Energy Healing', 'url' => '#reiki'],
            ['label' => 'Chakra Balancing', 'url' => '#chakra'],
            ['label' => 'Crystal Therapy', 'url' => '#crystal'],
            ['label' => 'Sound Meditation', 'url' => '#sound-healing'],
        ]
    ],
    'testimonials' => [
        'label' => 'Stories',
        'url'   => '#testimonials',
    ],
    'contact' => [
        'label' => 'Contact',
        'url'   => '#contact',
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($page_title) ?></title>
    <meta name="description" content="<?= htmlspecialchars($page_description) ?>">
    
    <!-- Favicon & Touch Icons -->
    <link rel="icon" type="image/png" href="<?= htmlspecialchars($site_logo) ?>">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?= htmlspecialchars($site_logo) ?>">
    
    <!-- Bootstrap 5.3 (Latest) CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Google Fonts: Marcellus, Playfair Display (Serif), Lato (Sans-Serif) & Outfit (Modern Display) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700&family=Marcellus&family=Outfit:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,600;1,700&display=swap" rel="stylesheet">
    
    <!-- Swiper 11 (Latest) Slider CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <!-- Header Component Custom Styles -->
    <link rel="stylesheet" href="assets/css/header.css">

    <!-- Hero Banner Swiper Custom Styles -->
    <link rel="stylesheet" href="assets/css/banner.css">

    <!-- Workshop / Healing Circle Custom Styles -->
    <link rel="stylesheet" href="assets/css/workshop.css">

    <!-- Healing Services Carousel Custom Styles -->
    <link rel="stylesheet" href="assets/css/services.css">

    <!-- Meet Our Team / Profile Cards Custom Styles -->
    <link rel="stylesheet" href="assets/css/team.css">

    <!-- Retreat CTA Full Banner Custom Styles -->
    <link rel="stylesheet" href="assets/css/cta-banner.css">

    <!-- Testimonials Bento Grid Custom Styles -->
    <link rel="stylesheet" href="assets/css/testimonials.css">

    <!-- Sacred Gallery 3x4 Grid Custom Styles -->
    <link rel="stylesheet" href="assets/css/gallery.css">

    <!-- Frequently Asked Questions (FAQ) Accordion Styles -->
    <link rel="stylesheet" href="assets/css/faq.css">

    <!-- Contact & Booking Section Custom Styles -->
    <link rel="stylesheet" href="assets/css/contact.css">
</head>
<body>


<!-- ==========================================================================
     Main Header (Bootstrap 5.3 Navbar with 3-Column Layout)
     Layout: Left Menu (Col 1) | Center Logo (Col 2) | Right CTA (Col 3)
     ========================================================================== -->
<header class="site-header sticky-top border-bottom" id="siteHeader">
    <nav class="navbar navbar-expand-lg p-0">
        <div class="container-fluid px-3 px-lg-4">
            <div class="row w-100 align-items-center g-0">
                
                <!-- 1. LEFT COLUMN: Menu & Navigation (Desktop + Mobile Offcanvas Toggler) -->
                <div class="col-3 col-lg-5 d-flex align-items-center">
                    <!-- Mobile Hamburger Button triggering Bootstrap Offcanvas -->
                    <button class="navbar-toggler border-0 p-1 d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileDrawer" aria-controls="mobileDrawer" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Desktop Navigation Menu -->
                    <ul class="navbar-nav desktop-nav-menu d-none d-lg-flex flex-row align-items-center gap-1 gap-xl-2 m-0 p-0" aria-label="Primary Site Navigation">
                        <?php foreach ($nav_items as $key => $item): ?>
                            <?php 
                                $isActive = ($current_page === $key);
                                $hasDropdown = !empty($item['children']);
                            ?>
                            <li class="nav-item <?= $hasDropdown ? 'dropdown' : '' ?>">
                                <?php if ($hasDropdown): ?>
                                    <a class="nav-link dropdown-toggle <?= $isActive ? 'active' : '' ?>" 
                                       href="<?= htmlspecialchars($item['url']) ?>" 
                                       role="button" 
                                       data-bs-toggle="dropdown" 
                                       aria-expanded="false">
                                        <span><?= htmlspecialchars($item['label']) ?></span>
                                    </a>
                                    <ul class="dropdown-menu shadow-sm">
                                        <?php foreach ($item['children'] as $child): ?>
                                            <li>
                                                <a class="dropdown-item" href="<?= htmlspecialchars($child['url']) ?>">
                                                    <?= htmlspecialchars($child['label']) ?>
                                                </a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php else: ?>
                                    <a class="nav-link <?= $isActive ? 'active' : '' ?>" 
                                       href="<?= htmlspecialchars($item['url']) ?>"
                                       <?= $isActive ? 'aria-current="page"' : '' ?>>
                                        <span><?= htmlspecialchars($item['label']) ?></span>
                                    </a>
                                <?php endif; ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- 2. CENTER COLUMN: Brand Logo (Exactly Centered in Grid) -->
                <div class="col-6 col-lg-2 text-center">
                    <a href="index.php" class="site-logo d-inline-block" aria-label="<?= htmlspecialchars($brand_name) ?> Home">
                        <?php if (!empty($site_logo)): ?>
                            <img src="<?= htmlspecialchars($site_logo) ?>" alt="<?= htmlspecialchars($brand_name) ?>" class="logo-image">
                        <?php else: ?>
                            <div class="d-flex flex-column align-items-center">
                                <span class="fs-5 fw-bold text-dark text-uppercase font-serif"><?= htmlspecialchars($brand_name) ?></span>
                                <small class="text-warning text-uppercase" style="font-size: 0.65rem; letter-spacing: 0.2em;"><?= htmlspecialchars($brand_subtitle) ?></small>
                            </div>
                        <?php endif; ?>
                    </a>
                </div>

                <!-- 3. RIGHT COLUMN: Call to Action (CTA) Button -->
                <div class="col-3 col-lg-5 d-flex justify-content-end align-items-center gap-2 gap-md-3">
                    <!-- Quick Contact Phone (Visible on large screens) -->
                    <a href="tel:<?= htmlspecialchars($phone_tel) ?>" class="header-phone-link d-none d-xl-inline-flex align-items-center gap-2" title="Call Us">
                        <i class="bi bi-telephone-fill"></i>
                        <span><?= htmlspecialchars($phone_number) ?></span>
                    </a>

                    <!-- Action CTA Button via common button.php -->
                    <?php
                        $btn_text    = $cta_text;
                        $btn_url     = $cta_url;
                        $btn_class   = 'Btn-Header';
                        $btn_id      = 'headerCtaBtn';
                        include __DIR__ . '/assets/common/button.php';
                    ?>
                </div>

            </div>
        </div>
    </nav>
</header>

<!-- Bootstrap 5 Offcanvas Mobile Navigation Drawer -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="mobileDrawer" aria-labelledby="mobileDrawerLabel">
    <div class="offcanvas-header border-bottom">
        <a href="index.php" class="d-flex align-items-center gap-2 text-decoration-none">
            <?php if (!empty($site_logo)): ?>
                <img src="<?= htmlspecialchars($site_logo) ?>" alt="<?= htmlspecialchars($brand_name) ?>" height="42" class="rounded-circle">
            <?php endif; ?>
            <div>
                <h5 class="offcanvas-title mb-0 fs-6 fw-bold text-heading" id="mobileDrawerLabel"><?= htmlspecialchars($brand_name) ?></h5>
                <small class="text-muted" style="font-size: 0.7rem;"><?= htmlspecialchars($brand_subtitle) ?></small>
            </div>
        </a>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    
    <div class="offcanvas-body d-flex flex-column justify-content-between p-3">
        <ul class="navbar-nav offcanvas-nav gap-1">
            <?php foreach ($nav_items as $key => $item): ?>
                <?php $isActive = ($current_page === $key); ?>
                <li class="nav-item">
                    <a href="<?= htmlspecialchars($item['url']) ?>" 
                       class="nav-link <?= $isActive ? 'active' : '' ?>">
                        <span><?= htmlspecialchars($item['label']) ?></span>
                        <i class="bi bi-chevron-right small text-muted"></i>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>

        <div class="pt-3 border-top">
            <a href="tel:<?= htmlspecialchars($phone_tel) ?>" class="d-flex align-items-center gap-2 text-decoration-none text-secondary mb-3 small">
                <i class="bi bi-telephone text-secondary-color"></i>
                <span><?= htmlspecialchars($phone_number) ?></span>
            </a>
            <?php
                $btn_text    = $cta_text;
                $btn_url     = $cta_url;
                $btn_class   = 'Btn-Header w-100 justify-content-between';
                $btn_id      = 'drawerCtaBtn';
                include __DIR__ . '/assets/common/button.php';
            ?>
        </div>
    </div>
</div>