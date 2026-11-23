<?php
require_once __DIR__ . '/config.php';
$page_title = 'Terms & Conditions' . ' | ' . BRAND;
$page_desc = 'Terms and conditions for using our ambulance booking and dispatch helpline and website.';
$page_canonical = '/terms-and-conditions.php';
include __DIR__ . '/header.php';
?>
<main style='background:var(--canvas);padding:clamp(120px,10vw,160px) clamp(20px,5vw,64px);max-width:800px;margin:0 auto'>
  <a href="/" class="back-btn" style="display:inline-block;margin-bottom:24px;color:var(--purple-600);font-weight:700;text-decoration:none">&larr; Back to Home</a>
  
  <h1 style="margin-bottom:32px;font-weight:900;font-size:clamp(32px,5vw,48px);color:var(--ink)">Terms & Conditions</h1>

  <h2 style="margin-top:32px;font-size:24px;color:var(--ink)">1. Acceptance of Terms</h2>
  <p style="font-size:16px;line-height:1.6;color:var(--ink-soft)">By accessing our website and utilizing our ambulance dispatch and connection services, you agree to comply with and be bound by these Terms & Conditions. If you disagree with any part of these terms, please do not use our services.</p>

  <h2 style="margin-top:32px;font-size:24px;color:var(--ink)">2. Nature of Service</h2>
  <p style="font-size:16px;line-height:1.6;color:var(--ink-soft)">We act as an aggregator and dispatch connection service. We connect patients with third-party independent ambulance operators. We do not directly own or operate the ambulances dispatched to you.</p>

  <h2 style="margin-top:32px;font-size:24px;color:var(--ink)">3. User Responsibilities</h2>
  <p style="font-size:16px;line-height:1.6;color:var(--ink-soft)">When requesting an ambulance, you must provide accurate and complete information regarding the patient's condition, location, and requirements. Misrepresentation of a medical condition may result in the wrong type of ambulance being dispatched.</p>

  <h2 style="margin-top:32px;font-size:24px;color:var(--ink)">4. Liability Limitation</h2>
  <p style="font-size:16px;line-height:1.6;color:var(--ink-soft)">While we strive to connect you with reliable ambulance partners in the shortest possible time, we are not liable for delays caused by traffic, weather, or operational constraints of the independent ambulance providers. We are also not liable for any medical outcomes or quality of care provided by the third-party medical staff on board.</p>

  <h2 style="margin-top:32px;font-size:24px;color:var(--ink)">5. Pricing and Payments</h2>
  <p style="font-size:16px;line-height:1.6;color:var(--ink-soft)">Fares are determined by distance, ambulance type, and current availability. The final fare is agreed upon between the user and the ambulance provider. We do not process payments directly unless explicitly stated during the booking process.</p>

  <h2 style="margin-top:32px;font-size:24px;color:var(--ink)">6. Amendments</h2>
  <p style="font-size:16px;line-height:1.6;color:var(--ink-soft)">We reserve the right to modify these terms at any time. Changes will be posted on this page, and your continued use of the service constitutes acceptance of the modified terms.</p>

  <a href="/" class="back-btn" style="display:inline-block;margin-top:40px;color:var(--purple-600);font-weight:700;text-decoration:none">&larr; Back to Home</a>
</main>
<?php include __DIR__ . '/footer.php'; ?>
