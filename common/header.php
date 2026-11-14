<?php

$page_title       = $page_title ?? 'SS Healing Rays | Holistic Wellness & Energy Healing';
$page_description = $page_description ?? 'Experience holistic healing, energy alignment, and inner peace with SS Healing Rays.';
$current_page     = $current_page ?? 'home';
$brand_name       = $brand_name ?? 'SS Healing Rays';
$brand_subtitle   = $brand_subtitle ?? 'A Sanctuary for Personal Growth';
$site_logo        = $site_logo ?? 'assets/logo/main-logo-white-border.png'; // Main logo with white border
$favicon_logo     = $favicon_logo ?? 'assets/logo/main-logo.png'; // Main logo for browser favicon
$cta_text         = $cta_text ?? 'Chat with us';
$cta_url          = $cta_url ?? 'https://wa.me/919000606792';
$phone_number_1   = '+91 90006 06792';
$phone_tel_1      = '+919000606792';
$phone_number_2   = '+91 99660 10981';
$phone_tel_2      = '+919966010981';
$phone_number     = $phone_number ?? $phone_number_1;
$phone_tel        = $phone_tel ?? $phone_tel_1;


$is_home = ($current_page === 'home');

// Navigation items array (centralized & customizable per page)
$nav_items = $nav_items ?? [
    'home' => [
        'label' => 'Home',
        'url'   => '/',
    ],
    'about' => [
        'label' => 'About Us',
        'url'   => 'aboutus',
    ],
    'services' => [
        'label'    => 'Services',
        'url'      => 'services',
        'children' => [
            ['label' => 'Healings', 'url' => 'services'],
            ['label' => 'Training', 'url' => 'training'],
            ['label' => 'Courses on Wellness', 'url' => 'course'],
            ['label' => 'Workshops', 'url' => 'workshop'],
        ],
    ],
    'products' => [
        'label'    => 'Products',
        'url'      => 'ame-crystals',
        'children' => [
            ['label' => 'Âme Crystals', 'url' => 'ame-crystals'],
            ['label' => 'Shamaa Wellness', 'url' => 'wellness'],
        ],
    ],
    'stories' => [
        'label' => 'Healing Journeys',
        'url'   => 'customersstories',
    ],
    'contact' => [
        'label' => 'Contact',
        'url'   => 'contact',
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
    <?php
        // Dynamically compute base URL so assets and images always resolve properly
        $script_dir = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/')), '/');
        $site_base  = ($script_dir === '' || $script_dir === '.') ? '/' : $script_dir . '/';
    ?>
    <base href="<?= htmlspecialchars($site_base) ?>">
    
    <link rel="icon" type="image/png" href="<?= htmlspecialchars($favicon_logo) ?>">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?= htmlspecialchars($favicon_logo) ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700&family=Marcellus&family=Outfit:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/banner.css">
    <link rel="stylesheet" href="assets/css/workshop.css">
    <link rel="stylesheet" href="assets/css/aboutus.css">
    <link rel="stylesheet" href="assets/css/aboutourpurpose.css">
    <link rel="stylesheet" href="assets/css/aboutusphylosophy.css">
    <link rel="stylesheet" href="assets/css/aboutapproach.css">
    <link rel="stylesheet" href="assets/css/aboutvisionmission.css">
    <link rel="stylesheet" href="assets/css/aboutouridentity.css">
    <link rel="stylesheet" href="assets/css/aboutcommunity.css">
    <link rel="stylesheet" href="assets/css/aboutthehealing.css?v=<?= file_exists(__DIR__ . '/../assets/css/aboutthehealing.css') ? filemtime(__DIR__ . '/../assets/css/aboutthehealing.css') : '2.2' ?>">
    <link rel="stylesheet" href="assets/css/services.css">
    <link rel="stylesheet" href="assets/css/team.css">
    <link rel="stylesheet" href="assets/css/counter.css">
    <link rel="stylesheet" href="assets/css/product.css">
    <link rel="stylesheet" href="assets/css/cta-banner.css">

    <!-- Testimonials Bento Grid Custom Styles -->
    <link rel="stylesheet" href="assets/css/testimonials.css">

    <!-- Sacred Gallery 3x4 Grid Custom Styles -->
    <link rel="stylesheet" href="assets/css/gallery.css">

    <!-- Gallery Page Hero Banner Custom Styles -->
    <link rel="stylesheet" href="assets/css/gallerybanner.css">

    <!-- Service Page Hero Banner Custom Styles -->
    <link rel="stylesheet" href="assets/css/servicebanner.css?v=<?= file_exists(__DIR__ . '/../assets/css/servicebanner.css') ? filemtime(__DIR__ . '/../assets/css/servicebanner.css') : '1.2' ?>">

    <!-- Training Page Hero Banner Custom Styles -->
    <link rel="stylesheet" href="assets/css/trainingbanner.css?v=<?= file_exists(__DIR__ . '/../assets/css/trainingbanner.css') ? filemtime(__DIR__ . '/../assets/css/trainingbanner.css') : '1.2' ?>">

    <!-- Workshop Page Hero Banner Custom Styles -->
    <link rel="stylesheet" href="assets/css/workshopbanner.css?v=<?= file_exists(__DIR__ . '/../assets/css/workshopbanner.css') ? filemtime(__DIR__ . '/../assets/css/workshopbanner.css') : '1.2' ?>">

    <!-- Course Page Hero Banner Custom Styles -->
    <link rel="stylesheet" href="assets/css/coursebanner.css?v=<?= file_exists(__DIR__ . '/../assets/css/coursebanner.css') ? filemtime(__DIR__ . '/../assets/css/coursebanner.css') : '1.2' ?>">

    <!-- Full Service Cards 3-Column Grid Styles -->
    <link rel="stylesheet" href="assets/css/servicecards.css?v=<?= file_exists(__DIR__ . '/../assets/css/servicecards.css') ? filemtime(__DIR__ . '/../assets/css/servicecards.css') : '1.2' ?>">

    <!-- Training Programs Alternating 4-Row Section Styles -->
    <link rel="stylesheet" href="assets/css/trainingcards.css?v=<?= file_exists(__DIR__ . '/../assets/css/trainingcards.css') ? filemtime(__DIR__ . '/../assets/css/trainingcards.css') : '1.2' ?>">

    <!-- Product Page Hero Banner Custom Styles -->
    <link rel="stylesheet" href="assets/css/productbanner.css?v=<?= file_exists(__DIR__ . '/../assets/css/productbanner.css') ? filemtime(__DIR__ . '/../assets/css/productbanner.css') : '2.2' ?>">

    <!-- Shamaa Wellness Page Custom Styles -->
    <link rel="stylesheet" href="assets/css/wellness.css?v=<?= file_exists(__DIR__ . '/../assets/css/wellness.css') ? filemtime(__DIR__ . '/../assets/css/wellness.css') : '1.0' ?>">

    <!-- Masonry Gallery Grid & Lightbox Styles -->
    <link rel="stylesheet" href="assets/css/galleryimages.css">

    <!-- Frequently Asked Questions (FAQ) Accordion Styles -->
    <link rel="stylesheet" href="assets/css/faq.css">

    <!-- Contact & Booking Section Custom Styles -->
    <link rel="stylesheet" href="assets/css/contact.css">

    <!-- Personal Profile Details Page Custom Styles -->
    <link rel="stylesheet" href="assets/css/profile.css?v=<?= file_exists(__DIR__ . '/../assets/css/profile.css') ? filemtime(__DIR__ . '/../assets/css/profile.css') : '1.2' ?>">

    <!-- Customer Stories Banner & Page Custom Styles -->
    <link rel="stylesheet" href="assets/css/storiesbanner.css">

    <!-- Reusable Footer Island Custom Styles -->
    <link rel="stylesheet" href="assets/css/footer.css">
</head>
<body class="<?= !empty($current_page) ? 'page-' . htmlspecialchars($current_page) : '' ?>">

<?php
// Homepage Preloader (displays on homepage load)
if (($current_page ?? '') === 'home' || !empty($show_preloader)) {
    include __DIR__ . '/preloader.php';
}
?>

<header class="site-header sticky-top border-bottom" id="siteHeader">
    <nav class="navbar navbar-expand-lg p-0">
        <div class="container-fluid px-3 px-lg-4">
            <div class="row w-100 align-items-center g-0">
              
                <div class="col-6 col-lg-2 order-1 order-lg-2 d-flex align-items-center justify-content-start justify-content-lg-center">
                    <a href="/" class="site-logo d-inline-flex align-items-center" aria-label="<?= htmlspecialchars($brand_name) ?> Home">
                        <?php if (!empty($site_logo)): ?>
                            <img src="<?= htmlspecialchars($site_logo) ?>" alt="<?= htmlspecialchars($brand_name) ?>" class="logo-image">
                        <?php else: ?>
                            <div class="d-flex flex-column align-items-start align-items-lg-center">
                                <span class="fs-5 fw-bold text-dark text-uppercase font-serif"><?= htmlspecialchars($brand_name) ?></span>
                                <small class="text-warning text-uppercase" style="font-size: 0.65rem; letter-spacing: 0.2em;"><?= htmlspecialchars($brand_subtitle) ?></small>
                            </div>
                        <?php endif; ?>
                    </a>
                </div>

                <div class="col-lg-5 order-lg-1 d-none d-lg-flex align-items-center">
                    <!-- Desktop Navigation Menu -->
                    <ul class="navbar-nav desktop-nav-menu d-flex flex-row align-items-center gap-1 gap-xl-2 m-0 p-0" aria-label="Primary Site Navigation">
                        <?php foreach ($nav_items as $key => $item): ?>
                            <?php 
                                $isActive = ($current_page === $key || 
                                            ($key === 'services' && in_array($current_page, ['services', 'service', 'training', 'course', 'courses', 'workshop', 'workshops'])) ||
                                            ($key === 'stories' && in_array($current_page, ['stories', 'customer-stories', 'testimonials'])) ||
                                            ($key === 'products' && in_array($current_page, ['products', 'product', 'ame-crystals', 'shamaa-wellness', 'wellness'])));
                                $hasChildren = !empty($item['children']);
                            ?>
                            <?php if ($hasChildren): ?>
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

                <!-- 3. RIGHT COLUMN: Mobile Hamburger (Right) + Desktop CTA / Phone (Desktop: Right Col 3) -->
                <div class="col-6 col-lg-5 order-2 order-lg-3 d-flex justify-content-end align-items-center gap-2 gap-md-3">
                    <!-- Quick Contact Phones (Visible on large screens) -->
                    <div class="header-phone-group d-none d-xl-inline-flex align-items-center gap-2">
                        <a href="tel:<?= htmlspecialchars($phone_tel_1) ?>" class="header-phone-link" title="Call <?= htmlspecialchars($phone_number_1) ?>">
                            <i class="bi bi-telephone-fill"></i>
                            <span><?= htmlspecialchars($phone_number_1) ?></span>
                        </a>
                        <span class="header-phone-divider text-muted opacity-50">/</span>
                        <a href="tel:<?= htmlspecialchars($phone_tel_2) ?>" class="header-phone-link" title="Call <?= htmlspecialchars($phone_number_2) ?>">
                            <span><?= htmlspecialchars($phone_number_2) ?></span>
                        </a>
                    </div>

                    <!-- Action CTA Button (Desktop only, hidden on mobile) -->
                    <div class="header-cta-wrapper d-none d-lg-inline-flex">
                        <?php
                            $is_wa_cta   = str_contains($cta_url ?? '', 'wa.me');
                            $btn_text    = $cta_text;
                            $btn_url     = $cta_url;
                            $btn_class   = 'Btn-Header';
                            $btn_id      = 'headerCtaBtn';
                            $btn_attr    = 'aria-label="' . htmlspecialchars($cta_text) . '" title="' . htmlspecialchars($cta_text) . '"' . ($is_wa_cta ? ' target="_blank" rel="noopener noreferrer"' : '');
                            include __DIR__ . '/button.php';
                        ?>
                    </div>

                    <!-- Mobile Hamburger Button triggering Bootstrap Offcanvas (Right side on mobile) -->
                    <button class="navbar-toggler border-0 p-1 d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileDrawer" aria-controls="mobileDrawer" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>

            </div>
        </div>
    </nav>
</header>

<!-- Bootstrap 5 Offcanvas Mobile Navigation Drawer (Opens from Right) -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="mobileDrawer" aria-labelledby="mobileDrawerLabel">
    <div class="offcanvas-header border-bottom">
        <a href="/" class="d-flex align-items-center gap-2 text-decoration-none">
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
                <?php 
                    $isActive = ($current_page === $key || 
                                ($key === 'services' && in_array($current_page, ['services', 'service', 'training', 'course', 'courses', 'workshop', 'workshops'])) ||
                                ($key === 'stories' && in_array($current_page, ['stories', 'customer-stories', 'testimonials'])) ||
                                ($key === 'products' && in_array($current_page, ['products', 'product', 'ame-crystals', 'shamaa-wellness', 'wellness']))); 
                ?>
                <?php if (!empty($item['children'])): ?>
                    <li class="nav-item">
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="<?= htmlspecialchars($item['url']) ?>" 
                               class="nav-link flex-grow-1 <?= $isActive ? 'active' : '' ?>">
                                <span><?= htmlspecialchars($item['label']) ?></span>
                            </a>
                            <button class="btn btn-link text-muted p-2" 
                                    type="button" 
                                    data-bs-toggle="collapse" 
                                    data-bs-target="#mobile<?= ucfirst($key) ?>Collapse" 
                                    aria-expanded="false" 
                                    aria-controls="mobile<?= ucfirst($key) ?>Collapse" 
                                    aria-label="Toggle <?= htmlspecialchars($item['label']) ?> Menu">
                                <svg class="mobile-nav-arrow" width="13" height="13" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                </svg>
                            </button>
                        </div>
                        <div class="collapse mobile-services-collapse" id="mobile<?= ucfirst($key) ?>Collapse">
                            <ul class="mobile-sublinks-list p-2 ps-3 m-0 list-unstyled">
                                <?php foreach ($item['children'] as $child): ?>
                                    <li class="mb-2">
                                        <a href="<?= htmlspecialchars($child['url']) ?>" class="mobile-sublink d-flex align-items-center gap-2 py-1 text-decoration-none">
                                            <i class="bi bi-chevron-right small text-muted"></i>
                                            <span class="mega-text"><?= htmlspecialchars($child['label']) ?></span>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a href="<?= htmlspecialchars($item['url']) ?>" 
                           class="nav-link <?= $isActive ? 'active' : '' ?>">
                            <span><?= htmlspecialchars($item['label']) ?></span>
                            <i class="bi bi-chevron-right small text-muted"></i>
                        </a>
                    </li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>

        <div class="pt-3 border-top">
            <div class="d-flex flex-column gap-2 mb-3">
                <a href="tel:<?= htmlspecialchars($phone_tel_1) ?>" class="d-flex align-items-center gap-2 text-decoration-none text-secondary small">
                    <i class="bi bi-telephone text-secondary-color"></i>
                    <span><?= htmlspecialchars($phone_number_1) ?></span>
                </a>
                <a href="tel:<?= htmlspecialchars($phone_tel_2) ?>" class="d-flex align-items-center gap-2 text-decoration-none text-secondary small">
                    <i class="bi bi-telephone text-secondary-color"></i>
                    <span><?= htmlspecialchars($phone_number_2) ?></span>
                </a>
            </div>
            <?php
                $is_wa_cta   = str_contains($cta_url ?? '', 'wa.me');
                $btn_text    = $cta_text;
                $btn_url     = $cta_url;
                $btn_class   = 'Btn-Header w-100 justify-content-between';
                $btn_id      = 'drawerCtaBtn';
                $btn_attr    = 'aria-label="' . htmlspecialchars($cta_text) . '"' . ($is_wa_cta ? ' target="_blank" rel="noopener noreferrer"' : '');
                include __DIR__ . '/button.php';
            ?>
        </div>
    </div>
</div>