<?php


$team_pretitle        = $team_pretitle ?? 'MEET OUR TEAM';
$team_title_1         = $team_title_1 ?? 'Meet the People';
$team_title_2         = $team_title_2 ?? 'Who Make It';
$team_title_highlight = $team_title_highlight ?? 'Sacred';

$team_members = $team_members ?? [
    [
        'name'        => 'Sreeparvathy',
        'role'        => 'Founder & Master Healer',
        'image'       => 'assets/images/profile/sreeparvathi.jpg',
        'bio'         => 'Supporting your journey towards emotional balance, self-discovery and a more mindful life through holistic healing practices.',
        'profile_url' => '#sreeparvathy',
        'instagram'   => '#',
        'facebook'    => '#',
        'youtube'     => '#',
    ],
    [
        'name'        => 'Sravanti',
        'role'        => 'Holistic Transformation & Yoga Guide',
        'image'       => 'assets/images/profile/sravanti.jpg',
        'bio'         => 'Guiding individuals towards greater awareness, inner balance and personal transformation through healing practices, coaching and yoga.',
        'profile_url' => '#sravanti',
        'instagram'   => '#',
        'facebook'    => '#',
        'youtube'     => '#',
    ],
];
?>

<section class="team-section" id="team">
    <div class="container">
        
        <!-- 1. Section Header -->
        <div class="team-header text-center">
            <p class="team-pretitle"><?= htmlspecialchars($team_pretitle) ?></p>
            <h2 class="team-heading">
                <span class="d-block"><?= htmlspecialchars($team_title_1) ?></span>
                <span class="d-block">
                    <?= htmlspecialchars($team_title_2) ?>
                    <span class="title-highlight"><?= htmlspecialchars($team_title_highlight) ?></span>
                </span>
            </h2>
        </div>

        <!-- 2. Profile Cards Grid (2 Cards Only with 20px gap) -->
        <div class="team-cards-wrapper">
            <?php foreach ($team_members as $member): ?>
                <div class="profile-card">
                    
                    <!-- Full-Bleed Portrait Image -->
                    <div class="profile-image-wrapper">
                        <img src="<?= htmlspecialchars($member['image']) ?>" 
                             alt="<?= htmlspecialchars($member['name']) ?>" 
                             class="profile-image" 
                             loading="lazy">
                    </div>

                    <!-- Gradient Overlay with Content -->
                    <div class="profile-overlay">
                        
                        <!-- Name & Verified Checkmark -->
                        <div class="profile-name-row">
                            <h3 class="profile-name"><?= htmlspecialchars($member['name']) ?></h3>
                            
                        </div>

                        <!-- Bio Description -->
                        <p class="profile-bio">
                            <?= htmlspecialchars($member['bio']) ?>
                        </p>

                        <!-- Bottom Action Row: Socials on Left | Actual Reusable Button on Right -->
                        <div class="profile-actions-row">
                            <div class="profile-socials">
                                <a href="<?= htmlspecialchars($member['instagram'] ?? '#') ?>" class="profile-social-btn" aria-label="Instagram">
                                    <i class="bi bi-instagram"></i>
                                </a>
                                <a href="<?= htmlspecialchars($member['facebook'] ?? '#') ?>" class="profile-social-btn" aria-label="Facebook">
                                    <i class="bi bi-facebook"></i>
                                </a>
                                <a href="<?= htmlspecialchars($member['youtube'] ?? '#') ?>" class="profile-social-btn" aria-label="YouTube">
                                    <i class="bi bi-youtube"></i>
                                </a>
                            </div>

                            <?php
                                $btn_text       = 'Open Profile';
                                $btn_url        = $member['profile_url'] ?? '#';
                                $btn_class      = 'Btn-Team-Profile';
                                $btn_bg         = 'transparent';
                                $btn_icon_bg    = 'transparent';
                                $btn_text_color = '#ffffff';
                                $btn_icon_color = '#ffffff';
                                include __DIR__ . '/assets/common/button.php';
                            ?>
                        </div>

                    </div>

                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>
