<?php

namespace App\Http\Middleware;

use Closure;

class CheckIsAdminMiddleware
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
        $user = auth()->user();
        if(in_array($user->email, ['gilberto128@hotmail.com','joaopaulo123@hotmail.com'])){
            return redirect('/');
        }
        return $next($request);
    }
}
