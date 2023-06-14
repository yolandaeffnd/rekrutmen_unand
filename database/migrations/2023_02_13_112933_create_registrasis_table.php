<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrasis', function (Blueprint $table) {
            $table->id();
            $table->longText('nomor_registrasi')->nullable();
            $table->foreignId('id_user')->constrained('users');
            $table->foreignId('id_formasi')->nullable()->constrained('formasis');
            $table->enum('status', array(['update', 'dikirim']))->default('update');
            $table->dateTime('waktu_dikirim')->nullable();
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
        Schema::dropIfExists('registrasis');
    }
}
