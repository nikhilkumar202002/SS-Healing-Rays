<?php

// If accessed directly without an outer page wrapper, redirect to /products
if (basename($_SERVER['SCRIPT_FILENAME'] ?? '') === 'product.php' && str_contains($_SERVER['REQUEST_URI'] ?? '', 'home/product')) {
    header('Location: /products', true, 301);
    exit;
}

$product_pretitle        = $product_pretitle ?? 'SACRED OFFERINGS';
$product_title_1         = $product_title_1 ?? 'Thoughtfully Curated for';
$product_title_highlight = $product_title_highlight ?? 'Your Wellbeing';
$show_product_header     = $show_product_header ?? true;

$products = $products ?? [
    [
        'id'          => 'crystals',
        'name'        => 'Genuine Crystals & Decor',
        'desc'        => 'Thoughtfully curated and charged with intention',
        'image'       => 'assets/product/crystal-store.jpg',
        'logo'        => 'assets/product/product-logo-2.png', // Crystals emblem logo
        'btn_text'    => 'Explore Products',
        'btn_url'     => 'https://wa.me/919000606792?text=Hi%20SS%20Healing%20Rays,%20I%20am%20interested%20in%20Genuine%20Crystals%20%26%20Decor',
        'btn_class'   => 'Btn-Product-Primary',
        'btn_attr'    => 'target="_blank" rel="noopener noreferrer"',
    ],
    [
        'id'          => 'wellbeing',
        'name'        => 'Holistic wellbeing',
        'desc'        => 'Nurturing balance & wellbeing through mindful movement',
        'image'       => 'assets/product/wellness.jpg',
        'logo'        => 'assets/product/product-logo-1.png', // Shamaa Yoga & Wellness Center logo
        'btn_text'    => 'Book a demo session',
        'btn_url'     => '#bookingModal',
        'btn_class'   => 'Btn-Product-Demo',
        'btn_attr'    => 'data-bs-toggle="modal" data-bs-target="#bookingModal"',
    ],
];
?>

<section class="product-section position-relative" id="products">
    <div class="container">
        
        <?php if (!empty($show_product_header)): ?>
            <!-- Section Header (Clean 2-line layout) -->
            <div class="product-header text-center">
                <?php if (!empty($product_pretitle)): ?>
                    <p class="product-pretitle"><?= htmlspecialchars($product_pretitle) ?></p>
                <?php endif; ?>
                <?php if (!empty($product_heading)): ?>
                    <h2 class="product-heading"><?= $product_heading ?></h2>
                <?php else: ?>
                    <h2 class="product-heading">
                        <span class="product-heading-line-1"><?= htmlspecialchars($product_title_1) ?></span>
                        <span class="product-heading-line-2">
                            <span class="title-highlight"><?= htmlspecialchars($product_title_highlight) ?></span>
                        </span>
                    </h2>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <!-- 2 Products Cards Grid -->
        <div class="product-cards-container">
            <div class="row justify-content-center g-4 g-lg-5">
                <?php foreach ($products as $item): ?>
                    <div class="col-12 col-md-6 product-card-col" <?= !empty($item['id']) ? 'id="' . htmlspecialchars($item['id']) . '"' : '' ?>>
                        <div class="product-card">
                            
                            <!-- 1. Top Image + Overlapping Center Logo -->
                            <div class="product-media-wrapper">
                                <div class="product-image-frame">
                                    <img src="<?= htmlspecialchars($item['image']) ?>" 
                                         alt="<?= htmlspecialchars($item['name']) ?>" 
                                         class="product-image"
                                         loading="lazy">
                                </div>
                                <div class="product-logo-badge">
                                    <img src="<?= htmlspecialchars($item['logo']) ?>" 
                                         alt="<?= htmlspecialchars($item['name']) ?> Logo" 
                                         class="product-logo-img">
                                </div>
                            </div>

                            <!-- 2. Bottom Content Section -->
                            <div class="product-content">
                                <div class="product-details">
                                    <h3 class="product-title"><?= htmlspecialchars($item['name']) ?></h3>
                                    <p class="product-description"><?= htmlspecialchars($item['desc']) ?></p>
                                </div>

                                <div class="product-actions">
                                    <?php
                                        $btn_text  = $item['btn_text'];
                                        $btn_url   = $item['btn_url'];
                                        $btn_class = $item['btn_class'];
                                        $btn_attr  = $item['btn_attr'] ?? '';
                                        include dirname(__DIR__) . '/common/button.php';
                                    ?>
                                </div>
                            </div>

                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</section>
