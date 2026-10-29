<?php
/**
 * ==============================================================================
 * Product / Offerings Section - SS Healing Rays
 * Positioned immediately after Counter Section
 *
 * Anatomy of Each Card:
 *   - Top Image (3:2 ratio)
 *   - Logo center-overlapped by image and below section
 *   - Product Name (Marcellus font)
 *   - Short Description (Lato font)
 *   - Action Button (Explore for Card 1, Book a demo session for Card 2)
 * ==============================================================================
 */

$product_pretitle    = $product_pretitle ?? 'SACRED OFFERINGS';
$product_heading     = $product_heading ?? 'Thoughtfully Curated for <span class="title-highlight">Your Wellbeing</span>';
$show_product_header = $show_product_header ?? true;

$products = $products ?? [
    [
        'name'        => 'Genuine Crystals & Decor',
        'desc'        => 'Thoughtfully curated and charged with intention',
        'image'       => 'assets/product/crystal-store.jpg',
        'logo'        => 'assets/product/product-logo-1.png',
        'btn_text'    => 'Explore Products',
        'btn_url'     => '#products',
        'btn_class'   => 'Btn-Product-Primary',
        'btn_attr'    => '',
    ],
    [
        'name'        => 'Holistic wellbeing',
        'desc'        => 'Nurturing balance & wellbeing through mindful movement',
        'image'       => 'assets/product/wellness.jpg',
        'logo'        => 'assets/product/product-logo-2.png',
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
            <!-- Section Header -->
            <div class="product-header text-center">
                <?php if (!empty($product_pretitle)): ?>
                    <p class="product-pretitle"><?= htmlspecialchars($product_pretitle) ?></p>
                <?php endif; ?>
                <?php if (!empty($product_heading)): ?>
                    <h2 class="product-heading"><?= $product_heading ?></h2>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <!-- 2 Products Cards Grid -->
        <div class="product-cards-container">
            <div class="row justify-content-center g-4 g-lg-5">
                <?php foreach ($products as $item): ?>
                    <div class="col-12 col-md-6 product-card-col">
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
