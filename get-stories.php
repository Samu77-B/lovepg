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

As your 2026 sponsors, Hommix and Bloomsbury Court Interiors invite you. Organised by Love Palmers Green / Green Lanes Business Association (GLBA), in association with Enfield Council. Please support your local shops in Palmers Green.',
        'author' => 'LOVEPALMERSGREEN',
        'image_url_mobile' => 'images/christmas2026-poster.jpg',
        'image_url_desktop' => 'images/christmas2026-poster.jpg',
        'created_date' => '2026-11-17'
    ],
    [
        'title' => 'Christmas Stocking Hunt 2026',
        'description' => 'Join Palmers Green Town Centre for the Christmas Stocking Hunt.

**Saturday 5th December 2026 · 3:30 PM at Hommix & Bloomsbury Court Interiors**
Prize draw, with first prize a FujiFilm Instax camera with films and accessories. Face painting, bauble decorating, letters to Santa and festive treats for all participants. Stockings will be displayed in town centre shops from 28 November until 5 December. All under 12s must be accompanied by an adult.

Organised by Love Palmers Green / Green Lanes Business Association (GLBA), in association with Enfield Council. 2026 sponsors: Hommix and Bloomsbury Court Interiors.',
        'author' => 'LOVEPALMERSGREEN',
        'image_url_mobile' => 'images/stocking-hunt-2026.png',
        'image_url_desktop' => 'images/stocking-hunt-2026.png',
        'created_date' => '2026-10-12'
    ],
    [
        'title' => 'Aksular: Christmas lights, festive delights',
        'description' => 'Authentic Turkish cuisine in Palmers Green. 10% off on Christmas lights night.

**Thursday 26th November 2026**
10% off at Aksular Restaurant, 232–234 Green Lanes. Drinks and set menus excluded; cannot be combined with other offers.

Also taking part in the Palmers Green Christmas Stocking Hunt on **Saturday 5th December 2026**. Book on 020 8886 3503 or aksularpalmersgreen.com.',
        'author' => 'LOVEPALMERSGREEN',
        'image_url_mobile' => 'images/aksular-christmas2026.png',
        'image_url_desktop' => 'images/aksular-christmas2026.png',
        'created_date' => '2026-11-23'
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
