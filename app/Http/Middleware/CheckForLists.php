<?php

namespace App\Http\Middleware;

use App\Cookbook;
use App\WantToMakeList;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function session;

class CheckForLists
{
    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        session()->forget('res');
        if (Auth::User()) {
            $p = WantToMakeList::where('recipe_id', '=', $request->id)->where('user_id', '=', Auth::User()->id)->get();
            foreach ($p as $pp) {
                session()->put('res', $pp->recipe_id);
            }
            
            session()->forget('lists');
            $L = Cookbook::where('user_id', '=', Auth::User()->id)->get();
            foreach ($L as $l) {
                session()->push('lists', $l);
            }
        }
        

        return $next($request);
    }
}
