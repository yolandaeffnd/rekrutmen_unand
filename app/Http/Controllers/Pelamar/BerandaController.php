<?php

namespace App\Http\Controllers\Pelamar;

use App\Http\Controllers\Controller;
use App\Models\{Registrasi};
use App\Models\{User};
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BerandaController extends Controller
{
    public function index()
    {
        // dd(Carbon::now()->format('Y-m-d H:i:s'));
        $user = Auth::user();
        $registrasi_count = Registrasi::where('id_user', $user->id)->where('status', 'dikirim')->count();
        $registrasi = Registrasi::where('id_user', $user->id)->where('status', 'dikirim')->first();
        //echo "home Pelamar";
        return view('pelamar.beranda', compact('user', 'registrasi', 'registrasi_count'));
    }

    public function statuspelamar()
    {
        // dd(Carbon::now()->format('Y-m-d H:i:s'));
        $user = Auth::user();
        $status_pelamar = User::where('id',$user->id)->first();
        //echo "home Pelamar";
        return view('pelamar.statuspelamar', compact('user', 'status_pelamar'));
    }
}
