<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotifsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifs', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->foreignId('id_user')->constrained('users');
            $table->string('judul');
            $table->foreignId('id_formasi')->constrained('formasis');
            $table->string('tahapan');
            $table->longText('isi');
            $table->enum('publish',['0','1'])->default('1');

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
        Schema::dropIfExists('notifs');
    }
}
