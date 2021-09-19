<?php

namespace App\Http\Controllers\SayUncle;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SayUncleContestant;
use App\Models\SayUncleContestantVideo;
use App\Models\SayUncleContestantVoter;
use Illuminate\Database\Eloquent\Builder;
use App\Mail\RegistrationMail;
use Illuminate\Support\Facades\Mail;

use Validator;
use Storage;


class SayUncleController extends Controller
{
    public function index(){
        $user = SayUncleContestant::where('id',150)->first();
        
    //     echo '<pre>';
    //     print_r($user);
    // 	send_sayuncle_registeration_email($user);
    //     exit;



    	return view('sayuncle.index');
    }

    public function instagramFollowers($username){
        $ch = curl_init();

        // set URL and other appropriate options
        curl_setopt($ch, CURLOPT_URL,"https://api.instagram.com/v1/media/" . $_REQUEST['id'] ."/likes?ACCESS_TOKEN=" .$_REQUEST['token']);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, 'out'.$_REQUEST['data']);
        // grab URL and pass it to the browser
        curl_exec($ch);
        // close cURL resource, and free up system resources
        curl_close($ch);
    }
    public function register(Request $request){
        ini_set('memory_limit', '-1');
        ini_set('max_execution_time', '600');
    	
    	$validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:sayuncle_contestants,email',
            'mobile_no' => 'required',
            'age' => 'required',
            'i_am' => 'required',
            'consider_myself' => 'required',
            'gender' => 'required',
            'ig_handle' => 'required',
            'ig_followers' => 'required',
            'nationality' => 'required',
//            'country' => 'required_if:nationality,"non-nigerian"',
//            'state' => 'required_if:nationality,"nigerian"',
//            'hear_of' => 'required',
//            'future_contest' => 'required',
//            'help_available' => 'required',
//            'terms' => 'required',
            'avatar' => 'required',

        ]);
        $validator->validate();

    	$data = [];
    	$data['first_name'] = $request->first_name;
    	$data['last_name'] = $request->last_name;
    	$data['email'] = $request->email;
    	$data['mobile_no'] = $request->mobile_no;
    	$data['age'] = $request->age;
    	$data['i_am'] = $request->i_am;
    	$data['consider_myself'] = $request->consider_myself;
    	$data['gender'] = $request->gender;
    	$data['ig_handle'] = $request->ig_handle;
    	$data['ig_followers'] = $request->ig_followers;
//    	$data['hear_of'] = $request->hear_of;
//    	$data['future_contest'] = $request->future_contest;
//    	$data['help_available'] = $request->help_available;
    	$data['nationality'] = $request->nationality;
//    	$data['country'] = $request->nationality == 'non-nigerian' ? $request->country : 'nigeria';
//    	$data['state'] = $request->nationality == 'nigerian' ? $request->state : null;
        $data['auth_token'] = hash_hmac('sha256', $data['email'].time(), 'contestant_auth_token');
        if (isset($request["avatar"])) {    
            $image = str_replace('data:image/png;base64,', '', $request["avatar"]);
            $filePath = public_path().'/sayUncle/avatar/';
            $filename = 'avatar-'.$request["email"].'.png';
        
            file_put_contents(public_path().'/sayUncle/avatar/'.$filename, base64_decode($image));

            $data['image_path'] =  $filePath.$filename;
            $data['image_name'] = $filename;
        }
        $user = SayUncleContestant::create($data);    	
        $user->contestant_id = 'SUR'.substr($user->id.time(), 0, 7);
        $user->save();


       $this->send_sayuncle_registeration_email($user);
        $url = route('sayuncle.index');
       $url = route('sayuncle.index').'#register';
        return redirect($url)->with('success','Thank you for registering for the upcoming Say Uncle contest; now, check your email for further details…');  
        // $message = 'Thank you for registering for the upcoming Say Uncle contest; now, check your email for further details…';
        // return redirect()->back()->with('alert', $message);
    }
    private function send_sayuncle_registeration_email($user){
        try {
            Mail::to($user->email)->send(new RegistrationMail());
            return true;
        }catch(\Throwable $th){
            return $th->getMessage();
        }
    }
    public function contestantDetail(Request $request,$contestant){
        $videos = SayUncleContestantVideo::where('sayuncle_contestant_id', $contestant)->get();
        $contestant = SayUncleContestant::find($contestant);
        return view('sayuncle.contestant_details',compact('videos','contestant'));
    }

    public function paymentform(Request $request,$contestant,$signature) {
        $video = SayUncleContestantVideo::where('sayuncle_contestant_id', $contestant)->where('is_completed',0)->where('payment_status',1)
                                            ->whereHas('payment', function (Builder $query) {
                                                $query->where('is_verified',1);
                                            })->get()->first();
        if($video == null){
            $data = SayUncleContestant::find($contestant);
            session()->forget('payment_form_contestant_email');
            session(['payment_form_contestant_email' => $data->email]);
            return view('sayuncle.payment-form',['data' => $data]);   
        }else{
            return redirect()->route('sayuncle.video.upload.form',['contestant'=> $contestant,'signature'=>$signature,'video_id'=>$video->id]);
        }
    }

    public function uploadVideoForm(Request $request,$video_id,$contestant,$signature) {
        $contestant = SayUncleContestant::find($contestant);
        $video = SayUncleContestantVideo::where('id',$video_id)->where('sayuncle_contestant_id', $contestant->id)
                                        ->where('is_completed',0)->where('payment_status',1)
                                        ->get()->first();
                                
        if($video == null){
            abort(404);
        }else if($video->payment->is_verified == 0){
            return redirect()->route('sayuncle.contestant.details',['contestant'=> $contestant,'signature'=>$signature])->with('error','Not allowed unless payment is verified');
        }
        return view('sayuncle.upload_video',compact('contestant','video'));
    }

    public function uploadVideo(Request $request,$contestant) {
        Validator::make($request->all(), [
            'name' => 'required|string|max:90',
            'description' => 'required|string|max:190',
            'contestant_id' => 'required',
            'file' => 'required|file',
            'video_id' => 'required',
        ])->validate();
        ini_set('memory_limit', '-1');
        ini_set('max_execution_time', 0);
        
        try{
            
            if ($request->hasFile('file')) {
            
                $filePath = $request->file->store('public/sayuncle/contest/');
                $content = SayUncleContestantVideo::where('id',$request->video_id)->where('sayuncle_contestant_id', $contestant)
                                                    ->where('is_completed',0)->where('payment_status',1)
                                                    ->whereHas('payment', function (Builder $query) {
                                                        $query->where('is_verified',1);
                                                    })->get()->first();
                if($content != null){
                    $content->name  = $request['name'];
                    $content->description = $request['description']; 
                    $filename = 'content-'.time().'-'.$content->sayuncle_contestant_id  .'.' . $request->file->getClientOriginalExtension();
                    $content->file_path =  $filePath;
                    $content->file_name = $filename ;
                    $content->status = 'uploaded';
                    $content->is_completed = 1;
                    $content->save();    
                    $check = true;          
                    $contestant = SayUncleContestant::find($contestant);
                    send_sayuncle_video_upload_email($contestant);
            
                }else{
                    $check = false;
                }
            }else{
                $check = false;   
            }

        } catch(Exception $ex){

             logException("messages.vimeo.errors.upload", $ex);
            $check = false;
        }
        catch(Throwable $e){
            logException("",$e);
            $check = false;
        }

        if($check){
            return response()->json([
                'msg' => 'You have successfully uploaded your contestant video. Check your email now to see how you can score more points to boost your chance',
                'status' => 200 
            ]);    
        }else{
            return response()->json([
                'msg' => 'Error in Uploading File To Server',
                'status' => 500 
            ]);
        }
    }

    public function  publicProfile(Request $request,$contestant){
        $contestant = SayUncleContestant::where('contestant_id',$contestant)->get()->first();
        //dd(['voter_number' => 'SUR' . $contestant->id ."-". substr(time(), 0, 4) ]);
        
        return view('sayuncle.public_profile',compact('contestant'));
    }

    public function validateField(Request $request){
        $rules= [];
        if($request->has('phone_no')){
            $rules = [ 'phone_no' => 'required|phone:NG'];
        }
        
        if($request->has('email')){
            $rules = [ 'email' => 'required|email|unique:sayuncle_contestants,email'];
        }
        
        $validator = Validator::make($request->all(), $rules); 

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }else{
            return response()->json('valid phone no', 200);
        }

    }
    public function getContestantLink(Request $request){
        Validator::make($request->all(), [
            'email' => 'required|email|exists:sayuncle_contestants,email',
        ])->validate(); 

        $contestant = SayUncleContestant::where('email',$request->email)->get()->first();
        $contestant->auth_token =  hash_hmac('sha256', $request->email . time(), 'contestant_auth_token');
        $contestant->save();
        send_sayuncle_contestant_email($contestant);
        
        $url = route('sayuncle.index').'#register';
        return redirect($url)->with('success','Link sent successfully please check your email for further details…');

    }
     public function voteContestantEmail(Request $request,$id){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'phone_no' => 'nullable|phone:AUTO,NG'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }else{
            $record = SayUncleContestantVoter::where('sayuncle_contestant_id',$id)->where('email',$request->email)->get()->first();
            

            if($record == null){
               $record = SayUncleContestantVoter::create(['sayuncle_contestant_id' => $id ,'email' => $request->email,'phone_no' => $request->phone_no]);
            }else{
                if($record->verified == 1){
                    return response()->json(['email'=> 'This email is already voted for this contestant'], 422);
                }
            }
            $contestant = SayUncleContestant::find($id);
            send_sayuncle_contestant_voting_email($contestant, $record);
            return response()->json([
                'msg' => 'Email sent to your email-address with the verification link. Follow insutruction given in email',
                'status' => 200 
            ]);   

        }
    }
    public function voteContestant(Request $request,$voter_number){

        if (! $request->hasValidSignature()) {
            abort(401);
        }else{
            $msg = '';
            $id  = explode('-', $voter_number)[0];
            $id = str_replace("SUR", "", $id);
            $record = SayUncleContestantVoter::findOrFail($id);
            $contestant = SayUncleContestant::find($record['sayuncle_contestant_id']);
            if($record->verified == 1){
                $msg = 'You already have voted for this contestant.';
                $msg_type = 'info';
                
            }else{
                $record->verified = 1;
                $record->save();    
                $msg = 'You successfully voted for this contestant.';
                $msg_type = 'success';
            }
        }
        return redirect()->route('sayuncle.contestant.profile', ['contestant' =>$contestant['contestant_id']  ])->with($msg_type,$msg);
    }


    public function new_register(Request $request){
        ini_set('memory_limit', '-1');
        ini_set('max_execution_time', '600');
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:sayuncle_contestants,email',
            'mobile_no' => 'required',
            'age' => 'required',
            'i_am' => 'required',
            'consider_myself' => 'required',
            'gender' => 'required',
            'ig_handle' => 'required',
            'ig_followers' => 'required',
            'nationality' => 'required',
            'avatar' => 'required|mimes:jpeg,png|max:1024',
        ]);
        $validator->validate();
        $data = [];
        $data['first_name'] = $request->first_name;
        $data['last_name'] = $request->last_name;
        $data['email'] = $request->email;
        $data['mobile_no'] = $request->mobile_no;
        $data['age'] = $request->age;
        $data['i_am'] = $request->i_am;
        $data['consider_myself'] = $request->consider_myself;
        $data['gender'] = $request->gender;
        $data['ig_handle'] = $request->ig_handle;
        $data['ig_followers'] = $request->ig_followers;
        $data['nationality'] = $request->nationality;
        $data['auth_token'] = hash_hmac('sha256', $data['email'].time(), 'contestant_auth_token');
        if (isset($request["avatar"])) {
            $filename = 'avatar-'.$request["email"].'.png';
            $filePath = $request->file('avatar')->storeAs('/sayUncle/avatar', $filename, ['disk' => 'public']);
            $data['image_path'] =  $filePath.$filename;
            $data['image_name'] = $filename;
        }
        $user = SayUncleContestant::create($data);
        $user->contestant_id = 'SUR'.substr($user->id.time(), 0, 7);
        $user->save();
        $message = 'Thank you for registering for the upcoming Say Uncle contest; now, check your email for further details…';
        return response()->json(['success'=> true, 'message' => $message, 'data' => $user]);
    }

}
