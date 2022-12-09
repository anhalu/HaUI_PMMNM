<?php

namespace App\Http\Middleware;
use Auth;

use Closure;

class adminMiddleware
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
        if(Auth::check())
            {
                if(Auth::user()->level==1)
                    return $next($request);
                
                else
                    return redirect('/dang-nhap');
            }
            else
                return redirect('/dang-nhap');
    }
}
