<?php

namespace App\Http\Controllers\GudangData;

use App\Http\Controllers\Controller;
use App\Models\{GudangData, Kota};
use Illuminate\Http\Request;

class AjaxCon extends Controller
{
    public function kota(Request $request)
    {
        $kota_get = Kota::where('id_provinsi', $request->idprovinsi)->get();
        // $kota_get = GudangData::where('name', 'data-wilayah-kota')->firstOrFail()->data;
        // $kota = json_decode($kota_get);

        // $return_kota = array();
        // foreach ($kota as $value) {
        //     if ($value->kode->id_provinsi == $request->idprovinsi) {
        //         $return_kota[] = ['id_kota'=>$value->kode->id_kota,'kota'=>$value->kota,];
        //     }
        // }
        // dd($kota_get);
        if (!$kota_get->isEmpty()) {
            foreach ($kota_get as $value) {
                echo '<option value="'.$value->id.'">'.$value->nama.'</option>';
            }
        } else {
            echo "<option selected>- Data Wilayah Tidak Ada, Pilih Provinsi Lain -</option>";
        }

        // return response()->json($return_kota);
    }
}
