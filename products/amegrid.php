<?php
/**
 * ==============================================================================
 * Personalised Crystal Grids Section - Âme Crystals (SS Healing Rays)
 * "A Dedicated Space for Your Intention"
 * Layout: Left Image | Right Content
 * Dedicated Stylesheet: assets/css/productbanner.css
 * ==============================================================================
 */

$grid_headline_1 = $grid_headline_1 ?? 'A Dedicated Space for Your Intention';
$grid_headline_2 = $grid_headline_2 ?? '- Crystal Grid';
$grid_desc_1     = $grid_desc_1 ?? "For customers seeking focused support for a significant intention or manifestation goal, Âme offers personalised crystal grids. These are thoughtfully arranged using selected crystals and a design based on the person's intention—such as abundance, prosperity, career opportunities, a new job or other personal goals.";
$grid_desc_2     = $grid_desc_2 ?? "Each grid is prepared personally and undergoes a 21-day energising process at our end before it is handed over to the customer. This is a premium, customised service and is recommended after understanding the person's needs.";

$grid_cta_text   = $grid_cta_text ?? 'Enquire About a Personalised Crystal Grid';
$grid_cta_url    = $grid_cta_url ?? '#bookingModal';

$grid_img = $grid_img ?? 'assets/images/grid-crystals.jpg';
if (!file_exists(dirname(__DIR__) . '/' . $grid_img)) {
    if (file_exists(dirname(__DIR__) . '/assets/images/grid-crystals.jpeg')) {
        $grid_img = 'assets/images/grid-crystals.jpeg';
    } elseif (file_exists(dirname(__DIR__) . '/assets/categories/crystal-grid.jpg')) {
        $grid_img = 'assets/categories/crystal-grid.jpg';
    } elseif (file_exists(dirname(__DIR__) . '/assets/categories/crystal-grid.jpeg')) {
        $grid_img = 'assets/categories/crystal-grid.jpeg';
    }
}
$grid_img_alt    = $grid_img_alt ?? 'Personalised Crystal Grids - Âme Crystals';
?>

<section class="ame-grid-section position-relative" id="ameCrystalGrid" aria-label="A Dedicated Space for Your Intention - Crystal Grid">
    <div class="container ame-grid-container">
        <div class="row align-items-lg-stretch align-items-center g-4 g-lg-5 ame-grid-row">
            
            <!-- Left Column: Gallery Crystal Image Card (Height matches right content) -->
            <div class="col-12 col-lg-6 ame-grid-col-media d-flex flex-column justify-content-center">
                <div class="ame-grid-media-wrapper w-100 h-100 d-flex flex-column">
                    <div class="ame-grid-image-card position-relative overflow-hidden flex-grow-1">
                        <img src="<?= htmlspecialchars($grid_img) ?>" 
                             alt="<?= htmlspecialchars($grid_img_alt) ?>" 
                             class="ame-grid-image"
                             loading="lazy">
                        
           
                    </div>
                </div>
            </div>

            <!-- Right Column: Content & Actions -->
            <div class="col-12 col-lg-6 ame-grid-col-content d-flex flex-column justify-content-center">
                <div class="ame-grid-content">
                    
                    <!-- Headline (2 lines) -->
                    <h2 class="ame-grid-heading mb-3 mb-lg-4">
                        <?= htmlspecialchars($grid_headline_1) ?> <span class="d-block title-highlight"><?= htmlspecialchars($grid_headline_2) ?></span>
                    </h2>

                    <!-- Story Description Paragraphs -->
                    <div class="ame-grid-description mb-4">
                        <p class="mb-3"><?= htmlspecialchars($grid_desc_1) ?></p>
                        <p class="mb-0"><?= htmlspecialchars($grid_desc_2) ?></p>
                    </div>

                    <!-- CTA Action Button -->
                    <div class="ame-grid-actions pt-2">
                        <div class="crystal-primary-btn-wrap d-inline-block">
                            <?php
                                $btn_text  = $grid_cta_text;
                                $btn_url   = $grid_cta_url;
                                $btn_class = 'Btn-Crystal-Primary';
                                $btn_attr  = 'data-bs-toggle="modal" data-bs-target="#bookingModal" data-service-title="Personalised Crystal Grid" data-service-category="Âme Crystals" aria-label="' . htmlspecialchars($grid_cta_text) . '"';
                                include dirname(__DIR__) . '/common/button.php';
                            ?>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

