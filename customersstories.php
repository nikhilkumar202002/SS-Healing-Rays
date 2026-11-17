<?php

$page_title        = 'Healing Journeys – Real Stories of Transformation | SS Healing Rays';
$page_description  = 'Inspiring real stories and testimonials from individuals who have healed from stress, anxiety, and overwhelm through Trauma-Informed Coaching, EFT, and Reiki at SS Healing Rays.';
$current_page      = 'customer-stories';
$cta_text          = 'Chat with us';
$cta_url           = 'https://wa.me/919000606792';

// 1. Common Global Header
include __DIR__ . '/common/header.php';

$stories_grid_items = [
    // --- ROW 1 ---
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
        'type'        => 'testimonial',
        'stars'       => 5,
        'description' => 'Working with Sreeparvathy changed how I respond to stress completely. For years I was living in constant fight-or-flight; her holding space and EFT tapping gave me my peace back.',
        'name'        => 'Ananya Sharma',
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

    // --- ROW 3 ---
    [
        'type'        => 'testimonial',
        'stars'       => 5,
        'description' => 'Chakra alignment helped release deep emotional burdens I had held onto for twenty years. I finally feel grounded, open, and physically radiant again.',
        'name'        => 'Arvind Iyer',
    ],
    [
        'type'        => 'testimonial',
        'stars'       => 5,
        'description' => "Sravanti's therapeutic yoga and chakra healing sessions dissolved muscular holding patterns talk therapy could never touch. I feel vibrant and aligned every day.",
        'name'        => 'Rajeshwari Patel',
    ],
    [
        'type'        => 'testimonial',
        'stars'       => 5,
        'description' => 'The compassionate counselling and breathwork sessions provided a true safe haven during my darkest season. Deep gratitude to the sacred healers here.',
        'name'        => 'Deepa Menon',
    ],

    // --- ROW 4 ---
    [
        'type'        => 'testimonial',
        'stars'       => 5,
        'description' => 'The angel guidance and crystal therapy created an immediate sense of divine lightness and protection. I left feeling renewed and deeply aligned with my highest self.',
        'name'        => 'Sunita Narayanan',
    ],
    [
        'type'        => 'testimonial',
        'stars'       => 5,
        'description' => 'The personalized healing journey here helped me overcome intense professional burnout. I have regained my focus, vitality, and emotional peace.',
        'name'        => 'Vikram Malhotra',
    ],
    [
        'type'        => 'testimonial',
        'stars'       => 5,
        'description' => 'An empowering experience that blends ancient healing wisdom with grounded modern understanding. Highly recommended for anyone on a transformation path.',
        'name'        => 'Pooja Hegde',
    ],
];
?>

<main class="stories-page-wrapper">

    <!-- ==========================================================================
         TESTIMONIALS SECTION: Bento Grid Layout (Identical to Homepage Design)
         ========================================================================== -->
    <section class="testimonials-section position-relative" id="customerStoriesGrid" aria-label="Client Testimonials and Experiences">
        <div class="container">
            
            <!-- Section Header -->
            <div class="testimonials-header text-center mx-auto">
                <p class="testimonials-pretitle">VOICES OF TRANSFORMATION</p>
                <h2 class="testimonials-heading">
                    <span class="d-block">Words of Healing,</span>
                    <span class="d-block">
                        Felt from the
                        <span class="title-highlight">Heart</span>
                    </span>
                </h2>
            </div>

            <!-- Bento Grid of Testimonials & Images (Homepage Design) -->
            <div class="testimonials-bento-grid stories-page-grid">
                <?php foreach ($stories_grid_items as $item): ?>
                    <?php if ($item['type'] === 'image'): ?>
                        <!-- Image-Only Bento Card -->
                        <article class="bento-card bento-card-image-only">
                            <img src="<?= htmlspecialchars($item['image']) ?>" 
                                 alt="<?= htmlspecialchars($item['alt'] ?? 'Healing Sanctuary Experience') ?>" 
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

            <!-- Bottom Call to Action Card -->
            <div class="stories-bottom-cta">
                <h3 class="stories-bottom-cta-heading">
                    Ready to Write Your Own <em>Healing Story</em>?
                </h3>
                <p class="stories-bottom-cta-desc">
                    Whether you are seeking relief from stress, releasing emotional burdens, or realigning your inner energy, our compassionate guides are here to walk with you.
                </p>
                <div class="d-flex justify-content-center align-items-center gap-3 flex-wrap">
                    <?php
                        $btn_text  = 'Book a Healing Session';
                        $btn_url   = 'contact';
                        $btn_class = 'Btn-Profile-Primary';
                        include __DIR__ . '/common/button.php';
                    ?>
                    
                </div>
            </div>

        </div>
    </section>

</main>

<?php
// 4. Common Global Footer
include __DIR__ . '/common/footer.php';
?>