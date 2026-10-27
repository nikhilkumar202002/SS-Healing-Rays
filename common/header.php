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
$cta_url          = $cta_url ?? 'services.php';
$phone_number     = $phone_number ?? '+91 98765 43210';
$phone_tel        = preg_replace('/[^0-9+]/', '', $phone_number);

// Categorized Services Menu (4 Sacred Pillars with Hierarchical Tree Structure)
$services_categories = [
    'healings' => [
        'title'    => 'I. Healings',
        'subtitle' => '11 Sacred Modalities',
        'icon'     => 'bi bi-heart-pulse',
        'url'      => 'services.php',
        'items'    => [
            ['label' => '1. Reiki Healing', 'url' => 'services.php'],
            ['label' => '2. Crystal Healing', 'url' => 'services.php'],
            ['label' => '3. Angel Healing', 'url' => 'services.php'],
            ['label' => '4. Energy healing', 'url' => 'services.php'],
            ['label' => '5. EFT', 'url' => 'services.php'],
            ['label' => '6. Counselling', 'url' => 'services.php'],
            ['label' => '7. Trauma Healing', 'url' => 'services.php'],
            ['label' => '8. Personal Transformation Healing', 'url' => 'services.php'],
            ['label' => '9. Meditations', 'url' => 'services.php'],
            ['label' => '10. Tarot Card reading', 'url' => 'services.php'],
            ['label' => '11. Therapeutic Yoga', 'url' => 'services.php'],
        ]
    ],
    'training' => [
        'title'    => 'II. Training',
        'subtitle' => '4 Certified Programs',
        'icon'     => 'bi bi-mortarboard',
        'url'      => 'training.php',
        'items'    => [
            ['label' => '1. Reiki- Shiki Ryoho & Karuna Reiki- All levels', 'url' => 'training.php#program-reiki'],
            ['label' => '2. Crystal Therapy', 'url' => 'training.php#program-crystal'],
            ['label' => '3. Angel Therapy', 'url' => 'training.php#program-angel'],
            ['label' => '4. EFT', 'url' => 'training.php#program-eft'],
        ]
    ],
    'courses' => [
        'title'    => 'III. COURSES on Wellness',
        'subtitle' => 'Sacred Knowledge',
        'icon'     => 'bi bi-journal-bookmark',
        'url'      => 'contact.php',
        'items'    => [
            ['label' => '1. Spandan', 'url' => 'contact.php'],
            ['label' => '2. Chetan', 'url' => 'contact.php'],
        ]
    ],
    'workshops' => [
        'title'    => 'IV. Workshops',
        'subtitle' => '12 Healing Circles',
        'icon'     => 'bi bi-sun',
        'url'      => 'workshop.php',
        'items'    => [
            ['label' => '1. Energy Reset', 'url' => 'workshop.php#workshop-energy-reset'],
            ['label' => '2. Language of crystals', 'url' => 'workshop.php#workshop-language-of-crystals'],
            ['label' => '3. Gratitude', 'url' => 'workshop.php#workshop-gratitude'],
            ['label' => '4. Loving Yourself', 'url' => 'workshop.php#workshop-loving-yourself'],
            ['label' => '5. Breath work', 'url' => 'workshop.php#workshop-breath-work'],
            ['label' => '6. Mudras', 'url' => 'workshop.php#workshop-mudras'],
            ['label' => '7. Relaxation', 'url' => 'workshop.php#workshop-relaxation'],
            ['label' => '8. Money manifestation', 'url' => 'workshop.php#workshop-money-manifestation'],
            ['label' => '9. Energy Routine', 'url' => 'workshop.php#workshop-energy-routine'],
            ['label' => '10. Abundance program', 'url' => 'workshop.php#workshop-abundance-program'],
            ['label' => '11. Reprogram with meditation', 'url' => 'workshop.php#workshop-reprogram-with-meditation'],
            ['label' => '12. Colour meditation', 'url' => 'workshop.php#workshop-colour-meditation'],
        ]
    ]
];

$is_home = ($current_page === 'home');

// Navigation items array (centralized & customizable per page)
$nav_items = $nav_items ?? [
    'home' => [
        'label' => 'Home',
        'url'   => 'index.php',
    ],
    'about' => [
        'label' => 'About Us',
        'url'   => 'aboutus.php',
    ],
    'services' => [
        'label'      => 'Services',
        'url'        => 'services.php',
        'categories' => $services_categories,
    ],
    'gallery' => [
        'label' => 'Gallery',
        'url'   => 'gallery.php',
    ],
    'testimonials' => [
        'label' => 'Stories',
        'url'   => $is_home ? '#testimonials' : 'index.php#testimonials',
    ],
    'contact' => [
        'label' => 'Contact',
        'url'   => 'contact.php',
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

    <!-- About The Center Component Custom Styles -->
    <link rel="stylesheet" href="assets/css/aboutthehealing.css">

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

    <!-- Gallery Page Hero Banner Custom Styles -->
    <link rel="stylesheet" href="assets/css/gallerybanner.css">

    <!-- Service Page Hero Banner Custom Styles -->
    <link rel="stylesheet" href="assets/css/servicebanner.css">

    <!-- Training Page Hero Banner Custom Styles -->
    <link rel="stylesheet" href="assets/css/trainingbanner.css">

    <!-- Workshop Page Hero Banner Custom Styles -->
    <link rel="stylesheet" href="assets/css/workshopbanner.css">

    <!-- Full Service Cards 3-Column Grid Styles -->
    <link rel="stylesheet" href="assets/css/servicecards.css">

    <!-- Training Programs Alternating 4-Row Section Styles -->
    <link rel="stylesheet" href="assets/css/trainingcards.css">

    <!-- Masonry Gallery Grid & Lightbox Styles -->
    <link rel="stylesheet" href="assets/css/galleryimages.css">

    <!-- Frequently Asked Questions (FAQ) Accordion Styles -->
    <link rel="stylesheet" href="assets/css/faq.css">

    <!-- Contact & Booking Section Custom Styles -->
    <link rel="stylesheet" href="assets/css/contact.css">

    <!-- Reusable Footer Island Custom Styles -->
    <link rel="stylesheet" href="assets/css/footer.css">
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
                                $hasCategories = !empty($item['categories']);
                                $hasChildren = !empty($item['children']);
                            ?>
                            <?php if ($hasCategories): ?>
                                <li class="nav-item dropdown services-dropdown-item">
                                    <a class="nav-link dropdown-toggle <?= $isActive ? 'active' : '' ?>" 
                                       href="<?= htmlspecialchars($item['url']) ?>" 
                                       id="servicesMegaMenuToggle"
                                       role="button">
                                        <span><?= htmlspecialchars($item['label']) ?></span>
                                        <svg class="nav-arrow-icon" width="11" height="11" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                        </svg>
                                    </a>
                                    
                                    <!-- Services Tree-by-Tree Dropdown Menu -->
                                    <div class="dropdown-menu services-tree-dropdown shadow-lg" aria-labelledby="servicesMegaMenuToggle">
                                        <div class="tree-menu-container">
                                            
                                            <!-- Main Sub-Menus List (Positioned Directly Over/Under Services) -->
                                            <ul class="tree-main-pillars-list list-unstyled m-0 p-0">
                                                <?php foreach ($item['categories'] as $catKey => $cat): ?>
                                                    <li class="tree-pillar-item" data-pillar="<?= htmlspecialchars($catKey) ?>">
                                                        
                                                        <a href="<?= htmlspecialchars($cat['url'] ?? $item['url']) ?>" class="tree-pillar-trigger">
                                                            <span class="tree-pillar-icon-box">
                                                                <i class="<?= htmlspecialchars($cat['icon'] ?? 'bi bi-stars') ?>"></i>
                                                            </span>
                                                            <div class="tree-pillar-meta">
                                                                <span class="tree-pillar-title"><?= htmlspecialchars($cat['title']) ?></span>
                                                                <?php if (!empty($cat['subtitle'])): ?>
                                                                    <span class="tree-pillar-sub"><?= htmlspecialchars($cat['subtitle']) ?></span>
                                                                <?php endif; ?>
                                                            </div>
                                                            <span class="tree-pillar-chevron" aria-hidden="true">
                                                                <svg width="12" height="12" viewBox="0 0 16 16" fill="currentColor">
                                                                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                                                                </svg>
                                                            </span>
                                                        </a>

                                                        <!-- Tree Structure Menu Branch (Displays when hovering this sub-menu) -->
                                                        <div class="tree-subpanel-wrap">
                                                            <div class="tree-subpanel-inner">
                                                                
                                                                <!-- Branch Title Banner -->
                                                                <div class="tree-branch-header">
                                                                    <span class="tree-branch-pillar-name"><?= htmlspecialchars($cat['title']) ?></span>
                                                                    <span class="tree-branch-count"><?= count($cat['items']) ?> Offerings</span>
                                                                </div>

                                                                <!-- Hierarchical Tree Branch System -->
                                                                <div class="tree-branch-hierarchy <?= ($catKey === 'workshops') ? 'tree-multi-column' : '' ?>">
                                                                    <div class="tree-trunk-stem" aria-hidden="true"></div>

                                                                    <ul class="tree-nodes-list list-unstyled m-0 p-0">
                                                                        <?php foreach ($cat['items'] as $sub): ?>
                                                                            <?php
                                                                                $raw_label = $sub['label'];
                                                                                $sub_num   = '';
                                                                                $sub_text  = $raw_label;
                                                                                if (preg_match('/^(\d+)\.\s*(.*)$/', $raw_label, $m)) {
                                                                                    $sub_num  = str_pad($m[1], 2, '0', STR_PAD_LEFT);
                                                                                    $sub_text = $m[2];
                                                                                }
                                                                            ?>
                                                                            <li class="tree-node-item">
                                                                                <a href="<?= htmlspecialchars($sub['url']) ?>" class="tree-node-link">
                                                                                    <span class="tree-branch-arm" aria-hidden="true"></span>
                                                                                    <span class="tree-node-bullet" aria-hidden="true"></span>
                                                                                    <?php if (!empty($sub_num)): ?>
                                                                                        <span class="tree-node-num"><?= htmlspecialchars($sub_num) ?></span>
                                                                                    <?php endif; ?>
                                                                                    <span class="tree-node-title"><?= htmlspecialchars($sub_text) ?></span>
                                                                                </a>
                                                                            </li>
                                                                        <?php endforeach; ?>
                                                                    </ul>
                                                                </div>

                                                                <!-- Sub-branch Explore Link -->
                                                                <div class="tree-branch-footer">
                                                                    <a href="<?= htmlspecialchars($cat['url'] ?? $item['url']) ?>" class="tree-branch-explore-link">
                                                                        <span>Explore <?= htmlspecialchars($cat['title']) ?></span>
                                                                        <i class="bi bi-arrow-right"></i>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                        </div>

                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>

                                            <!-- Dropdown Footer -->
                                            <div class="tree-dropdown-footer">
                                                <a href="services.php" class="tree-footer-all-link">
                                                    <span>View All Offerings</span>
                                                    <i class="bi bi-arrow-right"></i>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                            <?php elseif ($hasChildren): ?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle <?= $isActive ? 'active' : '' ?>" 
                                       href="<?= htmlspecialchars($item['url']) ?>" 
                                       role="button" 
                                       data-bs-toggle="dropdown" 
                                       aria-expanded="false">
                                        <span><?= htmlspecialchars($item['label']) ?></span>
                                        <svg class="nav-arrow-icon" width="11" height="11" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                        </svg>
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
                                </li>
                            <?php else: ?>
                                <li class="nav-item">
                                    <a class="nav-link <?= $isActive ? 'active' : '' ?>" 
                                       href="<?= htmlspecialchars($item['url']) ?>"
                                       <?= $isActive ? 'aria-current="page"' : '' ?>>
                                        <span><?= htmlspecialchars($item['label']) ?></span>
                                    </a>
                                </li>
                            <?php endif; ?>
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
                        include __DIR__ . '/button.php';
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
                <?php if (!empty($item['categories'])): ?>
                    <li class="nav-item">
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="<?= htmlspecialchars($item['url']) ?>" 
                               class="nav-link flex-grow-1 <?= $isActive ? 'active' : '' ?>"
                               data-bs-dismiss="offcanvas">
                                <span><?= htmlspecialchars($item['label']) ?></span>
                            </a>
                            <button class="btn btn-link text-muted p-2" 
                                    type="button" 
                                    data-bs-toggle="collapse" 
                                    data-bs-target="#mobileServicesCollapse" 
                                    aria-expanded="false" 
                                    aria-controls="mobileServicesCollapse" 
                                    aria-label="Toggle Services Menu">
                                <svg class="mobile-nav-arrow" width="13" height="13" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                </svg>
                            </button>
                        </div>
                        
                        <div class="collapse mobile-services-collapse" id="mobileServicesCollapse">
                            <div class="mobile-services-body p-2 mt-1">
                                
                                <!-- I. Healings -->
                                <div class="mobile-pillar-group mb-3">
                                    <h6 class="mobile-pillar-heading"><?= htmlspecialchars($item['categories']['healings']['title']) ?></h6>
                                    <ul class="mobile-sublinks-list">
                                        <?php foreach ($item['categories']['healings']['items'] as $sub): ?>
                                            <?php
                                                $raw_label = $sub['label'];
                                                $sub_num   = '';
                                                $sub_text  = $raw_label;
                                                if (preg_match('/^(\d+)\.\s*(.*)$/', $raw_label, $m)) {
                                                    $sub_num  = str_pad($m[1], 2, '0', STR_PAD_LEFT);
                                                    $sub_text = $m[2];
                                                }
                                            ?>
                                            <li>
                                                <a href="<?= htmlspecialchars($sub['url']) ?>" class="mobile-sublink" data-bs-dismiss="offcanvas">
                                                    <?php if (!empty($sub_num)): ?><span class="mega-num"><?= htmlspecialchars($sub_num) ?></span><?php endif; ?>
                                                    <span class="mega-text"><?= htmlspecialchars($sub_text) ?></span>
                                                </a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>

                                <!-- II. Training -->
                                <div class="mobile-pillar-group mb-3">
                                    <h6 class="mobile-pillar-heading"><?= htmlspecialchars($item['categories']['training']['title']) ?></h6>
                                    <ul class="mobile-sublinks-list">
                                        <?php foreach ($item['categories']['training']['items'] as $sub): ?>
                                            <?php
                                                $raw_label = $sub['label'];
                                                $sub_num   = '';
                                                $sub_text  = $raw_label;
                                                if (preg_match('/^(\d+)\.\s*(.*)$/', $raw_label, $m)) {
                                                    $sub_num  = str_pad($m[1], 2, '0', STR_PAD_LEFT);
                                                    $sub_text = $m[2];
                                                }
                                            ?>
                                            <li>
                                                <a href="<?= htmlspecialchars($sub['url']) ?>" class="mobile-sublink" data-bs-dismiss="offcanvas">
                                                    <?php if (!empty($sub_num)): ?><span class="mega-num"><?= htmlspecialchars($sub_num) ?></span><?php endif; ?>
                                                    <span class="mega-text"><?= htmlspecialchars($sub_text) ?></span>
                                                </a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>

                                <!-- III. Courses on Wellness -->
                                <div class="mobile-pillar-group mb-3">
                                    <h6 class="mobile-pillar-heading"><?= htmlspecialchars($item['categories']['courses']['title']) ?></h6>
                                    <ul class="mobile-sublinks-list">
                                        <?php foreach ($item['categories']['courses']['items'] as $sub): ?>
                                            <?php
                                                $raw_label = $sub['label'];
                                                $sub_num   = '';
                                                $sub_text  = $raw_label;
                                                if (preg_match('/^(\d+)\.\s*(.*)$/', $raw_label, $m)) {
                                                    $sub_num  = str_pad($m[1], 2, '0', STR_PAD_LEFT);
                                                    $sub_text = $m[2];
                                                }
                                            ?>
                                            <li>
                                                <a href="<?= htmlspecialchars($sub['url']) ?>" class="mobile-sublink" data-bs-dismiss="offcanvas">
                                                    <?php if (!empty($sub_num)): ?><span class="mega-num"><?= htmlspecialchars($sub_num) ?></span><?php endif; ?>
                                                    <span class="mega-text"><?= htmlspecialchars($sub_text) ?></span>
                                                </a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>

                                <!-- IV. Workshops -->
                                <div class="mobile-pillar-group">
                                    <h6 class="mobile-pillar-heading"><?= htmlspecialchars($item['categories']['workshops']['title']) ?></h6>
                                    <ul class="mobile-sublinks-list">
                                        <?php foreach ($item['categories']['workshops']['items'] as $sub): ?>
                                            <?php
                                                $raw_label = $sub['label'];
                                                $sub_num   = '';
                                                $sub_text  = $raw_label;
                                                if (preg_match('/^(\d+)\.\s*(.*)$/', $raw_label, $m)) {
                                                    $sub_num  = str_pad($m[1], 2, '0', STR_PAD_LEFT);
                                                    $sub_text = $m[2];
                                                }
                                            ?>
                                            <li>
                                                <a href="<?= htmlspecialchars($sub['url']) ?>" class="mobile-sublink" data-bs-dismiss="offcanvas">
                                                    <?php if (!empty($sub_num)): ?><span class="mega-num"><?= htmlspecialchars($sub_num) ?></span><?php endif; ?>
                                                    <span class="mega-text"><?= htmlspecialchars($sub_text) ?></span>
                                                </a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a href="<?= htmlspecialchars($item['url']) ?>" 
                           class="nav-link <?= $isActive ? 'active' : '' ?>"
                           data-bs-dismiss="offcanvas">
                            <span><?= htmlspecialchars($item['label']) ?></span>
                            <i class="bi bi-chevron-right small text-muted"></i>
                        </a>
                    </li>
                <?php endif; ?>
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
                include __DIR__ . '/button.php';
            ?>
        </div>
    </div>
</div>