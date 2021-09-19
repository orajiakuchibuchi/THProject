<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\SayUncleContestant;
use View;

class ContestantAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $contestant_id = $request->route()->parameter('contestant');
        $contestant_token = $request->route()->parameter('signature');

        $check = SayUncleContestant::where('id',$contestant_id)->where('auth_token',$contestant_token)->get()->first();
        
        if($check == null){
            abort(401);
        }
        View::share('contestant_id', $contestant_id);
        View::share('contestant_token', $contestant_token);
        

        return $next($request);
    }
}
