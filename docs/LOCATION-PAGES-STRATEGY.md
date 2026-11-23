# Location Pages Strategy: Ambulance Service Across India

**Goal:** rank for "ambulance service in {district}" and "{service} in {district}" searches in every district of India,
without the pages being treated as doorway or scaled-content spam.

**Status (23 Nov 2026):** the page engine is built. Uttar Pradesh is live in the code: 75 districts, 684 pages.
The other 35 states and UTs are loaded as data and return 404 until they are published.

---

## 1. The numbers

| Page type | URL pattern | Example | Count (all India) |
|---|---|---|---|
| India index | `/ambulance-service/` | – | 1 |
| State hub | `/ambulance-service/{state}/` | `/ambulance-service/uttar-pradesh/` | 36 |
| Service in state | `/ambulance-service/{state}/{service}/` | `/ambulance-service/uttar-pradesh/icu-ambulance/` | 288 |
| District | `/ambulance-service/{state}/{district}/` | `/ambulance-service/uttar-pradesh/gorakhpur/` | 781 |
| Service in district | `/ambulance-service/{state}/{district}/{service}/` | `/ambulance-service/uttar-pradesh/gorakhpur/icu-ambulance/` | 6,248 |
| **Total** | | | **7,354** |

**The 8 services:** Emergency, ICU, ALS, BLS, Cardiac, Ventilator, Air Ambulance, Patient Transfer.
They are defined in `data/services.php`. Neonatal and Mortuary can be added there later; that adds 781 pages per service.

**Each state's page count** = 9 × districts + 9. For example: UP = 9 × 75 + 9 = 684. Bihar = 351. MP = 504. Rajasthan = 378.

---

## 2. How internal linking works

```
Home ──► /ambulance-service/ (India) ──► State hub ──► District page ──► District × Service pages
  │                                         │  ▲              │  ▲               │
  └─ footer: published states               │  └── breadcrumb ┘  └── breadcrumb ─┘
                                            └──► Service-in-state ──► District × Service
```

* **Footer dropdown, "We are also serving in these areas".** It is a closed `<details>` dropdown with 4 columns
  (3, 2 or 1 column on smaller screens). It opens on click, and every link is plain HTML, so Google can crawl it.
  The links depend on which page you are on:
  * A district page lists all districts of its state, e.g. "Ambulance Service in Basti". The current page is highlighted.
    The parent link at the top points to the state hub.
  * A district × service page lists the same service in every district, e.g. "ICU Ambulance in Basti".
    The parent link points to "ICU Ambulance in Uttar Pradesh".
  * The home, blog and legal pages list the published states plus the NCR city pages.
  * The Noida, Ghaziabad and Greater Noida pages show the UP districts.
* **Nearby districts.** Each district links to the other districts in its division, for example
  Gorakhpur links to Deoria, Kushinagar and Maharajganj. Service pages link to the same service in nearby districts.
* **Breadcrumbs** appear on every page, with BreadcrumbList schema.
* **No page links to an unpublished state.** This is enforced in code.
* **Districts that already have hand-built pages** (Noida, Ghaziabad, Gurugram, Faridabad, Delhi) redirect
  from the generated URL to the existing page (301). This stops two pages competing for the same keyword.

---

## 3. Content strategy: staying on the right side of Google

Google's spam policies target *doorway pages* and *scaled content abuse*, meaning many pages where only the city name changes.
This is the biggest risk of the project, so the engine is designed around it:

**Already built in:**
1. **Real district data, not just a name swap.** Each page shows the district's division, its headquarters town,
   the referral hospitals for that region, the nearest airport for air ambulance, and nearby districts.
   All of this is fully populated for UP.
2. **Copy variants.** Intros and descriptions rotate between variants, chosen per page and stable across visits.
3. **Honest positioning.** Every page says we are a booking and dispatch helpline working with partner operators,
   which matches the privacy policy, and mentions that 108 is the free government ambulance.
   There are no fake addresses, no invented response times and no fake reviews.
4. **Useful structure.** Each page has a "which ambulance does the patient need" table, inter-city routes,
   booking steps and FAQs (with FAQPage schema).

**Measured similarity** (5-word phrase overlap between two pages):

| Pair | Overlap |
|---|---|
| Gorakhpur vs Basti (template only) | 55% |
| Gorakhpur vs Jhansi (template only) | 52% |
| ICU Ambulance Gorakhpur vs Jhansi | 58% |
| **Gorakhpur with local content** vs Basti | **48%** |

**Target: under 40% for the top 20% of districts.** You get there through **content enrichment** in
`data/local/{state}.php` (see the Gorakhpur example). For each priority district, add:
* 1–2 paragraphs written specifically about the district: medical landscape, typical referral patterns, highway or terrain notes
* 10–15 real localities, tehsils and towns covered
* 3–5 hospitals patients are commonly taken to (names must be verified)
* Optional, and high value: a real photo of a partner ambulance in that city, real Google reviews (with a link), and
  real response-time data once you have it

**Never do this:** create Google Business Profiles with fake addresses per district, copy text from competitors,
add fake testimonials, or claim "our ambulance fleet in X" (you are a connection service).

---

## 4. Roll-out plan

Publishing 7,000 pages on a new domain in one go usually ends with most of them stuck in
"Discovered – currently not indexed". Roll out in batches and let each batch prove itself first.

| Phase | States | New pages | Before publishing |
|---|---|---|---|
| **1 (now)** | Uttar Pradesh | 684 | Set the domain, submit the sitemap, enrich the top 15 UP districts |
| 2 | Delhi, Haryana, Uttarakhand | 441 | Add divisions, hubs and airports to the data; review the overrides |
| 3 | Bihar, Madhya Pradesh, Rajasthan, Punjab | 1,449 | Same as above + local content for the top 20% of districts |
| 4 | Maharashtra, Gujarat, West Bengal, Jharkhand, Odisha, Chhattisgarh | 1,674 | Same as above |
| 5 | Karnataka, Tamil Nadu, Telangana, Andhra Pradesh, Kerala | 1,323 | Same as above |
| 6 | North-East, Himachal, J&K, Ladakh, Goa, Sikkim, other UTs (17) | 1,782 | Same as above |

**When to move to the next phase:** at least 70% of the previous phase is indexed (Search Console → Pages report),
impressions are growing, and the top districts are enriched. That is typically 3–6 weeks per phase.

**Priority districts in UP to enrich first:** Lucknow, Kanpur Nagar, Varanasi, Prayagraj, Agra, Gorakhpur (done as the example),
Meerut, Bareilly, Aligarh, Moradabad, Jhansi, Ayodhya, Saharanpur, Mathura, Gautam Buddh Nagar.

---

## 5. Keywords and on-page formulas

| Page | Title formula | H1 |
|---|---|---|
| District | `Ambulance Service in {District (HQ)} \| 24/7 ICU & Emergency Ambulance` | Ambulance Service in {District (HQ)} |
| District × service | `{Service} in {District (HQ)} \| 24/7 Booking – Call {phone}` | {Service} in {District (HQ)} |
| State | `Ambulance Service in {State} \| 24/7 in All {N} Districts` | Ambulance Service in {State} |

* The **HQ in brackets** captures searches by town name, for example Sant Kabir Nagar (**Khalilabad**),
  Kushinagar (**Padrauna**) and Gautam Buddh Nagar (**Noida**).
* **Keyword families the pages cover:** "ambulance service in X", "ambulance near me X", "ICU / ventilator / cardiac ambulance X",
  "X to Lucknow ambulance" (inter-city routes block), "private ambulance X", "ambulance number X".
* **Next step:** Hindi versions (`/hi/…`) for UP, Bihar, MP and Rajasthan, where many searches are in Hindi
  ("एम्बुलेंस सेवा गोरखपुर"), linked with `hreflang`.
* **Also worth building:** national service hubs (`/icu-ambulance/` etc.) and high-volume route pages
  (for example "Gorakhpur to Lucknow ambulance") once Phase 1 is indexed.

---

## 6. Technical setup

| Item | Status |
|---|---|
| `<title>`, meta description, canonical, Open Graph on every page | ✅ Added (before this, no page had a title) |
| JSON-LD: BreadcrumbList, Service (areaServed), FAQPage on location pages | ✅ |
| Dynamic `/sitemap.xml` (location pages for published states + blog) | ✅ `sitemap.php` |
| Unpublished states return 404; `?preview=1` shows them with `noindex` | ✅ |
| Location pages are plain server-rendered HTML (~50 KB, no JavaScript runtime) | ✅ |
| Images converted to WebP (17 files, 1.2 MB total vs 2.5 MB for the 3 old JPGs) | ✅ |
| Broken characters (`â€”`, `Ã—`) on the NCR pages | ✅ Fixed |
| **Set the real domain** in `config.php` (`SITE_URL`) and `robots.txt` | ⚠️ To do |
| Submit `/sitemap.xml` in Google Search Console | ⚠️ To do after the domain is set |
| Home and NCR pages still load React + the Babel compiler from unpkg and stay blank until it runs | ⚠️ Recommend rebuilding them as static PHP, like the location pages (big speed and SEO gain) |
| NCR city pages are near-copies of the home page | ⚠️ Rebuild them on the new template with local content |
| Testimonials section is a placeholder; booking form is a demo (not connected) | ⚠️ Replace or hide |

---

## 7. How to operate it

* **Publish a state:** add its slug to `PUBLISHED_STATES` in `config.php`. The pages, sitemap and footer links update automatically.
* **Preview a state before publishing:** visit `/ambulance-service/bihar/patna/?preview=1` (it is `noindex`).
* **Enrich a state** (do this before publishing): in `data/india.php`, convert its flat `districts` list into `divisions`
  with `hubs` and an `airport`, the same way UP is set up. This unlocks the referral-hospital and air-ambulance lines.
* **Add local content:** create or extend `data/local/{state}.php`.
* **District added or renamed by the government:** edit `data/india.php`. Check against the Local Government Directory
  (lgdirectory.gov.in) before each phase. Some recent changes in the data that should be re-verified:
  Assam's 4 restored districts, Sribhumi (formerly Karimganj), Vav-Tharad in Gujarat, Rajasthan's 41 districts after Dec 2024,
  Meluri in Nagaland, and Arunachal's Keyi Panyor and Bichom.
* **Files:** `config.php` · `data/india.php` · `data/services.php` · `data/local/` · `inc/locations.php` (logic) ·
  `inc/partials.php` (blocks) · `templates/loc-*.php` (5 page types) · `location.php` (router) · `.htaccess`

---

## 8. Decisions needed from the owner

1. **Brand name.** "NCR Ambulance" reads as Delhi-only on a Gorakhpur or Patna page. Consider a pan-India name before Phase 2.
2. **Domain.** It is needed for canonicals, the sitemap and Search Console.
3. **Partner coverage.** Confirm which states you can actually serve (partner operators). Publish only those.
4. **Business email and real reviews.** Both are placeholders today.
