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

        // Direct redirection for Services menu item
        const servicesToggle = document.getElementById('servicesMegaMenuToggle');
        if (servicesToggle) {
            servicesToggle.addEventListener('click', function (e) {
                const targetUrl = this.getAttribute('href');
                if (targetUrl && targetUrl !== '#' && targetUrl !== '') {
                    window.location.href = targetUrl;
                }
            });
        }

        // Mobile Drawer Link Handling: For in-page anchor links, close the drawer so target section is visible
        const mobileDrawerEl = document.getElementById('mobileDrawer');
        if (mobileDrawerEl) {
            const drawerLinks = mobileDrawerEl.querySelectorAll('a[href]');
            drawerLinks.forEach(link => {
                link.addEventListener('click', function (e) {
                    const href = this.getAttribute('href');
                    if (!href || href === '#' || href.startsWith('tel:') || href.startsWith('mailto:')) return;

                    // If it's a hash link on the current page, close the drawer smoothly
                    const hashIndex = href.indexOf('#');
                    if (hashIndex !== -1) {
                        const linkPath = href.substring(0, hashIndex).replace(/^\/|\/$/g, '');
                        const currentPath = window.location.pathname.replace(/^\/|\/$/g, '');
                        
                        if (linkPath === '' || linkPath === currentPath) {
                            if (typeof bootstrap !== 'undefined' && bootstrap.Offcanvas) {
                                const instance = bootstrap.Offcanvas.getInstance(mobileDrawerEl);
                                if (instance) {
                                    instance.hide();
                                }
                            }
                        }
                    }
                });
            });
        }
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initHeader);
    } else {
        initHeader();
    }
})();
