<?php
/**
 * ==============================================================================
 * The Signature Crystal Collection Section - SS Healing Rays
 * Features:
 *   - Eyebrow: THE SIGNATURE CRYSTAL COLLECTION
 *   - Headline: "You don't always choose a crystal. Sometimes, the crystal finds you."
 *   - Story of Âme Crystals (inspired by the French word âme, meaning soul)
 *   - Dual CTAs: Primary ("Discover Your Crystal") & Secondary ("Book Your Crystal Consultation")
 *   - Layout: Left Content | Right Gallery Image (Deep Crystal Sanctuary)
 * Dedicated Stylesheet: assets/css/productbanner.css
 * ==============================================================================
 */

$crystal_eyebrow            = $crystal_eyebrow ?? 'The Signature Crystal Collection';
$crystal_headline_1         = $crystal_headline_1 ?? "You don't always choose a crystal.";
$crystal_headline_2         = $crystal_headline_2 ?? "Sometimes, the crystal finds you.";

$crystal_desc_1             = $crystal_desc_1 ?? "Inspired by the French word <em>âme</em>, meaning soul, <strong>Âme Crystals</strong> is built around the beautiful connection between a crystal and the person it finds.";
$crystal_desc_2             = $crystal_desc_2 ?? "We believe every stone from Mother Earth carries a story. Some become silent supporters, some remind us of our strength, and some bring comfort, grounding and encouragement when we need them most.";

$crystal_primary_cta_text   = $crystal_primary_cta_text ?? 'Book your crystal consultation';
$crystal_primary_cta_url    = $crystal_primary_cta_url ?? '#bookingModal';
$crystal_secondary_cta_text = $crystal_secondary_cta_text ?? '';

$crystal_img = $crystal_img ?? 'assets/images/purpose.jpg';
if (!file_exists(dirname(__DIR__) . '/' . $crystal_img)) {
    if (file_exists(dirname(__DIR__) . '/assets/images/purpose.jpeg')) {
        $crystal_img = 'assets/images/purpose.jpeg';
    } elseif (file_exists(dirname(__DIR__) . '/assets/images/purpose')) {
        $crystal_img = 'assets/images/purpose';
    } elseif (file_exists(dirname(__DIR__) . '/assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.22 PM.jpeg')) {
        $crystal_img = 'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.22 PM.jpeg';
    }
}
$crystal_img_alt = $crystal_img_alt ?? 'A Crystal with a Purpose - Âme Crystals';
?>

<section class="signature-crystal-section position-relative" id="signatureCrystals" aria-label="The Signature Crystal Collection">
    <div class="container">
        <div class="row align-items-center g-4 g-lg-5 signature-crystal-row">
            
            <!-- Left Column: Content & Actions -->
            <div class="col-12 col-lg-6 signature-crystal-col-content">
                <div class="signature-crystal-content">
                    
                    <?php if (!empty($crystal_eyebrow)): ?>
                        <!-- Eyebrow Pill Badge -->
                        <div class="signature-crystal-badge mb-3">
                            <span class="badge-icon" aria-hidden="true"><i class="bi bi-gem"></i></span>
                            <span class="badge-text"><?= htmlspecialchars($crystal_eyebrow) ?></span>
                        </div>
                    <?php endif; ?>

                    <!-- Headline (Balanced Layout with Playfair Italic Highlight) -->
                    <h2 class="signature-crystal-heading">
                        <?php if (!empty($crystal_headline_2)): ?>
                            <span class="heading-line"><?= $crystal_headline_1 ?></span>
                            <span class="heading-line">
                                <span class="title-highlight"><?= $crystal_headline_2 ?></span>
                            </span>
                        <?php else: ?>
                            <span class="heading-line heading-single-line"><?= $crystal_headline_1 ?></span>
                        <?php endif; ?>
                    </h2>

                    <!-- Story Description Paragraphs -->
                    <div class="signature-crystal-description">
                        <?php if (!empty($crystal_desc_1)): ?>
                            <p><?= $crystal_desc_1 ?></p>
                        <?php endif; ?>
                        <?php if (!empty($crystal_desc_2)): ?>
                            <p class="crystal-consultation-quote"><?= $crystal_desc_2 ?></p>
                        <?php endif; ?>
                    </div>

                    <?php 
                    $has_actions = (!empty($show_crystal_ctas ?? true) && (!empty($crystal_primary_cta_text) || !empty($crystal_secondary_cta_text)));
                    if ($has_actions): 
                    ?>
                        <!-- Action Buttons (Primary CTA & Secondary Consultation CTA) -->
                        <div class="signature-crystal-actions d-flex flex-wrap align-items-center gap-3 pt-2">
                            <?php if (!empty($crystal_primary_cta_text)): ?>
                                <div class="crystal-primary-btn-wrap">
                                    <?php
                                        $btn_text  = $crystal_primary_cta_text;
                                        $btn_url   = $crystal_primary_cta_url;
                                        $btn_class = 'Btn-Crystal-Primary';
                                        if ($btn_url === '#bookingModal') {
                                            $btn_attr = 'data-bs-toggle="modal" data-bs-target="#bookingModal"';
                                        }
                                        include dirname(__DIR__) . '/common/button.php';
                                    ?>
                                </div>
                            <?php endif; ?>

                            <?php if (!empty($crystal_secondary_cta_text)): ?>
                                <button type="button" 
                                        class="btn btn-outline-crystal-consultation"
                                        data-bs-toggle="modal" 
                                        data-bs-target="#bookingModal"
                                        aria-label="<?= htmlspecialchars($crystal_secondary_cta_text) ?>">
                                    <i class="bi bi-calendar2-heart me-2" aria-hidden="true"></i>
                                    <span><?= htmlspecialchars($crystal_secondary_cta_text) ?></span>
                                </button>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                </div>
            </div>

            <!-- Right Column: Gallery Crystal Image Card -->
            <div class="col-12 col-lg-6 signature-crystal-col-media d-flex justify-content-center justify-content-lg-end">
                <div class="signature-crystal-media-wrapper w-100">
                    <div class="signature-crystal-image-card">
                        <img src="<?= htmlspecialchars($crystal_img) ?>" 
                             alt="<?= htmlspecialchars($crystal_img_alt) ?>" 
                             class="signature-crystal-image"
                             loading="lazy">
                        
                
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
