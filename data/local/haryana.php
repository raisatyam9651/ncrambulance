<?php
/**
 * Hand-written local content for Haryana district pages.
 * Keeps each district page distinct with verified local geography, towns/tehsils and hospitals.
 *
 * Keys are district slugs. All fields are optional:
 *   'about'     => one or more paragraphs (string or array of strings)
 *   'areas'     => localities / towns / tehsils covered
 *   'hospitals' => hospitals patients are commonly taken to
 */
return [
    'ambala' => [
        'about' => [
            'Ambala sits at the junction of NH-44 and NH-152, connecting northern Haryana with Chandigarh and Punjab. Families in Ambala Cantt and Ambala City frequently book ambulances for local hospital admissions as well as critical referrals to PGIMER Chandigarh.',
            'We arrange BLS, ALS, ICU and ventilator ambulances across Ambala district, including highway trauma pickups and planned inter-city transfers to Chandigarh and Delhi.',
        ],
        'areas' => ['Ambala Cantt', 'Ambala City', 'Barara', 'Naraingarh', 'Saha', 'Mullana', 'Mahesh Nagar', 'Model Town', 'Sector 7', 'Sector 9', 'Babyal', 'Shahzadpur'],
        'hospitals' => ['Civil Hospital, Ambala Cantt', 'Civil Hospital, Ambala City', 'MMIMSR (Maharishi Markandeshwar Hospital), Mullana', 'Philadelphia Mission Hospital, Ambala'],
    ],
    'bhiwani' => [
        'about' => [
            'Bhiwani is a major district in western Haryana where patients often travel towards Rohtak, Hisar or Delhi NCR for super-speciality cardiac, neuro and trauma care.',
            'Our helpline arranges 24/7 emergency and planned ambulances across Bhiwani town and surrounding tehsils, including ICU and ventilator transfers to PGIMS Rohtak and Gurugram.',
        ],
        'areas' => ['Bhiwani City', 'Loharu', 'Siwani', 'Tosham', 'Bawani Khera', 'Hansi Gate', 'Sector 13', 'Sector 23', 'Vidyut Nagar', 'Chang', 'Kairu'],
        'hospitals' => ['Pandit Nekiram Sharma Government Medical College / Civil Hospital, Bhiwani', 'Ch. Bansi Lal Civil Hospital, Bhiwani', 'Jeevan Jyoti Hospital, Bhiwani'],
    ],
    'charkhi-dadri' => [
        'about' => [
            'Charkhi Dadri lies along NH-148B and NH-334B between Bhiwani, Jhajjar and Mahendragarh. Critical cases requiring tertiary care are commonly referred to PGIMS Rohtak or hospitals in Gurugram and Delhi.',
            'We coordinate BLS, ALS and ICU ambulances from Charkhi Dadri and nearby villages with transparent fares confirmed before dispatch.',
        ],
        'areas' => ['Charkhi Dadri', 'Badhra', 'Bond Kalan', 'Jhojhu Kalan', 'Baund', 'Loharu Road', 'Rohtak Road', 'Mahendragarh Road', 'Atela Kalan', 'Ranila'],
        'hospitals' => ['Civil Hospital, Charkhi Dadri', 'General Hospital, Charkhi Dadri'],
    ],
    'fatehabad' => [
        'about' => [
            'Fatehabad sits on NH-9 in western Haryana between Hisar and Sirsa. For advanced cardiac, oncology and critical-care treatment, patients are regularly shifted to Hisar, Agroha, Rohtak or Chandigarh.',
            'Our dispatch desk arranges 24/7 road ambulances across Fatehabad, Tohana and Ratia, as well as long-distance ICU transfers.',
        ],
        'areas' => ['Fatehabad', 'Tohana', 'Ratia', 'Bhattu Kalan', 'Bhuna', 'Jakhal', 'Model Town', 'Sector 3', 'HUDA Sector', 'Bighar'],
        'hospitals' => ['Civil Hospital, Fatehabad', 'Sub-Divisional Hospital, Tohana', 'Sub-Divisional Hospital, Ratia'],
    ],
    'hisar' => [
        'about' => [
            'Hisar is a key medical and educational hub for western Haryana, serving patients from Fatehabad, Bhiwani, Jind and Sirsa. Highway corridors along NH-9 and NH-52 also generate frequent trauma and emergency transfer needs.',
            'We arrange BLS, ALS, cardiac and ventilator ambulances across Hisar and Agroha, plus inter-city transfers to PGIMS Rohtak, Chandigarh and Delhi NCR.',
        ],
        'areas' => ['Hisar City', 'Model Town', 'Urban Estate II', 'Sector 14', 'Sector 15', 'Hansi', 'Barwala', 'Agroha', 'Adampur', 'Narnaund', 'Uklana', 'Bass'],
        'hospitals' => ['Maharaja Agrasen Medical College, Agroha', 'Civil Hospital, Hisar', 'Sapra Multispeciality Hospital, Hisar', 'Jindal Institute of Medical Sciences, Hisar'],
    ],
    'jhajjar' => [
        'about' => [
            'Jhajjar and Bahadurgarh border Delhi and Gurugram, with major referral traffic to AIIMS Jhajjar (NCI), PGIMS Rohtak and West Delhi hospitals.',
            'Whether you need a local patient shift in Bahadurgarh or an ICU transfer from Jhajjar to Gurugram or New Delhi, our helpline coordinates the nearest available ambulance 24/7.',
        ],
        'areas' => ['Jhajjar', 'Bahadurgarh', 'Beri', 'Matanhail', 'Badli', 'Sector 6 Bahadurgarh', 'Sector 9', 'Line Par', 'Badli Road', 'Kosli Road'],
        'hospitals' => ['National Cancer Institute (AIIMS), Badsa, Jhajjar', 'Civil Hospital, Jhajjar', 'Civil Hospital, Bahadurgarh', 'Brahm Shakti Sanjivani Hospital, Bahadurgarh'],
    ],
    'jind' => [
        'about' => [
            'Jind lies in central Haryana with road links to Rohtak, Hisar, Panipat and Kaithal. Patients needing tertiary trauma, neuro or cardiac care are often transferred to PGIMS Rohtak or hospitals in Chandigarh and Delhi.',
            'We provide 24/7 ambulance booking across Jind, Narwana and Safidon for both emergency pickups and scheduled hospital discharges.',
        ],
        'areas' => ['Jind City', 'Narwana', 'Safidon', 'Julana', 'Uchana', 'Alewa', 'Pillukhera', 'Urban Estate', 'Sector 11', 'Rohtak Road'],
        'hospitals' => ['Civil Hospital, Jind', 'Sub-Divisional Hospital, Narwana', 'Sub-Divisional Hospital, Safidon'],
    ],
    'kaithal' => [
        'about' => [
            'Kaithal connects northern and central Haryana along NH-152 and NH-65. Families frequently book ambulances for local admissions as well as specialist transfers to Karnal, Chandigarh and Patiala.',
            'Our 24/7 dispatch desk arranges BLS, ALS and ICU ambulances in Kaithal, Pundri, Cheeka and Kalayat with upfront fare confirmation.',
        ],
        'areas' => ['Kaithal', 'Guhla (Cheeka)', 'Pundri', 'Kalayat', 'Siwan', 'Rajound', 'Dhand', 'Sector 19', 'Sector 20', 'Ambala Road'],
        'hospitals' => ['Civil Hospital, Kaithal', 'Shah Hospital, Kaithal', 'Jaipur Hospital, Kaithal'],
    ],
    'karnal' => [
        'about' => [
            'Karnal is a major healthcare centre along NH-44 (GT Road), home to Kalpana Chawla Government Medical College and several multi-speciality hospitals serving nearby districts.',
            'We arrange emergency, ICU, cardiac and ventilator ambulances across Karnal, Gharaunda, Assandh and Indri, as well as rapid highway trauma support and transfers to Chandigarh and Delhi.',
        ],
        'areas' => ['Karnal City', 'Sector 12', 'Sector 13', 'Model Town', 'Gharaunda', 'Assandh', 'Indri', 'Nilokheri', 'Taraori', 'Nissing', 'Kunjpura'],
        'hospitals' => ['Kalpana Chawla Government Medical College & Hospital, Karnal', 'Amritdhara myHospital, Karnal', 'Virik Hospital, Karnal', 'Park Hospital, Karnal'],
    ],
    'kurukshetra' => [
        'about' => [
            'Kurukshetra (Thanesar) sits on NH-44 between Karnal and Ambala. Patients needing advanced tertiary care are commonly referred to Chandigarh (PGIMER) or Karnal.',
            'Our helpline coordinates 24/7 ambulance services across Thanesar, Shahabad, Pehowa and Ladwa for emergencies, dialysis transport and critical inter-city transfers.',
        ],
        'areas' => ['Thanesar', 'Kurukshetra University Area', 'Sector 7', 'Sector 13', 'Shahabad Markanda', 'Pehowa', 'Ladwa', 'Babain', 'Ismailabad', 'Pipli'],
        'hospitals' => ['LNJP Civil Hospital, Kurukshetra', 'Adesh Medical College & Hospital, Shahabad', 'Cygnus Super Speciality Hospital, Kurukshetra'],
    ],
    'mahendragarh' => [
        'about' => [
            'Mahendragarh district, with its headquarters at Narnaul, borders Rajasthan and connects to Rewari and Gurugram via NH-11 and NH-148B. Critical patients are often shifted to Gurugram, Rohtak or Delhi.',
            'We arrange 24/7 BLS, ALS and ICU ambulances across Narnaul, Mahendragarh, Kanina and Ateli with clear fares shared on the call.',
        ],
        'areas' => ['Narnaul', 'Mahendragarh', 'Ateli', 'Kanina', 'Nangal Chaudhary', 'Satnali', 'Nizampur', 'Singhania Road', 'Rewari Road'],
        'hospitals' => ['Civil Hospital, Narnaul', 'Sub-Divisional Hospital, Mahendragarh'],
    ],
    'nuh' => [
        'about' => [
            'Nuh (Mewat) lies south of Gurugram along the Delhi–Mumbai Expressway and NH-248A, with SHKM Government Medical College at Nalhar serving as the primary referral hospital.',
            'For super-speciality cardiac, trauma or ICU transfers to Gurugram, Faridabad or New Delhi, our 24/7 helpline arranges the nearest suitable ambulance.',
        ],
        'areas' => ['Nuh', 'Nalhar', 'Sohna Road', 'Punhana', 'Ferozepur Jhirka', 'Taoru', 'Nagina', 'Pingawan', 'Indri'],
        'hospitals' => ['Shaheed Hasan Khan Mewati (SHKM) Government Medical College, Nalhar', 'Civil Hospital, Nuh (Mandikhera)'],
    ],
    'palwal' => [
        'about' => [
            'Palwal sits on NH-19 (Mathura Road) and the KMP Expressway south of Faridabad. Highway emergencies and critical referrals to Faridabad and Delhi NCR require fast, reliable ambulance dispatch.',
            'We provide 24/7 BLS, ALS, ICU and ventilator ambulance booking across Palwal, Hodal and Hathin.',
        ],
        'areas' => ['Palwal City', 'Hodal', 'Hathin', 'Hassanpur', 'Prithla', 'Sector 2', 'Agra Chowk', 'New Colony', 'Baghola'],
        'hospitals' => ['Civil Hospital, Palwal', 'Apex Hospital, Palwal', 'Guru Nanak Hospital, Palwal'],
    ],
    'panchkula' => [
        'about' => [
            'Panchkula forms part of the Chandigarh Tricity region and sits at the foothills of the Shivaliks along NH-5 and NH-7 towards Shimla and Yamunanagar.',
            'We arrange 24/7 emergency, cardiac, ICU and air-ambulance ground transfers across Panchkula, Pinjore, Kalka and Barwala, including rapid shifts to PGIMER Chandigarh.',
        ],
        'areas' => ['Panchkula Sector 5', 'Sector 6', 'Sector 11', 'Sector 20', 'Mansa Devi Complex', 'Pinjore', 'Kalka', 'Raipur Rani', 'Barwala', 'Morni'],
        'hospitals' => ['Civil Hospital, Sector 6, Panchkula', 'Alchemist Hospital, Sector 21, Panchkula', 'Paras Bliss Hospital, Panchkula', 'Ojas Hospital, Sector 26, Panchkula'],
    ],
    'panipat' => [
        'about' => [
            'Panipat is a major industrial and highway hub on NH-44 between Sonipat and Karnal. Patients frequently need rapid trauma response as well as planned ICU or cardiac transfers to Delhi NCR and Chandigarh.',
            'Our dispatch desk coordinates 24/7 ambulances across Panipat city, Samalkha and Israna with driver details shared before dispatch.',
        ],
        'areas' => ['Panipat City', 'Model Town', 'Sector 11–12', 'Sector 13–17', 'Sector 25', 'Samalkha', 'Israna', 'Madlauda', 'Bapoli', 'Sanoli Road'],
        'hospitals' => ['Civil Hospital, Panipat', 'NC Medical College & Hospital, Israna', 'Park Hospital, Panipat', 'Prem Hospital, Panipat'],
    ],
    'rewari' => [
        'about' => [
            'Rewari is an important rail and highway junction on NH-48 (Delhi–Jaipur Highway) and NH-352, with industrial corridors around Dharuhera and Bawal.',
            'We arrange 24/7 emergency, ICU and ventilator ambulances across Rewari, Dharuhera and Kosli, including critical-care transfers to Gurugram and Delhi.',
        ],
        'areas' => ['Rewari City', 'Model Town', 'Sector 1', 'Sector 3', 'Sector 4', 'Dharuhera', 'Bawal', 'Kosli', 'Nahar', 'Dahina'],
        'hospitals' => ['Civil Hospital, Rewari', 'Pushpanjali Hospital, Rewari', 'Virat Hospital, Rewari', 'Apex Hospital, Dharuhera'],
    ],
    'rohtak' => [
        'about' => [
            'Rohtak is Haryana\'s premier medical education centre, home to PGIMS Rohtak, which receives critical referrals from across central and western Haryana.',
            'We coordinate local patient shifts within Rohtak as well as long-distance ICU, ventilator and air-ambulance ground transfers to Gurugram and New Delhi.',
        ],
        'areas' => ['Rohtak City', 'PGIMS Campus', 'Model Town', 'Sector 1', 'Sector 2', 'Sector 3', 'Sector 14', 'Meham', 'Kalanaur', 'Sampla', 'Lakhan Majra'],
        'hospitals' => ['PGIMS Rohtak (Pt. B.D. Sharma University of Health Sciences)', 'Civil Hospital, Rohtak', 'Kainos Super Speciality Hospital, Rohtak', 'Holy Heart Hospital, Rohtak'],
    ],
    'sirsa' => [
        'about' => [
            'Sirsa is Haryana\'s westernmost district along NH-9, bordering Punjab and Rajasthan. Because tertiary centres in Hisar, Chandigarh and Delhi are several hours away, reliable ICU and oxygen-equipped ambulances are essential for inter-city transfers.',
            'We arrange 24/7 road ambulances across Sirsa, Dabwali, Ellenabad and Rania with upfront fare confirmation.',
        ],
        'areas' => ['Sirsa City', 'Sector 20', 'Mandi Dabwali', 'Ellenabad', 'Rania', 'Kalanwali', 'Nathusari Chopta', 'Barnala Road', 'Hisar Road'],
        'hospitals' => ['Civil Hospital, Sirsa', 'Shah Satnam Ji Speciality Hospital, Sirsa', 'Sanjivani Hospital, Sirsa'],
    ],
    'sonipat' => [
        'about' => [
            'Sonipat sits on NH-44 and the KMP/KGP expressway ring just north of Delhi, with major medical traffic towards BPS Government Medical College (Khanpur Kalan) and North Delhi hospitals.',
            'We provide 24/7 emergency, BLS, ALS and ICU ambulance booking across Sonipat, Gohana, Ganaur and Kharkhoda.',
        ],
        'areas' => ['Sonipat City', 'Sector 14', 'Sector 15', 'Sector 23', 'Kundli', 'Rai', 'Ganaur', 'Gohana', 'Kharkhoda', 'Murthal'],
        'hospitals' => ['BPS Government Medical College for Women, Khanpur Kalan', 'Civil Hospital, Sonipat', 'Tulip Multispeciality Hospital, Sonipat', 'Cygnus JK Hindu Hospital, Sonipat'],
    ],
    'yamunanagar' => [
        'about' => [
            'Yamunanagar and Jagadhri form an industrial twin-city in northeastern Haryana along NH-344, with frequent referrals to Chandigarh (PGIMER) and Dehradun.',
            'Our helpline arranges 24/7 emergency, ICU and ventilator ambulances across Yamunanagar, Jagadhri, Radaur and Chhachhrauli.',
        ],
        'areas' => ['Yamunanagar', 'Jagadhri', 'Model Town', 'Sector 17', 'Radaur', 'Chhachhrauli', 'Bilaspur', 'Sadhaura', 'Mustafabad (Saraswati Nagar)', 'Workshop Road'],
        'hospitals' => ['Mukand Lal Civil Hospital, Yamunanagar', 'Civil Hospital, Jagadhri', 'Gaba Hospital, Yamunanagar', 'Santosh Hospital, Yamunanagar'],
    ],
];
