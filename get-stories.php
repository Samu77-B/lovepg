<?php
// Community stories / seasonal events shown in the Stories CMS section
function lpg_format_story_description($text) {
    $safe = htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
    $safe = preg_replace('/\*\*(.+?)\*\*/s', '<strong>$1</strong>', $safe);
    return nl2br($safe);
}

$stories = [
    [
        'title' => 'Halloween "Trick or Treat" on the High Street 2026',
        'description' => 'Join us for a family-friendly Halloween on Palmers Green High Street, sponsored by Peter Michael Estates and Lettings.

**Saturday 31st October 2026 · 10:00 AM – 8:00 PM**
Safe trick-or-treating along the local high street. Organised by Love Palmers Green / Green Lanes Business Association (GLBA).

**Pumpkin Hunt (10:00 AM – 4:30 PM)**
Find 24 numbered pumpkins in shop windows along Aldermans Hill (from Lakeside Road), through The Triangle, from Ruth Winston House, and along Green Lanes towards Hedge Lane. Write the shop names on your entry form.

Pick up forms from participating High Street shops and Peter Michael Estates and Lettings. Hand completed forms to Peter Michael by 4:15 PM. Prize draw at 4:30 PM at Peter Michael.

Grand prize: Nintendo Switch Lite (worth £200) + Mario Kart 8 Deluxe (worth £40), donated by Peter Michael. Gift for all participants. Entrants must be under 12 and accompanied by an adult. Form fields: Child\'s Name, School, Telephone Number.

**Mini-Monster Disco at The Fox (4:00 PM – 8:00 PM)**
The Fox Pub, 413 Green Lanes, London N13 4JD. Entertainment by Eleni from Asterakia Entertaining. 10% off kids mains with leaflet.',
        'author' => 'LOVEPALMERSGREEN',
        'image_url_mobile' => 'images/halloween2026-poster.jpg',
        'image_url_desktop' => 'images/halloween2026-poster.jpg',
        'created_date' => '2026-10-12'
    ],
    [
        'title' => 'Christmas Lights Switch-On 2026',
        'description' => 'Join us at The Triangle, Palmers Green for the Christmas Lights Switch-On.

**Thursday 26th November 2026 at 3:30 PM**
Live performances by St Monica\'s Choir and Adorned Gospel Community Choir.

Look out for posters advertising this festive family event. Organised by Love Palmers Green / Green Lanes Business Association (GLBA).',
        'author' => 'LOVEPALMERSGREEN',
        'image_url_mobile' => 'images/christmas/LPG-xmas2025-Santa.png',
        'image_url_desktop' => 'images/LPG-Xmas2025.png',
        'created_date' => '2026-10-12'
    ],
    [
        'title' => 'Christmas Stocking Hunt 2026',
        'description' => 'A festive family hunt along Palmers Green High Street.

**Saturday 5th December 2026**
Look out for posters advertising both the Christmas Lights Switch-On and the Stocking Hunt.

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
