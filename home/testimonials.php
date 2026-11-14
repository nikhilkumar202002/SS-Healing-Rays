<?php

$testimonials_pretitle        = $testimonials_pretitle ?? 'VOICES OF TRANSFORMATION';
$testimonials_title_1         = $testimonials_title_1 ?? 'Words of Healing,';
$testimonials_title_2         = $testimonials_title_2 ?? 'Felt from the';
$testimonials_title_highlight = $testimonials_title_highlight ?? 'Heart';
$testimonials_grid_items = $testimonials_grid_items ?? [

    [
        'type'        => 'testimonial',
        'stars'       => 5,
        'highlight'   => '21-Day Reikithon · Calm, Clarity & Inner Connection',
        'category'    => 'Transformative Story',
        'description' => 'The 21-Day Reikithon was an enriching and grounding experience. Through daily self-healing, I felt a deeper sense of calm, clarity and inner connection, and became more aware of my emotions and energy. I am sincerely grateful to Sreeparvathy and Sravanti for creating such a powerful space. It is an experience I will always carry with me.',
        'name'        => 'Shalini Varshne',
    ],

    [
        'type'        => 'testimonial',
        'stars'       => 5,
        'highlight'   => 'Tiger’s Eye · Confidence & Career Progress',
        'category'    => 'Âme Crystals',
        'description' => 'During a difficult career phase, I was struggling with low self-esteem and a lack of clarity. After reaching out to Parvathy for crystal suggestions, I felt the crystals supported my confidence, alongside my self-healing practice. I continued applying for jobs and eventually found a role that felt tailor-made for me. I am grateful to Parvathy, the crystals and Reiki energy for supporting me through that journey.',
        'name'        => 'Aparna Akella',
    ],

    // 3. Reiki highlight: Reiki Level 1 & 2 – A Journey of Self-Healing (Anita Gopal)
    [
        'type'        => 'testimonial',
        'stars'       => 5,
        'highlight'   => 'Reiki Level 1 & 2 · A Journey of Self-Healing',
        'category'    => 'Reiki Training',
        'description' => 'My Reiki journey with Sree Parvathy has been a blessing. Reiki Level 1 brought a gentle but powerful shift in self-awareness and inner peace. As I progressed to Level 2, I experienced greater emotional balance, clarity and a deeper spiritual connection. Her patience, wisdom and support created a welcoming space for learning. Reiki has become more than a technique for me—it is a way of life rooted in love, gratitude and connection.',
        'name'        => 'Anita Gopal',
    ],

    // --- ROW 2 ---
    // 4. Âme Crystals highlight: Lapis Lazuli – Focus & Creative Flow (Radhika P.)
    [
        'type'        => 'testimonial',
        'stars'       => 5,
        'highlight'   => 'Lapis Lazuli · Focus & Creative Flow',
        'category'    => 'Âme Crystals',
        'description' => 'Lapis Lazuli works beautifully for me when I am choreographing my dances. When I get stuck with steps or movements, wearing the bracelet helps me settle into the process. Give it a little time, and things begin to flow—not just easily, but amazingly too.',
        'name'        => 'Radhika P.',
    ],

    // 5. EFT highlight: A Lighter, Clearer Feeling (Dhanalakshmi Sudheer)
    [
        'type'        => 'testimonial',
        'stars'       => 5,
        'highlight'   => 'EFT Session · A Lighter, Clearer Feeling',
        'category'    => 'EFT & Emotional Clarity',
        'description' => 'My EFT session with Parvathy was an eye-opening experience. She created a calm, supportive space that helped me connect with emotions I had not realised I was carrying. The process was simple yet powerful, and I felt lighter, clearer and more grounded by the end. I would recommend EFT to anyone seeking emotional clarity, stress reduction or greater inner balance.',
        'name'        => 'Dhanalakshmi Sudheer',
    ],

    // 6. Transformative story: Energy Routine – Making Space for Self-Care (Merry)
    [
        'type'        => 'testimonial',
        'stars'       => 5,
        'highlight'   => 'Energy Routine · Making Space for Self-Care',
        'category'    => 'Transformative Story',
        'description' => 'Thank you, Parvathy and Sravanti, for bringing us together for this wonderful session. Initially, I found it difficult to make time for the energy exercises, but things have changed and I now enjoy doing them.',
        'name'        => 'Merry',
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

        <!-- 2. Clean 2 Rows x 3 Columns Bento Grid of Testimonials -->
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
                    <!-- Testimonial Card (Stars -> Description -> Name -> Highlight) -->
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

                        <!-- 4. Modality / Highlight Tag -->
                        <?php if (!empty($item['highlight'])): ?>
                            <span class="bento-highlight">
                                <?= htmlspecialchars($item['highlight']) ?>
                            </span>
                        <?php endif; ?>

                    </article>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>

    </div>
</section>
