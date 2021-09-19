<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Sendpulse\RestApi\ApiClient;
use Sendpulse\RestApi\Storage\FileStorage;
use App\Models\Event;
use DB;
use Illuminate\Support\Facades\Mail;


class GeneralController extends Controller
{
    public function events(Request $request){
        
       $events = Event::select('id','name as title', DB::raw("DATE_FORMAT(date, '%Y-%m-%d') as start"),'description')->get();
        return view('events.index',compact('events'));
    }
    
    public function eventEmail(Request $request){
    	$validator = Validator::make($request->all(), $this->rules());

        if ($validator->fails()) {
            return response()->json($validator->messages(), 422);
        }

        $data = [
            'email' => $request->input('email'),
            'name' => $request->input('name'),
            'event' => $request->input('event'),
        ];

        if(config('custom.use_sendpulse') == 'yes'){
            $SPApiClient = new ApiClient(env('SENDPULSE_API_USER_ID'), env('SENDPULSE_API_SECRET'), new FileStorage());

            $email = array(
                'html' => view('templates.emails.event_email', compact('data'))->render(),
                'subject' => 'Welcome to Vicomma | Events',
                'from' => array(
                    'name' => 'Vicomma',
                'email' => 'info@vicomma.com',
            ),
            'to' => array(
                array(
                    'name' => $data['name'],
                    'email' => $data['email'],
                ),
            ));

            ini_set("allow_url_fopen", 1);

            $response = $SPApiClient->smtpSendMail($email);

            if(isset($response->result) && isset($response->id)){
                return response()->json(['has_success' => true], 200);
            }
        }else{

        ///////////// Added SES integration ////////////

            $to = $data['email'];
            $check = Mail::send("templates.emails.event_email", $data , function ($message) use ($to ){
                $message->subject('Welcome to Vicomma | Events');
                $message->from('info@vicomma.com','Vicomma');
                $message->to($to);
            });

            if($check){
                return response()->json(['has_success' => true], 200);
            }
        }
        
        return response()->json(['has_success' => false], 400);
    }

    protected function rules()
    {
        return [
            'email' => 'required|email',
            'name' => 'required|string',
            'event' => 'required|string',
        ];
    }
}
