<?php

namespace Database\Seeders;

use App\Models\{Formasi, Pendidikan};
use Illuminate\Database\Seeder;

class FormasiHasPendidikanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Formasi::where('id', 1)->each(function ($r) {
            $r->formasi_pendidikans()->attach(
                Pendidikan::where('id', 1)->first()->id
            );
        });
        Formasi::where('id', 1)->each(function ($r) {
            $r->formasi_pendidikans()->attach(
                Pendidikan::where('id', 3)->first()->id
            );
        });
        Formasi::where('id', 2)->each(function ($r) {
            $r->formasi_pendidikans()->attach(
                Pendidikan::where('id', 1)->first()->id
            );
        });
        Formasi::where('id', 3)->each(function ($r) {
            $r->formasi_pendidikans()->attach(
                Pendidikan::where('id', 2)->first()->id
            );
        });
    }
}
