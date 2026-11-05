<?php
/**
 * ==============================================================================
 * Crystal Guide Section - Âme Crystals (SS Healing Rays)
 * "Crystal Guide"
 * 2 Images on 2 Columns on White Background Section
 * Dedicated Stylesheet: assets/css/productbanner.css
 * ==============================================================================
 */

$crystal_guide_heading = $crystal_guide_heading ?? 'Crystal Guide';
$crystal_guide_lead    = $crystal_guide_lead ?? '';

// Robust live-server image resolution for Guide Image 1 & 2
$crystal_guide_img_1 = 'assets/images/crystal-guide-1.jpeg';
if (!file_exists(dirname(__DIR__) . '/' . $crystal_guide_img_1)) {
    if (file_exists(dirname(__DIR__) . '/assets/images/crystal-guide-1.jpg')) {
        $crystal_guide_img_1 = 'assets/images/crystal-guide-1.jpg';
    }
}

$crystal_guide_img_2 = 'assets/images/crystal-guide-2.jpeg';
if (!file_exists(dirname(__DIR__) . '/' . $crystal_guide_img_2)) {
    if (file_exists(dirname(__DIR__) . '/assets/images/crystal-guide-2.jpg')) {
        $crystal_guide_img_2 = 'assets/images/crystal-guide-2.jpg';
    }
}
?>

<section class="crystal-guide-section position-relative bg-white" id="crystalGuide" aria-label="Crystal Guide">
    <div class="container crystal-guide-container">
        
        <!-- Section Header (Centered) -->
        <div class="row justify-content-center mb-4 mb-lg-5 crystal-guide-header-row">
            <div class="col-12 col-lg-8 text-center">
                <h2 class="crystal-guide-heading mb-0">
                    <?= htmlspecialchars($crystal_guide_heading) ?>
                </h2>
                <?php if (!empty($crystal_guide_lead)): ?>
                    <p class="crystal-guide-lead mt-3 mb-0">
                        <?= htmlspecialchars($crystal_guide_lead) ?>
                    </p>
                <?php endif; ?>
            </div>
        </div>

        <!-- 2 Columns Image Grid -->
        <div class="row g-4 g-lg-5 justify-content-center crystal-guide-grid">
            
            <!-- Column 1: Guide Image 1 -->
            <div class="col-12 col-md-6 d-flex justify-content-center">
                <div class="crystal-guide-card w-100 position-relative overflow-hidden">
                    <img src="<?= htmlspecialchars($crystal_guide_img_1) ?>" 
                         alt="Crystal Guide Part 1" 
                         class="crystal-guide-img img-fluid"
                         loading="lazy">
                </div>
            </div>

            <!-- Column 2: Guide Image 2 -->
            <div class="col-12 col-md-6 d-flex justify-content-center">
                <div class="crystal-guide-card w-100 position-relative overflow-hidden">
                    <img src="<?= htmlspecialchars($crystal_guide_img_2) ?>" 
                         alt="Crystal Guide Part 2" 
                         class="crystal-guide-img img-fluid"
                         loading="lazy">
                </div>
            </div>

        </div>

    </div>
</section>
