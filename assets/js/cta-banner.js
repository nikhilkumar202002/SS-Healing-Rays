/**
 * ==============================================================================
 * CTA Banner Swiper Initialization - Whispers of Stillness Retreat
 * Crossfade background animation with smooth transitions
 * ==============================================================================
 */

document.addEventListener('DOMContentLoaded', function () {
    const ctaSwiperContainer = document.querySelector('.cta-banner-swiper');
    if (!ctaSwiperContainer) return;

    if (typeof Swiper === 'undefined') {
        console.warn('Swiper not loaded yet for CTA banner.');
        return;
    }

    const ctaSwiper = new Swiper('.cta-banner-swiper', {
        loop: true,
        speed: 1600,
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },
        allowTouchMove: false, // Ambient background
        autoplay: {
            delay: 4500,
            disableOnInteraction: false
        }
    });
});
