<?php
/**
 * ==============================================================================
 * Curated Crystal Categories Swiper Slider Component - SS Healing Rays
 * "Beautifully Crafted. Intentionally Chosen."
 * Dedicated to ame-crystals.php
 * ==============================================================================
 */

$crystal_cat_title_1     = $crystal_cat_title_1 ?? 'Beautifully Crafted.';
$crystal_cat_title_2     = $crystal_cat_title_2 ?? 'Intentionally Chosen.';
$crystal_cat_lead        = $crystal_cat_lead ?? 'A carefully curated selection of product categories, intentionally chosen to bring comfort, grounding, and harmony to your personal journey.';

$crystal_categories = $crystal_categories ?? [
    [
        'title'       => 'Crystal bracelets',
        'subtitle'    => 'Wearable companions for everyday intentions.',
        'image'       => 'assets/categories/customize.jpeg',
    ],
    [
        'title'       => 'Malas & lockets',
        'subtitle'    => 'Traditional forms with personal meaning.',
        'image'       => 'assets/categories/mala.jpg',
    ],
    [
        'title'       => 'Home & space décor',
        'subtitle'    => 'Thoughtfully selected crystals for your surroundings.',
        'image'       => 'assets/categories/home-decor.jpeg',
    ],
    [
        'title'       => 'Tumble stones',
        'subtitle'    => 'Simple, versatile ways to connect with crystals.',
        'image'       => 'assets/categories/tumble-stones.jpeg',
    ],
    [
        'title'       => 'Towers, pyramids & clusters',
        'subtitle'    => 'Statement pieces for personal spaces.',
        'image'       => 'assets/categories/towers-pyramids.jpg',
    ],
    [
        'title'       => 'Customised combinations and grids',
        'subtitle'    => 'Arrangements created around specific intentions.',
        'image'       => 'assets/categories/crystal-grid.jpeg',
    ],
];
?>

<section class="crystal-categories-section position-relative" id="crystalCategories" aria-label="Curated Crystal Categories">
    <div class="container crystal-categories-container">
        
        <!-- Header with Title & Navigation Controls -->
        <div class="row align-items-end justify-content-between mb-4 mb-lg-5 crystal-cat-header-row">
            <div class="col-12 col-lg-8">
                <div class="crystal-cat-header text-center text-lg-start">
                    
                    <!-- Headline: 2-Line Balanced Layout -->
                    <h2 class="crystal-cat-heading mb-3">
                        <span class="heading-line"><?= htmlspecialchars($crystal_cat_title_1) ?></span>
                        <span class="heading-line">
                            <span class="title-highlight"><?= htmlspecialchars($crystal_cat_title_2) ?></span>
                        </span>
                    </h2>

                    <!-- Lead Description -->
                    <p class="crystal-cat-lead mb-0">
                        <?= htmlspecialchars($crystal_cat_lead) ?>
                    </p>

                </div>
            </div>

            <!-- Custom Swiper Navigation Controls (Desktop Top-Right) -->
            <div class="col-12 col-lg-4 d-none d-lg-flex justify-content-end align-items-center">
                <div class="crystal-swiper-nav-group d-flex align-items-center gap-2">
                    <button type="button" 
                            class="crystal-nav-btn crystal-nav-prev" 
                            id="crystalCatPrevBtn" 
                            aria-label="Previous Category">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                    </button>
                    <button type="button" 
                            class="crystal-nav-btn crystal-nav-next" 
                            id="crystalCatNextBtn" 
                            aria-label="Next Category">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Swiper Slider Container -->
        <div class="swiper crystal-categories-swiper" id="crystalCategoriesSwiper">
            <div class="swiper-wrapper">
                <?php foreach ($crystal_categories as $item): ?>
                    <div class="swiper-slide crystal-cat-slide">
                        <div class="crystal-cat-card h-100 d-flex flex-column">
                            
                            <!-- Card Image Box (Badge removed) -->
                            <div class="crystal-cat-media position-relative overflow-hidden">
                                <img src="<?= htmlspecialchars($item['image']) ?>" 
                                     alt="<?= htmlspecialchars($item['title']) ?>" 
                                     class="crystal-cat-img"
                                     loading="lazy">
                            </div>

                            <!-- Card Body -->
                            <div class="crystal-cat-body d-flex flex-column flex-grow-1 p-3 p-sm-4">
                                <h3 class="crystal-cat-card-title mb-2">
                                    <?= htmlspecialchars($item['title']) ?>
                                </h3>
                                <p class="crystal-cat-card-desc mb-3 flex-grow-1">
                                    <?= htmlspecialchars($item['subtitle']) ?>
                                </p>
                                
                                <!-- Card Footer Action: Enquiry Now Button (Text Only) -->
                                <div class="crystal-cat-footer mt-auto">
                                    <button type="button" 
                                            class="btn btn-crystal-enquiry w-100"
                                            data-bs-toggle="modal" 
                                            data-bs-target="#bookingModal"
                                            data-service-title="<?= htmlspecialchars($item['title']) ?>"
                                            data-service-category="Âme Crystals"
                                            aria-label="Enquiry Now for <?= htmlspecialchars($item['title']) ?>">
                                        Enquiry Now
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Mobile Navigation & Pagination Controls -->
            <div class="crystal-swiper-controls-mobile d-flex d-lg-none align-items-center justify-content-between mt-4">
                <button type="button" 
                        class="crystal-nav-btn crystal-nav-prev-mobile" 
                        id="crystalCatPrevBtnMobile" 
                        aria-label="Previous Category">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <polyline points="15 18 9 12 15 6"></polyline>
                    </svg>
                </button>
                <div class="swiper-pagination crystal-cat-pagination" id="crystalCatPaginationMobile"></div>
                <button type="button" 
                        class="crystal-nav-btn crystal-nav-next-mobile" 
                        id="crystalCatNextBtnMobile" 
                        aria-label="Next Category">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </button>
            </div>

            <!-- Desktop Pagination Dots -->
            <div class="swiper-pagination crystal-cat-pagination d-none d-lg-block mt-4" id="crystalCatPaginationDesktop"></div>

        </div>

    </div>
</section>

<!-- Swiper Slider Initializer Script with Resilient Direct Arrow Event Handlers -->
<script>
(function() {
    function initCrystalCategoriesSwiper() {
        const swiperEl = document.getElementById('crystalCategoriesSwiper');
        if (!swiperEl) return;

        // Ensure Swiper library is loaded; if not yet available, retry shortly
        if (typeof Swiper === 'undefined') {
            setTimeout(initCrystalCategoriesSwiper, 60);
            return;
        }

        if (swiperEl.dataset.initialized === 'true') {
            return;
        }
        swiperEl.dataset.initialized = 'true';

        // Select pagination element based on viewport
        const isDesktop = window.innerWidth >= 992;
        const paginationTarget = isDesktop ? '#crystalCatPaginationDesktop' : '#crystalCatPaginationMobile';

        const crystalSwiper = new Swiper('#crystalCategoriesSwiper', {
            slidesPerView: 1.15,
            spaceBetween: 16,
            loop: false,
            speed: 550,
            grabCursor: true,
            watchOverflow: true,
            pagination: {
                el: paginationTarget,
                clickable: true,
            },
            breakpoints: {
                576: {
                    slidesPerView: 2,
                    spaceBetween: 18,
                },
                768: {
                    slidesPerView: 2.3,
                    spaceBetween: 20,
                },
                992: {
                    slidesPerView: 3,
                    spaceBetween: 24,
                },
                1200: {
                    slidesPerView: 3.2,
                    spaceBetween: 26,
                }
            }
        });

        // Store reference on DOM element and window for global access
        swiperEl.crystalSwiper = crystalSwiper;
        window.crystalCategoriesSwiper = crystalSwiper;

        const prevBtnDesktop = document.getElementById('crystalCatPrevBtn');
        const nextBtnDesktop = document.getElementById('crystalCatNextBtn');
        const prevBtnMobile  = document.getElementById('crystalCatPrevBtnMobile');
        const nextBtnMobile  = document.getElementById('crystalCatNextBtnMobile');

        function syncNavButtons() {
            const isBeginning = crystalSwiper.isBeginning;
            const isEnd       = crystalSwiper.isEnd;

            [prevBtnDesktop, prevBtnMobile].forEach(btn => {
                if (!btn) return;
                if (isBeginning) {
                    btn.classList.add('swiper-button-disabled');
                    btn.setAttribute('aria-disabled', 'true');
                } else {
                    btn.classList.remove('swiper-button-disabled');
                    btn.setAttribute('aria-disabled', 'false');
                }
            });

            [nextBtnDesktop, nextBtnMobile].forEach(btn => {
                if (!btn) return;
                if (isEnd) {
                    btn.classList.add('swiper-button-disabled');
                    btn.setAttribute('aria-disabled', 'true');
                } else {
                    btn.classList.remove('swiper-button-disabled');
                    btn.setAttribute('aria-disabled', 'false');
                }
            });
        }

        // Initialize button state and bind to slide changes
        syncNavButtons();
        crystalSwiper.on('slideChange', syncNavButtons);
        crystalSwiper.on('update', syncNavButtons);

        function handlePrev(e) {
            if (e) {
                e.preventDefault();
                e.stopPropagation();
            }
            if (!crystalSwiper.isBeginning) {
                crystalSwiper.slidePrev();
            }
        }

        function handleNext(e) {
            if (e) {
                e.preventDefault();
                e.stopPropagation();
            }
            if (!crystalSwiper.isEnd) {
                crystalSwiper.slideNext();
            }
        }

        if (prevBtnDesktop) {
            prevBtnDesktop.addEventListener('click', handlePrev);
        }
        if (nextBtnDesktop) {
            nextBtnDesktop.addEventListener('click', handleNext);
        }
        if (prevBtnMobile) {
            prevBtnMobile.addEventListener('click', handlePrev);
        }
        if (nextBtnMobile) {
            nextBtnMobile.addEventListener('click', handleNext);
        }
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initCrystalCategoriesSwiper);
    } else {
        initCrystalCategoriesSwiper();
    }
    window.addEventListener('load', initCrystalCategoriesSwiper);
})();
</script>
