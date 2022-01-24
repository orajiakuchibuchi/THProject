<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Consulting;
use App\Training;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TrainingController extends Controller
{
    public function team(){
        return view('pages.training-team');

    }
    public function miscallaneous(){
        return view('pages.miscallaneous');
    }
    public function citn(){
        return view('pages.citn');
    }
    public function atswa(){
        return view('pages.atswa');
    }
    public function ican(){
        return view('pages.ican');
    }
    public function acca(){
        return view('pages.acca');
    }
    public function ielts(){
        return view('pages.ielts');
    }
    public function toefl(){
        return view('pages.toefl');
    }
    public function gmat(){
        return view('pages.gmat');
    }
    public function gre(){
        return view('pages.gre');
    }
    public function sat(){
        return view('pages.sat');
    }
    public function pte(){
        return view('pages.pte');
    }
    public function infoBoard(){
        return view('pages.infoBoard');
    }
    public function formSubmission(Request $request, $form_type){
        $validator  = $this->validateForm($request, $form_type);
        if($validator){
            // Create 
        }
        return $form_type;
    }
    private function validateForm(Request $request, $type){
        $types = [
            'accareg'=> [
                'studylocation'=>'required',
                'trainingmethod'=>'required',
                'firstname'=>'required',
                'lastname'=>'required',
                'regnumber'=>'required',
                'nyscgmcode'=>'required',
                'options'=>'required',
                'date'=>'required',
                'gender'=>'required',
                'status'=>'required',
                'phonenumber'=>'required',
                'phonenumber2'=>'required',
                'sponsor'=>'required',
                'recommendation'=>'required',
                'referral'=>'required',
                'employer'=>'required',
                'homeaddress'=>'required',
                'email'=>'required',
                'qualifications'=>'required',
                'appliedknowledge'=>'required',
                'appliedskills'=>'required',
                'strategicprof'=>'required',
                'appliedknowledgecount'=>'required',
                'appliedskillscount'=>'required',
                'strategicprofcount'=>'required',
                'totalcount'=>'required',
                'appliedknowledgeamount'=>'required',
                'appliedskillsamount'=>'required',
                'strategicprofamount'=>'required',
                'totalamount'=>'required',
                'howdidyouknow'=>'required',
                '_token'=>'required',
            ],
            'atswareg'=> [                
                'studylocation'=>'required',
                'trainingmethod'=>'required',
                'firstname'=>'required',
                'lastname'=>'required',
                'regnumber'=>'required',
                'nyscgmcode'=>'required',
                'options'=>'required',
                'date'=>'required',
                'gender'=>'required',
                'status'=>'required',
                'phonenumber'=>'required',
                'phonenumber2'=>'required',
                'sponsor'=>'required',
                'recommendation'=>'required',
                'referral'=>'required',
                'employer'=>'required',
                'homeaddress'=>'required',
                'email'=>'required',
                'qualifications'=>'required',
                'atswaicount'=>'required',
                'atswaiicount'=>'required',
                'atswaiiicount'=>'required',
                'atswaiamount'=>'required',
                'atswaiiamount'=>'required',
                'atswaiiiamount'=>'required',
                'totalamount'=>'required',
                'howdidyouknow'=>'required',
                '_token'=>'required',
            ],
            'citnreg'=> [
                'studylocation'=>'required',
                'trainingmethod'=>'required',
                'firstname'=>'required',
                'lastname'=>'required',
                'regnumber'=>'required',
                'nyscgmcode'=>'required',
                'options'=>'required',
                'date'=>'required',
                'gender'=>'required',
                'status'=>'required',
                'phonenumber'=>'required',
                'phonenumber2'=>'required',
                'sponsor'=>'required',
                'recommendation'=>'required',
                'referral'=>'required',
                'employer'=>'required',
                'homeaddress'=>'required',
                'email'=>'required',
                'qualifications'=>'required',
                'foundation'=>'required',
                'proftaxi'=>'required',
                'proftaxii'=>'required',
                'foundationcount'=>'required',
                'foundationamount'=>'required',
                'proftaxicount'=>'required',
                'proftaxiamount'=>'required',
                'proftaxiicount'=>'required',
                'proftaxiiamount'=>'required',
                'totalcount'=>'required',
                'totalamount'=>'required',
                'howdidyouknow'=>'required',
                '_token'=>'required',
            ],
            'foreignexamreg'=> [
                'studylocation'=>'required',
                'trainingmethod'=>'required',
                'firstname'=>'required',
                'lastname'=>'required',
                'regnumber'=>'required',
                'nyscgmcode'=>'required',
                'options'=>'required',
                'date'=>'required',
                'gender'=>'required',
                'status'=>'required',
                'phonenumber'=>'required',
                'phonenumber2'=>'required',
                'sponsor'=>'required',
                'recommendation'=>'required',
                'referral'=>'required',
                'employer'=>'required',
                'homeaddress'=>'required',
                'email'=>'required',
                'qualifications'=>'required',
                'weekdays'=>'required',
                'weekends'=>'required',
                'weekdayscount'=>'required',
                'weekendscount'=>'required',
                'weekdaysamount'=>'required',
                'weekendsamount'=>'required',
                'totalcount'=>'required',
                'totalamount'=>'required',
                'howdidyouknow'=>'required',
                '_token'=>'required',
            ],
            'icanreg'=> [
                'studylocation'=>'required',
                'trainingmethod'=>'required',
                'firstname'=>'required',
                'lastname'=>'required',
                'regnumber'=>'required',
                'nyscgmcode'=>'required',
                'options'=>'required',
                'date'=>'required',
                'gender'=>'required',
                'status'=>'required',
                'phonenumber'=>'required',
                'phonenumber2'=>'required',
                'sponsor'=>'required',
                'recommendation'=>'required',
                'referral'=>'required',
                'employer'=>'required',
                'homeaddress'=>'required',
                'email'=>'required',
                'qualifications'=>'required',
                'foundation'=>'required',
                'skills'=>'required',
                'skillscount'=>'required',
                'professional'=>'required',
                'professionalcount'=>'required',
                'foundationcount'=>'required',
                'foundationamount'=>'required',
                'skillsamount'=>'required',
                'professionalamount'=>'required',
                'totalcount'=>'required',
                'totalamount'=>'required',
                'howdidyouknow'=>'required',
                '_token'=>'required',
            ],
            'miscellaneousreg'=> [
                'studylocation'=>'required',
                'trainingmethod'=>'required',
                'firstname'=>'required',
                'lastname'=>'required',
                'regnumber'=>'required',
                'nyscgmcode'=>'required',
                'options'=>'required',
                'date'=>'required',
                'gender'=>'required',
                'status'=>'required',
                'phonenumber'=>'required',
                'phonenumber2'=>'required',
                'sponsor'=>'required',
                'recommendation'=>'required',
                'referral'=>'required',
                'employer'=>'required',
                'homeaddress'=>'required',
                'email'=>'required',
                'qualifications'=>'required',
                'totalcount'=>'required',
                'totalamount'=>'required',
                'howdidyouknow'=>'required',
                '_token'=>'required',
            ],
        ];
        $status=true;
        $found = false;
        foreach ($types as $key => $value) {
            if($key == $type){
                $found = true;
                $data = $request->all();
                $validator = Validator::make($data, $data);
                if($validator->fails()){
                    return false; 
                }
            }
        }
        return $found && $status;
    }
    public function getApplications($start=1){
        $trainings = Training::where('id', '>=', $start)->get();
        $session = Session::where('user_id', Auth::user()->id)->where('status', true)->first();
        return response([
            'status'=>true,
            'user'=>Auth::user(),
            'success' => true,
            'data' => $trainings,
            'token' => $session->token,
            'access_token' => $session->token,
        ], 200);
    }
    public function getApplicationDetails($id){
        $training = Training::where('id', $id)->first();
        $session = Session::where('user_id', Auth::user()->id)->where('status', true)->first();
        return response([
            'status'=>true,
            'user'=>Auth::user(),
            'success' => true,
            'data' => $training,
            'token' => $session->token,
            'access_token' => $session->token,
        ], 200);
    }
    public function confirmation(){
        return view('pages.confirmation');
    }
}
