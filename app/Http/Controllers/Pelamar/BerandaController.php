<?php

namespace App\Http\Controllers\Pelamar;

use App\Http\Controllers\Controller;
use App\Models\{Registrasi};
use App\Models\{User};
use App\Models\{Formasi};
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
      
        $id_formasi = Registrasi::where('id_user', $user->id)->first();

        $idf = $id_formasi->id_formasi;
        //tgl melamar
        $tglmelamar = $id_formasi->waktu_dikirim;
        $tgl_melamar = date("Y-m-d",strtotime($tglmelamar));
        
        $formasipelamar = Formasi::where('id',$idf)->first();
        //formasi penempatan dan posisi
        $formasi = $formasipelamar->jabatan;
        $lokasipenempatan = $formasipelamar->lokasi_penempatan;

        //status peserta
        $status_peserta = $user->status;
        //echo "home Pelamar";
        return view('pelamar.statuspelamar', compact('user','status_peserta','formasi','tglmelamar','tgl_melamar','lokasipenempatan'));
    }
}
