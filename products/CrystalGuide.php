<?php
/**
 * ==============================================================================
 * Crystal Guide Section - Âme Crystals (SS Healing Rays)
 * "Crystal Guide"
 * 2 Images on 2 Columns on White Background Section
 * Dedicated Stylesheet: assets/css/productbanner.css
 * ==============================================================================
 */

$crystal_guide_heading = $crystal_guide_heading ?? 'Crystal Guide';
$crystal_guide_lead    = $crystal_guide_lead ?? '';

// Robust live-server image resolution with Linux permission fix & extension auto-sync
if (!function_exists('resolve_live_crystal_guide_image')) {
    function resolve_live_crystal_guide_image($base_filename, $fallback_rel_path = '') {
        $root = dirname(__DIR__);
        $dir  = $root . '/assets/images';

        // Candidates to search on Linux live server (case & extension variants)
        $candidates = [
            $base_filename . '.jpeg',
            $base_filename . '.jpg',
            $base_filename . '.png',
            $base_filename . '.webp',
            $base_filename . '.JPEG',
            $base_filename . '.JPG',
            $base_filename . '.PNG',
            str_replace('-', '_', $base_filename) . '.jpeg',
            str_replace('-', '_', $base_filename) . '.jpg',
            str_replace('crystal-', '', $base_filename) . '.jpeg',
            str_replace('crystal-', '', $base_filename) . '.jpg',
        ];

        $found_rel = '';
        foreach ($candidates as $cand) {
            $full = $dir . '/' . $cand;
            if (file_exists($full) && is_file($full)) {
                // Ensure 0644 permissions on Linux live server
                @chmod($full, 0644);

                // Auto-create matching .jpg from .jpeg or .jpeg from .jpg with 0644 permissions
                if (str_ends_with(strtolower($cand), '.jpeg')) {
                    $jpg_target = $dir . '/' . substr($cand, 0, -5) . '.jpg';
                    if (!file_exists($jpg_target)) {
                        @copy($full, $jpg_target);
                        @chmod($jpg_target, 0644);
                    }
                } elseif (str_ends_with(strtolower($cand), '.jpg')) {
                    $jpeg_target = $dir . '/' . substr($cand, 0, -4) . '.jpeg';
                    if (!file_exists($jpeg_target)) {
                        @copy($full, $jpeg_target);
                        @chmod($jpeg_target, 0644);
                    }
                }

                $found_rel = 'assets/images/' . $cand;
                break;
            }
        }

        if (!empty($found_rel)) {
            return $found_rel;
        }

        // Check fallback if primary was not found on server disk
        if (!empty($fallback_rel_path) && file_exists($root . '/' . $fallback_rel_path)) {
            return $fallback_rel_path;
        }

        return 'assets/images/' . $base_filename . '.jpg';
    }
}

// Tracked gallery fallbacks to guarantee live server never renders broken image box
$fallback_guide_1 = 'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.42 PM (1).jpeg';
$fallback_guide_2 = 'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.43 PM.jpeg';

$crystal_guide_img_1 = resolve_live_crystal_guide_image('crystal-guide-1', $fallback_guide_1);
$crystal_guide_img_2 = resolve_live_crystal_guide_image('crystal-guide-2', $fallback_guide_2);
?>

<section class="crystal-guide-section position-relative bg-white" id="crystalGuide" aria-label="Crystal Guide">
    <div class="container crystal-guide-container">
        
        <!-- Section Header (Centered) -->
        <div class="row justify-content-center mb-4 mb-lg-5 crystal-guide-header-row">
            <div class="col-12 col-lg-8 text-center">
                <h2 class="crystal-guide-heading mb-0">
                    <?= htmlspecialchars($crystal_guide_heading) ?>
                </h2>
                <?php if (!empty($crystal_guide_lead)): ?>
                    <p class="crystal-guide-lead mt-3 mb-0">
                        <?= htmlspecialchars($crystal_guide_lead) ?>
                    </p>
                <?php endif; ?>
            </div>
        </div>

        <!-- 2 Columns Image Grid -->
        <div class="row g-4 g-lg-5 justify-content-center crystal-guide-grid">
            
            <!-- Column 1: Guide Image 1 -->
            <div class="col-12 col-md-6 d-flex justify-content-center">
                <div class="crystal-guide-card w-100 position-relative overflow-hidden">
                    <img src="<?= htmlspecialchars($crystal_guide_img_1) ?>" 
                         alt="Crystal Guide Part 1" 
                         class="crystal-guide-img img-fluid"
                         loading="lazy"
                         onerror="if (!this.dataset.retried) { this.dataset.retried='1'; this.src = (this.src.indexOf('.jpeg') !== -1) ? this.src.replace('.jpeg', '.jpg') : this.src.replace('.jpg', '.jpeg'); } else { this.src='assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.42 PM (1).jpeg'; }">
                </div>
            </div>

            <!-- Column 2: Guide Image 2 -->
            <div class="col-12 col-md-6 d-flex justify-content-center">
                <div class="crystal-guide-card w-100 position-relative overflow-hidden">
                    <img src="<?= htmlspecialchars($crystal_guide_img_2) ?>" 
                         alt="Crystal Guide Part 2" 
                         class="crystal-guide-img img-fluid"
                         loading="lazy"
                         onerror="if (!this.dataset.retried) { this.dataset.retried='1'; this.src = (this.src.indexOf('.jpeg') !== -1) ? this.src.replace('.jpeg', '.jpg') : this.src.replace('.jpg', '.jpeg'); } else { this.src='assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.43 PM.jpeg'; }">
                </div>
            </div>

        </div>

    </div>
</section>
