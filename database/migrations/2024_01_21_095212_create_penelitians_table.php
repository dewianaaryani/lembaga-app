<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penelitians', function (Blueprint $table) {
            $table->id();
            $table->string('nidn');
            $table->string('no_penugasan');
            $table->date('tk_penugasan');
            $table->string('judul')->nullable();
            $table->string('anggota1')->nullable();
            $table->string('anggota2')->nullable();
            $table->string('fakultas')->nullable();
            $table->string('skema_penelitian')->nullable();
            $table->string('program_hibah')->nullable();
            $table->string('hak_cipta')->nullable();
            $table->string('kontrak_riset')->nullable();
            $table->string('status')->nullable();
            $table->string('kontrak_lddikti')->nullable();
            $table->date('tk_lddikti')->nullable();
            $table->string('no_tanggal_dipa')->nullable();
            $table->string('prototype')->nullable();
            $table->string('publikasi')->nullable();
            $table->integer('dana')->nullable();
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
        Schema::dropIfExists('penelitians');
    }
};
