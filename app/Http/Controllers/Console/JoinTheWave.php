<?php

namespace App\Http\Controllers\Console;

use App\Http\Controllers\Controller;
use App\Models\Wave;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class JoinTheWave extends Controller
{
    public function __invoke(Request $request, $id = null)
    {
        if($id == null){
            return view('console.join_the_wave.index')
                ->withWaves(Wave::get());
        }else{
            return view('console.join_the_wave.show')
                ->withWave(Wave::findOrFail($id));
        }
    }
}
