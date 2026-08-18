<?php include '../../header.php'; ?>
<main style="background:var(--canvas);overflow-x:hidden">

  <section style="position:relative;padding:clamp(40px,6vw,72px) 0 clamp(90px,10vw,130px)">
    <div style="position:absolute;inset:0;overflow:hidden;pointer-events:none" aria-hidden="true">
      <div style="position:absolute;top:-140px;right:-120px;width:520px;height:520px;border-radius:50%;background:radial-gradient(circle at 30% 30%, rgba(139,92,246,.20), rgba(139,92,246,0) 70%)"></div>
      <div style="position:absolute;top:180px;left:-180px;width:460px;height:460px;border-radius:50%;background:radial-gradient(circle at 50% 50%, rgba(251,191,36,.18), rgba(251,191,36,0) 70%)"></div>
      <div style="position:absolute;inset:0;background-image:linear-gradient(rgba(26,17,71,.035) 1px, transparent 1px),linear-gradient(90deg, rgba(26,17,71,.035) 1px, transparent 1px);background-size:48px 48px;mask-image:radial-gradient(ellipse 70% 60% at 50% 30%, #000 40%, transparent 100%);-webkit-mask-image:radial-gradient(ellipse 70% 60% at 50% 30%, #000 40%, transparent 100%)"></div>
    </div>

    <div style="position:relative;max-width:1280px;margin:0 auto;padding:0 clamp(20px,5vw,64px);display:grid;grid-template-columns:repeat(auto-fit,minmax(min(440px,100%),1fr));gap:clamp(36px,5vw,64px);align-items:center">
      <div>
        <span style="display:inline-flex;align-items:center;gap:9px;padding:8px 16px;border-radius:999px;background:rgba(16,185,129,.10);color:#047857;font-size:13px;font-weight:700;letter-spacing:.02em">
          <span style="width:8px;height:8px;border-radius:50%;background:#10B981;animation:livepulse 2.4s ease-out infinite;flex:none"></span>
          Ambulances available now · 24Ã—7
        </span>

        <h1 style="margin:20px 0 0;font-weight:900;font-size:clamp(40px,5.6vw,72px);letter-spacing:-0.04em;line-height:0.98;text-wrap:balance;background:var(--grad-headline);-webkit-background-clip:text;background-clip:text;-webkit-text-fill-color:transparent;color:transparent">
          24/7 Ambulance Service in <span style="position:relative;display:inline-block">Greater Noida<img src="/assets/scribble-underline.svg" alt="" aria-hidden="true" style="position:absolute;left:0;bottom:-0.16em;width:100%;height:auto;pointer-events:none"></span>
        </h1>

        <p style="margin:26px 0 0;font-weight:600;font-size:clamp(17px,1.7vw,21px);line-height:1.45;color:var(--ink);text-wrap:pretty;max-width:34ch">
          Fast, reliable &amp; well-equipped ambulances across Delhi, Gurgaon, Noida, Ghaziabad &amp; Faridabad.
        </p>
        <p style="margin:14px 0 0;font-size:16px;line-height:1.65;color:var(--ink-soft);text-wrap:pretty;max-width:52ch">
          Get immediate ambulance assistance for emergency transfers, hospital admissions, patient transportation and critical care support â€” available 24 hours a day, 7 days a week.
        </p>

        <div style="display:flex;flex-wrap:wrap;gap:12px;margin-top:28px;align-items:center">
          <a href="{{ telHref }}" style="display:inline-flex;align-items:center;gap:10px;padding:18px 28px;border-radius:18px;background:linear-gradient(180deg,#EF4444 0%,#DC2626 100%);color:#fff;font-weight:800;font-size:17px;text-decoration:none;box-shadow:0 22px 50px -20px rgba(220,38,38,.9)" style-hover="transform:translateY(-2px);box-shadow:0 28px 60px -20px rgba(220,38,38,1)">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M6.6 3.5 4 4.6c-.9.4-1.3 1.4-1 2.3a17 17 0 0 0 11 11c.9.3 1.9-.1 2.3-1l1.1-2.6a1.5 1.5 0 0 0-.7-1.9l-2.6-1.3a1.5 1.5 0 0 0-1.8.4l-.9 1.1a12.6 12.6 0 0 1-4.9-4.9l1.1-.9a1.5 1.5 0 0 0 .4-1.8L8.5 4.2a1.5 1.5 0 0 0-1.9-.7Z"></path></svg>
            Call Ambulance Now
          </a>
          <a href="{{ waHref }}" target="_blank" rel="noopener" style="display:inline-flex;align-items:center;gap:10px;padding:18px 26px;border-radius:18px;background:#fff;border:1px solid rgba(16,185,129,.35);color:#047857;font-weight:700;font-size:17px;text-decoration:none;box-shadow:var(--shadow-sm)" style-hover="border-color:#10B981;transform:translateY(-2px);box-shadow:var(--shadow-md)">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.4 8.4 0 0 1-12.6 7.3L3 20.5l1.8-5.2A8.4 8.4 0 1 1 21 11.5Z"></path><path d="M8.8 8.6c.3-.7 1.4-.6 1.7 0l.5 1.1-.7.9c.5 1 1.2 1.7 2.2 2.2l.9-.7 1.1.5c.6.3.7 1.4 0 1.7-1.4.6-3.4-.3-4.6-1.5S8.2 10 8.8 8.6Z"></path></svg>
            WhatsApp Us
          </a>
          <a href="/#book" style="display:inline-flex;align-items:center;gap:6px;padding:12px 6px;font-weight:700;font-size:15px;color:var(--purple-600);text-decoration:none;border-bottom:1px solid rgba(124,58,237,.3)" style-hover="color:var(--purple-700)">
            Book an Ambulance
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12h15m-6-6 6 6-6 6"></path></svg>
          </a>
        </div>

        <div style="display:flex;flex-wrap:wrap;gap:8px;margin-top:30px">
          <span style="display:inline-flex;align-items:center;gap:7px;padding:8px 14px;border-radius:999px;background:#fff;border:1px solid var(--line);font-size:13px;font-weight:600;color:var(--ink-soft);box-shadow:var(--shadow-xs)"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="M12 7v5l3 2"></path></svg>24/7 Available</span>
          <span style="display:inline-flex;align-items:center;gap:7px;padding:8px 14px;border-radius:999px;background:#fff;border:1px solid var(--line);font-size:13px;font-weight:600;color:var(--ink-soft);box-shadow:var(--shadow-xs)"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#DC2626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17a8 8 0 1 1 16 0"></path><path d="m12 15 4-4"></path></svg>Quick Response</span>
          <span style="display:inline-flex;align-items:center;gap:7px;padding:8px 14px;border-radius:999px;background:#fff;border:1px solid var(--line);font-size:13px;font-weight:600;color:var(--ink-soft);box-shadow:var(--shadow-xs)"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="var(--purple-600)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="8" r="3"></circle><path d="M3 19a6 6 0 0 1 12 0"></path><path d="M16 6a3 3 0 0 1 0 6"></path></svg>Trained Staff</span>
          <span style="display:inline-flex;align-items:center;gap:7px;padding:8px 14px;border-radius:999px;background:#fff;border:1px solid var(--line);font-size:13px;font-weight:600;color:var(--ink-soft);box-shadow:var(--shadow-xs)"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="var(--purple-600)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m3 11 18-8-8 18-2-8-8-2Z"></path></svg>GPS-Enabled</span>
          <span style="display:inline-flex;align-items:center;gap:7px;padding:8px 14px;border-radius:999px;background:#fff;border:1px solid var(--line);font-size:13px;font-weight:600;color:var(--ink-soft);box-shadow:var(--shadow-xs)"><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#D97706" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 16.5V8.5a1 1 0 0 1 1-1h9v9"></path><path d="M13 10.5h3.6l3.4 3.6v2.4h-2.6"></path><circle cx="7.5" cy="17.5" r="2"></circle><circle cx="16.5" cy="17.5" r="2"></circle></svg>Multiple Ambulance Types</span>
        </div>
      </div>

      <div style="position:relative">
        <div style="position:relative;width:100%;aspect-ratio:4/3.4;border-radius:44px;overflow:hidden;box-shadow:var(--shadow-lg);background:var(--card)">
          <img id="hero-ambulance" src="/assets/hero_ambulance.jpg" alt="Ambulance Service in Greater Noida" style="width:100%;height:100%;object-fit:cover;display:block;">
        </div>
        <span style="position:absolute;top:20px;left:20px;display:inline-flex;align-items:center;gap:8px;padding:9px 16px;border-radius:999px;background:rgba(255,255,255,.92);backdrop-filter:blur(10px);font-size:13px;font-weight:700;color:#047857;box-shadow:var(--shadow-sm);pointer-events:none">
          <span style="width:8px;height:8px;border-radius:50%;background:#10B981;flex:none"></span>Dispatch desk online
        </span>
        <div style="position:absolute;right:clamp(-8px,-1vw,0px);bottom:-28px;width:min(320px,88%);background:var(--card);border:1px solid var(--line);border-radius:28px;padding:22px;box-shadow:var(--shadow-lg)">
          <p style="margin:0;font-size:12px;font-weight:700;letter-spacing:.12em;text-transform:uppercase;color:#DC2626">Need an ambulance now?</p>
          <p style="margin:8px 0 0;font-size:14px;color:var(--ink-muted)">Call our emergency helpline</p>
          <p style="margin:6px 0 0;font-size:clamp(20px,2.2vw,25px);font-weight:900;letter-spacing:-0.02em;color:var(--ink)">{{ phone }}</p>
          <a href="{{ telHref }}" style="margin-top:14px;display:flex;align-items:center;justify-content:center;gap:8px;padding:14px;border-radius:16px;background:linear-gradient(180deg,#EF4444 0%,#DC2626 100%);color:#fff;font-weight:800;font-size:16px;text-decoration:none;box-shadow:0 16px 34px -18px rgba(220,38,38,.85)" style-hover="transform:translateY(-1px)">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M6.6 3.5 4 4.6c-.9.4-1.3 1.4-1 2.3a17 17 0 0 0 11 11c.9.3 1.9-.1 2.3-1l1.1-2.6a1.5 1.5 0 0 0-.7-1.9l-2.6-1.3a1.5 1.5 0 0 0-1.8.4l-.9 1.1a12.6 12.6 0 0 1-4.9-4.9l1.1-.9a1.5 1.5 0 0 0 .4-1.8L8.5 4.2a1.5 1.5 0 0 0-1.9-.7Z"></path></svg>
            Call Now
          </a>
        </div>
      </div>
    </div>
  </section>

  <section id="book" style="position:relative;padding:0 0 clamp(56px,7vw,96px)">
    <div style="max-width:1200px;margin:0 auto;padding:0 clamp(20px,5vw,64px)">
      <div style="background:var(--card);border:1px solid var(--line);border-radius:44px;box-shadow:var(--shadow-lg);padding:clamp(24px,3.4vw,48px)">
        <div style="display:flex;flex-wrap:wrap;align-items:end;justify-content:space-between;gap:16px;margin-bottom:26px">
          <div>
            <span style="font-weight:700;font-size:13px;letter-spacing:.14em;text-transform:uppercase;color:var(--purple-600)">Booking Request</span>
            <h2 style="margin:8px 0 6px;font-weight:800;font-size:clamp(26px,3vw,36px);letter-spacing:-0.02em;line-height:1.1;color:var(--ink)">Book an Ambulance</h2>
            <p style="margin:0;font-size:15px;color:var(--ink-muted);max-width:46ch">Share a few details and our team will call you back. In an emergency, please call directly â€” it is always the fastest route.</p>
          </div>
          <span style="display:inline-flex;align-items:center;gap:8px;padding:9px 15px;border-radius:999px;background:rgba(16,185,129,.10);color:#047857;font-size:13px;font-weight:700">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"></circle><path d="M12 7v5l3 2"></path></svg>
            Requests answered 24Ã—7
          </span>
        </div>

        <sc-if value="{{ notSent }}" hint-placeholder-val="{{ true }}">
          <form onSubmit="{{ submitBooking }}" style="display:grid;gap:16px">
            <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(min(230px,100%),1fr));gap:16px">
              <label style="display:grid;gap:7px">
                <span style="font-size:13px;font-weight:700;color:var(--ink)">Patient Name</span>
                <input name="name" type="text" required placeholder="Full name" style="width:100%;box-sizing:border-box;padding:14px 16px;border:1px solid var(--line);border-radius:16px;background:var(--card);color:var(--ink);font-size:16px" style-focus="outline:none;border-color:var(--purple-400);box-shadow:0 0 0 4px rgba(139,92,246,.14)">
              </label>
              <label style="display:grid;gap:7px">
                <span style="font-size:13px;font-weight:700;color:var(--ink)">Mobile Number</span>
                <input name="mobile" type="tel" required placeholder="+91 7317564794" style="width:100%;box-sizing:border-box;padding:14px 16px;border:1px solid var(--line);border-radius:16px;background:var(--card);color:var(--ink);font-size:16px" style-focus="outline:none;border-color:var(--purple-400);box-shadow:0 0 0 4px rgba(139,92,246,.14)">
              </label>
              <label style="display:grid;gap:7px">
                <span style="font-size:13px;font-weight:700;color:var(--ink)">Pickup Location</span>
                <input name="pickup" type="text" required placeholder="Address, area or hospital" style="width:100%;box-sizing:border-box;padding:14px 16px;border:1px solid var(--line);border-radius:16px;background:var(--card);color:var(--ink);font-size:16px" style-focus="outline:none;border-color:var(--purple-400);box-shadow:0 0 0 4px rgba(139,92,246,.14)">
              </label>
              <label style="display:grid;gap:7px">
                <span style="font-size:13px;font-weight:700;color:var(--ink)">Drop Location</span>
                <input name="drop" type="text" placeholder="Hospital or destination" style="width:100%;box-sizing:border-box;padding:14px 16px;border:1px solid var(--line);border-radius:16px;background:var(--card);color:var(--ink);font-size:16px" style-focus="outline:none;border-color:var(--purple-400);box-shadow:0 0 0 4px rgba(139,92,246,.14)">
              </label>
              <label style="display:grid;gap:7px">
                <span style="font-size:13px;font-weight:700;color:var(--ink)">Ambulance Type</span>
                <select name="type" style="width:100%;box-sizing:border-box;padding:14px 16px;border:1px solid var(--line);border-radius:16px;background:var(--card);color:var(--ink);font-size:16px;appearance:none" style-focus="outline:none;border-color:var(--purple-400);box-shadow:0 0 0 4px rgba(139,92,246,.14)">
                  <option>Not sure â€” advise me</option>
                  <option>BLS Ambulance</option>
                  <option>ALS Ambulance</option>
                  <option>ICU Ambulance</option>
                  <option>Ventilator Ambulance</option>
                  <option>Cardiac Ambulance</option>
                  <option>Neonatal Ambulance</option>
                  <option>Patient Transfer Ambulance</option>
                  <option>Mortuary Ambulance</option>
                </select>
              </label>
              <label style="display:grid;gap:7px">
                <span style="font-size:13px;font-weight:700;color:var(--ink)">Date &amp; Time</span>
                <input name="when" type="datetime-local" style="width:100%;box-sizing:border-box;padding:13px 16px;border:1px solid var(--line);border-radius:16px;background:var(--card);color:var(--ink);font-size:16px" style-focus="outline:none;border-color:var(--purple-400);box-shadow:0 0 0 4px rgba(139,92,246,.14)">
              </label>
            </div>

            <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(min(230px,100%),1fr));gap:16px;align-items:start">
              <div style="display:grid;gap:7px">
                <span style="font-size:13px;font-weight:700;color:var(--ink)">Emergency or planned?</span>
                <div data-seg style="display:flex;gap:6px;padding:5px;background:var(--canvas);border:1px solid var(--line);border-radius:16px">
                  <label style="position:relative;flex:1;cursor:pointer">
                    <input type="radio" name="urgency" value="Emergency" checked>
                    <span style="display:flex;align-items:center;justify-content:center;gap:7px;padding:11px 8px;border-radius:12px;font-size:14px;font-weight:700;color:var(--ink-muted);transition:all 180ms var(--ease)"><span style="width:7px;height:7px;border-radius:50%;background:#DC2626"></span>Emergency</span>
                  </label>
                  <label style="position:relative;flex:1;cursor:pointer">
                    <input type="radio" name="urgency" value="Non-emergency">
                    <span style="display:flex;align-items:center;justify-content:center;gap:7px;padding:11px 8px;border-radius:12px;font-size:14px;font-weight:700;color:var(--ink-muted);transition:all 180ms var(--ease)"><span style="width:7px;height:7px;border-radius:50%;background:#10B981"></span>Non-emergency</span>
                  </label>
                </div>
              </div>
              <label style="display:grid;gap:7px;grid-column:span 2;min-width:0">
                <span style="font-size:13px;font-weight:700;color:var(--ink)">Additional Requirements <span style="font-weight:500;color:var(--ink-muted)">(optional)</span></span>
                <textarea name="notes" rows="2" placeholder="Oxygen, ventilator, stretcher, floor number, attendant travellingâ€¦" style="width:100%;box-sizing:border-box;padding:14px 16px;border:1px solid var(--line);border-radius:16px;background:var(--card);color:var(--ink);font-size:16px;resize:vertical" style-focus="outline:none;border-color:var(--purple-400);box-shadow:0 0 0 4px rgba(139,92,246,.14)"></textarea>
              </label>
            </div>

            <div style="display:flex;flex-wrap:wrap;gap:12px;align-items:center;margin-top:4px">
              <button type="submit" style="flex:1 1 240px;display:inline-flex;align-items:center;justify-content:center;gap:10px;padding:17px 26px;border:none;border-radius:18px;background:linear-gradient(180deg,#EF4444 0%,#DC2626 100%);color:#fff;font-weight:800;font-size:17px;cursor:pointer;box-shadow:0 20px 44px -20px rgba(220,38,38,.9)" style-hover="transform:translateY(-1px)">
                <svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M3 16.5V8.5a1 1 0 0 1 1-1h9v9"></path><path d="M13 10.5h3.6l3.4 3.6v2.4h-2.6"></path><circle cx="7.5" cy="17.5" r="2"></circle><circle cx="16.5" cy="17.5" r="2"></circle></svg>
                Request Ambulance
              </button>
              <a href="{{ telHref }}" style="flex:0 1 auto;display:inline-flex;align-items:center;justify-content:center;gap:9px;padding:17px 24px;border-radius:18px;border:1px solid var(--ink);color:var(--ink);font-weight:700;font-size:16px;text-decoration:none" style-hover="background:rgba(26,17,71,.04);transform:translateY(-1px)">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M6.6 3.5 4 4.6c-.9.4-1.3 1.4-1 2.3a17 17 0 0 0 11 11c.9.3 1.9-.1 2.3-1l1.1-2.6a1.5 1.5 0 0 0-.7-1.9l-2.6-1.3a1.5 1.5 0 0 0-1.8.4l-.9 1.1a12.6 12.6 0 0 1-4.9-4.9l1.1-.9a1.5 1.5 0 0 0 .4-1.8L8.5 4.2a1.5 1.5 0 0 0-1.9-.7Z"></path></svg>
                Call Now
              </a>
              <a href="{{ waHref }}" target="_blank" rel="noopener" style="flex:0 1 auto;display:inline-flex;align-items:center;justify-content:center;gap:9px;padding:17px 24px;border-radius:18px;border:1px solid rgba(16,185,129,.4);color:#047857;font-weight:700;font-size:16px;text-decoration:none" style-hover="border-color:#10B981;background:rgba(16,185,129,.06);transform:translateY(-1px)">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.4 8.4 0 0 1-12.6 7.3L3 20.5l1.8-5.2A8.4 8.4 0 1 1 21 11.5Z"></path></svg>
                WhatsApp Booking
              </a>
            </div>
            <p style="margin:2px 0 0;font-size:12px;color:var(--ink-muted)">Your details are used only to arrange this ambulance request. <span style="color:var(--ink-muted)">[Demo form â€” connect to your CRM or WhatsApp API]</span></p>
          </form>
        </sc-if>

        <sc-if value="{{ sent }}" hint-placeholder-val="{{ false }}">
          <div style="display:flex;flex-wrap:wrap;align-items:center;gap:20px;padding:28px;border-radius:32px;background:rgba(16,185,129,.07);border:1px solid rgba(16,185,129,.25)">
            <span style="width:56px;height:56px;border-radius:20px;background:#10B981;display:grid;place-items:center;flex:none">
              <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="m5 13 4 4 10-10"></path></svg>
            </span>
            <div style="flex:1 1 260px">
              <h3 style="margin:0;font-size:22px;font-weight:800;letter-spacing:-0.01em;color:var(--ink)">Request received</h3>
              <p style="margin:6px 0 0;font-size:15px;color:var(--ink-soft)">Our dispatch team will call you back on the number you shared. If this is an emergency, please call the helpline now â€” it is always faster.</p>
            </div>
            <div style="display:flex;gap:10px;flex-wrap:wrap">
              <a href="{{ telHref }}" style="display:inline-flex;align-items:center;gap:8px;padding:14px 22px;border-radius:16px;background:linear-gradient(180deg,#EF4444 0%,#DC2626 100%);color:#fff;font-weight:700;text-decoration:none;box-shadow:0 16px 34px -18px rgba(220,38,38,.85)">Call {{ phone }}</a>
              <button type="button" onClick="{{ resetBooking }}" style="padding:14px 20px;border-radius:16px;border:1px solid var(--line);background:var(--card);color:var(--ink-soft);font-weight:700;font-size:15px;cursor:pointer">New request</button>
            </div>
          </div>
        </sc-if>
      </div>
    </div>
  </section>

  <section style="padding:clamp(16px,2vw,24px) 0 clamp(56px,7vw,96px)">
    <div style="max-width:1200px;margin:0 auto;padding:0 clamp(20px,5vw,64px)">
      <div data-reveal style="display:grid;grid-template-columns:repeat(auto-fit,minmax(min(250px,100%),1fr));gap:clamp(14px,1.6vw,20px)">
        <div style="background:linear-gradient(180deg,#FFF5F5 0%,#FFFFFF 60%);border:1px solid rgba(220,38,38,.18);border-radius:32px;box-shadow:var(--shadow-sm);padding:28px;display:flex;flex-direction:column;gap:14px" style-hover="transform:translateY(-3px);box-shadow:var(--shadow-md)">
          <span style="width:52px;height:52px;border-radius:18px;background:rgba(220,38,38,.10);color:#DC2626;display:grid;place-items:center"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12h4l2-6 4 12 2-6h6"></path></svg></span>
          <h3 style="margin:0;font-size:20px;font-weight:800;letter-spacing:-0.01em;color:var(--ink)">Emergency Ambulance</h3>
          <p style="margin:0;font-size:15px;line-height:1.6;color:var(--ink-soft);flex:1">Immediate ambulance assistance for urgent medical situations.</p>
          <a href="{{ telHref }}" style="display:inline-flex;align-items:center;justify-content:center;gap:8px;padding:13px 18px;border-radius:14px;background:linear-gradient(180deg,#EF4444 0%,#DC2626 100%);color:#fff;font-weight:700;font-size:15px;text-decoration:none;box-shadow:0 14px 30px -18px rgba(220,38,38,.9)" style-hover="transform:translateY(-1px)">Call Now</a>
        </div>
        <div style="background:var(--card);border:1px solid var(--line);border-radius:32px;box-shadow:var(--shadow-sm);padding:28px;display:flex;flex-direction:column;gap:14px" style-hover="transform:translateY(-3px);box-shadow:var(--shadow-md);border-color:rgba(139,92,246,.35)">
          <span style="width:52px;height:52px;border-radius:18px;background:var(--purple-100);color:var(--purple-600);display:grid;place-items:center"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M4 21V8l8-4 8 4v13"></path><path d="M9 21v-5h6v5"></path><path d="M12 8v4M10 10h4"></path></svg></span>
          <h3 style="margin:0;font-size:20px;font-weight:800;letter-spacing:-0.01em;color:var(--ink)">Hospital Transfer</h3>
          <p style="margin:0;font-size:15px;line-height:1.6;color:var(--ink-soft);flex:1">Safe patient transportation between hospitals.</p>
          <a href="/#book" style="display:inline-flex;align-items:center;justify-content:center;gap:8px;padding:13px 18px;border-radius:14px;border:1px solid var(--ink);color:var(--ink);font-weight:700;font-size:15px;text-decoration:none" style-hover="background:rgba(26,17,71,.04);transform:translateY(-1px)">Book Transfer</a>
        </div>
        <div style="background:var(--card);border:1px solid var(--line);border-radius:32px;box-shadow:var(--shadow-sm);padding:28px;display:flex;flex-direction:column;gap:14px" style-hover="transform:translateY(-3px);box-shadow:var(--shadow-md);border-color:rgba(139,92,246,.35)">
          <span style="width:52px;height:52px;border-radius:18px;background:rgba(16,185,129,.12);color:#047857;display:grid;place-items:center"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 18V7"></path><path d="M3 12h11a5 5 0 0 1 5 5v1"></path><circle cx="8" cy="9" r="1.6"></circle></svg></span>
          <h3 style="margin:0;font-size:20px;font-weight:800;letter-spacing:-0.01em;color:var(--ink)">Patient Transportation</h3>
          <p style="margin:0;font-size:15px;line-height:1.6;color:var(--ink-soft);flex:1">Comfortable transportation for non-emergency patients.</p>
          <a href="/#book" style="display:inline-flex;align-items:center;justify-content:center;gap:8px;padding:13px 18px;border-radius:14px;border:1px solid var(--ink);color:var(--ink);font-weight:700;font-size:15px;text-decoration:none" style-hover="background:rgba(26,17,71,.04);transform:translateY(-1px)">Book Ambulance</a>
        </div>
        <div style="background:var(--card);border:1px solid var(--line);border-radius:32px;box-shadow:var(--shadow-sm);padding:28px;display:flex;flex-direction:column;gap:14px" style-hover="transform:translateY(-3px);box-shadow:var(--shadow-md);border-color:rgba(139,92,246,.35)">
          <span style="width:52px;height:52px;border-radius:18px;background:var(--gold-100);color:#B45309;display:grid;place-items:center"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="13" rx="3"></rect><path d="M6 11h2.5l1.5-3 2 6 1.5-3H18"></path><path d="M9 21h6M12 17v4"></path></svg></span>
          <h3 style="margin:0;font-size:20px;font-weight:800;letter-spacing:-0.01em;color:var(--ink)">ICU / Critical Care</h3>
          <p style="margin:0;font-size:15px;line-height:1.6;color:var(--ink-soft);flex:1">Advanced life-support ambulance for critical patients.</p>
          <a href="/#book" style="display:inline-flex;align-items:center;justify-content:center;gap:8px;padding:13px 18px;border-radius:14px;border:1px solid var(--ink);color:var(--ink);font-weight:700;font-size:15px;text-decoration:none" style-hover="background:rgba(26,17,71,.04);transform:translateY(-1px)">Request ICU Ambulance</a>
        </div>
      </div>
    </div>
  </section>

  <section id="services" style="background:var(--card);padding:clamp(64px,9vw,120px) 0;border-top:1px solid var(--line);border-bottom:1px solid var(--line)">
    <div style="max-width:1200px;margin:0 auto;padding:0 clamp(20px,5vw,64px)">
      <div data-reveal style="display:flex;flex-wrap:wrap;align-items:end;justify-content:space-between;gap:24px;margin-bottom:clamp(30px,4vw,48px)">
        <div style="max-width:56ch">
          <span style="font-weight:700;font-size:13px;letter-spacing:.14em;text-transform:uppercase;color:var(--purple-600)">Ambulance Services</span>
          <h2 style="margin:10px 0 12px;font-weight:900;font-size:clamp(30px,4.2vw,52px);letter-spacing:-0.035em;line-height:1.02;text-wrap:balance;background:var(--grad-headline);-webkit-background-clip:text;background-clip:text;-webkit-text-fill-color:transparent;color:transparent">Complete Ambulance Services Across Greater Noida</h2>
          <p style="margin:0;font-size:17px;line-height:1.6;color:var(--ink-soft);text-wrap:pretty">From a basic patient shift to a ventilator-equipped critical care transfer â€” one helpline, the right ambulance dispatched for the patient's condition.</p>
        </div>
        <a href="{{ telHref }}" style="display:inline-flex;align-items:center;gap:9px;padding:15px 22px;border-radius:16px;border:1px solid var(--ink);color:var(--ink);font-weight:700;font-size:15px;text-decoration:none;white-space:nowrap" style-hover="background:rgba(26,17,71,.04);transform:translateY(-1px)">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M6.6 3.5 4 4.6c-.9.4-1.3 1.4-1 2.3a17 17 0 0 0 11 11c.9.3 1.9-.1 2.3-1l1.1-2.6a1.5 1.5 0 0 0-.7-1.9l-2.6-1.3a1.5 1.5 0 0 0-1.8.4l-.9 1.1a12.6 12.6 0 0 1-4.9-4.9l1.1-.9a1.5 1.5 0 0 0 .4-1.8L8.5 4.2a1.5 1.5 0 0 0-1.9-.7Z"></path></svg>
          Talk to dispatch
        </a>
      </div>

      <div data-reveal style="display:grid;grid-template-columns:repeat(auto-fit,minmax(min(272px,100%),1fr));gap:clamp(14px,1.6vw,20px)">
        <div style="background:var(--canvas);border:1px solid var(--line);border-radius:28px;padding:24px;display:flex;flex-direction:column;gap:12px;transition:all 180ms var(--ease)" style-hover="background:var(--card);transform:translateY(-3px);box-shadow:var(--shadow-md);border-color:rgba(220,38,38,.3)">
          <span style="width:46px;height:46px;border-radius:16px;background:rgba(220,38,38,.10);color:#DC2626;display:grid;place-items:center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 16.5V8.5a1 1 0 0 1 1-1h9v9"></path><path d="M13 10.5h3.6l3.4 3.6v2.4h-2.6"></path><circle cx="7.5" cy="17.5" r="2"></circle><circle cx="16.5" cy="17.5" r="2"></circle><path d="M6 11h4M8 9v4"></path></svg></span>
          <h3 style="margin:0;font-size:18px;font-weight:800;color:var(--ink)">Emergency Ambulance</h3>
          <p style="margin:0;font-size:14px;line-height:1.6;color:var(--ink-soft);flex:1">Rapid dispatch for accidents, cardiac events and sudden medical emergencies.</p>
          <a href="/#book" style="display:inline-flex;align-items:center;gap:6px;font-size:14px;font-weight:700;color:var(--purple-600);text-decoration:none">Book Now<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12h15m-6-6 6 6-6 6"></path></svg></a>
        </div>
        <div style="background:var(--canvas);border:1px solid var(--line);border-radius:28px;padding:24px;display:flex;flex-direction:column;gap:12px;transition:all 180ms var(--ease)" style-hover="background:var(--card);transform:translateY(-3px);box-shadow:var(--shadow-md);border-color:rgba(139,92,246,.35)">
          <span style="width:46px;height:46px;border-radius:16px;background:var(--purple-100);color:var(--purple-600);display:grid;place-items:center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="13" rx="3"></rect><path d="M6 11h2.5l1.5-3 2 6 1.5-3H18"></path><path d="M9 21h6M12 17v4"></path></svg></span>
          <h3 style="margin:0;font-size:18px;font-weight:800;color:var(--ink)">ICU Ambulance</h3>
          <p style="margin:0;font-size:14px;line-height:1.6;color:var(--ink-soft);flex:1">ICU-level equipment and a critical care team for unstable patients.</p>
          <a href="/#book" style="display:inline-flex;align-items:center;gap:6px;font-size:14px;font-weight:700;color:var(--purple-600);text-decoration:none">Book Now<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12h15m-6-6 6 6-6 6"></path></svg></a>
        </div>
        <div style="background:var(--canvas);border:1px solid var(--line);border-radius:28px;padding:24px;display:flex;flex-direction:column;gap:12px;transition:all 180ms var(--ease)" style-hover="background:var(--card);transform:translateY(-3px);box-shadow:var(--shadow-md);border-color:rgba(139,92,246,.35)">
          <span style="width:46px;height:46px;border-radius:16px;background:var(--purple-100);color:var(--purple-600);display:grid;place-items:center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12h4l2-6 4 12 2-6h6"></path></svg></span>
          <h3 style="margin:0;font-size:18px;font-weight:800;color:var(--ink)">ALS Ambulance</h3>
          <p style="margin:0;font-size:14px;line-height:1.6;color:var(--ink-soft);flex:1">Advanced life support with cardiac monitoring and emergency medicines.</p>
          <a href="/#book" style="display:inline-flex;align-items:center;gap:6px;font-size:14px;font-weight:700;color:var(--purple-600);text-decoration:none">Book Now<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12h15m-6-6 6 6-6 6"></path></svg></a>
        </div>
        <div style="background:var(--canvas);border:1px solid var(--line);border-radius:28px;padding:24px;display:flex;flex-direction:column;gap:12px;transition:all 180ms var(--ease)" style-hover="background:var(--card);transform:translateY(-3px);box-shadow:var(--shadow-md);border-color:rgba(139,92,246,.35)">
          <span style="width:46px;height:46px;border-radius:16px;background:var(--purple-100);color:var(--purple-600);display:grid;place-items:center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3 5 6v6c0 4.4 3 7.6 7 9 4-1.4 7-4.6 7-9V6l-7-3Z"></path><path d="M12 9v6M9 12h6"></path></svg></span>
          <h3 style="margin:0;font-size:18px;font-weight:800;color:var(--ink)">BLS Ambulance</h3>
          <p style="margin:0;font-size:14px;line-height:1.6;color:var(--ink-soft);flex:1">Basic life support with oxygen, stretcher and a trained attendant.</p>
          <a href="/#book" style="display:inline-flex;align-items:center;gap:6px;font-size:14px;font-weight:700;color:var(--purple-600);text-decoration:none">Book Now<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12h15m-6-6 6 6-6 6"></path></svg></a>
        </div>
        <div style="background:var(--canvas);border:1px solid var(--line);border-radius:28px;padding:24px;display:flex;flex-direction:column;gap:12px;transition:all 180ms var(--ease)" style-hover="background:var(--card);transform:translateY(-3px);box-shadow:var(--shadow-md);border-color:rgba(220,38,38,.3)">
          <span style="width:46px;height:46px;border-radius:16px;background:rgba(220,38,38,.10);color:#DC2626;display:grid;place-items:center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M20.5 8.5a4.6 4.6 0 0 0-8.5-2.4 4.6 4.6 0 0 0-8.5 2.4c0 4.6 8.5 10 8.5 10s8.5-5.4 8.5-10Z"></path><path d="M3.6 12h3.2l1.4-2.6 2 4.6 1.3-2.4h3"></path></svg></span>
          <h3 style="margin:0;font-size:18px;font-weight:800;color:var(--ink)">Cardiac Ambulance</h3>
          <p style="margin:0;font-size:14px;line-height:1.6;color:var(--ink-soft);flex:1">Cardiac monitoring and defibrillator support throughout the transfer.</p>
          <a href="/#book" style="display:inline-flex;align-items:center;gap:6px;font-size:14px;font-weight:700;color:var(--purple-600);text-decoration:none">Book Now<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12h15m-6-6 6 6-6 6"></path></svg></a>
        </div>
        <div style="background:var(--canvas);border:1px solid var(--line);border-radius:28px;padding:24px;display:flex;flex-direction:column;gap:12px;transition:all 180ms var(--ease)" style-hover="background:var(--card);transform:translateY(-3px);box-shadow:var(--shadow-md);border-color:rgba(139,92,246,.35)">
          <span style="width:46px;height:46px;border-radius:16px;background:var(--purple-100);color:var(--purple-600);display:grid;place-items:center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M4 8h9a3 3 0 1 0-3-3"></path><path d="M4 12h13a3 3 0 1 1-3 3"></path><path d="M4 16h6"></path></svg></span>
          <h3 style="margin:0;font-size:18px;font-weight:800;color:var(--ink)">Ventilator Ambulance</h3>
          <p style="margin:0;font-size:14px;line-height:1.6;color:var(--ink-soft);flex:1">Ventilator-equipped transport with trained medical staff on board.</p>
          <a href="/#book" style="display:inline-flex;align-items:center;gap:6px;font-size:14px;font-weight:700;color:var(--purple-600);text-decoration:none">Book Now<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12h15m-6-6 6 6-6 6"></path></svg></a>
        </div>
        <div style="background:var(--canvas);border:1px solid var(--line);border-radius:28px;padding:24px;display:flex;flex-direction:column;gap:12px;transition:all 180ms var(--ease)" style-hover="background:var(--card);transform:translateY(-3px);box-shadow:var(--shadow-md);border-color:rgba(139,92,246,.35)">
          <span style="width:46px;height:46px;border-radius:16px;background:rgba(245,124,90,.14);color:#C2410C;display:grid;place-items:center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="7" width="18" height="12" rx="4"></rect><path d="M8 7V5h8v2"></path><path d="M12 11v4M10 13h4"></path></svg></span>
          <h3 style="margin:0;font-size:18px;font-weight:800;color:var(--ink)">Neonatal Ambulance</h3>
          <p style="margin:0;font-size:14px;line-height:1.6;color:var(--ink-soft);flex:1">Incubator-equipped transport for newborns and infants.</p>
          <a href="/#book" style="display:inline-flex;align-items:center;gap:6px;font-size:14px;font-weight:700;color:var(--purple-600);text-decoration:none">Book Now<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12h15m-6-6 6 6-6 6"></path></svg></a>
        </div>
        <div style="background:var(--canvas);border:1px solid var(--line);border-radius:28px;padding:24px;display:flex;flex-direction:column;gap:12px;transition:all 180ms var(--ease)" style-hover="background:var(--card);transform:translateY(-3px);box-shadow:var(--shadow-md);border-color:rgba(139,92,246,.35)">
          <span style="width:46px;height:46px;border-radius:16px;background:rgba(16,185,129,.12);color:#047857;display:grid;place-items:center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 18V7"></path><path d="M3 12h11a5 5 0 0 1 5 5v1"></path><circle cx="8" cy="9" r="1.6"></circle></svg></span>
          <h3 style="margin:0;font-size:18px;font-weight:800;color:var(--ink)">Patient Transfer Ambulance</h3>
          <p style="margin:0;font-size:14px;line-height:1.6;color:var(--ink-soft);flex:1">Comfortable, planned transport for stable and recovering patients.</p>
          <a href="/#book" style="display:inline-flex;align-items:center;gap:6px;font-size:14px;font-weight:700;color:var(--purple-600);text-decoration:none">Book Now<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12h15m-6-6 6 6-6 6"></path></svg></a>
        </div>
        <div style="background:var(--canvas);border:1px solid var(--line);border-radius:28px;padding:24px;display:flex;flex-direction:column;gap:12px;transition:all 180ms var(--ease)" style-hover="background:var(--card);transform:translateY(-3px);box-shadow:var(--shadow-md);border-color:rgba(139,92,246,.35)">
          <span style="width:46px;height:46px;border-radius:16px;background:rgba(26,17,71,.06);color:var(--ink);display:grid;place-items:center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="8" width="18" height="11" rx="3"></rect><path d="M7 8V6a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v2"></path><path d="M12 11.5v4"></path></svg></span>
          <h3 style="margin:0;font-size:18px;font-weight:800;color:var(--ink)">Mortuary Ambulance</h3>
          <p style="margin:0;font-size:14px;line-height:1.6;color:var(--ink-soft);flex:1">Respectful freezer-box transport, handled with dignity and care.</p>
          <a href="/#book" style="display:inline-flex;align-items:center;gap:6px;font-size:14px;font-weight:700;color:var(--purple-600);text-decoration:none">Book Now<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12h15m-6-6 6 6-6 6"></path></svg></a>
        </div>
        <div style="background:var(--canvas);border:1px solid var(--line);border-radius:28px;padding:24px;display:flex;flex-direction:column;gap:12px;transition:all 180ms var(--ease)" style-hover="background:var(--card);transform:translateY(-3px);box-shadow:var(--shadow-md);border-color:rgba(139,92,246,.35)">
          <span style="width:46px;height:46px;border-radius:16px;background:var(--purple-100);color:var(--purple-600);display:grid;place-items:center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12 3 20l4-8-4-8 18 8Z"></path></svg></span>
          <h3 style="margin:0;font-size:18px;font-weight:800;color:var(--ink)">Airport Ambulance Transfer</h3>
          <p style="margin:0;font-size:14px;line-height:1.6;color:var(--ink-soft);flex:1">Coordinated pickup and drop for air-ambulance and flight connections.</p>
          <a href="/#book" style="display:inline-flex;align-items:center;gap:6px;font-size:14px;font-weight:700;color:var(--purple-600);text-decoration:none">Book Now<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12h15m-6-6 6 6-6 6"></path></svg></a>
        </div>
        <div style="background:var(--canvas);border:1px solid var(--line);border-radius:28px;padding:24px;display:flex;flex-direction:column;gap:12px;transition:all 180ms var(--ease)" style-hover="background:var(--card);transform:translateY(-3px);box-shadow:var(--shadow-md);border-color:rgba(139,92,246,.35)">
          <span style="width:46px;height:46px;border-radius:16px;background:var(--gold-100);color:#B45309;display:grid;place-items:center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="m3 11 18-8-8 18-2-8-8-2Z"></path></svg></span>
          <h3 style="margin:0;font-size:18px;font-weight:800;color:var(--ink)">Intercity Ambulance</h3>
          <p style="margin:0;font-size:14px;line-height:1.6;color:var(--ink-soft);flex:1">Long-distance transfers beyond NCR with a medical escort on board.</p>
          <a href="/#book" style="display:inline-flex;align-items:center;gap:6px;font-size:14px;font-weight:700;color:var(--purple-600);text-decoration:none">Book Now<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12h15m-6-6 6 6-6 6"></path></svg></a>
        </div>
        <div style="background:var(--canvas);border:1px solid var(--line);border-radius:28px;padding:24px;display:flex;flex-direction:column;gap:12px;transition:all 180ms var(--ease)" style-hover="background:var(--card);transform:translateY(-3px);box-shadow:var(--shadow-md);border-color:rgba(139,92,246,.35)">
          <span style="width:46px;height:46px;border-radius:16px;background:var(--purple-100);color:var(--purple-600);display:grid;place-items:center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M4 21V8l8-4 8 4v13"></path><path d="M9 21v-5h6v5"></path><path d="M12 8v4M10 10h4"></path></svg></span>
          <h3 style="margin:0;font-size:18px;font-weight:800;color:var(--ink)">Hospital-to-Hospital Transfer</h3>
          <p style="margin:0;font-size:14px;line-height:1.6;color:var(--ink-soft);flex:1">Planned shifting between hospitals anywhere across Greater Noida.</p>
          <a href="/#book" style="display:inline-flex;align-items:center;gap:6px;font-size:14px;font-weight:700;color:var(--purple-600);text-decoration:none">Book Now<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12h15m-6-6 6 6-6 6"></path></svg></a>
        </div>
        <div style="background:var(--canvas);border:1px solid var(--line);border-radius:28px;padding:24px;display:flex;flex-direction:column;gap:12px;transition:all 180ms var(--ease)" style-hover="background:var(--card);transform:translateY(-3px);box-shadow:var(--shadow-md);border-color:rgba(139,92,246,.35)">
          <span style="width:46px;height:46px;border-radius:16px;background:rgba(26,17,71,.06);color:var(--ink);display:grid;place-items:center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="5" y="3" width="14" height="13" rx="3"></rect><path d="M5 10h14"></path><circle cx="9" cy="13" r="1"></circle><circle cx="15" cy="13" r="1"></circle><path d="m7 20 2-3M17 20l-2-3"></path></svg></span>
          <h3 style="margin:0;font-size:18px;font-weight:800;color:var(--ink)">Railway Station Ambulance</h3>
          <p style="margin:0;font-size:14px;line-height:1.6;color:var(--ink-soft);flex:1">Platform pickup and drop coordinated with the patient's train timing.</p>
          <a href="/#book" style="display:inline-flex;align-items:center;gap:6px;font-size:14px;font-weight:700;color:var(--purple-600);text-decoration:none">Book Now<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12h15m-6-6 6 6-6 6"></path></svg></a>
        </div>
        <div style="background:var(--canvas);border:1px solid var(--line);border-radius:28px;padding:24px;display:flex;flex-direction:column;gap:12px;transition:all 180ms var(--ease)" style-hover="background:var(--card);transform:translateY(-3px);box-shadow:var(--shadow-md);border-color:rgba(139,92,246,.35)">
          <span style="width:46px;height:46px;border-radius:16px;background:rgba(16,185,129,.12);color:#047857;display:grid;place-items:center"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="8" r="3"></circle><path d="M3 19a6 6 0 0 1 12 0"></path><path d="M16 6a3 3 0 0 1 0 6M17.5 19a6 6 0 0 0-2-4.4"></path></svg></span>
          <h3 style="margin:0;font-size:18px;font-weight:800;color:var(--ink)">Medical Escort Services</h3>
          <p style="margin:0;font-size:14px;line-height:1.6;color:var(--ink-soft);flex:1">Trained medical staff accompanying the patient throughout the journey.</p>
          <a href="/#book" style="display:inline-flex;align-items:center;gap:6px;font-size:14px;font-weight:700;color:var(--purple-600);text-decoration:none">Book Now<svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12h15m-6-6 6 6-6 6"></path></svg></a>
        </div>
      </div>
    </div>
  </section>

  <section id="types" style="padding:clamp(64px,9vw,120px) 0">
    <div style="max-width:1200px;margin:0 auto;padding:0 clamp(20px,5vw,64px)">
      <div data-reveal style="max-width:60ch;margin-bottom:clamp(30px,4vw,48px)">
        <span style="font-weight:700;font-size:13px;letter-spacing:.14em;text-transform:uppercase;color:var(--purple-600)">Ambulance Types</span>
        <h2 style="margin:10px 0 12px;font-weight:900;font-size:clamp(30px,4.2vw,52px);letter-spacing:-0.035em;line-height:1.02;text-wrap:balance;background:var(--grad-headline);-webkit-background-clip:text;background-clip:text;-webkit-text-fill-color:transparent;color:transparent">Choose the Right Ambulance for Your Patient</h2>
        <p style="margin:0;font-size:17px;line-height:1.6;color:var(--ink-soft);text-wrap:pretty">Not sure which one you need? Tell us the patient's condition on the call and our team will advise you.</p>
      </div>

      <div data-reveal style="display:grid;grid-template-columns:repeat(auto-fit,minmax(min(268px,100%),1fr));gap:clamp(14px,1.6vw,20px)">
        <div style="background:var(--card);border:1px solid var(--line);border-radius:32px;box-shadow:var(--shadow-sm);padding:28px;display:flex;flex-direction:column;gap:16px" style-hover="transform:translateY(-3px);box-shadow:var(--shadow-md)">
          <div style="display:flex;align-items:center;justify-content:space-between;gap:12px">
            <h3 style="margin:0;font-size:20px;font-weight:800;letter-spacing:-0.01em;color:var(--ink)">BLS Ambulance</h3>
            <span style="padding:5px 12px;border-radius:999px;background:rgba(16,185,129,.12);color:#047857;font-size:12px;font-weight:700">Stable</span>
          </div>
          <p style="margin:0;font-size:14px;line-height:1.6;color:var(--ink-soft)">Suitable for stable patients and basic medical transportation.</p>
          <ul style="margin:0;padding:0;list-style:none;display:grid;gap:9px;flex:1">
            <li style="display:flex;gap:9px;align-items:flex-start;font-size:14px;color:var(--ink-soft)"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:2px"><path d="m5 13 4 4 10-10"></path></svg>Basic life support</li>
            <li style="display:flex;gap:9px;align-items:flex-start;font-size:14px;color:var(--ink-soft)"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:2px"><path d="m5 13 4 4 10-10"></path></svg>Stretcher</li>
            <li style="display:flex;gap:9px;align-items:flex-start;font-size:14px;color:var(--ink-soft)"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:2px"><path d="m5 13 4 4 10-10"></path></svg>Oxygen</li>
            <li style="display:flex;gap:9px;align-items:flex-start;font-size:14px;color:var(--ink-soft)"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:2px"><path d="m5 13 4 4 10-10"></path></svg>First-aid equipment</li>
            <li style="display:flex;gap:9px;align-items:flex-start;font-size:14px;color:var(--ink-soft)"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:2px"><path d="m5 13 4 4 10-10"></path></svg>Trained attendant</li>
          </ul>
        </div>
        <div style="background:var(--card);border:1px solid var(--line);border-radius:32px;box-shadow:var(--shadow-sm);padding:28px;display:flex;flex-direction:column;gap:16px" style-hover="transform:translateY(-3px);box-shadow:var(--shadow-md)">
          <div style="display:flex;align-items:center;justify-content:space-between;gap:12px">
            <h3 style="margin:0;font-size:20px;font-weight:800;letter-spacing:-0.01em;color:var(--ink)">ALS Ambulance</h3>
            <span style="padding:5px 12px;border-radius:999px;background:var(--purple-100);color:var(--purple-700);font-size:12px;font-weight:700">Advanced</span>
          </div>
          <p style="margin:0;font-size:14px;line-height:1.6;color:var(--ink-soft)">For patients requiring advanced medical support.</p>
          <ul style="margin:0;padding:0;list-style:none;display:grid;gap:9px;flex:1">
            <li style="display:flex;gap:9px;align-items:flex-start;font-size:14px;color:var(--ink-soft)"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:2px"><path d="m5 13 4 4 10-10"></path></svg>Advanced life support</li>
            <li style="display:flex;gap:9px;align-items:flex-start;font-size:14px;color:var(--ink-soft)"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:2px"><path d="m5 13 4 4 10-10"></path></svg>Cardiac monitoring</li>
            <li style="display:flex;gap:9px;align-items:flex-start;font-size:14px;color:var(--ink-soft)"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:2px"><path d="m5 13 4 4 10-10"></path></svg>Oxygen support</li>
            <li style="display:flex;gap:9px;align-items:flex-start;font-size:14px;color:var(--ink-soft)"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:2px"><path d="m5 13 4 4 10-10"></path></svg>Emergency medicines</li>
            <li style="display:flex;gap:9px;align-items:flex-start;font-size:14px;color:var(--ink-soft)"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:2px"><path d="m5 13 4 4 10-10"></path></svg>Trained medical staff</li>
          </ul>
        </div>
        <div style="background:var(--card);border:2px solid transparent;background-image:linear-gradient(#fff,#fff),linear-gradient(135deg,#fbbf24 0%,#F59E0B 100%);background-origin:border-box;background-clip:padding-box,border-box;border-radius:32px;box-shadow:var(--shadow-lg);padding:28px;display:flex;flex-direction:column;gap:16px;position:relative" style-hover="transform:translateY(-3px)">
          <span style="position:absolute;top:-13px;right:24px;padding:6px 14px;border-radius:999px;background:linear-gradient(135deg,#fbbf24 0%,#F59E0B 100%);color:#1a1147;font-size:12px;font-weight:800;letter-spacing:.02em;box-shadow:var(--shadow-glow-gold)">Most requested</span>
          <div style="display:flex;align-items:center;justify-content:space-between;gap:12px">
            <h3 style="margin:0;font-size:20px;font-weight:800;letter-spacing:-0.01em;color:var(--ink)">ICU Ambulance</h3>
            <span style="padding:5px 12px;border-radius:999px;background:rgba(220,38,38,.10);color:#DC2626;font-size:12px;font-weight:700">Critical</span>
          </div>
          <p style="margin:0;font-size:14px;line-height:1.6;color:var(--ink-soft)">For critically ill patients needing continuous monitoring.</p>
          <ul style="margin:0;padding:0;list-style:none;display:grid;gap:9px;flex:1">
            <li style="display:flex;gap:9px;align-items:flex-start;font-size:14px;color:var(--ink-soft)"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:2px"><path d="m5 13 4 4 10-10"></path></svg>ICU-level equipment</li>
            <li style="display:flex;gap:9px;align-items:flex-start;font-size:14px;color:var(--ink-soft)"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:2px"><path d="m5 13 4 4 10-10"></path></svg>Ventilator support</li>
            <li style="display:flex;gap:9px;align-items:flex-start;font-size:14px;color:var(--ink-soft)"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:2px"><path d="m5 13 4 4 10-10"></path></svg>Cardiac monitor</li>
            <li style="display:flex;gap:9px;align-items:flex-start;font-size:14px;color:var(--ink-soft)"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:2px"><path d="m5 13 4 4 10-10"></path></svg>Infusion pump</li>
            <li style="display:flex;gap:9px;align-items:flex-start;font-size:14px;color:var(--ink-soft)"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:2px"><path d="m5 13 4 4 10-10"></path></svg>Critical care medical team</li>
          </ul>
        </div>
        <div style="background:var(--card);border:1px solid var(--line);border-radius:32px;box-shadow:var(--shadow-sm);padding:28px;display:flex;flex-direction:column;gap:16px" style-hover="transform:translateY(-3px);box-shadow:var(--shadow-md)">
          <div style="display:flex;align-items:center;justify-content:space-between;gap:12px">
            <h3 style="margin:0;font-size:20px;font-weight:800;letter-spacing:-0.01em;color:var(--ink)">Neonatal Ambulance</h3>
            <span style="padding:5px 12px;border-radius:999px;background:rgba(245,124,90,.14);color:#C2410C;font-size:12px;font-weight:700">Newborn</span>
          </div>
          <p style="margin:0;font-size:14px;line-height:1.6;color:var(--ink-soft)">For newborn and infant transportation.</p>
          <ul style="margin:0;padding:0;list-style:none;display:grid;gap:9px;flex:1">
            <li style="display:flex;gap:9px;align-items:flex-start;font-size:14px;color:var(--ink-soft)"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:2px"><path d="m5 13 4 4 10-10"></path></svg>Neonatal incubator</li>
            <li style="display:flex;gap:9px;align-items:flex-start;font-size:14px;color:var(--ink-soft)"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:2px"><path d="m5 13 4 4 10-10"></path></svg>Infant monitoring</li>
            <li style="display:flex;gap:9px;align-items:flex-start;font-size:14px;color:var(--ink-soft)"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:2px"><path d="m5 13 4 4 10-10"></path></svg>Oxygen support</li>
            <li style="display:flex;gap:9px;align-items:flex-start;font-size:14px;color:var(--ink-soft)"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:2px"><path d="m5 13 4 4 10-10"></path></svg>Temperature control</li>
            <li style="display:flex;gap:9px;align-items:flex-start;font-size:14px;color:var(--ink-soft)"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" style="flex:none;margin-top:2px"><path d="m5 13 4 4 10-10"></path></svg>Trained neonatal support</li>
          </ul>
        </div>
      </div>

      <div data-reveal style="display:flex;flex-wrap:wrap;align-items:center;justify-content:center;gap:14px;margin-top:clamp(28px,3.5vw,44px)">
        <a href="{{ telHref }}" style="display:inline-flex;align-items:center;gap:10px;padding:17px 30px;border-radius:18px;background:linear-gradient(180deg,#8b5cf6 0%,#7C3AED 100%);color:#fff;font-weight:800;font-size:16px;text-decoration:none;box-shadow:var(--shadow-glow-purple)" style-hover="transform:translateY(-1px);background:linear-gradient(180deg,#A78BFA 0%,#8b5cf6 100%)">
          <svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17a8 8 0 1 1 16 0"></path><path d="m12 15 4-4"></path></svg>
          Find My Ambulance
        </a>
        <span style="font-size:14px;color:var(--ink-muted)">Our team will recommend the right type based on the patient's condition.</span>
      </div>
    </div>
  </section>
  <section id="about" style="background:var(--card);padding:clamp(64px,9vw,120px) 0;border-top:1px solid var(--line);border-bottom:1px solid var(--line)">
    <div style="max-width:1200px;margin:0 auto;padding:0 clamp(20px,5vw,64px);display:grid;grid-template-columns:repeat(auto-fit,minmax(min(380px,100%),1fr));gap:clamp(32px,4vw,64px);align-items:center">
      <div data-reveal style="position:relative">
        <div style="width:100%;aspect-ratio:4/4.4;border-radius:44px;overflow:hidden;box-shadow:var(--shadow-lg);background:var(--canvas)">
          <img src="/assets/why_choose_ambulance.jpg" alt="Why Choose Our Ambulance Service" style="width:100%; height:100%; object-fit:cover;">
        </div>
        <div style="position:absolute;right:-8px;bottom:-22px;display:flex;align-items:center;gap:12px;padding:16px 20px;background:var(--card);border:1px solid var(--line);border-radius:24px;box-shadow:var(--shadow-lg)">
          <span style="width:44px;height:44px;border-radius:16px;background:rgba(16,185,129,.12);color:#047857;display:grid;place-items:center;flex:none"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3 5 6v6c0 4.4 3 7.6 7 9 4-1.4 7-4.6 7-9V6l-7-3Z"></path><path d="m9 12 2 2 4-4"></path></svg></span>
          <span style="display:flex;flex-direction:column;line-height:1.25">
            <span style="font-size:15px;font-weight:800;color:var(--ink)">Patient safety first</span>
            <span style="font-size:13px;color:var(--ink-muted)">Every transfer, every time</span>
          </span>
        </div>
      </div>

      <div data-reveal>
        <span style="font-weight:700;font-size:13px;letter-spacing:.14em;text-transform:uppercase;color:var(--purple-600)">Why Choose Us</span>
        <h2 style="margin:10px 0 12px;font-weight:900;font-size:clamp(30px,4.2vw,52px);letter-spacing:-0.035em;line-height:1.02;text-wrap:balance;background:var(--grad-headline);-webkit-background-clip:text;background-clip:text;-webkit-text-fill-color:transparent;color:transparent">Why Choose Our Ambulance Service?</h2>
        <p style="margin:0 0 26px;font-size:17px;line-height:1.6;color:var(--ink-soft);text-wrap:pretty;max-width:52ch">When a family is under stress, the details matter â€” a clean vehicle, working equipment, a trained attendant, and someone who picks up the phone.</p>

        <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(min(220px,100%),1fr));gap:12px">
          <div style="display:flex;align-items:center;gap:11px;padding:14px 16px;background:var(--canvas);border-radius:18px"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="flex:none"><circle cx="12" cy="12" r="9"></circle><path d="M12 7v5l3 2"></path></svg><span style="font-size:14.5px;font-weight:600;color:var(--ink)">24/7 emergency availability</span></div>
          <div style="display:flex;align-items:center;gap:11px;padding:14px 16px;background:var(--canvas);border-radius:18px"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="#DC2626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="flex:none"><path d="M4 17a8 8 0 1 1 16 0"></path><path d="m12 15 4-4"></path></svg><span style="font-size:14.5px;font-weight:600;color:var(--ink)">Fast response across Greater Noida</span></div>
          <div style="display:flex;align-items:center;gap:11px;padding:14px 16px;background:var(--canvas);border-radius:18px"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="var(--purple-600)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="flex:none"><path d="M3 16.5V8.5a1 1 0 0 1 1-1h9v9"></path><path d="M13 10.5h3.6l3.4 3.6v2.4h-2.6"></path><circle cx="7.5" cy="17.5" r="2"></circle><circle cx="16.5" cy="17.5" r="2"></circle></svg><span style="font-size:14.5px;font-weight:600;color:var(--ink)">Well-maintained ambulances</span></div>
          <div style="display:flex;align-items:center;gap:11px;padding:14px 16px;background:var(--canvas);border-radius:18px"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="var(--purple-600)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="flex:none"><circle cx="9" cy="8" r="3"></circle><path d="M3 19a6 6 0 0 1 12 0"></path><path d="M16 6a3 3 0 0 1 0 6"></path></svg><span style="font-size:14.5px;font-weight:600;color:var(--ink)">Trained medical staff</span></div>
          <div style="display:flex;align-items:center;gap:11px;padding:14px 16px;background:var(--canvas);border-radius:18px"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="var(--purple-600)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="flex:none"><rect x="3" y="4" width="18" height="13" rx="3"></rect><path d="M6 11h2.5l1.5-3 2 6 1.5-3H18"></path></svg><span style="font-size:14.5px;font-weight:600;color:var(--ink)">Advanced medical equipment</span></div>
          <div style="display:flex;align-items:center;gap:11px;padding:14px 16px;background:var(--canvas);border-radius:18px"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="var(--purple-600)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="flex:none"><path d="m3 11 18-8-8 18-2-8-8-2Z"></path></svg><span style="font-size:14.5px;font-weight:600;color:var(--ink)">GPS-enabled ambulances</span></div>
          <div style="display:flex;align-items:center;gap:11px;padding:14px 16px;background:var(--canvas);border-radius:18px"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="#B45309" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="flex:none"><path d="M12 3v18"></path><path d="M17 7H9.5a2.5 2.5 0 0 0 0 5h5a2.5 2.5 0 0 1 0 5H7"></path></svg><span style="font-size:14.5px;font-weight:600;color:var(--ink)">Transparent pricing</span></div>
          <div style="display:flex;align-items:center;gap:11px;padding:14px 16px;background:var(--canvas);border-radius:18px"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="var(--purple-600)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="flex:none"><path d="M4 21V8l8-4 8 4v13"></path><path d="M12 8v4M10 10h4"></path></svg><span style="font-size:14.5px;font-weight:600;color:var(--ink)">Hospital transfer support</span></div>
          <div style="display:flex;align-items:center;gap:11px;padding:14px 16px;background:var(--canvas);border-radius:18px"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="flex:none"><path d="M12 3 5 6v6c0 4.4 3 7.6 7 9 4-1.4 7-4.6 7-9V6l-7-3Z"></path><path d="m9 12 2 2 4-4"></path></svg><span style="font-size:14.5px;font-weight:600;color:var(--ink)">Patient safety focused</span></div>
          <div style="display:flex;align-items:center;gap:11px;padding:14px 16px;background:var(--canvas);border-radius:18px"><svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="#DC2626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="flex:none"><path d="M4 15v-3a8 8 0 0 1 16 0v3"></path><rect x="2.5" y="14" width="4" height="6" rx="2"></rect><rect x="17.5" y="14" width="4" height="6" rx="2"></rect></svg><span style="font-size:14.5px;font-weight:600;color:var(--ink)">Experienced emergency team</span></div>
        </div>
      </div>
    </div>
  </section>

  <section id="areas" style="padding:clamp(64px,9vw,120px) 0">
    <div style="max-width:1200px;margin:0 auto;padding:0 clamp(20px,5vw,64px)">
      <div data-reveal style="max-width:58ch;margin-bottom:clamp(30px,4vw,48px)">
        <span style="font-weight:700;font-size:13px;letter-spacing:.14em;text-transform:uppercase;color:var(--purple-600)">Areas We Serve</span>
        <h2 style="margin:10px 0 12px;font-weight:900;font-size:clamp(30px,4.2vw,52px);letter-spacing:-0.035em;line-height:1.02;text-wrap:balance;background:var(--grad-headline);-webkit-background-clip:text;background-clip:text;-webkit-text-fill-color:transparent;color:transparent">Ambulance Service Across Greater Noida</h2>
        <p style="margin:0;font-size:17px;line-height:1.6;color:var(--ink-soft);text-wrap:pretty">Delhi, Gurgaon, Noida, Ghaziabad, Faridabad and Greater Noida â€” one number for the whole region.</p>
      </div>

      <div data-reveal style="position:relative;width:100%;aspect-ratio:16/8.5;min-height:300px;background:var(--card);border:1px solid var(--line);border-radius:44px;box-shadow:var(--shadow-sm);overflow:hidden;margin-bottom:clamp(20px,2.5vw,28px)">
        <div style="position:absolute;inset:0;background-image:linear-gradient(rgba(26,17,71,.05) 1px, transparent 1px),linear-gradient(90deg, rgba(26,17,71,.05) 1px, transparent 1px);background-size:48px 48px"></div>
        <div style="position:absolute;left:50%;top:44%;transform:translate(-50%,-50%);width:min(60%,540px);aspect-ratio:1;border-radius:50%;background:radial-gradient(circle, rgba(139,92,246,.16), rgba(139,92,246,0) 68%)"></div>
        <svg viewBox="0 0 100 100" preserveAspectRatio="none" style="position:absolute;inset:0;width:100%;height:100%" aria-hidden="true">
          <line x1="48" y1="42" x2="26" y2="70" stroke="#DDD6FE" stroke-width="0.5" stroke-dasharray="2 2"></line>
          <line x1="48" y1="42" x2="70" y2="62" stroke="#DDD6FE" stroke-width="0.5" stroke-dasharray="2 2"></line>
          <line x1="48" y1="42" x2="72" y2="24" stroke="#DDD6FE" stroke-width="0.5" stroke-dasharray="2 2"></line>
          <line x1="48" y1="42" x2="50" y2="82" stroke="#DDD6FE" stroke-width="0.5" stroke-dasharray="2 2"></line>
          <line x1="70" y1="62" x2="84" y2="76" stroke="#DDD6FE" stroke-width="0.5" stroke-dasharray="2 2"></line>
        </svg>
        <span style="position:absolute;left:48%;top:42%;transform:translate(-50%,-50%);display:inline-flex;align-items:center;gap:9px;padding:12px 20px;border-radius:999px;background:linear-gradient(180deg,#EF4444 0%,#DC2626 100%);color:#fff;font-size:15px;font-weight:800;box-shadow:0 18px 40px -18px rgba(220,38,38,.9);white-space:nowrap"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path><circle cx="12" cy="10" r="3"></circle></svg>Delhi</span>
        <span style="position:absolute;left:26%;top:70%;transform:translate(-50%,-50%);padding:9px 16px;border-radius:999px;background:#fff;border:1px solid var(--line);color:var(--ink);font-size:13.5px;font-weight:700;box-shadow:var(--shadow-sm);white-space:nowrap">Gurgaon</span>
        <span style="position:absolute;left:70%;top:62%;transform:translate(-50%,-50%);padding:9px 16px;border-radius:999px;background:#fff;border:1px solid var(--line);color:var(--ink);font-size:13.5px;font-weight:700;box-shadow:var(--shadow-sm);white-space:nowrap">Noida</span>
        <span style="position:absolute;left:72%;top:24%;transform:translate(-50%,-50%);padding:9px 16px;border-radius:999px;background:#fff;border:1px solid var(--line);color:var(--ink);font-size:13.5px;font-weight:700;box-shadow:var(--shadow-sm);white-space:nowrap">Ghaziabad</span>
        <span style="position:absolute;left:50%;top:82%;transform:translate(-50%,-50%);padding:9px 16px;border-radius:999px;background:#fff;border:1px solid var(--line);color:var(--ink);font-size:13.5px;font-weight:700;box-shadow:var(--shadow-sm);white-space:nowrap">Faridabad</span>
        <span style="position:absolute;left:84%;top:76%;transform:translate(-50%,-50%);padding:9px 16px;border-radius:999px;background:#fff;border:1px solid var(--line);color:var(--ink);font-size:13.5px;font-weight:700;box-shadow:var(--shadow-sm);white-space:nowrap">Greater Noida</span>
        <span style="position:absolute;left:24px;bottom:20px;font-size:12px;font-weight:600;color:var(--ink-muted)">Stylised coverage map â€” not to scale</span>
      </div>

      <div data-reveal style="display:grid;grid-template-columns:repeat(auto-fit,minmax(min(230px,100%),1fr));gap:clamp(14px,1.6vw,20px)">
        <div style="background:var(--card);border:1px solid var(--line);border-radius:28px;padding:24px;box-shadow:var(--shadow-sm)" style-hover="transform:translateY(-3px);box-shadow:var(--shadow-md)">
          <h3 style="margin:0 0 14px;font-size:18px;font-weight:800;color:var(--ink)">Delhi</h3>
          <div style="display:flex;flex-wrap:wrap;gap:6px">
            <span style="padding:5px 11px;border-radius:999px;background:var(--canvas);font-size:12.5px;font-weight:600;color:var(--ink-soft)">South Delhi</span><span style="padding:5px 11px;border-radius:999px;background:var(--canvas);font-size:12.5px;font-weight:600;color:var(--ink-soft)">North Delhi</span><span style="padding:5px 11px;border-radius:999px;background:var(--canvas);font-size:12.5px;font-weight:600;color:var(--ink-soft)">East Delhi</span><span style="padding:5px 11px;border-radius:999px;background:var(--canvas);font-size:12.5px;font-weight:600;color:var(--ink-soft)">West Delhi</span><span style="padding:5px 11px;border-radius:999px;background:var(--canvas);font-size:12.5px;font-weight:600;color:var(--ink-soft)">Central Delhi</span><span style="padding:5px 11px;border-radius:999px;background:var(--canvas);font-size:12.5px;font-weight:600;color:var(--ink-soft)">Greater Noida</span><span style="padding:5px 11px;border-radius:999px;background:var(--canvas);font-size:12.5px;font-weight:600;color:var(--ink-soft)">Rohini</span><span style="padding:5px 11px;border-radius:999px;background:var(--canvas);font-size:12.5px;font-weight:600;color:var(--ink-soft)">Saket</span><span style="padding:5px 11px;border-radius:999px;background:var(--canvas);font-size:12.5px;font-weight:600;color:var(--ink-soft)">Vasant Kunj</span><span style="padding:5px 11px;border-radius:999px;background:var(--canvas);font-size:12.5px;font-weight:600;color:var(--ink-soft)">Janakpuri</span><span style="padding:5px 11px;border-radius:999px;background:var(--canvas);font-size:12.5px;font-weight:600;color:var(--ink-soft)">Lajpat Nagar</span><span style="padding:5px 11px;border-radius:999px;background:var(--canvas);font-size:12.5px;font-weight:600;color:var(--ink-soft)">Karol Bagh</span>
          </div>
        </div>
        <div style="background:var(--card);border:1px solid var(--line);border-radius:28px;padding:24px;box-shadow:var(--shadow-sm)" style-hover="transform:translateY(-3px);box-shadow:var(--shadow-md)">
          <h3 style="margin:0 0 14px;font-size:18px;font-weight:800;color:var(--ink)">Gurgaon / Gurugram</h3>
          <div style="display:flex;flex-wrap:wrap;gap:6px">
            <span style="padding:5px 11px;border-radius:999px;background:var(--canvas);font-size:12.5px;font-weight:600;color:var(--ink-soft)">DLF</span><span style="padding:5px 11px;border-radius:999px;background:var(--canvas);font-size:12.5px;font-weight:600;color:var(--ink-soft)">Cyber City</span><span style="padding:5px 11px;border-radius:999px;background:var(--canvas);font-size:12.5px;font-weight:600;color:var(--ink-soft)">Golf Course Road</span><span style="padding:5px 11px;border-radius:999px;background:var(--canvas);font-size:12.5px;font-weight:600;color:var(--ink-soft)">Sohna Road</span><span style="padding:5px 11px;border-radius:999px;background:var(--canvas);font-size:12.5px;font-weight:600;color:var(--ink-soft)">Manesar</span><span style="padding:5px 11px;border-radius:999px;background:var(--canvas);font-size:12.5px;font-weight:600;color:var(--ink-soft)">Sector 14</span><span style="padding:5px 11px;border-radius:999px;background:var(--canvas);font-size:12.5px;font-weight:600;color:var(--ink-soft)">Sector 29</span><span style="padding:5px 11px;border-radius:999px;background:var(--canvas);font-size:12.5px;font-weight:600;color:var(--ink-soft)">Sector 56</span>
          </div>
        </div>
        <div style="background:var(--card);border:1px solid var(--line);border-radius:28px;padding:24px;box-shadow:var(--shadow-sm)" style-hover="transform:translateY(-3px);box-shadow:var(--shadow-md)">
          <h3 style="margin:0 0 14px;font-size:18px;font-weight:800;color:var(--ink)">Noida</h3>
          <div style="display:flex;flex-wrap:wrap;gap:6px">
            <span style="padding:5px 11px;border-radius:999px;background:var(--canvas);font-size:12.5px;font-weight:600;color:var(--ink-soft)">Sector 18</span><span style="padding:5px 11px;border-radius:999px;background:var(--canvas);font-size:12.5px;font-weight:600;color:var(--ink-soft)">Sector 62</span><span style="padding:5px 11px;border-radius:999px;background:var(--canvas);font-size:12.5px;font-weight:600;color:var(--ink-soft)">Sector 15</span><span style="padding:5px 11px;border-radius:999px;background:var(--canvas);font-size:12.5px;font-weight:600;color:var(--ink-soft)">Sector 16</span><span style="padding:5px 11px;border-radius:999px;background:var(--canvas);font-size:12.5px;font-weight:600;color:var(--ink-soft)">Sector 27</span><span style="padding:5px 11px;border-radius:999px;background:var(--canvas);font-size:12.5px;font-weight:600;color:var(--ink-soft)">Greater Noida</span>
          </div>
        </div>
        <div style="background:var(--card);border:1px solid var(--line);border-radius:28px;padding:24px;box-shadow:var(--shadow-sm)" style-hover="transform:translateY(-3px);box-shadow:var(--shadow-md)">
          <h3 style="margin:0 0 14px;font-size:18px;font-weight:800;color:var(--ink)">Ghaziabad</h3>
          <div style="display:flex;flex-wrap:wrap;gap:6px">
            <span style="padding:5px 11px;border-radius:999px;background:var(--canvas);font-size:12.5px;font-weight:600;color:var(--ink-soft)">Indirapuram</span><span style="padding:5px 11px;border-radius:999px;background:var(--canvas);font-size:12.5px;font-weight:600;color:var(--ink-soft)">Vaishali</span><span style="padding:5px 11px;border-radius:999px;background:var(--canvas);font-size:12.5px;font-weight:600;color:var(--ink-soft)">Vasundhara</span><span style="padding:5px 11px;border-radius:999px;background:var(--canvas);font-size:12.5px;font-weight:600;color:var(--ink-soft)">Crossings Republik</span><span style="padding:5px 11px;border-radius:999px;background:var(--canvas);font-size:12.5px;font-weight:600;color:var(--ink-soft)">Raj Nagar</span>
          </div>
        </div>
        <div style="background:var(--card);border:1px solid var(--line);border-radius:28px;padding:24px;box-shadow:var(--shadow-sm)" style-hover="transform:translateY(-3px);box-shadow:var(--shadow-md)">
          <h3 style="margin:0 0 14px;font-size:18px;font-weight:800;color:var(--ink)">Faridabad</h3>
          <div style="display:flex;flex-wrap:wrap;gap:6px">
            <span style="padding:5px 11px;border-radius:999px;background:var(--canvas);font-size:12.5px;font-weight:600;color:var(--ink-soft)">Sector 15</span><span style="padding:5px 11px;border-radius:999px;background:var(--canvas);font-size:12.5px;font-weight:600;color:var(--ink-soft)">Sector 16</span><span style="padding:5px 11px;border-radius:999px;background:var(--canvas);font-size:12.5px;font-weight:600;color:var(--ink-soft)">NIT</span><span style="padding:5px 11px;border-radius:999px;background:var(--canvas);font-size:12.5px;font-weight:600;color:var(--ink-soft)">Greater Faridabad</span>
          </div>
        </div>
      </div>

      <div data-reveal style="display:flex;justify-content:center;margin-top:clamp(26px,3vw,40px)">
        <a href="{{ telHref }}" style="display:inline-flex;align-items:center;gap:10px;padding:17px 30px;border-radius:18px;background:linear-gradient(180deg,#EF4444 0%,#DC2626 100%);color:#fff;font-weight:800;font-size:16px;text-decoration:none;box-shadow:0 22px 50px -20px rgba(220,38,38,.9)" style-hover="transform:translateY(-2px)">
          <svg width="19" height="19" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path><circle cx="12" cy="10" r="3"></circle></svg>
          Find Ambulance Near Me
        </a>
      </div>
    </div>
  </section>

  <section style="background:var(--canvas-warm);padding:clamp(64px,9vw,120px) 0;border-top:1px solid var(--line)">
    <div style="max-width:1200px;margin:0 auto;padding:0 clamp(20px,5vw,64px)">
      <div data-reveal style="max-width:52ch;margin-bottom:clamp(30px,4vw,48px)">
        <span style="font-weight:700;font-size:13px;letter-spacing:.14em;text-transform:uppercase;color:var(--purple-600)">How It Works</span>
        <h2 style="margin:10px 0 12px;font-weight:800;font-size:clamp(28px,3.6vw,44px);letter-spacing:-0.02em;line-height:1.05;color:var(--ink);text-wrap:balance">Four steps from your call to the hospital</h2>
        <p style="margin:0;font-size:17px;line-height:1.6;color:var(--ink-soft);text-wrap:pretty">No forms to fight with, no waiting for a callback to begin. One call starts the dispatch.</p>
      </div>

      <div data-reveal style="display:grid;grid-template-columns:repeat(auto-fit,minmax(min(240px,100%),1fr));gap:clamp(14px,1.6vw,20px)">
        <div style="background:var(--card);border:1px solid var(--line);border-radius:32px;padding:26px;box-shadow:var(--shadow-sm);display:flex;flex-direction:column;gap:14px" style-hover="transform:translateY(-3px);box-shadow:var(--shadow-md)">
          <div style="display:flex;align-items:center;gap:12px">
            <span style="width:44px;height:44px;border-radius:14px;background:linear-gradient(180deg,#EF4444 0%,#DC2626 100%);color:#fff;font-weight:900;font-size:16px;display:grid;place-items:center;flex:none">01</span>
            <span style="flex:1;border-top:2px dashed var(--line)"></span>
          </div>
          <h3 style="margin:0;font-size:19px;font-weight:800;color:var(--ink)">Call or WhatsApp</h3>
          <p style="margin:0;font-size:14.5px;line-height:1.6;color:var(--ink-soft)">Contact our emergency team on the 24Ã—7 helpline.</p>
        </div>
        <div style="background:var(--card);border:1px solid var(--line);border-radius:32px;padding:26px;box-shadow:var(--shadow-sm);display:flex;flex-direction:column;gap:14px" style-hover="transform:translateY(-3px);box-shadow:var(--shadow-md)">
          <div style="display:flex;align-items:center;gap:12px">
            <span style="width:44px;height:44px;border-radius:14px;background:var(--purple-100);color:var(--purple-700);font-weight:900;font-size:16px;display:grid;place-items:center;flex:none">02</span>
            <span style="flex:1;border-top:2px dashed var(--line)"></span>
          </div>
          <h3 style="margin:0;font-size:19px;font-weight:800;color:var(--ink)">Share Location</h3>
          <p style="margin:0;font-size:14.5px;line-height:1.6;color:var(--ink-soft)">Tell us your pickup point and the destination hospital.</p>
        </div>
        <div style="background:var(--card);border:1px solid var(--line);border-radius:32px;padding:26px;box-shadow:var(--shadow-sm);display:flex;flex-direction:column;gap:14px" style-hover="transform:translateY(-3px);box-shadow:var(--shadow-md)">
          <div style="display:flex;align-items:center;gap:12px">
            <span style="width:44px;height:44px;border-radius:14px;background:var(--purple-100);color:var(--purple-700);font-weight:900;font-size:16px;display:grid;place-items:center;flex:none">03</span>
            <span style="flex:1;border-top:2px dashed var(--line)"></span>
          </div>
          <h3 style="margin:0;font-size:19px;font-weight:800;color:var(--ink)">Ambulance Dispatched</h3>
          <p style="margin:0;font-size:14.5px;line-height:1.6;color:var(--ink-soft)">The nearest suitable ambulance is assigned to your case.</p>
        </div>
        <div style="background:var(--card);border:1px solid var(--line);border-radius:32px;padding:26px;box-shadow:var(--shadow-sm);display:flex;flex-direction:column;gap:14px" style-hover="transform:translateY(-3px);box-shadow:var(--shadow-md)">
          <div style="display:flex;align-items:center;gap:12px">
            <span style="width:44px;height:44px;border-radius:14px;background:rgba(16,185,129,.14);color:#047857;font-weight:900;font-size:16px;display:grid;place-items:center;flex:none">04</span>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="m5 13 4 4 10-10"></path></svg>
          </div>
          <h3 style="margin:0;font-size:19px;font-weight:800;color:var(--ink)">Patient Transport</h3>
          <p style="margin:0;font-size:14.5px;line-height:1.6;color:var(--ink-soft)">The patient is transported safely to the destination.</p>
        </div>
      </div>
    </div>
  </section>

  <section style="padding:clamp(56px,7vw,96px) 0">
    <div style="max-width:1200px;margin:0 auto;padding:0 clamp(20px,5vw,64px)">
      <div data-reveal style="position:relative;overflow:hidden;background:#1a1147;border-radius:44px;padding:clamp(32px,5vw,68px);box-shadow:var(--shadow-lg)">
        <div style="position:absolute;right:-120px;top:-120px;width:460px;height:460px;border-radius:50%;background:radial-gradient(circle, rgba(239,68,68,.38), rgba(239,68,68,0) 68%)" aria-hidden="true"></div>
        <div style="position:absolute;left:-140px;bottom:-160px;width:420px;height:420px;border-radius:50%;background:radial-gradient(circle, rgba(139,92,246,.35), rgba(139,92,246,0) 70%)" aria-hidden="true"></div>
        <div style="position:relative;display:grid;grid-template-columns:repeat(auto-fit,minmax(min(320px,100%),1fr));gap:clamp(24px,3vw,48px);align-items:center">
          <div>
            <span style="display:inline-flex;align-items:center;gap:9px;padding:8px 16px;border-radius:999px;background:rgba(255,255,255,.10);color:#fff;font-size:13px;font-weight:700">
              <span style="width:8px;height:8px;border-radius:50%;background:#EF4444;animation:livepulse 2.4s ease-out infinite;flex:none"></span>Emergency desk
            </span>
            <h2 style="margin:18px 0 12px;font-weight:900;font-size:clamp(30px,4vw,50px);letter-spacing:-0.035em;line-height:1.02;color:#fff;text-wrap:balance">Need an Ambulance Right Now?</h2>
            <p style="margin:0;font-size:17px;line-height:1.6;color:rgba(255,255,255,.72);max-width:48ch;text-wrap:pretty">Our emergency team is available 24/7 to help arrange the right ambulance for your patient's needs.</p>
            <p style="margin:20px 0 0;font-size:13px;font-weight:700;letter-spacing:.12em;text-transform:uppercase;color:#FCD34D">Available 24 hours · 7 days a week</p>
          </div>
          <div style="display:flex;flex-direction:column;gap:12px">
            <a href="{{ telHref }}" style="display:flex;align-items:center;justify-content:center;gap:11px;padding:20px 28px;border-radius:20px;background:linear-gradient(180deg,#EF4444 0%,#DC2626 100%);color:#fff;font-weight:800;font-size:19px;text-decoration:none;box-shadow:0 24px 56px -20px rgba(239,68,68,.9)" style-hover="transform:translateY(-2px)">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M6.6 3.5 4 4.6c-.9.4-1.3 1.4-1 2.3a17 17 0 0 0 11 11c.9.3 1.9-.1 2.3-1l1.1-2.6a1.5 1.5 0 0 0-.7-1.9l-2.6-1.3a1.5 1.5 0 0 0-1.8.4l-.9 1.1a12.6 12.6 0 0 1-4.9-4.9l1.1-.9a1.5 1.5 0 0 0 .4-1.8L8.5 4.2a1.5 1.5 0 0 0-1.9-.7Z"></path></svg>
              Call Ambulance Now
            </a>
            <a href="{{ waHref }}" target="_blank" rel="noopener" style="display:flex;align-items:center;justify-content:center;gap:11px;padding:18px 28px;border-radius:20px;background:rgba(255,255,255,.08);border:1px solid rgba(255,255,255,.22);color:#fff;font-weight:700;font-size:17px;text-decoration:none" style-hover="background:rgba(255,255,255,.14);transform:translateY(-1px)">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.4 8.4 0 0 1-12.6 7.3L3 20.5l1.8-5.2A8.4 8.4 0 1 1 21 11.5Z"></path></svg>
              WhatsApp Us
            </a>
            <p style="margin:6px 0 0;text-align:center;font-size:15px;font-weight:800;color:#fff;letter-spacing:.01em">{{ phone }}</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section style="background:var(--card);padding:clamp(64px,9vw,120px) 0;border-top:1px solid var(--line);border-bottom:1px solid var(--line)">
    <div style="max-width:1200px;margin:0 auto;padding:0 clamp(20px,5vw,64px);display:grid;grid-template-columns:repeat(auto-fit,minmax(min(380px,100%),1fr));gap:clamp(32px,4vw,64px);align-items:center">
      <div data-reveal>
        <span style="font-weight:700;font-size:13px;letter-spacing:.14em;text-transform:uppercase;color:var(--purple-600)">Hospital Transfer Services</span>
        <h2 style="margin:10px 0 12px;font-weight:800;font-size:clamp(28px,3.6vw,44px);letter-spacing:-0.02em;line-height:1.05;color:var(--ink);text-wrap:balance">Hospital Transfer &amp; Medical Transportation</h2>
        <p style="margin:0 0 24px;font-size:17px;line-height:1.6;color:var(--ink-soft);text-wrap:pretty;max-width:52ch">We coordinate with the family and the hospital team so the patient moves once, safely, with the right equipment on board.</p>
        <ul style="margin:0;padding:0;list-style:none;display:grid;gap:10px">
          <li style="display:flex;gap:11px;align-items:center;font-size:15px;color:var(--ink-soft)"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" style="flex:none"><path d="m5 13 4 4 10-10"></path></svg>Hospital admission support</li>
          <li style="display:flex;gap:11px;align-items:center;font-size:15px;color:var(--ink-soft)"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" style="flex:none"><path d="m5 13 4 4 10-10"></path></svg>Hospital-to-hospital transfer</li>
          <li style="display:flex;gap:11px;align-items:center;font-size:15px;color:var(--ink-soft)"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" style="flex:none"><path d="m5 13 4 4 10-10"></path></svg>ICU transfer with critical care support</li>
          <li style="display:flex;gap:11px;align-items:center;font-size:15px;color:var(--ink-soft)"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" style="flex:none"><path d="m5 13 4 4 10-10"></path></svg>Emergency department transfer</li>
          <li style="display:flex;gap:11px;align-items:center;font-size:15px;color:var(--ink-soft)"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" style="flex:none"><path d="m5 13 4 4 10-10"></path></svg>Diagnostic centre transportation</li>
          <li style="display:flex;gap:11px;align-items:center;font-size:15px;color:var(--ink-soft)"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" style="flex:none"><path d="m5 13 4 4 10-10"></path></svg>Airport medical transfer</li>
          <li style="display:flex;gap:11px;align-items:center;font-size:15px;color:var(--ink-soft)"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#10B981" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" style="flex:none"><path d="m5 13 4 4 10-10"></path></svg>Long-distance patient transportation</li>
        </ul>
        <div style="display:flex;flex-wrap:wrap;gap:12px;margin-top:28px">
          <a href="/#book" style="display:inline-flex;align-items:center;gap:9px;padding:15px 24px;border-radius:16px;background:linear-gradient(180deg,#8b5cf6 0%,#7C3AED 100%);color:#fff;font-weight:700;font-size:15px;text-decoration:none;box-shadow:var(--shadow-glow-purple)" style-hover="transform:translateY(-1px);background:linear-gradient(180deg,#A78BFA 0%,#8b5cf6 100%)">Book a Transfer</a>
          <a href="{{ telHref }}" style="display:inline-flex;align-items:center;gap:9px;padding:15px 24px;border-radius:16px;border:1px solid var(--ink);color:var(--ink);font-weight:700;font-size:15px;text-decoration:none" style-hover="background:rgba(26,17,71,.04);transform:translateY(-1px)">Discuss the case</a>
        </div>
      </div>
      <div data-reveal style="width:100%;aspect-ratio:4/3.2;border-radius:44px;overflow:hidden;box-shadow:var(--shadow-lg);background:var(--canvas)">
        <img src="/assets/hospital_transfer.jpg" alt="Hospital Transfer & Medical Transportation" style="width:100%; height:100%; object-fit:cover;">
      </div>
    </div>
  </section>

  <section style="padding:clamp(64px,9vw,120px) 0">
    <div style="max-width:1200px;margin:0 auto;padding:0 clamp(20px,5vw,64px)">
      <div data-reveal style="max-width:54ch;margin-bottom:clamp(28px,3.5vw,44px)">
        <span style="font-weight:700;font-size:13px;letter-spacing:.14em;text-transform:uppercase;color:var(--purple-600)">Ambulance Equipment</span>
        <h2 style="margin:10px 0 12px;font-weight:800;font-size:clamp(28px,3.6vw,44px);letter-spacing:-0.02em;line-height:1.05;color:var(--ink);text-wrap:balance">What our ambulances carry</h2>
        <p style="margin:0;font-size:16px;line-height:1.6;color:var(--ink-soft);text-wrap:pretty">Equipment varies by ambulance type â€” tell us the patient's condition and we will confirm exactly what will be on board.</p>
      </div>
      <div data-reveal style="display:grid;grid-template-columns:repeat(auto-fit,minmax(min(168px,45%),1fr));gap:12px">
        <div style="display:flex;flex-direction:column;align-items:center;text-align:center;gap:10px;padding:22px 14px;background:var(--card);border:1px solid var(--line);border-radius:24px;box-shadow:var(--shadow-xs)" style-hover="transform:translateY(-3px);box-shadow:var(--shadow-md)"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="var(--purple-600)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M4 8h9a3 3 0 1 0-3-3"></path><path d="M4 12h13a3 3 0 1 1-3 3"></path><path d="M4 16h6"></path></svg><span style="font-size:14px;font-weight:700;color:var(--ink)">Ventilator</span></div>
        <div style="display:flex;flex-direction:column;align-items:center;text-align:center;gap:10px;padding:22px 14px;background:var(--card);border:1px solid var(--line);border-radius:24px;box-shadow:var(--shadow-xs)" style-hover="transform:translateY(-3px);box-shadow:var(--shadow-md)"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="var(--purple-600)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="8" y="6" width="8" height="15" rx="4"></rect><path d="M10 6V4h4v2"></path><path d="M12 11v4M10 13h4"></path></svg><span style="font-size:14px;font-weight:700;color:var(--ink)">Oxygen Cylinder</span></div>
        <div style="display:flex;flex-direction:column;align-items:center;text-align:center;gap:10px;padding:22px 14px;background:var(--card);border:1px solid var(--line);border-radius:24px;box-shadow:var(--shadow-xs)" style-hover="transform:translateY(-3px);box-shadow:var(--shadow-md)"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="var(--purple-600)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="13" rx="3"></rect><path d="M6 11h2.5l1.5-3 2 6 1.5-3H18"></path><path d="M9 21h6M12 17v4"></path></svg><span style="font-size:14px;font-weight:700;color:var(--ink)">Cardiac Monitor</span></div>
        <div style="display:flex;flex-direction:column;align-items:center;text-align:center;gap:10px;padding:22px 14px;background:var(--card);border:1px solid var(--line);border-radius:24px;box-shadow:var(--shadow-xs)" style-hover="transform:translateY(-3px);box-shadow:var(--shadow-md)"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="#DC2626" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2 4 14h7l-1 8 9-12h-7l1-8Z"></path></svg><span style="font-size:14px;font-weight:700;color:var(--ink)">Defibrillator</span></div>
        <div style="display:flex;flex-direction:column;align-items:center;text-align:center;gap:10px;padding:22px 14px;background:var(--card);border:1px solid var(--line);border-radius:24px;box-shadow:var(--shadow-xs)" style-hover="transform:translateY(-3px);box-shadow:var(--shadow-md)"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="var(--purple-600)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="6" y="3" width="9" height="11" rx="2"></rect><path d="M10.5 14v7M8 21h5"></path><path d="M9 7h3M10.5 5.5v3"></path></svg><span style="font-size:14px;font-weight:700;color:var(--ink)">Infusion Pump</span></div>
        <div style="display:flex;flex-direction:column;align-items:center;text-align:center;gap:10px;padding:22px 14px;background:var(--card);border:1px solid var(--line);border-radius:24px;box-shadow:var(--shadow-xs)" style-hover="transform:translateY(-3px);box-shadow:var(--shadow-md)"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="var(--purple-600)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="9" width="12" height="11" rx="3"></rect><path d="M16 13h2.5a2 2 0 0 1 0 4H16"></path><path d="M8 9V6a2 2 0 0 1 4 0"></path></svg><span style="font-size:14px;font-weight:700;color:var(--ink)">Suction Machine</span></div>
        <div style="display:flex;flex-direction:column;align-items:center;text-align:center;gap:10px;padding:22px 14px;background:var(--card);border:1px solid var(--line);border-radius:24px;box-shadow:var(--shadow-xs)" style-hover="transform:translateY(-3px);box-shadow:var(--shadow-md)"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="var(--purple-600)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M3 18V7"></path><path d="M3 12h11a5 5 0 0 1 5 5v1"></path><circle cx="8" cy="9" r="1.6"></circle></svg><span style="font-size:14px;font-weight:700;color:var(--ink)">Stretcher</span></div>
        <div style="display:flex;flex-direction:column;align-items:center;text-align:center;gap:10px;padding:22px 14px;background:var(--card);border:1px solid var(--line);border-radius:24px;box-shadow:var(--shadow-xs)" style-hover="transform:translateY(-3px);box-shadow:var(--shadow-md)"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="var(--purple-600)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><circle cx="10" cy="18" r="3.5"></circle><path d="M14 7h-3v5h5l2.2 6"></path><circle cx="13" cy="3.6" r="1.6"></circle></svg><span style="font-size:14px;font-weight:700;color:var(--ink)">Wheelchair</span></div>
        <div style="display:flex;flex-direction:column;align-items:center;text-align:center;gap:10px;padding:22px 14px;background:var(--card);border:1px solid var(--line);border-radius:24px;box-shadow:var(--shadow-xs)" style-hover="transform:translateY(-3px);box-shadow:var(--shadow-md)"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="var(--purple-600)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="2.5" y="9" width="19" height="6" rx="3" transform="rotate(-45 12 12)"></rect><path d="m9 9 6 6"></path></svg><span style="font-size:14px;font-weight:700;color:var(--ink)">Emergency Medicines</span></div>
        <div style="display:flex;flex-direction:column;align-items:center;text-align:center;gap:10px;padding:22px 14px;background:var(--card);border:1px solid var(--line);border-radius:24px;box-shadow:var(--shadow-xs)" style-hover="transform:translateY(-3px);box-shadow:var(--shadow-md)"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="var(--purple-600)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="7" width="18" height="13" rx="3"></rect><path d="M9 7V5h6v2"></path><path d="M12 11v5M9.5 13.5h5"></path></svg><span style="font-size:14px;font-weight:700;color:var(--ink)">First Aid Equipment</span></div>
      </div>
    </div>
  </section>

  <sc-if value="{{ showTestimonials }}" hint-placeholder-val="{{ true }}">
  <section style="background:var(--card);padding:clamp(64px,9vw,120px) 0;border-top:1px solid var(--line);border-bottom:1px solid var(--line)">
    <div style="max-width:1200px;margin:0 auto;padding:0 clamp(20px,5vw,64px)">
      <div data-reveal style="max-width:52ch;margin-bottom:clamp(28px,3.5vw,44px)">
        <span style="font-weight:700;font-size:13px;letter-spacing:.14em;text-transform:uppercase;color:var(--purple-600)">Testimonials</span>
        <h2 style="margin:10px 0 12px;font-weight:800;font-size:clamp(28px,3.6vw,44px);letter-spacing:-0.02em;line-height:1.05;color:var(--ink);text-wrap:balance">What Our Patients &amp; Families Say</h2>
        <p style="margin:0;font-size:14px;line-height:1.6;color:var(--ink-muted)">[PLACEHOLDER â€” replace with real, verifiable reviews before publishing. Toggle this section off in Tweaks until then.]</p>
      </div>
      <div data-reveal style="display:grid;grid-template-columns:repeat(auto-fit,minmax(min(280px,100%),1fr));gap:clamp(14px,1.6vw,20px)">
        <figure style="margin:0;background:var(--canvas);border-radius:32px;padding:28px;display:flex;flex-direction:column;gap:14px">
          <div style="display:flex;gap:3px" aria-label="5 out of 5"><svg width="17" height="17" viewBox="0 0 24 24" fill="#fbbf24"><path d="m12 3 2.7 5.6 6.1.9-4.4 4.3 1 6.2-5.4-2.9-5.4 2.9 1-6.2L3.2 9.5l6.1-.9Z"></path></svg><svg width="17" height="17" viewBox="0 0 24 24" fill="#fbbf24"><path d="m12 3 2.7 5.6 6.1.9-4.4 4.3 1 6.2-5.4-2.9-5.4 2.9 1-6.2L3.2 9.5l6.1-.9Z"></path></svg><svg width="17" height="17" viewBox="0 0 24 24" fill="#fbbf24"><path d="m12 3 2.7 5.6 6.1.9-4.4 4.3 1 6.2-5.4-2.9-5.4 2.9 1-6.2L3.2 9.5l6.1-.9Z"></path></svg><svg width="17" height="17" viewBox="0 0 24 24" fill="#fbbf24"><path d="m12 3 2.7 5.6 6.1.9-4.4 4.3 1 6.2-5.4-2.9-5.4 2.9 1-6.2L3.2 9.5l6.1-.9Z"></path></svg><svg width="17" height="17" viewBox="0 0 24 24" fill="#fbbf24"><path d="m12 3 2.7 5.6 6.1.9-4.4 4.3 1 6.2-5.4-2.9-5.4 2.9 1-6.2L3.2 9.5l6.1-.9Z"></path></svg></div>
          <blockquote style="margin:0;font-size:15.5px;line-height:1.65;color:var(--ink-soft);flex:1">"Very quick response and the ambulance was properly equipped. The team was professional and helpful throughout the hospital transfer."</blockquote>
          <figcaption style="font-size:14px;font-weight:700;color:var(--ink)">â€” Patient family member <span style="font-weight:500;color:var(--ink-muted)">· Saket, Delhi</span></figcaption>
        </figure>
        <figure style="margin:0;background:var(--canvas);border-radius:32px;padding:28px;display:flex;flex-direction:column;gap:14px">
          <div style="display:flex;gap:3px" aria-label="5 out of 5"><svg width="17" height="17" viewBox="0 0 24 24" fill="#fbbf24"><path d="m12 3 2.7 5.6 6.1.9-4.4 4.3 1 6.2-5.4-2.9-5.4 2.9 1-6.2L3.2 9.5l6.1-.9Z"></path></svg><svg width="17" height="17" viewBox="0 0 24 24" fill="#fbbf24"><path d="m12 3 2.7 5.6 6.1.9-4.4 4.3 1 6.2-5.4-2.9-5.4 2.9 1-6.2L3.2 9.5l6.1-.9Z"></path></svg><svg width="17" height="17" viewBox="0 0 24 24" fill="#fbbf24"><path d="m12 3 2.7 5.6 6.1.9-4.4 4.3 1 6.2-5.4-2.9-5.4 2.9 1-6.2L3.2 9.5l6.1-.9Z"></path></svg><svg width="17" height="17" viewBox="0 0 24 24" fill="#fbbf24"><path d="m12 3 2.7 5.6 6.1.9-4.4 4.3 1 6.2-5.4-2.9-5.4 2.9 1-6.2L3.2 9.5l6.1-.9Z"></path></svg><svg width="17" height="17" viewBox="0 0 24 24" fill="#fbbf24"><path d="m12 3 2.7 5.6 6.1.9-4.4 4.3 1 6.2-5.4-2.9-5.4 2.9 1-6.2L3.2 9.5l6.1-.9Z"></path></svg></div>
          <blockquote style="margin:0;font-size:15.5px;line-height:1.65;color:var(--ink-soft);flex:1">"We needed an ICU ambulance late at night from Noida to Delhi. The coordinator explained everything clearly and stayed on the call until pickup."</blockquote>
          <figcaption style="font-size:14px;font-weight:700;color:var(--ink)">â€” Patient family member <span style="font-weight:500;color:var(--ink-muted)">· Noida</span></figcaption>
        </figure>
        <figure style="margin:0;background:var(--canvas);border-radius:32px;padding:28px;display:flex;flex-direction:column;gap:14px">
          <div style="display:flex;gap:3px" aria-label="5 out of 5"><svg width="17" height="17" viewBox="0 0 24 24" fill="#fbbf24"><path d="m12 3 2.7 5.6 6.1.9-4.4 4.3 1 6.2-5.4-2.9-5.4 2.9 1-6.2L3.2 9.5l6.1-.9Z"></path></svg><svg width="17" height="17" viewBox="0 0 24 24" fill="#fbbf24"><path d="m12 3 2.7 5.6 6.1.9-4.4 4.3 1 6.2-5.4-2.9-5.4 2.9 1-6.2L3.2 9.5l6.1-.9Z"></path></svg><svg width="17" height="17" viewBox="0 0 24 24" fill="#fbbf24"><path d="m12 3 2.7 5.6 6.1.9-4.4 4.3 1 6.2-5.4-2.9-5.4 2.9 1-6.2L3.2 9.5l6.1-.9Z"></path></svg><svg width="17" height="17" viewBox="0 0 24 24" fill="#fbbf24"><path d="m12 3 2.7 5.6 6.1.9-4.4 4.3 1 6.2-5.4-2.9-5.4 2.9 1-6.2L3.2 9.5l6.1-.9Z"></path></svg><svg width="17" height="17" viewBox="0 0 24 24" fill="#fbbf24"><path d="m12 3 2.7 5.6 6.1.9-4.4 4.3 1 6.2-5.4-2.9-5.4 2.9 1-6.2L3.2 9.5l6.1-.9Z"></path></svg></div>
          <blockquote style="margin:0;font-size:15.5px;line-height:1.65;color:var(--ink-soft);flex:1">"Booked a planned transfer for my father from Gurgaon. Ambulance arrived on time, the attendant was patient with him, and the vehicle was clean."</blockquote>
          <figcaption style="font-size:14px;font-weight:700;color:var(--ink)">â€” Patient family member <span style="font-weight:500;color:var(--ink-muted)">· Gurgaon</span></figcaption>
        </figure>
        <figure style="margin:0;background:var(--canvas);border-radius:32px;padding:28px;display:flex;flex-direction:column;gap:14px">
          <div style="display:flex;gap:3px" aria-label="5 out of 5"><svg width="17" height="17" viewBox="0 0 24 24" fill="#fbbf24"><path d="m12 3 2.7 5.6 6.1.9-4.4 4.3 1 6.2-5.4-2.9-5.4 2.9 1-6.2L3.2 9.5l6.1-.9Z"></path></svg><svg width="17" height="17" viewBox="0 0 24 24" fill="#fbbf24"><path d="m12 3 2.7 5.6 6.1.9-4.4 4.3 1 6.2-5.4-2.9-5.4 2.9 1-6.2L3.2 9.5l6.1-.9Z"></path></svg><svg width="17" height="17" viewBox="0 0 24 24" fill="#fbbf24"><path d="m12 3 2.7 5.6 6.1.9-4.4 4.3 1 6.2-5.4-2.9-5.4 2.9 1-6.2L3.2 9.5l6.1-.9Z"></path></svg><svg width="17" height="17" viewBox="0 0 24 24" fill="#fbbf24"><path d="m12 3 2.7 5.6 6.1.9-4.4 4.3 1 6.2-5.4-2.9-5.4 2.9 1-6.2L3.2 9.5l6.1-.9Z"></path></svg><svg width="17" height="17" viewBox="0 0 24 24" fill="#fbbf24"><path d="m12 3 2.7 5.6 6.1.9-4.4 4.3 1 6.2-5.4-2.9-5.4 2.9 1-6.2L3.2 9.5l6.1-.9Z"></path></svg></div>
          <blockquote style="margin:0;font-size:15.5px;line-height:1.65;color:var(--ink-soft);flex:1">"Called at 2 am and someone picked up immediately. They asked the right questions and sent the ambulance type they said they would."</blockquote>
          <figcaption style="font-size:14px;font-weight:700;color:var(--ink)">â€” Patient family member <span style="font-weight:500;color:var(--ink-muted)">· Ghaziabad</span></figcaption>
        </figure>
      </div>
    </div>
  </section>
  </sc-if>

  <section style="padding:clamp(48px,6vw,80px) 0">
    <div style="max-width:1200px;margin:0 auto;padding:0 clamp(20px,5vw,64px)">
      <div data-reveal style="display:grid;grid-template-columns:repeat(auto-fit,minmax(min(200px,45%),1fr));gap:1px;background:var(--line);border:1px solid var(--line);border-radius:36px;overflow:hidden;box-shadow:var(--shadow-sm)">
        <div style="background:var(--card);padding:34px 26px;text-align:center">
          <p style="margin:0;font-weight:900;font-size:clamp(30px,3.4vw,42px);letter-spacing:-0.03em;background:var(--grad-headline);-webkit-background-clip:text;background-clip:text;-webkit-text-fill-color:transparent;color:transparent">24/7</p>
          <p style="margin:6px 0 0;font-size:14px;font-weight:600;color:var(--ink-muted)">Emergency availability</p>
        </div>
        <div style="background:var(--card);padding:34px 26px;text-align:center">
          <p style="margin:0;font-weight:900;font-size:clamp(30px,3.4vw,42px);letter-spacing:-0.03em;background:var(--grad-headline);-webkit-background-clip:text;background-clip:text;-webkit-text-fill-color:transparent;color:transparent">Greater Noida</p>
          <p style="margin:6px 0 0;font-size:14px;font-weight:600;color:var(--ink-muted)">Service coverage</p>
        </div>
        <div style="background:var(--card);padding:34px 26px;text-align:center">
          <p style="margin:0;font-weight:900;font-size:clamp(30px,3.4vw,42px);letter-spacing:-0.03em;background:var(--grad-headline);-webkit-background-clip:text;background-clip:text;-webkit-text-fill-color:transparent;color:transparent">Multiple</p>
          <p style="margin:6px 0 0;font-size:14px;font-weight:600;color:var(--ink-muted)">Ambulance types</p>
        </div>
        <div style="background:var(--card);padding:34px 26px;text-align:center">
          <p style="margin:0;font-weight:900;font-size:clamp(30px,3.4vw,42px);letter-spacing:-0.03em;background:var(--grad-headline);-webkit-background-clip:text;background-clip:text;-webkit-text-fill-color:transparent;color:transparent">Fast</p>
          <p style="margin:6px 0 0;font-size:14px;font-weight:600;color:var(--ink-muted)">Response support</p>
        </div>
      </div>
    </div>
  </section>

  
  <section style="background:var(--canvas);padding:clamp(40px,7vw,80px) 0;border-bottom:1px solid var(--line)">
    <div style="max-width:1200px;margin:0 auto;padding:0 clamp(20px,5vw,64px)">
      <h2 style="margin:0 0 12px;font-weight:800;font-size:clamp(24px,3vw,36px);letter-spacing:-0.02em;color:var(--ink)">Areas We Cover in Greater Noida</h2>
      <p style="margin:0;font-size:16px;line-height:1.65;color:var(--ink-soft);max-width:80ch">
        Our emergency ambulance network extends across all major neighborhoods and localities in Greater Noida, including: <strong>Alpha, Beta, Gamma sectors, Knowledge Park, Pari Chowk</strong>. We ensure rapid response times to these areas for both emergency and planned patient transfers.
      </p>
    </div>
  </section>
  
  <section id="faqs" style="background:var(--card);padding:clamp(64px,9vw,120px) 0;border-top:1px solid var(--line);border-bottom:1px solid var(--line)">
    <div style="max-width:1200px;margin:0 auto;padding:0 clamp(20px,5vw,64px)">
      <div data-reveal style="max-width:52ch;margin-bottom:clamp(28px,3.5vw,44px)">
        <span style="font-weight:700;font-size:13px;letter-spacing:.14em;text-transform:uppercase;color:var(--purple-600)">FAQs</span>
        <h2 style="margin:10px 0 12px;font-weight:900;font-size:clamp(30px,4.2vw,52px);letter-spacing:-0.035em;line-height:1.02;text-wrap:balance;background:var(--grad-headline);-webkit-background-clip:text;background-clip:text;-webkit-text-fill-color:transparent;color:transparent">Ambulance service questions, answered</h2>
      </div>
      <div data-reveal style="display:grid;grid-template-columns:repeat(auto-fit,minmax(min(420px,100%),1fr));gap:12px 20px;align-items:start">
        <details data-faq style="background:var(--canvas);border-radius:20px;padding:4px 20px">
          <summary style="display:flex;align-items:center;justify-content:space-between;gap:16px;padding:18px 0;cursor:pointer;font-size:16px;font-weight:700;color:var(--ink);list-style:none">Is ambulance service available 24/7 in Greater Noida?<svg data-chev width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--purple-600)" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" style="flex:none;transition:transform 180ms var(--ease)"><path d="m6 9 6 6 6-6"></path></svg></summary>
          <p style="margin:0 0 18px;font-size:15px;line-height:1.65;color:var(--ink-soft)">Yes. Our helpline is answered 24 hours a day, 7 days a week, including holidays, across Delhi, Gurgaon, Noida, Ghaziabad and Faridabad.</p>
        </details>
        <details data-faq style="background:var(--canvas);border-radius:20px;padding:4px 20px">
          <summary style="display:flex;align-items:center;justify-content:space-between;gap:16px;padding:18px 0;cursor:pointer;font-size:16px;font-weight:700;color:var(--ink);list-style:none">Do you cover Pari Chowk and Knowledge Park in Greater Noida?<svg data-chev width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--purple-600)" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" style="flex:none;transition:transform 180ms var(--ease)"><path d="m6 9 6 6 6-6"></path></svg></summary>
          <p style="margin:0 0 18px;font-size:15px;line-height:1.65;color:var(--ink-soft)">Yes, we have 24/7 coverage in Greater Noida, including Pari Chowk, Knowledge Park, and the Alpha/Beta/Gamma sectors.</p>
        </details>
        <details data-faq style="background:var(--canvas);border-radius:20px;padding:4px 20px">
          <summary style="display:flex;align-items:center;justify-content:space-between;gap:16px;padding:18px 0;cursor:pointer;font-size:16px;font-weight:700;color:var(--ink);list-style:none">Do you provide ICU ambulance service?<svg data-chev width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--purple-600)" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" style="flex:none;transition:transform 180ms var(--ease)"><path d="m6 9 6 6 6-6"></path></svg></summary>
          <p style="margin:0 0 18px;font-size:15px;line-height:1.65;color:var(--ink-soft)">Yes. ICU ambulances carry ICU-level equipment including ventilator support, a cardiac monitor and an infusion pump, with a critical care team on board.</p>
        </details>
        <details data-faq style="background:var(--canvas);border-radius:20px;padding:4px 20px">
          <summary style="display:flex;align-items:center;justify-content:space-between;gap:16px;padding:18px 0;cursor:pointer;font-size:16px;font-weight:700;color:var(--ink);list-style:none">Do you provide ventilator ambulance service?<svg data-chev width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--purple-600)" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" style="flex:none;transition:transform 180ms var(--ease)"><path d="m6 9 6 6 6-6"></path></svg></summary>
          <p style="margin:0 0 18px;font-size:15px;line-height:1.65;color:var(--ink-soft)">Yes. Ventilator-equipped ambulances are available on request. Please mention the patient's condition on the call so the right vehicle and staff are assigned.</p>
        </details>
        <details data-faq style="background:var(--canvas);border-radius:20px;padding:4px 20px">
          <summary style="display:flex;align-items:center;justify-content:space-between;gap:16px;padding:18px 0;cursor:pointer;font-size:16px;font-weight:700;color:var(--ink);list-style:none">Can I book an ALS ambulance in Greater Noida?<svg data-chev width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--purple-600)" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" style="flex:none;transition:transform 180ms var(--ease)"><path d="m6 9 6 6 6-6"></path></svg></summary>
          <p style="margin:0 0 18px;font-size:15px;line-height:1.65;color:var(--ink-soft)">Yes, Advanced Life Support (ALS) ambulances are available round-the-clock for critical patients in Greater Noida.</p>
        </details>
        <details data-faq style="background:var(--canvas);border-radius:20px;padding:4px 20px">
          <summary style="display:flex;align-items:center;justify-content:space-between;gap:16px;padding:18px 0;cursor:pointer;font-size:16px;font-weight:700;color:var(--ink);list-style:none">Can I book an ALS ambulance in Greater Noida?<svg data-chev width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--purple-600)" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" style="flex:none;transition:transform 180ms var(--ease)"><path d="m6 9 6 6 6-6"></path></svg></summary>
          <p style="margin:0 0 18px;font-size:15px;line-height:1.65;color:var(--ink-soft)">Yes, Advanced Life Support (ALS) ambulances are available round-the-clock for critical patients in Greater Noida.</p>
        </details>
        <details data-faq style="background:var(--canvas);border-radius:20px;padding:4px 20px">
          <summary style="display:flex;align-items:center;justify-content:space-between;gap:16px;padding:18px 0;cursor:pointer;font-size:16px;font-weight:700;color:var(--ink);list-style:none">Do you provide hospital-to-hospital transfers?<svg data-chev width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--purple-600)" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" style="flex:none;transition:transform 180ms var(--ease)"><path d="m6 9 6 6 6-6"></path></svg></summary>
          <p style="margin:0 0 18px;font-size:15px;line-height:1.65;color:var(--ink-soft)">Yes. We coordinate planned and emergency shifting between hospitals, including ICU and emergency department transfers.</p>
        </details>
        <details data-faq style="background:var(--canvas);border-radius:20px;padding:4px 20px">
          <summary style="display:flex;align-items:center;justify-content:space-between;gap:16px;padding:18px 0;cursor:pointer;font-size:16px;font-weight:700;color:var(--ink);list-style:none">Can I book an ambulance for long-distance transportation?<svg data-chev width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--purple-600)" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" style="flex:none;transition:transform 180ms var(--ease)"><path d="m6 9 6 6 6-6"></path></svg></summary>
          <p style="margin:0 0 18px;font-size:15px;line-height:1.65;color:var(--ink-soft)">Yes. Intercity and long-distance transfers are arranged with a medical escort where required. Share the route and the patient's condition when you call.</p>
        </details>
        <details data-faq style="background:var(--canvas);border-radius:20px;padding:4px 20px">
          <summary style="display:flex;align-items:center;justify-content:space-between;gap:16px;padding:18px 0;cursor:pointer;font-size:16px;font-weight:700;color:var(--ink);list-style:none">What is the difference between BLS and ALS ambulance?<svg data-chev width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--purple-600)" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" style="flex:none;transition:transform 180ms var(--ease)"><path d="m6 9 6 6 6-6"></path></svg></summary>
          <p style="margin:0 0 18px;font-size:15px;line-height:1.65;color:var(--ink-soft)">A BLS ambulance carries basic life support â€” stretcher, oxygen, first-aid equipment and a trained attendant. An ALS ambulance adds advanced life support such as cardiac monitoring, emergency medicines and trained medical staff.</p>
        </details>
        <details data-faq style="background:var(--canvas);border-radius:20px;padding:4px 20px">
          <summary style="display:flex;align-items:center;justify-content:space-between;gap:16px;padding:18px 0;cursor:pointer;font-size:16px;font-weight:700;color:var(--ink);list-style:none">Do you provide neonatal ambulance service?<svg data-chev width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--purple-600)" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" style="flex:none;transition:transform 180ms var(--ease)"><path d="m6 9 6 6 6-6"></path></svg></summary>
          <p style="margin:0 0 18px;font-size:15px;line-height:1.65;color:var(--ink-soft)">Yes. Neonatal ambulances are equipped with an incubator, infant monitoring, oxygen support and temperature control, with trained neonatal support staff.</p>
        </details>
        <details data-faq style="background:var(--canvas);border-radius:20px;padding:4px 20px">
          <summary style="display:flex;align-items:center;justify-content:space-between;gap:16px;padding:18px 0;cursor:pointer;font-size:16px;font-weight:700;color:var(--ink);list-style:none">Can I book an ambulance through WhatsApp?<svg data-chev width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--purple-600)" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" style="flex:none;transition:transform 180ms var(--ease)"><path d="m6 9 6 6 6-6"></path></svg></summary>
          <p style="margin:0 0 18px;font-size:15px;line-height:1.65;color:var(--ink-soft)">Yes. Send your pickup location, destination and the patient's condition on WhatsApp and our team will respond. For emergencies, please call instead.</p>
        </details>
        <details data-faq style="background:var(--canvas);border-radius:20px;padding:4px 20px">
          <summary style="display:flex;align-items:center;justify-content:space-between;gap:16px;padding:18px 0;cursor:pointer;font-size:16px;font-weight:700;color:var(--ink);list-style:none">How quickly can an ambulance reach my location?<svg data-chev width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--purple-600)" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" style="flex:none;transition:transform 180ms var(--ease)"><path d="m6 9 6 6 6-6"></path></svg></summary>
          <p style="margin:0 0 18px;font-size:15px;line-height:1.65;color:var(--ink-soft)">It depends on your exact location, traffic and the ambulance type required. Our dispatch team will give you a realistic time estimate on the call and assign the nearest suitable ambulance.</p>
        </details>
      </div>
    </div>
  </section>

  <section id="contact" style="padding:clamp(64px,9vw,110px) 0">
    <div style="max-width:1200px;margin:0 auto;padding:0 clamp(20px,5vw,64px)">
      <div data-reveal style="text-align:center;max-width:820px;margin:0 auto">
        <h2 style="margin:0 0 16px;font-weight:900;font-size:clamp(30px,4.4vw,56px);letter-spacing:-0.035em;line-height:1.02;text-wrap:balance;background:var(--grad-headline);-webkit-background-clip:text;background-clip:text;-webkit-text-fill-color:transparent;color:transparent">Need Safe &amp; Reliable Ambulance Service in Greater Noida?</h2>
        <p style="margin:0 auto 30px;font-size:18px;line-height:1.6;color:var(--ink-soft);max-width:56ch;text-wrap:pretty">Call our emergency helpline or WhatsApp us to arrange the right ambulance for your patient.</p>
        <div style="display:flex;flex-wrap:wrap;gap:14px;justify-content:center">
          <a href="{{ telHref }}" style="display:inline-flex;align-items:center;gap:11px;padding:20px 32px;border-radius:20px;background:linear-gradient(180deg,#EF4444 0%,#DC2626 100%);color:#fff;font-weight:800;font-size:18px;text-decoration:none;box-shadow:0 24px 56px -20px rgba(220,38,38,.9)" style-hover="transform:translateY(-2px)">
            <svg width="21" height="21" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round"><path d="M6.6 3.5 4 4.6c-.9.4-1.3 1.4-1 2.3a17 17 0 0 0 11 11c.9.3 1.9-.1 2.3-1l1.1-2.6a1.5 1.5 0 0 0-.7-1.9l-2.6-1.3a1.5 1.5 0 0 0-1.8.4l-.9 1.1a12.6 12.6 0 0 1-4.9-4.9l1.1-.9a1.5 1.5 0 0 0 .4-1.8L8.5 4.2a1.5 1.5 0 0 0-1.9-.7Z"></path></svg>
            Call Ambulance Now
          </a>
          <a href="{{ waHref }}" target="_blank" rel="noopener" style="display:inline-flex;align-items:center;gap:11px;padding:20px 30px;border-radius:20px;background:#fff;border:1px solid rgba(16,185,129,.4);color:#047857;font-weight:700;font-size:18px;text-decoration:none;box-shadow:var(--shadow-sm)" style-hover="border-color:#10B981;transform:translateY(-2px);box-shadow:var(--shadow-md)">
            <svg width="21" height="21" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.4 8.4 0 0 1-12.6 7.3L3 20.5l1.8-5.2A8.4 8.4 0 1 1 21 11.5Z"></path></svg>
            WhatsApp Us
          </a>
        </div>
        <p style="margin:26px 0 0;font-size:clamp(22px,2.6vw,30px);font-weight:900;letter-spacing:-0.02em;color:var(--ink)">{{ phone }}</p>
        <p style="margin:6px 0 0;font-size:13px;font-weight:700;letter-spacing:.12em;text-transform:uppercase;color:#047857">Available 24 hours · 7 days a week</p>
      </div>
    </div>
  </section>
</main>

<?php include '../../footer.php'; ?>


