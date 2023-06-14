<?php

namespace App\Http\Controllers;

use App\Models\{User, Registrasi, Biodata, UploadDokumen};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use ZipArchive;
use File;

class RekrutmenCon extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('level', ['pelamar'])->paginate(20);

        return view('rekrutmen.pelamar.pelamar', compact('users'));
    }

    public function index_datatable()
    {
        $users = User::where('level', ['pelamar'])->get();

        return view('rekrutmen.pelamar.pelamar-datatable', compact('users'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        $registrasi = Registrasi::with('formasi')->where('id_user', $user->id)->firstOrFail();
        $biodata = Biodata::where('id_registrasi', $registrasi->id)->firstOrFail();
        $uploadDokumen = UploadDokumen::where('id_registrasi', $registrasi->id)->firstOrFail();
        // dd($biodata);
        $dataUserPelamar = [
            'main' => [
                'id_user'           => $registrasi->id,
            ],

            'formasi' => [
                'Jenis Formasi'        => $registrasi->formasi()->exists() ? $registrasi->formasi->jenis_formasi . ' - ' . $registrasi->formasi->jabatan . ' - ' . $registrasi->formasi->lokasi_penempatan : '',
            ],

            'biodata' => [
                'NIK'                   => $biodata->nik,
                'NAMA'                  => $biodata->nama,
                'TEMPAT LAHIR'          => $biodata->tempatlahir,
                'TANGGAL LAHIR'         => $biodata->tgllahir,
                'JENIS KELAMIN'         => $biodata->jk == 'L' ? 'Laki-Laki' : ($biodata->jk == 'P' ? 'Perempuan' : ''),
                'NOMOR IJAZAH'          => $biodata->noijazah,
                'PROVINSI'              => $biodata->provinsi()->exists() ? $biodata->provinsi->nama : '',
                'KOTA'                  => $biodata->kota()->exists() ? $biodata->kota->nama : '',
                'PROGRAM STUDI'         => $biodata->pendidikan()->exists() ? $biodata->pendidikan->name : '',
                'ALAMAT'                => $biodata->alamat,
                'NAMA PERGURUAN TINGGI' => $biodata->namapt,
                'GELAR DEPAN'           => $biodata->gelardepan,
                'GELAR BELAKANG'        => $biodata->gelarbelakang,
                'TAHUN IJAZAH'          => $biodata->tahunijazah,
                'TANGGAL IJAZAH'        => $biodata->tglijazah,
                'IPK'                   => $biodata->ipk,
            ],

            'file' => [
                'KTP ASLI'              => $uploadDokumen->ktpAsli,
                'IJAZAH TERAKHIR'       => $uploadDokumen->IjazahTerakhir,
                'TRANSKRIP NILAI'       => $uploadDokumen->transkripNilai,
                'PAS POTO'              => $uploadDokumen->pasPoto,
                'SERTIFIKAT PENDUKUNG'  => $uploadDokumen->sertifikatPedukung,
                'SURAT LAMARAN'         => $uploadDokumen->suratLamaran,
                'SURAT PENGALAMAN'      => $uploadDokumen->suratPengalaman,
                'SKCK'      => $uploadDokumen->skck,
            ],


        ];

        return view('rekrutmen.pelamar.pelamar-detail', compact('user', 'dataUserPelamar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function zipCreate(Request $request)
    {
        $name_zip = $request->name;
        $files_upload = $request->file_uploads;
        $req_berkas = json_decode($files_upload, true);
        // dd($req_berkas);
        $zip = new ZipArchive();

        $fileName = $name_zip . '.zip';

        if ($zip->open(public_path($fileName), ZipArchive::CREATE) === true) {
            // $files = File::files(public_path('zip'));

            // foreach ($files as $key => $value) {
            //     $file = basename($value);
            //     $zip->addFile($value, $file);
            // }


            $berkas = $req_berkas;
            foreach ($berkas as $key => $b) {
                $file = pathinfo(public_path($b));
                //parameter pertama berisi path/link dari berkas yang akan kita arsipkan kedalam zip sedangkan parameter kedua merupakan path/link/filename baru yang ada di dalam arsip zip
                $zip->addFile(public_path($b), $name_zip.'-'.$key.'.'.$file['extension']);
            }

            $zip->close();
        }

        return response()->download(public_path($fileName))->deleteFileAfterSend(true);
    }
}
