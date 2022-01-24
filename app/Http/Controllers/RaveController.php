<?php
namespace App\Http\Controllers;

use App\Classes\Flutterwave;
use App\Http\Helpers\Helper;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\SayUncleContestant;
use App\Models\SayUncleContestPayment;
use App\Reistration;
use App\Models\SayUncleContestantVideo;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Log;
use App\Mail\RegistrationMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Carbon;
use Session;
use Redirect;

//use the Rave Facade

class RaveController extends Controller
{

    public function createTransaction ($data, $id) {
        $payment_data = [];
        $payment_data['sayuncle_contestant_id'] =  $id;
        $payment_data['sayuncle_contestant_video_id'] =  0;
        $payment_data['amount'] = $data['amount'];
        $payment_data['currency'] = $data['currency'];
        $payment_data['tx_ref'] = $data['tx_ref'];
        return SayUncleContestPayment::create($payment_data);
    }

  /**
   * Initialize Rave payment process
   * @return Application|RedirectResponse|Redirector|void
   */
  public function initialize ()
  {
      $user_details = \request()->all();
      $message = "";
      // dd($user_details);
      foreach ($user_details as $key => $value) {
        if($key !== 'othername' && is_null($value)){
          $message .= $key . " is required.\n";
        }
        if($key == 'ihaveread' && ($value == 'no' || $value == 'No')){
          $message .= "You must read and agree to our terms and contitions.\n";
        }
      }
      if(strlen($message) > 0){
        // return redirect()->back()->with('errors',  $errors);
        Session::flash('message', $message);
        return Redirect::back();
        // return Redirect::back()->withErrors(['errors' => $errors]);;
      }
      // dd($user_details);
      $reference = Helper::generateReference();
      $newRegistration = new Reistration();
      $newRegistration->trans_id = $reference;
      $newRegistration->reg_date = Carbon::now()->format('Y-m-d');
      // $newRegistration->passport = \request();
      $newRegistration->diet = \request()->diet;
      $newRegistration->firstname = \request()->firstname;
      $newRegistration->lastname = \request()->lastname;
      $newRegistration->othername = isset(\request()->lastname) ? \request()->lastname : '';
      $newRegistration->gender = \request()->gender;
      $newRegistration->sponsor = \request()->sponsor;
      $newRegistration->homeaddress = \request()->homeaddress;
      $newRegistration->employer = \request()->employer;
      $newRegistration->phonenumber = \request()->phonenumber;
      $newRegistration->email = \request()->email;
      $newRegistration->qualifications = \request()->qualifications;
      $newRegistration->trainingmethod = \request()->trainingmethod;
      $newRegistration->trainingtype = \request()->trainingtype;
      $newRegistration->maritalstatus = \request()->maritalstatus;
      $newRegistration->howdidyouknow = \request()->howdidyouknow;
      $newRegistration->studentStatus = $reference;
      $newRegistration->total = \request()->total;
      $newRegistration->ihaveread = \request()->ihaveread;
      $newRegistration->types = \request()->types;
      $newRegistration->exam_select = \request()->exam_select;
      $newRegistration->exam_select2 = \request()->exam_select2;
      $newRegistration->exam_select3 = \request()->exam_select3;
      // $newRegistration->foreignType = $reference;
      // $newRegistration->register = \request()->register;
      // $newRegistration->total = \request()->total;
      // $newRegistration->foreignTypePayment = $reference;
      // $newRegistration->foreignTotal = $reference;
      $image = \request()->file('passport');
      if(\request()->hasFile('passport')){
           //get filename with extension
          $filenamewithextension = $image->getClientOriginalName();

          //get filename without extension
          $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

          //get file extension
          $extension = $image->getClientOriginalExtension();

          //filename to store
          $filenametostore = $filename.'_'.uniqid().'.'.$extension;

          $path = $image->move(public_path().'/images/passport/', $filenametostore);
          $newRegistration->passport = $filenametostore;
      }else{
        return view('.new_video_upload')->with('uniqueId', $uniqueId);
      }
      $newRegistration->save();
      // Enter the details of the payment
      $data = [
          'payment_options' => 'card',
          'amount' => \request()['total'],
          'email' => \request()['email'],
          'tx_ref' => $reference,
          'currency' => "NGN",
          'redirect_url' => route('callback'),
          'customer' => [
              'email' => \request()['email'],
              "phone_number" => \request()['phonenumber'],
              "name" => \request()['firstname'].' '.\request()['lastname']
          ],
          "customizations" => [
              "title" => 'Treasure Hall',
              "description" => "User registration"
          ]
      ];
      $this->createTransaction($data, 1);
      $payment = Flutterwave::initiatePayment($data);
      // dd($payment);
      if (!$payment['success']) {
          return redirect()->back()->with('alert', 'Payment failed!');
      }
    return redirect($payment['data']->link);
  }

    /**
     * Obtain Rave callback information
     * @param Request $request
     * @return RedirectResponse
     */

  public function callback (Request $request) {
      $resp = $request->all();
      $data = verify_flutterwave_payment($resp['transaction_id']);
      $transaction = Reistration::where('trans_id', $data['tx_ref'])->first();
      if (!$transaction) {
          return redirect()->back()->with('alert', 'Transaction not found');
      }
     if (($data['chargeResponseCode'] == "00" || $data['chargeResponseCode'] == "0") && ($data['currency'] == 'NGN')) {
         $payment_data = [];
         if(isset($data['customer']) && isset($data['customer']['email']) ){
            $contestant_email = $data['customer']['email'];
         }else{
            $contestant_email = session('payment_form_contestant_email');
     }
     session()->forget('payment_form_contestant_email');
     $contestant = Reistration::where('email', $contestant_email)->get()->first();
      $transaction->account_id = $data['id'];
      $transaction->amount = $data['amount'];
      $transaction->currency = $data['currency'];
      $transaction->status = $data['status'];
      $transaction->tx_ref = $data['tx_ref'];
      $transaction->flw_ref = $data['flw_ref'];
      $transaction->device_fingerprint = $data['device_fingerprint'];
      $transaction->customer_id = $data['customer']['id'];
      $transaction->ip = $data['ip'];
      $transaction->save();
    }
      try {
          Mail::to($data['customer']['email'])->send(new RegistrationMail($data['tx_ref']));
      }catch(\Throwable $th){

      }
      return redirect('/confirmation')->with('transaction', $transaction);
  } 
  public function newVideoUpload($uniqueId) {
    $id = SayUncleContestPayment::where('tx_ref', $uniqueId)->first();
    if(!$id){
        return redirect('/');
    }
    $video = SayUncleContestantVideo::where('name', 'like', '%' . $uniqueId . '%')->first();
    if($video){
        return view('sayuncle.new_video_upload')->with(['uploaded'=> 'You have uploaded a video', 'uniqueId'=> $uniqueId]);
        // return view('sayuncle.new_video_upload')->with('uploaded', 
        //                                                 'You have uploaded a video.');
    }
    return view('sayuncle.new_video_upload')->with('uniqueId', $uniqueId);
  }
  public function uploadVideo(Request $request, $uniqueId){
    $data=request()->all();
    $rules=[
      'video'          =>'mimes:mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:100040|required'];
   $validator = Validator($data,$rules);

   if ($validator->fails()){
       dd($validator);
       return redirect()
                   ->back()
                   ->withErrors($validator)
                   ->withInput();
   }else{
              $video=$data['video'];
              $input = $uniqueId.".".$video->getClientOriginalExtension();
              $destinationPath = 'sayUncle/uploads';
              $video->move($destinationPath, $input);
              $payment = SayUncleContestPayment::where('tx_ref', $uniqueId)->first();
              $contestantVideo = new SayUncleContestantVideo();
              $contestantVideo->sayuncle_contestant_id = $payment->sayuncle_contestant_id;
              $contestantVideo->name = $input;
              $contestantVideo->file_path = $destinationPath.$input;
              $contestantVideo->file_name = $input;
              $contestantVideo->save();
            //   dd('Uploaded');
                //   $user['video']       =$input;
                //   $user['created_at']  =date('Y-m-d h:i:s');
                //   $user['updated_at']  =date('Y-m-d h:i:s');
                //   $user['user_id']     =session('user_id');
                //   DB::table('user_videos')->insert($user);
                $upload_success = 'Your video has been successfully uploaded.';
                return view('sayuncle.new_video_upload')->with(['upload_success'=> $upload_success, 'uniqueId'=> $uniqueId]);
                // return redirect()->back()->with('upload_success','upload_success');
    }
  }
  
}
