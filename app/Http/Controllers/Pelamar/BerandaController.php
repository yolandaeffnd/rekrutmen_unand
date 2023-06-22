<?php

namespace App\Http\Controllers\Pelamar;

use App\Http\Controllers\Controller;
use App\Models\{Registrasi};
use App\Models\{User};
use App\Models\{Formasi, Jenisformasi};
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
        $id_jenis = $formasipelamar->jenis_formasi;

        $tampung = Jenisformasi::where('id',$id_jenis)->first();
        $thp_peserta = json_decode($tampung->tahapan);

        $jumlah = count($thp_peserta)- 2;
        $tahapan_peserta = array();
        for($j=0;$j<$jumlah;$j++){
            $tahapan_peserta[] = $thp_peserta[$j];
        }

        //mendapatkan status peserta
        // $tampung_status = json_decode($user->status);
        //status peserta
        $status_peserta = $user->status;
        $status_his = $user->status_history;
        // dd($status_his);
        $i = 0;
      
            foreach($thp_peserta as $tp)
            {
                if($status_his != null){
                    if($status_his == $tp->subject)
                    {
                        $status_val = $tp->subject;
                    }else{
                        $status_val = null;
                    }
                }else{
                    if($status_peserta == $tp->subject)
                    {
                        $status_val = $tp->subject;
                    }else{
                        $status_val = null;
                    }
                }
                


            
                if($status_peserta == "Gagal" && $status_val!=null)
                {
                    // $jum = $jumlah-1;
                    for($j=0;$j<$i;$j++)
                    {
                            $status_arr[$j] = "Lulus";
                    } 
                    
                    $status_arr[$i] = "Gagal";
                    
                }else if($status_peserta == "Lulus"){
                    $jum = $jumlah-1;
                    for($j=0;$j<$jum;$j++)
                    {
                            $status_arr[$j] = "Lulus";
                    } 
                    
                    $status_arr[$jum] = "Lulus";
                }else{
                    if($i==0 &&  $status_val != null)
                        {
                            for($j=1;$j<$jumlah;$j++)
                            {
                                    $status_arr[$j] = "-";
                            }
                            $status_arr[$i] = "Proses";
                        }else if($i!=0 && !empty($status_val)){
                            for($j=0;$j<$i;$j++)
                            {
                                    $status_arr[$j] = "Lulus";
                            } 

                            $status_arr[$i] = "Proses";
                        }else if(empty($status_val)){
                            $status_arr[$i] = "-";
                        }

                }
                
                $i++;
            
        }
        //   dd($status_val);
        // if($status_val == null)
        // {
        //     $state = 0;
        // }

      
        
        //echo "home Pelamar";

        return view('pelamar.statuspelamar2', compact('user','status_peserta','formasi','tgl_melamar','lokasipenempatan','tahapan_peserta','status_arr'));
    }
}
