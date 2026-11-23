<?php
$post = [
  'title' => "How to Use an AED: Defibrillator Steps Anyone Can Follow",
  'seo_title' => "How to Use an AED Defibrillator: Simple Steps for Anyone",
  'description' => "Learn how to use an AED defibrillator on someone who has collapsed: where the pads go, staying safe during a shock and doing CPR until the ambulance arrives.",
  'excerpt' => "An AED talks you through every step, and it only shocks a heart that needs it. Here is how to use one with confidence, from switching it on to handing over to the ambulance crew.",
  'topic' => "Automated external defibrillator (AED) use",
  'category' => "heart-breathing",
  'icon' => "zap",
  'date' => "2026-11-23",
  'updated' => "2026-11-23",
  'order' => 4,
  'image_alt' => "How to use an AED defibrillator: pad placement on the bare chest of a collapsed adult",
  'steps_title' => "Collapsed? Get the AED",
  'steps' => [
    "Call 112 on speaker, start CPR and send someone to fetch the nearest AED.",
    "Switch the AED on and follow its voice prompts. Keep CPR going while you set up.",
    "Bare and dry the chest. Remove medicine patches and move jewellery off the pad area.",
    "Stick the pads exactly as the pictures show. Plug in the connector if needed.",
    "Make sure nobody touches the patient while it analyses. Press shock only if told to.",
    "Restart CPR straight after the shock and follow the prompts until the crew arrives.",
  ],
  'donts' => [
    "Touch the patient while it analyses or shocks",
    "Use it on a wet chest or in standing water",
    "Remove the pads or switch it off if they wake up",
  ],
  'faqs' => [
    [
      'q' => "Can an untrained person use an AED in India?",
      'a' => "Yes. Public-access AEDs are designed for people with no medical training. Once switched on, the machine gives clear spoken instructions, and many models also show pictures or text on a screen. It analyses the heart rhythm by itself and only allows a shock when one is needed. Indian law protects people who help in good faith in an emergency, so don't let fear stop you.",
    ],
    [
      'q' => "Can an AED be used on a pregnant woman?",
      'a' => "Yes. If a pregnant woman collapses and is not breathing normally, she needs CPR and an AED just like anyone else, and the shock does not harm the baby. Saving the mother is the best way to protect the baby. Place the pads in the usual positions, push hard in the centre of the chest and tell the dispatcher she is pregnant.",
    ],
    [
      'q' => "What if the person has a pacemaker?",
      'a' => "You can still use an AED. A pacemaker or implanted defibrillator usually shows as a small lump under the skin, often below the left collarbone. Don't put a pad directly on top of it. Place the pad a few centimetres away, or use the front-and-back pad position shown on the pad diagram. Then follow the voice prompts as normal.",
    ],
    [
      'q' => "Can I use an AED in the rain or near water?",
      'a' => "Yes, but take care. Move the person away from puddles or standing water if you can, and quickly wipe the chest dry with a towel or cloth before sticking the pads. Water can carry the shock across the skin, so the pads may not work well and helpers could feel it. A damp floor is not a reason to delay. Just make sure nobody is touching the patient during the shock.",
    ],
    [
      'q' => "What does it mean when the AED says no shock advised?",
      'a' => "It means the machine has not found a heart rhythm that a shock can fix. This does not mean the person is fine. Their heart may have stopped completely, which a shock cannot restart, or it may be beating too weakly to keep them alive. Start CPR straight away and keep going, following the AED's prompts, until the crew takes over.",
    ],
    [
      'q' => "Should we keep an AED in our housing society or office?",
      'a' => "Having an AED nearby can save vital minutes, because a defibrillator works best when used within the first few minutes of a collapse. If your RWA or office is considering one, place it somewhere central and unlocked, such as the main gate or reception, check its battery and pad expiry dates regularly, and train guards and staff in CPR so they know how to use it.",
    ],
  ],
  'related' => [
    "how-to-do-cpr",
    "heart-attack-first-aid",
    "cpr-on-child-and-baby",
    "unconscious-person-first-aid",
  ],
  'services' => [
    "als",
    "cardiac",
    "emergency",
  ],
];
if (!empty($BLOG_META_ONLY)) return $post;
require __DIR__ . '/_inc/post-top.php';
?>

<p>Picture this: a colleague collapses near the lifts in a busy office tower. Someone is already on the phone, someone else is pushing on his chest, and the security guard is staring at a white box on the wall marked with a heart and a lightning bolt. Nobody wants to open it. They are afraid they will hurt him, or get the steps wrong.</p>

<p>That box is an AED, and it is built for exactly this moment. This guide explains what an AED does, where you can find one, how to use it step by step, where the pads go on adults and children, and why it can't shock someone who doesn't need it. Using an AED and CPR together keeps the patient alive until a <a href="<?= link_to('cardiac') ?>">cardiac ambulance with a defibrillator and heart monitoring</a> takes over.</p>

<h2>What is an AED and why does it matter?</h2>

<p>An <strong>AED (automated external defibrillator)</strong> is a portable, battery-powered machine that checks the heart's rhythm through two sticky pads on the chest. In many sudden cardiac arrests, the heart's electrical system goes into chaos and the heart muscle quivers instead of pumping. This is called ventricular fibrillation. A controlled electric shock can stop that chaos and give the heart a chance to restart a normal rhythm.</p>

<p>CPR alone keeps some blood flowing, but it usually can't fix the rhythm. A defibrillator can. The chance of a shock working falls with every minute that passes, which is why using an AED within the first few minutes of a collapse, before the ambulance arrives, can make such a difference. If you haven't started CPR yet, learn <a href="<?= post_url('how-to-do-cpr') ?>">how to do CPR on an adult step by step</a> first, because the two always go together.</p>

<h2>Where can you find an AED in Delhi NCR?</h2>

<p>AEDs are becoming more common in India, though they are not yet everywhere. You are most likely to find one at:</p>

<ul>
  <li>airports and some railway and metro stations,</li>
  <li>shopping malls, cinemas, hotels and large offices or IT parks,</li>
  <li>gyms, sports complexes, stadiums and marathon routes,</li>
  <li>schools, colleges, hospitals and clinics,</li>
  <li>some gated housing societies and clubhouses.</li>
</ul>

<p>Look for a green or white sign showing a heart with a lightning bolt, often near the reception, security desk, lifts or first-aid room. Opening the cabinet may set off an alarm. That is normal, and it helps alert others.</p>

<div class="callout callout-tip">
  <strong>Find yours before you need it</strong>
  <p>Ask your office facility team or your society RWA today: "Do we have an AED, and where is it kept?" Knowing the answer can save several minutes of searching during an emergency.</p>
</div>

<h2>Can an untrained person use an AED?</h2>

<p>Yes. Public-access AEDs are designed for ordinary people. Once switched on, the machine speaks clear instructions and many models show pictures on a screen. You don't need to read the heart rhythm or decide whether to shock: the AED does that for you.</p>

<p>There are two common types. A <strong>semi-automatic</strong> AED tells you when a shock is needed and asks you to press a flashing shock button. A <strong>fully automatic</strong> AED warns everyone to stand clear, counts down and delivers the shock itself. Either way, you just listen and follow the voice.</p>

<h2>How to use an AED: step by step</h2>

<h3>Step 1: Call for help and start CPR</h3>

<p>Use an AED only on someone who is <strong>unresponsive and not breathing normally</strong> (no breathing, or only gasping). Call 112 or an ambulance on speaker, start chest compressions and send someone to fetch the AED. Don't stop CPR to go and look for it yourself if someone else can go.</p>

<h3>Step 2: Switch it on</h3>

<p>Open the case and press the power button. On some models, lifting the lid switches it on automatically. From this point, the AED will talk you through each step. If there are two of you, one person keeps doing CPR while the other sets up the machine.</p>

<h3>Step 3: Prepare the chest</h3>

<ul>
  <li><strong>Bare the chest.</strong> Open or cut through the shirt, kurta or vest. Most AED kits include scissors. Move or remove a bra with an underwire if it is in the way. Ask others to hold up a shawl or sheet for privacy.</li>
  <li><strong>Dry the skin.</strong> Wipe away sweat or water with a towel or cloth.</li>
  <li><strong>Clear the pad area.</strong> Peel off any medicine patches and wipe the skin. Move metal chains and necklaces away from where the pads go.</li>
  <li><strong>Shave if needed.</strong> If the chest is very hairy, use the razor in the kit to quickly shave the pad areas so the pads stick firmly.</li>
</ul>

<h3>Step 4: Attach the pads</h3>

<p>Peel the pads from their backing and press them firmly onto the skin, exactly as shown in the pictures on the pads:</p>

<ul>
  <li><strong>Pad 1:</strong> on the upper right chest, just below the collarbone and to the right of the breastbone.</li>
  <li><strong>Pad 2:</strong> on the left side of the chest, over the ribs, about a hand's width below the armpit.</li>
</ul>

<p>If the person has a pacemaker (a small lump under the skin, usually below the left collarbone), place the pad a few centimetres away from it, not on top. Plug the pad cable into the machine if it isn't already connected.</p>

<h3>Step 5: Stand clear while it analyses</h3>

<p>The AED will say it is analysing the heart rhythm. Stop CPR and make sure <strong>nobody is touching the patient</strong>, including the person holding their hand or head. Movement can interfere with the reading. This takes only a few seconds.</p>

<h3>Step 6: Shock if advised</h3>

<p>If a shock is needed, the AED will tell everyone to stand clear. Look around, say loudly "Everyone stand back!" and check that no one is touching the patient. Then press the flashing shock button, or let a fully automatic AED deliver the shock itself. The body may jerk. That is normal.</p>

<h3>Step 7: Restart CPR immediately</h3>

<p>Straight after the shock, or if the AED says "no shock advised", go back to chest compressions at once. Don't wait for the person to wake up. The AED will check the rhythm again about every two minutes and tell you what to do. Keep following its prompts until the ambulance crew takes over.</p>

<?php inline_cta('als', 'Using an AED? Get an ambulance on the way'); ?>

<h2>Can an AED be used on children and babies?</h2>

<p>Yes. A child in cardiac arrest should get an AED just like an adult. For children <strong>under about eight years old</strong>, use child pads or the child key or switch if the AED has one, because they reduce the energy of the shock. If only adult pads are available, use them. A shock from an adult pad is far better than no shock at all.</p>

<p>On a small chest, adult pads may touch each other. If they would, place one pad in the <strong>centre of the front of the chest</strong> and the other in the <strong>centre of the back</strong>, between the shoulder blades. The full technique for little ones is in our guide to <a href="<?= post_url('cpr-on-child-and-baby') ?>">CPR on a child or baby</a>.</p>

<h2>Can an AED shock the wrong person or hurt you?</h2>

<p>An AED analyses the heart rhythm itself and will only advise or deliver a shock if it detects a rhythm that a shock can fix. If the person's heart is beating normally, it will not shock. You can't accidentally shock someone just by pressing the wrong button.</p>

<p>The risk to rescuers is very small as long as you follow the rules: nobody touches the patient during analysis or a shock, the chest is dry, and the patient is not lying in standing water. Our guide to the <a href="<?= post_url('good-samaritan-law-india') ?>">Good Samaritan law in India</a> explains why you also don't need to fear legal trouble for helping.</p>

<div class="callout callout-danger">
  <strong>Common misunderstandings</strong>
  <p>An AED is not a "restart button" for every stopped heart. If the heart has stopped completely (a "flat line"), the AED won't shock, and only CPR can help until the crew arrives. That is why CPR must never stop while you wait for the AED, or after it says "no shock advised". An AED is also not for someone who is awake with chest pain: for them, follow heart attack first aid and call an ambulance.</p>
</div>

<h2>If the person wakes up or starts breathing</h2>

<p>If the person starts breathing normally, moves or opens their eyes, stop CPR but <strong>leave the pads on and the AED switched on</strong>. The heart can go back into a dangerous rhythm without warning, and the AED needs to be ready to check and shock again.</p>

<p>If they are breathing but still unconscious, gently roll them into the recovery position with the pads still attached. Our guide to <a href="<?= post_url('unconscious-person-first-aid') ?>">first aid for an unconscious person</a> explains how. Watch their breathing closely. If they stop breathing normally again, roll them back and restart CPR straight away.</p>

<p>When the ambulance crew arrives, tell them when the person collapsed, how long CPR was given and how many shocks the AED delivered. The crew can connect the patient to their own monitor and defibrillator.</p>

<h2>Using an AED: quick do's and don'ts</h2>

<div class="do-dont">
  <div class="do">
    <h3>Do</h3>
    <ul>
      <li>Start CPR first and send someone for the AED</li>
      <li>Switch it on and follow every voice prompt</li>
      <li>Bare and dry the chest before sticking the pads</li>
      <li>Shout "Stand clear!" before every shock</li>
      <li>Restart CPR straight after the shock</li>
    </ul>
  </div>
  <div class="dont">
    <h3>Don't</h3>
    <ul>
      <li>Touch the patient during analysis or a shock</li>
      <li>Stop CPR while you wait for the AED to arrive</li>
      <li>Stick a pad over a pacemaker lump or a medicine patch</li>
      <li>Use it while the patient lies in water</li>
      <li>Remove the pads or switch it off if they wake up</li>
    </ul>
  </div>
</div>

<h2>Every minute counts</h2>

<p>In a sudden cardiac arrest, the first few minutes belong to the people standing nearby. CPR keeps blood moving, and an AED can correct the rhythm that stopped the heart. Together, they give the patient the strongest chance of reaching hospital alive.</p>

<p>Save our number now: <a href="<?= BLOG_TEL ?>"><?= BLOG_PHONE ?></a>. When someone collapses, call 112 or our <a href="<?= link_to('emergency') ?>">emergency ambulance helpline</a> and ask for an ambulance with a defibrillator. We arrange ambulances across the region through our <a href="<?= link_to('home') ?>">24/7 emergency ambulance service in Delhi NCR</a>, including <a href="<?= link_to('gurgaon') ?>">ambulance service in Gurgaon</a> for its offices, malls and residential towers.</p>

<?php require __DIR__ . '/_inc/post-bottom.php'; ?>
