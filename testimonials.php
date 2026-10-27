<?php
/**
 * ==============================================================================
 * Testimonials Bento Grid Section - SS Healing Rays
 * ==============================================================================
 * Clean 3 Rows x 3 Columns Bento Grid:
 *   - Row 1: [Testimonial] [Testimonial] [Image Only]
 *   - Row 2: [Testimonial] [Testimonial] [Testimonial]
 *   - Row 3: [Testimonial] [Image Only]  [Testimonial]
 *   - Light grey cards (#f3f4f6), borderless, shadowless, non-glowing
 *   - Centered alignment
 *   - Testimonials contain: Stars (Gold) -> Description (Lato) -> Name (Marcellus)
 *   - Image cards contain: Full-bleed image only
 *   - Unified brand heading at top
 * ==============================================================================
 */

$testimonials_pretitle        = $testimonials_pretitle ?? 'VOICES OF TRANSFORMATION';
$testimonials_title_1         = $testimonials_title_1 ?? 'Words of Healing,';
$testimonials_title_2         = $testimonials_title_2 ?? 'Felt from the';
$testimonials_title_highlight = $testimonials_title_highlight ?? 'Heart';

$testimonials_grid_items = $testimonials_grid_items ?? [
    // --- ROW 1 (Last item is Image Only) ---
    [
        'type'        => 'testimonial',
        'stars'       => 5,
        'description' => 'The shift I experienced during Reiki and Trauma Healing was unlike anything I had tried in years of conventional therapies. I walked in carrying profound grief, and left feeling genuinely anchored in inner serenity and light.',
        'name'        => 'Meera Nambiar',
    ],
    [
        'type'        => 'testimonial',
        'stars'       => 5,
        'description' => 'Every single session feels like coming back home to my calmest, most centered self. The emotional balance and clarity I found here is irreplaceable.',
        'name'        => 'Priya Ramanathan',
    ],
    [
        'type'        => 'image',
        'image'       => 'assets/banner/cta-banner-2.jpeg',
        'alt'         => 'SS Healing Rays Community Retreat Experience',
    ],

    // --- ROW 2 ---
    [
        'type'        => 'testimonial',
        'stars'       => 5,
        'description' => 'The Whispers of Stillness retreat gave me a quietude I hadn’t felt in a decade. Waking up without anxiety felt like a true miracle.',
        'name'        => 'Kavitha Sundaram',
    ],
    [
        'type'        => 'testimonial',
        'stars'       => 5,
        'description' => 'Sravanti guided me through subconscious blockages that held my career and relationships back for years. The clarity, self-compassion, and confidence I gained are priceless.',
        'name'        => 'Rahul Deshmukh',
    ],
    [
        'type'        => 'testimonial',
        'stars'       => 5,
        'description' => 'The crystal singing bowl frequencies dissolved my chronic work exhaustion immediately. It felt like an energetic reset button for body, mind, and spirit.',
        'name'        => 'Sneha Kapur',
    ],

    // --- ROW 3 (Middle item is Image Only) ---
    [
        'type'        => 'testimonial',
        'stars'       => 5,
        'description' => 'Chakra alignment helped release deep emotional burdens I had held onto for twenty years. I finally feel grounded, open, and physically radiant again.',
        'name'        => 'Arvind Iyer',
    ],
    [
        'type'        => 'image',
        'image'       => 'assets/banner/banner-2.jpeg',
        'alt'         => 'Sacred Sound Meditation Healing Sanctuary',
    ],
    [
        'type'        => 'testimonial',
        'stars'       => 5,
        'description' => 'The compassionate counselling and breathwork sessions provided a true safe haven during my darkest season. Deep gratitude to the sacred healers here.',
        'name'        => 'Deepa Menon',
    ],
];
?>

<section class="testimonials-section position-relative" id="testimonials" aria-label="Client Testimonials and Experiences">
    <div class="container">
        
        <!-- 1. Section Header -->
        <div class="testimonials-header text-center mx-auto">
            <p class="testimonials-pretitle"><?= htmlspecialchars($testimonials_pretitle) ?></p>
            <h2 class="testimonials-heading">
                <span class="d-block"><?= htmlspecialchars($testimonials_title_1) ?></span>
                <span class="d-block">
                    <?= htmlspecialchars($testimonials_title_2) ?>
                    <span class="title-highlight"><?= htmlspecialchars($testimonials_title_highlight) ?></span>
                </span>
            </h2>
        </div>

        <!-- 2. Clean 3x3 Bento Grid of Testimonials & Images -->
        <div class="testimonials-bento-grid">
            <?php foreach ($testimonials_grid_items as $item): ?>
                <?php if ($item['type'] === 'image'): ?>
                    <!-- Image-Only Card -->
                    <article class="bento-card bento-card-image-only">
                        <img src="<?= htmlspecialchars($item['image']) ?>" 
                             alt="<?= htmlspecialchars($item['alt'] ?? 'Healing Experience') ?>" 
                             class="bento-image-fill" 
                             loading="lazy">
                    </article>
                <?php else: ?>
                    <!-- Testimonial Card (Stars -> Description -> Name) -->
                    <article class="bento-card">
                        
                        <!-- 1. Stars (Centered, Gold) -->
                        <div class="bento-stars" aria-label="<?= (int)$item['stars'] ?> out of 5 stars">
                            <?php for ($i = 0; $i < (int)$item['stars']; $i++): ?>
                                <i class="bi bi-star-fill"></i>
                            <?php endfor; ?>
                        </div>

                        <!-- 2. Description in Lato with Inverted Commas (Centered) -->
                        <p class="bento-description">
                            &ldquo;<?= htmlspecialchars($item['description']) ?>&rdquo;
                        </p>

                        <!-- 3. Name in Marcellus Font (Centered) -->
                        <h3 class="bento-name">
                            <?= htmlspecialchars($item['name']) ?>
                        </h3>

                    </article>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>

    </div>
</section>
