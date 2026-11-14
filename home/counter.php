<?php
/**
 * ==============================================================================
 * Impact & Statistics Counter Section - SS Healing Rays
 * Placed immediately after the Founders Profile / Team section
 *
 * Content:
 *   - Row 1 (3 Columns): 500+ Clients supported | 10+ Years of experience | 11+ Healing modalities
 *   - Row 2 (3 Columns): 200+ Workshops, webinars & trainings | 1:1 Personalised healing & coaching | 5 Languages for comfortable connection
 * ==============================================================================
 */

$counter_rows = $counter_rows ?? [
    // Row 1 (3 Columns)
    [
        [
            'value'      => '500',
            'suffix'     => '+',
            'is_numeric' => true,
            'label'      => 'Clients supported',
        ],
        [
            'value'      => '10',
            'suffix'     => '+',
            'is_numeric' => true,
            'label'      => 'Years of experience',
        ],
        [
            'value'      => '11',
            'suffix'     => '+',
            'is_numeric' => true,
            'label'      => 'Healing modalities',
        ],
    ],
    // Row 2 (3 Columns)
    [
        [
            'value'      => '200',
            'suffix'     => '+',
            'is_numeric' => true,
            'label'      => 'Workshops, webinars & trainings',
        ],
        [
            'value'      => '1:1',
            'suffix'     => '',
            'is_numeric' => false,
            'label'      => 'Personalised healing & coaching',
        ],
        [
            'value'      => '5',
            'suffix'     => '',
            'is_numeric' => true,
            'label'      => 'Languages for comfortable connection',
        ],
    ],
];
?>

<section class="counter-section" id="counter" aria-label="SS Healing Rays Impact & Experience">
    <div class="container counter-container">
        <div class="counter-grid">
            <?php foreach ($counter_rows as $row_items): ?>
                <div class="counter-row">
                    <div class="row g-0 align-items-center">
                        <?php foreach ($row_items as $col_index => $col): ?>
                            <div class="col-12 col-md-4 counter-col counter-col-<?= $col_index + 1 ?>">
                                <div class="counter-item text-center">
                                    <div class="counter-number">
                                        <?php if (!empty($col['is_numeric'])): ?>
                                            <span class="counter-count" data-target="<?= htmlspecialchars($col['value']) ?>"><?= htmlspecialchars($col['value']) ?></span>
                                        <?php else: ?>
                                            <span class="counter-count"><?= htmlspecialchars($col['value']) ?></span>
                                        <?php endif; ?>
                                        <?php if (!empty($col['suffix'])): ?>
                                            <span class="counter-suffix"><?= htmlspecialchars($col['suffix']) ?></span>
                                        <?php endif; ?>
                                    </div>
                                    <p class="counter-label text-center"><?= htmlspecialchars($col['label']) ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
