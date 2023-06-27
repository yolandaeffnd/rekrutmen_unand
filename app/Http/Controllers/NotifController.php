<?php

namespace App\Http\Controllers;

use App\Models\{Notif, Formasi, Jenisformasi};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth, Validator};

class NotifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $notifs = Notif::paginate(2);

        return view('notifikasi.notifikasi-index', compact('user','notifs'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $formasis = Formasi::all();

        return view('notifikasi.notifikasi-create', compact('user', 'formasis'));
    }


  

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required|string|max:300',
            'isi' => 'required|string',
            'id_formasi' => 'required|numeric|max:50',

        ]);

        $attributeNames = array(
            'judul'           => 'JUDUL',
            'isi'          => 'ISI',
            'id_formasi'          => 'KATEGORI',
        );

        $validator->setAttributeNames($attributeNames);

        
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator)->with('error', 'Data belum terisi dengan benar');
        }

        $user = Auth::user();
        $data = new Notif();


        $data->id_user = $user->id;
        $data->id_formasi = $request->id_formasi;
        $data->tahapan = $request->tahapan;
        $data->judul = $request->judul;
        $data->name = slugify($request->judul);
        $data->judul = $request->judul;
        $data->isi = $request->isi;
        $data->publish = $request->publish;
        $data->save();

        return redirect(route('notifikasi.notifikasi-index'))->with('success', 'Data Berhasil Disimpan');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Notif  $notif
     * @return \Illuminate\Http\Response
     */
    public function show(Notif $notif)
    {
        $user = Auth::user();

        $data = Notif::findOrFail($id);


        return view('notifikasi.notifikasi-index', compact('user', 'data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Notif  $notif
     * @return \Illuminate\Http\Response
     */
    public function edit(Notif $notif)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Notif  $notif
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notif $notif)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Notif  $notif
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notif $notif)
    {
        //
    }
}
