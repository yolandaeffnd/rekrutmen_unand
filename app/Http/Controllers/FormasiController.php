<?php

namespace App\Http\Controllers;

use App\Models\Formasi;
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
