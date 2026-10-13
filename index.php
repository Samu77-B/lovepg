<!DOCTYPE html><!--  Last Published: Sun May 04 2025 23:45:14 GMT+0000 (Coordinated Universal Time)  -->
<html lang="en" data-wf-page="67f01a4044bdf3418dd536ab" data-wf-site="67f01a4044bdf3418dd536a4">
<head>
  <meta charset="utf-8">
  <title>Love Palmers Green | Green Lanes Business Association - Supporting Local Businesses in Palmers Green N13 Since 1992</title>
  <meta content="Love Palmers Green (formerly Green Lanes Business Association / GLBA) supports local businesses in Palmers Green, North London N13. Halloween Trick or Treat on the High Street Saturday 31 October 2026, Christmas Lights Switch-On 26 November, plus a local business directory. Community events and support since 1992." name="description">
  <meta name="keywords" content="Palmers Green, Green Lanes Business Association, GLBA, Love Palmers Green, N13, North London, Halloween Palmers Green, Trick or Treat High Street, Pumpkin Hunt Palmers Green, Christmas lights Palmers Green, business directory Palmers Green, The Yard Cafe, Enfield, local commerce">
  <meta name="author" content="Love Palmers Green">
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
  <meta name="googlebot" content="index, follow">
  <meta name="geo.region" content="GB-ENF">
  <meta name="geo.placename" content="Palmers Green, London">
  <meta name="geo.position" content="51.6175;-0.1025">
  <meta name="ICBM" content="51.6175, -0.1025">
  
  <!-- Canonical URL -->
  <?php
  // Load secure configuration
  require_once __DIR__ . '/config-secure.php';
  
  // Validate and sanitize inputs
  $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
  
  // Validate HTTP_HOST
  $domain = $_SERVER['HTTP_HOST'] ?? 'localhost';
  $domain = strtolower($domain);
  // Remove port if present for validation
  $domainWithoutPort = strpos($domain, ':') !== false ? substr($domain, 0, strpos($domain, ':')) : $domain;
  
  // Sanitize REQUEST_URI
  $requestUri = sanitizeRequestUri($_SERVER['REQUEST_URI'] ?? '/');
  
  $canonical_url = $protocol . $domain . $requestUri;
  ?>
  <link rel="canonical" href="<?php echo htmlspecialchars($canonical_url, ENT_QUOTES, 'UTF-8'); ?>">
  
  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo htmlspecialchars($canonical_url, ENT_QUOTES, 'UTF-8'); ?>">
  <meta content="Love Palmers Green | Green Lanes Business Association - Supporting Local Businesses in Palmers Green N13 Since 1992" property="og:title">
  <meta content="Love Palmers Green (formerly Green Lanes Business Association / GLBA) supports local businesses in Palmers Green, North London N13. Halloween Trick or Treat on the High Street Saturday 31 October 2026, Christmas Lights Switch-On 26 November, plus a local business directory. Community events and support since 1992." property="og:description">
  <meta property="og:image" content="<?php echo $protocol . $domain; ?>/images/Hompage-HeroImage-Autumn.jpg">
  <meta property="og:image:width" content="2390">
  <meta property="og:image:height" content="1792">
  <meta property="og:image:alt" content="Autumn on Palmers Green High Street, North London N13">
  <meta property="og:locale" content="en_GB">
  <meta property="og:site_name" content="Love Palmers Green">
  
  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@LovePalmersGreen">
  <meta content="Love Palmers Green | Green Lanes Business Association - Supporting Local Businesses in Palmers Green N13 Since 1992" property="twitter:title">
  <meta content="Love Palmers Green (formerly Green Lanes Business Association / GLBA) supports local businesses in Palmers Green, North London N13. Halloween Trick or Treat on the High Street Saturday 31 October 2026, Christmas Lights Switch-On 26 November, plus a local business directory. Community events and support since 1992." property="twitter:description">
  <meta name="twitter:image" content="<?php echo $protocol . $domain; ?>/images/Hompage-HeroImage-Autumn.jpg">
  <meta name="twitter:image:alt" content="Autumn on Palmers Green High Street, North London N13">
  
  <meta content="width=device-width, initial-scale=1" name="viewport">
  
  <!-- Dynamic Environmental Adaptation (apply theme ASAP) -->
  <script>
    (function () {
      try {
        var t = sessionStorage.getItem('lpg_theme_override') || sessionStorage.getItem('lpg_theme_auto');
        if (!t) {
          var prefersDark = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
          t = prefersDark ? 'midnight' : 'light';
        }
        document.documentElement.setAttribute('data-theme', t);
      } catch (e) {}
    })();
  </script>
  
  <!-- Structured Data (JSON-LD) for SEO and AI -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "@id": "<?php echo htmlspecialchars($canonical_url, ENT_QUOTES, 'UTF-8'); ?>",
    "name": "Love Palmers Green",
    "alternateName": ["Green Lanes Business Association", "GLBA"],
    "description": "Love Palmers Green (formerly Green Lanes Business Association / GLBA) supports local businesses in Palmers Green, North London N13. Halloween Trick or Treat on the High Street Saturday 31 October 2026, Christmas Lights Switch-On 26 November, plus a local business directory. Community events and support since 1992.",
    "url": "<?php echo htmlspecialchars($canonical_url, ENT_QUOTES, 'UTF-8'); ?>",
    "logo": "<?php echo $protocol . $domain; ?>/images/LPG_2025_Long_logo_White03.png",
    "image": [
      "<?php echo $protocol . $domain; ?>/images/Hompage-HeroImage-Autumn.jpg",
      "<?php echo $protocol . $domain; ?>/images/halloween2026-poster.jpg",
      "<?php echo $protocol . $domain; ?>/images/LPG_2025_Long_logo_White03.png"
    ],
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Palmers Green",
      "addressLocality": "Palmers Green",
      "addressRegion": "London",
      "postalCode": "N13",
      "addressCountry": "GB"
    },
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": "51.6175",
      "longitude": "-0.1025"
    },
    "telephone": "+44-7943-198198",
    "email": "contact@lovepalmersgreen.com",
    "openingHoursSpecification": {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": [
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday"
      ],
      "opens": "09:00",
      "closes": "18:00"
    },
    "foundingDate": "1992",
    "areaServed": {
      "@type": "City",
      "name": "Palmers Green"
    },
    "sameAs": [
      "https://www.facebook.com/lovepalmersgreen",
      "https://twitter.com/LovePalmersGreen"
    ]
  }
  </script>
  
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "Love Palmers Green",
    "alternateName": ["Green Lanes Business Association", "GLBA"],
    "url": "<?php echo htmlspecialchars($canonical_url, ENT_QUOTES, 'UTF-8'); ?>",
    "logo": "<?php echo $protocol . $domain; ?>/images/LPG_2025_Long_logo_White03.png",
    "description": "A community-focused business association supporting local businesses in Palmers Green, North London since 1992. Formerly Green Lanes Business Association (GLBA).",
    "slogan": "Supporting local businesses, promoting our shopping area, bringing community together.",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Palmers Green",
      "addressRegion": "London",
      "postalCode": "N13",
      "addressCountry": "GB"
    },
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": "51.6175",
      "longitude": "-0.1025"
    },
    "areaServed": {
      "@type": "City",
      "name": "Palmers Green"
    },
    "contactPoint": [
      {
        "@type": "ContactPoint",
        "telephone": "+44-7943-198198",
        "contactType": "Membership",
        "email": "costas@lovepalmersgreen.com",
        "availableLanguage": "English",
        "areaServed": "GB"
      },
      {
        "@type": "ContactPoint",
        "email": "contact@lovepalmersgreen.com",
        "contactType": "customer service",
        "availableLanguage": "English",
        "areaServed": "GB"
      }
    ],
    "sameAs": [
      "https://www.facebook.com/lovepalmersgreen",
      "https://twitter.com/LovePalmersGreen"
    ],
    "foundingDate": "1992",
    "numberOfEmployees": {
      "@type": "QuantitativeValue",
      "value": "Volunteer-based organization"
    }
  }
  </script>
  
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "WebSite",
    "name": "Love Palmers Green",
    "alternateName": "Green Lanes Business Association",
    "url": "<?php echo htmlspecialchars($canonical_url, ENT_QUOTES, 'UTF-8'); ?>",
    "description": "Official site for Love Palmers Green, the Green Lanes Business Association (GLBA) serving Palmers Green, North London N13. Local events, business directory, and community news.",
    "inLanguage": "en-GB",
    "potentialAction": {
      "@type": "SearchAction",
      "target": {
        "@type": "EntryPoint",
        "urlTemplate": "<?php echo htmlspecialchars($canonical_url, ENT_QUOTES, 'UTF-8'); ?>?s={search_term_string}"
      },
      "query-input": "required name=search_term_string"
    }
  }
  </script>
  
  <!-- Breadcrumb Schema -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Home",
        "item": "<?php echo htmlspecialchars($canonical_url, ENT_QUOTES, 'UTF-8'); ?>"
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "Events",
        "item": "<?php echo $protocol . $domain; ?>/index.php#events"
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "Business Directory",
        "item": "<?php echo $protocol . $domain; ?>/index.php#business-directory"
      }
    ]
  }
  </script>
  
  <!-- FAQ Schema for Common Questions -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      {
        "@type": "Question",
        "name": "What is Love Palmers Green?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Love Palmers Green (formerly Green Lanes Business Association) is a community-focused business association that has been supporting local businesses in Palmers Green, North London since 1992. We bring together local businesses, entrepreneurs, and individuals to foster growth, collaboration, and community spirit."
        }
      },
      {
        "@type": "Question",
        "name": "How can I join Love Palmers Green?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "You can join Love Palmers Green by contacting Costas for membership on 07943 198 198 or costas@lovepalmersgreen.com, using the website contact form, or emailing contact@lovepalmersgreen.com. We welcome local businesses, entrepreneurs, and community members in Palmers Green."
        }
      },
      {
        "@type": "Question",
        "name": "What services does Love Palmers Green provide?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Love Palmers Green provides networking opportunities, business resources, community support, a local business directory, and high-street events including Halloween Trick or Treat and the Christmas Lights Switch-On. We work to strengthen the Palmers Green business community."
        }
      },
      {
        "@type": "Question",
        "name": "Where is Love Palmers Green located?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Love Palmers Green is located in Palmers Green, North London, postcode N13. We serve the local business community in this area and surrounding North London neighborhoods."
        }
      },
      {
        "@type": "Question",
        "name": "What is the history of Love Palmers Green?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Love Palmers Green was founded in 1992 as the Green Lanes Business Association (GLBA). For over three decades, we have been a cornerstone of the Palmers Green business community, supporting local commerce and fostering community connections."
        }
      },
      {
        "@type": "Question",
        "name": "Is Love Palmers Green the same as the Green Lanes Business Association?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes. Love Palmers Green is the current name of the Green Lanes Business Association (GLBA), established in 1992 to support local businesses and the Palmers Green shopping area."
        }
      },
      {
        "@type": "Question",
        "name": "When is Halloween Trick or Treat on Palmers Green High Street 2026?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Halloween Trick or Treat on the High Street is on Saturday 31 October 2026 from 10:00 AM to 8:00 PM. The Pumpkin Hunt runs 10:00 AM to 4:30 PM across 24 Palmers Green shops. The Mini-Monster Disco is at The Fox, 413 Green Lanes, N13 4JD, from 4:00 PM to 8:00 PM. The event is organised by Love Palmers Green / GLBA and sponsored by Peter Michael Estates and Lettings. Pickup hunt forms from participating High Street shops and Peter Michael."
        }
      },
      {
        "@type": "Question",
        "name": "When is the Palmers Green Christmas Lights Switch-On 2026?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "The Christmas Lights Switch-On is on Thursday 26 November 2026 at 3:30 PM at The Triangle, Palmers Green, with live performances by St Monica's Choir and Adorned Gospel Community Choir. The Christmas Stocking Hunt follows on Saturday 5 December 2026 along Palmers Green High Street. For Christmas advertising, contact Costas on 07943 198 198 or costas@lovepalmersgreen.com."
        }
      }
    ]
  }
  </script>

  <!-- Event Schema for Halloween 2026 and Christmas 2026 -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "Event",
        "name": "Halloween \"Trick or Treat\" on the High Street",
        "description": "Safe trick-or-treating along Palmers Green High Street for families, including a 24-shop Pumpkin Hunt and Mini-Monster Disco at The Fox. Organised by Love Palmers Green / Green Lanes Business Association (GLBA). Sponsored by Peter Michael Estates and Lettings.",
        "startDate": "2026-10-31T10:00:00+00:00",
        "endDate": "2026-10-31T20:00:00+00:00",
        "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
        "eventStatus": "https://schema.org/EventScheduled",
        "image": "<?php echo $protocol . $domain; ?>/images/halloween2026-poster.jpg",
        "url": "<?php echo $protocol . $domain; ?>/index.php#halloween-2026",
        "location": {
          "@type": "Place",
          "name": "Palmers Green High Street",
          "address": {
            "@type": "PostalAddress",
            "addressLocality": "Palmers Green",
            "addressRegion": "London",
            "postalCode": "N13",
            "addressCountry": "GB"
          },
          "geo": {
            "@type": "GeoCoordinates",
            "latitude": "51.6175",
            "longitude": "-0.1025"
          }
        },
        "organizer": {
          "@type": "Organization",
          "name": "Love Palmers Green",
          "alternateName": "Green Lanes Business Association",
          "url": "https://lovepalmersgreen.com"
        },
        "sponsor": {
          "@type": "Organization",
          "name": "Peter Michael Estates and Lettings"
        },
        "isAccessibleForFree": true,
        "subEvent": [
          {
            "@type": "Event",
            "name": "Pumpkin Hunt",
            "startDate": "2026-10-31T10:00:00+00:00",
            "endDate": "2026-10-31T16:30:00+00:00",
            "location": {
              "@type": "Place",
              "name": "Palmers Green High Street shops"
            }
          },
          {
            "@type": "Event",
            "name": "Mini-Monster Disco",
            "startDate": "2026-10-31T16:00:00+00:00",
            "endDate": "2026-10-31T20:00:00+00:00",
            "location": {
              "@type": "Place",
              "name": "The Fox Pub",
              "url": "https://thefoxnorthlondon.com/",
              "address": {
                "@type": "PostalAddress",
                "streetAddress": "413 Green Lanes",
                "addressLocality": "London",
                "postalCode": "N13 4JD",
                "addressCountry": "GB"
              }
            }
          }
        ]
      },
      {
        "@type": "Event",
        "name": "Christmas Lights Switch-On",
        "description": "Christmas lights switch-on at The Triangle, Palmers Green, with live performances by St Monica's Choir and Adorned Gospel Community Choir. Organised by Love Palmers Green / Green Lanes Business Association (GLBA).",
        "startDate": "2026-11-26T15:30:00+00:00",
        "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
        "eventStatus": "https://schema.org/EventScheduled",
        "image": "<?php echo $protocol . $domain; ?>/images/LPG-Xmas2025.png",
        "url": "<?php echo $protocol . $domain; ?>/index.php#events",
        "location": {
          "@type": "Place",
          "name": "The Triangle, Palmers Green",
          "address": {
            "@type": "PostalAddress",
            "addressLocality": "Palmers Green",
            "addressRegion": "London",
            "postalCode": "N13",
            "addressCountry": "GB"
          },
          "geo": {
            "@type": "GeoCoordinates",
            "latitude": "51.6175",
            "longitude": "-0.1025"
          }
        },
        "organizer": {
          "@type": "Organization",
          "name": "Love Palmers Green",
          "alternateName": "Green Lanes Business Association"
        },
        "isAccessibleForFree": true
      },
      {
        "@type": "Event",
        "name": "Christmas Stocking Hunt",
        "description": "Festive family stocking hunt along Palmers Green High Street. Organised by Love Palmers Green / Green Lanes Business Association (GLBA).",
        "startDate": "2026-12-05",
        "eventAttendanceMode": "https://schema.org/OfflineEventAttendanceMode",
        "eventStatus": "https://schema.org/EventScheduled",
        "image": "<?php echo $protocol . $domain; ?>/images/christmas/LPG-xmas2025-Santa.png",
        "url": "<?php echo $protocol . $domain; ?>/index.php#events",
        "location": {
          "@type": "Place",
          "name": "Palmers Green High Street",
          "address": {
            "@type": "PostalAddress",
            "addressLocality": "Palmers Green",
            "addressRegion": "London",
            "postalCode": "N13",
            "addressCountry": "GB"
          },
          "geo": {
            "@type": "GeoCoordinates",
            "latitude": "51.6175",
            "longitude": "-0.1025"
          }
        },
        "organizer": {
          "@type": "Organization",
          "name": "Love Palmers Green",
          "alternateName": "Green Lanes Business Association"
        },
        "isAccessibleForFree": true
      }
    ]
  }
  </script>
  
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/components.css" rel="stylesheet" type="text/css">
  <link href="css/lovepg.css" rel="stylesheet" type="text/css">
  <link href="css/custom-fix.css" rel="stylesheet" type="text/css">
  <link href="css/link-cards.css" rel="stylesheet" type="text/css">
  <link href="css/fix-padding.css" rel="stylesheet" type="text/css">
  <link href="css/edge-to-edge-fix.css" rel="stylesheet" type="text/css">
  <link href="css/header-footer-padding.css" rel="stylesheet" type="text/css">
  <link href="css/home-menu-fix.css" rel="stylesheet" type="text/css">
  <link href="css/hamburger-only.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic"]  }});</script>
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/favicon.png" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">
  <script src="https://kit.fontawesome.com/0e30feabdc.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Cormorant+Garamond:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="css/stories-display.css" rel="stylesheet" type="text/css">
  <link href="css/header-styles.css" rel="stylesheet" type="text/css">
  <link href="css/wider-layout.css" rel="stylesheet" type="text/css">
  <script src="js/dynamic-adaptation.js" defer></script>
  
  <!-- Mobile padding for Stories and News section -->
  <style>
    /* Hide Stories and News section */
    .stories-news-section {
      display: none !important;
    }
    
    @media (max-width: 768px) {
      .stories-news-section {
        padding: 40px 0 !important;
      }
      .stories-news-section .container {
        padding: 0 15px !important;
      }
      .stories-news-section .section-header {
        margin-bottom: 20px;
        padding: 0 5px;
      }
      .stories-news-section .scriptheading {
        font-size: 1.8em !important;
        margin: 0;
      }
    }
    
    @media (max-width: 480px) {
      .stories-news-section {
        padding: 30px 0 !important;
      }
      .stories-news-section .container {
        padding: 0 10px !important;
      }
      .stories-news-section .scriptheading {
        font-size: 1.6em !important;
      }
    }
    
    /* Festive Featured Story Section - Enhanced Design */
    .festive-featured-story {
      position: relative;
      padding: 60px 40px;
      margin: 50px auto;
      max-width: 1200px;
      background: linear-gradient(to bottom, #ffffff 0%, #f8f9fa 100%);
      border-radius: 16px;
      box-shadow: 0 8px 30px rgba(0,0,0,0.12);
      overflow: hidden;
    }
    
    .festive-featured-story::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 5px;
      background: linear-gradient(to right, #FFA500, #FFD700, #FFA500);
    }
    
    .festive-content {
      display: flex;
      flex-direction: row;
      align-items: center;
      gap: 40px;
    }
    
    .festive-santa-image {
      flex-shrink: 0;
      width: 300px;
      max-width: 100%;
      height: auto;
      display: block;
    }
    
    .festive-santa-image img {
      width: 100%;
      height: auto;
      display: block;
    }
    
    .festive-text-content {
      flex: 1;
      text-align: left;
    }
    
    .festive-image {
      max-width: 100%;
      width: 100%;
      height: auto;
      border-radius: 12px;
      margin-bottom: 40px;
      display: block;
      box-shadow: 0 6px 25px rgba(0,0,0,0.15);
    }
    
    .festive-title {
      font-size: 3.8em;
      font-weight: 800;
      color: #2c5530;
      margin-bottom: 15px;
      letter-spacing: -1px;
      line-height: 1.1;
      text-transform: uppercase;
    }
    
    .festive-subtitle {
      font-size: 1.6em;
      color: #d97706;
      margin-bottom: 10px;
      font-weight: 700;
      letter-spacing: 2px;
      text-transform: uppercase;
    }
    
    .festive-description {
      font-size: 1.3em;
      color: #333;
      margin-bottom: 25px;
      line-height: 1.7;
      font-weight: 500;
    }
    
    .festive-details {
      font-size: 1.2em;
      color: #555;
      margin-bottom: 30px;
      line-height: 1.6;
      font-weight: 400;
    }
    
    .festive-dates {
      font-size: 1.4em;
      color: #666;
      margin-bottom: 35px;
      font-weight: 600;
      letter-spacing: 0.5px;
    }
    
    .festive-prizes {
      background: linear-gradient(135deg, #fff9e6 0%, #ffe6cc 100%);
      padding: 40px;
      border-radius: 12px;
      margin-top: 25px;
      width: 100%;
      max-width: 900px;
      border: 3px solid #FFA500;
      box-shadow: 0 4px 15px rgba(255,165,0,0.2);
      text-align: left;
    }
    
    .festive-prizes h3 {
      color: #2c5530;
      font-size: 2.2em;
      margin-bottom: 20px;
      font-weight: 800;
      letter-spacing: -0.5px;
      text-align: left;
    }
    
    .festive-prizes p {
      color: #333;
      font-size: 1.3em;
      line-height: 1.8;
      margin: 15px 0;
      font-weight: 500;
    }
    
    .festive-prizes strong {
      color: #d97706;
      font-weight: 800;
      font-size: 1.15em;
    }
    
    .prize-highlight {
      font-size: 1.5em;
      color: #d97706;
      font-weight: 800;
      display: block;
      margin: 10px 0;
    }
    
    .prize-plus {
      text-align: left;
      font-size: 1.8em;
      font-weight: 800;
      color: #d97706;
      margin: 20px 0;
      letter-spacing: 2px;
    }
    
    @media (max-width: 768px) {
      .festive-featured-story {
        padding: 45px 25px;
        margin: 40px 15px;
      }
      
      .festive-content {
        flex-direction: column;
        align-items: center;
        text-align: center;
        gap: 30px;
      }
      
      .festive-text-content {
        text-align: center;
      }
      
      .festive-santa-image {
        width: 250px;
      }
      
      .festive-subtitle {
        font-size: 1.3em;
      }
      
      .festive-title {
        font-size: 2.5em;
      }
      
      .festive-description {
        font-size: 1.1em;
      }
      
      .festive-details {
        font-size: 1em;
      }
      
      .festive-dates {
        font-size: 1.2em;
      }
      
      .festive-prizes {
        padding: 30px 25px;
      }
      
      .festive-prizes h3 {
        font-size: 1.8em;
      }
      
      .festive-prizes p {
        font-size: 1.1em;
      }
      
      .prize-highlight {
        font-size: 1.3em;
      }
    }
    
    @media (max-width: 480px) {
      .festive-featured-story {
        padding: 35px 20px;
        margin: 30px 10px;
      }
      
      .festive-content {
        flex-direction: column;
        align-items: center;
        text-align: center;
        gap: 25px;
      }
      
      .festive-text-content {
        text-align: center;
      }
      
      .festive-santa-image {
        width: 200px;
      }
      
      .festive-subtitle {
        font-size: 1.1em;
      }
      
      .festive-title {
        font-size: 2em;
      }
      
      .festive-description {
        font-size: 1em;
      }
      
      .festive-details {
        font-size: 0.95em;
      }
      
      .festive-dates {
        font-size: 1.1em;
      }
      
      .festive-prizes {
        padding: 25px 20px;
      }
      
      .festive-prizes h3 {
        font-size: 1.5em;
      }
      
      .festive-prizes p {
        font-size: 1em;
      }
      
      .prize-highlight {
        font-size: 1.2em;
      }
      
      .prize-plus {
        font-size: 1.3em;
      }
    }

    #halloween-2026,
    #events,
    #pumpkin-hunt,
    #mini-monster-disco,
    #business-directory,
    #contact {
      scroll-margin-top: 90px;
    }

    .festive-featured-story.halloween::before {
      background: linear-gradient(to right, #7c3aed, #FFA500, #dc2626, #FFA500, #7c3aed);
    }

    .halloween-sponsor {
      display: inline-block;
      background: #2c5530;
      color: #fff;
      font-size: 0.78em;
      font-weight: 700;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      padding: 6px 12px;
      border-radius: 4px;
      margin-bottom: 12px;
    }

    .halloween-subevents {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 24px;
      margin-top: 36px;
    }

    .halloween-subevent {
      background: #fff;
      border: 2px solid #ffe0b2;
      border-radius: 12px;
      padding: 24px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.06);
    }

    .halloween-subevent h3 {
      color: #2c5530;
      font-size: 1.45em;
      margin: 0 0 10px 0;
      font-weight: 800;
    }

    .halloween-subevent p,
    .halloween-subevent li {
      color: #444;
      font-size: 1.02em;
      line-height: 1.6;
      margin: 0 0 10px 0;
    }

    .halloween-subevent ul {
      margin: 0 0 12px 18px;
      padding: 0;
    }

    .halloween-subevent a {
      color: #2c5530;
      font-weight: 700;
    }

    .pumpkin-form-banner {
      margin-top: 28px;
      background: linear-gradient(135deg, #fff7ed 0%, #ffedd5 100%);
      border: 3px solid #FFA500;
      border-radius: 12px;
      padding: 24px 28px;
    }

    .pumpkin-form-banner h3 {
      color: #c2410c;
      font-size: 1.5em;
      margin: 0 0 10px 0;
      font-weight: 800;
    }

    .pumpkin-form-banner p {
      color: #333;
      font-size: 1.08em;
      line-height: 1.65;
      margin: 0 0 8px 0;
    }

    .lpg-events-calendar {
      max-width: 1280px;
      margin: 10px auto 40px auto;
      padding: 0 20px;
    }

    .lpg-events-calendar h2 {
      font-size: 2em;
      color: #2c5530;
      margin: 0 0 8px 0;
      font-weight: 800;
    }

    .lpg-events-calendar .events-intro {
      color: #555;
      font-size: 1.08em;
      margin: 0 0 24px 0;
    }

    .lpg-events-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 22px;
    }

    .lpg-event-card {
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 2px 12px rgba(0,0,0,0.08);
      overflow: hidden;
      display: flex;
      flex-direction: column;
      border-top: 5px solid #FFA500;
    }

    .lpg-event-card.christmas {
      border-top-color: #c41e3a;
    }

    .lpg-event-card img {
      width: 100%;
      height: 180px;
      object-fit: cover;
      object-position: top center;
      display: block;
    }

    .lpg-event-card .event-body {
      padding: 20px;
      display: flex;
      flex-direction: column;
      flex: 1;
    }

    .lpg-event-card .event-date {
      color: #d97706;
      font-weight: 800;
      text-transform: uppercase;
      letter-spacing: 0.04em;
      font-size: 0.92em;
      margin-bottom: 8px;
    }

    .lpg-event-card h3 {
      color: #2c5530;
      font-size: 1.25em;
      margin: 0 0 10px 0;
      font-weight: 800;
    }

    .lpg-event-card p {
      color: #555;
      font-size: 0.98em;
      line-height: 1.55;
      margin: 0 0 12px 0;
      flex: 1;
    }

    .lpg-event-card a.event-link {
      display: inline-block;
      padding: 8px 14px;
      background: linear-gradient(to bottom, #555555, #333333, #222222);
      color: #fff;
      text-decoration: none;
      border-radius: 4px;
      font-weight: 600;
      width: fit-content;
    }

    .directory-offer {
      display: inline-block;
      background: linear-gradient(135deg, #fff3e0, #ffe0b2);
      color: #c2410c;
      font-weight: 800;
      font-size: 0.9em;
      padding: 6px 10px;
      border-radius: 4px;
      border: 1px solid #FFA500;
      margin: 0 0 10px 0;
    }

    .directory-sponsor {
      display: inline-block;
      background: #2c5530;
      color: #fff;
      font-weight: 700;
      font-size: 0.78em;
      letter-spacing: 0.05em;
      text-transform: uppercase;
      padding: 4px 8px;
      border-radius: 4px;
      margin: 0 0 10px 0;
    }

    @media (max-width: 900px) {
      .halloween-subevents,
      .lpg-events-grid {
        grid-template-columns: 1fr;
      }
    }

    @media (max-width: 768px) {
      .pumpkin-form-banner,
      .halloween-subevent {
        padding: 18px;
      }
      .lpg-events-calendar {
        padding: 0 15px;
      }
    }
    
    /* Hero Banner Image Styles + Parallax */
    .hero-banner-image {
      display: block;
    }
    .hero-parallax-wrap {
      position: relative;
      overflow: hidden;
    }
    .hero-parallax-inner {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      will-change: transform;
    }
    .hero-parallax-inner .hero-banner-image {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 140%;
      min-height: 100%;
      object-fit: cover;
      object-position: center;
    }
  </style>

</head>
<body class="body home-page" style="background-color: #ffffff;">
  <?php include 'header.php'; ?>
  <div class="hero cc-store-home-wrap" style="background-color: #ffffff; width: 100vw; margin-left: 0; margin-right: 0; padding-left: 0; padding-right: 0; max-width: 100%; overflow: hidden;">
    <div id="hero-intro" class="intro-header hero-parallax-wrap" style="background-color: #ffffff; background-image: none; width: 100vw; height: 50vh; padding-left: 0; padding-right: 0; margin-left: 0; margin-right: 0; position: relative; overflow: hidden;">
      <div class="hero-parallax-inner">
        <img src="images/Hompage-HeroImage-Autumn.jpg" alt="Broomfield Park in Palmers Green in autumn, with golden willow trees around the lake" class="hero-banner-image" style="width: 100%; height: 100%; object-fit: cover; object-position: center;">
      </div>
    </div>
  </div>

  <!-- Halloween 2026 featured event -->
  <section class="festive-featured-story halloween" id="halloween-2026" aria-labelledby="halloween-title">
    <div class="festive-content">
      <div class="festive-santa-image">
        <img src="images/halloween2026-poster.jpg" alt="Halloween Trick or Treat on the High Street 2026 poster, sponsored by Peter Michael Estates and Lettings">
      </div>
      <div class="festive-text-content">
        <span class="halloween-sponsor">Sponsored by Peter Michael Estates and Lettings</span>
        <p class="festive-subtitle">Saturday 31st October 2026</p>
        <h2 class="festive-title" id="halloween-title">Halloween “Trick or Treat” on the High Street</h2>
        <p class="festive-dates">10:00 AM – 8:00 PM · Palmers Green High Street</p>
        <p class="festive-description">Safe trick-or-treating along the local high street for families. Organised by Love Palmers Green / Green Lanes Business Association (GLBA).</p>
        <p class="festive-details">Get your Halloween costumes on and trick or treat safely on our local high street. Pumpkin Hunt during the day, Mini-Monster Disco at The Fox from 4pm.</p>
      </div>
    </div>

    <div class="halloween-subevents">
      <article class="halloween-subevent" id="pumpkin-hunt">
        <h3>Pumpkin Hunt</h3>
        <p><strong>10:00 AM – 4:30 PM</strong></p>
        <p>Find 24 numbered pumpkins in shop windows and write the shop names on your entry form.</p>
        <p><strong>Route:</strong> 24 High Street shops starting at Aldermans Hill (from Lakeside Road), through The Triangle, from Ruth Winston House, and along Green Lanes up towards Hedge Lane.</p>
        <ul>
          <li>Hand completed forms to Peter Michael Estates and Lettings by <strong>4:15 PM</strong></li>
          <li>Prize draw at <strong>4:30 PM</strong> at Peter Michael</li>
          <li>Grand prize: Nintendo Switch Lite (worth £200) + Mario Kart 8 Deluxe (worth £40), donated by Peter Michael</li>
          <li>Gift for all participants</li>
          <li>All entrants must be under 12 and accompanied by an adult</li>
        </ul>
      </article>
      <article class="halloween-subevent" id="mini-monster-disco">
        <h3>Mini-Monster Disco at The Fox</h3>
        <p><strong>Saturday 31st October 2026 · 4:00 PM – 8:00 PM</strong></p>
        <p>Venue: <a href="https://thefoxnorthlondon.com/" target="_blank" rel="noopener noreferrer">The Fox Pub</a>, 413 Green Lanes, London N13 4JD</p>
        <p>Entertainment: Eleni from Asterakia Entertaining</p>
        <p class="directory-offer">10% OFF Kids Mains with leaflet</p>
        <p>
          <a href="tel:+442030910679">0203 091 0679</a><br>
          <a href="mailto:ceyda@thefoxnorthlondon.com">ceyda@thefoxnorthlondon.com</a><br>
          <a href="https://thefoxnorthlondon.com/" target="_blank" rel="noopener noreferrer">thefoxnorthlondon.com</a><br>
          <a href="https://www.instagram.com/THEFOXN13/" target="_blank" rel="noopener noreferrer">@THEFOXN13</a>
        </p>
      </article>
    </div>

    <aside class="pumpkin-form-banner" aria-label="Pumpkin Hunt form pickup">
      <h3>Pick up your Pumpkin Hunt form</h3>
      <p>Collect an entry form from <strong>participating High Street shops</strong> and from <strong>Peter Michael Estates and Lettings</strong>.</p>
      <p>Fill in the child’s name, school and telephone number, find the 24 numbered pumpkins, then <strong>hand the completed form back to Peter Michael by 4:15 PM</strong> on Saturday 31st October 2026.</p>
      <p>Prize draw at 4:30 PM at Peter Michael. All under 12s must be accompanied by an adult.</p>
    </aside>
  </section>

  <section class="lpg-events-calendar" id="events" aria-labelledby="events-heading">
    <h2 id="events-heading">Upcoming Community Events</h2>
    <p class="events-intro">Halloween on the High Street, then Christmas lights and a family stocking hunt — all organised by Love Palmers Green / GLBA.</p>
    <div class="lpg-events-grid">
      <article class="lpg-event-card">
        <img src="images/halloween2026-poster.jpg" alt="Halloween Trick or Treat on the High Street 2026">
        <div class="event-body">
          <div class="event-date">Saturday 31 October 2026 · 10:00 AM – 8:00 PM</div>
          <h3>Halloween “Trick or Treat” on the High Street</h3>
          <p>Pumpkin Hunt 10:00 AM–4:30 PM and Mini-Monster Disco at The Fox 4:00–8:00 PM. Sponsored by Peter Michael Estates and Lettings.</p>
          <a class="event-link" href="#halloween-2026">Event details</a>
        </div>
      </article>
      <article class="lpg-event-card christmas">
        <img src="images/LPG-Xmas2025.png" alt="Palmers Green Christmas lights">
        <div class="event-body">
          <div class="event-date">Thursday 26 November 2026 · 3:30 PM</div>
          <h3>Christmas Lights Switch-On</h3>
          <p>The Triangle, Palmers Green. Live performances by St Monica’s Choir and Adorned Gospel Community Choir. Look out for posters around the high street.</p>
        </div>
      </article>
      <article class="lpg-event-card christmas">
        <img src="images/christmas/LPG-xmas2025-Santa.png" alt="Christmas Stocking Hunt in Palmers Green">
        <div class="event-body">
          <div class="event-date">Saturday 5 December 2026</div>
          <h3>Christmas Stocking Hunt</h3>
          <p>A festive family event along Palmers Green High Street. Look out for posters advertising both Christmas events.</p>
        </div>
      </article>
    </div>
  </section>

  <!-- Stories/News CMS Section (hidden) -->
  <section style="padding: 60px 0; background-color: #ededed; border-radius: 18px; box-shadow: 0 4px 24px rgba(0,0,0,0.07); margin: 40px 0; display: none;" class="stories-news-section" aria-hidden="true">
    <div class="container" style="padding: 0 20px;">
      <div id="stories-section" class="section">
        <div class="section-header" style="display: flex; justify-content: space-between; align-items: center;">
          <h2 class="scriptheading">Stories and News</h2>
        </div>
        
      </div>
      
      <!-- Stories will be loaded here -->
      <div id="stories-container">
        <?php include 'get-stories.php'; ?>
      </div>
    </div>
  </section>
  
  <section style="background-color: #f8f8f8; padding: 40px 0;">
    <div class="w-layout-blockcontainer container-5 w-container">
      <h1 class="scriptheading">Welcome to Love Palmers Green</h1>
      
      <p class="paragraph intro-lead" style="font-size: 1.4em; line-height: 1.5; margin-bottom: 28px; max-width: 48em; color: #333;">For over three decades, the Love Palmers Green community has been dedicated to supporting and connecting the vibrant business community of <strong>Palmers Green, North London</strong>. Formerly known as the <strong>Green Lanes Business Association (GLBA)</strong>, our association has been a cornerstone of the area since 1992.</p>
      
      <div class="intro-columns" style="display: flex; flex-wrap: wrap; gap: 24px 32px; margin-bottom: 20px;">
        <div class="intro-column" style="flex: 1 1 280px; padding: 0; min-width: 0;">
          <p class="paragraph introtext" style="font-size: 1.05em; line-height: 1.5; color: #444;">We are proud to bring together local businesses, entrepreneurs, and individuals to foster growth, collaboration, and a stronger sense of community. Our network spans across various industries and sectors within the local area.</p>
        </div>
        <div class="intro-column" style="flex: 1 1 280px; padding: 0; min-width: 0;">
          <p class="paragraph introtext" style="font-size: 1.05em; line-height: 1.5; color: #444;">As a hub for local commerce and innovation, we strive to provide valuable resources, networking opportunities, and expert guidance to help our members thrive. Whether you're a long-standing business owner or a newcomer to the area, we invite you to <a href="#contact" class="plainlink">join us</a> and become part of the <strong>Love Palmers Green family</strong>.</p>
        </div>
      </div>
      
      <div class="enfield-contact" style="background-color: #f5f5f5; padding: 15px; border-radius: 8px; margin-bottom: 25px; text-align: center;">
        <p style="font-size: 1.1em; margin: 0;"><strong>Enfield Council contact number:</strong> <a href="tel:02083791000" style="color: #444; text-decoration: underline; font-weight: bold;">020 8379 1000</a></p>
        <p style="font-size: 0.95em; margin: 5px 0 0 0; color: #555;">This number is available Monday to Friday, 9am to 5pm</p>
        <style>
          @media screen and (max-width: 767px) {
            .enfield-contact a {
              display: inline-block;
              background: linear-gradient(to bottom, #555555, #333333, #222222);
              color: white !important;
              padding: 6px 12px;
              border-radius: 4px;
              text-decoration: none !important;
              margin-top: 5px;
            }
          }
        </style>
      </div>
      
      <!-- Quick Link Cards -->
      


      <div class="lpg-link-card-container">
        <a href="our-vision.php" class="lpg-link-card">
          <div class="lpg-link-card-title"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-right: 10px; vertical-align: middle;"><circle cx="12" cy="12" r="3"></circle><path d="M2 12s3-9 10-9 10 9 10 9-3 9-10 9-10-9-10-9z"></path></svg>Vision</div>
          <div class="lpg-link-card-description">Learn about our goals and aspirations for Palmers Green</div>
        </a>
        
        <a href="history.php" class="lpg-link-card">
          <div class="lpg-link-card-title"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-right: 10px; vertical-align: middle;"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>History</div>
          <div class="lpg-link-card-description">Discover the rich history of our community in photos</div>
        </a>
        
        <a href="the-commitee.php" class="lpg-link-card">
          <div class="lpg-link-card-title"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-right: 10px; vertical-align: middle;"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>Commitee</div>
          <div class="lpg-link-card-description">Meet the dedicated team behind Love Palmers Green</div>
        </a>
        
        <a href="#contact" class="lpg-link-card">
          <div class="lpg-link-card-title"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-right: 10px; vertical-align: middle;"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>Contact</div>
          <div class="lpg-link-card-description">Get in touch with us and join our community</div>
        </a>
        
        <a href="#events" class="lpg-link-card">
          <div class="lpg-link-card-title"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-right: 10px; vertical-align: middle;"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>Events</div>
          <div class="lpg-link-card-description">Halloween 2026, Christmas lights and high street hunts</div>
        </a>
        
        <a href="#business-directory" class="lpg-link-card">
          <div class="lpg-link-card-title"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-right: 10px; vertical-align: middle;"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>Business Directory</div>
          <div class="lpg-link-card-description">Browse our local Palmers Green businesses</div>
        </a>
      </div>
      
      <div class="home-content-wrap">
        <div class="newsdiv">
                    
          <!-- Font Awesome and Google Fonts now loaded in the head section -->
          
          <!-- Live Local News Feed -->
          <div class="news-section" style="margin-top: 60px;">
            <h2 class="heading-jumbo-small">Live Local News</h2>
            <p class="paragraph-light">Live feed from local sources around Palmers Green and Enfield</p>
            
            <div class="news-controls" style="display: flex; justify-content: flex-end; margin: 20px 0;">
              <button id="refresh-news-button" style="padding: 8px 16px; border: none; border-radius: 4px; cursor: pointer; background: linear-gradient(to bottom, #555555, #333333, #222222); color: white;">
                <i class="fas fa-sync-alt" style="margin-right: 8px;"></i>Refresh
              </button>
            </div>
            
            <div id="news-container" class="tab-content active-content">
              <div class="loading-message" style="text-align: center; padding: 40px;">
                <div class="loading-spinner" style="display: inline-block; width: 40px; height: 40px; border: 4px solid rgba(0,0,0,0.1); border-radius: 50%; border-top-color: #333; animation: spin 1s ease-in-out infinite;"></div>
                <p style="margin-top: 15px;">Loading local news...</p>
              </div>
              
              <!-- Article Schema for News Articles (Sample Articles) -->
              <script type="application/ld+json">
              {
                "@context": "https://schema.org",
                "@type": "NewsArticle",
                "headline": "Palmers Green Triangle Park Renovation Complete",
                "datePublished": "2025-06-27",
                "dateModified": "2025-06-27",
                "author": {
                  "@type": "Organization",
                  "name": "Love Palmers Green"
                },
                "publisher": {
                  "@type": "Organization",
                  "name": "Love Palmers Green",
                  "logo": {
                    "@type": "ImageObject",
                    "url": "<?php echo $protocol . $domain; ?>/images/LPG_2025_Long_logo_White03.png"
                  }
                },
                "description": "The renovation of Palmers Green Triangle Park has been completed. The new park features improved landscaping, seating areas, and sustainable planting designed to enhance biodiversity in the area.",
                "url": "https://letstalk.enfield.gov.uk/triangle",
                "mainEntityOfPage": {
                  "@type": "WebPage",
                  "@id": "<?php echo htmlspecialchars($canonical_url, ENT_QUOTES, 'UTF-8'); ?>"
                }
              }
              </script>
              
              <!-- Local news grid -->
              <div id="local-news-grid" class="local-news-grid">
                <!-- Sample news article 1 -->
                <article class="news-article news-card" itemscope itemtype="https://schema.org/NewsArticle">
                  <h3 itemprop="headline" class="news-card__title">Palmers Green Triangle Park Renovation Complete</h3>
                  <p class="news-date news-card__date"><i class="fas fa-calendar-alt" aria-hidden="true"></i><time itemprop="datePublished" datetime="2025-06-27">27 June 2025</time></p>
                  <p itemprop="description" class="news-card__description">The renovation of Palmers Green Triangle Park has been completed. The new park features improved landscaping, seating areas, and sustainable planting designed to enhance biodiversity in the area.</p>
                  <a href="https://letstalk.enfield.gov.uk/triangle" target="_blank" rel="noopener noreferrer" itemprop="url" class="news-link news-card__link">Read More</a>
                </article>
                
                <!-- Sample news article 2 -->
                <article class="news-article news-card" itemscope itemtype="https://schema.org/NewsArticle">
                  <h3 itemprop="headline" class="news-card__title">New Independent Bookshop Opens on Green Lanes</h3>
                  <p class="news-date news-card__date"><i class="fas fa-calendar-alt" aria-hidden="true"></i><time itemprop="datePublished" datetime="2025-06-25">25 June 2025</time></p>
                  <p itemprop="description" class="news-card__description">Book lovers in Palmers Green are celebrating the opening of a new independent bookshop on Green Lanes. The store features a wide selection of fiction and non-fiction titles, as well as a dedicated children's section.</p>
                  <a href="https://allgoodbookshop.co.uk/" target="_blank" rel="noopener noreferrer" itemprop="url" class="news-link news-card__link">Read More</a>
                </article>
                
                <!-- Sample news article 3 -->
                <article class="news-article news-card" itemscope itemtype="https://schema.org/NewsArticle">
                  <h3 itemprop="headline" class="news-card__title">Palmers Green Farmers Market Expands to Weekly Event</h3>
                  <p class="news-date news-card__date"><i class="fas fa-calendar-alt" aria-hidden="true"></i><time itemprop="datePublished" datetime="2025-06-22">22 June 2025</time></p>
                  <p itemprop="description" class="news-card__description">Following its growing popularity, the Palmers Green Farmers Market will now be held weekly instead of bi-weekly. The market features local produce, artisan foods, and handcrafted goods from local vendors.</p>
                  <a href="https://www.palmersgreenactionteam.org/streetmarkets" target="_blank" rel="noopener noreferrer" itemprop="url" class="news-link news-card__link">Read More</a>
                </article>
                
                <!-- Sample news article 4 -->
                <article class="news-article news-card" itemscope itemtype="https://schema.org/NewsArticle">
                  <h3 itemprop="headline" class="news-card__title">Community Garden Initiative Launches in Palmers Green</h3>
                  <p class="news-date news-card__date"><i class="fas fa-calendar-alt" aria-hidden="true"></i><time itemprop="datePublished" datetime="2025-06-20">20 June 2025</time></p>
                  <p itemprop="description" class="news-card__description">A new community garden initiative has been launched in Palmers Green, allowing residents to grow their own vegetables and flowers. The project aims to promote sustainable living and community bonding.</p>
                  <a href="https://enfielddispatch.co.uk/how-the-local-community-can-help-build-an-action-plan-for-palmers-green/" target="_blank" rel="noopener noreferrer" itemprop="url" class="news-link news-card__link">Read More</a>
                </article>
              </div>
              
              <style>
                .local-news-grid {
                  display: grid;
                  grid-template-columns: repeat(3, 1fr);
                  gap: 24px;
                  margin-top: 24px;
                  width: 100%;
                }
                @media screen and (max-width: 992px) {
                  .local-news-grid {
                    grid-template-columns: repeat(2, 1fr);
                    gap: 20px;
                  }
                }
                @media screen and (max-width: 576px) {
                  .local-news-grid {
                    grid-template-columns: 1fr;
                    gap: 20px;
                  }
                }
                .news-card,
                #news-container .news-item.news-card {
                  background: #fff;
                  border-radius: 12px;
                  box-shadow: 0 2px 12px rgba(0,0,0,0.08);
                  padding: 24px;
                  display: flex;
                  flex-direction: column;
                  min-height: 220px;
                  border: 1px solid #eee;
                  transition: transform 0.2s ease, box-shadow 0.2s ease;
                }
                .news-card:hover,
                #news-container .news-item.news-card:hover {
                  transform: translateY(-4px);
                  box-shadow: 0 8px 24px rgba(0,0,0,0.12);
                }
                .news-card__title {
                  font-size: 1.2em;
                  margin: 0 0 10px 0;
                  line-height: 1.35;
                  font-weight: 600;
                }
                .news-card__date {
                  color: #666;
                  font-size: 0.875rem;
                  margin: 0 0 12px 0;
                }
                .news-card__date .fa-calendar-alt {
                  margin-right: 6px;
                }
                .news-card__description {
                  flex: 1;
                  margin: 0 0 16px 0;
                  font-size: 0.95rem;
                  line-height: 1.5;
                  color: #444;
                }
                .news-card__link {
                  display: inline-block;
                  background: linear-gradient(to bottom, #555555, #333333, #222222);
                  color: #fff;
                  padding: 10px 18px;
                  border-radius: 6px;
                  text-decoration: none;
                  font-size: 0.875rem;
                  font-weight: 500;
                  margin-top: auto;
                  transition: background 0.2s ease;
                }
                .news-card__link:hover {
                  background: linear-gradient(to bottom, #666666, #444444, #333333);
                }
                #news-container .news-item.news-card {
                  padding: 0;
                  overflow: hidden;
                }
                #news-container .news-item.news-card .news-image {
                  width: 100%;
                  height: 180px;
                  object-fit: cover;
                  display: block;
                  border-radius: 12px 12px 0 0;
                }
                #news-container .news-item.news-card .news-content {
                  padding: 24px;
                  flex-grow: 1;
                  display: flex;
                  flex-direction: column;
                }
                #news-container .news-item.news-card h3 {
                  font-size: 1.2em;
                  margin: 0 0 10px 0;
                }
                #news-container .news-item.news-card .news-snippet {
                  flex-grow: 1;
                  margin-bottom: 12px;
                }
                /* Story links: make headlines and Read more clearly clickable */
                .news-card__title-link,
                #news-container .news-item .news-card__title-link {
                  color: #2a5a2a;
                  text-decoration: none;
                  font-weight: 600;
                  cursor: pointer;
                  border-bottom: 1px solid transparent;
                  transition: color 0.2s ease, border-color 0.2s ease;
                }
                .news-card__title-link:hover,
                #news-container .news-item .news-card__title-link:hover {
                  color: #93c13d;
                  border-bottom-color: #93c13d;
                }
                #news-container .news-item .news-card__link {
                  margin-top: 12px;
                  display: inline-block;
                  background: linear-gradient(to bottom, #555555, #333333, #222222);
                  color: #fff;
                  padding: 10px 18px;
                  border-radius: 6px;
                  text-decoration: none;
                  font-size: 0.875rem;
                  font-weight: 500;
                  transition: background 0.2s ease;
                }
                #news-container .news-item .news-card__link:hover {
                  background: linear-gradient(to bottom, #666666, #444444, #333333);
                }
                .news-card__image-link {
                  display: block;
                  text-decoration: none;
                  color: inherit;
                }
              </style>
            </div>
            
            <script>
              document.addEventListener('DOMContentLoaded', function() {
                const refreshButton = document.getElementById('refresh-news-button');
                refreshButton.addEventListener('click', function() {
                  fetchNewsFeed(NEWS_CONTAINER_ID, LOCAL_RSS_FEEDS);
                });
                fetchNewsFeed(NEWS_CONTAINER_ID, LOCAL_RSS_FEEDS);
              });
            </script>
          </div>
          
          <div>
            <div class="code-embed w-embed w-script">
              <!DOCTYPE html>
              <html>
              <head>
                <title>Palmers Green News</title>
                <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            padding: 10px;
            color: #333;
            width: 100%;
            box-sizing: border-box;
        }
        h1, h2 {
            color: #333;
            font-weight: normal;
            margin-bottom: 10px;
        }
        h1 {
            font-size: 24px;
        }
        .date {
            color: #666;
            font-size: 14px;
            margin-bottom: 20px;
            text-transform: uppercase;
        }
        p {
            margin-bottom: 16px;
        }
        #news-container {
            margin-top: 40px; 
            padding-top: 30px;
            border-top: 2px solid #e0e0e0;
            display: block;
        }
        #news-container .news-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 20px;
            align-items: stretch;
        }
        #news-container .news-item {
            min-height: 200px;
        }
        #news-container h1 {
            margin-bottom: 0; /* Reset margin as it's now in flex container */
            margin-right: auto; /* Pushes button to the right */
        }
        #news-container .news-header {
            grid-column: 1 / -1; /* Span full width */
            display: flex;
            /* Align button to the right */
            justify-content: space-between; /* Title left, button right */
            align-items: center;
            margin-bottom: 20px;
        }
        #news-container .news-item {
            border: 1px solid #eee;
            border-radius: 8px;
            overflow: hidden;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
            display: flex;
            flex-direction: column;
            height: 100%; 
        }
        #news-container .news-image {
            width: 100%;
            height: 180px;
            object-fit: cover;
            background-color: #f0f0f0;
            border-bottom: 1px solid #eee;
        }
        #news-container .news-image.placeholder {
            width: 100%;
            height: 180px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #999;
            font-size: 14px;
            text-align: center;
            background-color: #f5f5f5;
        }
        #news-container .news-content {
            padding: 15px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }
        #news-container .news-title {
            font-weight: bold;
            margin-bottom: 8px;
            line-height: 1.3;
            font-size: 1.1em;
        }
        /* All links in local news: no blue, no underline */
        #news-container a {
            color: #333;
            text-decoration: none;
            transition: color 0.2s ease;
        }
        #news-container a:hover {
            color: #93c13d;
        }
        #news-container .news-title a,
        #news-container .news-item h3 a {
            color: #333;
            text-decoration: none;
        }
        #news-container .news-title a:hover,
        #news-container .news-item h3 a:hover {
            color: #93c13d;
        }
        #news-container .news-snippet {
            font-size: 0.9em;
            color: #555;
            line-height: 1.5;
            margin-bottom: 10px;
            flex-grow: 1;
        }
        #news-container .news-source { 
            color: #666; 
            font-size: 0.9em; 
        }
        .error { color: red; }
        .api-key-info { 
            background: #f8f8f8; 
            padding: 10px; 
            margin-top: 20px;
            border-left: 3px solid #ccc;
        }
        .news-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }
        /* --- General Button Styles --- */
         .refresh-button {
             background-color: #93c13d; /* Standard green */
             border: none;
             color: white;
             padding: 8px 16px 10px 16px; /* Consistent padding */
             text-align: center;
             text-decoration: none;
             display: inline-flex;
             align-items: center;
             gap: 8px;
             font-size: 14px; /* Consistent font size */
             border-radius: 4px;
             cursor: pointer;
             transition: background-color 0.2s ease;
         }
         .refresh-button:hover {
             background-color: #7fa834;
         }
         .refresh-button svg {
             width: 15px; /* Consistent icon size */
             height: 15px;
         }
     </style>
              </head>
              <body>

                <script>
        const NEWS_CONTAINER_ID = 'news-container';
        const GENERAL_API_KEY_INFO_ID = 'api-key-info';
        const LOCAL_RSS_FEEDS = [
            'https://www.standard.co.uk/topic/palmers-green/rss',
            'https://enfielddispatch.co.uk/feed',
            'https://www.pgweb.uk/feed',
            'http://feeds.bbci.co.uk/news/london/rss.xml'
        ];
        const RSS_API_ENDPOINT = 'api/rss-proxy.php';
        async function fetchNewsFeed(containerId, feedList) {
            const container = document.getElementById(containerId);
            const apiKeyInfo = document.getElementById(GENERAL_API_KEY_INFO_ID);
            const loadingMessage = container.querySelector('.loading-message');
            if (loadingMessage) loadingMessage.style.display = 'block';
            container.querySelectorAll('.news-item').forEach(item => item.remove());
            container.querySelectorAll('.error').forEach(el => el.remove());
            if (apiKeyInfo) apiKeyInfo.style.display = 'none'; 
            try {
                let allNews = [];
                let fetchPromises = [];
                for (const feedUrl of feedList) {
                    fetchPromises.push(
                        fetch(RSS_API_ENDPOINT, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                            },
                            body: JSON.stringify({ feed_url: feedUrl })
                        })
                        .then(response => {
                            if (!response.ok) {
                                throw new Error(`HTTP error! status: ${response.status}`);
                            }
                            return response.json();
                        })
                        .then(result => {
                            if (result.success && result.data) {
                                const data = result.data;
                                if (data.status === 'ok' && data.items) {
                                    data.items.forEach(item => item.feedTitle = data.feed.title); 
                                    return data.items;
                                } else if (data.status === 'error') {
                                    if (data.message && data.message.includes('API') && apiKeyInfo) {
                                        apiKeyInfo.style.display = 'block';
                                    }
                                    console.warn(`Failed to fetch ${feedUrl}: ${data.message || 'Unknown error'}`);
                                    return [];
                                }
                            } else {
                                console.warn(`Failed to fetch ${feedUrl}: ${result.error || 'Unknown error'}`);
                                return [];
                            }
                            return [];
                        })
                        .catch(error => {
                            console.error(`Error fetching ${feedUrl}:`, error);
                            return [];
                        })
                    );
                }
                const results = await Promise.all(fetchPromises);
                allNews = results.flat(); 
                if (loadingMessage) loadingMessage.style.display = 'none';
                allNews.sort((a, b) => new Date(b.pubDate) - new Date(a.pubDate));
                if (allNews.length > 0) {
                    let html = '';
                    const maxItems = 10;
                    const snippetLength = 100;
                    allNews.slice(0, maxItems).forEach(item => {
                        if (!item) return;
                        const hasImage = item.enclosure && item.enclosure.link;
                        let imageUrl = hasImage ? item.enclosure.link : (item.thumbnail || '');
                        if (!imageUrl && item.description) {
                            const imgMatch = item.description.match(/<img[^>]+src="([^">]+)"/);
                            if (imgMatch && imgMatch[1]) imageUrl = imgMatch[1];
                        }
                        const snippet = item.description ? item.description.replace(/<[^>]*>/g, '').substring(0, snippetLength) + '...' : '';
                        const safeLink = (item.link || '').replace(/"/g, '&quot;');
                        html += `
                            <div class="news-item news-card">
                                ${imageUrl ? `<a href="${safeLink}" target="_blank" rel="noopener noreferrer" class="news-card__image-link"><img class="news-image" src="${imageUrl}" alt=""></a>` : ''}
                                <div class="news-content">
                                    <h3><a href="${safeLink}" target="_blank" rel="noopener noreferrer" class="news-card__title-link">${item.title}</a></h3>
                                    <div class="news-snippet">${snippet}</div>
                                    <div class="news-source">${item.feedTitle}</div>
                                    <a href="${safeLink}" target="_blank" rel="noopener noreferrer" class="news-card__link">Read more</a>
                                </div>
                            </div>
                        `;
                    });
                    var grid = container.querySelector('#local-news-grid');
                    if (grid) {
                        grid.innerHTML = html;
                    } else {
                        container.innerHTML = html;
                    }
                } else {
                    var gridEl = container.querySelector('#local-news-grid');
                    if (gridEl) {
                        gridEl.innerHTML = '<div class="error" style="grid-column:1/-1">No news found.</div>';
                    } else {
                        container.innerHTML = '<div class="error">No news found.</div>';
                    }
                }
            } catch(error) {
              console.error('Error in news feed:', error);
            }
        }
        </script>
              
        <script>
          // Business Directory JavaScript
          document.addEventListener('DOMContentLoaded', function() {
            try {
              // Business directory filtering code
              const filterButtons = document.querySelectorAll('.filter-btn');
              const businessItems = document.querySelectorAll('.business-item');
              const searchInput = document.getElementById('business-search');
              const searchButton = document.getElementById('search-button');
              const sectionHeadings = document.querySelectorAll('#business-listings-container h2');
              
              // Category filtering
              const categoryButtons = document.querySelectorAll('.category-filter');
              let activeCategory = 'all'; // Default selected category
              
              // Initialize category buttons
              function initCategoryButtons() {
                categoryButtons.forEach(button => {
                  // Set initial state
                  if (button.getAttribute('data-category') === activeCategory) {
                    button.classList.add('active');
                    button.setAttribute('aria-pressed', 'true');
                    button.style.background = 'linear-gradient(to bottom, #555555, #333333, #222222)';
                    button.style.color = 'white';
                  }
                  
                  // Add click event listener
                  button.addEventListener('click', function() {
                    // Remove active class from all buttons
                    categoryButtons.forEach(btn => {
                      btn.classList.remove('active');
                      btn.setAttribute('aria-pressed', 'false');
                      btn.style.background = '';
                      btn.style.color = '';
                    });
                    
                    // Add active class to clicked button
                    this.classList.add('active');
                    this.setAttribute('aria-pressed', 'true');
                    this.style.background = 'linear-gradient(to bottom, #555555, #333333, #222222)';
                    this.style.color = 'white';
                    
                    // Update active category
                    activeCategory = this.getAttribute('data-category');
                    
                    // Filter businesses by category
                    filterBusinessesByCategory();
                  });
                });
              }
              
              // Filter businesses by category
              function filterBusinessesByCategory() {
                businessItems.forEach(item => {
                  const itemCategory = item.getAttribute('data-category');
                  
                  if (activeCategory === 'all' || itemCategory === activeCategory) {
                    item.style.display = 'block';
                  } else {
                    item.style.display = 'none';
                  }
                });
                
                // Update section headings visibility
                updateSectionHeadings();
              }
              
              // Update section headings visibility
              function updateSectionHeadings() {
                sectionHeadings.forEach(heading => {
                  const nextElement = heading.nextElementSibling;
                  let hasVisibleItems = false;
                  
                  // Check if any business items in this section are visible
                  let current = nextElement;
                  while (current && current.tagName !== 'H2') {
                    if (current.classList.contains('business-item') && current.style.display !== 'none') {
                      hasVisibleItems = true;
                      break;
                    }
                    current = current.nextElementSibling;
                  }
                  
                  heading.style.display = hasVisibleItems ? 'block' : 'none';
                });
              }
              
              // Perform search
              function performSearch() {
                const searchText = searchInput.value.toLowerCase();
                
                businessItems.forEach(item => {
                  // Get the business name and other text content
                  const businessName = item.querySelector('h3').textContent.toLowerCase();
                  const otherContent = item.textContent.toLowerCase();
                  
                  if (businessName.includes(searchText) || otherContent.includes(searchText)) {
                    item.style.display = 'block';
                  } else {
                    item.style.display = 'none';
                  }
                });
                
                // Show/hide section headings based on visible items
                updateSectionHeadings();
              }
              
              // Add search button click event
              searchButton.addEventListener('click', performSearch);
              
              // Add enter key press event to search input
              searchInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                  performSearch();
                }
              });
              
              // Initialize the category buttons
              initCategoryButtons();
              
              // Initial filtering
              filterBusinessesByCategory();
            } catch(error) {
              console.error('Error in business directory:', error);
            }
          });
          </script>
          </div>
          <div class="divider"></div>
        </div>
        
        <!-- Business Directory Section -->
        <div id="business-directory" class="newsdiv" style="margin-top: 40px;">
          <div class="motto-wrap">
            <div class="heading-jumbo-small">Palmers Green Business Directory<br></div>
            <p class="paragraph-light">Discover local businesses in Palmers Green. Filter by category to find exactly what you're looking for.</p>
          </div>
          
          <div id="category-filters" style="margin-top: 20px; display: flex; flex-wrap: wrap; gap: 10px;">
            <button class="category-filter" data-category="all" style="padding: 8px 16px; border: none; border-radius: 4px; cursor: pointer; background: linear-gradient(to bottom, #555555, #333333, #222222); color: white;" aria-pressed="true">All</button>
            <button class="category-filter" data-category="cafe" style="padding: 8px 16px; border: none; border-radius: 4px; cursor: pointer;" aria-pressed="false">Cafés & Restaurants</button>
            <button class="category-filter" data-category="retail" style="padding: 8px 16px; border: none; border-radius: 4px; cursor: pointer;" aria-pressed="false">Retail</button>
            <button class="category-filter" data-category="deli" style="padding: 8px 16px; border: none; border-radius: 4px; cursor: pointer;" aria-pressed="false">Delis & Food</button>
            <button class="category-filter" data-category="service" style="padding: 8px 16px; border: none; border-radius: 4px; cursor: pointer;" aria-pressed="false">Professional Services</button>
            <button class="category-filter" data-category="health" style="padding: 8px 16px; border: none; border-radius: 4px; cursor: pointer;" aria-pressed="false">Health & Beauty</button>
            <button class="category-filter" data-category="charity" style="padding: 8px 16px; border: none; border-radius: 4px; cursor: pointer;" aria-pressed="false">Charity Shops</button>
            <button class="category-filter" data-category="fitness" style="padding: 8px 16px; border: none; border-radius: 4px; cursor: pointer;" aria-pressed="false">Fitness & Leisure</button>
            <button class="category-filter" data-category="pub" style="padding: 8px 16px; border: none; border-radius: 4px; cursor: pointer;" aria-pressed="false">Pubs & Bars</button>
          </div>
          
          <!-- Search Bar -->
          <div style="margin-bottom: 20px;">
            <input type="text" id="business-search" placeholder="Search by name, category, or location..." style="padding: 8px 12px; width: calc(100% - 100px); border: 1px solid #ddd; border-radius: 4px;">
            <button id="search-button" style="padding: 8px 12px; margin-left: 8px; border: none; border-radius: 4px; background: linear-gradient(to bottom, #555555, #333333, #222222); color: white; cursor: pointer;">Search</button>
          </div>
          
          <!-- Business Listings Container -->
          <div id="business-listings-container">
            <!-- Cafés & Restaurants Section -->
            <h2 style="margin-top: 30px; border-bottom: 1px solid #eee; padding-bottom: 10px;">Cafés & Restaurants</h2>
            
            <div class="business-listings" style="display: flex; flex-wrap: wrap; gap: 20px; margin-top: 15px;">
              <div class="business-item" data-category="cafe" style="flex: 1 1 300px; padding: 15px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); background-color: #fff;">
                <h3 style="margin-top: 0; margin-bottom: 10px;">The Yard Café</h3>
                <div style="margin-bottom: 8px;"><span style="font-weight: bold;">Category:</span> Café</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i> Palmers Green &amp; Alexandra Palace</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-globe" style="margin-right: 5px;"></i> <a href="https://theyardcafe.co.uk/" target="_blank" rel="noopener noreferrer">theyardcafe.co.uk</a></div>
                <div style="margin-bottom: 12px;">Artisan coffee and food in Palmers Green and Alexandra Palace. Evenings include live music, wine tasting, supper clubs and champagne events.</div>
                <div>
                  <a href="https://maps.google.com/?q=The+Yard+Cafe,+Palmers+Green" target="_blank" rel="noopener" style="display: inline-block; padding: 6px 12px; background: linear-gradient(to bottom, #555555, #333333, #222222); color: white; text-decoration: none; border-radius: 4px; margin-right: 8px;">Directions</a>
                  <button class="share-btn" data-business="The Yard Café" style="padding: 6px 12px; border: 1px solid #ddd; background: #f8f8f8; border-radius: 4px; cursor: pointer;">Share</button>
                </div>
              </div>

              <div class="business-item" data-category="cafe" style="flex: 1 1 300px; padding: 15px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); background-color: #fff;">
                <h3 style="margin-top: 0; margin-bottom: 10px;">Blend & Brew</h3>
                <div style="margin-bottom: 8px;"><span style="font-weight: bold;">Category:</span> Café</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i> 24 Green Lanes, Palmers Green, N13 6HT</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-phone" style="margin-right: 5px;"></i> 020 8889 1234</div>
                <div style="margin-bottom: 12px;">Cozy café serving specialty coffee, light lunches, and homemade cakes. Free WiFi for customers.</div>
                <div>
                  <a href="https://maps.google.com/?q=24+Green+Lanes,+Palmers+Green,+N13+6HT" target="_blank" rel="noopener" style="display: inline-block; padding: 6px 12px; background: linear-gradient(to bottom, #555555, #333333, #222222); color: white; text-decoration: none; border-radius: 4px; margin-right: 8px;">Directions</a>
                  <button class="share-btn" data-business="Blend & Brew" style="padding: 6px 12px; border: 1px solid #ddd; background: #f8f8f8; border-radius: 4px; cursor: pointer;">Share</button>
                </div>
              </div>
              
              <div class="business-item" data-category="cafe" style="flex: 1 1 300px; padding: 15px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); background-color: #fff;">
                <h3 style="margin-top: 0; margin-bottom: 10px;">Sweet Life Greek Patisserie</h3>
                <div style="margin-bottom: 8px;"><span style="font-weight: bold;">Category:</span> Bakery & Café</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i> 68 Aldermans Hill, London N13 4PP</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-phone" style="margin-right: 5px;"></i> 020 8882 6039</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-globe" style="margin-right: 5px;"></i> <a href="https://sweetlifepatisserie.co.uk" target="_blank" rel="noopener">sweetlifepatisserie.co.uk</a></div>
                <div style="margin-bottom: 8px;"><i class="fas fa-star" style="margin-right: 5px; color: #FFD700;"></i> 4.1 - 160 Google reviews</div>
                <div style="margin-bottom: 12px;">Authentic Greek bakery offering traditional pastries, cakes, and coffee. Known for its welcoming atmosphere and outdoor seating. Opens 6am Sun.</div>
                <div>
                  <a href="https://maps.google.com/?q=68+Aldermans+Hill,+London+N13+4PP" target="_blank" rel="noopener" style="display: inline-block; padding: 6px 12px; background: linear-gradient(to bottom, #555555, #333333, #222222); color: white; text-decoration: none; border-radius: 4px; margin-right: 8px;">Directions</a>
                  <button class="share-btn" data-business="Sweet Life Greek Patisserie" style="padding: 6px 12px; border: 1px solid #ddd; background: #f8f8f8; border-radius: 4px; cursor: pointer;">Share</button>
                </div>
              </div>
              
              <div class="business-item" data-category="cafe" style="flex: 1 1 300px; padding: 15px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); background-color: #fff;">
                <h3 style="margin-top: 0; margin-bottom: 10px;">The Green Bean</h3>
                <div style="margin-bottom: 8px;"><span style="font-weight: bold;">Category:</span> Café</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i> 36 Aldermans Hill, Palmers Green, N13 4PN</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-phone" style="margin-right: 5px;"></i> 020 8886 5432</div>
                <div style="margin-bottom: 12px;">Eco-friendly café offering organic coffee, vegan options, and sustainable packaging. Community events hosted monthly.</div>
                <div>
                  <a href="https://maps.google.com/?q=36+Aldermans+Hill,+Palmers+Green,+N13+4PN" target="_blank" rel="noopener" style="display: inline-block; padding: 6px 12px; background: linear-gradient(to bottom, #555555, #333333, #222222); color: white; text-decoration: none; border-radius: 4px; margin-right: 8px;">Directions</a>
                  <button class="share-btn" data-business="The Green Bean" style="padding: 6px 12px; border: 1px solid #ddd; background: #f8f8f8; border-radius: 4px; cursor: pointer;">Share</button>
                </div>
              </div>
              
              <div class="business-item" data-category="cafe" style="flex: 1 1 300px; padding: 15px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); background-color: #fff;">
                <h3 style="margin-top: 0; margin-bottom: 10px;">Gail's Bakery</h3>
                <div style="margin-bottom: 8px;"><span style="font-weight: bold;">Category:</span> Café</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i> 52 Green Lanes, Palmers Green, N13 6HT</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-phone" style="margin-right: 5px;"></i> 020 8882 9876</div>
                <div style="margin-bottom: 12px;">Artisan bakery and café offering freshly baked bread, pastries, and coffee. Eat in or takeaway available.</div>
                <div>
                  <a href="https://maps.google.com/?q=52+Green+Lanes,+Palmers+Green,+N13+6HT" target="_blank" rel="noopener" style="display: inline-block; padding: 6px 12px; background: linear-gradient(to bottom, #555555, #333333, #222222); color: white; text-decoration: none; border-radius: 4px; margin-right: 8px;">Directions</a>
                  <button class="share-btn" data-business="Gail's Bakery" style="padding: 6px 12px; border: 1px solid #ddd; background: #f8f8f8; border-radius: 4px; cursor: pointer;">Share</button>
                </div>
              </div>
              
              <div class="business-item" data-category="cafe" style="flex: 1 1 300px; padding: 15px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); background-color: #fff;">
                <h3 style="margin-top: 0; margin-bottom: 10px;">The Triangle Café</h3>
                <div style="margin-bottom: 8px;"><span style="font-weight: bold;">Category:</span> Café</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i> 43 Aldermans Hill, Palmers Green, N13 4PN</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-phone" style="margin-right: 5px;"></i> 020 8889 4321</div>
                <div style="margin-bottom: 12px;">Family-run café serving traditional English breakfast, lunch, and afternoon tea. Outdoor seating available.</div>
                <div>
                  <a href="https://maps.google.com/?q=43+Aldermans+Hill,+Palmers+Green,+N13+4PN" target="_blank" rel="noopener" style="display: inline-block; padding: 6px 12px; background: linear-gradient(to bottom, #555555, #333333, #222222); color: white; text-decoration: none; border-radius: 4px; margin-right: 8px;">Directions</a>
                  <button class="share-btn" data-business="The Triangle Café" style="padding: 6px 12px; border: 1px solid #ddd; background: #f8f8f8; border-radius: 4px; cursor: pointer;">Share</button>
                </div>
              </div>
              
              <div class="business-item" data-category="cafe" style="flex: 1 1 300px; padding: 15px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); background-color: #fff;">
                <h3 style="margin-top: 0; margin-bottom: 10px;">Coffee Junction</h3>
                <div style="margin-bottom: 8px;"><span style="font-weight: bold;">Category:</span> Café</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i> 17 Green Lanes, Palmers Green, N13 4TU</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-phone" style="margin-right: 5px;"></i> 020 8888 2233</div>
                <div style="margin-bottom: 12px;">Modern coffee shop with a selection of international coffee beans and brewing methods. Pastries baked in-house daily.</div>
                <div>
                  <a href="https://maps.google.com/?q=17+Green+Lanes,+Palmers+Green,+N13+4TU" target="_blank" rel="noopener" style="display: inline-block; padding: 6px 12px; background: linear-gradient(to bottom, #555555, #333333, #222222); color: white; text-decoration: none; border-radius: 4px; margin-right: 8px;">Directions</a>
                  <button class="share-btn" data-business="Coffee Junction" style="padding: 6px 12px; border: 1px solid #ddd; background: #f8f8f8; border-radius: 4px; cursor: pointer;">Share</button>
                </div>
              </div>
              
              <div class="business-item" data-category="cafe" style="flex: 1 1 300px; padding: 15px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); background-color: #fff;">
                <h3 style="margin-top: 0; margin-bottom: 10px;">The Brunch Spot</h3>
                <div style="margin-bottom: 8px;"><span style="font-weight: bold;">Category:</span> Café</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i> 62 Aldermans Hill, Palmers Green, N13 4PP</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-phone" style="margin-right: 5px;"></i> 020 8886 7766</div>
                <div style="margin-bottom: 12px;">Specializing in all-day brunch with global influences. Vegetarian and gluten-free options available. Weekend specials.</div>
                <div>
                  <a href="https://maps.google.com/?q=62+Aldermans+Hill,+Palmers+Green,+N13+4PP" target="_blank" rel="noopener" style="display: inline-block; padding: 6px 12px; background: linear-gradient(to bottom, #555555, #333333, #222222); color: white; text-decoration: none; border-radius: 4px; margin-right: 8px;">Directions</a>
                  <button class="share-btn" data-business="The Brunch Spot" style="padding: 6px 12px; border: 1px solid #ddd; background: #f8f8f8; border-radius: 4px; cursor: pointer;">Share</button>
                </div>
              </div>
              
              <div class="business-item" data-category="cafe" style="flex: 1 1 300px; padding: 15px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); background-color: #fff;">
                <h3 style="margin-top: 0; margin-bottom: 10px;">Nissi Restaurant</h3>
                <div style="margin-bottom: 8px;"><span style="font-weight: bold;">Category:</span> Cafés & Restaurants</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i> 375 Green Lanes, Palmers Green, N13 4JG</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-globe" style="margin-right: 5px;"></i> <a href="https://www.nissirestaurant.co.uk" target="_blank" rel="noopener">www.nissirestaurant.co.uk</a></div>
                <div style="margin-bottom: 12px;">Traditional Mediterranean cuisine specializing in Greek and Cypriot dishes. Family-friendly atmosphere.</div>
                <div>
                  <a href="https://maps.google.com/?q=375+Green+Lanes,+Palmers+Green,+N13+4JG" target="_blank" rel="noopener" style="display: inline-block; padding: 6px 12px; background: linear-gradient(to bottom, #555555, #333333, #222222); color: white; text-decoration: none; border-radius: 4px; margin-right: 8px;">Directions</a>
                  <button class="share-btn" data-business="Nissi Restaurant" style="padding: 6px 12px; border: 1px solid #ddd; background: #f8f8f8; border-radius: 4px; cursor: pointer;">Share</button>
                </div>
              </div>
              
              <div class="business-item" data-category="cafe" style="flex: 1 1 300px; padding: 15px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); background-color: #fff;">
                <h3 style="margin-top: 0; margin-bottom: 10px;">Teas & C's</h3>
                <div style="margin-bottom: 8px;"><span style="font-weight: bold;">Category:</span> Tea and coffee shop</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i> Unit 2, 384 Green Lanes, Palmers Green, N13 5PD</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-globe" style="margin-right: 5px;"></i> <a href="https://teasandcs.com" target="_blank" rel="noopener">teasandcs.com</a></div>
                <div style="margin-bottom: 8px;"><i class="fas fa-star" style="margin-right: 5px; color: #FFD700;"></i> 5.0 - 18 Google reviews</div>
                <div style="margin-bottom: 12px;">Cozy tea and coffee shop with excellent customer service. Known for their specialty drinks and complimentary muffins. Perfect spot for iced specials during warm weather.</div>
                <div>
                  <a href="https://maps.google.com/?q=Unit+2,+384+Green+Lanes,+Palmers+Green,+N13+5PD" target="_blank" rel="noopener" style="display: inline-block; padding: 6px 12px; background: linear-gradient(to bottom, #555555, #333333, #222222); color: white; text-decoration: none; border-radius: 4px; margin-right: 8px;">Directions</a>
                  <button class="share-btn" data-business="Teas & C's" style="padding: 6px 12px; border: 1px solid #ddd; background: #f8f8f8; border-radius: 4px; cursor: pointer;">Share</button>
                </div>
              </div>
              
              <div class="business-item" data-category="cafe" style="flex: 1 1 300px; padding: 15px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); background-color: #fff;">
                <h3 style="margin-top: 0; margin-bottom: 10px;">Starfish & Coffee</h3>
                <div style="margin-bottom: 8px;"><span style="font-weight: bold;">Category:</span> Cafés & Restaurants</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i> 92 Aldermans Hill, Palmers Green, N13 4PP</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-globe" style="margin-right: 5px;"></i> <a href="https://www.starfishandcoffee.com" target="_blank" rel="noopener">www.starfishandcoffee.com</a></div>
                <div style="margin-bottom: 12px;">Independent coffee shop with artisanal brews, homemade cakes and breakfast options in a relaxed setting.</div>
                <div>
                  <a href="https://maps.google.com/?q=92+Aldermans+Hill,+Palmers+Green,+N13+4PP" target="_blank" rel="noopener" style="display: inline-block; padding: 6px 12px; background: linear-gradient(to bottom, #555555, #333333, #222222); color: white; text-decoration: none; border-radius: 4px; margin-right: 8px;">Directions</a>
                  <button class="share-btn" data-business="Starfish & Coffee" style="padding: 6px 12px; border: 1px solid #ddd; background: #f8f8f8; border-radius: 4px; cursor: pointer;">Share</button>
                </div>
              </div>
              
              <div class="business-item" data-category="cafe" style="flex: 1 1 300px; padding: 15px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); background-color: #fff;">
                <h3 style="margin-top: 0; margin-bottom: 10px;">Aksular Restaurant</h3>
                <div style="margin-bottom: 8px;"><span style="font-weight: bold;">Category:</span> Cafés & Restaurants</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i> 342-344 Green Lanes, Palmers Green, N13 5TJ</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-globe" style="margin-right: 5px;"></i> <a href="http://www.aksular.co.uk" target="_blank" rel="noopener">www.aksular.co.uk</a></div>
                <div style="margin-bottom: 12px;">Traditional Turkish restaurant offering meze, grilled dishes and fresh bread baked in-house.</div>
                <div>
                  <a href="https://maps.google.com/?q=342-344+Green+Lanes,+Palmers+Green,+N13+5TJ" target="_blank" rel="noopener" style="display: inline-block; padding: 6px 12px; background: linear-gradient(to bottom, #555555, #333333, #222222); color: white; text-decoration: none; border-radius: 4px; margin-right: 8px;">Directions</a>
                  <button class="share-btn" data-business="Aksular Restaurant" style="padding: 6px 12px; border: 1px solid #ddd; background: #f8f8f8; border-radius: 4px; cursor: pointer;">Share</button>
                </div>
              </div>
              
              <div class="business-item" data-category="cafe" style="flex: 1 1 300px; padding: 15px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); background-color: #fff;">
                <h3 style="margin-top: 0; margin-bottom: 10px;">The Step</h3>
                <div style="margin-bottom: 8px;"><span style="font-weight: bold;">Category:</span> Cafés & Restaurants</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i> 101 Myddleton Road, Palmers Green, N22 8NE</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-globe" style="margin-right: 5px;"></i> <a href="https://www.thestep.co.uk" target="_blank" rel="noopener">www.thestep.co.uk</a></div>
                <div style="margin-bottom: 12px;">Neighborhood café by day and wine bar by night offering specialty coffee, breakfast, lunch and evening tapas.</div>
                <div>
                  <a href="https://maps.google.com/?q=101+Myddleton+Road,+Palmers+Green,+N22+8NE" target="_blank" rel="noopener" style="display: inline-block; padding: 6px 12px; background: linear-gradient(to bottom, #555555, #333333, #222222); color: white; text-decoration: none; border-radius: 4px; margin-right: 8px;">Directions</a>
                  <button class="share-btn" data-business="The Step" style="padding: 6px 12px; border: 1px solid #ddd; background: #f8f8f8; border-radius: 4px; cursor: pointer;">Share</button>
                </div>
              </div>
              
              <div class="business-item" data-category="cafe" style="flex: 1 1 300px; padding: 15px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); background-color: #fff;">
                <h3 style="margin-top: 0; margin-bottom: 10px;">Kiva Coffee House</h3>
                <div style="margin-bottom: 8px;"><span style="font-weight: bold;">Category:</span> Cafés & Restaurants</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i> 346 Green Lanes, Palmers Green, N13 5TW</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-globe" style="margin-right: 5px;"></i> <a href="https://www.kivacoffeehouse.com" target="_blank" rel="noopener">kivacoffeehouse.com</a></div>
                <div style="margin-bottom: 12px;">Independent coffee shop with a focus on ethically sourced coffee and freshly prepared food including breakfast and lunch options.</div>
                <div>
                  <a href="https://maps.google.com/?q=346+Green+Lanes,+Palmers+Green,+N13+5TW" target="_blank" rel="noopener" style="display: inline-block; padding: 6px 12px; background: linear-gradient(to bottom, #555555, #333333, #222222); color: white; text-decoration: none; border-radius: 4px; margin-right: 8px;">Directions</a>
                  <button class="share-btn" data-business="Kiva Coffee House" style="padding: 6px 12px; border: 1px solid #ddd; background: #f8f8f8; border-radius: 4px; cursor: pointer;">Share</button>
                </div>
              </div>
              
              <div class="business-item" data-category="cafe" style="flex: 1 1 300px; padding: 15px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); background-color: #fff;">
                <h3 style="margin-top: 0; margin-bottom: 10px;">Greens Kitchen</h3>
                <div style="margin-bottom: 8px;"><span style="font-weight: bold;">Category:</span> Cafés & Restaurants</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i> 349 Green Lanes, Palmers Green, N13 4JG</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-globe" style="margin-right: 5px;"></i> <a href="https://greenskitchen.uk" target="_blank" rel="noopener">greenskitchen.uk</a></div>
                <div style="margin-bottom: 12px;">Healthy food café offering nutritious all-day brunch, vegan options, and fresh juices in a bright, modern space.</div>
                <div>
                  <a href="https://maps.google.com/?q=349+Green+Lanes,+Palmers+Green,+N13+4JG" target="_blank" rel="noopener" style="display: inline-block; padding: 6px 12px; background: linear-gradient(to bottom, #555555, #333333, #222222); color: white; text-decoration: none; border-radius: 4px; margin-right: 8px;">Directions</a>
                  <button class="share-btn" data-business="Greens Kitchen" style="padding: 6px 12px; border: 1px solid #ddd; background: #f8f8f8; border-radius: 4px; cursor: pointer;">Share</button>
                </div>
              </div>
              
              <div class="business-item" data-category="cafe" style="flex: 1 1 300px; padding: 15px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); background-color: #fff;">
                <h3 style="margin-top: 0; margin-bottom: 10px;">Palmers Cafe</h3>
                <div style="margin-bottom: 8px;"><span style="font-weight: bold;">Category:</span> Cafés & Restaurants</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i> 306 Green Lanes, Palmers Green, N13 5TT</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-globe" style="margin-right: 5px;"></i> <a href="https://www.facebook.com/palmerscafe" target="_blank" rel="noopener">facebook.com/palmerscafe</a></div>
                <div style="margin-bottom: 12px;">Traditional café serving all-day English breakfast, sandwiches, and home-cooked meals in a friendly atmosphere.</div>
                <div>
                  <a href="https://maps.google.com/?q=306+Green+Lanes,+Palmers+Green,+N13+5TT" target="_blank" rel="noopener" style="display: inline-block; padding: 6px 12px; background: linear-gradient(to bottom, #555555, #333333, #222222); color: white; text-decoration: none; border-radius: 4px; margin-right: 8px;">Directions</a>
                  <button class="share-btn" data-business="Palmers Cafe" style="padding: 6px 12px; border: 1px solid #ddd; background: #f8f8f8; border-radius: 4px; cursor: pointer;">Share</button>
                </div>
              </div>

              <div class="business-item" data-category="cafe" style="flex: 1 1 300px; padding: 15px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); background-color: #fff;">
               <h3 style="margin-top: 0; margin-bottom: 10px;">Stage</h3>
               <div style="margin-bottom: 8px;"><span style="font-weight: bold;">Category:</span> Café</div>
               <div style="margin-bottom: 8px;"><i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i> 315-317 Green Lanes, London N13 4YB</div>
               <div style="margin-bottom: 12px;">A new addition to Palmers Green's café scene. Visit for coffee, snacks, and a welcoming atmosphere.</div>
              <div>
                  <a href="https://maps.google.com/?q=315-317+Green+Lanes,+London+N13+4YB" target="_blank" rel="noopener" style="display: inline-block; padding: 6px 12px; background: linear-gradient(to bottom, #555555, #333333, #222222); color: white; text-decoration: none; border-radius: 4px; margin-right: 8px;">Directions</a>
                  <button class="share-btn" data-business="Stage" style="padding: 6px 12px; border: 1px solid #ddd; background: #f8f8f8; border-radius: 4px; cursor: pointer;">Share</button>
                </div>
              </div>
              
              <div class="business-item" data-category="cafe" style="flex: 1 1 300px; padding: 15px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); background-color: #fff;">
                <h3 style="margin-top: 0; margin-bottom: 10px;">Parkside Cafe</h3>
                <div style="margin-bottom: 8px;"><span style="font-weight: bold;">Category:</span> Cafés & Restaurants</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i> Broomfield Park, Aldermans Hill, N13 4RB</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-globe" style="margin-right: 5px;"></i> <a href="https://www.facebook.com/parksidecafepalmersgreen" target="_blank" rel="noopener">facebook.com/parksidecafepalmersgreen</a></div>
                <div style="margin-bottom: 12px;">Park café offering light refreshments, snacks and ice cream with outdoor seating overlooking Broomfield Park.</div>
                <div>
                  <a href="https://maps.google.com/?q=Broomfield+Park,+Aldermans+Hill,+Palmers+Green,+N13+4RB" target="_blank" rel="noopener" style="display: inline-block; padding: 6px 12px; background: linear-gradient(to bottom, #555555, #333333, #222222); color: white; text-decoration: none; border-radius: 4px; margin-right: 8px;">Directions</a>
                  <button class="share-btn" data-business="Parkside Cafe" style="padding: 6px 12px; border: 1px solid #ddd; background: #f8f8f8; border-radius: 4px; cursor: pointer;">Share</button>
                </div>
              </div>

              <div class="business-item" data-category="cafe" style="flex: 1 1 300px; padding: 15px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); background-color: #fff;">
                <h3 style="margin-top: 0; margin-bottom: 10px;">La Pasta</h3>
                <div style="margin-bottom: 8px;"><span style="font-weight: bold;">Category:</span> Cafés & Restaurants</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i> 56 Green Lanes, Palmers Green, N13 6HT</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-phone" style="margin-right: 5px;"></i> 020 8889 6789</div>
                <div style="margin-bottom: 12px;">Authentic Italian restaurant serving pasta dishes, wood-fired pizzas, and traditional Italian desserts.</div>
                <div>
                  <a href="https://maps.google.com/?q=56+Green+Lanes,+Palmers+Green,+N13+6HT" target="_blank" rel="noopener" style="display: inline-block; padding: 6px 12px; background: linear-gradient(to bottom, #555555, #333333, #222222); color: white; text-decoration: none; border-radius: 4px; margin-right: 8px;">Directions</a>
                  <button class="share-btn" data-business="La Pasta" style="padding: 6px 12px; border: 1px solid #ddd; background: #f8f8f8; border-radius: 4px; cursor: pointer;">Share</button>
                </div>
              </div>
              
              <div class="business-item" data-category="cafe" style="flex: 1 1 300px; padding: 15px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); background-color: #fff;">
                <h3 style="margin-top: 0; margin-bottom: 10px;">Green Lanes Grill</h3>
                <div style="margin-bottom: 8px;"><span style="font-weight: bold;">Category:</span> Cafés & Restaurants</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i> 78 Green Lanes, Palmers Green, N13 6HU</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-phone" style="margin-right: 5px;"></i> 020 8886 4455</div>
                <div style="margin-bottom: 12px;">Steakhouse specializing in grilled meats, burgers, and a wide selection of craft beers. Live sports shown.</div>
                <div>
                  <a href="https://maps.google.com/?q=78+Green+Lanes,+Palmers+Green,+N13+6HU" target="_blank" rel="noopener" style="display: inline-block; padding: 6px 12px; background: linear-gradient(to bottom, #555555, #333333, #222222); color: white; text-decoration: none; border-radius: 4px; margin-right: 8px;">Directions</a>
                  <button class="share-btn" data-business="Green Lanes Grill" style="padding: 6px 12px; border: 1px solid #ddd; background: #f8f8f8; border-radius: 4px; cursor: pointer;">Share</button>
                </div>
              </div>
              
              <div class="business-item" data-category="cafe" style="flex: 1 1 300px; padding: 15px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); background-color: #fff;">
                <h3 style="margin-top: 0; margin-bottom: 10px;">Kervan Sofrasi</h3>
                <div style="margin-bottom: 8px;"><span style="font-weight: bold;">Category:</span> Cafés & Restaurants</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i> 92 Green Lanes, Palmers Green, N13 5UP</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-phone" style="margin-right: 5px;"></i> 020 8882 3713</div>
                <div style="margin-bottom: 12px;">Turkish restaurant known for its authentic kebabs, mezze, and Turkish grills. Family-friendly atmosphere.</div>
                <div>
                  <a href="https://maps.google.com/?q=92+Green+Lanes,+Palmers+Green,+N13+5UP" target="_blank" rel="noopener" style="display: inline-block; padding: 6px 12px; background: linear-gradient(to bottom, #555555, #333333, #222222); color: white; text-decoration: none; border-radius: 4px; margin-right: 8px;">Directions</a>
                  <button class="share-btn" data-business="Kervan Sofrasi" style="padding: 6px 12px; border: 1px solid #ddd; background: #f8f8f8; border-radius: 4px; cursor: pointer;">Share</button>
                </div>
              </div>
              
              <div class="business-item" data-category="cafe" style="flex: 1 1 300px; padding: 15px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); background-color: #fff;">
                <h3 style="margin-top: 0; margin-bottom: 10px;">Samdan Mangal</h3>
                <div style="margin-bottom: 8px;"><span style="font-weight: bold;">Category:</span> Cafés & Restaurants</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i> 112 Green Lanes, Palmers Green, N13 5UR</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-phone" style="margin-right: 5px;"></i> 020 8882 1884</div>
                <div style="margin-bottom: 12px;">Charcoal grill restaurant offering quality meat, fish and vegetarian options with traditional Turkish recipes.</div>
                <div>
                  <a href="https://maps.google.com/?q=112+Green+Lanes,+Palmers+Green,+N13+5UR" target="_blank" rel="noopener" style="display: inline-block; padding: 6px 12px; background: linear-gradient(to bottom, #555555, #333333, #222222); color: white; text-decoration: none; border-radius: 4px; margin-right: 8px;">Directions</a>
                  <button class="share-btn" data-business="Samdan Mangal" style="padding: 6px 12px; border: 1px solid #ddd; background: #f8f8f8; border-radius: 4px; cursor: pointer;">Share</button>
                </div>
              </div>
              
              <div class="business-item" data-category="cafe" style="flex: 1 1 300px; padding: 15px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); background-color: #fff;">
                <h3 style="margin-top: 0; margin-bottom: 10px;">The Winchmore Pub</h3>
                <div style="margin-bottom: 8px;"><span style="font-weight: bold;">Category:</span> Cafés & Restaurants</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i> 235 Winchmore Hill Road, N21 1QA</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-phone" style="margin-right: 5px;"></i> 020 8360 7072</div>
                <div style="margin-bottom: 12px;">Gastropub with beer garden serving quality pub food, rotating craft beers, and Sunday roasts.</div>
                <div>
                  <a href="https://maps.google.com/?q=235+Winchmore+Hill+Road,+N21+1QA" target="_blank" rel="noopener" style="display: inline-block; padding: 6px 12px; background: linear-gradient(to bottom, #555555, #333333, #222222); color: white; text-decoration: none; border-radius: 4px; margin-right: 8px;">Directions</a>
                  <button class="share-btn" data-business="The Winchmore Pub" style="padding: 6px 12px; border: 1px solid #ddd; background: #f8f8f8; border-radius: 4px; cursor: pointer;">Share</button>
                </div>
              </div>
              
              <div class="business-item" data-category="cafe" style="flex: 1 1 300px; padding: 15px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); background-color: #fff;">
                <h3 style="margin-top: 0; margin-bottom: 10px;">Spice Garden</h3>
                <div style="margin-bottom: 8px;"><span style="font-weight: bold;">Category:</span> Cafés & Restaurants</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i> 182 Green Lanes, Palmers Green, N13 5UE</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-phone" style="margin-right: 5px;"></i> 020 8886 3347</div>
                <div style="margin-bottom: 12px;">Authentic Indian cuisine featuring regional specialties, tandoori dishes, and extensive vegetarian menu.</div>
                <div>
                  <a href="https://maps.google.com/?q=182+Green+Lanes,+Palmers+Green,+N13+5UE" target="_blank" rel="noopener" style="display: inline-block; padding: 6px 12px; background: linear-gradient(to bottom, #555555, #333333, #222222); color: white; text-decoration: none; border-radius: 4px; margin-right: 8px;">Directions</a>
                  <button class="share-btn" data-business="Spice Garden" style="padding: 6px 12px; border: 1px solid #ddd; background: #f8f8f8; border-radius: 4px; cursor: pointer;">Share</button>
                </div>
              </div>
              
              <div class="business-item" data-category="cafe" style="flex: 1 1 300px; padding: 15px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); background-color: #fff;">
                <h3 style="margin-top: 0; margin-bottom: 10px;">Mei's Chinese Restaurant</h3>
                <div style="margin-bottom: 8px;"><span style="font-weight: bold;">Category:</span> Cafés & Restaurants</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i> 97 Aldermans Hill, Palmers Green, N13 4PP</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-phone" style="margin-right: 5px;"></i> 020 8882 5656</div>
                <div style="margin-bottom: 12px;">Family-run restaurant serving authentic Chinese cuisine with specialties from various regions of China.</div>
                <div>
                  <a href="https://maps.google.com/?q=97+Aldermans+Hill,+Palmers+Green,+N13+4PP" target="_blank" rel="noopener" style="display: inline-block; padding: 6px 12px; background: linear-gradient(to bottom, #555555, #333333, #222222); color: white; text-decoration: none; border-radius: 4px; margin-right: 8px;">Directions</a>
                  <button class="share-btn" data-business="Mei's Chinese Restaurant" style="padding: 6px 12px; border: 1px solid #ddd; background: #f8f8f8; border-radius: 4px; cursor: pointer;">Share</button>
                </div>
              </div>
            </div>
            
            <!-- Retail Section -->
            <h2 style="margin-top: 30px; border-bottom: 1px solid #eee; padding-bottom: 10px;">Retail</h2>
            
            <div class="business-listings" style="display: flex; flex-wrap: wrap; gap: 20px; margin-top: 15px;">
              <div class="business-item" data-category="retail" style="flex: 1 1 300px; padding: 15px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); background-color: #fff;">
                <h3 style="margin-top: 0; margin-bottom: 10px;">Green Lanes Books</h3>
                <div style="margin-bottom: 8px;"><span style="font-weight: bold;">Category:</span> Retail</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i> 23 Green Lanes, Palmers Green, N13 4TT</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-phone" style="margin-right: 5px;"></i> 020 8889 1234</div>
                <div style="margin-bottom: 12px;">Independent bookstore offering a wide selection of fiction, non-fiction, and children's books. Regular author events and book clubs.</div>
                <div>
                  <a href="https://maps.google.com/?q=23+Green+Lanes,+Palmers+Green,+N13+4TT" target="_blank" rel="noopener" style="display: inline-block; padding: 6px 12px; background: linear-gradient(to bottom, #555555, #333333, #222222); color: white; text-decoration: none; border-radius: 4px; margin-right: 8px;">Directions</a>
                  <button class="share-btn" data-business="Green Lanes Books" style="padding: 6px 12px; border: 1px solid #ddd; background: #f8f8f8; border-radius: 4px; cursor: pointer;">Share</button>
                </div>
              </div>
              
              <div class="business-item" data-category="retail" style="flex: 1 1 300px; padding: 15px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); background-color: #fff;">
                <h3 style="margin-top: 0; margin-bottom: 10px;">Palmers Green Jewellers</h3>
                <div style="margin-bottom: 8px;"><span style="font-weight: bold;">Category:</span> Retail</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i> 382 Green Lanes, Palmers Green, N13 5PD</div>
                <div style="margin-bottom: 12px;">Jewelry store offering a range of gold, silver, and gemstone pieces. Custom designs and jewelry repair services available.</div>
                <div>
                  <a href="https://maps.google.com/?q=382+Green+Lanes,+Palmers+Green,+N13+5PD" target="_blank" rel="noopener" style="display: inline-block; padding: 6px 12px; background: linear-gradient(to bottom, #555555, #333333, #222222); color: white; text-decoration: none; border-radius: 4px; margin-right: 8px;">Directions</a>
                  <button class="share-btn" data-business="Palmers Green Jewellers" style="padding: 6px 12px; border: 1px solid #ddd; background: #f8f8f8; border-radius: 4px; cursor: pointer;">Share</button>
                </div>
              </div>
              
              <div class="business-item" data-category="retail" style="flex: 1 1 300px; padding: 15px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); background-color: #fff;">
                <h3 style="margin-top: 0; margin-bottom: 10px;">Daisy's Florist</h3>
                <div style="margin-bottom: 8px;"><span style="font-weight: bold;">Category:</span> Retail</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i> 317 Green Lanes, Palmers Green, N13 4JG</div>
                <div style="margin-bottom: 12px;">Boutique florist offering fresh flower arrangements, bouquets, and plants. Wedding and event flowers a specialty.</div>
                <div>
                  <a href="https://maps.google.com/?q=317+Green+Lanes,+Palmers+Green,+N13+4JG" target="_blank" rel="noopener" style="display: inline-block; padding: 6px 12px; background: linear-gradient(to bottom, #555555, #333333, #222222); color: white; text-decoration: none; border-radius: 4px; margin-right: 8px;">Directions</a>
                  <button class="share-btn" data-business="Daisy's Florist" style="padding: 6px 12px; border: 1px solid #ddd; background: #f8f8f8; border-radius: 4px; cursor: pointer;">Share</button>
                </div>
              </div>
              
              <div class="business-item" data-category="retail" style="flex: 1 1 300px; padding: 15px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); background-color: #fff;">
                <h3 style="margin-top: 0; margin-bottom: 10px;">Craft & Hobby Shop</h3>
                <div style="margin-bottom: 8px;"><span style="font-weight: bold;">Category:</span> Retail</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i> 29 Aldermans Hill, Palmers Green, N13 4PN</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-phone" style="margin-right: 5px;"></i> 020 8889 2211</div>
                <div style="margin-bottom: 12px;">Specialist craft shop stocking art supplies, sewing materials, and hobby kits with regular workshops.</div>
                <div>
                  <a href="https://maps.google.com/?q=29+Aldermans+Hill,+Palmers+Green,+N13+4PN" target="_blank" rel="noopener" style="display: inline-block; padding: 6px 12px; background: linear-gradient(to bottom, #555555, #333333, #222222); color: white; text-decoration: none; border-radius: 4px; margin-right: 8px;">Directions</a>
                  <button class="share-btn" data-business="Craft & Hobby Shop" style="padding: 6px 12px; border: 1px solid #ddd; background: #f8f8f8; border-radius: 4px; cursor: pointer;">Share</button>
                </div>
              </div>
            </div>
            
            <!-- Delis & Specialty Food Section -->
            <h2 style="margin-top: 30px; border-bottom: 1px solid #eee; padding-bottom: 10px;">Delis & Specialty Food</h2>
            
            <div class="business-listings" style="display: flex; flex-wrap: wrap; gap: 20px; margin-top: 15px;">
              <div class="business-item" data-category="deli" style="flex: 1 1 300px; padding: 15px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); background-color: #fff;">
                <h3 style="margin-top: 0; margin-bottom: 10px;">Yasar Halim</h3>
                <div style="margin-bottom: 8px;"><span style="font-weight: bold;">Category:</span> Delis & Specialty Food</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i> 2A-2B Hedge Lane, Palmers Green, N13 5SH</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-globe" style="margin-right: 5px;"></i> <a href="https://www.yasarhalim.com" target="_blank" rel="noopener">yasarhalim.com</a></div>
                <div style="margin-bottom: 12px;">Mediterranean food hall with bakery, deli counter, fresh produce and specialty foods from Cyprus, Turkey and the Middle East.</div>
                <div>
                  <a href="https://maps.google.com/?q=2A-2B+Hedge+Lane,+Palmers+Green,+N13+5SH" target="_blank" rel="noopener" style="display: inline-block; padding: 6px 12px; background: linear-gradient(to bottom, #555555, #333333, #222222); color: white; text-decoration: none; border-radius: 4px; margin-right: 8px;">Directions</a>
                  <button class="share-btn" data-business="Yasar Halim" style="padding: 6px 12px; border: 1px solid #ddd; background: #f8f8f8; border-radius: 4px; cursor: pointer;">Share</button>
                </div>
              </div>
              
              <div class="business-item" data-category="deli" style="flex: 1 1 300px; padding: 15px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); background-color: #fff;">
                <h3 style="margin-top: 0; margin-bottom: 10px;">Sweet Life Greek Patisserie</h3>
                <div style="margin-bottom: 8px;"><span style="font-weight: bold;">Category:</span> Bakery</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i> 68 Aldermans Hill, London N13 4PP</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-phone" style="margin-right: 5px;"></i> 020 8882 6039</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-globe" style="margin-right: 5px;"></i> <a href="https://sweetlifepatisserie.co.uk" target="_blank" rel="noopener">sweetlifepatisserie.co.uk</a></div>
                <div style="margin-bottom: 8px;"><i class="fas fa-star" style="margin-right: 5px; color: #FFD700;"></i> 4.1 - 160 Google reviews</div>
                <div style="margin-bottom: 12px;">Authentic Greek bakery offering traditional pastries, cakes, and coffee. Known for its welcoming atmosphere and outdoor seating. Opens 6am Sun.</div>
                <div>
                  <a href="https://maps.google.com/?q=68+Aldermans+Hill,+London+N13+4PP" target="_blank" rel="noopener" style="display: inline-block; padding: 6px 12px; background: linear-gradient(to bottom, #555555, #333333, #222222); color: white; text-decoration: none; border-radius: 4px; margin-right: 8px;">Directions</a>
                  <button class="share-btn" data-business="Sweet Life Greek Patisserie" style="padding: 6px 12px; border: 1px solid #ddd; background: #f8f8f8; border-radius: 4px; cursor: pointer;">Share</button>
                </div>
              </div>
              
              <div class="business-item" data-category="deli" style="flex: 1 1 300px; padding: 15px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); background-color: #fff;">
                <h3 style="margin-top: 0; margin-bottom: 10px;">Andreas Michli & Sons</h3>
                <div style="margin-bottom: 8px;"><span style="font-weight: bold;">Category:</span> Delis & Specialty Food</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i> 20-22 Green Lanes, Palmers Green, N13 6HT</div>
                <div style="margin-bottom: 12px;">Family-run Greek deli offering olives, feta, halloumi, olive oil and authentic Greek products.</div>
                <div>
                  <a href="https://maps.google.com/?q=20-22+Green+Lanes,+Palmers+Green,+N13+6HT" target="_blank" rel="noopener" style="display: inline-block; padding: 6px 12px; background: linear-gradient(to bottom, #555555, #333333, #222222); color: white; text-decoration: none; border-radius: 4px; margin-right: 8px;">Directions</a>
                  <button class="share-btn" data-business="Andreas Michli & Sons" style="padding: 6px 12px; border: 1px solid #ddd; background: #f8f8f8; border-radius: 4px; cursor: pointer;">Share</button>
                </div>
              </div>
              
              <div class="business-item" data-category="deli" style="flex: 1 1 300px; padding: 15px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); background-color: #fff;">
                <h3 style="margin-top: 0; margin-bottom: 10px;">WaridWine World Foods</h3>
                <div style="margin-bottom: 8px;"><span style="font-weight: bold;">Category:</span> Delis & Specialty Food</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i> 472 Green Lanes, Palmers Green, N13 5PA</div>
                <div style="margin-bottom: 12px;">International grocery store with products from around the world, exotic fruits, vegetables and specialty ingredients.</div>
                <div>
                  <a href="https://maps.google.com/?q=472+Green+Lanes,+Palmers+Green,+N13+5PA" target="_blank" rel="noopener" style="display: inline-block; padding: 6px 12px; background: linear-gradient(to bottom, #555555, #333333, #222222); color: white; text-decoration: none; border-radius: 4px; margin-right: 8px;">Directions</a>
                  <button class="share-btn" data-business="WaridWine World Foods" style="padding: 6px 12px; border: 1px solid #ddd; background: #f8f8f8; border-radius: 4px; cursor: pointer;">Share</button>
                </div>
              </div>
              
              <div class="business-item" data-category="deli" style="flex: 1 1 300px; padding: 15px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); background-color: #fff;">
                <h3 style="margin-top: 0; margin-bottom: 10px;">Fruit Garden</h3>
                <div style="margin-bottom: 8px;"><span style="font-weight: bold;">Category:</span> Delis & Specialty Food</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i> 428 Green Lanes, Palmers Green, N13 5XG</div>
                <div style="margin-bottom: 12px;">Fresh fruit and vegetable shop offering seasonal produce, exotic fruits and fresh juices.</div>
                <div>
                  <a href="https://maps.google.com/?q=428+Green+Lanes,+Palmers+Green,+N13+5XG" target="_blank" rel="noopener" style="display: inline-block; padding: 6px 12px; background: linear-gradient(to bottom, #555555, #333333, #222222); color: white; text-decoration: none; border-radius: 4px; margin-right: 8px;">Directions</a>
                  <button class="share-btn" data-business="Fruit Garden" style="padding: 6px 12px; border: 1px solid #ddd; background: #f8f8f8; border-radius: 4px; cursor: pointer;">Share</button>
                </div>
              </div>
              
              <div class="business-item" data-category="deli" style="flex: 1 1 300px; padding: 15px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); background-color: #fff;">
                <h3 style="margin-top: 0; margin-bottom: 10px;">Lefteris Deli</h3>
                <div style="margin-bottom: 8px;"><span style="font-weight: bold;">Category:</span> Delis & Specialty Food</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i> 405 Green Lanes, Palmers Green, N13 4JG</div>
                <div style="margin-bottom: 12px;">Traditional Greek delicatessen offering olives, cheese, yogurt, pastries and ready-to-eat meals.</div>
                <div>
                  <a href="https://maps.google.com/?q=405+Green+Lanes,+Palmers+Green,+N13+4JG" target="_blank" rel="noopener" style="display: inline-block; padding: 6px 12px; background: linear-gradient(to bottom, #555555, #333333, #222222); color: white; text-decoration: none; border-radius: 4px; margin-right: 8px;">Directions</a>
                  <button class="share-btn" data-business="Lefteris Deli" style="padding: 6px 12px; border: 1px solid #ddd; background: #f8f8f8; border-radius: 4px; cursor: pointer;">Share</button>
                </div>
              </div>
              
              <div class="business-item" data-category="deli" style="flex: 1 1 300px; padding: 15px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); background-color: #fff;">
                <h3 style="margin-top: 0; margin-bottom: 10px;">Italia Uno</h3>
                <div style="margin-bottom: 8px;"><span style="font-weight: bold;">Category:</span> Delis & Specialty Food</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i> 18 Broadway Parade, Green Lanes, N13 6PQ</div>
                <div style="margin-bottom: 12px;">Italian delicatessen offering imported cheeses, cured meats, pasta, olive oils and authentic Italian specialties.</div>
                <div>
                  <a href="https://maps.google.com/?q=18+Broadway+Parade,+Green+Lanes,+Palmers+Green,+N13+6PQ" target="_blank" rel="noopener" style="display: inline-block; padding: 6px 12px; background: linear-gradient(to bottom, #555555, #333333, #222222); color: white; text-decoration: none; border-radius: 4px; margin-right: 8px;">Directions</a>
                  <button class="share-btn" data-business="Italia Uno" style="padding: 6px 12px; border: 1px solid #ddd; background: #f8f8f8; border-radius: 4px; cursor: pointer;">Share</button>
                </div>
              </div>
              
              <div class="business-item" data-category="deli" style="flex: 1 1 300px; padding: 15px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); background-color: #fff;">
                <h3 style="margin-top: 0; margin-bottom: 10px;">Holtwhites Bakery</h3>
                <div style="margin-bottom: 8px;"><span style="font-weight: bold;">Category:</span> Delis & Specialty Food</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i> 66 Aldermans Hill, Palmers Green, N13 4PP</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-globe" style="margin-right: 5px;"></i> <a href="https://www.holtwhitesbakery.co.uk" target="_blank" rel="noopener">holtwhitesbakery.co.uk</a></div>
                <div style="margin-bottom: 12px;">Award-winning artisan bakery offering sourdough breads, pastries, cakes and sandwiches made with local ingredients.</div>
                <div>
                  <a href="https://maps.google.com/?q=66+Aldermans+Hill,+Palmers+Green,+N13+4PP" target="_blank" rel="noopener" style="display: inline-block; padding: 6px 12px; background: linear-gradient(to bottom, #555555, #333333, #222222); color: white; text-decoration: none; border-radius: 4px; margin-right: 8px;">Directions</a>
                  <button class="share-btn" data-business="Holtwhites Bakery" style="padding: 6px 12px; border: 1px solid #ddd; background: #f8f8f8; border-radius: 4px; cursor: pointer;">Share</button>
                </div>
              </div>
            </div>
            
            <!-- Professional Services Section -->
            <h2 style="margin-top: 30px; border-bottom: 1px solid #eee; padding-bottom: 10px;">Professional Services</h2>
            
            <div class="business-listings" style="display: flex; flex-wrap: wrap; gap: 20px; margin-top: 15px;">
              <div class="business-item" data-category="service" style="flex: 1 1 300px; padding: 15px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); background-color: #fff;">
                <h3 style="margin-top: 0; margin-bottom: 10px;">Peter Michael Estates and Lettings</h3>
                <div class="directory-sponsor">Halloween 2026 Main Sponsor &amp; Prize Donor</div>
                <div style="margin-bottom: 8px;"><span style="font-weight: bold;">Category:</span> Estate Agents</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i> Palmers Green, London N13</div>
                <div style="margin-bottom: 12px;">Main sponsor of Halloween 2026 Trick or Treat on the High Street. Pumpkin Hunt entry forms can be picked up and handed in here by 4:15 PM on 31st October 2026. Prize draw at 4:30 PM. Donating the Nintendo Switch Lite and Mario Kart 8 Deluxe grand prize.</div>
                <div>
                  <a href="https://maps.google.com/?q=Peter+Michael+Estates+and+Lettings,+Palmers+Green" target="_blank" rel="noopener" style="display: inline-block; padding: 6px 12px; background: linear-gradient(to bottom, #555555, #333333, #222222); color: white; text-decoration: none; border-radius: 4px; margin-right: 8px;">Directions</a>
                  <button class="share-btn" data-business="Peter Michael Estates and Lettings" style="padding: 6px 12px; border: 1px solid #ddd; background: #f8f8f8; border-radius: 4px; cursor: pointer;">Share</button>
                </div>
              </div>

              <div class="business-item" data-category="service" style="flex: 1 1 300px; padding: 15px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); background-color: #fff;">
                <h3 style="margin-top: 0; margin-bottom: 10px;">Anthony Webb Estate Agents</h3>
                <div class="directory-offer">Free, no-obligation property valuations</div>
                <div style="margin-bottom: 8px;"><span style="font-weight: bold;">Category:</span> Estate Agents</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i> Palmers Green</div>
                <div style="margin-bottom: 12px;">Local estate agents offering free, no-obligation property valuations in Palmers Green.</div>
                <div>
                  <a href="https://maps.google.com/?q=Anthony+Webb+Estate+Agents,+Palmers+Green" target="_blank" rel="noopener" style="display: inline-block; padding: 6px 12px; background: linear-gradient(to bottom, #555555, #333333, #222222); color: white; text-decoration: none; border-radius: 4px; margin-right: 8px;">Directions</a>
                  <button class="share-btn" data-business="Anthony Webb Estate Agents" style="padding: 6px 12px; border: 1px solid #ddd; background: #f8f8f8; border-radius: 4px; cursor: pointer;">Share</button>
                </div>
              </div>

              <div class="business-item" data-category="service" style="flex: 1 1 300px; padding: 15px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); background-color: #fff;">
                <h3 style="margin-top: 0; margin-bottom: 10px;">Bennett Walden</h3>
                <div style="margin-bottom: 8px;"><span style="font-weight: bold;">Category:</span> Estate Agents</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i> 54 Aldermans Hill, London N13 4PP</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-phone" style="margin-right: 5px;"></i> <a href="tel:+442088861777">020 8886 1777</a></div>
                <div style="margin-bottom: 8px;"><i class="fas fa-globe" style="margin-right: 5px;"></i> <a href="https://www.bennett-walden.co.uk" target="_blank" rel="noopener noreferrer">www.bennett-walden.co.uk</a></div>
                <div style="margin-bottom: 12px;">Residential sales, lettings and property management. Established 1933.</div>
                <div>
                  <a href="https://maps.google.com/?q=54+Aldermans+Hill,+London+N13+4PP" target="_blank" rel="noopener" style="display: inline-block; padding: 6px 12px; background: linear-gradient(to bottom, #555555, #333333, #222222); color: white; text-decoration: none; border-radius: 4px; margin-right: 8px;">Directions</a>
                  <button class="share-btn" data-business="Bennett Walden" style="padding: 6px 12px; border: 1px solid #ddd; background: #f8f8f8; border-radius: 4px; cursor: pointer;">Share</button>
                </div>
              </div>

              <div class="business-item" data-category="service" style="flex: 1 1 300px; padding: 15px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); background-color: #fff;">
                <h3 style="margin-top: 0; margin-bottom: 10px;">PG Tech Solutions</h3>
                <div style="margin-bottom: 8px;"><span style="font-weight: bold;">Category:</span> Services</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i> 89 Green Lanes, Palmers Green, N13 4TS</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-phone" style="margin-right: 5px;"></i> 020 8882 8765</div>
                <div style="margin-bottom: 12px;">IT support and repair services for individuals and businesses. Computer sales and custom builds.</div>
                <div>
                  <a href="https://maps.google.com/?q=89+Green+Lanes,+Palmers+Green,+N13+4TS" target="_blank" rel="noopener" style="display: inline-block; padding: 6px 12px; background: linear-gradient(to bottom, #555555, #333333, #222222); color: white; text-decoration: none; border-radius: 4px; margin-right: 8px;">Directions</a>
                  <button class="share-btn" data-business="PG Tech Solutions" style="padding: 6px 12px; border: 1px solid #ddd; background: #f8f8f8; border-radius: 4px; cursor: pointer;">Share</button>
                </div>
              </div>
              
              <div class="business-item" data-category="service" style="flex: 1 1 300px; padding: 15px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); background-color: #fff;">
                <h3 style="margin-top: 0; margin-bottom: 10px;">Palmers Green Accounting</h3>
                <div style="margin-bottom: 8px;"><span style="font-weight: bold;">Category:</span> Services</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i> 17 Aldermans Hill, Palmers Green, N13 4PP</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-phone" style="margin-right: 5px;"></i> 020 8886 1111</div>
                <div style="margin-bottom: 12px;">Professional accounting services for small businesses and individuals. Tax planning and financial advice.</div>
                <div>
                  <a href="https://maps.google.com/?q=17+Aldermans+Hill,+Palmers+Green,+N13+4PP" target="_blank" rel="noopener" style="display: inline-block; padding: 6px 12px; background: linear-gradient(to bottom, #555555, #333333, #222222); color: white; text-decoration: none; border-radius: 4px; margin-right: 8px;">Directions</a>
                  <button class="share-btn" data-business="Palmers Green Accounting" style="padding: 6px 12px; border: 1px solid #ddd; background: #f8f8f8; border-radius: 4px; cursor: pointer;">Share</button>
                </div>
              </div>
              
              <div class="business-item" data-category="service" style="flex: 1 1 300px; padding: 15px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); background-color: #fff;">
                <h3 style="margin-top: 0; margin-bottom: 10px;">Green Lanes Legal</h3>
                <div style="margin-bottom: 8px;"><span style="font-weight: bold;">Category:</span> Services</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i> 126 Green Lanes, Palmers Green, N13 5UD</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-phone" style="margin-right: 5px;"></i> 020 8889 3434</div>
                <div style="margin-bottom: 12px;">Full-service law firm specializing in family law, property transactions, and business contracts.</div>
                <div>
                  <a href="https://maps.google.com/?q=126+Green+Lanes,+Palmers+Green,+N13+5UD" target="_blank" rel="noopener" style="display: inline-block; padding: 6px 12px; background: linear-gradient(to bottom, #555555, #333333, #222222); color: white; text-decoration: none; border-radius: 4px; margin-right: 8px;">Directions</a>
                  <button class="share-btn" data-business="Green Lanes Legal" style="padding: 6px 12px; border: 1px solid #ddd; background: #f8f8f8; border-radius: 4px; cursor: pointer;">Share</button>
                </div>
              </div>
              
              <div class="business-item" data-category="service" style="flex: 1 1 300px; padding: 15px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); background-color: #fff;">
                <h3 style="margin-top: 0; margin-bottom: 10px;">Palmers Green Estate Agents</h3>
                <div style="margin-bottom: 8px;"><span style="font-weight: bold;">Category:</span> Services</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i> 301 Green Lanes, Palmers Green, N13 4XS</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-phone" style="margin-right: 5px;"></i> 020 8882 7575</div>
                <div style="margin-bottom: 12px;">Local property experts offering sales, lettings, and property management services across Palmers Green.</div>
                <div>
                  <a href="https://maps.google.com/?q=301+Green+Lanes,+Palmers+Green,+N13+4XS" target="_blank" rel="noopener" style="display: inline-block; padding: 6px 12px; background: linear-gradient(to bottom, #555555, #333333, #222222); color: white; text-decoration: none; border-radius: 4px; margin-right: 8px;">Directions</a>
                  <button class="share-btn" data-business="Palmers Green Estate Agents" style="padding: 6px 12px; border: 1px solid #ddd; background: #f8f8f8; border-radius: 4px; cursor: pointer;">Share</button>
                </div>
              </div>
              
              <div class="business-item" data-category="service" style="flex: 1 1 300px; padding: 15px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); background-color: #fff;">
                <h3 style="margin-top: 0; margin-bottom: 10px;">Palmers Green Auto Services</h3>
                <div style="margin-bottom: 8px;"><span style="font-weight: bold;">Category:</span> Services</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i> 412 Green Lanes, Palmers Green, N13 5XG</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-phone" style="margin-right: 5px;"></i> 020 8888 9999</div>
                <div style="margin-bottom: 12px;">Family-run garage offering car repairs, MOTs, servicing, and diagnostics with free local pickup.</div>
                <div>
                  <a href="https://maps.google.com/?q=412+Green+Lanes,+Palmers+Green,+N13+5XG" target="_blank" rel="noopener" style="display: inline-block; padding: 6px 12px; background: linear-gradient(to bottom, #555555, #333333, #222222); color: white; text-decoration: none; border-radius: 4px; margin-right: 8px;">Directions</a>
                  <button class="share-btn" data-business="Palmers Green Auto Services" style="padding: 6px 12px; border: 1px solid #ddd; background: #f8f8f8; border-radius: 4px; cursor: pointer;">Share</button>
                </div>
              </div>

              <div class="business-item" data-category="service" style="flex: 1 1 300px; padding: 15px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); background-color: #fff;">
                <h3 style="margin-top: 0; margin-bottom: 10px;">UrNextEvent</h3>
                <div style="margin-bottom: 8px;"><span style="font-weight: bold;">Category:</span> Event tickets</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-globe" style="margin-right: 5px;"></i> <a href="https://urnextevent.com/" target="_blank" rel="noopener noreferrer">urnextevent.com</a></div>
                <div style="margin-bottom: 8px;"><i class="fas fa-envelope" style="margin-right: 5px;"></i> <a href="mailto:support@urnextevent.com">support@urnextevent.com</a></div>
                <div style="margin-bottom: 12px;">Account-free event tickets with a flat fee. No passwords and no hidden charges — list or find your next event.</div>
                <div>
                  <a href="https://urnextevent.com/" target="_blank" rel="noopener noreferrer" style="display: inline-block; padding: 6px 12px; background: linear-gradient(to bottom, #555555, #333333, #222222); color: white; text-decoration: none; border-radius: 4px; margin-right: 8px;">Visit site</a>
                  <button class="share-btn" data-business="UrNextEvent" style="padding: 6px 12px; border: 1px solid #ddd; background: #f8f8f8; border-radius: 4px; cursor: pointer;">Share</button>
                </div>
              </div>

              <div class="business-item" data-category="service" style="flex: 1 1 300px; padding: 15px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); background-color: #fff;">
                <h3 style="margin-top: 0; margin-bottom: 10px;">SmartSynk</h3>
                <div style="margin-bottom: 8px;"><span style="font-weight: bold;">Category:</span> Business software</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-globe" style="margin-right: 5px;"></i> <a href="https://www.smartsynk.net/" target="_blank" rel="noopener noreferrer">smartsynk.net</a></div>
                <div style="margin-bottom: 8px;"><i class="fas fa-envelope" style="margin-right: 5px;"></i> <a href="mailto:hello@smartsynk.net">hello@smartsynk.net</a></div>
                <div style="margin-bottom: 12px;">One login for salon, barber, nail, gym and retail locations. Appointments, clients, team and payments in one hub.</div>
                <div>
                  <a href="https://www.smartsynk.net/" target="_blank" rel="noopener noreferrer" style="display: inline-block; padding: 6px 12px; background: linear-gradient(to bottom, #555555, #333333, #222222); color: white; text-decoration: none; border-radius: 4px; margin-right: 8px;">Visit site</a>
                  <button class="share-btn" data-business="SmartSynk" style="padding: 6px 12px; border: 1px solid #ddd; background: #f8f8f8; border-radius: 4px; cursor: pointer;">Share</button>
                </div>
              </div>
            </div>
            
            <!-- Health & Beauty Section -->
            <h2 style="margin-top: 30px; border-bottom: 1px solid #eee; padding-bottom: 10px;">Health & Beauty</h2>
            <div class="business-listings" style="display: flex; flex-wrap: wrap; gap: 20px; margin-top: 15px;">
              <div class="business-item" data-category="health" style="flex: 1 1 300px; padding: 15px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); background-color: #fff;">
                <h3 style="margin-top: 0; margin-bottom: 10px;">Fab Hair London</h3>
                <div style="margin-bottom: 8px;"><span style="font-weight: bold;">Category:</span> Hair salon</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i> 382 Green Lanes, Palmers Green, London N13 5PD</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-phone" style="margin-right: 5px;"></i> <a href="tel:+442088867070">020 8886 7070</a></div>
                <div style="margin-bottom: 8px;"><i class="fas fa-envelope" style="margin-right: 5px;"></i> <a href="mailto:salon@fabhair.london">salon@fabhair.london</a></div>
                <div style="margin-bottom: 8px;"><i class="fas fa-globe" style="margin-right: 5px;"></i> <a href="https://www.fabhair.london/" target="_blank" rel="noopener noreferrer">fabhair.london</a></div>
                <div style="margin-bottom: 12px;">Independent Palmers Green salon since 1997. Creative colour, balayage, precision cutting, extensions and keratin smoothing, with cruelty-free Paul Mitchell and Davines products.</div>
                <div>
                  <a href="https://maps.google.com/?q=382+Green+Lanes,+Palmers+Green,+London+N13+5PD" target="_blank" rel="noopener" style="display: inline-block; padding: 6px 12px; background: linear-gradient(to bottom, #555555, #333333, #222222); color: white; text-decoration: none; border-radius: 4px; margin-right: 8px;">Directions</a>
                  <a href="https://www.fabhair.london/" target="_blank" rel="noopener noreferrer" style="display: inline-block; padding: 6px 12px; background: linear-gradient(to bottom, #555555, #333333, #222222); color: white; text-decoration: none; border-radius: 4px; margin-right: 8px;">Visit site</a>
                  <button class="share-btn" data-business="Fab Hair London" style="padding: 6px 12px; border: 1px solid #ddd; background: #f8f8f8; border-radius: 4px; cursor: pointer;">Share</button>
                </div>
              </div>

              <div class="business-item" data-category="health" style="flex: 1 1 300px; padding: 15px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); background-color: #fff;">
                <h3 style="margin-top: 0; margin-bottom: 10px;">Scruples Hair &amp; Beauty Salon</h3>
                <div class="directory-offer">20% OFF Your First Visit</div>
                <div style="margin-bottom: 8px;"><span style="font-weight: bold;">Category:</span> Health &amp; Beauty</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i> 338 Green Lanes, London N13 5TW</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-phone" style="margin-right: 5px;"></i> <a href="tel:+442088861327">020 8886 1327</a></div>
                <div style="margin-bottom: 8px;"><i class="fas fa-globe" style="margin-right: 5px;"></i> <a href="https://elite-hair-beauty-winchmore-hill.mytratwell.co.uk" target="_blank" rel="noopener noreferrer">Book on Treatwell</a></div>
                <div style="margin-bottom: 12px;">Hair, nails, threading, make up and bridal make up.</div>
                <div>
                  <a href="https://maps.google.com/?q=338+Green+Lanes,+London+N13+5TW" target="_blank" rel="noopener" style="display: inline-block; padding: 6px 12px; background: linear-gradient(to bottom, #555555, #333333, #222222); color: white; text-decoration: none; border-radius: 4px; margin-right: 8px;">Directions</a>
                  <button class="share-btn" data-business="Scruples Hair &amp; Beauty Salon" style="padding: 6px 12px; border: 1px solid #ddd; background: #f8f8f8; border-radius: 4px; cursor: pointer;">Share</button>
                </div>
              </div>

              <div class="business-item" data-category="health" style="flex: 1 1 300px; padding: 15px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); background-color: #fff;">
                <h3 style="margin-top: 0; margin-bottom: 10px;">The Nine Glow</h3>
                <div class="directory-offer">10% OFF Your First Treatment</div>
                <div style="margin-bottom: 8px;"><span style="font-weight: bold;">Category:</span> Advanced Skin Treatments</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i> 418 Green Lanes, London N13 5XG (inside Leyla Hair &amp; Beauty)</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-phone" style="margin-right: 5px;"></i> <a href="tel:+442088868089">020 8886 8089</a></div>
                <div style="margin-bottom: 8px;"><i class="fab fa-instagram" style="margin-right: 5px;"></i> <a href="https://www.instagram.com/thenineglow/" target="_blank" rel="noopener noreferrer">@thenineglow</a></div>
                <div style="margin-bottom: 12px;">Hydrafacial, Hydrascalp, Skin Pen, The Elements, iS Clinical Facials, Bio Repeel and Green Peel.</div>
                <div>
                  <a href="https://maps.google.com/?q=418+Green+Lanes,+London+N13+5XG" target="_blank" rel="noopener" style="display: inline-block; padding: 6px 12px; background: linear-gradient(to bottom, #555555, #333333, #222222); color: white; text-decoration: none; border-radius: 4px; margin-right: 8px;">Directions</a>
                  <button class="share-btn" data-business="The Nine Glow" style="padding: 6px 12px; border: 1px solid #ddd; background: #f8f8f8; border-radius: 4px; cursor: pointer;">Share</button>
                </div>
              </div>

              <div class="business-item" data-category="health" style="flex: 1 1 300px; padding: 15px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); background-color: #fff;">
                <h3 style="margin-top: 0; margin-bottom: 10px;">Rejuvenate Spa</h3>
                <div style="margin-bottom: 8px;"><span style="font-weight: bold;">Category:</span> Health & Beauty</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i> 67 Aldermans Hill, Palmers Green, N13 4PP</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-phone" style="margin-right: 5px;"></i> 020 8886 5544</div>
                <div style="margin-bottom: 12px;">Luxury day spa offering massages, facials, and body treatments. Packages available for special occasions.</div>
                <div>
                  <a href="https://maps.google.com/?q=67+Aldermans+Hill,+Palmers+Green,+N13+4PP" target="_blank" rel="noopener" style="display: inline-block; padding: 6px 12px; background: linear-gradient(to bottom, #555555, #333333, #222222); color: white; text-decoration: none; border-radius: 4px; margin-right: 8px;">Directions</a>
                  <button class="share-btn" data-business="Rejuvenate Spa" style="padding: 6px 12px; border: 1px solid #ddd; background: #f8f8f8; border-radius: 4px; cursor: pointer;">Share</button>
                </div>
              </div>
              
              <div class="business-item" data-category="health" style="flex: 1 1 300px; padding: 15px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); background-color: #fff;">
                <h3 style="margin-top: 0; margin-bottom: 10px;">Palmers Green Dental</h3>
                <div style="margin-bottom: 8px;"><span style="font-weight: bold;">Category:</span> Health & Beauty</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i> 112 Green Lanes, Palmers Green, N13 5TT</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-phone" style="margin-right: 5px;"></i> 020 8889 4321</div>
                <div style="margin-bottom: 12px;">Family dental practice offering general, cosmetic, and preventative dentistry. Emergency appointments available.</div>
                <div>
                  <a href="https://maps.google.com/?q=112+Green+Lanes,+Palmers+Green,+N13+5TT" target="_blank" rel="noopener" style="display: inline-block; padding: 6px 12px; background: linear-gradient(to bottom, #555555, #333333, #222222); color: white; text-decoration: none; border-radius: 4px; margin-right: 8px;">Directions</a>
                  <button class="share-btn" data-business="Palmers Green Dental" style="padding: 6px 12px; border: 1px solid #ddd; background: #f8f8f8; border-radius: 4px; cursor: pointer;">Share</button>
                </div>
              </div>
              
              <div class="business-item" data-category="health" style="flex: 1 1 300px; padding: 15px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); background-color: #fff;">
                <h3 style="margin-top: 0; margin-bottom: 10px;">Essence Hair Salon</h3>
                <div style="margin-bottom: 8px;"><span style="font-weight: bold;">Category:</span> Health & Beauty</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i> 24 Aldermans Hill, Palmers Green, N13 4PN</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-phone" style="margin-right: 5px;"></i> 020 8886 2468</div>
                <div style="margin-bottom: 12px;">Premium hair salon offering cuts, colors, and styling for all hair types. Special packages for weddings and events.</div>
                <div>
                  <a href="https://maps.google.com/?q=24+Aldermans+Hill,+Palmers+Green,+N13+4PN" target="_blank" rel="noopener" style="display: inline-block; padding: 6px 12px; background: linear-gradient(to bottom, #555555, #333333, #222222); color: white; text-decoration: none; border-radius: 4px; margin-right: 8px;">Directions</a>
                  <button class="share-btn" data-business="Essence Hair Salon" style="padding: 6px 12px; border: 1px solid #ddd; background: #f8f8f8; border-radius: 4px; cursor: pointer;">Share</button>
                </div>
              </div>
              
              <div class="business-item" data-category="health" style="flex: 1 1 300px; padding: 15px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); background-color: #fff;">
                <h3 style="margin-top: 0; margin-bottom: 10px;">Palmers Green Pharmacy</h3>
                <div style="margin-bottom: 8px;"><span style="font-weight: bold;">Category:</span> Health & Beauty</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i> 352 Green Lanes, Palmers Green, N13 5TY</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-phone" style="margin-right: 5px;"></i> 020 8882 1357</div>
                <div style="margin-bottom: 12px;">Independent pharmacy offering prescriptions, health advice, and a range of beauty and wellness products.</div>
                <div>
                  <a href="https://maps.google.com/?q=352+Green+Lanes,+Palmers+Green,+N13+5TY" target="_blank" rel="noopener" style="display: inline-block; padding: 6px 12px; background: linear-gradient(to bottom, #555555, #333333, #222222); color: white; text-decoration: none; border-radius: 4px; margin-right: 8px;">Directions</a>
                  <button class="share-btn" data-business="Palmers Green Pharmacy" style="padding: 6px 12px; border: 1px solid #ddd; background: #f8f8f8; border-radius: 4px; cursor: pointer;">Share</button>
                </div>
              </div>
              
              <div class="business-item" data-category="health" style="flex: 1 1 300px; padding: 15px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); background-color: #fff;">
                <h3 style="margin-top: 0; margin-bottom: 10px;">Wellness Physiotherapy</h3>
                <div style="margin-bottom: 8px;"><span style="font-weight: bold;">Category:</span> Health & Beauty</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i> 78 Aldermans Hill, Palmers Green, N13 4PP</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-phone" style="margin-right: 5px;"></i> 020 8889 7890</div>
                <div style="margin-bottom: 12px;">Professional physiotherapy clinic offering injury rehabilitation, sports massage, and preventative care.</div>
                <div>
                  <a href="https://maps.google.com/?q=78+Aldermans+Hill,+Palmers+Green,+N13+4PP" target="_blank" rel="noopener" style="display: inline-block; padding: 6px 12px; background: linear-gradient(to bottom, #555555, #333333, #222222); color: white; text-decoration: none; border-radius: 4px; margin-right: 8px;">Directions</a>
                  <button class="share-btn" data-business="Wellness Physiotherapy" style="padding: 6px 12px; border: 1px solid #ddd; background: #f8f8f8; border-radius: 4px; cursor: pointer;">Share</button>
                </div>
              </div>
            </div>
            
            <!-- Charity Shops Section -->
            <h2 style="margin-top: 30px; border-bottom: 1px solid #eee; padding-bottom: 10px;">Charity Shops</h2>
            <div class="business-listings" style="display: flex; flex-wrap: wrap; gap: 20px; margin-top: 15px;">
              <div class="business-item" data-category="charity" style="flex: 1 1 300px; padding: 15px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); background-color: #fff;">
                <h3 style="margin-top: 0; margin-bottom: 10px;">Philanthropy London</h3>
                <div style="margin-bottom: 8px;"><span style="font-weight: bold;">Category:</span> Community Interest Company</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i> 248 Green Lanes, London N13 5TU</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-phone" style="margin-right: 5px;"></i> <a href="tel:+442038833185">020 3883 3185</a></div>
                <div style="margin-bottom: 8px;"><i class="fab fa-instagram" style="margin-right: 5px;"></i> <a href="https://www.instagram.com/philanthropylondon/" target="_blank" rel="noopener noreferrer">@philanthropylondon</a></div>
                <div style="margin-bottom: 12px;">Preloved and vintage finds supporting community projects.</div>
                <div>
                  <a href="https://maps.google.com/?q=248+Green+Lanes,+London+N13+5TU" target="_blank" rel="noopener" style="display: inline-block; padding: 6px 12px; background: linear-gradient(to bottom, #555555, #333333, #222222); color: white; text-decoration: none; border-radius: 4px; margin-right: 8px;">Directions</a>
                  <button class="share-btn" data-business="Philanthropy London" style="padding: 6px 12px; border: 1px solid #ddd; background: #f8f8f8; border-radius: 4px; cursor: pointer;">Share</button>
                </div>
              </div>
            </div>

            <!-- Pubs & Bars Section -->
            <h2 style="margin-top: 30px; border-bottom: 1px solid #eee; padding-bottom: 10px;">Pubs &amp; Bars</h2>
            <div class="business-listings" style="display: flex; flex-wrap: wrap; gap: 20px; margin-top: 15px;">
              <div class="business-item" data-category="pub" style="flex: 1 1 300px; padding: 15px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); background-color: #fff;">
                <h3 style="margin-top: 0; margin-bottom: 10px;">The Fox Pub</h3>
                <div class="directory-offer">10% OFF Kids Mains with leaflet</div>
                <div style="margin-bottom: 8px;"><span style="font-weight: bold;">Category:</span> Pubs &amp; Bars</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-map-marker-alt" style="margin-right: 5px;"></i> 413 Green Lanes, London N13 4JD</div>
                <div style="margin-bottom: 8px;"><i class="fas fa-phone" style="margin-right: 5px;"></i> <a href="tel:+442030910679">0203 091 0679</a></div>
                <div style="margin-bottom: 8px;"><i class="fas fa-envelope" style="margin-right: 5px;"></i> <a href="mailto:ceyda@thefoxnorthlondon.com">ceyda@thefoxnorthlondon.com</a></div>
                <div style="margin-bottom: 8px;"><i class="fas fa-globe" style="margin-right: 5px;"></i> <a href="https://thefoxnorthlondon.com/" target="_blank" rel="noopener noreferrer">thefoxnorthlondon.com</a></div>
                <div style="margin-bottom: 8px;"><i class="fab fa-instagram" style="margin-right: 5px;"></i> <a href="https://www.instagram.com/THEFOXN13/" target="_blank" rel="noopener noreferrer">@THEFOXN13</a></div>
                <div style="margin-bottom: 12px;">Host of the Mini-Monster Disco on Saturday 31st October 2026, 4:00 PM – 8:00 PM, with entertainment by Eleni from Asterakia Entertaining. 10% off kids mains with leaflet.</div>
                <div>
                  <a href="https://maps.google.com/?q=413+Green+Lanes,+London+N13+4JD" target="_blank" rel="noopener" style="display: inline-block; padding: 6px 12px; background: linear-gradient(to bottom, #555555, #333333, #222222); color: white; text-decoration: none; border-radius: 4px; margin-right: 8px;">Directions</a>
                  <button class="share-btn" data-business="The Fox Pub" style="padding: 6px 12px; border: 1px solid #ddd; background: #f8f8f8; border-radius: 4px; cursor: pointer;">Share</button>
                </div>
              </div>
            </div>

            <!-- No Results Message -->
            <div id="no-results" style="display: none; padding: 20px; text-align: center; background-color: #f8f8f8; border-radius: 8px; margin-top: 20px;">
              <p style="font-size: 16px; color: #666;">No businesses found matching your search. Please try different keywords or clear your search.</p>
              <button id="clear-search" style="padding: 8px 16px; background: linear-gradient(to bottom, #555555, #333333, #222222); color: white; border: none; border-radius: 4px; cursor: pointer; margin-top: 10px;">Clear Search</button>
            </div>
          </div>
          
          <!-- Category Filtering JavaScript -->
          <script>
            document.addEventListener('DOMContentLoaded', function() {
              try {
                // Get all needed elements
                const categoryButtons = document.querySelectorAll('.category-filter');
                const businessItems = document.querySelectorAll('.business-item');
                const searchInput = document.getElementById('business-search');
                const searchButton = document.getElementById('search-button');
                const clearSearchButton = document.getElementById('clear-search');
                const noResultsMessage = document.getElementById('no-results');
                const sectionHeadings = document.querySelectorAll('#business-listings-container h2');
                let activeCategory = 'all'; // Default category
              
              // Function to handle category filtering
              function filterBusinessesByCategory() {
                let visibleItems = 0;
                
                businessItems.forEach(item => {
                  const category = item.getAttribute('data-category');
                  
                  // If search text is present, filter by that too
                  const searchText = searchInput.value.toLowerCase();
                  const businessText = item.textContent.toLowerCase();
                  
                  if ((activeCategory === 'all' || category === activeCategory) && 
                      (searchText === '' || businessText.includes(searchText))) {
                    item.style.display = 'block';
                    visibleItems++;
                  } else {
                    item.style.display = 'none';
                  }
                });
                
                // Show no results message if needed
                noResultsMessage.style.display = visibleItems === 0 ? 'block' : 'none';
                
                // Update visibility of section headings
                updateSectionHeadings();
              }
              
              // Function to update section headings visibility
              function updateSectionHeadings() {
                sectionHeadings.forEach(heading => {
                  let hasVisibleItems = false;
                  let nextElement = heading.nextElementSibling;
                  
                  while (nextElement && nextElement.tagName !== 'H2') {
                    const items = nextElement.querySelectorAll('.business-item');
                    
                    for (let i = 0; i < items.length; i++) {
                      if (items[i].style.display !== 'none') {
                        hasVisibleItems = true;
                        break;
                      }
                    }
                    
                    if (hasVisibleItems) break;
                    nextElement = nextElement.nextElementSibling;
                  }
                  
                  heading.style.display = hasVisibleItems ? 'block' : 'none';
                });
              }
              
              // Set up category button click events
              categoryButtons.forEach(button => {
                button.addEventListener('click', function() {
                  // Remove active state from all buttons
                  categoryButtons.forEach(btn => {
                    btn.removeAttribute('aria-pressed');
                    btn.setAttribute('aria-pressed', 'false');
                    btn.style.background = '';
                    btn.style.color = '';
                  });
                  
                  // Add active state to clicked button
                  this.setAttribute('aria-pressed', 'true');
                  this.style.background = 'linear-gradient(to bottom, #555555, #333333, #222222)';
                  this.style.color = 'white';
                  
                  // Update active category
                  activeCategory = this.getAttribute('data-category');
                  
                  // Clear search when changing category
                  searchInput.value = '';
                  
                  // Filter businesses
                  filterBusinessesByCategory();
                });
              });
              
              // Set up search functionality
              searchButton.addEventListener('click', filterBusinessesByCategory);
              
              // Set up search on Enter key
              searchInput.addEventListener('keyup', function(event) {
                if (event.key === 'Enter') {
                  filterBusinessesByCategory();
                }
              });
              
              // Set up clear search button
              clearSearchButton.addEventListener('click', function() {
                searchInput.value = '';
                filterBusinessesByCategory();
              });
              
              // Set up share buttons
              const shareButtons = document.querySelectorAll('.share-btn');
              shareButtons.forEach(button => {
                button.addEventListener('click', function() {
                  const businessName = this.getAttribute('data-business');
                  const shareText = `Check out ${businessName} in Palmers Green! Found via LovePalmersGreen.com`;
                  
                  if (navigator.share) {
                    navigator.share({
                      title: businessName,
                      text: shareText,
                      url: window.location.href
                    })
                    .catch(error => console.log('Error sharing:', error));
                  } else {
                    // Fallback for browsers that don't support Web Share API
                    const textArea = document.createElement('textarea');
                    textArea.value = shareText + ' ' + window.location.href;
                    document.body.appendChild(textArea);
                    textArea.select();
                    document.execCommand('copy');
                    document.body.removeChild(textArea);
                    alert('Link copied to clipboard!');
                  }
                });
              });
              
              // Initial filtering
              filterBusinessesByCategory();
              } catch (error) {
                console.error('Error in business directory:', error);
              }
            });
          </script>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Stories & News Section -->
  <section class="hero" style="padding: 40px 0; background-color: #f8f8f8;">
    <div class="container" style="padding: 0 20px; margin: 0 auto;">
      <div class="stories-section">
        <div class="stories-header" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
        </div>
        
        <div id="stories-container" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px; margin-top: 20px;">
          <!-- Stories will be loaded here -->
        </div>
      </div>
    </div>
  </section>
  
  <div id="contact" class="hero greysection" style="padding: 40px 0;">
    <div class="container" style="padding: 0 20px; margin: 0 auto;">
      <div class="w-layout-grid contact-form-grid" style="display: flex; flex-wrap: wrap; gap: 20px; padding: 20px;">
        <div id="w-node-cec23962-3070-cb68-f915-574cfb695438-8dd536ab" class="contact-form-wrap" style="flex: 1 1 300px; padding: 20px; background-color: #ffffff; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.08);">
          <div class="contact-form-heading-wrap">
            <h2 class="contact-heading" style="font-size: 1.8em; margin-bottom: 10px;">Contact us</h2>
            <div class="paragraph-light" style="font-size: 0.9em;">Feel free to contact us with your questions about Palmers Green business, ideas or suggestions. Use the contact form in the footer to get in touch.</div>
            <div class="paragraph-light" style="font-size: 0.95em; margin-top: 16px; line-height: 1.6;">Green Lanes Business Association (GLBA), established 1992. Supporting local businesses, promoting our shopping area, bringing community together.</div>
          </div>
        </div>
        <div id="w-node-cec23962-3070-cb68-f915-574cfb69543f-8dd536ab" style="flex: 1 1 300px; padding: 20px; background-color: #f8f8f8; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
          <div class="details-wrap" style="margin-bottom: 15px; padding: 8px;">
            <div class="label" style="margin-bottom: 5px; font-weight: bold;">OUR OFFICE</div>
            <div class="paragraph-light" style="line-height: 1.5;">Palmers Green<br>London N13</div>
          </div>
          <div class="details-wrap" style="margin-bottom: 15px; padding: 8px;">
            <div class="label" style="margin-bottom: 5px; font-weight: bold;">WORKING HOURS</div>
            <div class="paragraph-light" style="line-height: 1.5;">9AM - 6PM, Mon to Fri</div>
          </div>
          <div class="details-wrap" style="margin-bottom: 15px; padding: 8px;">
            <div class="label" style="margin-bottom: 5px; font-weight: bold;">MEMBERSHIP &amp; CHRISTMAS ADVERTISING</div>
            <div class="paragraph-light" style="line-height: 1.5;">Costas<br>
              <a href="tel:+447943198198">07943 198 198</a><br>
              <a href="mailto:costas@lovepalmersgreen.com">costas@lovepalmersgreen.com</a>
            </div>
          </div>
          <div class="details-wrap" style="margin-bottom: 15px; padding: 8px;">
            <div class="label" style="margin-bottom: 5px; font-weight: bold;">CONTACT</div>
            <a href="mailto:contact@lovepalmersgreen.com?subject=You&#x27;ve%20got%20mail!" class="contact-email-link" style="display: inline-block; margin-top: 5px;">contact@lovepalmersgreen.com</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include 'footer.php'; ?>
  <!-- Back to Top Button -->
  <div id="back-to-top" title="Go to top">
    <div class="arrow-up"></div>
    <span>Top</span>
  </div>

  <style>
    /* News section styling */
    .news-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
      gap: 20px;
      margin-top: 20px;
    }
    
    .news-card {
      border: 1px solid #e0e0e0;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
      display: flex;
      flex-direction: column;
      height: 100%;
    }
    
    .news-read-more {
      display: inline-block;
      padding: 8px 16px;
      background: linear-gradient(to bottom, #555555, #333333, #222222);
      color: #fff;
      text-decoration: none;
      border-radius: 4px;
      font-weight: 500;
      transition: background-color 0.2s ease;
    }
    
    .news-read-more:hover {
      background: linear-gradient(to bottom, #666666, #444444, #333333);
      color: #fff;
    }
    
    
    /* Back to top button styling */
    #back-to-top {
      position: fixed;
      bottom: 20px;
      right: 20px;
      background: linear-gradient(to bottom, #555555, #333333, #222222); /* Dark grey gradient */
      width: 60px;
      height: 60px;
      border-radius: 50%;
      text-align: center;
      line-height: 1.1;
      color: white;
      cursor: pointer;
      display: none;
      z-index: 1000;
      box-shadow: 0 2px 5px rgba(0,0,0,0.3);
      font-family: 'Open Sans', sans-serif;
      font-weight: 600;
      padding-top: 12px;
      box-sizing: border-box;
      transition: background-color 0.3s;
    }
    
    #back-to-top:hover {
      background: linear-gradient(to bottom, #666666, #444444, #333333); /* Lighter dark grey gradient on hover */
    }
    
    .arrow-up {
      margin: 0 auto 3px;
      width: 0;
      height: 0;
      border-left: 8px solid transparent;
      border-right: 8px solid transparent;
      border-bottom: 8px solid white;
    }

    /* For mobile devices */
    @media screen and (max-width: 767px) {
      #back-to-top {
        width: 50px;
        height: 50px;
        padding-top: 8px;
      }
    }
  </style>
  
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=67f01a4044bdf3418dd536a4" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/lovepg.js" type="text/javascript"></script>
  <script src="js/news.js" type="text/javascript"></script>
  
  <script>
    $(document).ready(function() {
      // Hamburger Menu Toggle
      $('#hamburger-btn').click(function(e) {
        e.stopPropagation();
        $(this).toggleClass('active');
        $(this).attr('aria-expanded', $(this).hasClass('active'));
        $('#mobile-menu').toggleClass('active');
        $('#mobile-menu').attr('aria-hidden', !$(this).hasClass('active'));
      });
      
      // Close menu when clicking outside
      $(document).click(function(event) {
        if (!$('#hamburger-btn').is(event.target) && 
            !$('#hamburger-btn').has(event.target).length &&
            !$('#mobile-menu').is(event.target) && 
            !$('#mobile-menu').has(event.target).length) {
          $('#hamburger-btn').removeClass('active');
          $('#hamburger-btn').attr('aria-expanded', 'false');
          $('#mobile-menu').removeClass('active');
          $('#mobile-menu').attr('aria-hidden', 'true');
        }
      });
      
      // Close menu when window resizes
      $(window).resize(function() {
        $('#hamburger-btn').removeClass('active');
        $('#hamburger-btn').attr('aria-expanded', 'false');
        $('#mobile-menu').removeClass('active');
        $('#mobile-menu').attr('aria-hidden', 'true');
      });
      
      // Close menu when clicking a menu link
      $('.mobile-menu-link').click(function() {
        $('#hamburger-btn').removeClass('active');
        $('#hamburger-btn').attr('aria-expanded', 'false');
        $('#mobile-menu').removeClass('active');
        $('#mobile-menu').attr('aria-hidden', 'true');
      });
      
      // Hero image parallax: image moves slower than scroll so it stays in its window
      function updateHeroParallax() {
        var $hero = $('#hero-intro');
        if (!$hero.length) return;
        var scrollTop = $(window).scrollTop();
        var heroTop = $hero.offset().top;
        var heroHeight = $hero.outerHeight();
        var windowHeight = $(window).height();
        if (scrollTop + windowHeight > heroTop && scrollTop < heroTop + heroHeight) {
          var offset = (scrollTop - heroTop) * 0.35;
          $hero.find('.hero-parallax-inner').css('transform', 'translate3d(0, ' + offset + 'px, 0)');
        } else if (scrollTop >= heroTop + heroHeight) {
          var maxOffset = heroHeight * 0.35;
          $hero.find('.hero-parallax-inner').css('transform', 'translate3d(0, ' + maxOffset + 'px, 0)');
        } else {
          $hero.find('.hero-parallax-inner').css('transform', 'translate3d(0, 0, 0)');
        }
      }
      $(window).on('scroll', updateHeroParallax);
      $(window).on('resize', updateHeroParallax);
      updateHeroParallax();

      // Sticky header with transparency on scroll
      $(window).scroll(function() {
        if ($(this).scrollTop() > 50) {
          $('#main-header').addClass('scrolled');
        } else {
          $('#main-header').removeClass('scrolled');
        }
      });
      
      // Back to top button functionality
      // Show button when user scrolls down 300px
      $(window).scroll(function() {
        if ($(this).scrollTop() > 300) {
          $('#back-to-top').fadeIn();
        } else {
          $('#back-to-top').fadeOut();
        }
      });
      
      // Scroll to top when button is clicked
      $('#back-to-top').click(function() {
        $('html, body').animate({scrollTop: 0}, 800);
        return false;
      });
    });
  </script>
  <!-- Added missing closing brace for JavaScript function -->
  <script>
    // Ensure all JavaScript functions are properly closed
    $(document).ready(function() {
      // This empty function ensures all previous JavaScript is properly closed
    });
  </script>
  <!-- News functionality script -->
  <script src="js/news.js"></script>
</body>
</html>