<?php

$contact_pretitle        = $contact_pretitle ?? 'GET IN TOUCH';
$contact_title_1         = $contact_title_1 ?? 'Begin Your';
$contact_title_highlight = $contact_title_highlight ?? 'Wellness Journey';
$contact_btn_text        = $contact_btn_text ?? 'Submit an Inquiry';
$contact_img             = $contact_img ?? 'assets/images/contact-arch-photo.jpg';
?>

<section class="contact-section position-relative" id="contact" aria-label="Begin Your Wellness Journey">
    <div class="container">
        <div class="row align-items-stretch g-4 g-lg-5 justify-content-between">
            
            <!-- 1. LEFT SIDE: Arch-Framed Photo (Matches Height of Right Side) -->
            <div class="col-lg-5 col-md-10 mx-auto d-flex flex-column">
                <div class="contact-arch-wrapper mx-auto">
                    <img src="<?= htmlspecialchars($contact_img) ?>" 
                         alt="SS Healing Rays Sacred Healers and Founders" 
                         class="contact-arch-img"
                         loading="lazy">
                </div>
            </div>

            <!-- 2. RIGHT SIDE: Form Heading & Underline-Only Form -->
            <div class="col-lg-7 col-md-11 mx-auto d-flex flex-column justify-content-center">
                <div class="contact-form-container">
                    
                    <!-- Form Heading Area -->
                    <div class="contact-form-header mb-4">
                        <?php if (!empty($contact_pretitle)): ?>
                            <div class="contact-badge-wrapper mb-2">
                                <span class="contact-badge">
                                    <?= htmlspecialchars($contact_pretitle) ?>
                                </span>
                            </div>
                        <?php endif; ?>
                        <h2 class="contact-heading">
                            <span class="d-block"><?= htmlspecialchars($contact_title_1) ?></span>
                            <span class="d-block title-highlight"><?= htmlspecialchars($contact_title_highlight) ?></span>
                        </h2>
                    </div>

                    <!-- Underline-Only Form (No labels, no icons, placeholders only) -->
                    <form action="#contact" method="POST" class="contact-form" id="sanctuaryContactForm" novalidate>
                        <div class="row g-3 g-md-4">
                            
                            <!-- 1. Full name -->
                            <div class="col-md-6 col-12">
                                <div class="contact-field-group">
                                    <input type="text" 
                                           class="form-control contact-underline-input" 
                                           id="contactFullName" 
                                           name="full_name" 
                                           placeholder="Full name" 
                                           aria-label="Full name"
                                           required>
                                </div>
                            </div>

                            <!-- 2. WhatsApp number -->
                            <div class="col-md-6 col-12">
                                <div class="contact-field-group">
                                    <input type="tel" 
                                           class="form-control contact-underline-input" 
                                           id="contactWhatsapp" 
                                           name="whatsapp" 
                                           placeholder="WhatsApp number" 
                                           aria-label="WhatsApp number"
                                           required>
                                </div>
                            </div>

                            <!-- 3. Email address -->
                            <div class="col-md-6 col-12">
                                <div class="contact-field-group">
                                    <input type="email" 
                                           class="form-control contact-underline-input" 
                                           id="contactEmail" 
                                           name="email" 
                                           placeholder="Email address" 
                                           aria-label="Email address"
                                           required>
                                </div>
                            </div>

                            <!-- 4. Location -->
                            <div class="col-md-6 col-12">
                                <div class="contact-field-group">
                                    <input type="text" 
                                           class="form-control contact-underline-input" 
                                           id="contactLocation" 
                                           name="location" 
                                           placeholder="Location" 
                                           aria-label="Location">
                                </div>
                            </div>

                            <!-- 5. How can we help you? -->
                            <div class="col-12">
                                <div class="contact-field-group">
                                    <textarea class="form-control contact-underline-input contact-underline-textarea" 
                                              id="contactHelp" 
                                              name="how_can_we_help" 
                                              rows="3" 
                                              placeholder="How can we help you?" 
                                              aria-label="How can we help you?"></textarea>
                                </div>
                            </div>

                            <!-- 6. Button -->
                            <div class="col-12 pt-3">
                                <button type="submit" class="btn btn-contact-submit w-100" id="contactSubmitBtn">
                                    <span><?= htmlspecialchars($contact_btn_text) ?></span>
                                    <i class="bi bi-arrow-right-short ms-1" aria-hidden="true"></i>
                                </button>
                                <p class="contact-privacy-note text-center mt-2 mb-0">
                                    <i class="bi bi-shield-check me-1 text-secondary"></i>
                                    Your information is kept strictly confidential and sacred.
                                </p>
                            </div>

                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</section>
