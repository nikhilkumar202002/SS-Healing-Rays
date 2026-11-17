<?php
/**
 * ==============================================================================
 * SHAMAA Dedicated CTA Banner Component
 * "Yoga Is for Everyone. Begin Where You Are."
 * ==============================================================================
 */

$shamaa_cta_title_1    = $shamaa_cta_title_1 ?? 'Yoga Is for Everyone.';
$shamaa_cta_title_2    = $shamaa_cta_title_2 ?? 'Begin Where You Are.';
$shamaa_cta_subheading = $shamaa_cta_subheading ?? 'No pressure to perform. No need to be perfect. Just a comfortable first step.';
$shamaa_cta_desc       = $shamaa_cta_desc ?? 'Whether yoga feels unfamiliar, movement feels challenging or the first step simply feels intimidating, SHAMAA offers a supportive way to begin. A clarity call provides an opportunity to share concerns, understand the approach and explore a suitable way forward. The journey begins with one conversation.';

$shamaa_cta_wa_num     = '919966010981';
$shamaa_cta_wa_msg     = rawurlencode('Hi Sravanti, I would like to book a Clarity Call for SHAMAA Therapeutic Yoga & Wellness.');
$shamaa_cta_wa_url     = "https://wa.me/{$shamaa_cta_wa_num}?text={$shamaa_cta_wa_msg}";

$shamaa_cta_bg = 'assets/banner/cta-banner.jpg';
if (!file_exists(dirname(__DIR__) . '/' . $shamaa_cta_bg)) {
    if (file_exists(dirname(__DIR__) . '/assets/banner/cta-banner.jpeg')) {
        $shamaa_cta_bg = 'assets/banner/cta-banner.jpeg';
    } elseif (file_exists(dirname(__DIR__) . '/assets/banner/shamaa-banner.jpg')) {
        $shamaa_cta_bg = 'assets/banner/shamaa-banner.jpg';
    } else {
        $shamaa_cta_bg = 'assets/banner/banner-1.jpg';
    }
}
?>

<section class="shamaa-cta-section position-relative overflow-hidden" id="shamaaCta" aria-label="Yoga Is for Everyone. Begin Where You Are.">
    <!-- Ambient Sanctuary Background Image -->
    <div class="shamaa-cta-bg-wrapper" aria-hidden="true">
        <img src="<?= htmlspecialchars($shamaa_cta_bg) ?>" 
             alt="SHAMAA Yoga Sanctuary Atmosphere" 
             class="shamaa-cta-bg-img"
             loading="lazy">
    </div>

    <!-- Soft Restorative Forest Gradient Overlay -->
    <div class="shamaa-cta-overlay" aria-hidden="true"></div>

    <!-- Centered Content -->
    <div class="container position-relative shamaa-cta-container">
        <div class="shamaa-cta-content text-center mx-auto">
            
            <!-- Headline: 2-line layout with italic highlight -->
            <h2 class="shamaa-cta-title mb-3">
                <span class="shamaa-cta-title-line"><?= htmlspecialchars($shamaa_cta_title_1) ?></span>
                <span class="shamaa-cta-title-line">
                    <em class="shamaa-cta-highlight"><?= htmlspecialchars($shamaa_cta_title_2) ?></em>
                </span>
            </h2>

            <!-- Subheading -->
            <?php if (!empty($shamaa_cta_subheading)): ?>
                <p class="shamaa-cta-subheading mb-3 mx-auto">
                    <?= htmlspecialchars($shamaa_cta_subheading) ?>
                </p>
            <?php endif; ?>

            <!-- Paragraph Description -->
            <p class="shamaa-cta-desc mx-auto mb-4">
                <?= htmlspecialchars($shamaa_cta_desc) ?>
            </p>

            <!-- Dual Action Buttons -->
            <div class="shamaa-cta-actions d-flex flex-wrap align-items-center justify-content-center gap-3 pt-2">
                
                <!-- Primary Action: Book a Clarity Call on WhatsApp -->
                <div class="shamaa-cta-primary-btn-wrap">
                    <?php
                        $btn_text  = 'Book a Clarity Call on WhatsApp';
                        $btn_url   = $shamaa_cta_wa_url;
                        $btn_class = 'Btn-Shamaa-Approach Btn-Shamaa-Clarity Btn-Shamaa-Cta-Primary';
                        $btn_icon  = 'bi bi-whatsapp';
                        $btn_attr  = 'target="_blank" rel="noopener noreferrer" title="Book a Clarity Call on WhatsApp with Sravanti"';
                        include dirname(__DIR__) . '/common/button.php';
                    ?>
                </div>

                <!-- Secondary Action: Send an Enquiry (Opens existing enquiry form modal) -->
                <button type="button" 
                        class="btn-shamaa-cta-secondary" 
                        data-bs-toggle="modal" 
                        data-bs-target="#bookingModal" 
                        data-service-title="SHAMAA Therapeutic Yoga" 
                        data-service-category="SHAMAA Wellness"
                        title="Send an Enquiry">
                    <i class="bi bi-chat-square-text me-2" aria-hidden="true"></i>
                    <span>Send an Enquiry</span>
                </button>

            </div>

        </div>
    </div>
</section>
