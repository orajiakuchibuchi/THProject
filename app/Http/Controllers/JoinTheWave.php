<?php

namespace App\Http\Controllers;

use App\Models\Wave;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class JoinTheWave extends Controller
{
    public function __invoke(Request $request)
    {
        //echo '<pre>';print_r($request->all());exit;
        $validator = Validator::make($request->all(), $this->rules());

        if ($validator->fails()) {
            return response()->json($validator->messages(), 400);
        }

        $wave = new Wave;
        $wave->email = $request->input('email');
        $wave->name = $request->input('name');
        $wave->is_creative = $request->input('is_creative');
        $wave->number_of_followers = $request->input('number_of_followers');
        $wave->video_content = $request->input('video_content');
        $wave->intend_to_sell = collect($request->input('intend_to_sell'))->implode(',');
        $wave->images_and_videos = $request->input('images_and_videos');
        $wave->reaching_method = $request->input('reaching_method');
        $wave->how_to_post_content = $request->input('how_to_post_content');
        $wave->feedback = $request->input('feedback');
        $wave->suggestion_recommendation = $request->input('suggestion_recommendation');
        $wave->save();

        return response()->json(['has_success' => true], 200);
    }

    protected function rules()
    {
        return [
            // 'email' => 'required|email',
            // 'name' => 'required|string',
            // 'phone' => 'nullable|string',
            // 'ig_handle' => 'nullable|string',
            // 'is_creative' => 'required',
        ];
    }
}
