<?php

$is_standalone_form = (basename($_SERVER['SCRIPT_FILENAME'] ?? '') === 'serviceform.php');

$service_modal_consultants = [
    'Sreeparvathy | Emotional wellness Coach',
    'Sravanti | Healer • Coach • Yoga',
];

$service_modal_categories = [
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
        'Crystal Therapy & Sacred Grid Mastery',
        'Angel Therapy & Celestial Guidance',
        'EFT (Emotional Freedom Techniques)',
    ],
    'III. COURSES on Wellness' => [
        'Spandan – The Sacred Pulse of Healing & Vibration',
        'Chetan – Awaken Witness Consciousness & Presence',
    ],
    'IV. Workshops' => [
        'Energy Reset',
        'Language of crystals',
        'Gratitude',
        'Loving Yourself',
        'Breath work',
        'Mudras',
        'Relaxation',
        'Money manifestation',
        'Energy Routine',
        'Abundance program',
        'Reprogram with meditation',
        'Colour meditation',
    ],
];
?>
<?php if ($is_standalone_form): ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Service Form Modal Preview - SS Healing Rays</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/contact.css">
</head>
<body style="padding: 40px; background: #faf8f5;">
    <div class="container text-center py-5">
        <h2 class="mb-4">Dynamic Service Modal Test</h2>
        <div class="d-flex flex-wrap gap-2 justify-content-center">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#serviceBookingModal" data-service-title="Reiki Healing" data-service-category="I. Healings">Test Reiki Healing</button>
            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#serviceBookingModal" data-service-title="Crystal Therapy & Sacred Grid Mastery" data-service-category="II. Training">Test Crystal Therapy</button>
            <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#serviceBookingModal" data-service-title="Spandan – Sacred Pulse of Vibration" data-service-category="III. Courses on Wellness">Test Spandan</button>
            <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#serviceBookingModal" data-service-title="Breath work" data-service-category="IV. Workshops">Test Breath Work</button>
        </div>
    </div>
<?php endif; ?>


<div class="modal fade popup-booking-modal service-booking-modal" 
     id="serviceBookingModal" 
     tabindex="-1" 
     aria-labelledby="serviceModalLabel" 
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
        <div class="modal-content border-0 position-relative">
            
            <!-- Close Button (Top Right Floating) -->
            <button type="button" 
                    class="btn-close-booking-modal" 
                    data-bs-dismiss="modal" 
                    aria-label="Close modal">
                <i class="bi bi-x-lg" aria-hidden="true"></i>
            </button>

            <!-- Modal Body: Focused Form Only -->
            <div class="modal-body p-4 p-md-5">
                
                <!-- Header -->
                <div class="contact-form-header mb-4 text-start">
                    <h2 class="contact-heading service-modal-heading" id="serviceModalLabel">
                        Take an Appointment
                    </h2>
                </div>

                <!-- Underline-Only Form (Mirrors home/contact.php design) -->
                <form action="contact" method="POST" class="contact-form" id="dynamicServiceBookingForm" novalidate>
                    
                    <!-- Hidden Dynamic Fields -->
                    <input type="hidden" name="service" id="serviceModalHiddenInput" value="">
                    <input type="hidden" name="category" id="serviceModalCategoryInput" value="">

                    <div class="row g-3 g-md-4">
                        
                        <!-- 1. Client Name -->
                        <div class="col-12">
                            <div class="contact-field-group">
                                <input type="text" 
                                       class="form-control contact-underline-input" 
                                       id="serviceClientName" 
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
                                       id="serviceClientPhone" 
                                       name="phone" 
                                       placeholder="Your Phone" 
                                       aria-label="Your Phone" 
                                       required>
                            </div>
                        </div>

                        <!-- 3. Email Address -->
                        <div class="col-md-6">
                            <div class="contact-field-group">
                                <input type="email" 
                                       class="form-control contact-underline-input" 
                                       id="serviceClientEmail" 
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
                                       id="serviceClientWhatsapp" 
                                       name="whatsapp" 
                                       placeholder="WhatsApp Number" 
                                       aria-label="WhatsApp Number">
                            </div>
                        </div>

                        <!-- 5. Consultant Selecting -->
                        <div class="col-md-6">
                            <div class="contact-field-group">
                                <select class="form-select contact-underline-select" 
                                        id="serviceClientConsultant" 
                                        name="consultant" 
                                        aria-label="Choose a Consultant" 
                                        required>
                                    <option value="" disabled selected>Choose a Consultant</option>
                                    <?php foreach ($service_modal_consultants as $consultant): ?>
                                        <option value="<?= htmlspecialchars($consultant) ?>"><?= htmlspecialchars($consultant) ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <!-- 6. Service Selecting (Auto-selected on Card click) -->
                        <div class="col-md-6">
                            <div class="contact-field-group">
                                <select class="form-select contact-underline-select contact-service-select" 
                                        id="serviceModalSelect" 
                                        name="service" 
                                        aria-label="Choose a Service" 
                                        required>
                                    <option value="" disabled selected>Choose a Service</option>
                                    <?php foreach ($service_modal_categories as $category => $services): ?>
                                        <optgroup label="<?= htmlspecialchars($category) ?>">
                                            <?php foreach ($services as $srv): ?>
                                                <option value="<?= htmlspecialchars($srv) ?>"><?= htmlspecialchars($srv) ?></option>
                                            <?php endforeach; ?>
                                        </optgroup>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <!-- 7. Description / Intentions -->
                        <div class="col-12">
                            <div class="contact-field-group">
                                <textarea class="form-control contact-underline-input contact-underline-textarea" 
                                          id="serviceClientDescription" 
                                          name="description" 
                                          rows="2" 
                                          placeholder="Description (Share your healing intention or questions...)" 
                                          aria-label="Description"></textarea>
                            </div>
                        </div>

                        <!-- 8. Submit Button -->
                        <div class="col-12 pt-2">
                            <button type="submit" class="btn btn-contact-submit w-100" id="serviceModalSubmitBtn">
                                <span>Confirm &amp; Enquire Now</span>
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


<style>
.service-booking-modal .modal-dialog {
    max-width: 680px;
}

.service-booking-modal .modal-content {
    border-radius: 28px;
    box-shadow: 0 30px 80px rgba(11, 11, 26, 0.32);
    overflow: hidden;
    background-color: #ffffff;
}

.service-booking-modal .btn-close-booking-modal {
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

.service-booking-modal .btn-close-booking-modal:hover {
    background-color: var(--secondary-color, #ba436c);
    color: #ffffff;
    transform: rotate(90deg) scale(1.05);
}

.service-booking-modal .service-modal-heading,
.service-booking-modal #serviceModalLabel {
    font-size: 25px !important;
    font-family: var(--brand-font-serif, 'Playfair Display', serif);
    color: var(--heading-color, #111133);
    margin: 0 !important;
    font-weight: 700 !important;
    line-height: 1.3 !important;
    letter-spacing: -0.01em;
}

@media (max-width: 767.98px) {
    .service-booking-modal .service-modal-heading,
    .service-booking-modal #serviceModalLabel {
        font-size: 22px !important;
    }
    .service-booking-modal .modal-content {
        border-radius: 22px;
    }
    .service-booking-modal .btn-close-booking-modal {
        top: 1rem;
        right: 1rem;
        width: 36px;
        height: 36px;
    }
    .service-booking-modal .modal-body {
        padding: 2rem 1.25rem !important;
    }
}
</style>

<script>
(function() {
    function initServiceModal() {
        var modalElem = document.getElementById('serviceBookingModal');
        if (!modalElem) return;

        function selectServiceOption(title) {
            var serviceSelect = modalElem.querySelector('#serviceModalSelect');
            if (!serviceSelect || !title) return;

            var rawTitle = title.trim();
            var tempDiv = document.createElement('div');
            tempDiv.innerHTML = rawTitle;
            var cleanTitle = tempDiv.textContent || tempDiv.innerText || rawTitle;

            var titleNorm = cleanTitle.toLowerCase().replace(/[^a-z0-9]/g, '');
            var matchedIndex = -1;

            // 1. Exact match on value or visible text
            for (var i = 0; i < serviceSelect.options.length; i++) {
                var opt = serviceSelect.options[i];
                if (opt.value.trim().toLowerCase() === cleanTitle.toLowerCase() ||
                    opt.text.trim().toLowerCase() === cleanTitle.toLowerCase()) {
                    matchedIndex = i;
                    break;
                }
            }

            // 2. Normalized alphanumeric match
            if (matchedIndex === -1) {
                for (var j = 0; j < serviceSelect.options.length; j++) {
                    var opt2 = serviceSelect.options[j];
                    var valNorm = opt2.value.toLowerCase().replace(/[^a-z0-9]/g, '');
                    var txtNorm = opt2.text.toLowerCase().replace(/[^a-z0-9]/g, '');

                    if (valNorm === titleNorm || txtNorm === titleNorm) {
                        matchedIndex = j;
                        break;
                    }
                }
            }

            // 3. Substring match
            if (matchedIndex === -1 && titleNorm.length >= 4) {
                for (var k = 0; k < serviceSelect.options.length; k++) {
                    var opt3 = serviceSelect.options[k];
                    var valNorm3 = opt3.value.toLowerCase().replace(/[^a-z0-9]/g, '');
                    var txtNorm3 = opt3.text.toLowerCase().replace(/[^a-z0-9]/g, '');

                    if (valNorm3.indexOf(titleNorm) !== -1 || titleNorm.indexOf(valNorm3) !== -1 ||
                        txtNorm3.indexOf(titleNorm) !== -1 || titleNorm.indexOf(txtNorm3) !== -1) {
                        matchedIndex = k;
                        break;
                    }
                }
            }

            if (matchedIndex !== -1) {
                serviceSelect.selectedIndex = matchedIndex;
            } else if (cleanTitle && cleanTitle !== 'Selected Offering') {
                var newOpt = new Option(cleanTitle, cleanTitle, true, true);
                serviceSelect.add(newOpt);
                serviceSelect.value = cleanTitle;
            }
        }

        // Populate modal data dynamically when triggered by any button
        modalElem.addEventListener('show.bs.modal', function(event) {
            var button = event.relatedTarget;
            if (!button) return;

            var title = button.getAttribute('data-service-title') || button.getAttribute('data-title') || '';
            var category = button.getAttribute('data-service-category') || button.getAttribute('data-category') || '';

            var categoryInput = modalElem.querySelector('#serviceModalCategoryInput');
            if (categoryInput && category) categoryInput.value = category;

            if (title) {
                selectServiceOption(title);
            }
        });

        // Global helper for opening modal programmatically
        window.openServiceModal = function(serviceTitle, serviceCategory) {
            var title = serviceTitle || '';
            var category = serviceCategory || '';

            var categoryInput = modalElem.querySelector('#serviceModalCategoryInput');
            if (categoryInput && category) categoryInput.value = category;

            if (title) {
                selectServiceOption(title);
            }

            if (typeof bootstrap !== 'undefined' && bootstrap.Modal) {
                var modalInstance = bootstrap.Modal.getOrCreateInstance(modalElem);
                modalInstance.show();
            }
        };

        // Check URL parameters on page load (e.g. ?service=... or ?training=... or ?course=... or ?workshop=...)
        var urlParams = new URLSearchParams(window.location.search);
        var autoItem = urlParams.get('service') || urlParams.get('training') || urlParams.get('course') || urlParams.get('workshop');
        if (autoItem && typeof bootstrap !== 'undefined' && bootstrap.Modal) {
            setTimeout(function() {
                window.openServiceModal(autoItem, 'Pre-selected Booking');
            }, 500);
        }
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initServiceModal);
    } else {
        initServiceModal();
    }
})();
</script>

<?php if ($is_standalone_form): ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php endif; ?>