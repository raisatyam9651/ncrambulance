<?php
$post = [
  'title' => "Heart Attack First Aid: What to Do Before the Ambulance Arrives",
  'seo_title' => "Heart Attack First Aid: What to Do Before the Ambulance Arrives",
  'description' => "Learn the warning signs of a heart attack, when to give aspirin, how to position the patient and when to start CPR while the ambulance is on its way.",
  'excerpt' => "Chest pain, sweating, breathlessness? Every minute counts. Here is exactly what you can do in the first 15 minutes to protect the heart until help arrives.",
  'topic' => "Heart attack (myocardial infarction) first aid",
  'category' => "heart-breathing",
  'icon' => "heart-pulse",
  'date' => "2026-11-23",
  'updated' => "2026-11-23",
  'order' => 1,
  'featured' => true,
  'image_alt' => "Heart attack first aid guide: steps to take before the ambulance arrives",
  'steps_title' => "Heart attack? Do this now",
  'steps' => [
    "Call 112 or an ambulance immediately. Don't wait to see if the pain settles.",
    "Stop all activity. Sit them down, half-sitting, knees bent and back supported.",
    "Loosen tight clothing, keep them calm and note the time the pain started.",
    "If not allergic, give one 300–350 mg aspirin to chew slowly (confirm with dispatcher).",
    "If they have their own prescribed Sorbitrate, help them take it as prescribed.",
    "If they collapse and stop breathing normally, start CPR and use an AED if available.",
  ],
  'donts' => [
    "Let them walk, climb stairs or drive themselves",
    "Give food, water or 'gas' medicine and wait it out",
    "Leave them alone, even for a minute",
  ],
  'faqs' => [
    [
      'q' => "Should I give water to someone having a heart attack?",
      'a' => "Avoid giving food or drink. The aspirin tablet should be chewed, so it does not need water. Keeping the stomach empty reduces the risk of vomiting and helps if the hospital needs to do an urgent procedure such as angioplasty.",
    ],
    [
      'q' => "Can I give Disprin or Ecosprin during a heart attack?",
      'a' => "Aspirin helps stop the clot in a heart artery from growing. If the person is an adult, is not allergic to aspirin, has no bleeding problem and has not been told by a doctor to avoid it, the usual first-aid advice is one regular-strength aspirin (about 300 to 350 mg) chewed slowly. Low-dose tablets such as Ecosprin 75 are weaker, so confirm the dose with the emergency dispatcher or a doctor on the phone. Never give aspirin if you suspect a stroke instead of a heart attack.",
    ],
    [
      'q' => "How do I know if it is a heart attack or just gas or acidity?",
      'a' => "You cannot reliably tell at home. Heart pain often feels like pressure, tightness or burning and may spread to the arm, jaw or back, along with sweating or breathlessness. Acidity can feel similar. Only an ECG and blood tests can confirm it, so treat sudden chest pain as a heart attack and call an ambulance.",
    ],
    [
      'q' => "What is the difference between a heart attack and a cardiac arrest?",
      'a' => "A heart attack is a circulation problem: a blocked artery starves part of the heart muscle of blood, but the person is usually awake and talking. A cardiac arrest is an electrical problem: the heart suddenly stops pumping, the person collapses and stops breathing normally. A heart attack can trigger a cardiac arrest, which needs immediate CPR and an AED.",
    ],
    [
      'q' => "Should I take the patient to hospital in my own car?",
      'a' => "An ambulance is usually safer because the crew can monitor the heart, give oxygen and defibrillate if the heart stops on the way, and can alert the hospital in advance. A private car cannot do any of this. If the ambulance will take very long, follow the dispatcher's advice. Never let the patient drive themselves.",
    ],
    [
      'q' => "How much time do I have during a heart attack?",
      'a' => "Heart muscle starts getting damaged within about 30 minutes of a complete blockage, and the damage grows every minute. Treatment to open the artery works best when it starts as early as possible, ideally within the first hour or two. That is why you should call for help the moment symptoms begin.",
    ],
  ],
  'related' => [
    "how-to-do-cpr",
    "chest-pain-heart-attack-or-gas",
    "how-to-use-aed-defibrillator",
    "golden-hour-emergency",
  ],
  'services' => [
    "cardiac",
    "als",
    "emergency",
    "icu",
  ],
];
if (!empty($BLOG_META_ONLY)) return $post;
require __DIR__ . '/_inc/post-top.php';
?>

<p>A heart attack rarely looks like the movies. There is often no dramatic collapse, just a father who says his chest feels "heavy", a mother who blames acidity, or a colleague who is sweating in an air-conditioned office. What the people around them do in the next 15 minutes can decide how much of the heart muscle survives.</p>

<p>This guide explains, step by step, what an ordinary person can do from the moment a heart attack is suspected until the <a href="<?= link_to('cardiac') ?>">cardiac ambulance</a> arrives. You don't need medical training. You need to act quickly, keep the patient still, and know what <em>not</em> to do.</p>

<h2>How to recognise a heart attack</h2>

<p>A heart attack happens when a blood clot blocks an artery that feeds the heart muscle. Without blood, that part of the heart starts to die, and every minute counts. Look for these warning signs:</p>

<ul>
  <li><strong>Chest discomfort</strong>: pressure, squeezing, heaviness, tightness or burning in the centre of the chest that lasts more than a few minutes, or goes away and comes back.</li>
  <li><strong>Pain that spreads</strong> to one or both arms (often the left), the neck, jaw, back or upper stomach.</li>
  <li><strong>Shortness of breath</strong>, with or without chest pain.</li>
  <li><strong>Cold sweat</strong>, pale or grey skin.</li>
  <li><strong>Nausea or vomiting</strong>, often mistaken for indigestion.</li>
  <li><strong>Light-headedness</strong>, sudden weakness or a feeling of "something is very wrong".</li>
</ul>

<div class="callout callout-info">
  <strong>Silent heart attacks</strong>
  <p>Women, older people and people with diabetes often have milder or unusual symptoms: breathlessness, unexplained tiredness, nausea, or pain in the jaw, back or upper stomach with little or no chest pain. Diabetes can dull nerve pain, so a heart attack may feel like "just feeling unwell". If symptoms are sudden and unexplained, treat them seriously.</p>
</div>

<p>If you are unsure whether it is the heart or something else, read our guide on <a href="<?= post_url('chest-pain-heart-attack-or-gas') ?>">telling heart pain apart from gas, acidity or a panic attack</a>. The short answer: you can't be sure at home, so assume it is the heart.</p>

<h2>What to do in the first 15 minutes: step by step</h2>

<h3>Step 1: Call an ambulance immediately</h3>

<p>Call before you do anything else. Dial <strong>112</strong> or a 24/7 ambulance helpline such as ours (<a href="<?= BLOG_TEL ?>"><?= BLOG_PHONE ?></a>). Say clearly: "Suspected heart attack, chest pain, conscious and breathing," then give the exact address with a landmark. Ask for an ambulance with cardiac monitoring and a defibrillator. An <a href="<?= link_to('als') ?>">Advanced Life Support (ALS) ambulance</a> or a cardiac ambulance is ideal.</p>

<p>The most common and most dangerous mistake is to "wait and see" if the pain settles. Many people lose hours this way. If you are not sure what to say on the call, our guide on <a href="<?= post_url('how-to-call-ambulance-delhi-ncr') ?>">what to tell the ambulance dispatcher</a> has a ready script.</p>

<h3>Step 2: Stop all activity and sit them in the "W" position</h3>

<p>Every movement makes the heart work harder. Help the person sit on the floor or a bed, leaning back against a wall, sofa or pillows, with their knees bent. This half-sitting "W" position reduces strain on the heart and makes breathing easier. Don't make them lie completely flat if they are breathless, and don't let them walk to the car, the lift or the bathroom.</p>

<h3>Step 3: Give aspirin, if it is safe</h3>

<p>Aspirin thins the blood and can stop the clot from growing. If the person:</p>

<ul>
  <li>is an adult and fully awake,</li>
  <li>is <strong>not allergic</strong> to aspirin,</li>
  <li>has no bleeding problem (such as a recent stomach bleed), and</li>
  <li>has not been told by their doctor to avoid aspirin,</li>
</ul>

<p>then give <strong>one regular-strength aspirin (about 300 to 350 mg) to chew slowly</strong>, not swallow whole. Chewing gets it into the blood faster. Low-dose tablets such as 75 mg are weaker, so confirm the dose with the dispatcher. Tell the ambulance crew that aspirin was given and at what time.</p>

<div class="callout callout-danger">
  <strong>Important</strong>
  <p>Aspirin is for a suspected <em>heart attack</em>. Do not give it if you suspect a <a href="<?= post_url('stroke-first-aid-be-fast') ?>">stroke</a> (face drooping, slurred speech, one-sided weakness), because some strokes are caused by bleeding in the brain and aspirin can make them worse.</p>
</div>

<h3>Step 4: Help them take their own heart medicine</h3>

<p>If the person has a known heart condition and carries their own prescribed medicine, such as Sorbitrate or a nitroglycerin spray kept under the tongue, help them take it exactly as their doctor prescribed. Make sure they are sitting, because it can cause dizziness. Never give someone else's tablets, and don't give it if they have taken erectile-dysfunction medicine (such as sildenafil or tadalafil) recently, as the combination can cause a dangerous drop in blood pressure.</p>

<h3>Step 5: Keep them calm and watch them closely</h3>

<ul>
  <li>Loosen tight collars, belts, ties and saris around the chest and waist.</li>
  <li>Open windows or switch on a fan, but don't crowd around them.</li>
  <li>Speak calmly and reassure them that help is coming. Panic raises the heart rate.</li>
  <li><strong>Note the time</strong> the symptoms started. Doctors use this to decide treatment.</li>
  <li>Keep watching their breathing and responsiveness until the ambulance arrives.</li>
</ul>

<h3>Step 6: Prepare for the ambulance</h3>

<p>While one person stays with the patient, another should get ready for the crew. Unlock the gate, call the lift to the ground floor, tell the society guard, and send someone to the main road if your address is hard to find. Keep any previous ECGs, prescriptions, a list of current medicines and an ID card ready. Our <a href="<?= post_url('before-ambulance-arrives-checklist') ?>">checklist for families waiting for an ambulance</a> covers everything.</p>

<?php inline_cta('cardiac', 'Suspected heart attack? Call now'); ?>

<h2>If the person collapses: act for cardiac arrest</h2>

<p>A heart attack can suddenly turn into a <strong>cardiac arrest</strong>, when the heart's rhythm fails and it stops pumping. The person collapses, does not respond when you tap their shoulders and shout, and is <strong>not breathing normally</strong> (no breathing, or only occasional gasps).</p>

<ol>
  <li><strong>Shout for help</strong> and put the phone on speaker. Tell the dispatcher the patient has collapsed.</li>
  <li><strong>Start hands-only CPR right away</strong>: heel of one hand in the centre of the chest, other hand on top, arms straight. Push hard (about 5 to 6 cm deep) and fast (100 to 120 pushes a minute) and let the chest rise back between pushes.</li>
  <li><strong>Send someone for an AED</strong> (automated external defibrillator). Offices, malls, airports and many housing societies keep one. Switch it on and follow its voice instructions.</li>
  <li><strong>Don't stop</strong> until the ambulance crew takes over, the person starts breathing normally, or you are physically unable to continue. Swap with another person every two minutes if you can.</li>
</ol>

<p>CPR keeps blood flowing to the brain until a defibrillator can restart the heart's rhythm. Learn the full technique in our <a href="<?= post_url('how-to-do-cpr') ?>">step-by-step guide to hands-only CPR</a>, and see <a href="<?= post_url('how-to-use-aed-defibrillator') ?>">how to use an AED</a>. Both are simple enough for anyone.</p>

<h2>Should you drive to the hospital or wait for an ambulance?</h2>

<p>Families in Delhi NCR often wonder whether it's faster to put the patient in the car. In most cases, <strong>calling an ambulance is the safer choice</strong>:</p>

<ul>
  <li>The crew can <strong>monitor the heart</strong> and give oxygen if it's needed on the way.</li>
  <li>If the heart stops in traffic, an ambulance carries a <strong>defibrillator</strong>. A car does not.</li>
  <li>The crew can <strong>alert the hospital</strong> so the cardiac team is ready on arrival.</li>
  <li>The patient stays lying or sitting still instead of walking to the car.</li>
</ul>

<p>If the ambulance will take a long time, ask the dispatcher for advice. Never let the patient drive themselves. Our <a href="<?= link_to('home') ?>">24/7 emergency ambulance service in Delhi NCR</a> covers the whole region, including dedicated teams for <a href="<?= link_to('gurgaon') ?>">ambulance service in Gurgaon</a>, <a href="<?= link_to('noida') ?>">Noida</a> and <a href="<?= link_to('delhi') ?>">Delhi</a>.</p>

<h2>Which hospital should a heart attack patient go to?</h2>

<p>Time lost at a hospital that cannot treat a heart attack is time the heart doesn't have. Ideally the patient should go to a hospital with a <strong>24×7 cardiac catheterisation lab (cath lab)</strong>, where doctors can open the blocked artery with angioplasty. Tell the ambulance crew if the patient already has a cardiologist or a hospital with their records. The crew will also advise based on the patient's condition and the nearest capable centre.</p>

<p>If the patient first reaches a smaller hospital and later needs to be moved for angioplasty or bypass surgery, a monitored <a href="<?= link_to('icu') ?>">ICU ambulance</a> or a planned <a href="<?= link_to('hospital-transfer') ?>">hospital-to-hospital transfer</a> keeps them safe on the way.</p>

<h2>Heart attack first aid: quick do's and don'ts</h2>

<div class="do-dont">
  <div class="do">
    <h3>Do</h3>
    <ul>
      <li>Call an ambulance within minutes of symptoms starting</li>
      <li>Keep the patient seated and still</li>
      <li>Give aspirin to chew, if it's safe</li>
      <li>Note the time symptoms began</li>
      <li>Start CPR if they collapse and stop breathing normally</li>
    </ul>
  </div>
  <div class="dont">
    <h3>Don't</h3>
    <ul>
      <li>Wait to see if the pain goes away</li>
      <li>Treat it as gas with antacids and home remedies</li>
      <li>Let them walk, climb stairs or drive</li>
      <li>Give food, water, tea or alcohol</li>
      <li>Leave them alone, even briefly</li>
    </ul>
  </div>
</div>

<h2>Heart attack, cardiac arrest or acidity: how they differ</h2>

<div class="table-wrap">
  <table>
    <thead>
      <tr><th></th><th>Heart attack</th><th>Cardiac arrest</th><th>Acidity / gas</th></tr>
    </thead>
    <tbody>
      <tr><td><strong>What happens</strong></td><td>A blocked artery starves part of the heart of blood</td><td>The heart's rhythm fails and it stops pumping</td><td>Stomach acid irritates the food pipe</td></tr>
      <tr><td><strong>Is the person awake?</strong></td><td>Usually yes</td><td>No, they collapse</td><td>Yes</td></tr>
      <tr><td><strong>Breathing</strong></td><td>Often breathless</td><td>Absent or only gasping</td><td>Normal</td></tr>
      <tr><td><strong>What you do</strong></td><td>Call an ambulance, rest, aspirin</td><td>Call, CPR, AED immediately</td><td>Can only be confirmed after ruling out the heart</td></tr>
    </tbody>
  </table>
</div>

<h2>Why every minute matters</h2>

<p>Cardiologists say "time is muscle". The longer an artery stays blocked, the more heart muscle dies, and dead heart muscle does not grow back. Patients who reach a capable hospital early have a much better chance of a full recovery and fewer long-term problems such as heart failure. This is the idea behind the <a href="<?= post_url('golden-hour-emergency') ?>">golden hour in emergency care</a>.</p>

<p>You can't open a blocked artery at home. But you <em>can</em> make sure the call happens in the first few minutes, keep the heart's workload low, give aspirin safely, and be ready with CPR if the worst happens. That's how bystanders save lives.</p>

<p>Save our number now: <a href="<?= BLOG_TEL ?>"><?= BLOG_PHONE ?></a>. If you ever face a heart emergency, you can call our <a href="<?= link_to('emergency') ?>">emergency ambulance service</a> any time, day or night.</p>

<?php require __DIR__ . '/_inc/post-bottom.php'; ?>
