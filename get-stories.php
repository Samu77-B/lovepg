<?php
// Halloween 2025 story for local development
$stories = [
    [
        'title' => 'Halloween Trick or Treat on the High Street 2025',
        'description' => 'Join us for a spooktacular Halloween celebration in Palmers Green! 

🎃 **Pumpkin Hunt** (10am - 6pm)
- Hunt for hidden pumpkins around participating shops
- Winner announced at 6:15pm at Teas & C\'s
- Prize: £50 Amazon Voucher

🍬 **Trick or Treating** (All day until 8pm)
- Visit participating shops on Green Lanes and Alderman\'s Hill
- Extended opening hours until 8pm
- All participants must be under 12 years old

👻 **Get your Halloween costumes on and "Trick or Treat" safely on our local high street!**

📋 **Pick up your Pumpkin Hunters Form** at most of Palmers Green high street cafes and shops

This family-friendly event is sponsored by Teas & C\'s and organized by LOVEPALMERSGREEN and the Green Lanes Business Association (established 1992).',
        'author' => 'LOVEPALMERSGREEN',
        'image_url_mobile' => 'images/Holloween/Palmers Green Halloween - Mobile.png?v=2',
        'image_url_desktop' => 'images/Holloween/Palmers Green Halloween - Desktop.png?v=2',
        'created_date' => '2025-10-22'
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
                        <?= nl2br(htmlspecialchars($story['description'])) ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>
