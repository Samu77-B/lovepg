# Pre-Upload Checklist
**Date:** January 14, 2026  
**Website:** Love Palmers Green

---

## ✅ Ready to Upload - Pre-Flight Checklist

Before uploading to your host, please verify the following:

---

## 📋 Pre-Upload Checklist

### 1. ✅ File Structure
All new files have been created:
- ✅ `config-secure.php` - Secure configuration
- ✅ `api/rss-proxy.php` - RSS API proxy
- ✅ `api/contact-handler.php` - Contact form handler
- ✅ `includes/csrf.php` - CSRF protection
- ✅ `api/.htaccess` - API directory protection
- ✅ `includes/.htaccess` - Includes directory protection
- ✅ `.htaccess` - Updated with new security rules

### 2. ⚠️ Configuration Updates Needed

#### A. Contact Form Email Address
**File:** `api/contact-handler.php`  
**Line:** ~87  
**Action:** Verify/Update the email address

```php
$to = 'contact@lovepalmersgreen.com'; // Update if needed
```

**Current:** `contact@lovepalmersgreen.com`  
**Action:** Verify this is the correct email address for receiving contact form submissions

---

#### B. Allowed Domains (Optional)
**File:** `config-secure.php`  
**Line:** ~20  
**Action:** Add your production domain if not already listed

```php
$allowedHosts = [
    'lovepalmersgreen.com',
    'www.lovepalmersgreen.com',
    // Add your actual domain here
];
```

**Current:** Already includes common domains  
**Action:** Add your specific domain if different

---

#### C. CORS Origins (Optional)
**File:** `api/rss-proxy.php`  
**Line:** ~25  
**Action:** Add your production domain if not already listed

```php
$allowedOrigins = [
    'https://lovepalmersgreen.com',
    'https://www.lovepalmersgreen.com',
    // Add your actual domain here
];
```

**Current:** Already includes common domains  
**Action:** Add your specific domain if different

---

### 3. 🔒 Security Considerations

#### A. PHP Version Checker
**File:** `check-php-version.php`  
**Action:** ⚠️ **IMPORTANT** - Delete this file after checking PHP version

**Reason:** Diagnostic tools should not remain on production servers

**When to delete:** After you've checked your PHP version on the server

---

#### B. File Permissions
**Recommended Permissions:**
- Directories: `755` or `750`
- PHP files: `644` or `640`
- `.htaccess` files: `644`

**Action:** Set appropriate permissions after upload

---

### 4. 🧪 Testing After Upload

#### A. Test RSS Feeds
1. Visit your homepage
2. Check if news feeds load correctly
3. Click refresh button
4. Verify no JavaScript errors in browser console

**Expected:** News items should load from RSS feeds

---

#### B. Test Contact Form
1. Scroll to footer
2. Fill out contact form
3. Submit form
4. Verify success message appears
5. Check email inbox for submission

**Expected:** Form submits successfully and email is received

---

#### C. Test HTTPS Redirect
1. Try accessing site via HTTP: `http://yourdomain.com`
2. Should automatically redirect to HTTPS
3. Verify SSL certificate is valid

**Expected:** Automatic redirect to HTTPS (if SSL is configured)

---

#### D. Verify Security Headers
Use online tool: https://securityheaders.com/

**Expected:** Good security score with CSP, X-Frame-Options, etc.

---

### 5. 📁 Upload Instructions

#### Files to Upload:
```
public_html/
├── api/
│   ├── .htaccess (NEW)
│   ├── rss-proxy.php (NEW)
│   └── contact-handler.php (NEW)
├── includes/
│   ├── .htaccess (NEW)
│   └── csrf.php (NEW)
├── config-secure.php (NEW)
├── check-php-version.php (NEW - DELETE AFTER USE)
├── .htaccess (UPDATED)
├── index.php (UPDATED)
├── footer.php (UPDATED)
└── [all other existing files]
```

#### Upload Order (Recommended):
1. Upload new directories first: `api/`, `includes/`
2. Upload new files: `config-secure.php`, `csrf.php`, etc.
3. Upload updated files: `index.php`, `footer.php`, `.htaccess`
4. Test functionality
5. Delete `check-php-version.php` after checking PHP version

---

### 6. ⚠️ Important Notes

#### A. PHP Version
- **Current:** PHP 8.2.12 (outdated)
- **Required:** PHP 8.2.30+ recommended
- **Action:** Contact hosting provider to update PHP version

**After upload:** Visit `check-php-version.php` to verify version

---

#### B. SSL Certificate
- HTTPS redirect is now enabled
- **Action:** Ensure SSL certificate is properly configured
- If SSL is not configured, the redirect will cause issues

**To disable temporarily:** Comment out HTTPS redirect in `.htaccess` lines 110-115

---

#### C. Session Support
- CSRF protection requires PHP sessions
- **Action:** Ensure sessions are enabled on your server (usually default)

**Check:** Sessions should work automatically on most hosts

---

#### D. Email Configuration
- Contact form uses PHP `mail()` function
- **Action:** Verify mail server is configured on your host

**Alternative:** If mail() doesn't work, consider using SMTP library (PHPMailer)

---

### 7. 🐛 Troubleshooting

#### If RSS Feeds Don't Load:
1. Check browser console for errors
2. Verify `api/rss-proxy.php` is accessible
3. Check file permissions (should be 644)
4. Verify `.htaccess` in `api/` directory exists

#### If Contact Form Doesn't Work:
1. Check browser console for errors
2. Verify `api/contact-handler.php` is accessible
3. Check PHP error logs on server
4. Verify email address in `contact-handler.php`
5. Test if PHP `mail()` function works on your server

#### If HTTPS Redirect Causes Issues:
1. Temporarily disable redirect in `.htaccess`
2. Configure SSL certificate first
3. Re-enable redirect after SSL is working

---

### 8. ✅ Post-Upload Verification

After uploading, verify:

- [ ] Website loads correctly
- [ ] RSS feeds display news items
- [ ] Contact form submits successfully
- [ ] HTTPS redirect works (if SSL configured)
- [ ] No JavaScript errors in browser console
- [ ] Security headers are present (check with securityheaders.com)
- [ ] PHP version checked (via check-php-version.php)
- [ ] check-php-version.php deleted after use

---

## 🚀 You're Ready to Upload!

All security implementations are complete and ready for production. Follow the checklist above, and you'll be good to go!

**Remember:**
1. Update email address in `contact-handler.php` if needed
2. Test everything after upload
3. Delete `check-php-version.php` after checking PHP version
4. Contact hosting provider to update PHP version

---

**Good luck with your upload!** 🎉
