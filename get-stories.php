<?php
// Community stories / seasonal events shown in the Stories CMS section
function lpg_format_story_description($text) {
    $safe = htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
    $safe = preg_replace('/\*\*(.+?)\*\*/s', '<strong>$1</strong>', $safe);
    return nl2br($safe);
}

$stories = [
    [
        'title' => 'Christmas Tree Lights 2026',
        'description' => 'Join us at Palmers Green Town Centre for the Christmas Tree Lights switch-on.

**Thursday 26th November 2026 · 3:30 PM at The Triangle**
Christmas carol singing by Adorned Community Gospel Choir and St Monica\'s School Choir.

As your 2026 sponsors, Hommix, Zelal Water Technology and Bloomsbury Court Interiors invite you. Organised by Love Palmers Green / Green Lanes Business Association (GLBA), in association with Enfield Council. Please support your local shops in Palmers Green.',
        'author' => 'LOVEPALMERSGREEN',
        'image_url_mobile' => 'images/christmas2026-poster.jpg',
        'image_url_desktop' => 'images/christmas2026-poster.jpg',
        'created_date' => '2026-11-17'
    ],
    [
        'title' => 'Christmas Stocking Hunt 2026',
        'description' => 'A festive family hunt along Palmers Green High Street.

**Saturday 5th December 2026**
Look out for posters advertising both the Christmas Tree Lights and the Stocking Hunt.

Organised by Love Palmers Green / Green Lanes Business Association (GLBA).',
        'author' => 'LOVEPALMERSGREEN',
        'image_url_mobile' => 'images/christmas/LPG-xmas2025-Santa.png',
        'image_url_desktop' => 'images/LPG-Xmas2025.png',
        'created_date' => '2026-10-12'
    ]
];
?>

<div class="local-stories">
    <?php if (count($stories) === 0): ?>
        <div class="no-stories-message">No local stories yet. Check back soon!</div>
    <?php else: ?>
        <div class="local-stories-grid">
        <?php foreach ($stories as $story): ?>
            <div class="story">
                <?php if (!empty($story['image_url_mobile']) && !empty($story['image_url_desktop'])): ?>
                    <picture class="story-picture">
                        <source media="(max-width: 768px)" srcset="<?= htmlspecialchars($story['image_url_mobile']) ?>" sizes="100vw">
                        <source media="(min-width: 769px)" srcset="<?= htmlspecialchars($story['image_url_desktop']) ?>" sizes="100vw">
                        <img class="story-image" src="<?= htmlspecialchars($story['image_url_desktop']) ?>" alt="<?= htmlspecialchars($story['title']) ?>">
                    </picture>
                <?php endif; ?>
                <div class="story-content">
                    <div class="story-meta">
                        <?= htmlspecialchars($story['author']) ?> &bull; <?= date('j M Y', strtotime($story['created_date'])) ?>
                    </div>
                    <div class="story-title">
                        <?= htmlspecialchars($story['title']) ?>
                    </div>
                    <div class="story-description">
                        <?= lpg_format_story_description($story['description']) ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>
