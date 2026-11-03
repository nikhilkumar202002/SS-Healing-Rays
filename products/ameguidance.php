<?php
/**
 * ==============================================================================
 * Lifelong Crystal Guidance & Care Section - Âme Crystals (SS Healing Rays)
 * "Your Crystal Journey Comes with Lifelong Guidance."
 * Layout: Left Image | Right Content
 * Dedicated Stylesheet: assets/css/productbanner.css
 * ==============================================================================
 */

$guidance_headline_1 = $guidance_headline_1 ?? 'Your Crystal Journey Comes with';
$guidance_headline_2 = $guidance_headline_2 ?? 'Lifelong Guidance.';

$guidance_desc_1     = $guidance_desc_1 ?? "A crystal purchase should come with an understanding of how to care for it. We provide simple guidance on suitable cleansing, use and maintenance, so you don't need to be a crystal expert to look after your stones.";
$guidance_desc_2     = $guidance_desc_2 ?? "Our lifelong support includes care and usage guidance. For customers in Hyderabad, where the crystal can be brought to us in person, we may also help with practical upkeep such as re-tying a bracelet or adding replacement beads where appropriate and available. These in-person repair services are subject to feasibility and are not a shipping-based service for customers outside Hyderabad.";
$guidance_highlight  = $guidance_highlight ?? "You don't just take home a crystal. You take home the knowledge and ongoing guidance to care for it.";

$guidance_img = $guidance_img ?? 'assets/images/lifelong-guidance.jpg';
if (!file_exists(dirname(__DIR__) . '/' . $guidance_img)) {
    if (file_exists(dirname(__DIR__) . '/assets/images/lifelong-guidance.jpeg')) {
        $guidance_img = 'assets/images/lifelong-guidance.jpeg';
    } elseif (file_exists(dirname(__DIR__) . '/assets/images/about/center-crystal-therapy.jpg')) {
        $guidance_img = 'assets/images/about/center-crystal-therapy.jpg';
    }
}
$guidance_img_alt    = $guidance_img_alt ?? 'Lifelong Crystal Care & Guidance - Âme Crystals';
?>

<section class="ame-guidance-section position-relative" id="ameGuidance" aria-label="Lifelong Crystal Guidance and Care">
    <div class="container ame-guidance-container">
        <div class="row align-items-lg-stretch align-items-center g-4 g-lg-5 ame-guidance-row">
            
         <!-- Right Column: Content -->
            <div class="col-12 col-lg-6 ame-guidance-col-content d-flex flex-column justify-content-center">
                <div class="ame-guidance-content">
                    
                    <!-- Headline: Marcellus with Playfair Highlight -->
                    <h2 class="ame-guidance-heading mb-3 mb-lg-4">
                        <?= htmlspecialchars($guidance_headline_1) ?> <span class="title-highlight"><?= htmlspecialchars($guidance_headline_2) ?></span>
                    </h2>

                    <!-- Story Description Paragraphs -->
                    <div class="ame-guidance-description">
                        <p class="mb-3"><?= htmlspecialchars($guidance_desc_1) ?></p>
                        <p class="mb-3"><?= htmlspecialchars($guidance_desc_2) ?></p>
                        
                        <!-- Closing Signature Principle Callout -->
                        <div class="ame-guidance-quote mt-3 pt-2">
                            <p class="guidance-quote-text mb-0">
                                <?= htmlspecialchars($guidance_highlight) ?>
                            </p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Left Column: Gallery Crystal Image Card (Height matches right content) -->
            <div class="col-12 col-lg-6 ame-guidance-col-media d-flex flex-column justify-content-center">
                <div class="ame-guidance-media-wrapper w-100 h-100 d-flex flex-column">
                    <div class="ame-guidance-image-card position-relative overflow-hidden flex-grow-1">
                        <img src="<?= htmlspecialchars($guidance_img) ?>" 
                             alt="<?= htmlspecialchars($guidance_img_alt) ?>" 
                             class="ame-guidance-image"
                             loading="lazy">
                        
               
                    </div>
                </div>
            </div>

           

        </div>
    </div>
</section>

