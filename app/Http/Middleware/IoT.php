<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IoT
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $seccionrol = Session('sessionrol');
            if($seccionrol == 2){
                return $next($request);
            } else if ($seccionrol == 1){
                return redirect()->route('admin');
            } else if($seccionrol == 3){
                return redirect()->route('usuario');
            } else {
                return redirect()->route('login');
            }
    }
}
