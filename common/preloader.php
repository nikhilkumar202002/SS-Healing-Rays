<?php
/**
 * ==============================================================================
 * Homepage Preloader Component - SS Healing Rays
 * Layout: Fullscreen Sanctuary Overlay | Centered Brand Logo | Small Sacred Loading Below
 * ==============================================================================
 */

$is_standalone = (basename($_SERVER['SCRIPT_FILENAME'] ?? '') === 'preloader.php');
$preloader_logo = $site_logo ?? 'assets/logo/main-logo-white-border.png';

// Handle standalone preview path resolution
if (!file_exists($preloader_logo) && file_exists(__DIR__ . '/../' . $preloader_logo)) {
    $preloader_logo = '../' . $preloader_logo;
}
?>
<?php if ($is_standalone): ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SS Healing Rays - Preloader Preview</title>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body style="margin: 0; padding: 0; background: #faf8f5;">
<?php endif; ?>

<!-- SS Healing Rays Sanctuary Preloader -->
<div id="ss-preloader" class="ss-preloader" aria-label="Loading SS Healing Rays" role="status">
    <div class="ss-preloader-content">
        <!-- Centered Brand Logo -->
        <div class="ss-preloader-logo-wrap">
            <img src="<?= htmlspecialchars($preloader_logo) ?>" 
                 alt="SS Healing Rays Logo" 
                 class="ss-preloader-logo"
                 width="140"
                 height="auto">
        </div>

        <!-- Small Loading Just Below The Logo -->
        <div class="ss-preloader-loading">
            <div class="ss-preloader-spinner" aria-hidden="true"></div>
        </div>
    </div>
</div>

<style>
/* ==========================================================================
   SS Healing Rays - Preloader Styles (Critical Early Render)
   ========================================================================== */
.ss-preloader {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    width: 100vw;
    height: 100vh;
    background: #ffffff;
    background: radial-gradient(circle at center, #ffffff 0%, #fdfafc 55%, #f7f1f7 100%);
    z-index: 999999;
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 1;
    visibility: visible;
    transition: opacity 0.55s cubic-bezier(0.16, 1, 0.3, 1),
                visibility 0.55s cubic-bezier(0.16, 1, 0.3, 1);
    will-change: opacity, visibility;
    user-select: none;
    -webkit-user-select: none;
    pointer-events: all;
}

.ss-preloader.is-hidden {
    opacity: 0 !important;
    visibility: hidden !important;
    pointer-events: none !important;
}

.ss-preloader-content {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 24px;
    animation: ssPreloaderFadeIn 0.4s ease-out forwards;
}

.ss-preloader-logo-wrap {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 22px;
}

.ss-preloader-logo {
    width: 140px;
    height: auto;
    max-width: 75vw;
    display: block;
    object-fit: contain;
    filter: drop-shadow(0 6px 20px rgba(130, 56, 122, 0.08));
    animation: ssPreloaderLogoPulse 2.4s ease-in-out infinite;
}

/* Small Loading Spinner Just Below Logo */
.ss-preloader-loading {
    display: flex;
    align-items: center;
    justify-content: center;
}

.ss-preloader-spinner {
    width: 26px;
    height: 26px;
    border: 2.5px solid rgba(130, 56, 122, 0.12);
    border-top-color: #82387a;
    border-right-color: #ba436c;
    border-radius: 50%;
    animation: ssPreloaderSpin 0.85s linear infinite;
    box-shadow: 0 0 14px rgba(186, 67, 108, 0.15);
}

/* Keyframe Animations */
@keyframes ssPreloaderFadeIn {
    0% {
        opacity: 0;
        transform: translateY(8px) scale(0.97);
    }
    100% {
        opacity: 1;
        transform: translateY(0) scale(1);
    }
}

@keyframes ssPreloaderLogoPulse {
    0%, 100% {
        transform: scale(1);
        filter: drop-shadow(0 6px 20px rgba(130, 56, 122, 0.08));
    }
    50% {
        transform: scale(1.03);
        filter: drop-shadow(0 10px 28px rgba(130, 56, 122, 0.16));
    }
}

@keyframes ssPreloaderSpin {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}

@media (max-width: 576px) {
    .ss-preloader-logo {
        width: 115px;
    }
    .ss-preloader-spinner {
        width: 22px;
        height: 22px;
        border-width: 2px;
    }
    .ss-preloader-logo-wrap {
        margin-bottom: 18px;
    }
}
</style>

<script>
(function() {
    function dismissPreloader() {
        var preloader = document.getElementById('ss-preloader');
        if (!preloader || preloader.classList.contains('is-hidden')) return;
        
        preloader.classList.add('is-hidden');
        
        // Remove from DOM after transition completes to free memory
        setTimeout(function() {
            if (preloader && preloader.parentNode) {
                preloader.parentNode.removeChild(preloader);
            }
        }, 600);
    }

    // Dismiss when DOM & all resources finish loading
    if (document.readyState === 'complete') {
        setTimeout(dismissPreloader, 400);
    } else {
        window.addEventListener('load', function() {
            setTimeout(dismissPreloader, 450);
        });
    }

    // Safety fallback: Never keep user waiting longer than 2.5s even if an asset stalls
    setTimeout(dismissPreloader, 2500);
})();
</script>

<?php if ($is_standalone): ?>
<div style="position: absolute; bottom: 30px; left: 0; right: 0; text-align: center; font-family: sans-serif; font-size: 13px; color: #888;">
    Standalone Preview Mode &bull; Refresh to replay
</div>
</body>
</html>
<?php endif; ?>