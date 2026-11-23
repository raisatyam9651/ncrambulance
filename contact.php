<?php
require_once __DIR__ . '/config.php';
$page_title = 'Contact Us | 24/7 Ambulance Helpline +91 7317564794' . ' | ' . BRAND;
$page_desc = 'Contact our 24/7 ambulance booking helpline by phone or WhatsApp for emergency, ICU, ventilator and patient transfer ambulances.';
$page_canonical = '/contact';
include __DIR__ . '/header.php';
?>
<main style="padding:clamp(60px,8vw,100px) clamp(20px,5vw,64px);max-width:1200px;margin:0 auto;min-height:60vh">
  <h1 style="margin:0 0 20px;font-size:clamp(32px,4vw,48px);font-weight:900;color:var(--ink)">Contact Us</h1>
  <p style="font-size:18px;color:var(--ink-soft);max-width:600px;margin-bottom:40px;">
    We're here to help 24/7. Whether you need immediate emergency assistance or have questions about our services, please reach out to us using the information below.
  </p>
  
  <div style="display:grid;grid-template-columns:repeat(auto-fit, minmax(300px, 1fr));gap:40px;">
    <!-- Contact Info -->
    <div style="background:var(--card);padding:32px;border-radius:24px;border:1px solid var(--line);box-shadow:var(--shadow-sm)">
      <h3 style="margin:0 0 24px;font-size:22px;font-weight:800;color:var(--ink)">Get in Touch</h3>
      
      <div style="display:flex;flex-direction:column;gap:24px;">
        <div style="display:flex;align-items:flex-start;gap:16px;">
          <div style="width:48px;height:48px;border-radius:12px;background:rgba(220,38,38,.1);color:#DC2626;display:flex;align-items:center;justify-content:center;flex:none;">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
          </div>
          <div>
            <p style="margin:0;font-size:13px;font-weight:700;color:var(--ink-muted);text-transform:uppercase;letter-spacing:0.05em;">24/7 Helpline</p>
            <a href="tel:+917317564794" style="font-size:18px;font-weight:800;color:var(--ink);text-decoration:none;">+91 7317564794</a>
          </div>
        </div>

        <div style="display:flex;align-items:flex-start;gap:16px;">
          <div style="width:48px;height:48px;border-radius:12px;background:rgba(16,185,129,.1);color:#10B981;display:flex;align-items:center;justify-content:center;flex:none;">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
          </div>
          <div>
            <p style="margin:0;font-size:13px;font-weight:700;color:var(--ink-muted);text-transform:uppercase;letter-spacing:0.05em;">WhatsApp</p>
            <a href="https://wa.me/917317564794" target="_blank" style="font-size:18px;font-weight:800;color:var(--ink);text-decoration:none;">Message Us</a>
          </div>
        </div>

        <div style="display:flex;align-items:flex-start;gap:16px;">
          <div style="width:48px;height:48px;border-radius:12px;background:rgba(139,92,246,.1);color:#8B5CF6;display:flex;align-items:center;justify-content:center;flex:none;">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
          </div>
          <div>
            <p style="margin:0;font-size:13px;font-weight:700;color:var(--ink-muted);text-transform:uppercase;letter-spacing:0.05em;">Head Office</p>
            <p style="margin:6px 0 0;font-size:15px;color:var(--ink);line-height:1.5;">
              Ground Floor, SupremeWork Co-working Space,<br>
              Plot No. 84, Institutional Area, Sector 32,<br>
              Gurugram, Haryana 122001
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<?php include __DIR__ . '/footer.php'; ?>
