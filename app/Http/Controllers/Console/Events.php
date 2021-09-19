<?php

namespace App\Http\Controllers\Console;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\AboutUs;
use App\Models\Wave;
use App\Models\EbookUser;
use App\Models\Event;
use Sendpulse\RestApi\ApiClient;
use Illuminate\Support\Facades\Mail;


class Events extends Controller
{
    public function index(){
    	$events = Event::paginate(10);
    	return view('console.events.index', compact('events')); 
    }

    public function create(Request $request){
    	return view('console.events.create');
    }

    public function save(Request $request){
    	Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'date' => 'required',
        ])->validate();
    	$data = $request->only('name','description','date');
        $event = new Event();
        $event->name = $request->name ;
        $event->description = $request->description;
        $event->date = $request->date;
        $event->save();
        $this->sendEventNotification($event);
        return redirect()->route('console.events')->with('success', 'Event Created Successfully.');
    }

    public function edit(Request $request,$id){
    	$event = Event::findOrFail($id);
    	return view('console.events.edit', compact('event'));
    }

    public function update(Request $request,$id){
    	Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'date' => 'required',
        ])->validate();
    	$data = $request->only('name','description','date');
        $check = Event::where('id',$id)->update($data);
        return redirect()->route('console.events')->with('success', 'Event Updated Successfully.');
    }

    public function delete(Request $request,$id){
    	$event = Event::findOrFail($id);
    	$event->delete();
        return redirect()->route('console.events')->with('success', 'Event Deleted Successfully.');	
    }
    
    protected function sendEventNotification($event){
    
        $aboutus_users = AboutUs::all()->pluck('email')->toArray();
        $wave_users = Wave::all()->pluck('email')->toArray();
        $ebook_users = EbookUser::all()->pluck('email')->toArray();

        $users = array_unique(array_merge($aboutus_users,$wave_users,$ebook_users));

        if(config('custom.use_sendpulse') == 'yes'){
            $SPApiClient = new ApiClient(env('SENDPULSE_API_USER_ID'), env('SENDPULSE_API_SECRET'), new FileStorage());

            foreach ($users as $email) {
                $data = [
                    'email' => $email,
                    'name' => $event->name,
                    'event' => $event->description,
                    'date' => $event->date->format('F d-Y'),
                ];

            
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
            ///////////// Added SES integration ////////////
            }else{

                $to = $email;
                $check = Mail::send("templates.emails.event_email", $data , function ($message) use ($to ){
                    $message->subject('Welcome to Vicomma | Events');
                    $message->from('info@vicomma.com','Vicomma');
                    $message->to($to);
                });
            }
       
        }
    }
}
