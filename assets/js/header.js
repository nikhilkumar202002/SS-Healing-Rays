/**
 * Header Interactions - SS Healing Rays
 * Handles sticky scroll elevation and navbar shrink with Bootstrap 5
 */

(function () {
    'use strict';

    function initHeader() {
        const header = document.getElementById('siteHeader');

        if (header) {
            const handleScroll = () => {
                if (window.scrollY > 20) {
                    header.classList.add('is-scrolled');
                } else {
                    header.classList.remove('is-scrolled');
                }
            };
            window.addEventListener('scroll', handleScroll, { passive: true });
            handleScroll();
        }
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initHeader);
    } else {
        initHeader();
    }
})();
