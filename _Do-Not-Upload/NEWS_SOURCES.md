# Loves Palmers Green - News System Documentation

## Overview

The news system fetches local news from Enfield Council and other North London news outlets about Enfield and Palmers Green. It displays both general local news and business news in tabbed sections on the website.

## News Sources

The system attempts to fetch news from the following sources in this order:

### Local News Sources
1. **Enfield Dispatch** (`https://enfielddispatch.co.uk/feed/`)
   - Independent news outlet covering Enfield and surrounding areas
   - Includes community events, local government news, and local stories

2. **Enfield Council** (`https://letstalk.enfield.gov.uk/feed`)
   - Official Enfield Council communications
   - Council news, consultations, and civic announcements

3. **This is Local London** (`https://www.thisislocallondon.co.uk/news/feed/`)
   - Local news coverage for the North London area
   - Includes Enfield, Palmers Green, and surrounding neighborhoods

4. **BBC London News** (`https://feeds.bbci.co.uk/news/uk/london/rss.xml`)
   - BBC's coverage of London and Greater London area
   - Broader London coverage including North London news

### Business News Sources
- Same as above with filtering for business-related content

## How It Works

### 1. News Fetching Process

The system uses a **multi-source fallback approach**:

```
Try Enfield Dispatch
    ↓ (if fails or no relevant news)
Try Enfield Council
    ↓ (if fails or no relevant news)
Try This is Local London
    ↓ (if fails or no relevant news)
Try BBC London
    ↓ (if all fail)
Use Local Fallback Data
```

### 2. Content Filtering

The system filters news items to ensure relevance:

**For Local News:**
- Searches for keywords: "enfield", "palmers green", "north london", "green lanes"

**For Business News:**
- Searches for keywords: "business", "market", "shop", "enfield", "palmers green", "economic", "entrepreneur", "commerce"

### 3. Fallback System

If all external sources fail or no relevant news is found, the system displays locally-cached fallback data. This ensures the news section always displays content to visitors.

## Files Involved

### JavaScript Files
- **`js/news.js`** - Main news fetching and display logic
  - `refreshNews()` - Fetches and displays local news
  - `refreshBusinessNews()` - Fetches and displays business news
  - `createNewsCard()` - Creates HTML cards for news items
  - `displayFallbackNews()` - Shows cached fallback news

### HTML Elements (in `index.php`)
- `#news-container` - Displays local news
- `#business-news-container` - Displays business news
- Tabs for switching between local and business news

## Configuration

### Adding New News Sources

To add a new news source, edit `js/news.js` and add it to the `NEWS_SOURCES` object:

```javascript
const NEWS_SOURCES = {
  your_source: 'https://example.com/feed.xml',
  // ... other sources
};
```

Then add it to the `sourcesToTry` array in `refreshNews()` or `refreshBusinessNews()`:

```javascript
const sourcesToTry = [
  { name: 'Your Source', url: NEWS_SOURCES.your_source },
  // ... other sources
];
```

### Updating Fallback Data

Edit the `LOCAL_NEWS_FALLBACK` or `BUSINESS_NEWS_FALLBACK` arrays in `js/news.js` to update the default news items shown when external feeds are unavailable.

## CORS Handling

The system uses the **allorigins.win** CORS proxy to fetch RSS feeds:
```
https://api.allorigins.win/raw?url=ENCODED_FEED_URL
```

This allows the website to fetch RSS feeds from external sources without CORS errors.

## Browser Console Debugging

Open browser Developer Tools (F12) and check the Console tab to see:
- Which news sources are being tried
- Success/failure messages for each source
- How many relevant news items were found
- Any parsing errors

Example console output:
```
Attempting to fetch news from Enfield and local news sources...
Trying to fetch from Enfield Dispatch...
Found 4 relevant news items from Enfield Dispatch
Initial news load
```

## Performance Notes

- Each news fetch attempt has an 8-second timeout
- The system tries sources sequentially (not in parallel) to reduce server load
- News cards are limited to 6 items per section to keep the page lightweight
- Images from news feeds are optional and handled gracefully

## Mobile Responsiveness

The news grid is responsive:
- **Desktop**: 2-column grid layout
- **Mobile**: Single column layout (see `index.php` for media queries)

## Troubleshooting

### No News Appearing
1. Check browser console (F12) for error messages
2. Verify your internet connection
3. The fallback data should display if external sources fail

### Refresh Button Not Working
- Click the "Refresh All News" button to manually reload news from sources
- This button calls `refreshNews()` and `refreshBusinessNews()`

### News from Wrong Location
- Check browser console to see which source provided the news
- Verify the source is still providing relevant content
- Consider adjusting filtering keywords in the code

## Future Enhancements

Potential improvements to consider:
1. Add a backend PHP script to cache news data and reduce client-side CORS issues
2. Implement pagination for more news items
3. Add search/filter functionality
4. Include news source attribution and publish dates
5. Add social media news sources (Twitter, Facebook official feeds)
