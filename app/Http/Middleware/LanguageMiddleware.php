<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class LanguageMiddleware
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
        
        //get selected lang from the lang cookie
        $lang=$request->cookie('language'); // reading lang cookie from request
        if(!empty($lang)){  // if no langcookie
            App::setLocale($lang); // default locale is set
        }
        
        return $next($request);
    }
}
