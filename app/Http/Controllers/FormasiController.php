<?php

namespace App\Http\Controllers;

use App\Models\{Formasi, Unit, PeriodePenerimaan, Prodi, Jenisformasi};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FormasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formasis = Formasi::with('formasi_pendidikans')->get();

        // dd($formasis);
        return view('rekrutmen.formasi.formasi', compact('formasis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $units = Unit::all();
        $periodes = PeriodePenerimaan::all();
        $prodis = Prodi::all();
        $jenisFormasi = Jenisformasi::all();
        return view('rekrutmen.formasi.formasi-create',compact('units','periodes','prodis','jenisFormasi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formasis = new Formasi();
        $formasis->kode_periode_penerimaan = $request->periode;
        $formasis->id_unit = $request->unit;
        $formasis->jabatan = $request->jabatan;
        $formasis->lokasi_penempatan = $request->lokasi_penempatan;
        $formasis->kode_penempatan = $request->kode_penempatan;
        $formasis->jenis_formasi = $request->jenis_formasi;
        $formasis->kebutuhan = $request->kebutuhan;
        $formasis->save();

        $formasis = Formasi::with('formasi_pendidikans')->get();
        return view('rekrutmen.formasi.formasi',compact('formasis'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Formasi  $formasi
     * @return \Illuminate\Http\Response
     */
    public function show(Formasi $formasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Formasi  $formasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Formasi $formasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Formasi  $formasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Formasi $formasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Formasi  $formasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Formasi $formasi)
    {
        //
    }
}
