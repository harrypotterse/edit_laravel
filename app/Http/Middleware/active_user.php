<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class active_user
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
        $user = Auth::user();
        if (Auth::check()) {
            if ( $user->Activation == 0) {
                return redirect()->route('Activation');
                // return redirect('admin/paperwork');
            }else{
                return redirect()->next();  
            }
           
        }
        return $next($request);
    }
}

