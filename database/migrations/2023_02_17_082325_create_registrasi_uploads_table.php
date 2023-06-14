<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrasiUploadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrasi_uploads', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->constrained('users');
            $table->foreignId('id_registrasi')->constrained('registrasis');

            $data_form = [
                'ktpAsli' => [],
                'IjazahTerakhir' => [],
                'transkripNilai' => [],
                'pasPoto' => [],
                'sertifikatPedukung' => [],
                'suratLamaran' => [],
                'suratPengalaman' => [],
                'skck' => [],
            ];

            foreach ($data_form as $key => $value) {
                $table->string($key, 125)->nullable();
            }
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registrasi_uploads');
    }
}
