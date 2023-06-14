<?php

namespace App\Http\Middleware;

use App\Models\{Registrasi};
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CekStatusRegistrasi
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
        $user = Auth::user();

        $registrasi = Registrasi::where('id_user', $user->id)->first();
//  dd($registrasi);
        if ($registrasi) {
            if ($registrasi->status == 'update') {
                return $next($request);
            }
        }else{
            return $next($request);
        }

        return redirect(route('dashboard-pelamar'))->with('error', 'Data Telah Terkirim');
    }
}
