<?php
use Illuminate\Support\Facades\URL;
use Sendpulse\RestApi\ApiClient;
use Sendpulse\RestApi\Storage\FileStorage;

if (!function_exists('nigeriaCities')) {
    function nigeriaCities() {

    	return [
    		"Abia" => "Abia",
			"Adamawa" => "Adamawa",
			"AkwaIbom" => "AkwaIbom",
			"Anambra" => "Anambra",
			"Bauchi" => "Bauchi",
			"Bayelsa" => "Bayelsa",
			"Benue" => "Benue",
			"Borno" => "Borno",
			"Cross River" => "Cross River",
			"Delta" => "Delta",
			"Ebonyi" => "Ebonyi",
			"Edo" => "Edo",
			"Ekiti" => "Ekiti",
			"Enugu" => "Enugu",
			"FCT" => "FCT",
			"Gombe" => "Gombe",
			"Imo" => "Imo",
			"Jigawa" => "Jigawa",
			"Kaduna" => "Kaduna",
			"Kano" => "Kano",
			"Katsina" => "Katsina",
			"Kebbi" => "Kebbi",
			"Kogi" => "Kogi",
			"Kwara" => "Kwara",
			"Lagos" => "Lagos",
			"Nasarawa" => "Nasarawa",
			"Niger" => "Niger",
			"Ogun" => "Ogun",
			"Ondo" => "Ondo",
			"Osun" => "Osun",
			"Oyo" => "Oyo",
			"Plateau" => "Plateau",
			"Rivers" => "Rivers",
			"Sokoto" => "Sokoto",
			"Taraba" => "Taraba",
			"Yobe" => "Yobe",
			"Zamfara" => "Zamafara"
    	];
    }
}

if (!function_exists('countries')) {
    function countries() {
    	return [
			"Afghanistan" => "Afghanistan",
			"Åland Islands" => "Åland Islands",
			"Albania" => "Albania",
			"Algeria" => "Algeria",
			"American Samoa" => "American Samoa",
			"Andorra" => "Andorra",
			"Angola" => "Angola",
			"Anguilla" => "Anguilla",
			"Antarctica" => "Antarctica",
			"Antigua and Barbuda" => "Antigua and Barbuda",
			"Argentina" => "Argentina",
			"Armenia" => "Armenia",
			"Aruba" => "Aruba",
			"Australia" => "Australia",
			"Austria" => "Austria",
			"Azerbaijan" => "Azerbaijan",
			"Bahamas" => "Bahamas",
			"Bahrain" => "Bahrain",
			"Bangladesh" => "Bangladesh",
			"Barbados" => "Barbados",
			"Belarus" => "Belarus",
			"Belgium" => "Belgium",
			"Belize" => "Belize",
			"Benin" => "Benin",
			"Bermuda" => "Bermuda",
			"Bhutan" => "Bhutan",
			"Bolivia" => "Bolivia",
			"Bosnia and Herzegovina" => "Bosnia and Herzegovina",
			"Botswana" => "Botswana",
			"Bouvet Island" => "Bouvet Island",
			"Brazil" => "Brazil",
			"British Indian Ocean Territory" => "British Indian Ocean Territory",
			"Brunei Darussalam" => "Brunei Darussalam",
			"Bulgaria" => "Bulgaria",
			"Burkina Faso" => "Burkina Faso",
			"Burundi" => "Burundi",
			"Cambodia" => "Cambodia",
			"Cameroon" => "Cameroon",
			"Canada" => "Canada",
			"Cape Verde" => "Cape Verde",
			"Cayman Islands" => "Cayman Islands",
			"Central African Republic" => "Central African Republic",
			"Chad" => "Chad",
			"Chile" => "Chile",
			"China" => "China",
			"Christmas Island" => "Christmas Island",
			"Cocos (Keeling) Islands" => "Cocos (Keeling) Islands",
			"Colombia" => "Colombia",
			"Comoros" => "Comoros",
			"Congo" => "Congo",
			"Congo, The Democratic Republic of The" => "Congo, The Democratic Republic of The",
			"Cook Islands" => "Cook Islands",
			"Costa Rica" => "Costa Rica",
			"Cote D'ivoire" => "Cote D'ivoire",
			"Croatia" => "Croatia",
			"Cuba" => "Cuba",
			"Cyprus" => "Cyprus",
			"Czech Republic" => "Czech Republic",
			"Denmark" => "Denmark",
			"Djibouti" => "Djibouti",
			"Dominica" => "Dominica",
			"Dominican Republic" => "Dominican Republic",
			"Ecuador" => "Ecuador",
			"Egypt" => "Egypt",
			"El Salvador" => "El Salvador",
			"Equatorial Guinea" => "Equatorial Guinea",
			"Eritrea" => "Eritrea",
			"Estonia" => "Estonia",
			"Ethiopia" => "Ethiopia",
			"Falkland Islands (Malvinas)" => "Falkland Islands (Malvinas)",
			"Faroe Islands" => "Faroe Islands",
			"Fiji" => "Fiji",
			"Finland" => "Finland",
			"France" => "France",
			"French Guiana" => "French Guiana",
			"French Polynesia" => "French Polynesia",
			"French Southern Territories" => "French Southern Territories",
			"Gabon" => "Gabon",
			"Gambia" => "Gambia",
			"Georgia" => "Georgia",
			"Germany" => "Germany",
			"Ghana" => "Ghana",
			"Gibraltar" => "Gibraltar",
			"Greece" => "Greece",
			"Greenland" => "Greenland",
			"Grenada" => "Grenada",
			"Guadeloupe" => "Guadeloupe",
			"Guam" => "Guam",
			"Guatemala" => "Guatemala",
			"Guernsey" => "Guernsey",
			"Guinea" => "Guinea",
			"Guinea-bissau" => "Guinea-bissau",
			"Guyana" => "Guyana",
			"Haiti" => "Haiti",
			"Heard Island and Mcdonald Islands" => "Heard Island and Mcdonald Islands",
			"Holy See (Vatican City State)" => "Holy See (Vatican City State)",
			"Honduras" => "Honduras",
			"Hong Kong" => "Hong Kong",
			"Hungary" => "Hungary",
			"Iceland" => "Iceland",
			"India" => "India",
			"Indonesia" => "Indonesia",
			"Iran, Islamic Republic of" => "Iran, Islamic Republic of",
			"Iraq" => "Iraq",
			"Ireland" => "Ireland",
			"Isle of Man" => "Isle of Man",
			"Israel" => "Israel",
			"Italy" => "Italy",
			"Jamaica" => "Jamaica",
			"Japan" => "Japan",
			"Jersey" => "Jersey",
			"Jordan" => "Jordan",
			"Kazakhstan" => "Kazakhstan",
			"Kenya" => "Kenya",
			"Kiribati" => "Kiribati",
			"Korea, Democratic People's Republic of" => "Korea, Democratic People's Republic of",
			"Korea, Republic of" => "Korea, Republic of",
			"Kuwait" => "Kuwait",
			"Kyrgyzstan" => "Kyrgyzstan",
			"Lao People's Democratic Republic" => "Lao People's Democratic Republic",
			"Latvia" => "Latvia",
			"Lebanon" => "Lebanon",
			"Lesotho" => "Lesotho",
			"Liberia" => "Liberia",
			"Libyan Arab Jamahiriya" => "Libyan Arab Jamahiriya",
			"Liechtenstein" => "Liechtenstein",
			"Lithuania" => "Lithuania",
			"Luxembourg" => "Luxembourg",
			"Macao" => "Macao",
			"Macedonia, The Former Yugoslav Republic of" => "Macedonia, The Former Yugoslav Republic of",
			"Madagascar" => "Madagascar",
			"Malawi" => "Malawi",
			"Malaysia" => "Malaysia",
			"Maldives" => "Maldives",
			"Mali" => "Mali",
			"Malta" => "Malta",
			"Marshall Islands" => "Marshall Islands",
			"Martinique" => "Martinique",
			"Mauritania" => "Mauritania",
			"Mauritius" => "Mauritius",
			"Mayotte" => "Mayotte",
			"Mexico" => "Mexico",
			"Micronesia, Federated States of" => "Micronesia, Federated States of",
			"Moldova, Republic of" => "Moldova, Republic of",
			"Monaco" => "Monaco",
			"Mongolia" => "Mongolia",
			"Montenegro" => "Montenegro",
			"Montserrat" => "Montserrat",
			"Morocco" => "Morocco",
			"Mozambique" => "Mozambique",
			"Myanmar" => "Myanmar",
			"Namibia" => "Namibia",
			"Nauru" => "Nauru",
			"Nepal" => "Nepal",
			"Netherlands" => "Netherlands",
			"Netherlands Antilles" => "Netherlands Antilles",
			"New Caledonia" => "New Caledonia",
			"New Zealand" => "New Zealand",
			"Nicaragua" => "Nicaragua",
			"Niger" => "Niger",
			"Nigeria" => "Nigeria",
			"Niue" => "Niue",
			"Norfolk Island" => "Norfolk Island",
			"Northern Mariana Islands" => "Northern Mariana Islands",
			"Norway" => "Norway",
			"Oman" => "Oman",
			"Pakistan" => "Pakistan",
			"Palau" => "Palau",
			"Palestinian Territory, Occupied" => "Palestinian Territory, Occupied",
			"Panama" => "Panama",
			"Papua New Guinea" => "Papua New Guinea",
			"Paraguay" => "Paraguay",
			"Peru" => "Peru",
			"Philippines" => "Philippines",
			"Pitcairn" => "Pitcairn",
			"Poland" => "Poland",
			"Portugal" => "Portugal",
			"Puerto Rico" => "Puerto Rico",
			"Qatar" => "Qatar",
			"Reunion" => "Reunion",
			"Romania" => "Romania",
			"Russian Federation" => "Russian Federation",
			"Rwanda" => "Rwanda",
			"Saint Helena" => "Saint Helena",
			"Saint Kitts and Nevis" => "Saint Kitts and Nevis",
			"Saint Lucia" => "Saint Lucia",
			"Saint Pierre and Miquelon" => "Saint Pierre and Miquelon",
			"Saint Vincent and The Grenadines" => "Saint Vincent and The Grenadines",
			"Samoa" => "Samoa",
			"San Marino" => "San Marino",
			"Sao Tome and Principe" => "Sao Tome and Principe",
			"Saudi Arabia" => "Saudi Arabia",
			"Senegal" => "Senegal",
			"Serbia" => "Serbia",
			"Seychelles" => "Seychelles",
			"Sierra Leone" => "Sierra Leone",
			"Singapore" => "Singapore",
			"Slovakia" => "Slovakia",
			"Slovenia" => "Slovenia",
			"Solomon Islands" => "Solomon Islands",
			"Somalia" => "Somalia",
			"South Africa" => "South Africa",
			"South Georgia and The South Sandwich Islands" => "South Georgia and The South Sandwich Islands",
			"Spain" => "Spain",
			"Sri Lanka" => "Sri Lanka",
			"Sudan" => "Sudan",
			"Suriname" => "Suriname",
			"Svalbard and Jan Mayen" => "Svalbard and Jan Mayen",
			"Swaziland" => "Swaziland",
			"Sweden" => "Sweden",
			"Switzerland" => "Switzerland",
			"Syrian Arab Republic" => "Syrian Arab Republic",
			"Taiwan, Province of China" => "Taiwan, Province of China",
			"Tajikistan" => "Tajikistan",
			"Tanzania, United Republic of" => "Tanzania, United Republic of",
			"Thailand" => "Thailand",
			"Timor-leste" => "Timor-leste",
			"Togo" => "Togo",
			"Tokelau" => "Tokelau",
			"Tonga" => "Tonga",
			"Trinidad and Tobago" => "Trinidad and Tobago",
			"Tunisia" => "Tunisia",
			"Turkey" => "Turkey",
			"Turkmenistan" => "Turkmenistan",
			"Turks and Caicos Islands" => "Turks and Caicos Islands",
			"Tuvalu" => "Tuvalu",
			"Uganda" => "Uganda",
			"Ukraine" => "Ukraine",
			"United Arab Emirates" => "United Arab Emirates",
			"United Kingdom" => "United Kingdom",
			"United States" => "United States",
			"United States Minor Outlying Islands" => "United States Minor Outlying Islands",
			"Uruguay" => "Uruguay",
			"Uzbekistan" => "Uzbekistan",
			"Vanuatu" => "Vanuatu",
			"Venezuela" => "Venezuela",
			"Viet Nam" => "Viet Nam",
			"Virgin Islands, British" => "Virgin Islands, British",
			"Virgin Islands, U.S." => "Virgin Islands, U.S.",
			"Wallis and Futuna" => "Wallis and Futuna",
			"Western Sahara" => "Western Sahara",
			"Yemen" => "Yemen",
			"Zambia" => "Zambia",
			"Zimbabwe" => "Zimbabwe"
		];
	}
}


// function for sending confirmation email
if (!function_exists('send_sayuncle_registeration_email')) {
    function send_sayuncle_registeration_email($contestant)
    {
        
// Mail::send("templates.emails.sayuncle_registration",
// 	        [
// 	            'name' => 'ram' ,
// 	            'email' => 'vishalsingh.mailinator.com',
// 	            'url' => 'http://www.justsayuncle.ng/sayuncle/contestant/13/868487b9296c91e949098dc453289010e31d0fcf8d0439c3053f10c0218b41ef',
// 	            'referal_url' => 'http://www.justsayuncle.ng/sayuncle/profile/SUR1316052',
// 	        ], function ($message) use ($contestant ){
// 	            $message->subject('Welcome to Vicomma | Sayuncle Contest');
//                 $message->from('vishalsingh@rglabs.net');
// 	            $message->to('vishalsingh@mailinator.com');
// 	        });


// exit;        
        
        
        
        
    	if(config('custom.use_sendpulse') == 'yes'){
    		$SPApiClient = new ApiClient(env('SENDPULSE_API_USER_ID'), env('SENDPULSE_API_SECRET'), new FileStorage());

            $email = array(
                'html' => view("templates.emails.sayuncle_registration", [
	            'name' => $contestant['first_name'] ,
	            'email' => $contestant['email'],
	            'url' => route('sayuncle.contestant.details', ['contestant' => $contestant['id'],'signature' => $contestant['auth_token'] ]),
	            'referal_url' => route('sayuncle.contestant.profile', ['contestant' => $contestant['contestant_id'] ])
	        ])->render(),
//                'text' => 'Hello!',
                'subject' => 'Welcome to Vicomma | Sayuncle Contest',
                'from' => array(
                    'name' => 'Vicomma',
                'email' => 'info@vicomma.com',
                //'email' => 'info@maxflix.com',
                ),
                'to' => array(
                    array(
                        'name' => $contestant['first_name'],
                        'email' => $contestant['email'],
                    ),
                ),
            );

            ini_set("allow_url_fopen", 1);

            $response = $SPApiClient->smtpSendMail($email);
    	}else{
    		Mail::send("templates.emails.sayuncle_registration",
	        [
	            'name' => $contestant['first_name'] ,
	            'email' => $contestant['email'],
	            'url' => route('sayuncle.contestant.details', ['contestant' => $contestant['id'],'signature' => $contestant['auth_token'] ]),
	           // 'url' => 'http://www.justsayuncle.ng/sayuncle/contestant/13/868487b9296c91e949098dc453289010e31d0fcf8d0439c3053f10c0218b41ef',
	            'referal_url' => route('sayuncle.contestant.profile', ['contestant' => $contestant['contestant_id'] ]),
	           // 'referal_url' => 'http://www.justsayuncle.ng/sayuncle/profile/SUR1316052',
	        ], function ($message) use ($contestant ){
	            $message->subject('Welcome to Vicomma | Sayuncle Contest');
	               // $message->from(config('mail.from.address'),config('mail.from.name'));
	                $message->from('vishalsingh@rglabs.net');

	            $message->to($contestant['email']);
	        });
    	}
        
    }
}




// function for sending confirmation email
if (!function_exists('send_sayuncle_contestant_email')) {
    function send_sayuncle_contestant_email($contestant)
    {
    	if(config('custom.use_sendpulse') == 'yes'){
    		$SPApiClient = new ApiClient(env('SENDPULSE_API_USER_ID'), env('SENDPULSE_API_SECRET'), new FileStorage());

            $email = array(
                'html' => view("templates.emails.sayuncle_registration", [
	            'name' => $contestant['first_name'] ,
	            'email' => $contestant['email'],
	            'url' => route('sayuncle.contestant.details', ['contestant' => $contestant['id'],'signature' => $contestant['auth_token'] ]),
	            'referal_url' => route('sayuncle.contestant.profile', ['contestant' => $contestant['contestant_id'] ])
	        ])->render(),
//                'text' => 'Hello!',
                'subject' => 'Welcome to Vicomma | Sayuncle Contest',
                'from' => array(
                    'name' => 'Vicomma',
                'email' => 'info@vicomma.com',
                //'email' => 'info@maxflix.com',
                ),
                'to' => array(
                    array(
                        'name' => $contestant['first_name'],
                        'email' => $contestant['email'],
                    ),
                ),
            );

            ini_set("allow_url_fopen", 1);

            $response = $SPApiClient->smtpSendMail($email);
    	}else{
    		Mail::send("templates.emails.sayuncle_contestant",
	        [
	            'name' => $contestant['first_name'] ,
	            'email' => $contestant['email'],
	            'url' => route('sayuncle.contestant.details', ['contestant' => $contestant['id'],'signature' => $contestant['auth_token'] ]),
	            'referal_url' => route('sayuncle.contestant.profile', ['contestant' => $contestant['contestant_id'] ])
	        ], function ($message) use ($contestant ){
	            $message->subject('Welcome to Vicomma | Sayuncle Contest');
	                $message->from(config('mail.from.address'),config('mail.from.name'));
	            $message->to($contestant['email']);
	        });
    	}
        
    }
}



// function for sending video upload email
if (!function_exists('send_sayuncle_videoupload_email')) {
    function send_sayuncle_video_upload_email($contestant)
    {
    	if(config('custom.use_sendpulse') == 'yes'){
    		$SPApiClient = new ApiClient(env('SENDPULSE_API_USER_ID'), env('SENDPULSE_API_SECRET'), new FileStorage());

            $email = array(
                'html' => view("templates.emails.sayuncle_video_upload", [
	            'name' => $contestant['first_name'] ,
	            'email' => $contestant['email'],
	            'url' => route('sayuncle.contestant.details', ['contestant' => $contestant['id'],'signature' => $contestant['auth_token'] ]),
	            'referal_url' => route('sayuncle.contestant.profile', ['contestant' => $contestant['contestant_id'] ])
	        ])->render(),
//                'text' => 'Hello!',
                'subject' => 'Welcome to Vicomma | Sayuncle Contest',
                'from' => array(
                    'name' => 'Vicomma',
                'email' => 'info@vicomma.com',
                //'email' => 'info@maxflix.com',
                ),
                'to' => array(
                    array(
                        'name' => $contestant['first_name'],
                        'email' => $contestant['email'],
                    ),
                ),
            );

            ini_set("allow_url_fopen", 1);

            $response = $SPApiClient->smtpSendMail($email);
    	}else{
    		Mail::send("templates.emails.sayuncle_video_upload",
	        [
	            'name' => $contestant['first_name'] ,
	            'email' => $contestant['email'],
	            'url' => route('sayuncle.contestant.details', ['contestant' => $contestant['id'],'signature' => $contestant['auth_token'] ]),
	            'referal_url' => route('sayuncle.contestant.profile', ['contestant' => $contestant['contestant_id'] ])
	        ], function ($message) use ($contestant ){
	            $message->subject('Welcome to Vicomma | Sayuncle Contest');
	                $message->from(config('mail.from.address'),config('mail.from.name'));
	            $message->to($contestant['email']);
	        });
    	}
        
    }
}

// function for sending send_sayuncle_contestant_voting_email email
if (!function_exists('send_sayuncle_contestant_voting_email')) {
    function send_sayuncle_contestant_voting_email($contestant,$voter)
    {
    	if(config('custom.use_sendpulse') == 'yes'){
    	    
    	}else{

    		$url = URL::temporarySignedRoute(
					    'sayuncle.contestant.vote', now()->addMinutes(30), ['voter_number' => 'SUR'.$voter->id."-".substr(time(), 0, 4)]);

    		Mail::send("templates.emails.sayuncle_contestant_voting",
	        [
	            'contestant_name' => $contestant['username'],
	            'url' => $url,
	        ], function ($message) use ($voter ){
	            $message->subject('Verify Your Vote | Sayuncle Contest');
	                $message->from(config('mail.from.address'),config('mail.from.name'));
	            $message->to($voter->email);
	        });
    	}     
    }
}




// function for payment verification
if (!function_exists('verify_flutterwave_payment')) {
    function verify_flutterwave_payment($transaction_id)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://api.flutterwave.com/v3/transactions/".$transaction_id."/verify",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
            "Content-Type: application/json",
            "Authorization: Bearer ".config('rave.secretKey')
          ),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);     
        $response = json_decode($response,true);
        
        return $response['data'];
    }
}

