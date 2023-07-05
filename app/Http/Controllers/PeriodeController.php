<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PeriodePenerimaan;
use Illuminate\Support\Facades\Auth;
use DB;

class PeriodeController extends Controller
{
    public function index()
    {
        $periodes = PeriodePenerimaan::get();
        return view('rekrutmen.periode.periode', compact('periodes'));
    }

    public function destroy(Request $request, $id)
    {
        $user = Auth::user();

        if ($user->isDeveloper()) {
            PeriodePenerimaan::find($id)->delete();
        } else {
            User::whereNotIn('level', ['developer'])->where('id', $id)->firstOrFail()->delete();
        }

        // dd($request->level);

        return redirect(route('periode-penerimaan.index'))->with('info', 'Data Sudah Berhasil Dihapus');
    }

    public function store(Request $request){
        if ($request->kode) {
            PeriodePenerimaan::where('kode', $request->kode)->update([
                'name' => $request->name
            ]);

            return redirect(route('periode-penerimaan.index'))->with('success', 'Edit Data Periode Berhasil');
        }else{
            $q = PeriodePenerimaan::select(DB::raw('MAX(RIGHT(kode,2)) as kode'))->where('kode', 'LIKE', '%'.$request->tahun.'%')->first();
            $kd = "";
            if ($q->count() > 0) {
                $tmp = $q->kode + 1;
                $kd = sprintf("%02s", $tmp);
            } else {
                $kd = "01";
            }
            $kode = $request->tahun.$kd;
            
            $periode = new PeriodePenerimaan();
            $periode->kode = $kode;
            $periode->name = $request->name;
            $periode->save();

            return redirect(route('periode-penerimaan.index'))->with('success', 'Tambah Data Periode Berhasil');
        }
    }
}
