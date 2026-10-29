<?php
/**
 * ==============================================================================
 * Impact & Statistics Counter Section - SS Healing Rays
 * Placed immediately after the Founders Profile / Team section
 *
 * Content:
 *   - Row 1: 500+ Clients supported | 10+ 10+ years of experience
 *   - Row 2: 10+ Healing modalities | 200+ Workshops, webinars & trainings
 *   - Row 3: 1:1 Personalised healing & coaching | 5 Languages for comfortable connection
 * ==============================================================================
 */

$counter_rows = $counter_rows ?? [
    [
        'col1' => [
            'value'      => '500',
            'suffix'     => '+',
            'is_numeric' => true,
            'label'      => 'Clients supported',
        ],
        'col2' => [
            'value'      => '10',
            'suffix'     => '+',
            'is_numeric' => true,
            'label'      => '10+ years of experience',
        ],
    ],
    [
        'col1' => [
            'value'      => '10',
            'suffix'     => '+',
            'is_numeric' => true,
            'label'      => 'Healing modalities',
        ],
        'col2' => [
            'value'      => '200',
            'suffix'     => '+',
            'is_numeric' => true,
            'label'      => 'Workshops, webinars & trainings',
        ],
    ],
    [
        'col1' => [
            'value'      => '1:1',
            'suffix'     => '',
            'is_numeric' => false,
            'label'      => 'Personalised healing & coaching',
        ],
        'col2' => [
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
            <?php foreach ($counter_rows as $row): ?>
                <div class="counter-row">
                    <div class="row g-0 align-items-center">
                        <!-- Left Column -->
                        <div class="col-12 col-md-6 counter-col counter-col-left">
                            <div class="counter-item">
                                <div class="counter-number">
                                    <?php if (!empty($row['col1']['is_numeric'])): ?>
                                        <span class="counter-count" data-target="<?= htmlspecialchars($row['col1']['value']) ?>"><?= htmlspecialchars($row['col1']['value']) ?></span>
                                    <?php else: ?>
                                        <span class="counter-count"><?= htmlspecialchars($row['col1']['value']) ?></span>
                                    <?php endif; ?>
                                    <?php if (!empty($row['col1']['suffix'])): ?>
                                        <span class="counter-suffix"><?= htmlspecialchars($row['col1']['suffix']) ?></span>
                                    <?php endif; ?>
                                </div>
                                <p class="counter-label"><?= htmlspecialchars($row['col1']['label']) ?></p>
                            </div>
                        </div>

                        <!-- Right Column -->
                        <div class="col-12 col-md-6 counter-col counter-col-right">
                            <div class="counter-item">
                                <div class="counter-number">
                                    <?php if (!empty($row['col2']['is_numeric'])): ?>
                                        <span class="counter-count" data-target="<?= htmlspecialchars($row['col2']['value']) ?>"><?= htmlspecialchars($row['col2']['value']) ?></span>
                                    <?php else: ?>
                                        <span class="counter-count"><?= htmlspecialchars($row['col2']['value']) ?></span>
                                    <?php endif; ?>
                                    <?php if (!empty($row['col2']['suffix'])): ?>
                                        <span class="counter-suffix"><?= htmlspecialchars($row['col2']['suffix']) ?></span>
                                    <?php endif; ?>
                                </div>
                                <p class="counter-label"><?= htmlspecialchars($row['col2']['label']) ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
