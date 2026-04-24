<?php
// Footer component - all files are in root directory, so no path prefix needed
$pathPrefix = '';
?>
<!-- Modern Footer Component -->
<footer style="background: #1a1a1a; color: #ffffff; padding: 60px 0 0 0;">
  <div style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
    <!-- Main Footer Content -->
    <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 40px; margin-bottom: 40px;">
      
      <!-- Company Information -->
      <div>
        <h3 style="font-size: 1.5em; font-weight: 700; margin-bottom: 20px; color: #ffffff;">Love Palmers Green</h3>
        <p style="color: #b0b0b0; line-height: 1.6; margin-bottom: 15px;">Building a stronger community through local business support and community engagement. Your trusted partner in Palmers Green development.</p>
        <p style="color: #b0b0b0; line-height: 1.6; margin-bottom: 20px;">Since 1992, we've been dedicated to supporting businesses and fostering community spirit in North London.</p>
      </div>
      
      <!-- Contact Information -->
      <div>
        <h3 style="font-size: 1.5em; font-weight: 700; margin-bottom: 20px; color: #ffffff;">Contact Us</h3>
        
        <div style="margin-bottom: 15px;">
          <div style="font-weight: 600; color: #ffffff; margin-bottom: 2px;">Address</div>
          <div style="color: #b0b0b0;">Palmers Green<br>London N13</div>
        </div>
        
        <div style="margin-bottom: 15px;">
          <div style="font-weight: 600; color: #ffffff; margin-bottom: 2px;">Working Hours</div>
          <div style="color: #b0b0b0;">9AM - 6PM, Mon to Fri</div>
        </div>
        
        <div style="margin-bottom: 15px;">
          <div style="font-weight: 600; color: #ffffff; margin-bottom: 2px;">Email</div>
          <a href="mailto:contact@lovepalmersgreen.com" style="color: #b0b0b0; text-decoration: none; transition: color 0.3s ease;">contact@lovepalmersgreen.com</a>
        </div>
      </div>
      
      <!-- Quick Links -->
      <div>
        <h3 style="font-size: 1.5em; font-weight: 700; margin-bottom: 20px; color: #ffffff;">Quick Links</h3>
        <ul style="list-style: none; padding: 0; margin: 0;">
          <li style="margin-bottom: 12px;"><a href="<?php echo $pathPrefix; ?>index.php" style="color: #b0b0b0; text-decoration: none; transition: color 0.3s ease;">Home</a></li>
          <li style="margin-bottom: 12px;"><a href="<?php echo $pathPrefix; ?>our-vision.php" style="color: #b0b0b0; text-decoration: none; transition: color 0.3s ease;">Our Vision</a></li>
          <li style="margin-bottom: 12px;"><a href="<?php echo $pathPrefix; ?>the-commitee.php" style="color: #b0b0b0; text-decoration: none; transition: color 0.3s ease;">Committee</a></li>
          <li style="margin-bottom: 12px;"><a href="<?php echo $pathPrefix; ?>history.php" style="color: #b0b0b0; text-decoration: none; transition: color 0.3s ease;">History</a></li>
      </div>
      
      <!-- Contact Form (replacing Newsletter Subscription) -->
      <div>
        <h3 style="font-size: 1.5em; font-weight: 700; margin-bottom: 20px; color: #ffffff;">Contact us</h3>
        <p style="color: #b0b0b0; line-height: 1.6; margin-bottom: 20px;">Feel free to contact us with your questions about Palmers Green business, ideas or suggestions.</p>
        <!-- Plain HTML form – submits directly to Formspree (no AJAX). Works reliably when site is live. -->
        <div id="footer-form-wrapper">
          <form id="footer-contact-form" style="background: transparent; border-radius: 10px; padding: 24px 16px; box-shadow: none; display: flex; flex-direction: column; gap: 14px;" method="POST" action="https://formspree.io/f/mreallvr">
            <input type="hidden" name="_next" id="footer-form-next" value="">
            <div style="display: flex; gap: 10px;">
              <input type="text" name="first_name" placeholder="First" required style="flex: 1; padding: 10px; border: 1px solid #bbb; border-radius: 5px; font-size: 1em; background: transparent; color: #fff;::placeholder{color:#ccc;}">
              <input type="text" name="last_name" placeholder="Last" required style="flex: 1; padding: 10px; border: 1px solid #bbb; border-radius: 5px; font-size: 1em; background: transparent; color: #fff;::placeholder{color:#ccc;}">
            </div>
            <input type="email" name="email" placeholder="Email" required style="padding: 10px; border: 1px solid #bbb; border-radius: 5px; font-size: 1em; background: transparent; color: #fff;::placeholder{color:#ccc;}">
            <input type="text" name="subject" placeholder="Subject" required style="padding: 10px; border: 1px solid #bbb; border-radius: 5px; font-size: 1em; background: transparent; color: #fff;::placeholder{color:#ccc;}">
            <textarea name="message" placeholder="Your message" required style="padding: 10px; border: 1px solid #bbb; border-radius: 5px; font-size: 1em; min-height: 60px; background: transparent; color: #fff;::placeholder{color:#ccc;}"></textarea>
            <button type="submit" style="background: #8bc34a; color: #fff; border: none; border-radius: 5px; padding: 10px 0; font-size: 1em; font-weight: 600; cursor: pointer; margin-top: 8px;">Submit</button>
          </form>
          <div id="footer-form-thanks" style="display: none; padding: 24px 16px; border-radius: 10px; background: #4caf50; color: #fff; font-size: 1.1em;">Thank you for your message. We'll be in touch soon.</div>
        </div>
        <script>
        (function() {
            var next = document.getElementById('footer-form-next');
            if (next && typeof window !== 'undefined' && window.location) {
                next.value = window.location.href.split('#')[0] + '#form-sent';
            }
            if (window.location.hash === '#form-sent') {
                var form = document.getElementById('footer-contact-form');
                var thanks = document.getElementById('footer-form-thanks');
                if (form) { form.style.display = 'none'; form.reset(); }
                if (thanks) thanks.style.display = 'block';
            }
        })();
        </script>
      </div>
    </div>
    
    <!-- Logo Section -->
    <div style="text-align: center; margin-bottom: 30px; padding: 20px 0; border-top: 1px solid #333333;">
      <img src="<?php echo $pathPrefix; ?>images/LPG_2025_Long_logo_White03.png" loading="lazy" width="278" alt="Love Palmers Green" style="max-width: 100%; height: auto;">
    </div>
  </div>
  
  <!-- Bottom Bar -->
  <div style="background: #111111; padding: 20px 0; border-top: 1px solid #333333;">
    <div style="max-width: 1200px; margin: 0 auto; padding: 0 20px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 20px;">
      <div style="color: #b0b0b0; font-size: 14px;">© <?php echo date('Y'); ?> Love Palmers Green. All rights reserved.</div>
      
      <div style="display: flex; gap: 20px; flex-wrap: wrap;">
        <a href="<?php echo $pathPrefix; ?>privacy-policy.php" style="color: #b0b0b0; text-decoration: none; font-size: 14px; transition: color 0.3s ease;">Privacy Policy</a>
        <a href="<?php echo $pathPrefix; ?>terms-of-service.php" style="color: #b0b0b0; text-decoration: none; font-size: 14px; transition: color 0.3s ease;">Terms of Service</a>
        <a href="<?php echo $pathPrefix; ?>cookie-policy.php" style="color: #b0b0b0; text-decoration: none; font-size: 14px; transition: color 0.3s ease;">Cookie Policy</a>
      </div>
    </div>
    
    <!-- Website Design Credit -->
    <div style="max-width: 1200px; margin: 0 auto; padding: 10px 20px 0 20px; text-align: center; border-top: 1px solid #333333;">
      <div style="color: #b0b0b0; font-size: 12px;">
        Website design, build and maintained by <a href="https://paradigmstudio.net/" target="_blank" style="color: #8bc34a; text-decoration: none; transition: color 0.3s ease;">paradigmstudio.net</a>
      </div>
    </div>
  </div>
</footer>

<!-- Footer Responsive Styles -->
<style>
  @media (max-width: 991px) {
    footer div[style*='grid-template-columns'] {
      grid-template-columns: repeat(2, 1fr) !important;
      gap: 30px !important;
    }
  }
  @media (max-width: 600px) {
    footer div[style*='grid-template-columns'] {
      grid-template-columns: 1fr !important;
      gap: 20px !important;
    }
    footer div[style*='justify-content: space-between'] {
      flex-direction: column !important;
      text-align: center !important;
      gap: 15px !important;
    }
    footer h3,
    footer p,
    footer ul,
    footer li,
    footer input,
    footer button {
      text-align: left !important;
    }
    footer .fab,
    footer .fas {
      margin: 0 !important;
    }
    /* Stack newsletter input and button */
    footer div[style*='display: flex; margin-bottom: 15px;'] {
      flex-direction: column !important;
      gap: 8px !important;
    }
    footer input[type='email'] {
      border-radius: 8px !important;
      margin-bottom: 0 !important;
    }
    footer button {
      border-radius: 8px !important;
      width: 100% !important;
    }
    /* Logo section */
    footer div[style*='text-align: center; margin-bottom: 30px;'] {
      padding: 10px 0 !important;
    }
    /* Stack form name fields vertically on mobile */
    footer div[style*='display: flex; gap: 10px;'] {
      flex-direction: column !important;
      gap: 8px !important;
    }
    footer input[type='text'],
    footer input[type='email'],
    footer textarea {
      width: 100% !important;
      box-sizing: border-box !important;
    }
  }
  @media (max-width: 400px) {
    footer {
      padding: 30px 0 0 0 !important;
    }
    footer h3 {
      font-size: 1.1em !important;
    }
    footer p, footer li, footer a {
      font-size: 13px !important;
    }
  }
  /* Hover effects */
  footer a:hover {
    color: #8bc34a !important;
  }
  footer button:hover {
    background: #7cb342 !important;
  }
  footer .fab:hover {
    background: #8bc34a !important;
  }
</style>
