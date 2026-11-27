<?php
/**
 * States / UTs of India and their districts.
 *
 * District entry format:  'District Name'  or  'District Name|Headquarters town'
 * (add the HQ only when it differs from the district name — it is used in titles/H1 so that
 *  searches like "ambulance service in Khalilabad" also match the Sant Kabir Nagar page).
 *
 * States with 'divisions' carry richer local data (referral hubs + nearest airports) and are
 * ready to publish. States with a flat 'districts' list must be enriched the same way before
 * they are added to PUBLISHED_STATES in config.php.
 *
 * District lists reflect notified districts as last reviewed; re-check new/renamed districts
 * against the Local Government Directory (https://lgdirectory.gov.in) before each roll-out batch.
 *
 * 'override' => legacy URL that already exists for a district — the generated district URL
 * 301-redirects there so two pages never compete for the same keyword.
 */
return [

    'uttar-pradesh' => [
        'name' => 'Uttar Pradesh', 'short' => 'UP', 'type' => 'State', 'capital' => 'Lucknow',
        'hubs' => [
            'lucknow'   => 'Lucknow — KGMU, SGPGIMS and Dr. RML Institute of Medical Sciences',
            'varanasi'  => 'Varanasi — IMS-BHU (Sir Sunderlal Hospital)',
            'gorakhpur' => 'Gorakhpur — AIIMS Gorakhpur and BRD Medical College',
            'prayagraj' => 'Prayagraj — SRN Hospital (MLN Medical College)',
            'kanpur'    => 'Kanpur — GSVM Medical College (LLR Hospital)',
            'agra'      => 'Agra — S.N. Medical College',
            'aligarh'   => 'Aligarh — J.N. Medical College, AMU',
            'meerut'    => 'Meerut — LLRM Medical College',
            'jhansi'    => 'Jhansi — MLB Medical College',
            'delhi'     => 'Delhi — AIIMS New Delhi, Safdarjung and other tertiary hospitals',
            'rishikesh' => 'Rishikesh — AIIMS Rishikesh',
        ],
        'override' => [
            'gautam-buddh-nagar' => '/ambulance-service/noida/',
            'ghaziabad'          => '/ambulance-service/ghaziabad/',
        ],
        'divisions' => [
            'Agra'       => ['hubs' => ['agra', 'delhi'], 'airport' => 'Agra', 'districts' => ['Agra', 'Firozabad', 'Mainpuri', 'Mathura']],
            'Aligarh'    => ['hubs' => ['aligarh', 'agra', 'delhi'], 'airport' => 'Agra or Delhi', 'districts' => ['Aligarh', 'Etah', 'Hathras', 'Kasganj']],
            'Ayodhya'    => ['hubs' => ['lucknow'], 'airport' => 'Ayodhya or Lucknow', 'districts' => ['Ayodhya', 'Ambedkar Nagar|Akbarpur', 'Amethi|Gauriganj', 'Barabanki', 'Sultanpur']],
            'Azamgarh'   => ['hubs' => ['varanasi', 'gorakhpur'], 'airport' => 'Varanasi', 'districts' => ['Azamgarh', 'Ballia', 'Mau']],
            'Bareilly'   => ['hubs' => ['lucknow', 'delhi'], 'airport' => 'Bareilly', 'districts' => ['Bareilly', 'Budaun', 'Pilibhit', 'Shahjahanpur']],
            'Basti'      => ['hubs' => ['gorakhpur', 'lucknow'], 'airport' => 'Gorakhpur', 'districts' => ['Basti', 'Sant Kabir Nagar|Khalilabad', 'Siddharthnagar|Naugarh']],
            'Chitrakoot' => ['hubs' => ['prayagraj', 'kanpur'], 'airport' => 'Prayagraj', 'districts' => ['Banda', 'Chitrakoot|Karwi', 'Hamirpur', 'Mahoba']],
            'Devipatan'  => ['hubs' => ['lucknow'], 'airport' => 'Lucknow or Ayodhya', 'districts' => ['Gonda', 'Bahraich', 'Balrampur', 'Shravasti|Bhinga']],
            'Gorakhpur'  => ['hubs' => ['gorakhpur', 'lucknow'], 'airport' => 'Gorakhpur or Kushinagar', 'districts' => ['Gorakhpur', 'Deoria', 'Kushinagar|Padrauna', 'Maharajganj']],
            'Jhansi'     => ['hubs' => ['jhansi', 'kanpur'], 'airport' => 'Gwalior', 'districts' => ['Jhansi', 'Jalaun|Orai', 'Lalitpur']],
            'Kanpur'     => ['hubs' => ['kanpur', 'lucknow'], 'airport' => 'Kanpur or Lucknow', 'districts' => ['Kanpur Nagar|Kanpur', 'Kanpur Dehat|Akbarpur', 'Etawah', 'Auraiya', 'Farrukhabad|Fatehgarh', 'Kannauj']],
            'Lucknow'    => ['hubs' => ['lucknow'], 'airport' => 'Lucknow', 'districts' => ['Lucknow', 'Hardoi', 'Lakhimpur Kheri|Lakhimpur', 'Raebareli', 'Sitapur', 'Unnao']],
            'Meerut'     => ['hubs' => ['meerut', 'delhi'], 'airport' => 'Delhi (IGI) or Hindon', 'districts' => ['Meerut', 'Baghpat', 'Bulandshahr', 'Gautam Buddh Nagar|Noida', 'Ghaziabad', 'Hapur']],
            'Mirzapur'   => ['hubs' => ['varanasi'], 'airport' => 'Varanasi', 'districts' => ['Mirzapur', 'Bhadohi|Gyanpur', 'Sonbhadra|Robertsganj']],
            'Moradabad'  => ['hubs' => ['delhi'], 'airport' => 'Delhi (IGI) or Bareilly', 'districts' => ['Moradabad', 'Amroha', 'Bijnor', 'Rampur', 'Sambhal|Bahjoi']],
            'Prayagraj'  => ['hubs' => ['prayagraj', 'lucknow'], 'airport' => 'Prayagraj', 'districts' => ['Prayagraj', 'Fatehpur', 'Kaushambi|Manjhanpur', 'Pratapgarh']],
            'Saharanpur' => ['hubs' => ['rishikesh', 'delhi'], 'airport' => 'Dehradun (Jolly Grant)', 'districts' => ['Saharanpur', 'Muzaffarnagar', 'Shamli']],
            'Varanasi'   => ['hubs' => ['varanasi'], 'airport' => 'Varanasi', 'districts' => ['Varanasi', 'Chandauli', 'Ghazipur', 'Jaunpur']],
        ],
    ],

    // ---------------------------------------------------------------- States (flat lists — enrich before publishing)

    'andhra-pradesh' => ['name' => 'Andhra Pradesh', 'type' => 'State', 'capital' => 'Amaravati', 'districts' => [
        'Srikakulam', 'Parvathipuram Manyam', 'Vizianagaram', 'Visakhapatnam', 'Alluri Sitharama Raju|Paderu', 'Anakapalli', 'Kakinada',
        'East Godavari|Rajamahendravaram', 'Dr. B.R. Ambedkar Konaseema|Amalapuram', 'Eluru', 'West Godavari|Bhimavaram', 'NTR|Vijayawada',
        'Krishna|Machilipatnam', 'Palnadu|Narasaraopet', 'Guntur', 'Bapatla', 'Prakasam|Ongole', 'Sri Potti Sriramulu Nellore|Nellore',
        'Kurnool', 'Nandyal', 'Anantapur', 'Sri Sathya Sai|Puttaparthi', 'YSR Kadapa|Kadapa', 'Annamayya|Rayachoti', 'Tirupati', 'Chittoor',
    ]],
    'arunachal-pradesh' => ['name' => 'Arunachal Pradesh', 'type' => 'State', 'capital' => 'Itanagar', 'districts' => [
        'Tawang', 'West Kameng|Bomdila', 'East Kameng|Seppa', 'Pakke-Kessang', 'Papum Pare|Yupia', 'Itanagar Capital Complex|Itanagar',
        'Kurung Kumey|Koloriang', 'Kra Daadi', 'Lower Subansiri|Ziro', 'Kamle', 'Upper Subansiri|Daporijo', 'West Siang|Aalo',
        'Lower Siang|Likabali', 'Leparada|Basar', 'Siang|Boleng', 'Shi-Yomi|Tato', 'Upper Siang|Yingkiong', 'East Siang|Pasighat',
        'Dibang Valley|Anini', 'Lower Dibang Valley|Roing', 'Lohit|Tezu', 'Anjaw|Hawai', 'Namsai', 'Changlang', 'Tirap|Khonsa',
        'Longding', 'Keyi Panyor', 'Bichom',
    ]],
    'assam' => ['name' => 'Assam', 'type' => 'State', 'capital' => 'Dispur', 'districts' => [
        'Baksa', 'Bajali|Pathsala', 'Barpeta', 'Biswanath', 'Bongaigaon', 'Cachar|Silchar', 'Charaideo', 'Chirang|Kajalgaon', 'Darrang|Mangaldoi',
        'Dhemaji', 'Dhubri', 'Dibrugarh', 'Dima Hasao|Haflong', 'Goalpara', 'Golaghat', 'Hailakandi', 'Hojai', 'Jorhat', 'Kamrup',
        'Kamrup Metropolitan|Guwahati', 'Karbi Anglong|Diphu', 'Sribhumi|Karimganj', 'Kokrajhar', 'Lakhimpur|North Lakhimpur', 'Majuli',
        'Morigaon', 'Nagaon', 'Nalbari', 'Sivasagar', 'Sonitpur|Tezpur', 'South Salmara-Mankachar|Hatsingimari', 'Tamulpur', 'Tinsukia',
        'Udalguri', 'West Karbi Anglong|Hamren',
    ]],
    'bihar' => ['name' => 'Bihar', 'type' => 'State', 'capital' => 'Patna', 'districts' => [
        'Araria', 'Arwal', 'Aurangabad', 'Banka', 'Begusarai', 'Bhagalpur', 'Bhojpur|Arrah', 'Buxar', 'Darbhanga', 'East Champaran|Motihari',
        'Gaya', 'Gopalganj', 'Jamui', 'Jehanabad', 'Kaimur|Bhabua', 'Katihar', 'Khagaria', 'Kishanganj', 'Lakhisarai', 'Madhepura',
        'Madhubani', 'Munger', 'Muzaffarpur', 'Nalanda|Bihar Sharif', 'Nawada', 'Patna', 'Purnia', 'Rohtas|Sasaram', 'Saharsa',
        'Samastipur', 'Saran|Chhapra', 'Sheikhpura', 'Sheohar', 'Sitamarhi', 'Siwan', 'Supaul', 'Vaishali|Hajipur', 'West Champaran|Bettiah',
    ]],
    'chhattisgarh' => ['name' => 'Chhattisgarh', 'type' => 'State', 'capital' => 'Raipur', 'districts' => [
        'Balod', 'Baloda Bazar', 'Balrampur-Ramanujganj|Balrampur', 'Bastar|Jagdalpur', 'Bemetara', 'Bijapur', 'Bilaspur', 'Dantewada',
        'Dhamtari', 'Durg', 'Gariaband', 'Gaurela-Pendra-Marwahi|Gaurela', 'Janjgir-Champa|Janjgir', 'Jashpur', 'Kabirdham|Kawardha',
        'Kanker', 'Khairagarh-Chhuikhadan-Gandai|Khairagarh', 'Kondagaon', 'Korba', 'Koriya|Baikunthpur', 'Mahasamund',
        'Manendragarh-Chirmiri-Bharatpur|Manendragarh', 'Mohla-Manpur-Ambagarh Chowki|Mohla', 'Mungeli', 'Narayanpur', 'Raigarh', 'Raipur',
        'Rajnandgaon', 'Sakti', 'Sarangarh-Bilaigarh|Sarangarh', 'Sukma', 'Surajpur', 'Surguja|Ambikapur',
    ]],
    'goa' => ['name' => 'Goa', 'type' => 'State', 'capital' => 'Panaji', 'districts' => [
        'North Goa|Panaji', 'South Goa|Margao',
    ]],
    'gujarat' => ['name' => 'Gujarat', 'type' => 'State', 'capital' => 'Gandhinagar', 'districts' => [
        'Ahmedabad', 'Amreli', 'Anand', 'Aravalli|Modasa', 'Banaskantha|Palanpur', 'Bharuch', 'Bhavnagar', 'Botad', 'Chhota Udaipur', 'Dahod',
        'Dang|Ahwa', 'Devbhumi Dwarka|Khambhalia', 'Gandhinagar', 'Gir Somnath|Veraval', 'Jamnagar', 'Junagadh', 'Kheda|Nadiad', 'Kutch|Bhuj',
        'Mahisagar|Lunawada', 'Mehsana', 'Morbi', 'Narmada|Rajpipla', 'Navsari', 'Panchmahal|Godhra', 'Patan', 'Porbandar', 'Rajkot',
        'Sabarkantha|Himmatnagar', 'Surat', 'Surendranagar', 'Tapi|Vyara', 'Vadodara', 'Valsad', 'Vav-Tharad|Tharad',
    ]],
    'haryana' => [
        'name' => 'Haryana', 'short' => 'HR', 'type' => 'State', 'capital' => 'Chandigarh',
        'hubs' => [
            'chandigarh' => 'Chandigarh — PGIMER Chandigarh and GMCH Sector 32',
            'rohtak'     => 'Rohtak — PGIMS Rohtak (Pt. B.D. Sharma University of Health Sciences)',
            'gurugram'   => 'Gurugram — Medanta, Artemis, Fortis and Civil Hospital Gurugram',
            'faridabad'  => 'Faridabad — Amrita Hospital, ESIC Medical College and Metro Heart Institute',
            'karnal'     => 'Karnal — Kalpana Chawla Government Medical College & Hospital',
            'hisar'      => 'Hisar — Maharaja Agrasen Medical College, Agroha and multi-speciality centres',
            'delhi'      => 'Delhi — AIIMS New Delhi, Safdarjung and other tertiary hospitals',
        ],
        'override' => [
            'gurugram'  => '/ambulance-service/gurgaon/',
            'faridabad' => '/ambulance-service/faridabad/',
        ],
        'divisions' => [
            'Ambala'    => ['hubs' => ['chandigarh', 'karnal'], 'airport' => 'Chandigarh', 'districts' => ['Ambala', 'Kurukshetra', 'Panchkula', 'Yamunanagar']],
            'Faridabad' => ['hubs' => ['faridabad', 'delhi'], 'airport' => 'Delhi (IGI)', 'districts' => ['Faridabad', 'Nuh', 'Palwal']],
            'Gurugram'  => ['hubs' => ['gurugram', 'delhi'], 'airport' => 'Delhi (IGI)', 'districts' => ['Gurugram', 'Mahendragarh|Narnaul', 'Rewari']],
            'Hisar'     => ['hubs' => ['hisar', 'rohtak', 'chandigarh'], 'airport' => 'Hisar or Chandigarh', 'districts' => ['Fatehabad', 'Hisar', 'Jind', 'Sirsa']],
            'Karnal'    => ['hubs' => ['karnal', 'chandigarh', 'delhi'], 'airport' => 'Chandigarh or Delhi (IGI)', 'districts' => ['Kaithal', 'Karnal', 'Panipat']],
            'Rohtak'    => ['hubs' => ['rohtak', 'gurugram', 'delhi'], 'airport' => 'Delhi (IGI)', 'districts' => ['Bhiwani', 'Charkhi Dadri', 'Jhajjar', 'Rohtak', 'Sonipat']],
        ],
    ],
    'himachal-pradesh' => ['name' => 'Himachal Pradesh', 'type' => 'State', 'capital' => 'Shimla', 'districts' => [
        'Bilaspur', 'Chamba', 'Hamirpur', 'Kangra|Dharamshala', 'Kinnaur|Reckong Peo', 'Kullu', 'Lahaul and Spiti|Keylong', 'Mandi', 'Shimla',
        'Sirmaur|Nahan', 'Solan', 'Una',
    ]],
    'jharkhand' => ['name' => 'Jharkhand', 'type' => 'State', 'capital' => 'Ranchi', 'districts' => [
        'Bokaro', 'Chatra', 'Deoghar', 'Dhanbad', 'Dumka', 'East Singhbhum|Jamshedpur', 'Garhwa', 'Giridih', 'Godda', 'Gumla', 'Hazaribagh',
        'Jamtara', 'Khunti', 'Koderma', 'Latehar', 'Lohardaga', 'Pakur', 'Palamu|Medininagar', 'Ramgarh', 'Ranchi', 'Sahibganj',
        'Seraikela Kharsawan|Seraikela', 'Simdega', 'West Singhbhum|Chaibasa',
    ]],
    'karnataka' => ['name' => 'Karnataka', 'type' => 'State', 'capital' => 'Bengaluru', 'districts' => [
        'Bagalkot', 'Ballari', 'Belagavi', 'Bengaluru Rural', 'Bengaluru Urban|Bengaluru', 'Bidar', 'Chamarajanagar', 'Chikkaballapur',
        'Chikkamagaluru', 'Chitradurga', 'Dakshina Kannada|Mangaluru', 'Davanagere', 'Dharwad', 'Gadag', 'Hassan', 'Haveri', 'Kalaburagi',
        'Kodagu|Madikeri', 'Kolar', 'Koppal', 'Mandya', 'Mysuru', 'Raichur', 'Ramanagara', 'Shivamogga', 'Tumakuru', 'Udupi',
        'Uttara Kannada|Karwar', 'Vijayapura', 'Vijayanagara|Hosapete', 'Yadgir',
    ]],
    'kerala' => ['name' => 'Kerala', 'type' => 'State', 'capital' => 'Thiruvananthapuram', 'districts' => [
        'Alappuzha', 'Ernakulam|Kochi', 'Idukki|Painavu', 'Kannur', 'Kasaragod', 'Kollam', 'Kottayam', 'Kozhikode', 'Malappuram', 'Palakkad',
        'Pathanamthitta', 'Thiruvananthapuram', 'Thrissur', 'Wayanad|Kalpetta',
    ]],
    'madhya-pradesh' => ['name' => 'Madhya Pradesh', 'type' => 'State', 'capital' => 'Bhopal', 'districts' => [
        'Agar Malwa', 'Alirajpur', 'Anuppur', 'Ashoknagar', 'Balaghat', 'Barwani', 'Betul', 'Bhind', 'Bhopal', 'Burhanpur', 'Chhatarpur',
        'Chhindwara', 'Damoh', 'Datia', 'Dewas', 'Dhar', 'Dindori', 'Guna', 'Gwalior', 'Harda', 'Indore', 'Jabalpur', 'Jhabua', 'Katni',
        'Khandwa', 'Khargone', 'Maihar', 'Mandla', 'Mandsaur', 'Mauganj', 'Morena', 'Narmadapuram', 'Narsinghpur', 'Neemuch', 'Niwari',
        'Pandhurna', 'Panna', 'Raisen', 'Rajgarh', 'Ratlam', 'Rewa', 'Sagar', 'Satna', 'Sehore', 'Seoni', 'Shahdol', 'Shajapur', 'Sheopur',
        'Shivpuri', 'Sidhi', 'Singrauli|Waidhan', 'Tikamgarh', 'Ujjain', 'Umaria', 'Vidisha',
    ]],
    'maharashtra' => ['name' => 'Maharashtra', 'type' => 'State', 'capital' => 'Mumbai', 'districts' => [
        'Ahilyanagar|Ahmednagar', 'Akola', 'Amravati', 'Chhatrapati Sambhajinagar|Aurangabad', 'Beed', 'Bhandara', 'Buldhana', 'Chandrapur',
        'Dhule', 'Gadchiroli', 'Gondia', 'Hingoli', 'Jalgaon', 'Jalna', 'Kolhapur', 'Latur', 'Mumbai City|Mumbai', 'Mumbai Suburban|Bandra',
        'Nagpur', 'Nanded', 'Nandurbar', 'Nashik', 'Dharashiv|Osmanabad', 'Palghar', 'Parbhani', 'Pune', 'Raigad|Alibag', 'Ratnagiri',
        'Sangli', 'Satara', 'Sindhudurg|Oros', 'Solapur', 'Thane', 'Wardha', 'Washim', 'Yavatmal',
    ]],
    'manipur' => ['name' => 'Manipur', 'type' => 'State', 'capital' => 'Imphal', 'districts' => [
        'Bishnupur', 'Chandel', 'Churachandpur', 'Imphal East|Porompat', 'Imphal West|Lamphelpat', 'Jiribam', 'Kakching', 'Kamjong',
        'Kangpokpi', 'Noney', 'Pherzawl', 'Senapati', 'Tamenglong', 'Tengnoupal', 'Thoubal', 'Ukhrul',
    ]],
    'meghalaya' => ['name' => 'Meghalaya', 'type' => 'State', 'capital' => 'Shillong', 'districts' => [
        'East Garo Hills|Williamnagar', 'East Jaintia Hills|Khliehriat', 'East Khasi Hills|Shillong', 'Eastern West Khasi Hills|Mairang',
        'North Garo Hills|Resubelpara', 'Ri-Bhoi|Nongpoh', 'South Garo Hills|Baghmara', 'South West Garo Hills|Ampati',
        'South West Khasi Hills|Mawkyrwat', 'West Garo Hills|Tura', 'West Jaintia Hills|Jowai', 'West Khasi Hills|Nongstoin',
    ]],
    'mizoram' => ['name' => 'Mizoram', 'type' => 'State', 'capital' => 'Aizawl', 'districts' => [
        'Aizawl', 'Champhai', 'Hnahthial', 'Khawzawl', 'Kolasib', 'Lawngtlai', 'Lunglei', 'Mamit', 'Saiha', 'Saitual', 'Serchhip',
    ]],
    'nagaland' => ['name' => 'Nagaland', 'type' => 'State', 'capital' => 'Kohima', 'districts' => [
        'Chumoukedima', 'Dimapur', 'Kiphire', 'Kohima', 'Longleng', 'Meluri', 'Mokokchung', 'Mon', 'Niuland', 'Noklak', 'Peren', 'Phek',
        'Shamator', 'Tseminyu', 'Tuensang', 'Wokha', 'Zunheboto',
    ]],
    'odisha' => ['name' => 'Odisha', 'type' => 'State', 'capital' => 'Bhubaneswar', 'districts' => [
        'Angul', 'Balangir', 'Balasore', 'Bargarh', 'Bhadrak', 'Boudh', 'Cuttack', 'Deogarh', 'Dhenkanal', 'Gajapati|Paralakhemundi',
        'Ganjam|Chhatrapur', 'Jagatsinghpur', 'Jajpur', 'Jharsuguda', 'Kalahandi|Bhawanipatna', 'Kandhamal|Phulbani', 'Kendrapara',
        'Kendujhar|Keonjhar', 'Khordha|Bhubaneswar', 'Koraput', 'Malkangiri', 'Mayurbhanj|Baripada', 'Nabarangpur', 'Nayagarh', 'Nuapada',
        'Puri', 'Rayagada', 'Sambalpur', 'Subarnapur|Sonepur', 'Sundargarh|Rourkela',
    ]],
    'punjab' => ['name' => 'Punjab', 'type' => 'State', 'capital' => 'Chandigarh', 'districts' => [
        'Amritsar', 'Barnala', 'Bathinda', 'Faridkot', 'Fatehgarh Sahib', 'Fazilka', 'Ferozepur', 'Gurdaspur', 'Hoshiarpur', 'Jalandhar',
        'Kapurthala', 'Ludhiana', 'Malerkotla', 'Mansa', 'Moga', 'Sri Muktsar Sahib', 'Pathankot', 'Patiala', 'Rupnagar',
        'Sahibzada Ajit Singh Nagar|Mohali', 'Sangrur', 'Shaheed Bhagat Singh Nagar|Nawanshahr', 'Tarn Taran',
    ]],
    'rajasthan' => ['name' => 'Rajasthan', 'type' => 'State', 'capital' => 'Jaipur', 'districts' => [
        'Ajmer', 'Alwar', 'Balotra', 'Banswara', 'Baran', 'Barmer', 'Beawar', 'Bharatpur', 'Bhilwara', 'Bikaner', 'Bundi', 'Chittorgarh',
        'Churu', 'Dausa', 'Deeg', 'Dholpur', 'Didwana-Kuchaman|Didwana', 'Dungarpur', 'Hanumangarh', 'Jaipur', 'Jaisalmer', 'Jalore',
        'Jhalawar', 'Jhunjhunu', 'Jodhpur', 'Karauli', 'Khairthal-Tijara|Khairthal', 'Kota', 'Kotputli-Behror|Kotputli', 'Nagaur', 'Pali',
        'Phalodi', 'Pratapgarh', 'Rajsamand', 'Salumbar', 'Sawai Madhopur', 'Sikar', 'Sirohi', 'Sri Ganganagar', 'Tonk', 'Udaipur',
    ]],
    'sikkim' => ['name' => 'Sikkim', 'type' => 'State', 'capital' => 'Gangtok', 'districts' => [
        'Gangtok', 'Mangan', 'Namchi', 'Gyalshing', 'Pakyong', 'Soreng',
    ]],
    'tamil-nadu' => ['name' => 'Tamil Nadu', 'type' => 'State', 'capital' => 'Chennai', 'districts' => [
        'Ariyalur', 'Chengalpattu', 'Chennai', 'Coimbatore', 'Cuddalore', 'Dharmapuri', 'Dindigul', 'Erode', 'Kallakurichi', 'Kancheepuram',
        'Kanniyakumari|Nagercoil', 'Karur', 'Krishnagiri', 'Madurai', 'Mayiladuthurai', 'Nagapattinam', 'Namakkal', 'Nilgiris|Ooty',
        'Perambalur', 'Pudukkottai', 'Ramanathapuram', 'Ranipet', 'Salem', 'Sivaganga', 'Tenkasi', 'Thanjavur', 'Theni', 'Thoothukudi',
        'Tiruchirappalli', 'Tirunelveli', 'Tirupathur', 'Tiruppur', 'Tiruvallur', 'Tiruvannamalai', 'Tiruvarur', 'Vellore', 'Viluppuram',
        'Virudhunagar',
    ]],
    'telangana' => ['name' => 'Telangana', 'type' => 'State', 'capital' => 'Hyderabad', 'districts' => [
        'Adilabad', 'Bhadradri Kothagudem|Kothagudem', 'Hanumakonda', 'Hyderabad', 'Jagtial', 'Jangaon', 'Jayashankar Bhupalpally|Bhupalpally',
        'Jogulamba Gadwal|Gadwal', 'Kamareddy', 'Karimnagar', 'Khammam', 'Komaram Bheem Asifabad|Asifabad', 'Mahabubabad', 'Mahabubnagar',
        'Mancherial', 'Medak', 'Medchal-Malkajgiri|Medchal', 'Mulugu', 'Nagarkurnool', 'Nalgonda', 'Narayanpet', 'Nirmal', 'Nizamabad',
        'Peddapalli', 'Rajanna Sircilla|Sircilla', 'Ranga Reddy', 'Sangareddy', 'Siddipet', 'Suryapet', 'Vikarabad', 'Wanaparthy',
        'Warangal', 'Yadadri Bhuvanagiri|Bhongir',
    ]],
    'tripura' => ['name' => 'Tripura', 'type' => 'State', 'capital' => 'Agartala', 'districts' => [
        'Dhalai|Ambassa', 'Gomati|Udaipur', 'Khowai', 'North Tripura|Dharmanagar', 'Sepahijala|Bishramganj', 'South Tripura|Belonia',
        'Unakoti|Kailashahar', 'West Tripura|Agartala',
    ]],
    'uttarakhand' => ['name' => 'Uttarakhand', 'type' => 'State', 'capital' => 'Dehradun', 'districts' => [
        'Almora', 'Bageshwar', 'Chamoli|Gopeshwar', 'Champawat', 'Dehradun', 'Haridwar', 'Nainital', 'Pauri Garhwal|Pauri', 'Pithoragarh',
        'Rudraprayag', 'Tehri Garhwal|New Tehri', 'Udham Singh Nagar|Rudrapur', 'Uttarkashi',
    ]],
    'west-bengal' => ['name' => 'West Bengal', 'type' => 'State', 'capital' => 'Kolkata', 'districts' => [
        'Alipurduar', 'Bankura', 'Birbhum|Suri', 'Cooch Behar', 'Dakshin Dinajpur|Balurghat', 'Darjeeling', 'Hooghly|Chinsurah', 'Howrah',
        'Jalpaiguri', 'Jhargram', 'Kalimpong', 'Kolkata', 'Malda|English Bazar', 'Murshidabad|Baharampur', 'Nadia|Krishnanagar',
        'North 24 Parganas|Barasat', 'Paschim Bardhaman|Asansol', 'Paschim Medinipur|Medinipur', 'Purba Bardhaman|Bardhaman',
        'Purba Medinipur|Tamluk', 'Purulia', 'South 24 Parganas|Alipore', 'Uttar Dinajpur|Raiganj',
    ]],

    // ---------------------------------------------------------------- Union Territories

    'andaman-and-nicobar-islands' => ['name' => 'Andaman and Nicobar Islands', 'type' => 'Union Territory', 'capital' => 'Sri Vijaya Puram (Port Blair)', 'districts' => [
        'Nicobar|Car Nicobar', 'North and Middle Andaman|Mayabunder', 'South Andaman|Port Blair',
    ]],
    'chandigarh' => ['name' => 'Chandigarh', 'type' => 'Union Territory', 'capital' => 'Chandigarh', 'districts' => [
        'Chandigarh',
    ]],
    'dadra-and-nagar-haveli-and-daman-and-diu' => ['name' => 'Dadra and Nagar Haveli and Daman and Diu', 'type' => 'Union Territory', 'capital' => 'Daman', 'districts' => [
        'Dadra and Nagar Haveli|Silvassa', 'Daman', 'Diu',
    ]],
    'delhi' => ['name' => 'Delhi', 'type' => 'Union Territory', 'capital' => 'New Delhi', 'state_override' => '/ambulance-service/delhi/', 'districts' => [
        'Central Delhi|Daryaganj', 'East Delhi', 'New Delhi', 'North Delhi', 'North East Delhi', 'North West Delhi', 'Shahdara',
        'South Delhi', 'South East Delhi', 'South West Delhi|Dwarka', 'West Delhi',
    ]],
    'jammu-and-kashmir' => ['name' => 'Jammu and Kashmir', 'type' => 'Union Territory', 'capital' => 'Srinagar / Jammu', 'districts' => [
        'Anantnag', 'Bandipora', 'Baramulla', 'Budgam', 'Doda', 'Ganderbal', 'Jammu', 'Kathua', 'Kishtwar', 'Kulgam', 'Kupwara', 'Poonch',
        'Pulwama', 'Rajouri', 'Ramban', 'Reasi', 'Samba', 'Shopian', 'Srinagar', 'Udhampur',
    ]],
    'ladakh' => ['name' => 'Ladakh', 'type' => 'Union Territory', 'capital' => 'Leh', 'districts' => [
        'Leh', 'Kargil',
    ]],
    'lakshadweep' => ['name' => 'Lakshadweep', 'type' => 'Union Territory', 'capital' => 'Kavaratti', 'districts' => [
        'Lakshadweep|Kavaratti',
    ]],
    'puducherry' => ['name' => 'Puducherry', 'type' => 'Union Territory', 'capital' => 'Puducherry', 'districts' => [
        'Karaikal', 'Mahe', 'Puducherry', 'Yanam',
    ]],
];
