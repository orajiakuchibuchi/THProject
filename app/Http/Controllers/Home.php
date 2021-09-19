<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Sendpulse\RestApi\ApiClient;
use Sendpulse\RestApi\Storage\FileStorage;
use App\Models\EbookUser;
use Illuminate\Support\Facades\Mail;

class Home extends Controller
{
    public function __invoke(Request $request, $role)
    {
        switch($role){
            case 'creative':
                $role = 'influencer';
                break;
        }

        if ($request->isMethod('get')) {
            return view('home.' . $role);
        } else if ($request->isMethod('post')) {

            //echo '<pre>';print_r($request->all());exit;
            $validator = Validator::make($request->all(), $this->rules());

            if ($validator->fails()) {
                return response()->json($validator->messages(), 400);
            }

            $data = [
                'email' => $request->input('email'),
                'name' => $request->input('name'),
                'phone' => $request->input('phone'),
                'ig_handle' => $request->input('ig_handle'),
                'is_creative' => $request->input('is_creative'),
            ];

            $check = EbookUser::firstOrCreate(['email' => $data['email']],$data);
            if(config('custom.use_sendpulse') == 'yes'){
                $SPApiClient = new ApiClient(env('SENDPULSE_API_USER_ID'), env('SENDPULSE_API_SECRET'), new FileStorage());

                $email = array(
                    'html' => view('templates.emails.send_pulse', compact('data'))->render(),
    //                'text' => 'Hello!',
                    'subject' => 'Welcome to Vicomma | eBook',
                    'from' => array(
                        'name' => 'Vicomma',
                    'email' => 'info@vicomma.com',
                    //'email' => 'info@maxflix.com',
                    ),
                    'to' => array(
                        array(
                            'name' => $data['name'],
                            'email' => $data['email'],
                        ),
                    ),
    //                'bcc' => array(
    //                    array(
    //                        'name' => 'Manager',
    //                        'email' => 'manager@example.com',
    //                    ),
    //                ),
                    'attachments' => array(
                        ($role == 'influencer' ? 'Now is the best time to be an influencer.pdf' : 'How to make 10X profit in your today\'s business.pdf') => asset('public/pdf/' . ($role == 'influencer' ? 'Now is the best time to be an influencer.pdf' : 'How to make 10X profit in your today\'s business.pdf')),
                    ),
                );

                ini_set("allow_url_fopen", 1);

                $response = $SPApiClient->smtpSendMail($email);

                if(isset($response->result) && isset($response->id)){
                    return response()->json(['has_success' => true], 200);
                }
            }else{

                $file_name = $role == 'influencer' ? 'Now is the best time to be an influencer.pdf' : 'How to make 10X profit in your today\'s business.pdf';
                $file_path = public_path().'/pdf/' . ($role == 'influencer' ? 'Now is the best time to be an influencer.pdf' : 'How to make 10X profit in your today\'s business.pdf');
                $to = $request->input('email');
                 ///////////// Added SES integration ////////////
                Mail::send("templates.emails.send_pulse", $data , function ($message) use ($to,$file_name,$file_path ){
                    $message->subject('Welcome to Vicomma | Events');
                    $message->from('info@vicomma.com','Vicomma');
                    $message->attach($file_path, [
                        'as' => $file_name,
                        'mime' => 'application/pdf',
                    ]);
                    $message->to($to);
                });

                if($check){
                    return response()->json(['has_success' => true], 200);
                }
            }

            //echo '<pre>';print_r($response);echo '</pre>';exit;

            return response()->json(['has_success' => false], 400);
        }
    }

    protected function rules()
    {
        return [
            'email' => 'required|email',
            'name' => 'required|string',
            'phone' => 'nullable|string',
            'ig_handle' => 'nullable|string',
            'is_creative' => 'required',
        ];
    }
}
