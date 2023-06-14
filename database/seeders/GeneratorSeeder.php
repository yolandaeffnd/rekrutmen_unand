<?php

namespace Database\Seeders;

use App\Models\{Formasi, Pendidikan, PeriodePenerimaan, Prodi, Unit};
use Illuminate\Database\Seeder;

class GeneratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PeriodePenerimaan::create(
            [
                'kode' => '202301',
                'name' => 'Direktorat Teknologi dan Informasi'
            ]
        );
        PeriodePenerimaan::create(
            [
                'kode' => '202302',
                'name' => 'MIPA'
            ]
        );


        Formasi::create(
            [
                'id' => 1,
                'kode_periode_penerimaan' => PeriodePenerimaan::where('kode', '202301')->first()->kode,
                'id_unit' => Unit::where('name', 'MIPA')->first()->id,
                'jabatan' => 'Tendik - Programmer',
                'lokasi_penempatan' => 'Direktorat Teknologi dan Informasi',
                'kode_penempatan' => 10006,
                'jenis_formasi' => 'Umum',
                'kebutuhan' => 0
            ]
        );

        Formasi::create(
            [
                'id' => 2,
                'kode_periode_penerimaan' => PeriodePenerimaan::where('kode', '202302')->first()->kode,
                'id_unit' => Unit::where('name', 'MIPA')->first()->id,
                'jabatan' => 'Dosen - Asisten Ahli',
                'lokasi_penempatan' => 'Prodi Data Science',
                'kode_penempatan' => 44201,
                'jenis_formasi' => 'Umum',
                'kebutuhan' => 2
            ]
        );


        Pendidikan::create(
            [
                'name' => 'S1-Teknik Informatika'
            ]
        );


        Pendidikan::create(
            [
                'name' => 'S2-Teknik Informatika'
            ]
        );

        Pendidikan::create(
            [
                'name' => 'D3-Teknik Kimia'
            ]
        );

        Pendidikan::create(
            [
                'name' => 'S2-Biologi'
            ]
        );
    }
}
