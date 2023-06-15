<?php

namespace App\Http\Controllers;

use App\Models\Jenisformasi;
use Illuminate\Http\Request;

class JenisformasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenisformasis = Jenisformasi::get();

        return view('rekrutmen.jenis_formasi.jenisformasi', compact('jenisformasis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rekrutmen.jenis_formasi.jenisformasi-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $str_json = json_encode($request->tahapan);
        $data = new Jenisformasi();


        $data->nama_jenis = $request->nama_jenis;
        $data->tahapan =  $str_json; 
       
        $data->save();

        return redirect(route('jenisformasi.index'))->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jenisformasi  $jenisformasi
     * @return \Illuminate\Http\Response
     */
    public function show(Jenisformasi $jenisformasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jenisformasi  $jenisformasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Jenisformasi $jenisformasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jenisformasi  $jenisformasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jenisformasi $jenisformasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jenisformasi  $jenisformasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jenisformasi $jenisformasi)
    {
        //
    }
}
