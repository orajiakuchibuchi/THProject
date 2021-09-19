<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUs extends Controller
{
    public function __invoke(Request $request, $role)
    {
        switch($role){
            case 'creative':
                $role = 'influencer';
                break;
        }
        
        //echo $role;exit;
        
        if($request->isMethod('get')) {
            return view('about_us.' . $role);
        }else if($request->isMethod('post')){

            $request->validate($this->rules());

            $aboutUs = \App\Models\AboutUs::create([
                'email' => $request->input('email'),
                'name' => $request->input('name'),
                'phone' => $request->input('phone'),
                'role' => $role,
            ]);

            return redirect()
                ->back()
                ->withSuccess('Your information has been successfully saved. Thank you.');
        }
    }

    protected function rules(){
        return [
            'email' => 'required|email',
            'name' => 'required|string',
            'phone' => 'required|string',
        ];
    }
}
