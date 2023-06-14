<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{Unit};

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //FAKULTAS/UNIT
        Unit::create(['name' => 'REKTORAT']);
        Unit::create(['name' => 'PASCA SARJANA']);
        Unit::create(['name' => 'MIPA']);
        Unit::create(['name' => 'KESEHATAN MASYARAKAT']);
        Unit::create(['name' => 'PETERNAKAN']);
        Unit::create(['name' => 'TEKNOLOGI PERTANIAN']);
        Unit::create(['name' => 'FISIP']);
        Unit::create(['name' => 'ILMU BUDAYA']);
        Unit::create(['name' => 'LPPM']);
        Unit::create(['name' => 'LP3M']);
        Unit::create(['name' => 'TEKNOLOGI INFORMASI']);
        Unit::create(['name' => 'PERTANIAN']);
        Unit::create(['name' => 'KEDOKTERAN']);
        Unit::create(['name' => 'EKONOMI']);
        Unit::create(['name' => 'FARMASI']);
        Unit::create(['name' => 'RUMAH SAKIT']);
        Unit::create(['name' => 'TEKNIK']);
        Unit::create(['name' => 'LPTIK']);
        Unit::create(['name' => 'UPT PERPUSTAKAAN']);
        Unit::create(['name' => 'UPT PUSAT BAHASA']);
        Unit::create(['name' => 'UPT PERCETAKKAN-JATI']);
        Unit::create(['name' => 'KLINIK MEDIKA ANDALAS']);
        Unit::create(['name' => 'ASRAMA UNAND']);
        Unit::create(['name' => 'GD. PKM']);
        Unit::create(['name' => 'KEDOKTERAN GIGI']);
        Unit::create(['name' => 'KEPERAWATAN']);
        Unit::create(['name' => 'HUKUM']);
        Unit::create(['name' => 'UPT ARSIP']);
        Unit::create(['name' => 'UPT Labor Dasar dan Sentral']);
        Unit::create(['name' => 'KAMPUS UNAND PAYAKUMBUH']);
        Unit::create(['name' => 'Direktorat Pengembangan Usaha dan Bisnis']);
        Unit::create(['name' => 'PASCASARJANA S3 ILMU PERTANIAN']);
    }
}
