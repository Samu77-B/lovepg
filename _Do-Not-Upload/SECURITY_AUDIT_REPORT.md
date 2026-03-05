# Security Audit Report - Love Palmers Green Website
**Date:** January 14, 2026  
**Auditor:** Security Assessment  
**Website:** Love Palmers Green

---

## Executive Summary

This security audit evaluates the Love Palmers Green website for protection against malware, common web attacks, and PHP version compliance. The site demonstrates **good security practices** in many areas but has **critical issues** that need immediate attention.

**Overall Security Rating:** ⚠️ **MODERATE RISK** (with critical issues)

---

## 1. PHP Version Status

### Current Version
- **Installed:** PHP 8.2.12 (October 24, 2023)
- **Latest Available:** PHP 8.2.30 (December 18, 2025)
- **Status:** ⚠️ **OUTDATED - UPDATE REQUIRED**

### Security Implications
Your PHP version is **18 months behind** the latest release. Missing critical security patches including:
- **CVE-2025-1220**: Medium-severity improper input validation (fixed in 8.2.29)
- **CVE-2025-1217**: Medium-severity HTTP header parsing vulnerability (fixed in 8.2.28)
- **CVE-2025-1861**: Critical buffer size calculation vulnerability (fixed in 8.2.28)

### Recommendation
**URGENT:** Update PHP to version 8.2.30 immediately. PHP 8.2 will receive security updates until December 31, 2026.

---

## 2. Security Strengths ✅

### 2.1 Apache .htaccess Security Configuration
**Excellent protection implemented:**

- ✅ **Directory browsing disabled** - Prevents file structure exposure
- ✅ **Dangerous HTTP methods blocked** - Only GET, POST, HEAD allowed
- ✅ **Sensitive files protected** - Blocks access to .htaccess, .env, config files, backups
- ✅ **Query string injection protection** - Blocks script injection, GLOBALS exploits, base64 attacks
- ✅ **Malicious user agents blocked** - Prevents automated scanners
- ✅ **Security headers configured:**
  - X-Frame-Options: SAMEORIGIN (clickjacking protection)
  - X-XSS-Protection: 1; mode=block
  - X-Content-Type-Options: nosniff
  - Referrer-Policy: strict-origin-when-cross-origin
  - Permissions-Policy configured
  - X-Powered-By header removed

### 2.2 Upload Directory Protection
**Excellent upload security:**

- ✅ **PHP execution completely disabled** in `/images/uploads/`
- ✅ **All executable file types blocked** (.php, .cgi, .pl, .py, .sh, etc.)
- ✅ **Double extension attacks prevented** (e.g., image.jpg.php)
- ✅ **Proper content-type headers** set

### 2.3 Output Escaping
**Good practices observed:**

- ✅ **htmlspecialchars()** used consistently for output escaping
- ✅ **ENT_QUOTES** flag used (protects against quote injection)
- ✅ **UTF-8 encoding** specified
- ✅ **XML escaping** used in sitemap.php (ENT_XML1)

### 2.4 Database Security (Archive Files)
**Good practices in archived admin files:**

- ✅ **PDO with prepared statements** used (prevents SQL injection)
- ✅ **Parameterized queries** implemented correctly

---

## 3. Critical Security Issues 🔴

### 3.1 EXPOSED API KEY IN CLIENT-SIDE CODE
**Severity:** 🔴 **CRITICAL**

**Location:** `index.php` line 1169

```javascript
const API_KEY = '5qtycuykjsnu76gacakplr7chiaqfily7jcmshgf';
```

**Risk:**
- API key is visible to anyone viewing page source
- Can be stolen and used maliciously
- May result in API quota exhaustion or abuse
- Potential financial costs if API has usage limits

**Recommendation:**
- Move API key to server-side PHP file
- Create a proxy endpoint that makes API calls server-side
- Never expose API keys in client-side JavaScript

### 3.2 EXPOSED DATABASE CREDENTIALS IN ARCHIVE
**Severity:** 🟡 **MEDIUM** (in DO_NOT_UPLOAD folder, but still accessible)

**Location:** `DO_NOT_UPLOAD/archive/admin-backup/admin/config.php`

```php
define('DB_PASS', '$OYPnT75');
```

**Risk:**
- Database password exposed in source code
- Even in archive folder, files may be accessible if misconfigured

**Recommendation:**
- Ensure `DO_NOT_UPLOAD` folder is properly protected
- Consider removing sensitive credentials from archived files
- Use environment variables or secure config files outside web root

### 3.3 Missing Content Security Policy
**Severity:** 🟡 **MEDIUM**

**Location:** `.htaccess` line 136

The Content Security Policy (CSP) header is commented out:

```apache
# Header always set Content-Security-Policy "..."
```

**Risk:**
- Reduced protection against XSS attacks
- No control over resource loading

**Recommendation:**
- Uncomment and configure CSP header
- Test thoroughly to ensure site functionality
- Start with a restrictive policy and adjust as needed

### 3.4 HTTPS Not Enforced
**Severity:** 🟡 **MEDIUM**

**Location:** `.htaccess` lines 110-113

HTTPS redirect is commented out:

```apache
# RewriteCond %{HTTPS} off
# RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]
```

**Risk:**
- Data transmitted in plain text
- Vulnerable to man-in-the-middle attacks
- SEO impact (search engines prefer HTTPS)

**Recommendation:**
- Enable HTTPS redirect once SSL certificate is configured
- Ensure all resources load over HTTPS

---

## 4. Moderate Security Concerns 🟡

### 4.1 User Input Validation
**Status:** Needs Review

**Findings:**
- `$_SERVER['HTTP_HOST']` and `$_SERVER['REQUEST_URI']` used without validation
- While output is escaped, input should be validated

**Recommendation:**
- Validate `HTTP_HOST` against whitelist
- Sanitize `REQUEST_URI` before use
- Consider using `filter_var()` for input validation

### 4.2 External API Calls
**Status:** Generally Safe

**Findings:**
- External API calls use `encodeURIComponent()` (good)
- Error handling implemented
- No server-side validation of API responses

**Recommendation:**
- Add server-side validation of API responses
- Implement rate limiting for API calls
- Consider caching API responses

### 4.3 Contact Form Security
**Status:** Needs Enhancement

**Findings:**
- Contact form in footer has no visible server-side handler
- No CSRF protection visible
- No input validation visible

**Recommendation:**
- Implement server-side form handler
- Add CSRF tokens
- Validate and sanitize all inputs
- Implement rate limiting to prevent spam

---

## 5. Security Best Practices Checklist

### ✅ Implemented
- [x] Directory browsing disabled
- [x] Dangerous HTTP methods blocked
- [x] Sensitive files protected
- [x] Query string injection protection
- [x] Malicious user agent blocking
- [x] Security headers configured
- [x] Upload directory secured
- [x] Output escaping implemented
- [x] Prepared statements used (in archived code)

### ❌ Missing or Needs Improvement
- [ ] PHP version updated to latest
- [ ] API keys moved to server-side
- [ ] Content Security Policy enabled
- [ ] HTTPS enforced
- [ ] CSRF protection on forms
- [ ] Input validation enhanced
- [ ] Rate limiting implemented
- [ ] Error logging configured (without exposing details)

---

## 6. Immediate Action Items (Priority Order)

### 🔴 CRITICAL (Fix Immediately)
1. **Update PHP to 8.2.30** - Addresses multiple security vulnerabilities
2. **Move API key to server-side** - Prevents key theft and abuse
3. **Remove/secure database credentials** - Ensure archive folder is protected

### 🟡 HIGH PRIORITY (Fix Within 1 Week)
4. **Enable Content Security Policy** - Additional XSS protection
5. **Enable HTTPS redirect** - Encrypt all traffic
6. **Implement CSRF protection** - Secure form submissions

### 🟢 MEDIUM PRIORITY (Fix Within 1 Month)
7. **Enhance input validation** - Validate all user inputs
8. **Implement rate limiting** - Prevent abuse
9. **Add error logging** - Monitor for security issues

---

## 7. Additional Recommendations

### 7.1 Regular Security Maintenance
- **Monthly:** Review security logs, check for PHP updates
- **Quarterly:** Full security audit, review access logs
- **Annually:** Penetration testing, security training

### 7.2 Monitoring
- Set up monitoring for failed login attempts
- Monitor API usage for anomalies
- Track file uploads for suspicious activity
- Monitor server logs for attack patterns

### 7.3 Backup Security
- Ensure backups are encrypted
- Store backups securely (not in web-accessible directories)
- Test backup restoration regularly

---

## 8. Conclusion

The Love Palmers Green website demonstrates **good security awareness** with comprehensive `.htaccess` protections and proper output escaping. However, **critical issues** exist that require immediate attention:

1. **Outdated PHP version** exposing the site to known vulnerabilities
2. **Exposed API key** in client-side code
3. **Missing security headers** (CSP, HTTPS enforcement)

**Overall Assessment:**
- **Server Configuration:** ⭐⭐⭐⭐ (4/5) - Excellent
- **Code Security:** ⭐⭐⭐ (3/5) - Good, but has critical issues
- **PHP Version:** ⭐⭐ (2/5) - Outdated
- **Overall:** ⭐⭐⭐ (3/5) - Moderate risk

**Recommendation:** Address critical issues immediately, then proceed with high-priority items. The site has a solid security foundation but needs updates and fixes to maintain protection.

---

## 9. Resources

- PHP Security: https://www.php.net/manual/en/security.php
- OWASP Top 10: https://owasp.org/www-project-top-ten/
- Content Security Policy: https://developer.mozilla.org/en-US/docs/Web/HTTP/CSP
- PHP Version Updates: https://www.php.net/supported-versions.php

---

**Report Generated:** January 14, 2026  
**Next Review Recommended:** February 14, 2026
