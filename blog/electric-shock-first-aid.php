<?php
$post = [
  'title' => "Electric Shock First Aid: Help Without Getting Hurt",
  'seo_title' => "Electric Shock First Aid: How to Help Without Getting Hurt",
  'description' => "Electric shock first aid: switch off the power safely, check breathing, start CPR if needed and cool any burns to keep them safe until the ambulance arrives.",
  'excerpt' => "A shock from a cooler, a water pump or a live wire in a flooded street. Here is how to help without becoming the next victim, and why everyone needs a hospital check.",
  'topic' => "Electric shock and electrocution first aid",
  'category' => "accidents-injuries",
  'icon' => "plug-zap",
  'date' => "2026-11-23",
  'updated' => "2026-11-23",
  'order' => 18,
  'image_alt' => "Electric shock first aid: switching off the mains before helping the person, until the ambulance arrives",
  'steps_title' => "Electric shock? Power off",
  'steps' => [
    "Don't touch them. Get someone to call 112 while you switch off the main or MCB.",
    "Can't switch off? Push them clear with dry wood or plastic, standing on dry material.",
    "Overhead line or transformer? Stay about 18 m back and call the electricity company.",
    "Check breathing. If they aren't breathing normally, start CPR and use an AED.",
    "Once the power is off, cool any burns under running water for 20 minutes.",
    "Get them checked in hospital with an ECG, even if they seem completely fine.",
  ],
  'donts' => [
    "Touch them while they are still in contact with power",
    "Go near a fallen overhead wire or a transformer",
    "Skip the hospital because they seem fine",
  ],
  'faqs' => [
    [
      'q' => "Is it safe to touch someone after an electric shock?",
      'a' => "Only once you are certain the power is off. While the person is still in contact with the source, the current can pass through you as well. Once they are separated from it, they do not hold any charge, so you can touch them, check their breathing and start CPR. The same is true of people struck by lightning.",
    ],
    [
      'q' => "Does someone need a hospital after a minor shock from a switch or appliance?",
      'a' => "Yes, get them checked. Electricity can cause damage inside the body that isn't visible on the skin, and it can upset the heart's rhythm, sometimes hours later. A doctor will usually do an ECG and examine any burns. Go urgently if they lost consciousness, have chest pain, palpitations, breathlessness, burns or muscle pain, or if they are pregnant.",
    ],
    [
      'q' => "Can I use a wooden stick to push someone off a live wire?",
      'a' => "Only for ordinary household electricity, and only if you can't switch off the power. Make sure the stick is completely dry, stand on dry insulating material such as a wooden board or a thick pile of newspapers, and never touch the person directly. For overhead lines, transformers or any high-voltage source, stay well back and wait for the power to be cut.",
    ],
    [
      'q' => "Why can an electric shock cause a cardiac arrest?",
      'a' => "The heartbeat is controlled by the heart's own electrical signals. A current passing through the chest can scramble those signals so that the heart quivers instead of pumping, which is a cardiac arrest. The person collapses and stops breathing normally. Immediate CPR and an AED, which can shock the heart back into a normal rhythm, give them the best chance of survival.",
    ],
    [
      'q' => "What should I do if someone is electrocuted in a waterlogged street?",
      'a' => "Don't step into the water, because a live pole, street light or cable can electrify the water around it. Keep others back, call 112 and the local electricity company and ask for the supply to be cut. Go to the person only once the power is confirmed off. Then check their breathing, start CPR if needed and keep them warm until help arrives.",
    ],
    [
      'q' => "Does burying a lightning victim in mud or cow dung help?",
      'a' => "No. This belief persists in some places, but it has no medical basis and wastes the minutes when CPR can save a life. Lightning can stop the heart and breathing, and the person does not carry any charge afterwards. As soon as you are safe from the storm yourself, check their breathing and start CPR if they are not breathing normally.",
    ],
  ],
  'related' => [
    "burns-first-aid",
    "how-to-do-cpr",
    "how-to-use-aed-defibrillator",
    "spinal-injury-first-aid",
  ],
  'services' => [
    "emergency",
    "cardiac",
    "als",
  ],
];
if (!empty($BLOG_META_ONLY)) return $post;
require __DIR__ . '/_inc/post-top.php';
?>

<p>It is the monsoon in Delhi NCR: a street is waterlogged, a boy touches an iron gate near an electric pole, and he falls. At home, someone switches on the water motor with wet hands, or touches a desert cooler with a frayed wire. The first instinct of anyone nearby is to grab the person and pull, and that is exactly how a helper becomes the second victim.</p>

<p>This guide explains how to separate someone from electricity without getting hurt yourself, why an electric shock can stop the heart, what injuries to look for, and why even a person who seems fine needs to see a doctor. Whatever happens, get someone to call an <a href="<?= link_to('emergency') ?>">emergency ambulance for electric shock injuries</a> straight away while you deal with the power.</p>

<h2>How to separate the person from electricity safely</h2>

<div class="callout callout-danger">
  <strong>Don't touch them until the power is off</strong>
  <p>If the person is still in contact with the source of the current, the electricity can pass through you the moment you touch them. Don't touch their skin or wet clothing, and don't step into water near them, until you are certain the power is off.</p>
</div>

<h3>For household electricity</h3>

<ol>
  <li><strong>Switch off the power</strong> at the main switch or the MCB board. If an appliance is to blame and you can reach its plug without touching the person, switch it off at the socket and pull the plug out by its body, not the wire.</li>
  <li><strong>If you can't switch it off</strong>, stand on something dry that doesn't conduct electricity, such as a dry wooden board, a thick pile of dry newspapers or a rubber mat. Then use a dry, non-conducting object, such as a wooden broom handle, a wooden chair or a plastic stool, to push the person's body away from the source, or the source away from them.</li>
  <li><strong>Never use anything metal or wet</strong>, and keep your own hands and feet dry.</li>
</ol>

<h3>For high voltage: overhead lines, transformers and fallen cables</h3>

<p>High-voltage electricity can jump through the air and travel through the ground, and dry wood or rubber will not protect you. If the shock came from an overhead power line, a transformer, a substation or a fallen cable:</p>

<ul>
  <li><strong>Stay well back</strong>: at least about 18 metres is the distance commonly advised. Keep everyone else back too.</li>
  <li><strong>Call 112</strong> and the local electricity company and ask for the supply to be cut.</li>
  <li><strong>Don't approach</strong> until the electricity company or emergency services confirm the power is off, even if the person is clearly hurt.</li>
</ul>

<p>The same caution applies in waterlogged streets during the monsoon. If a pole, street light or cable may be live, the water around it may be live too, so don't wade in.</p>

<h2>Electric shock first aid: step by step</h2>

<h3>Step 1: Call 112 or an ambulance</h3>

<p>Once the power is off, or while someone else deals with it, call <strong>112</strong> or our helpline (<a href="<?= BLOG_TEL ?>"><?= BLOG_PHONE ?></a>). Say it is an electric shock, whether it was household current or high voltage, and whether the person is awake and breathing. Because an electric shock can upset the heart's rhythm, a <a href="<?= link_to('cardiac') ?>">cardiac ambulance with heart monitoring and a defibrillator</a> is a good choice.</p>

<h3>Step 2: Check if they respond and are breathing</h3>

<p>Tap their shoulders and shout their name. Then watch the chest and listen near the mouth for up to 10 seconds. If they are unresponsive and <strong>not breathing normally</strong>, start CPR immediately (see below).</p>

<h3>Step 3: If they are breathing, keep them safe and still</h3>

<p>If they are unconscious but breathing normally, turn them onto their side in the recovery position so the airway stays clear. If they fell from a ladder or a pole, or were thrown by the shock, assume a neck or back injury: keep the head still in line with the body and only roll them if they vomit. Our guide to <a href="<?= post_url('spinal-injury-first-aid') ?>">spinal injury first aid</a> shows how.</p>

<h3>Step 4: Cool and cover the burns</h3>

<p>Electric current usually leaves a burn where it entered the body and another where it left, often on the hands and feet. Once you are sure the power is off, cool each burn under cool running water for 20 minutes, then cover it loosely with cling film or a clean, non-fluffy cloth. Our <a href="<?= post_url('burns-first-aid') ?>">burns first aid guide</a> explains what never to put on a burn.</p>

<h3>Step 5: Keep them warm and watch them closely</h3>

<p>Even if they are awake and talking, keep them lying or sitting still, cover them with a blanket and keep checking their breathing and responsiveness. Note the time of the shock and what caused it. Heart rhythm problems can appear later, so be ready to start CPR if they collapse.</p>

<?php inline_cta('cardiac', 'Electric shock? Call an ambulance'); ?>

<h2>If they stop breathing: CPR and an AED</h2>

<p>After an electric shock, fast CPR and early use of a defibrillator give the person the best chance. If they are unresponsive and not breathing normally:</p>

<ol>
  <li>Make sure the power is off, then lay them on their back on a firm surface.</li>
  <li>Start hands-only CPR: heel of one hand in the centre of the chest, the other hand on top, pushing hard and fast, about 5 to 6 cm deep and 100 to 120 times a minute.</li>
  <li>Send someone for an <strong>AED</strong> from the nearest office, mall or housing society. Switch it on and follow its voice prompts.</li>
  <li>Keep going until the ambulance crew takes over or the person starts breathing normally.</li>
</ol>

<p>Learn the full technique in our <a href="<?= post_url('how-to-do-cpr') ?>">guide to hands-only CPR</a> and our guide on <a href="<?= post_url('how-to-use-aed-defibrillator') ?>">how to use an AED defibrillator</a>.</p>

<div class="callout callout-info">
  <strong>Lightning strikes</strong>
  <p>A person struck by lightning does not carry any electric charge, so you can touch them straight away once you are safe from the storm yourself. Start CPR immediately if they are not breathing normally. Burying a victim in mud, sand or cow dung, a belief in some rural areas, wastes precious minutes and does nothing to help.</p>
</div>

<h2>Why can an electric shock stop the heart?</h2>

<p>The heart beats in a steady rhythm controlled by its own tiny electrical signals. When an outside current passes through the chest, for example from one hand to the other or from a hand to the feet, it can scramble those signals. The heart may start quivering uselessly instead of pumping (ventricular fibrillation), which is a cardiac arrest. A strong current can also paralyse the muscles used for breathing.</p>

<p>An AED can shock a quivering heart back into a normal rhythm, which is why fetching one quickly matters so much. Milder rhythm problems can also appear hours after the shock, which is why doctors usually want an ECG.</p>

<h2>What injuries to look for</h2>

<ul>
  <li><strong>Burns at the entry and exit points</strong>, often on the hands, arms and feet. They may look small, but the current can damage muscles, nerves and blood vessels deep along its path.</li>
  <li><strong>Heart problems</strong>: palpitations, an irregular, very fast or very slow pulse, chest pain or breathlessness.</li>
  <li><strong>Broken bones, dislocations or a neck injury</strong> from falling, from being thrown back, or from the violent muscle spasm the current causes.</li>
  <li><strong>Confusion, headache, fits or unconsciousness</strong>.</li>
  <li><strong>Muscle pain, swelling, or dark or reduced urine</strong> in the hours or days afterwards, which can be a sign of muscle damage that affects the kidneys.</li>
</ul>

<h2>Does someone who seems fine still need a hospital?</h2>

<p><strong>Yes.</strong> Anyone who has had an electric shock should be checked in hospital, even if they say they feel fine. Damage inside the body isn't always visible, and heart rhythm problems may not show at first. Doctors will usually do an ECG, check the burns and may keep the person under observation. It is especially important if:</p>

<ul>
  <li>the shock was from a <strong>high-voltage</strong> source</li>
  <li>they <strong>lost consciousness</strong>, even briefly</li>
  <li>they have <strong>burns</strong>, <strong>chest pain</strong>, <strong>palpitations</strong> or <strong>breathlessness</strong></li>
  <li>the current passed <strong>across the chest</strong>, such as from hand to hand</li>
  <li>they are <strong>pregnant</strong></li>
</ul>

<h2>Electric shock risks in Delhi NCR homes and streets</h2>

<ul>
  <li><strong>Monsoon waterlogging:</strong> exposed wires, live poles, street lights and metal gates or railings in flooded streets. Keep away from poles and junction boxes, and keep children out of standing water near them.</li>
  <li><strong>Water pumps and motors:</strong> switch them on and off with dry hands and dry feet, and get the earthing checked.</li>
  <li><strong>Desert coolers:</strong> switch off and unplug before filling water or cleaning, and replace frayed wires.</li>
  <li><strong>Illegal or makeshift wiring:</strong> hooked connections, loose joints wrapped in plastic and overloaded extension boards are common causes of shocks and fires.</li>
  <li><strong>Protection:</strong> ask an electrician to fit an RCCB (earth leakage circuit breaker), which cuts the power within a fraction of a second when current leaks to earth.</li>
</ul>

<h2>Electric shock first aid: do's and don'ts</h2>

<div class="do-dont">
  <div class="do">
    <h3>Do</h3>
    <ul>
      <li>Switch off the power at the main switch or MCB first</li>
      <li>Use only dry wood or plastic for low-voltage current</li>
      <li>Stay well back from high-voltage lines and transformers</li>
      <li>Start CPR and use an AED if they aren't breathing normally</li>
      <li>Get every shock victim checked in hospital</li>
    </ul>
  </div>
  <div class="dont">
    <h3>Don't</h3>
    <ul>
      <li>Touch the person while they are in contact with the current</li>
      <li>Use anything metal or wet to move them</li>
      <li>Wade into waterlogged areas near poles or cables</li>
      <li>Throw water on them or the appliance before the power is off</li>
      <li>Bury a lightning victim in mud or dung</li>
    </ul>
  </div>
</div>

<p>Many electric shocks at home can be prevented with dry hands, sound wiring and an RCCB. If one does happen, remember the order: power off, call for help, check breathing, CPR if needed.</p>

<p>If the person needs advanced care on the way, ask for an <a href="<?= link_to('als') ?>">ALS ambulance with trained medical staff</a>. Save our number now: <a href="<?= BLOG_TEL ?>"><?= BLOG_PHONE ?></a>. Our helpline arranges ambulances day and night, including <a href="<?= link_to('greater-noida') ?>">ambulance service in Greater Noida</a>.</p>

<?php require __DIR__ . '/_inc/post-bottom.php'; ?>
