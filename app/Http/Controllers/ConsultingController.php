<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Consulting;
use App\Training;
use Illuminate\Support\Facades\Auth;

class ConsultingController extends Controller
{
    public function bankTransactionAudit(){
        return view('pages.bankTransactionAudit');
    }
    public function businessProcess(){
        return view('pages.businessProcess');
    }
    public function litigationSupport(){
        return view('pages.litigationSupport');
    }
    public function team(){
        return view('pages.consulting-team');
    }
    public function getApplications($start=1){
        $consultings = Consulting::where('id', '>=', $start)->get();
        $session = Session::where('user_id', Auth::user()->id)->where('status', true)->first();
        return response([
            'status'=>true,
            'user'=>Auth::user(),
            'success' => true,
            'data' => $consultings,
            'token' => $session->token,
            'access_token' => $session->token,
        ], 200);
    }
    public function getApplicationDetails($id){
        $consulting = Consulting::where('id', $id)->first();
        $session = Session::where('user_id', Auth::user()->id)->where('status', true)->first();
        return response([
            'status'=>true,
            'user'=>Auth::user(),
            'success' => true,
            'data' => $consulting,
            'token' => $session->token,
            'access_token' => $session->token,
        ], 200);
    }
}
