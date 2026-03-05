// News functions for Loves Palmers Green website
// Using reliable fallback data when external feeds fail

// Configuration
const NEWS_SOURCES = {
  // External news sources for Enfield and North London
  enfield_council: 'https://letstalk.enfield.gov.uk/feed',
  enfield_dispatch: 'https://enfielddispatch.co.uk/feed/',
  this_is_local_london: 'https://www.thisislocallondon.co.uk/news/feed/',
  london_news: 'https://feeds.bbci.co.uk/news/uk/london/rss.xml',
  business: 'https://feeds.bbci.co.uk/news/business/rss.xml'
};

// CORS proxy to try accessing external feeds
const CORS_PROXY = 'https://api.allorigins.win/raw?url=';

// Local news fallback data
const LOCAL_NEWS_FALLBACK = [
  {
    title: "Enfield Council Launches New Community Support Initiative",
    description: "Enfield Council has announced a new community support programme aimed at helping residents in North London with access to local services and community resources.",
    pubDate: "October 2025",
    link: "https://letstalk.enfield.gov.uk/",
    image: "images/community-support.jpg"
  },
  {
    title: "Palmers Green Town Centre Improvement Programme",
    description: "The Palmers Green Action Team and Enfield Council have launched a collaborative programme to enhance the town centre with improved public spaces, business support, and community events.",
    pubDate: "September 2025",
    link: "https://www.palmersgreenactionteam.org/",
    image: "images/town-centre.jpg"
  },
  {
    title: "Broomfield Park Summer Festival Celebrations",
    description: "Friends of Broomfield Park organised a successful summer festival featuring local music, food vendors, and community activities. The annual event continues to be a highlight for Palmers Green residents.",
    pubDate: "August 2025",
    link: "https://www.fobp.uk/",
    image: "images/festival.jpg"
  },
  {
    title: "Green Lanes Business Association Supports Local Traders",
    description: "Love Palmers Green continues to support independent businesses on Green Lanes with marketing initiatives, networking events, and advocacy for the local business community.",
    pubDate: "August 2025",
    link: "https://www.palmersgreenactionteam.org/",
    image: "images/business-support.jpg"
  },
  {
    title: "Enfield Transport Links Improvement Project",
    description: "Transport improvements continue across Enfield with investments in bus services and sustainable transport initiatives to improve connectivity for residents in North London.",
    pubDate: "July 2025",
    link: "https://letstalk.enfield.gov.uk/",
    image: "images/transport.jpg"
  },
  {
    title: "Community Events Calendar for Palmers Green",
    description: "Palmers Green hosts a variety of community events throughout the year including markets, festivals, and local gatherings. Check the Palmers Green Action Team website for upcoming events.",
    pubDate: "July 2025",
    link: "https://enfielddispatch.co.uk/",
    image: "images/events.jpg"
  }
];

// Business news fallback data
const BUSINESS_NEWS_FALLBACK = [
  {
    title: "Enfield Small Business Grant Scheme 2025",
    description: "Enfield Council continues to support local businesses with grant schemes and funding opportunities. Local entrepreneurs in Palmers Green are encouraged to explore available support.",
    pubDate: "October 2025",
    link: "https://letstalk.enfield.gov.uk/",
    image: "images/business-grant.jpg"
  },
  {
    title: "Love Palmers Green Business Networking Events",
    description: "The Green Lanes Business Association hosts regular networking events for local entrepreneurs and business owners. These events provide opportunities to connect and collaborate within the Palmers Green community.",
    pubDate: "September 2025",
    link: "https://www.palmersgreenactionteam.org/",
    image: "images/networking.jpg"
  },
  {
    title: "Independent Retail Revival on Green Lanes",
    description: "Palmers Green continues to thrive as a hub for independent retailers and service providers. The diverse mix of local businesses including cafés, shops, and professional services makes Green Lanes a vibrant shopping destination.",
    pubDate: "August 2025",
    link: "https://enfielddispatch.co.uk/",
    image: "images/retail.jpg"
  },
  {
    title: "Local Food and Hospitality Sector Flourishes",
    description: "Palmers Green's food scene continues to grow with new restaurants, cafés, and food businesses opening. The area is known for its diverse culinary offerings and independent food enterprises.",
    pubDate: "August 2025",
    link: "https://enfielddispatch.co.uk/",
    image: "images/restaurant-award.jpg"
  },
  {
    title: "Digital Marketing Support for Enfield Businesses",
    description: "Enfield Council and business support organisations continue to offer training and resources to help local businesses develop their digital presence and online marketing strategies.",
    pubDate: "July 2025",
    link: "https://letstalk.enfield.gov.uk/",
    image: "images/marketing-workshop.jpg"
  },
  {
    title: "Enfield Business Support Services Expand",
    description: "Enhanced business support services are available for entrepreneurs and small business owners in Enfield. Find mentoring, advice, and resources to help grow your business.",
    pubDate: "July 2025",
    link: "https://letstalk.enfield.gov.uk/",
    image: "images/business-hub.jpg"
  }
];

// Function to fetch and display general news
function refreshNews() {
  const newsContainer = document.getElementById('news-container');
  const loadingMessage = newsContainer.querySelector('.loading-message') || 
                        newsContainer.querySelector('div[style*="text-align: center"]'); // Fallback
  
  // Show loading message
  if (loadingMessage) {
    loadingMessage.style.display = 'block';
    loadingMessage.innerHTML = '<div class="loading-spinner" style="display: inline-block; width: 40px; height: 40px; border: 4px solid rgba(0,0,0,0.1); border-radius: 50%; border-top-color: #333; animation: spin 1s ease-in-out infinite;"></div><p style="margin-top: 15px;">Loading latest Enfield and Palmers Green news...</p>';
  }

  // Try to fetch from multiple sources
  console.log('Attempting to fetch news from Enfield and local news sources...');
  
  // Array of news sources to try in order
  const sourcesToTry = [
    { name: 'Enfield Dispatch', url: NEWS_SOURCES.enfield_dispatch },
    { name: 'Enfield Council', url: NEWS_SOURCES.enfield_council },
    { name: 'This is Local London', url: NEWS_SOURCES.this_is_local_london },
    { name: 'London News', url: NEWS_SOURCES.london_news }
  ];
  
  let newsFound = false;
  
  // Try each source sequentially
  function tryNextSource(index) {
    if (index >= sourcesToTry.length || newsFound) {
      if (!newsFound) {
        // All sources failed, use fallback
        displayFallbackNews(newsContainer, loadingMessage);
      }
      return;
    }
    
    const source = sourcesToTry[index];
    const proxyUrl = CORS_PROXY + encodeURIComponent(source.url);
    
    console.log(`Trying to fetch from ${source.name}...`);
    
    fetch(proxyUrl, { timeout: 8000 })
      .then(response => {
        if (!response.ok) {
          throw new Error(`HTTP error! Status: ${response.status}`);
        }
        return response.text();
      })
      .then(data => {
        try {
          // Clear loading message
          if (loadingMessage) {
            loadingMessage.style.display = 'none';
          }
          
          // Parse RSS XML data
          const parser = new DOMParser();
          const xmlDoc = parser.parseFromString(data, 'text/xml');
          
          // Check for parsing errors
          if (xmlDoc.getElementsByTagName('parsererror').length > 0) {
            throw new Error('XML parsing error');
          }
          
          const items = xmlDoc.querySelectorAll('item');
          
          if (items.length === 0) {
            throw new Error('No news items found in the feed');
          }
          
          // Filter for Enfield/Palmers Green related news
          const filteredItems = Array.from(items).filter(item => {
            const title = item.querySelector('title')?.textContent || '';
            const description = item.querySelector('description')?.textContent || '';
            const content = (title + ' ' + description).toLowerCase();
            
            return content.includes('enfield') || content.includes('palmers green') || 
                   content.includes('north london') || content.includes('green lanes');
          });
          
          // If we found relevant items, use them
          if (filteredItems.length > 0) {
            console.log(`Found ${filteredItems.length} relevant news items from ${source.name}`);
            newsFound = true;
            
            // Create news grid container
            const newsGrid = document.createElement('div');
            newsGrid.className = 'news-grid';
            newsGrid.style.display = 'grid';
            newsGrid.style.gridTemplateColumns = 'repeat(2, 1fr)';
            newsGrid.style.gap = '20px';
            
            // Process each news item (limit to 6 items)
            filteredItems.slice(0, 6).forEach(item => {
              const link = item.querySelector('link')?.textContent || '';
              const newsObj = {
                title: item.querySelector('title')?.textContent || 'No Title',
                description: item.querySelector('description')?.textContent || '',
                pubDate: item.querySelector('pubDate')?.textContent || new Date().toUTCString(),
                link: link || source.url,
                source: source.name
              };
              const newsCard = createNewsCard(newsObj);
              newsGrid.appendChild(newsCard);
            });
            
            // Replace content in container
            const existingGrid = newsContainer.querySelector('.news-grid');
            if (existingGrid) {
              newsContainer.replaceChild(newsGrid, existingGrid);
            } else {
              if (loadingMessage && loadingMessage.parentNode) {
                loadingMessage.parentNode.insertBefore(newsGrid, loadingMessage);
              } else {
                newsContainer.appendChild(newsGrid);
              }
            }
            return;
          } else {
            // No relevant items found, try next source
            console.log(`No relevant items found from ${source.name}, trying next source...`);
            tryNextSource(index + 1);
          }
        } catch (error) {
          console.error(`Error parsing news from ${source.name}:`, error);
          // Try next source
          tryNextSource(index + 1);
        }
      })
      .catch(error => {
        console.error(`Error fetching from ${source.name}:`, error);
        // Try next source
        tryNextSource(index + 1);
      });
  }
  
  // Start trying sources
  tryNextSource(0);
}

// Function to display fallback news when external feeds fail
function displayFallbackNews(container, loadingMessage) {
  console.log('Using fallback news data');
  
  // Hide loading message if present
  if (loadingMessage) {
    loadingMessage.style.display = 'none';
  }
  
  // Create news grid
  const newsGrid = document.createElement('div');
  newsGrid.className = 'news-grid';
  newsGrid.style.display = 'grid';
  newsGrid.style.gridTemplateColumns = 'repeat(auto-fit, minmax(300px, 1fr))';
  newsGrid.style.gap = '20px';
  
  // Add fallback news items
  LOCAL_NEWS_FALLBACK.forEach(item => {
    const newsCard = createNewsCard(item);
    newsGrid.appendChild(newsCard);
  });
  
  // Replace or add grid to container
  const existingGrid = container.querySelector('.news-grid');
  if (existingGrid) {
    container.replaceChild(newsGrid, existingGrid);
  } else {
    container.appendChild(newsGrid);
  }
  
  // Fallback notification has been removed as requested
}

// Function to fetch and display business news
function refreshBusinessNews() {
  const businessNewsContainer = document.getElementById('business-news-container');
  const loadingMessage = businessNewsContainer.querySelector('.loading-message');
  
  // Show loading message
  if (loadingMessage) {
    loadingMessage.style.display = 'block';
    loadingMessage.innerHTML = '<div class="loading-spinner" style="display: inline-block; width: 40px; height: 40px; border: 4px solid rgba(0,0,0,0.1); border-radius: 50%; border-top-color: #333; animation: spin 1s ease-in-out infinite;"></div><p style="margin-top: 15px;">Loading Enfield and Palmers Green business news...</p>';
  }

  // Try to fetch from multiple sources
  console.log('Attempting to fetch business news from Enfield sources...');
  
  // Array of news sources to try in order
  const sourcesToTry = [
    { name: 'Enfield Dispatch', url: NEWS_SOURCES.enfield_dispatch },
    { name: 'Enfield Council', url: NEWS_SOURCES.enfield_council },
    { name: 'This is Local London', url: NEWS_SOURCES.this_is_local_london }
  ];
  
  let newsFound = false;
  
  // Try each source sequentially
  function tryNextSource(index) {
    if (index >= sourcesToTry.length || newsFound) {
      if (!newsFound) {
        // All sources failed, use fallback
        displayFallbackBusinessNews(businessNewsContainer, loadingMessage);
      }
      return;
    }
    
    const source = sourcesToTry[index];
    const proxyUrl = CORS_PROXY + encodeURIComponent(source.url);
    
    console.log(`Trying to fetch business news from ${source.name}...`);
    
    fetch(proxyUrl, { timeout: 8000 })
      .then(response => {
        if (!response.ok) {
          throw new Error(`HTTP error! Status: ${response.status}`);
        }
        return response.text();
      })
      .then(data => {
        try {
          // Clear loading message
          if (loadingMessage) {
            loadingMessage.style.display = 'none';
          }
          
          // Parse RSS XML data
          const parser = new DOMParser();
          const xmlDoc = parser.parseFromString(data, 'text/xml');
          
          // Check for parsing errors
          if (xmlDoc.getElementsByTagName('parsererror').length > 0) {
            throw new Error('XML parsing error');
          }
          
          const items = xmlDoc.querySelectorAll('item');
          
          if (items.length === 0) {
            throw new Error('No news items found in the feed');
          }
          
          // Filter for business-related news
          const filteredItems = Array.from(items).filter(item => {
            const title = item.querySelector('title')?.textContent || '';
            const description = item.querySelector('description')?.textContent || '';
            const content = (title + ' ' + description).toLowerCase();
            
            return (content.includes('business') || content.includes('market') || 
                    content.includes('shop') || content.includes('enfield') || 
                    content.includes('palmers green') || content.includes('economic') ||
                    content.includes('entrepreneur') || content.includes('commerce'));
          });
          
          // If we found relevant items, use them
          if (filteredItems.length > 0) {
            console.log(`Found ${filteredItems.length} relevant business news items from ${source.name}`);
            newsFound = true;
            
            // Create news grid container
            const newsGrid = document.createElement('div');
            newsGrid.className = 'news-grid';
            newsGrid.style.display = 'grid';
            newsGrid.style.gridTemplateColumns = 'repeat(2, 1fr)';
            newsGrid.style.gap = '20px';
            
            // Process each news item (limit to 6 items)
            filteredItems.slice(0, 6).forEach(item => {
              const link = item.querySelector('link')?.textContent || '';
              const newsObj = {
                title: item.querySelector('title')?.textContent || 'No Title',
                description: item.querySelector('description')?.textContent || '',
                pubDate: item.querySelector('pubDate')?.textContent || new Date().toUTCString(),
                link: link || source.url,
                source: source.name
              };
              const newsCard = createNewsCard(newsObj);
              newsGrid.appendChild(newsCard);
            });
            
            // Replace content in container
            const existingGrid = businessNewsContainer.querySelector('.news-grid');
            if (existingGrid) {
              businessNewsContainer.replaceChild(newsGrid, existingGrid);
            } else {
              businessNewsContainer.appendChild(newsGrid);
            }
            return;
          } else {
            // No relevant items found, try next source
            console.log(`No business news found from ${source.name}, trying next source...`);
            tryNextSource(index + 1);
          }
        } catch (error) {
          console.error(`Error parsing business news from ${source.name}:`, error);
          // Try next source
          tryNextSource(index + 1);
        }
      })
      .catch(error => {
        console.error(`Error fetching business news from ${source.name}:`, error);
        // Try next source
        tryNextSource(index + 1);
      });
  }
  
  // Start trying sources
  tryNextSource(0);
}

// Function to display fallback business news when external feeds fail
function displayFallbackBusinessNews(container, loadingMessage) {
  console.log('Using fallback business news data');
  
  // Hide loading message if present
  if (loadingMessage) {
    loadingMessage.style.display = 'none';
  }
  
  // Create news grid
  const newsGrid = document.createElement('div');
  newsGrid.className = 'news-grid';
  newsGrid.style.display = 'grid';
  newsGrid.style.gridTemplateColumns = 'repeat(auto-fit, minmax(300px, 1fr))';
  newsGrid.style.gap = '20px';
  
  // Add fallback news items
  BUSINESS_NEWS_FALLBACK.forEach(item => {
    const newsCard = createNewsCard(item);
    newsGrid.appendChild(newsCard);
  });
  
  // Replace or add grid to container
  const existingGrid = container.querySelector('.news-grid');
  if (existingGrid) {
    container.replaceChild(newsGrid, existingGrid);
  } else {
    container.appendChild(newsGrid);
  }
  
  // Business news fallback notification has been removed as requested
}

// Helper function to create a news card
function createNewsCard(item) {
  const card = document.createElement('div');
  card.className = 'news-card';
  card.style.border = '1px solid #e0e0e0';
  card.style.borderRadius = '8px';
  card.style.overflow = 'hidden';
  card.style.boxShadow = '0 2px 4px rgba(0,0,0,0.1)';
  card.style.display = 'flex';
  card.style.flexDirection = 'column';
  card.style.height = '100%';
  
  // Extract image if available (different parsing for RSS)
  let imageUrl = '';
  const imgMatch = item.description?.match(/<img[^>]+src="([^">\']+)"/i);
  if (imgMatch && imgMatch[1]) {
    imageUrl = imgMatch[1];
  }
  
  // For RSS feeds with media:content or enclosure tags
  if (!imageUrl) {
    const mediaContent = item.querySelector?.('media\\:content, media\\:thumbnail, enclosure');
    if (mediaContent && mediaContent.getAttribute('url')) {
      imageUrl = mediaContent.getAttribute('url');
    }
  }
  
  // Create image container if image available
  if (imageUrl) {
    const imageContainer = document.createElement('div');
    imageContainer.style.height = '180px';
    imageContainer.style.overflow = 'hidden';
    
    const image = document.createElement('img');
    image.src = imageUrl;
    image.alt = item.title;
    image.style.width = '100%';
    image.style.height = '100%';
    image.style.objectFit = 'cover';
    
    imageContainer.appendChild(image);
    card.appendChild(imageContainer);
  }
  
  // Create content container
  const contentContainer = document.createElement('div');
  contentContainer.style.padding = '16px';
  contentContainer.style.flex = '1';
  contentContainer.style.display = 'flex';
  contentContainer.style.flexDirection = 'column';
  
  // Add title
  const title = document.createElement('h3');
  title.style.fontSize = '18px';
  title.style.fontWeight = '600';
  title.style.marginTop = '0';
  title.style.marginBottom = '8px';
  title.textContent = item.title;
  contentContainer.appendChild(title);
  
  // Add date
  const date = document.createElement('p');
  date.style.fontSize = '14px';
  date.style.color = '#666';
  date.style.margin = '0 0 10px 0';
  
  const pubDate = new Date(item.pubDate);
  date.textContent = pubDate.toLocaleDateString('en-GB', {
    day: 'numeric',
    month: 'long',
    year: 'numeric'
  });
  contentContainer.appendChild(date);
  
  // Add description snippet
  const description = document.createElement('p');
  description.style.fontSize = '14px';
  description.style.margin = '0 0 16px 0';
  description.style.flex = '1';
  
  // Strip HTML and limit to 100 characters
  const tempDiv = document.createElement('div');
  tempDiv.innerHTML = item.description;
  const textContent = tempDiv.textContent || tempDiv.innerText || '';
  description.textContent = textContent.substring(0, 100) + (textContent.length > 100 ? '...' : '');
  
  contentContainer.appendChild(description);
  
  // Add read more link
  const linkContainer = document.createElement('div');
  linkContainer.style.marginTop = 'auto';
  
  const link = document.createElement('a');
  link.href = item.link;
  link.target = '_blank';
  link.rel = 'noopener noreferrer';
  link.textContent = 'Read More';
  link.className = 'news-read-more';
  link.style.display = 'inline-block';
  link.style.padding = '8px 16px';
  link.style.background = 'linear-gradient(to bottom, #555555, #333333, #222222)';
  link.style.color = '#fff';
  link.style.textDecoration = 'none';
  link.style.borderRadius = '4px';
  link.style.fontWeight = '500';
  
  link.addEventListener('mouseover', () => {
    link.style.background = 'linear-gradient(to bottom, #666666, #444444, #333333)';
  });
  
  link.addEventListener('mouseout', () => {
    link.style.background = 'linear-gradient(to bottom, #555555, #333333, #222222)';
  });
  
  linkContainer.appendChild(link);
  contentContainer.appendChild(linkContainer);
  card.appendChild(contentContainer);
  
  return card;
}

// Initialize news sections on page load
document.addEventListener('DOMContentLoaded', () => {
  // Check for news containers and load news if they exist
  const newsContainer = document.getElementById('news-container');
  const businessNewsContainer = document.getElementById('business-news-container');
  
  // Set up refresh button event listeners
  const refreshNewsButton = document.getElementById('refresh-news-button');
  const refreshBusinessNewsButton = document.getElementById('refresh-business-news-button');
  
  if (refreshNewsButton) {
    refreshNewsButton.addEventListener('click', () => {
      console.log('Refreshing news...');
      refreshNews();
    });
  }
  
  if (refreshBusinessNewsButton) {
    refreshBusinessNewsButton.addEventListener('click', () => {
      console.log('Refreshing business news...');
      refreshBusinessNews();
    });
  }
  
  // Debug information
  console.log('News feed setup with CORS proxy');
  console.log('News container found:', !!newsContainer);
  console.log('Business news container found:', !!businessNewsContainer);
  console.log('Refresh news button found:', !!refreshNewsButton);
  console.log('Refresh business news button found:', !!refreshBusinessNewsButton);
  
  if (newsContainer) {
    // Add small delay to let the page render first
    console.log('Initial news load');
    setTimeout(refreshNews, 500);
  } else {
    console.error('News container not found. Make sure there is an element with id="news-container" in your HTML');
  }
  
  if (businessNewsContainer) {
    // Add small delay to let the page render first
    console.log('Initial business news load');
    setTimeout(refreshBusinessNews, 500);
  } else {
    console.error('Business news container not found. Make sure there is an element with id="business-news-container" in your HTML');
  }
});
