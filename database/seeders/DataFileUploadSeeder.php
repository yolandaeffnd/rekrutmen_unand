<?php

namespace Database\Seeders;

use App\Models\GudangData;
use Illuminate\Database\Seeder;

class DataFileUploadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'ktpAsli' => [
                'label' => 'Scan KTP Asli',
                'format' => ['pdf'],
            ],
            'IjazahTerakhir' => [
                'label' => 'Scan File Ijazah Terakhir Asli',
                'format' => ['pdf'],
            ],
            'transkripNilai' => [
                'label' => 'Scan File Transkrip Nilai Asli',
                'format' => ['pdf'],
            ],
            'pasPoto' => [
                'label' => 'Pas Foto berwarna latar merah untuk perempuan, biru untuk laki-laki',
                'format' => ['png','jpg','jpeg'],
            ],
            'sertifikatPedukung' => [
                'label' => 'Scan Sertifikat Keahlian/Kompetensi Asli, jika lebih dari 1 maka dijadikan 1 file pdf',
                'format' => ['pdf'],
            ],
            'suratLamaran' => [
                'label' => 'Surat Lamaran yang diketik menggunakan komputer, ditujukan kepada Wakil Rektor III Universitas Andalas',
                'format' => ['pdf'],
            ],
            'suratPengalaman' => [
                'label' => 'Surat Pengalaman Kerja (jika ada)',
                'format' => ['pdf'],
            ],
            'skck' => [
                'label' => 'SKCK',
                'format' => ['pdf'],
            ],
        ];

        GudangData::create(
            [
                'name' => 'jenis-file-dokumen-upload',
                'data' => json_encode($data)
            ]
        );
    }
}
