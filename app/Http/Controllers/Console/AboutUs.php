<?php

namespace App\Http\Controllers\Console;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutUs extends Controller
{
    public function __invoke(Request $request, $role)
    {
        if($request->isMethod('get')) {

            $aboutUs = \App\Models\AboutUs::orderByDesc('created_at');

            $view = view('console.about_us.index');

            if($role != 'all'){
                $aboutUs = $aboutUs->whereRole($role);
            }

            return $view->withAboutUs($aboutUs->get())->withRole($role);
        }else if($request->isMethod('post')){

//            $request->validate($this->rules());
//
//            $aboutUs = \App\Models\AboutUs::create([
//                'emails' => $request->input('emails'),
//                'name' => $request->input('name'),
//                'phone' => $request->input('phone'),
//                'role' => $role,
//            ]);
//
//            return redirect()
//                ->back()
//                ->withSuccess('Your information has been successfully saved. Thank you.');
        }
    }

    protected function rules(){
        return [
            'emails' => 'required|emails',
            'name' => 'required|string',
            'phone' => 'required|string',
        ];
    }
}
