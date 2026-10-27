<?php

$contact_pretitle        = $contact_pretitle ?? 'BOOK YOUR SPOT';
$contact_title_1         = $contact_title_1 ?? 'Reserve Your Place';
$contact_title_2         = $contact_title_2 ?? 'on the';
$contact_title_highlight = $contact_title_highlight ?? 'Retreat';
$contact_subtitle        = $contact_subtitle ?? 'Step into a sacred sanctuary of peace, alignment, and revitalizing energy. Share your intentions below to begin.';

$consultant_options = [
    'Sreeparvathy | Emotional wellness Coach',
    'Sravanti | Healer • Coach • Yoga',
];

$service_categories = [
    'I. Healings' => [
        'Reiki Healing',
        'Crystal Healing',
        'Angel Healing',
        'Energy healing',
        'EFT',
        'Counselling',
        'Trauma Healing',
        'Personal Transformation Healing',
        'Meditations',
        'Tarot Card reading',
        'Therapeutic Yoga',
    ],
    'II. Training' => [
        'Reiki- Shiki Ryoho & Karuna Reiki- All levels',
        'Crystal Therapy',
        'Angel Therapy',
        'EFT',
    ],
    'III. COURSES on Wellness' => [
        'Spandan',
        'Chetan',
    ],
];
?>

<section class="contact-section position-relative" id="contact" aria-label="Book Your Healing Session">
    <div class="container">
        <div class="row align-items-stretch g-4 g-lg-5 justify-content-between">
            
            <!-- 1. LEFT SIDE: Arch-Framed Photo (Matches Height of Right Side) -->
            <div class="col-lg-5 col-md-10 mx-auto d-flex flex-column">
                <div class="contact-arch-wrapper mx-auto">
                    <img src="assets/images/contact-arch-photo.png" 
                         alt="SS Healing Rays Sacred Healers and Founders" 
                         class="contact-arch-img"
                         loading="lazy">
                </div>
            </div>

            <!-- 2. RIGHT SIDE: Form Heading & Underline-Only Booking Form -->
            <div class="col-lg-7 col-md-11 mx-auto d-flex flex-column justify-content-center">
                <div class="contact-form-container">
                    
                    <!-- Form Heading Area -->
                    <div class="contact-form-header mb-4">
                        <div class="contact-badge-wrapper mb-2">
                            <span class="contact-badge">
                              
                                <?= htmlspecialchars($contact_pretitle) ?>
                            </span>
                        </div>
                        <h2 class="contact-heading">
                            <span class="d-block"><?= htmlspecialchars($contact_title_1) ?></span>
                            <span class="d-block">
                                <?= htmlspecialchars($contact_title_2) ?>
                                <span class="title-highlight"><?= htmlspecialchars($contact_title_highlight) ?></span>
                            </span>
                        </h2>
                        
                    </div>

                    <!-- Underline-Only Form (No labels, no icons, placeholders only) -->
                    <form action="#contact" method="POST" class="contact-form" id="sanctuaryContactForm" novalidate>
                        <div class="row g-3 g-md-4">
                            
                            <!-- 1. Name -->
                            <div class="col-12">
                                <div class="contact-field-group">
                                    <input type="text" 
                                           class="form-control contact-underline-input" 
                                           id="contactName" 
                                           name="name" 
                                           placeholder="Your Name" 
                                           aria-label="Your Name"
                                           required>
                                </div>
                            </div>

                            <!-- 2. Phone Number -->
                            <div class="col-md-6">
                                <div class="contact-field-group">
                                    <input type="tel" 
                                           class="form-control contact-underline-input" 
                                           id="contactPhone" 
                                           name="phone" 
                                           placeholder="Your Phone" 
                                           aria-label="Your Phone"
                                           required>
                                </div>
                            </div>

                            <!-- 3. Email -->
                            <div class="col-md-6">
                                <div class="contact-field-group">
                                    <input type="email" 
                                           class="form-control contact-underline-input" 
                                           id="contactEmail" 
                                           name="email" 
                                           placeholder="Your Email" 
                                           aria-label="Your Email"
                                           required>
                                </div>
                            </div>

                            <!-- 4. WhatsApp Number -->
                            <div class="col-12">
                                <div class="contact-field-group">
                                    <input type="tel" 
                                           class="form-control contact-underline-input" 
                                           id="contactWhatsapp" 
                                           name="whatsapp" 
                                           placeholder="WhatsApp Number" 
                                           aria-label="WhatsApp Number">
                                </div>
                            </div>

                            <!-- 5. Consultant Selecting -->
                            <div class="col-md-6">
                                <div class="contact-field-group">
                                    <select class="form-select contact-underline-select" 
                                            id="contactConsultant" 
                                            name="consultant" 
                                            aria-label="Choose a Consultant"
                                            required>
                                        <option value="" disabled selected>Choose a Consultant</option>
                                        <?php foreach ($consultant_options as $consultant): ?>
                                            <option value="<?= htmlspecialchars($consultant) ?>"><?= htmlspecialchars($consultant) ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <!-- 6. List Service -->
                            <div class="col-md-6">
                                <div class="contact-field-group">
                                    <select class="form-select contact-underline-select contact-service-select" 
                                            id="contactService" 
                                            name="service" 
                                            aria-label="Choose a Service"
                                            required>
                                        <option value="" disabled selected>Choose a Service</option>
                                        <?php foreach ($service_categories as $category => $services): ?>
                                            <optgroup label="<?= htmlspecialchars($category) ?>">
                                                <?php foreach ($services as $service): ?>
                                                    <option value="<?= htmlspecialchars($service) ?>"><?= htmlspecialchars($service) ?></option>
                                                <?php endforeach; ?>
                                            </optgroup>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <!-- 7. Description -->
                            <div class="col-12">
                                <div class="contact-field-group">
                                    <textarea class="form-control contact-underline-input contact-underline-textarea" 
                                              id="contactDescription" 
                                              name="description" 
                                              rows="2" 
                                              placeholder="Description (Share your healing intention...)" 
                                              aria-label="Description"></textarea>
                                </div>
                            </div>

                            <!-- 8. Button -->
                            <div class="col-12 pt-3">
                                <button type="submit" class="btn btn-contact-submit w-100" id="contactSubmitBtn">
                                    <span>Book Your Spot</span>
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
