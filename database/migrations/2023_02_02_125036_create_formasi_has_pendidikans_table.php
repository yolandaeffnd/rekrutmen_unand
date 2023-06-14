<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormasiHasPendidikansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formasi_has_pendidikans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_formasi');
            $table->unsignedBigInteger('id_pendidikan');
            $table->foreign('id_formasi')->references('id')->on('formasis');
            $table->foreign('id_pendidikan')->references('id')->on('pendidikans');
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
        Schema::dropIfExists('formasi_has_pendidikans');
    }
}
