<?php
// Dynamic sitemap.xml - automatically uses the current domain
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$domain = $_SERVER['HTTP_HOST'];
$base_url = $protocol . $domain;
$current_date = date('Y-m-d');
header('Content-Type: application/xml; charset=utf-8');
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
        xmlns:image="http://www.google.com/schemas/sitemap-image/1.1"
        xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
        xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
        http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
  
  <!-- Homepage: Christmas Tree Lights 2026, directory, autumn hero -->
  <url>
    <loc><?php echo htmlspecialchars($base_url . '/', ENT_XML1, 'UTF-8'); ?></loc>
    <lastmod><?php echo $current_date; ?></lastmod>
    <changefreq>daily</changefreq>
    <priority>1.0</priority>
    <image:image>
      <image:loc><?php echo htmlspecialchars($base_url . '/images/Hompage-HeroImage-Autumn.jpg', ENT_XML1, 'UTF-8'); ?></image:loc>
      <image:title>Autumn on Palmers Green High Street</image:title>
      <image:caption>Love Palmers Green homepage hero — Palmers Green, North London N13</image:caption>
    </image:image>
    <image:image>
      <image:loc><?php echo htmlspecialchars($base_url . '/images/christmas2026-poster.jpg', ENT_XML1, 'UTF-8'); ?></image:loc>
      <image:title>Palmers Green Town Centre Christmas Tree Lights 2026</image:title>
      <image:caption>Christmas Tree Lights switch-on Thursday 26 November 2026 at The Triangle, organised by Love Palmers Green / GLBA</image:caption>
    </image:image>
  </url>
  
  <!-- Main Pages -->
  <url>
    <loc><?php echo htmlspecialchars($base_url . '/index.php', ENT_XML1, 'UTF-8'); ?></loc>
    <lastmod><?php echo $current_date; ?></lastmod>
    <changefreq>daily</changefreq>
    <priority>1.0</priority>
    <image:image>
      <image:loc><?php echo htmlspecialchars($base_url . '/images/Hompage-HeroImage-Autumn.jpg', ENT_XML1, 'UTF-8'); ?></image:loc>
      <image:title>Autumn on Palmers Green High Street</image:title>
    </image:image>
    <image:image>
      <image:loc><?php echo htmlspecialchars($base_url . '/images/christmas2026-poster.jpg', ENT_XML1, 'UTF-8'); ?></image:loc>
      <image:title>Palmers Green Town Centre Christmas Tree Lights 2026</image:title>
    </image:image>
  </url>
  
  <url>
    <loc><?php echo htmlspecialchars($base_url . '/history.php', ENT_XML1, 'UTF-8'); ?></loc>
    <lastmod><?php echo $current_date; ?></lastmod>
    <changefreq>monthly</changefreq>
    <priority>0.8</priority>
  </url>
  
  <url>
    <loc><?php echo htmlspecialchars($base_url . '/the-commitee.php', ENT_XML1, 'UTF-8'); ?></loc>
    <lastmod><?php echo $current_date; ?></lastmod>
    <changefreq>monthly</changefreq>
    <priority>0.8</priority>
  </url>
  
  <url>
    <loc><?php echo htmlspecialchars($base_url . '/our-vision.php', ENT_XML1, 'UTF-8'); ?></loc>
    <lastmod><?php echo $current_date; ?></lastmod>
    <changefreq>monthly</changefreq>
    <priority>0.8</priority>
  </url>
  
  <!-- Legal Pages -->
  <url>
    <loc><?php echo htmlspecialchars($base_url . '/privacy-policy.php', ENT_XML1, 'UTF-8'); ?></loc>
    <lastmod><?php echo $current_date; ?></lastmod>
    <changefreq>yearly</changefreq>
    <priority>0.3</priority>
  </url>
  
  <url>
    <loc><?php echo htmlspecialchars($base_url . '/terms-of-service.php', ENT_XML1, 'UTF-8'); ?></loc>
    <lastmod><?php echo $current_date; ?></lastmod>
    <changefreq>yearly</changefreq>
    <priority>0.3</priority>
  </url>
  
  <url>
    <loc><?php echo htmlspecialchars($base_url . '/cookie-policy.php', ENT_XML1, 'UTF-8'); ?></loc>
    <lastmod><?php echo $current_date; ?></lastmod>
    <changefreq>yearly</changefreq>
    <priority>0.3</priority>
  </url>
  
</urlset>
