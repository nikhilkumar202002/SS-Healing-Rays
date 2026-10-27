/**
 * ==============================================================================
 * Hero Banner Swiper Initialization - SS Healing Rays
 * Handles:
 *   - Crossfade transitions with Ken Burns zoom
 *   - Synchronized text transitions
 *   - Autoplay with smooth hover-pause
 *   - Keyboard & Touch accessibility
 * ==============================================================================
 */

document.addEventListener('DOMContentLoaded', function () {
    const bannerContainer = document.querySelector('.hero-banner-swiper');
    if (!bannerContainer) return;

    if (typeof Swiper === 'undefined') {
        console.warn('Swiper library not loaded. Retrying...');
        return;
    }

    const heroSwiper = new Swiper('.hero-banner-swiper', {
        // Layout & Behavior
        loop: true,
        speed: 1200,
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },
        grabCursor: true,
        watchSlidesProgress: true,

        // Autoplay
        autoplay: {
            delay: 5500,
            disableOnInteraction: false,
            pauseOnMouseEnter: true
        },

        // Navigation Controls
        navigation: {
            nextEl: '.hero-banner-section .swiper-button-next',
            prevEl: '.hero-banner-section .swiper-button-prev'
        },

        // Keyboard navigation
        keyboard: {
            enabled: true,
            onlyInViewport: true
        },

        // Staggered Text Animation on Slide Change
        on: {
            init: function () {
                triggerSlideAnimation(this);
            },
            slideChangeTransitionStart: function () {
                triggerSlideAnimation(this);
            }
        }
    });

    function triggerSlideAnimation(swiperInstance) {
        const slides = swiperInstance.slides;
        if (!slides || !slides.length) return;

        slides.forEach(function (slide) {
            const title = slide.querySelector('.banner-title');
            const desc = slide.querySelector('.banner-description');
            const actions = slide.querySelector('.banner-actions');

            if (slide.classList.contains('swiper-slide-active')) {
                if (title) {
                    title.style.opacity = '1';
                    title.style.transform = 'translateY(0)';
                }
                if (desc) {
                    desc.style.opacity = '1';
                    desc.style.transform = 'translateY(0)';
                }
                if (actions) {
                    actions.style.opacity = '1';
                    actions.style.transform = 'translateY(0)';
                }
            } else {
                if (title) {
                    title.style.opacity = '0';
                    title.style.transform = 'translateY(28px)';
                }
                if (desc) {
                    desc.style.opacity = '0';
                    desc.style.transform = 'translateY(24px)';
                }
                if (actions) {
                    actions.style.opacity = '0';
                    actions.style.transform = 'translateY(20px)';
                }
            }
        });
    }
});
