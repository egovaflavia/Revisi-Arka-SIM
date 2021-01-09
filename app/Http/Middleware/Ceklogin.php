<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;

use Closure;

class Ceklogin
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
        if($user != NULL)
        {
            $level = $user->level;
        }else{
            $level = '';
        }
        if ($level == 1){
            return redirect('dashboard');
        }elseif($level == 2){
            return redirect('/home');
        }elseif($level == null){
            return redirect('/home');
        }
    }
}
