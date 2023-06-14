<?php

namespace App\Http\Controllers\Pelamar;

use App\Http\Controllers\Controller;
use App\Models\{Biodata, Formasi, GudangData, Kota, Pendidikan, Prodi, Provinsi, Registrasi, UploadDokumen, User};
use PDF;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth, Validator};
use Illuminate\Support\Str;

class PendaftaranController extends Controller
{
    public function regStart(Request $request)
    {
        $user = Auth::user();
        // $this->validate($request, []);

        $execute = Registrasi::firstOrCreate(
            ['id_user' =>  $user->id]
        );

        Biodata::firstOrCreate(
            [
                'id_user' =>  $user->id,
                'id_registrasi' =>  $execute->id
            ]
        );

        UploadDokumen::firstOrCreate(
            [
                'id_user' =>  $user->id,
                'id_registrasi' =>  $execute->id
            ]
        );


        return redirect(route('reg-biodata'))->with('success', 'Silahkan Lengkapi Data Biodata');
    }


    public function biodataShow()
    {
        $user = Auth::user();
        $registrasi = Registrasi::where('id_user', $user->id)->firstOrFail();
        $biodata = Biodata::where('id_registrasi', $registrasi->id)->firstOrFail();
        $wilayah_provinsi = Provinsi::all();
        $wilayah_kota = Kota::all();
        // $prodi = Prodi::all();
        $pendidikan = Pendidikan::all();

        // dd($wilayah_provinsi);
        // $result = DB::table('pelanggan')->where('kota','Jakarta')->get();

        // $biodata = Biodata::where('id_registrasi', $registrasi->id)->first();

        //echo "home Pelamar";
        return view('pelamar.biodata', compact('user', 'biodata', 'wilayah_provinsi', 'wilayah_kota', 'pendidikan'));
    }


    public function biodataStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            // 'username' => 'required|string|max:99|unique:users',
            'nik' => 'required|string|max:40',
            'nama' => 'required|string|max:100',
            'tempatlahir' => 'required|string|max:100',
            'tgllahir' => 'required|date',
            'jk' => 'required|string|max:5',
            'noijazah' => 'required|string',
            'idprovinsi' => 'required|numeric',
            'idkota' => 'required|numeric',
            'idprodi' => 'required|numeric',
            'alamat' => 'required|string|max:500',
            'namapt' => 'required|string|max:200',
            'gelardepan' => 'required|string|max:40',
            'gelarbelakang' => 'required|string|max:40',
            'tahunijazah' => 'required|numeric',
            'tglijazah' => 'required|date',
            'ipk' => 'required|numeric',
            'hp' => 'required|string|max:200'

        ]);

        $attributeNames = array(
            'nik'           => 'NIK',
            'nama'          => 'NAMA',
            'tempatlahir'   => 'TEMPAT LAHIR',
            'tgllahir'      => 'TANGGAL LAHIR',
            'jk'            => 'JENIS KELAMIN',
            'noijazah'   => 'NOMOR IJAZAH',
            'idprovinsi'    => 'PROVINSI',
            'idkota'        => 'KOTA/KABUPATEN',
            'idprodi'       => 'PROGRAM STUDI',
            'alamat'        => 'ALAMAT',
            'namapt'        => 'NAMA PERGURUAN TINGGI',
            'gelardepan'    => 'GELAR DEPAN',
            'gelarbelakang' => 'GELAR BELAKANG',
            'noijazah'   => 'NOMOR IJAZAH',
            'tahunijazah'   => 'TAHUN IJAZAH',
            'tglijazah'     => 'TANGGAL IJAZAH',
            'ipk'           => 'IPK',
            'hp'           => 'NOMOR HP'
        );

        $validator->setAttributeNames($attributeNames);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator)->with('error', 'Data belum terisi dengan benar');
        }

        $user = Auth::user();
        $registrasi = Registrasi::where('id_user', $user->id)->firstOrFail();
        $biodata = Biodata::where('id_registrasi', $registrasi->id)->firstOrFail();

        $biodata->nik = $request->nik;
        $biodata->nama = $request->nama;
        $biodata->tempatlahir = $request->tempatlahir;
        $biodata->tgllahir = $request->tgllahir;
        $biodata->jk = $request->jk;
        $biodata->noijazah = $request->noijazah;
        $biodata->idprovinsi = $request->idprovinsi;
        $biodata->idkota = $request->idkota;
        $biodata->idprodi = $request->idprodi;
        $biodata->alamat = $request->alamat;
        $biodata->namapt = $request->namapt;
        $biodata->gelardepan = $request->gelardepan;
        $biodata->gelarbelakang = $request->gelarbelakang;
        $biodata->tahunijazah = $request->tahunijazah;
        $biodata->tglijazah = $request->tglijazah;
        $biodata->ipk = $request->ipk;
        $biodata->hp = $request->hp;
        $biodata->update();

        return redirect(route('reg-formasi'))->with('success', 'Biodata Berhasil Disimpan');
    }

    public function formasiShow()
    {
        $user = Auth::user();
        $formasis = Formasi::all();
        $registrasi = Registrasi::where('id_user', $user->id)->firstOrFail();

        //echo "home Pelamar";
        return view('pelamar.formasi', compact('user', 'formasis', 'registrasi'));
    }

    public function formasiStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'idformasi' => 'required|integer'

        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator)->with('error', 'Data belum terisi dengan benar');
        }

        $user = Auth::user();
        $registrasi = Registrasi::where('id_user', $user->id)->firstOrFail();

        $registrasi->id_formasi = $request->idformasi;
        $registrasi->update();

        return redirect(route('reg-upload-berkas'))->with('success', 'Formasi Berhasil Disimpan');
    }

    public function uploadBerkasShow()
    {
        $user = Auth::user();
        $data_form = GudangData::where('name', 'jenis-file-dokumen-upload')->firstOrFail();
        $registrasi = Registrasi::where('id_user', $user->id)->firstOrFail();
        $upload_dokumen = UploadDokumen::where('id_registrasi', $registrasi->id)->firstOrFail();
        // $upload_dokumen = UploadDokumen::where('id_user', $user->id)->first();
        // var_dump($upload_dokumen->id);
        //echo "home Pelamar";
        return view('pelamar.upload-berkas', compact('user', 'upload_dokumen', 'data_form'));
    }

    public function uploadBerkasStore(Request $request)
    {
        $user = Auth::user();
        $data = array();
        $data_form_get = GudangData::where('name', 'jenis-file-dokumen-upload')->firstOrFail();
        $data_form = json_decode($data_form_get->data);
        $kode_form = $request->kode;
        $format = $data_form->$kode_form->format;

        // dd($data_form->$kode_form->format);
        $validator = Validator::make($request->all(), [
            'file' => ['required', array_merge(['mimes'], $format), ['max', 2048]]

        ]);

        if ($validator->fails()) {
            $data['success'] = 0;
            $data['error'] = $validator->errors()->first('file'); // Error response
        } else {
            $registrasi = Registrasi::where('id_user', $user->id)->firstOrFail();
            $fileModel = UploadDokumen::where('id_registrasi', $registrasi->id)->firstOrFail();

            if ($request->file('file')) {
                $file = $request->file('file');
                // File extension
                $extension = $file->getClientOriginalExtension();

                $filename = md5($user->id) . '_' . rand() . '_' . time() . '.' . $extension;
                // $filename = $request->name . '_' .time().'_' . $file->getClientOriginalName();


                // File upload location
                $location = 'storage/';

                $filePath = $file->storeAs('files/pendaftaran', $filename, 'public');

                $field = $request->kode;
                $fileModel->$field = $location . $filePath;
                $fileModel->update();

                $filepath_url = url($location . $filePath);

                // Response
                $data['success'] = 1;
                $data['message'] = 'Uploaded Successfully!';
                $data['filepath'] = $filepath_url;
                $data['extension'] = $extension;
            } else {
                // Response
                $data['success'] = 2;
                $data['message'] = 'File not uploaded.';
            }
        }

        return response()->json($data);
    }

    public function uploadBerkasDestroy(Request $request)
    {
        $user = Auth::user();
        $data = array();

        $validator = Validator::make($request->all(), [
            'kode' => 'required|max:100',

        ]);

        $field = $request->kode;

        $upload = UploadDokumen::firstOrCreate(
            ['id_user' =>  $user->id]
        );
        $upload->$field = null;
        $upload->update();

        $data['success'] = 1;
        $data['message'] = 'Deleted Successfully!';

        return response()->json($data);
    }

    public function uploadBerkasNext(Request $request)
    {
        $user = Auth::user();
        $registrasi = Registrasi::where('id_user', $user->id)->firstOrFail();
        $uploadDokumen = UploadDokumen::where('id_registrasi', $registrasi->id)->firstOrFail();

        $data_form_call = GudangData::where('name', 'jenis-file-dokumen-upload')->firstOrFail();
        $data_form = json_decode($data_form_call->data, true);
        foreach ($data_form as $key => $val) {
            if ($uploadDokumen->$key == null) {
                // return redirect('apps/registration/upload')->with('error', 'File Dokumen Belum Lengkap Diupload, Cek Kembali !!');
                return redirect()->back()->with('error', 'File Dokumen Belum Lengkap Diupload, Cek Kembali !!');
            }
        }


        return redirect(route('reg-resume'))->with('success', 'File Dokumen Berhasil Disimpan');
    }

    public function resumeShow()
    {
        $user = Auth::user();
        $registrasi = Registrasi::with('formasi')->where('id_user', $user->id)->firstOrFail();
        $biodata = Biodata::where('id_registrasi', $registrasi->id)->firstOrFail();
        $uploadDokumen = UploadDokumen::where('id_registrasi', $registrasi->id)->firstOrFail();

        $dataResume = [
            'main' => [
                'id_user'           => $registrasi->id,
            ],

            'formasi' => [
                'Jenis Formasi'        => $registrasi->formasi->jenis_formasi . ' - ' . $registrasi->formasi->jabatan . ' - ' . $registrasi->formasi->lokasi_penempatan,
            ],

            'biodata' => [
                'NIK'                   => $biodata->nik,
                'NAMA'                  => $biodata->nama,
                'TEMPAT LAHIR'          => $biodata->tempatlahir,
                'TANGGAL LAHIR'         => $biodata->tgllahir,
                'JENIS KELAMIN'         => $biodata->jk == 'L' ? 'Laki-Laki' : ($biodata->jk == 'P' ? 'Perempuan' : ''),
                'NOMOR IJAZAH'          => $biodata->noijazah,
                'PROVINSI'              => $biodata->provinsi->nama,
                'KOTA'                  => $biodata->kota->nama,
                'PROGRAM STUDI'         => $biodata->pendidikan->name,
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
        // dd($dataResume);
        return view('pelamar.resume', compact('dataResume'));
    }


    public function resumeStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "validasi.*"  => "required|integer|max:3",
            "validasiConfirm.*"  => "required|integer|max:3",
        ]);

        if (count($request->validasi) !== count($request->validasiConfirm)) {
            return redirect()->back()->withInput()->withErrors($validator)->with('error', 'Data belum divalidasi dengan benar');
        }

        $user = Auth::user();
        $registrasi = Registrasi::with('biodata')->where('id_user', $user->id)->firstOrFail();
        // $biodata = Biodata::where('id_registrasi', $registrasi->id)->firstOrFail();
        // $uploadDokumen = UploadDokumen::where('id_registrasi', $registrasi->id)->firstOrFail();

        $nomor_registrasi = $registrasi->formasi->id . $registrasi->biodata->id . $registrasi->id;

        // dd($nomor_registrasi);

        $registrasi->status = 'dikirim';
        $registrasi->waktu_dikirim = Carbon::now()->format('Y-m-d H:i:s');
        $registrasi->nomor_registrasi = $nomor_registrasi;
        $registrasi->update();

        return redirect(route('dashboard-pelamar'))->with('success', 'Dokumen Pendaftaran Berhasil Dikirim');
    }


    public function cetakKartuPeserta()
    {
        $user = Auth::user();
        $registrasi = Registrasi::with('formasi')->where('id_user', $user->id)->firstOrFail();
        $biodata = Biodata::where('id_registrasi', $registrasi->id)->firstOrFail();
        $uploadDokumen = UploadDokumen::where('id_registrasi', $registrasi->id)->firstOrFail();

        $dataResume_generate = [
            'main' => [
                'id_user'           => $registrasi->id,
                'nomor_reg'           => $registrasi->nomor_registrasi,
                'waktu_dikirim'           => $registrasi->waktu_dikirim,
                'date_print'           => Carbon::now()->format('Y-m-d H:i:s'),
            ],

            'formasi' => [
                'Jenis Formasi'        => $registrasi->formasi->jenis_formasi . ' - ' . $registrasi->formasi->jabatan . ' - ' . $registrasi->formasi->lokasi_penempatan,
            ],

            'biodata' => [
                'NIK'                   => $biodata->nik,
                'Nama'                  => $biodata->nama,
                'Tempat Lahir'          => $biodata->tempatlahir,
                'Tanggal Lahir'         => $biodata->tgllahir,
                'Jenis Kelamin'         => $biodata->jk == 'L' ? 'Laki-Laki' : ($biodata->jk == 'P' ? 'Perempuan' : ''),
                'Nomor Ijazah'          => $biodata->noijazah,
                'Provinsi'              => $biodata->provinsi->nama,
                'Kota/Kabupaten'        => $biodata->kota->nama,
                'Program Studi'         => $biodata->pendidikan->name,
                'Alamat'                => $biodata->alamat,
                'Perguruan Tinggi'      => $biodata->namapt,
                'Gelar Depan'           => $biodata->gelardepan,
                'Gelar Belakang'        => $biodata->gelarbelakang,
                'Tahun Ijazah'          => $biodata->tahunijazah,
                'Tanggal Ijazah'        => $biodata->tglijazah,
                'IPK'                   => $biodata->ipk,
            ],
            'file' => [
                'KTP Asli'              => $uploadDokumen->ktpAsli,
                'Ijazah Terakhir'       => $uploadDokumen->IjazahTerakhir,
                'Transkrip Nilai'       => $uploadDokumen->transkripNilai,
                'Pas Poto'              => $uploadDokumen->pasPoto,
                'Sertifikat Pendukung'  => $uploadDokumen->sertifikatPedukung,
                'Surat Lamaran'         => $uploadDokumen->suratLamaran,
                'Surat Pengalaman'      => $uploadDokumen->suratPengalaman,
                'SKCK'      => $uploadDokumen->skck,
            ],
        ];

        // $dataResume = json_decode(json_encode($dataResume_generate), false);

        $save_name = $dataResume_generate['biodata']['Nama'] . '-' . rand() . time();

        // $pdf = PDF::loadview('pelamar.cetak-kartu-peserta', compact('dataResume_generate'))->save($save_name . '.pdf');
        // dd($dataResume_generate['file']['Pas Poto']);

        $pdf = PDF::loadview('pelamar.cetak-kartu-peserta', compact('dataResume_generate'));
        $pdf->setOption(['dpi' => 96]);
        $pdf->output();
        $pdf->setPaper('A4', 'potrait')->setWarnings(false);
        // return $pdf->stream('kartu-peserta-universitas-andalas.pdf');
        // $canvas = $pdf->getDomPDF()->getCanvas();
        // $height = $canvas->get_height();
        // $width = $canvas->get_width();
        // $canvas->page_script('$pdf->set_opacity(.2, "Multiply");');
        // $canvas->page_text($width/100, $height/2, 'Universitas Andalas Universitas Andalas', $font = null, $size = 70, $color = array(0,0,0), $wordSpace = 2, $charSpace = 2, $angle = -30);
        return $pdf->download($save_name . '-kartu-peserta-universitas-andalas.pdf');
        // return view('pelamar.debug-cetak-kartu-peserta', compact('dataResume_generate'));
    }
}
