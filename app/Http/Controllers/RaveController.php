<?php
namespace App\Http\Controllers;

use App\Classes\Flutterwave;
use App\Http\Helpers\Helper;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\SayUncleContestant;
use App\Models\SayUncleContestPayment;
use App\Models\SayUncleContestantVideo;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Log;
use App\Mail\RegistrationMail;
use Illuminate\Support\Facades\Mail;

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
      $reference = Helper::generateReference();
      // Enter the details of the payment
      $data = [
          'payment_options' => 'card',
          'amount' => 500,
          'email' => $user_details['email'],
          'tx_ref' => $reference,
          'currency' => "NGN",
          'redirect_url' => route('callback'),
          'customer' => [
              'email' => $user_details['email'],
              "phone_number" => $user_details['phone'],
              "name" => $user_details['first_name'].' '.$user_details['last_name']
          ],
          "customizations" => [
              "title" => 'JustSayUncle',
              "description" => "User registration"
          ]
      ];
      $this->createTransaction($data, $user_details['user_id']);
      $payment = Flutterwave::initiatePayment($data);
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
      $transaction = SayUncleContestPayment::where('tx_ref', $data['tx_ref'])->first();
      if (!$transaction) {
          return redirect()->back()->with('alert', 'Transaction not found');
      }
//      if (($data['chargeResponseCode'] == "00" || $data['chargeResponseCode'] == "0") && ($data['currency'] == 'NGN')) {
//          $payment_data = [];
//          if(isset($data['customer']) && isset($data['customer']['email']) ){
//          $contestant_email = $data['customer']['email'];
//          }else{
//          $contestant_email = session('payment_form_contestant_email');
//      }
//      session()->forget('payment_form_contestant_email');
//      $contestant = SayUncleContestant::where('email', $contestant_email)->get()->first();
//
//      if($contestant){
//        $video = SayUncleContestantVideo::create(['sayuncle_contestant_id' => $contestant->id,'is_completed'=>0,'payment_status'=>0]);
//
//        $payment_data['sayuncle_contestant_id'] = $contestant->id ?? null;
//        $payment_data['sayuncle_contestant_video_id'] = $video->id ?? null;
//      }else{
//        $payment_data['sayuncle_contestant_id'] =  null;
//        $payment_data['sayuncle_contestant_video_id'] =  null;
//      }
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

      if(isset($video)){
        $video->payment_status = 1;
        $video->is_completed = 0;
        $video->save();
      }
//      if($payment->is_verified == 1){
//          return redirect()->route('sayuncle.video.upload.form',['contestant'=> $contestant->id,'signature'=>$contestant->auth_token,'video_id'=>$video->id]);
//      }else{
//        return redirect()->route('sayuncle.contestant.details',['contestant'=> $contestant->id,'signature'=>$contestant->auth_token])->with('error','Not allowed unless payment is verified');
//
//      }
      try {
          Mail::to($data['customer']['email'])->send(new RegistrationMail());
      }catch(\Throwable $th){

      }
      return redirect('/landing2')->with('transaction', $transaction);
  } 
}
