/**
 * ==============================================================================
 * Services Carousel Initializer - SS Healing Rays (Swiper 11)
 * Features:
 *   - Fluid 4-card desktop layout matching UI screenshot
 *   - Clean smooth slide transitions
 *   - Custom circular navigation buttons
 *   - Responsive breakpoints (1.2 to 4 slides)
 * ==============================================================================
 */

document.addEventListener('DOMContentLoaded', function () {
    const servicesSliderEl = document.querySelector('.services-swiper');
    if (!servicesSliderEl) return;

    const servicesSwiper = new Swiper('.services-swiper', {
        slidesPerView: 1.2,
        spaceBetween: 14,
        loop: true,
        speed: 650,
        grabCursor: true,
        autoplay: {
            delay: 4500,
            disableOnInteraction: false,
            pauseOnMouseEnter: true,
        },
        navigation: {
            prevEl: '#servicesPrevBtn',
            nextEl: '#servicesNextBtn',
        },
        breakpoints: {
            // Mobile (larger portrait)
            480: {
                slidesPerView: 1.5,
                spaceBetween: 14,
            },
            // Tablet (portrait)
            640: {
                slidesPerView: 2.2,
                spaceBetween: 16,
            },
            // Tablet (landscape)
            880: {
                slidesPerView: 3.1,
                spaceBetween: 16,
            },
            // Desktop: 4 cards visible matching screenshot
            1100: {
                slidesPerView: 4,
                spaceBetween: 18,
            },
            // Large screens
            1400: {
                slidesPerView: 4,
                spaceBetween: 22,
            }
        }
    });
});
