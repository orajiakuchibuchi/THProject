<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index(){
        return view('pages.index');
    }
    public function contact(){
        return view('pages.contact');
    }
    public function terms(){
        return view('pages.terms');
    }
    public function registration($type){
        $general = [
            'passport'=> ['required', 'file', 'Passport'],
            'diet'=> ['required', 'text', 'Diet'],
            'firstname'=> ['required', 'text', 'First name'],
            'lastname'=> ['required', 'text', 'Last name'],
            'othername'=> ['required', 'text', 'Other name'],
            'sponsor'=> ['required', 'text', 'Sponsor'],
            'homeaddress'=> ['required', 'text', 'Home Address'],
            'employer'=> ['required', 'text', 'Employee'],
            'phonenumber'=> ['required', 'text', 'Phone Number'],
            'email'=> ['required', 'email', 'Email'],
            'qualifications'=> ['required', 'text', 'Qualification'],
            'trainingmethod'=> ['required', 'select', 'Training Method',
                                            [
                                                'Physical',
                                                'Online',
                                            ],
                                            'single'],
            'gender'=> ['required', 'select', 'Gender',
                                            [
                                                'male',
                                                'female',
                                            ],
                                            'single'],
            'trainingtype'=> ['required', 'select', 'Training Type',
                                            [
                                                'Week Day',
                                                'Weeekends',
                                            ],
                                            'single'],
            'maritalstatus'=> ['required', 'select', 'Marital Status',
                                            [
                                                'Single',
                                                'Married',
                                                'Divorced',
                                            ],
                                            'single'],
            'howdidyouknow'=> ['required', 'select', 'How did you know?',
                                            [
                                                'Flyer',
                                                'Google',
                                                'Website',
                                                'Instagram',
                                                'Twitter',
                                                'SMS/email',
                                                'NYSC Venue',
                                                'A Friend',
                                                'Signage',
                                                'Other Specify',
                                            ],
                                            'single'],
            'studentStatus'=> ['required', 'select', 'Are you a returning student',
                                            [
                                                'Yes',
                                                'No',
                                            ],
                                            'single'],
            'ihaveread'=> ['required', 'select', 'I have read our terms and conditions',
                                            [
                                                'No',
                                                'Yes',
                                            ],
                                            'single']
        ];
        $types = [
            'citnreg'=> [
                'foundation'=>[
                    [
                        'Principles Of Taxation',
                        'Financial Accounting',
                        'Business Law',
                        'Economics',
                    ],
                    'payment'=>[
                        'New Students'=> [
                            '1'=> '18000',
                            '2'=> '25000',
                            '3'=> '33000',
                            '4'=> '45000',
                        ],
                        'Returning Students Foundation' =>[
                            '1'=> '18000',
                            '2'=> '25000',
                            '3'=> '33000',
                            '4'=> '45000',
                        ],
                        'Admin Fee'=> '5000'
                    ]
                ],
                'Prof Tax I'=>[
                    [
                        'Financial Reporting',
                        'Income Tax',
                        'Indirect Tax',
                        'Governance, Risk And Ethics'
                    ],
                    'payment'=>[
                        'New Students'=> [
                            '1'=> '23000',
                            '2'=> '30000',
                            '3'=> '37000',
                            '4'=> '45000',
                        ],
                        'Returning Students Foundation' =>[
                            '1'=> '23000',
                            '2'=> '30000',
                            '3'=> '37000',
                            '4'=> '45000',
                        ],
                        'Admin Fee'=> '5000'
                    ]
                ],
                'Prof Tax II'=>[
                    [
                        'Tax Audit And Investigation',
                        'International Taxation',
                        'Financial/Tax Analysis'
                    ],
                    'payment'=>[
                        'New Students'=> [
                            '1'=> '29000',
                            '2'=> '37000',
                            '3'=> '45000',
                            '4'=> '53000',
                        ],
                        'Returning Students Foundation' =>[
                            '1'=> '29000',
                            '2'=> '37000',
                            '3'=> '45000',
                            '4'=> '53000',
                        ],
                        'Admin Fee'=> '5000'
                    ]
                ]
            ],
            'icanreg'=> [
                'foundation'=>[
                    [
                        'Business, Management and Finance',
                        'Financial Accounting',
                        'Management Information',
                        'Business Law',
                    ],
                    'payment'=>[
                        'New Students'=> [
                            '1'=> '32000',
                            '2'=> '39000',
                            '3'=> '45000',
                            '4'=> '50000',
                        ],
                        'Returning Students Foundation' =>[
                            '1'=> '30000',
                            '2'=> '37000',
                            '3'=> '43000',
                            '4'=> '48000',  
                        ],
                        'Admin Fee'=> '5000'
                    ]
                ],
                'skills'=>[
                    [
                        'Financial Reporting',
                        'Taxation',
                        'Audit And Assurance',
                        'Corporate Strategic Management And Ethics',
                        'Performance Management',
                        'Public Sector ACCTG and Finance'
                    ],
                    'payment'=>[
                        'New Students'=> [
                            '1'=> '37000',
                            '2'=> '44000',
                            '3'=> '49000',
                            '4'=> '53000',
                            '5'=> '60000',
                            '6'=> '65000'
                        ],
                        'Returning Students Foundation' =>[
                            '1'=> '35000',
                            '2'=> '42000',
                            '3'=> '47000',
                            '4'=> '51000',  
                            '5'=> '58000',  
                            '6'=> '63000',  
                        ],
                        'Admin Fee'=> '5000'
                    ]
                ],
                'Professional'=>[
                    [
                        'Corporate Reporting',
                        'ADV Audit And Assurance',
                        'Strategic Taxation',
                        'Advanced Taxation',
                        'Case Study',
                    ],
                    'payment'=>[
                        'Admin Fee'=> '5000',
                        'New Students'=> [
                            '1'=> '33000',
                            '2'=> '42000',
                            '3'=> '51000',
                            '4'=> '59000',
                            '5'=> '64000'
                        ],
                        'Returning Students Foundation' =>[
                            '1'=> '30000',
                            '2'=> '40000',
                            '3'=> '49000',
                            '4'=> '57000',  
                            '5'=> '62000'
                        ]
                    ] 
                ]

            ],
            'atswareg'=> [
                'ATS 1'=>[
                    [
                        'Economics',
                        'Business Law',
                        'Basic Accounting',
                        'Communication Skills'
                    ], 
                    'payment'=>[
                        'New Students'=> [
                            '1'=> '23000',
                            '2'=> '27000',
                            '3'=> '31000',
                            '4'=> '35000',
                        ],
                        'Returning Students Foundation' =>[
                            '1'=> '23000',
                            '2'=> '27000',
                            '3'=> '31000',
                            '4'=> '35000', 
                        ],
                        'Admin Fee'=> '3500'
                    ]
                ],
                'ATS II'=>[
                    [
                        'Financial Accounting',
                        'Information Technology',
                        'Public Sector Accounting',
                        'Quantitative Analysis'
                    ],
                    'payment'=>[
                        'New Students'=> [
                            '1'=> '25000',
                            '2'=> '29000',
                            '3'=> '33000',
                            '4'=> '37000',
                        ],
                        'Returning Students Foundation' =>[
                            '1'=> '25000',
                            '2'=> '29000',
                            '3'=> '33000',
                            '4'=> '37000',
                        ],
                        'Admin Fee'=> '3500'
                    ]
                ],
                'ATS III'=>[
                    [
                        'Management',
                        'Costing',
                        'Tax',
                        'Principle Of Auditing'
                    ],
                     'payment'=>[
                        'New Students'=> [
                            '1'=> '27000',
                            '2'=> '32000',
                            '3'=> '37000',
                            '4'=> '42000',
                        ],
                        'Returning Students Foundation' =>[
                            '1'=> '27000',
                            '2'=> '32000',
                            '3'=> '37000',
                            '4'=> '42000',
                        ],
                        'Admin Fee'=> '3500'
                    ]
                ]
            ],
            'foreignexamreg'=> [
                'IELTS' => [
                    'payment'=>[
                        'Physical'=> [
                            '1'=> '37500',
                            'Training Mats'=> '15000',
                        ],
                        'Online'=> [
                            '1'=> '40000',
                            'Training Mats'=> '15000',
                        ],
                        'Admin Fee'=> '3500'
                    ]
                ],
                'TOEFL' =>[
                    'payment'=>[
                        'Physical'=> [
                            '1'=> '37500',
                            'Training Mats'=> '15000',
                        ],
                        'Online'=> [
                            '1'=> '40000',
                            'Training Mats'=> '15000',
                        ],
                        'Admin Fee'=> '3500'
                    ]
                ],
                'OET' => [
                    'payment'=>[
                        'Physical'=> [
                            '1'=> '37500',
                            'Training Mats'=> '0',
                        ],
                        'Online'=> [
                            '1'=> '40000',
                            'Training Mats'=> '0',
                        ],
                        'Admin Fee'=> '3500'
                    ]
                ],
                'GMAT' => [
                    'payment'=>[
                        'Physical'=> [
                            '1'=> '42000',
                            'Training Mats'=> '15000',
                        ],
                        'Online'=> [
                            '1'=> '45000',
                            'Training Mats'=> '15000',
                        ],
                        'Admin Fee'=> '3500'
                    ]
                ],
                'GRE' => [
                    'payment'=>[
                        'Physical'=> [
                            '1'=> '42000',
                            'Training Mats'=> '15000',
                        ],
                        'Online'=> [
                            '1'=> '45000',
                            'Training Mats'=> '15000',
                        ],
                        'Admin Fee'=> '3500'
                    ]
                ],
                'SAT' => [
                    'payment'=>[
                        'Physical'=> [
                            '1'=> '42000',
                            'Training Mats'=> '15000',
                        ],
                        'Online'=> [
                            '1'=> '45000',
                            'Training Mats'=> '15000',
                        ],
                        'Admin Fee'=> '3500'
                    ]
                ],
            ],
        ];
        $title = $type;
        $type = $types[$type];
        // dd($type);
        if($title == 'foreignexam'){
            return view('pages.registration', compact('general', 'type', 'title')) ;
        }else{
            return view('pages.foreignexam', compact('general', 'type', 'title')) ;    
        }
    }
    public function payment($invoice_id=null){
        $invoice = [
            'id'=>1,
            'code'=> '32322',
            'amount'=> 45000,
            'created_at'=> null,
            'status'=>'pending',
            'application'=> 2,
            'type'=> 'ican',
            'email'=> 'email@email.com',
            'first_name'=> 'first_name',
            'last_name'=> 'last_name',
            'phone'=> '08140131434',
        ];
        // dd($invoice);
        return view('pages.payment', ["invoice"=>$invoice]);
    }
    public function about(){
        return view('pages.about');
    }
    public function consulting(){
        return view('pages.consulting');
    }
    public function training(){
        return view('pages.training');
    }
    public function trainingService($service){
        dd($service);
    }
}
