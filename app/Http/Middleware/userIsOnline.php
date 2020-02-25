<?php

namespace App\Http\Middleware;

use Closure;

class userIsOnline
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
        if (sizeof(user_online()) == 0 ) {
            Auth::logout();
            return Redirect::route('login');
        }

        return $next($request);
    }
}
