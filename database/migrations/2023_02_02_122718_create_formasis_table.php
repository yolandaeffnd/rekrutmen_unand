<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formasis', function (Blueprint $table) {
            $table->id();
            $table->string('kode_periode_penerimaan');
            $table->foreign('kode_periode_penerimaan')->references('kode')->on('periode_penerimaans');
            $table->foreignId('id_unit')->nullable()->constrained('units');
            $table->string('jabatan');
            $table->string('lokasi_penempatan');
            $table->integer('kode_penempatan');
            $table->foreign('kode_penempatan')->references('kode_prodi')->on('prodis');
            $table->string('jenis_formasi');
            $table->string('kebutuhan');
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
        Schema::dropIfExists('formasis');
    }
}
