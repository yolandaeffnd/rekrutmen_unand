<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormasiPendidikan;
use App\Models\{Formasi, Pendidikan};
use Illuminate\Support\Facades\Auth;

class FormasiPendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $f_pendidikan = FormasiPendidikan::all();
        // dd($formasis);
        // $f_pendidkan= Formasi::with('formasis','pendidikans')->get();
        return view('pendidikanformasi.list', compact('f_pendidikan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        $formasis       = Formasi::pluck('jabatan', 'id')->all();
        $pendidikan       = Pendidikan::pluck('name', 'id')->all();
        return view('pendidikanformasi.create', compact('formasis','pendidikan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
      
        $pendidikan =  $request->tags;
        $idformasi =  $request->id_formasi;
        // dd($pendidikan);

        foreach($pendidikan as $key => $pd)
        {
            $data = new FormasiPendidikan();

            $data->id_formasi = $idformasi;
            $data->id_pendidikan = $pd;
            $data->save();

        }
       

        return redirect()->route('formasipendidikan-list')->with('success', 'Post created successfully.');
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
    public function destroy(Request $request, $id)
    {
       
            FormasiPendidikan::find($id)->delete();
        // dd($request->level);

        return redirect()->route('formasipendidikan-list')->with('success', 'Post created successfully.');
    }
}
