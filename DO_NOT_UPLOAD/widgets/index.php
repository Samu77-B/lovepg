<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset=utf-8
  <title>Love Palmers Green - Local Business Directory</title>
  <meta content="Discover local businesses in Palmers Green, London. Find restaurants, shops, services, and more in our comprehensive business directory." name=description>
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <link href="css/lovepg.css rel="stylesheet" type="text/css">
  <link href=css/normalize.css rel="stylesheet" type="text/css">
  <link href="css/components.css rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com rel=nnect crossorigin>
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.66webfont.js" type="text/javascript"></script>
  <script type=text/javascript">WebFont.load({  google:[object Object]  families: [OpenSans:300,300italic,400,400italic,600,600italic,700,700italic,800,800ic","Yellow Ginger:regular]  }});</script>
  <script type=text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-;n.className+=t+"js",(ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+touch)}(window,document);</script>
  <link href="images/favicon.png" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png rel="apple-touch-icon">
</head>
<body class="body" style=background-color: #ffffff;">
  <section style=background-color: #222width: 100%;">
    <div class="w-layout-blockcontainer container-5 w-container">
      <nav class="main-nav">
        <div class="nav-logo">
          <a href="index.php><img src=images/LPG_2025_Long_logo_White3png" loading=lazy" width="180 alt="Love Palmers Green Logo"></a>
        </div>
      </nav>
    </div>
  </section>
  <div class="hero cc-store-home-wrap" style=background-color: #ffffff;">
    <div class="intro-header" style=background-color: #ffffff;></div>
  </div>
  <section style=background-color: #ffffff;">
    <div class="w-layout-blockcontainer container-4 w-container">
          <div class="motto-wrap">
        <div class="heading-jumbo-small">Local Business Directory<br></div>
          </div>
      <div class="pg-business-directory style=max-width:1200px; margin:0 auto; padding:20px;">
        <div style=margin-bottom:30>
          <input type="text id="search-input" placeholder=Search businesses..." style="width:100ding:12 border: 1px solid #ddd; border-radius: 8x; font-size: 16px; margin-bottom: 15px;" onkeyup="searchBusinesses()">
          <div style="display: flex; flex-wrap: wrap; gap: 10x;">
            <button class="filter-button active" onclick="filterCategory('all) style=padding: 8px16 border: 18bc34; background: #8bc34lor: white; border-radius: 5px; cursor: pointer;">All</button>
            <button class="filter-button" onclick="filterCategory('food) style=padding: 8px16 border: 1px solid #ddd; background: white; color: #333; border-radius: 5px; cursor: pointer;">Food & Drink</button>
            <button class="filter-button" onclick="filterCategory(retail) style=padding: 8px16 border: 1px solid #ddd; background: white; color: #333; border-radius: 5px; cursor: pointer;>Retail</button>
            <button class="filter-button" onclick="filterCategory(services) style=padding: 8px16 border: 1px solid #ddd; background: white; color: #333; border-radius: 5px; cursor: pointer;>Services</button>
            <button class="filter-button" onclick="filterCategory(health) style=padding: 8px16 border: 1px solid #ddd; background: white; color: #333; border-radius: 5px; cursor: pointer;">Health & Beauty</button>
            <button class="filter-button" onclick="filterCategory('transport) style=padding: 8px16 border: 1px solid #ddd; background: white; color: #333; border-radius: 5px; cursor: pointer;">Transport</button>
            <button class="filter-button" onclick="filterCategory('emergency) style=padding: 8px16 border: 1px solid #ddd; background: white; color: #333; border-radius: 5px; cursor: pointer;">Emergency Services</button>
              </div>
            </div>
            
        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(30px, 1fr)); gap:20;">
          <!-- Food & Drink -->
          <h2Food & Drink</h2>
          <div class="business-item" data-category="food">
            <div class="business-name">Costa Coffee</div>
            <div class=business-category>Coffee Shop</div>
            <div class="business-address>Green Lanes, Palmers Green, London N13</div>
            <div class="business-phone">020</div>
            <div class="business-website>
              <a href=https://www.costa.co.uk target="_blank>costa.co.uk</a>
                </div>
            <div class="business-notes">Popular coffee chain serving hot drinks, sandwiches, and pastries.</div>
              </div>
          <!-- Add more business items here -->
            </div>
        <script>
          function searchBusinesses() {
            const directory = document.querySelector('.pg-business-directory');
            const searchTerm = directory.querySelector('#search-input').value.toLowerCase();
            const businesses = directory.querySelectorAll('.business-item');
            
            businesses.forEach(business => {
              business.style.display = business.textContent.toLowerCase().includes(searchTerm) ? blocknone';
            });
            
            const categories = directory.querySelectorAll(h2        categories.forEach(category => {
              let nextElement = category.nextElementSibling;
              let hasVisibleBusiness = false;
              
              while (nextElement && nextElement.tagName !== 'H2')[object Object]                if (nextElement.classList.contains('business-item') && nextElement.style.display !== 'none') {
                  hasVisibleBusiness = true;
                  break;
                }
                nextElement = nextElement.nextElementSibling;
              }
              
              category.style.display = hasVisibleBusiness ? blocknone';
            });
          }
          
          function filterCategory(category) {
            const directory = document.querySelector('.pg-business-directory');
            const buttons = directory.querySelectorAll('.filter-button');
            
            buttons.forEach(button => {
              button.classList.remove('active');
              const onclick = button.getAttribute('onclick');
              if (onclick && onclick.includes(`'${category}'`))[object Object]            button.classList.add('active');
              } else if (category === 'all' && button.textContent.includes('All'))[object Object]            button.classList.add('active');
              }
            });
            
            const businesses = directory.querySelectorAll('.business-item');
            businesses.forEach(business => {
              business.style.display = (category ===all' || business.getAttribute('data-category) === category) ? blocknone';
            });
            
            const categories = directory.querySelectorAll(h2        categories.forEach(category => {
              let nextElement = category.nextElementSibling;
              let hasVisibleBusiness = false;
              
              while (nextElement && nextElement.tagName !== 'H2')[object Object]                if (nextElement.classList.contains('business-item') && nextElement.style.display !== 'none') {
                  hasVisibleBusiness = true;
                  break;
                }
                nextElement = nextElement.nextElementSibling;
              }
              
              category.style.display = hasVisibleBusiness ? blocknone';
            });
          }
        </script>
      </div>
    </div>
  </section>
  <div class="hero footerarkstyle="padding: 40px 60px; background-color: #ffffff;">
    <img src=images/LPG_2025_Long_logo_White3png" loading=lazy" width="278 alt="Love Palmers Green" class="image-3 style="margin: 20;">
    <div class=container">
      <div class="footer-wrap">
        <div>Copyright2025Love Palmers Green</div>
        <div style="margin-top: 10px; font-size: 12px; color: #666;">
          Website design, build and maintained by <a href="https://paradigmstudio.net/" target="_blank" style="color: #8bc34a; text-decoration: none;">@https://paradigmstudio.net/</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Back to Top Button -->
  <div id="back-to-top title=Go to top">
    <div class=arrow-up></div>
    <span>Top</span>
  </div>

  <style>
    /* Back to top button styling */
    #back-to-top[object Object]   position: fixed;
      bottom: 20x;
      right: 20px;
      background: linear-gradient(to bottom, #555555, #3333332222);
      width: 60px;
      height: 60     border-radius: 50%;
      text-align: center;
      line-height:1.1      color: white;
      cursor: pointer;
      display: none;
      z-index: 1000;
      box-shadow: 0 2px 5 rgba(0,0,0
      font-family:Open Sans', sans-serif;
      font-weight: 600
      padding-top: 12px;
      box-sizing: border-box;
      transition: background-color03;
    }
    
    #back-to-top:hover [object Object]
      background: linear-gradient(to bottom, #666666, #444444, #333333;
    }
    
    .arrow-up[object Object]    margin:0o 3px;
      width: 0
      height: 0;
      border-left: 8px solid transparent;
      border-right: 8px solid transparent;
      border-bottom:8x solid white;
    }

    /* For mobile devices */
    @media screen and (max-width: 767) {
      #back-to-top[object Object]
        width: 50px;
        height: 50px;
        padding-top: 8px;
      }
    }
  </style>
  
  <script src=https://d3e54v13qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e718.js?site=671a444f3418d536a4" type="text/javascript" integrity=sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/lovepg.js" type="text/javascript></script>
  
  <script>
    // Back to top button functionality
    $(document).ready(function() {
      // Show button when user scrolls down 300x
      $(window).scroll(function() {
        if ($(this).scrollTop() > 300) {
          $('#back-to-top').fadeIn();
        } else {
          $('#back-to-top').fadeOut();
        }
      });
      
      // Scroll to top when button is clicked
      $('#back-to-top').click(function() [object Object]     $('html, body).animate({scrollTop:00      return false;
      });
    });
  </script>
</body>
</html>