<?php

$team_heading         = $team_heading ?? 'Meet Our <span class="title-highlight">Team</span>';

$team_members = $team_members ?? [
    [
        'name'        => 'Sreeparvathy',
        'role'        => 'Founder & Master Healer',
        'image'       => 'assets/images/profile/sreeparvathi.jpg',
        'bio'         => 'Guiding you towards emotional balance and self-discovery through holistic
healing. Also offering personal coaching and corporate training.',
        'profile_url' => 'sreeparvathy',
        'instagram'   => 'https://www.instagram.com/heal_sreeparvathy/',
        'facebook'    => '#',
        'linkedin'    => '#',
    ],
    [
        'name'        => 'Sravanti',
        'role'        => 'Holistic Transformation & Yoga Guide',
        'image'       => 'assets/images/profile/sravanti.jpg',
        'bio'         => 'Supporting you in deepening self-awareness, finding inner balance and embracing
change through holistic healing, wellness and yoga.',
        'profile_url' => 'sravanti',
        'instagram'   => 'https://www.instagram.com/sravantiheals/',
        'facebook'    => '#',
        'linkedin'    => '#',
    ],
];
?>

<section class="team-section" id="team">
    <div class="container">
        
        <!-- 1. Section Header -->
        <div class="team-header text-center">
    
            <h2 class="team-heading">
                <?= $team_heading ?>
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
                                <a href="<?= htmlspecialchars($member['linkedin'] ?? '#') ?>" class="profile-social-btn" aria-label="LinkedIn">
                                    <i class="bi bi-linkedin"></i>
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
                                include dirname(__DIR__) . '/common/button.php';
                            ?>
                        </div>

                    </div>

                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>
