<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class MustBeAdmin
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
        $user = $request->user();
        //if($user && $user->staus =='admin'){
        if(Auth::user()->status == 'admin'){
            return $next($request);
        }else{
            abort(403,"ไม่มีสิทธิ์เข้าใช้หน้านี้");
        }
       
    }
}
