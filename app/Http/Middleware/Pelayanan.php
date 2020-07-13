<?php

namespace App\Http\Middleware;

use Closure;

class Pelayanan
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
        if($request->session()->exists('warga')) {
            return $next($request);
        }else{
            if(session('alert')){
                return redirect('/loginservice')->with('alert','NIK Tidak Terdaftar!');
            }else{
                return redirect('/loginservice')->with('alert','Masukkan NIK Terlebih Dahulu');
            }
        }
    }
}