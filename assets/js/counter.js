/**
 * ==============================================================================
 * Counter Animation Script - SS Healing Rays
 * Animates numeric metrics smoothly when scrolled into viewport
 * ==============================================================================
 */

(function () {
    'use strict';

    function initCounters() {
        const counterSection = document.getElementById('counter');
        if (!counterSection) return;

        const countElements = counterSection.querySelectorAll('.counter-count[data-target]');
        if (!countElements.length) return;

        let hasAnimated = false;

        function animateCount(el) {
            const target = parseInt(el.getAttribute('data-target'), 10);
            if (isNaN(target)) return;

            const duration = 1600; // ms
            const startTime = performance.now();

            function update(currentTime) {
                const elapsed = currentTime - startTime;
                const progress = Math.min(elapsed / duration, 1);

                // Ease-out quad curve
                const easeOut = progress * (2 - progress);
                const current = Math.floor(easeOut * target);

                el.textContent = current;

                if (progress < 1) {
                    requestAnimationFrame(update);
                } else {
                    el.textContent = target;
                }
            }

            requestAnimationFrame(update);
        }

        function triggerAll() {
            if (hasAnimated) return;
            hasAnimated = true;
            countElements.forEach(el => animateCount(el));
        }

        // IntersectionObserver for scroll-triggered activation
        if ('IntersectionObserver' in window) {
            const observer = new IntersectionObserver((entries, obs) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        triggerAll();
                        obs.disconnect();
                    }
                });
            }, {
                threshold: 0.2,
                rootMargin: '0px 0px -40px 0px'
            });

            observer.observe(counterSection);
        } else {
            // Fallback for older browsers
            triggerAll();
        }
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initCounters);
    } else {
        initCounters();
    }
})();

