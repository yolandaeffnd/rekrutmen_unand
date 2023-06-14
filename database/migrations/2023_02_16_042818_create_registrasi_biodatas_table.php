<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrasiBiodatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrasi_biodatas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->constrained('users');
            $table->foreignId('id_registrasi')->constrained('registrasis');
            $table->string('nik', 40)->nullable();
            $table->string('nama', 100)->nullable();
            $table->string('tempatlahir', 40)->nullable();
            $table->date('tgllahir')->nullable();
            $table->enum('jk', array(['L', 'P']))->nullable();
            $table->string('hp')->nullable();
            $table->integer('idprovinsi')->nullable();
            $table->integer('idkota')->nullable();
            $table->integer('idprodi')->nullable();
            //  $table->foreign('idprovinsi')->references('id')->on('provinsi');
            //  $table->foreign('idkota')->references('id')->on('kotakabupaten');
            $table->string('alamat', 100)->nullable();
            //   $table->foreign('idprodi')->references('id')->on('prodi');
            $table->string('namapt', 100)->nullable();
            $table->string('gelardepan', 40)->nullable();
            $table->string('gelarbelakang', 40)->nullable();
            $table->string('noijazah', 100)->nullable();
            $table->integer('tahunijazah')->nullable();
            $table->date('tglijazah')->nullable();
            $table->float('ipk')->nullable();
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
        Schema::dropIfExists('registrasi_biodatas');
    }
}
