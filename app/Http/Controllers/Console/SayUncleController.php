<?php

namespace App\Http\Controllers\Console;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SayUncleContestant;
use App\Models\SayUncleContestantVideo;


class SayUncleController extends Controller
{
    function index(){

    	$contestants = SayUncleContestant::latest()->paginate(15);
    	return view('console.sayuncle.index',compact('contestants'));
    }

    function show(Request $request,$id){

    	$contestant = SayUncleContestant::findOrFail($id);
    	$videos = $contestant->videos()->paginate(10);
    	return view('console.sayuncle.details',compact('contestant','videos'));
    
    }
    function updateVideoStatus(Request $request,$id,$videoId){

    	$video = SayUncleContestantVideo::where('sayuncle_contestant_id',$id)->where('id',$videoId)->get()->first();
    	$video->status = 'approved';
        $video->save();
        return back()->with('success','Video Approved!');
    }
}
