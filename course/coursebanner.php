<?php
/**
 * Course Page Banner Component - SS Healing Rays
 * Exact layout as Workshop Page Banner with pure black linear gradient overlay (bottom to top).
 * Typography: Marcellus headline across two balanced lines with Playfair Display italic accents.
 */

$course_banner_bg    = $course_banner_bg ?? 'assets/images/gallery/WhatsApp Image 2026-10-17 at 1.22.56 PM.jpeg';
$course_banner_desc  = $course_banner_desc ?? 'Discover structured sacred knowledge and holistic wellness courses designed to deepen spiritual awareness, awaken inner consciousness, and cultivate enduring harmony.';

// Split into two distinct lines without accidental word wrapping
if (isset($course_banner_title)) {
    $parts = preg_split('/<br\s*\/?>/i', $course_banner_title);
    $course_banner_title_1 = $parts[0] ?? $course_banner_title;
    $course_banner_title_2 = $parts[1] ?? '';
} else {
    $course_banner_title_1 = $course_banner_title_1 ?? 'Sacred Knowledge for Life,';
    $course_banner_title_2 = $course_banner_title_2 ?? 'Holistic Courses on <em>Wellness</em>';
}

?>

<section class="gallery-banner-section course-banner-section position-relative" id="courseBanner" aria-label="Holistic Courses on Wellness Banner">
    <!-- Background Image -->
    <img src="<?= htmlspecialchars($course_banner_bg) ?>" 
         alt="Holistic Courses on Wellness Banner" 
         class="gallery-banner-bg-img course-banner-bg-img"
         loading="eager">

    <!-- Black Linear Gradient Overlay from Bottom to Top -->
    <div class="gallery-banner-overlay course-banner-overlay" aria-hidden="true"></div>

    <div class="container position-relative gallery-banner-content-wrap course-banner-content-wrap">
        <div class="row justify-content-center text-center">
            <div class="col-12 col-lg-11 col-xl-10">
                
                <!-- Breadcrumb Navigation -->
                <nav class="gallery-breadcrumb course-breadcrumb mb-3" aria-label="Breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Courses on Wellness</li>
                    </ol>
                </nav>

                <!-- Hero Title: Strict 2 Lines without Line Breaking -->
                <h1 class="gallery-banner-title course-banner-title mb-3">
                    <span class="banner-title-line"><?= $course_banner_title_1 ?></span>
                    <?php if (!empty($course_banner_title_2)): ?>
                        <span class="banner-title-line"><?= $course_banner_title_2 ?></span>
                    <?php endif; ?>
                </h1>

                <!-- Subtitle Description -->
                <p class="gallery-banner-subtitle course-banner-subtitle mx-auto mb-0">
                    <?= htmlspecialchars($course_banner_desc) ?>
                </p>

            </div>
        </div>
    </div>
</section>