<?php

$is_standalone_product_form = (basename($_SERVER['SCRIPT_FILENAME'] ?? '') === 'productenquiryform.php');

$product_dropdown_list = [
    'direct' => [
        'Book a clarity call' => '1. Book a clarity call',
    ],
    'AME' => [
        'AME - Jewellery'   => 'AME - Jewellery',
        'AME - Home Decor'  => 'AME - Home Decor',
        'AME - Pouch'       => 'AME - Pouch',
        'AME - Cleansers'   => 'AME - Cleansers',
        'AME - Grids'       => 'AME - Grids',
    ],
    'SHAMAA' => [
        'SHAMAA - Demo session'                     => 'SHAMAA - Demo session',
        'SHAMAA - Group Session'                    => 'SHAMAA - Group Session',
        'SHAMAA - Personal Therapeutic yoga session'=> 'SHAMAA - Personal Therapeutic yoga session',
    ],
];
?>

<?php if ($is_standalone_product_form): ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Enquiry Form - SS Healing Rays</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700&family=Marcellus&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,600&family=Outfit:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/contact.css">
</head>
<body style="background: #faf8f5; min-height: 100vh; padding: 40px 20px;">
    <div class="container text-center py-4">
        <h2 class="mb-3" style="font-family: 'Marcellus', serif; color: #111133;">Product Enquiry Form Preview</h2>
        <p class="text-muted mb-4">Click below to open the modal or view the form inline.</p>
        <div class="d-flex flex-wrap gap-2 justify-content-center mb-5">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#productEnquiryModal">Open Enquiry Modal</button>
            <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#productEnquiryModal" data-product="AME - Jewellery">Enquire: AME - Jewellery</button>
            <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#productEnquiryModal" data-product="AME - Grids">Enquire: AME - Grids</button>
            <button class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#productEnquiryModal" data-product="SHAMAA - Demo session">Enquire: SHAMAA Demo</button>
        </div>
    </div>
<?php endif; ?>

<!-- ==========================================================================
     Product Enquiry Modal Component (Bootstrap 5.3)
     ========================================================================== -->
<div class="modal fade popup-booking-modal product-enquiry-modal" 
     id="productEnquiryModal" 
     tabindex="-1" 
     aria-labelledby="productEnquiryModalLabel" 
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
        <div class="modal-content border-0 position-relative">
            
            <!-- Close Button (Top Right Floating) -->
            <button type="button" 
                    class="btn-close-booking-modal" 
                    data-bs-dismiss="modal" 
                    aria-label="Close product enquiry modal">
                <i class="bi bi-x-lg" aria-hidden="true"></i>
            </button>

            <!-- Modal Body: Focused Form Only -->
            <div class="modal-body p-4 p-md-5">
                
                <!-- Header -->
                <div class="contact-form-header mb-4 text-start">
                    <div class="product-enquiry-badge mb-2 d-inline-flex align-items-center gap-1">
                        <i class="bi bi-gem text-secondary"></i>
                        <span>Product &amp; Consultation Enquiry</span>
                    </div>
                    <h2 class="contact-heading" id="productEnquiryModalLabel">
                        <span class="d-block">Choose a Product</span>
                        <span class="d-block">
                            &amp; Connect
                            <span class="title-highlight">With Us</span>
                        </span>
                    </h2>
                    <p class="text-muted small mt-2 mb-0">
                        Please share your details. Our team will reach out promptly with personalized guidance and availability.
                    </p>
                </div>

                <!-- Clean Underline Product Enquiry Form -->
                <form action="#contact" method="POST" class="contact-form product-enquiry-form" id="productEnquiryForm" novalidate>
                    <div class="row g-3 g-md-4">
                        
                        <!-- 1. Name (Required) -->
                        <div class="col-12 col-md-6">
                            <div class="contact-field-group">
                                <label for="productEnquiryName" class="product-form-label">Your Name <span class="text-danger">*</span></label>
                                <input type="text" 
                                       class="form-control contact-underline-input" 
                                       id="productEnquiryName" 
                                       name="name" 
                                       placeholder="Enter your full name" 
                                       aria-label="Your Name"
                                       required>
                            </div>
                        </div>

                        <!-- 2. Phone Number (Required) -->
                        <div class="col-12 col-md-6">
                            <div class="contact-field-group">
                                <label for="productEnquiryPhone" class="product-form-label">Phone Number <span class="text-danger">*</span></label>
                                <input type="tel" 
                                       class="form-control contact-underline-input" 
                                       id="productEnquiryPhone" 
                                       name="phone" 
                                       placeholder="Enter phone number" 
                                       aria-label="Phone Number"
                                       required>
                            </div>
                        </div>

                        <!-- 3. WhatsApp Number (Required with "Same as Phone" checkbox) -->
                        <div class="col-12 col-md-6">
                            <div class="contact-field-group">
                                <div class="d-flex justify-content-between align-items-center mb-1">
                                    <label for="productEnquiryWhatsapp" class="product-form-label mb-0">WhatsApp Number <span class="text-danger">*</span></label>
                                    <div class="form-check product-same-whatsapp-check mb-0">
                                        <input class="form-check-input" type="checkbox" id="productSameAsPhone">
                                        <label class="form-check-label small text-muted cursor-pointer" for="productSameAsPhone">
                                            Same as Phone
                                        </label>
                                    </div>
                                </div>
                                <input type="tel" 
                                       class="form-control contact-underline-input" 
                                       id="productEnquiryWhatsapp" 
                                       name="whatsapp" 
                                       placeholder="Enter WhatsApp number" 
                                       aria-label="WhatsApp Number"
                                       required>
                            </div>
                        </div>

                        <!-- 4. Email ID (Not Mandatory / Optional) -->
                        <div class="col-12 col-md-6">
                            <div class="contact-field-group">
                                <label for="productEnquiryEmail" class="product-form-label">Email ID <span class="text-muted small">(Optional)</span></label>
                                <input type="email" 
                                       class="form-control contact-underline-input" 
                                       id="productEnquiryEmail" 
                                       name="email" 
                                       placeholder="Enter email address (Optional)" 
                                       aria-label="Email ID (Optional)">
                            </div>
                        </div>

                        <!-- 5. Choose a Product (Dropdown List with optgroups) -->
                        <div class="col-12">
                            <div class="contact-field-group">
                                <label for="productEnquirySelect" class="product-form-label">Choose a Product <span class="text-danger">*</span></label>
                                <select class="form-select contact-underline-select product-enquiry-select" 
                                        id="productEnquirySelect" 
                                        name="product" 
                                        aria-label="Choose a product"
                                        required>
                                    <option value="" disabled selected>Select a Product / Service</option>
                                    <option value="Book a clarity call">1. Book a clarity call</option>
                                    
                                    <optgroup label="2. AME">
                                        <option value="AME - Jewellery">AME - Jewellery</option>
                                        <option value="AME - Home Decor">AME - Home Decor</option>
                                        <option value="AME - Pouch">AME - Pouch</option>
                                        <option value="AME - Cleansers">AME - Cleansers</option>
                                        <option value="AME - Grids">AME - Grids</option>
                                    </optgroup>
                                    
                                    <optgroup label="3. SHAMAA">
                                        <option value="SHAMAA - Demo session">SHAMAA - Demo session</option>
                                        <option value="SHAMAA - Group Session">SHAMAA - Group Session</option>
                                        <option value="SHAMAA - Personal Therapeutic yoga session">SHAMAA - Personal Therapeutic yoga session</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>

                        <!-- 6. Submit Button -->
                        <div class="col-12 pt-3">
                            <button type="submit" class="btn btn-contact-submit w-100" id="productEnquirySubmitBtn">
                                <span>Submit Enquiry</span>
                                <i class="bi bi-arrow-right-short ms-1" aria-hidden="true"></i>
                            </button>
                            <p class="contact-privacy-note text-center mt-2 mb-0">
                                <i class="bi bi-shield-check me-1 text-secondary"></i>
                                We respect your privacy. Your information is safe and never shared.
                            </p>
                        </div>

                    </div>
                </form>

            </div>

        </div>
    </div>
</div>

<!-- ==========================================================================
     Styles for Product Enquiry Modal & Form
     ========================================================================== -->
<style>
.product-enquiry-modal .modal-dialog {
    max-width: 680px;
}

.product-enquiry-modal .modal-content {
    border-radius: 28px;
    box-shadow: 0 30px 80px rgba(11, 11, 26, 0.32);
    overflow: hidden;
    background-color: #ffffff;
}

.product-enquiry-badge {
    font-family: var(--brand-font-sans, 'Lato', sans-serif);
    font-size: 0.78rem;
    font-weight: 700;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    color: var(--secondary-color, #ba436c);
}

.product-form-label {
    font-family: var(--brand-font-sans, 'Lato', sans-serif);
    font-size: 0.85rem;
    font-weight: 600;
    color: #334155;
    margin-bottom: 0.35rem;
    display: block;
}

.product-same-whatsapp-check .form-check-input {
    width: 1rem;
    height: 1rem;
    cursor: pointer;
    border-color: rgba(130, 56, 122, 0.35);
}

.product-same-whatsapp-check .form-check-input:checked {
    background-color: var(--primary-color, #82387a);
    border-color: var(--primary-color, #82387a);
}

.product-same-whatsapp-check label {
    user-select: none;
    -webkit-user-select: none;
    font-size: 0.78rem;
    color: #64748b;
}

.product-enquiry-select optgroup {
    font-weight: 700;
    color: var(--primary-color, #82387a);
    background: #fdfafe;
    padding: 4px;
}

.product-enquiry-select option {
    font-weight: 400;
    color: #1e293b;
    padding: 6px;
}

.synced-field {
    background-color: #f8fafc !important;
    color: #475569 !important;
}
</style>

<!-- ==========================================================================
     JavaScript Sync & Dynamic Pre-selection
     ========================================================================== -->
<script>
(function() {
    function initProductEnquiryForm() {
        const phoneInput       = document.getElementById('productEnquiryPhone');
        const whatsappInput    = document.getElementById('productEnquiryWhatsapp');
        const sameAsPhoneCheck = document.getElementById('productSameAsPhone');
        const productSelect    = document.getElementById('productEnquirySelect');
        const modalEl          = document.getElementById('productEnquiryModal');

        if (!phoneInput || !whatsappInput || !sameAsPhoneCheck) return;

        // Sync WhatsApp number with Phone number when checkbox is toggled
        sameAsPhoneCheck.addEventListener('change', function() {
            if (this.checked) {
                whatsappInput.value = phoneInput.value;
                whatsappInput.setAttribute('readonly', 'readonly');
                whatsappInput.classList.add('synced-field');
            } else {
                whatsappInput.removeAttribute('readonly');
                whatsappInput.classList.remove('synced-field');
            }
        });

        // Live sync while typing phone number if checkbox is checked
        phoneInput.addEventListener('input', function() {
            if (sameAsPhoneCheck.checked) {
                whatsappInput.value = this.value;
            }
        });

        // Dynamic pre-selection when opening modal from various buttons
        if (modalEl && productSelect) {
            modalEl.addEventListener('show.bs.modal', function(event) {
                const triggerBtn = event.relatedTarget;
                if (!triggerBtn) return;

                const specificProduct = triggerBtn.getAttribute('data-product') || triggerBtn.getAttribute('data-service-title');
                if (!specificProduct) return;

                const searchVal = specificProduct.toLowerCase();
                let matchedValue = '';

                // Smart matching against option values
                Array.from(productSelect.options).forEach(opt => {
                    const optVal = opt.value.toLowerCase();
                    if (optVal.includes(searchVal) || searchVal.includes(optVal.replace(/^(ame - |shamaa - |\d+\.\s*)/i, ''))) {
                        matchedValue = opt.value;
                    }
                });

                // Direct mapping fallback
                if (!matchedValue) {
                    if (searchVal.includes('jewel') || searchVal.includes('bracelet') || searchVal.includes('mala')) {
                        matchedValue = 'AME - Jewellery';
                    } else if (searchVal.includes('decor') || searchVal.includes('tree') || searchVal.includes('chime')) {
                        matchedValue = 'AME - Home Decor';
                    } else if (searchVal.includes('pouch') || searchVal.includes('tumble')) {
                        matchedValue = 'AME - Pouch';
                    } else if (searchVal.includes('cleanse') || searchVal.includes('sage') || searchVal.includes('palo')) {
                        matchedValue = 'AME - Cleansers';
                    } else if (searchVal.includes('grid')) {
                        matchedValue = 'AME - Grids';
                    } else if (searchVal.includes('clarity') || searchVal.includes('consultation')) {
                        matchedValue = 'Book a clarity call';
                    } else if (searchVal.includes('demo')) {
                        matchedValue = 'SHAMAA - Demo session';
                    } else if (searchVal.includes('group')) {
                        matchedValue = 'SHAMAA - Group Session';
                    } else if (searchVal.includes('yoga') || searchVal.includes('therapeutic') || searchVal.includes('personal')) {
                        matchedValue = 'SHAMAA - Personal Therapeutic yoga session';
                    }
                }

                if (matchedValue) {
                    productSelect.value = matchedValue;
                }
            });
        }
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initProductEnquiryForm);
    } else {
        initProductEnquiryForm();
    }
})();
</script>

<?php if ($is_standalone_product_form): ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php endif; ?>
