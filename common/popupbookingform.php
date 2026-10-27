<?php


$modal_consultant_options = [
    'Sreeparvathy | Emotional wellness Coach',
    'Sravanti | Healer • Coach • Yoga',
];

$modal_service_categories = [
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

<!-- ==========================================================================
     Booking Modal Component (Bootstrap 5.3) - Form-Only Layout
     ========================================================================== -->
<div class="modal fade popup-booking-modal" 
     id="bookingModal" 
     tabindex="-1" 
     aria-labelledby="bookingModalLabel" 
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
        <div class="modal-content border-0 position-relative">
            
            <!-- Close Button (Top Right Floating) -->
            <button type="button" 
                    class="btn-close-booking-modal" 
                    data-bs-dismiss="modal" 
                    aria-label="Close booking modal">
                <i class="bi bi-x-lg" aria-hidden="true"></i>
            </button>

            <!-- Modal Body: Focused Form Only -->
            <div class="modal-body p-4 p-md-5">
                
                <!-- Header & Badge -->
                <div class="contact-form-header mb-4 text-start">
                  
                    <h2 class="contact-heading" id="bookingModalLabel">
                        <span class="d-block">Reserve Your Place</span>
                        <span class="d-block">
                            on the
                            <span class="title-highlight">Retreat</span>
                        </span>
                    </h2>
                   
                </div>

                <!-- Underline-Only Form (Mirrors home/contact.php) -->
                <form action="#contact" method="POST" class="contact-form" id="popupBookingForm" novalidate>
                    <div class="row g-3 g-md-4">
                        
                        <!-- 1. Name -->
                        <div class="col-12">
                            <div class="contact-field-group">
                                <input type="text" 
                                       class="form-control contact-underline-input" 
                                       id="modalBookingName" 
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
                                       id="modalBookingPhone" 
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
                                       id="modalBookingEmail" 
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
                                       id="modalBookingWhatsapp" 
                                       name="whatsapp" 
                                       placeholder="WhatsApp Number" 
                                       aria-label="WhatsApp Number">
                            </div>
                        </div>

                        <!-- 5. Consultant Selection -->
                        <div class="col-md-6">
                            <div class="contact-field-group">
                                <select class="form-select contact-underline-select" 
                                        id="modalBookingConsultant" 
                                        name="consultant" 
                                        aria-label="Choose a Consultant"
                                        required>
                                    <option value="" disabled selected>Choose a Consultant</option>
                                    <?php foreach ($modal_consultant_options as $consultant): ?>
                                        <option value="<?= htmlspecialchars($consultant) ?>"><?= htmlspecialchars($consultant) ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <!-- 6. List Service (Grouped by Modalities) -->
                        <div class="col-md-6">
                            <div class="contact-field-group">
                                <select class="form-select contact-underline-select contact-service-select" 
                                        id="modalBookingService" 
                                        name="service" 
                                        aria-label="Choose a Service"
                                        required>
                                    <option value="" disabled selected>Choose a Service</option>
                                    <?php foreach ($modal_service_categories as $category => $services): ?>
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
                                          id="modalBookingDescription" 
                                          name="description" 
                                          rows="2" 
                                          placeholder="Description (Share your healing intention...)" 
                                          aria-label="Description"></textarea>
                            </div>
                        </div>

                        <!-- 8. Submit Button -->
                        <div class="col-12 pt-2">
                            <button type="submit" class="btn btn-contact-submit w-100" id="modalBookingSubmitBtn">
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

<!-- ==========================================================================
     Modal Component Styles
     ========================================================================== -->
<style>
/* Popup Booking Modal Styling - Focused Form */
.popup-booking-modal .modal-dialog {
    max-width: 680px;
}

.popup-booking-modal .modal-content {
    border-radius: 28px;
    box-shadow: 0 30px 80px rgba(11, 11, 26, 0.32);
    overflow: hidden;
    background-color: #ffffff;
}

.popup-booking-modal .btn-close-booking-modal {
    position: absolute;
    top: 1.25rem;
    right: 1.25rem;
    width: 42px;
    height: 42px;
    border-radius: 50%;
    background-color: #f3f4f6;
    border: none;
    color: #475569;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1rem;
    z-index: 30;
    transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    cursor: pointer;
}

.popup-booking-modal .btn-close-booking-modal:hover {
    background-color: var(--secondary-color, #ba436c);
    color: #ffffff;
    transform: rotate(90deg) scale(1.05);
}

/* Modal Backdrop Blur */
.modal-backdrop.show {
    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px);
    background-color: rgba(11, 11, 26, 0.65);
}

@media (max-width: 767.98px) {
    .popup-booking-modal .modal-content {
        border-radius: 22px;
    }
    .popup-booking-modal .btn-close-booking-modal {
        top: 1rem;
        right: 1rem;
        width: 36px;
        height: 36px;
    }
    .popup-booking-modal .modal-body {
        padding: 2rem 1.25rem !important;
    }
}
</style>