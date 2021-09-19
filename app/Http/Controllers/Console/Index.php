<?php

namespace App\Http\Controllers\Console;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use Hash;

class Index extends Controller
{
    
    public function index(Request $request){
        return view('console.index');
    }
    
    public function editPassword(Request $request){
        return view('console.editPassword');
    }
    
    public function updatePassword(Request $request){
        Validator::make($request->all(), [
            'old_password' => 'required',
            'password' => 'required|string|min:8|confirmed',
            'user_id'=> 'required'
        ])->validate();
        
        $data = $request->all();
        $user = User::where('id', $data['user_id'])->first();
        
    	$oldPassword = $data['old_password'];
        $newPassword = $data['password'];
        
        if (Hash::check($oldPassword, $user->password )) {

            $password = Hash::make($newPassword);
            $user->password =  $password;
            
            if($user->save()) {

                 return redirect()->route('console.index')->with('success', 'Password Updated Successfully.');
            
            } else {
                return back()->with('error', 'Error in Password Updated !');
            }

        } else {
            return back()->with('error', 'Invalid Old Password');
        }
    }
}
