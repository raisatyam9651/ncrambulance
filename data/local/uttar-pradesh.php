<?php
/**
 * Hand-written local content for Uttar Pradesh district pages.
 * This is what makes each page genuinely unique; fill it in for priority districts first
 * (see docs/LOCATION-PAGES-STRATEGY.md, "Content enrichment").
 *
 * Keys are district slugs. All fields are optional:
 *   'about'     => one or more paragraphs (string or array of strings) written about THIS district
 *   'areas'     => localities / towns / tehsils covered
 *   'hospitals' => hospitals patients are commonly taken to (verify names before publishing)
 *
 * Only add facts the team has verified. Do not copy text from other websites.
 */
return [
    // EXAMPLE entry — written from public knowledge; have the team review it before launch.
    'gorakhpur' => [
        'about' => [
            'Gorakhpur is the main medical centre of eastern Uttar Pradesh. Patients from Deoria, Kushinagar, Maharajganj, Basti and neighbouring districts of Bihar are often referred to its hospitals, especially those around Medical College Road and the AIIMS campus.',
            'For patients who need super-specialist care beyond Gorakhpur, we can arrange long-distance ICU and ventilator transfers to Lucknow and Delhi, and air ambulance flights from Gorakhpur airport.',
        ],
        'areas' => ['Golghar', 'Gorakhnath', 'Medical College Road', 'Rapti Nagar', 'Shahpur', 'Taramandal', 'Betiahata', 'Mohaddipur', 'Kunraghat', 'Rustampur', 'Sahjanwa', 'Chauri Chaura', 'Campierganj', 'Bansgaon'],
        'hospitals' => ['AIIMS Gorakhpur', 'BRD Medical College & Nehru Hospital', 'District Hospital, Gorakhpur'],
    ],
];
